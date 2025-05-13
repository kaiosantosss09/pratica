<?php 

require 'config/db.php';

// Verifica se o formulário foi enviado utilizando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pega os dados do formulário enviados pelo método POST
    $nome = $_POST['nome'];     // Nome digitando pelo usuário 
    $email = $_POST['email'];   // Email digitando pelo usuário 

    // Criptografia a senha antes de salvar no banco de dados
    // Password_hash() é uma função segura que utuliza o algoritmo bcrypt por padrão 
    $senha = password_hash(password: $_POST['senha'], algo: PASSWORD_DEFAULT); 

    // Prepara a query SQL com parâmetros (?) para evitar SQL Injection
    $stmt = $conn->prepare(query:"INSERT INTO usuários (nome, email, senha) VALUES (?,?,?)"); 

    // Substitui os parâmetros de query pelos valores reais de forma segura
    // "sss"  significa que estamos passando 3 strings (s = string)
    $stmt->bind_param(types: "sss", var: $nome, vars: $email, $senha);

    // Executa o query SQL no banco de dados
    if ($stmt->execute()) 
       // Se o cadastro 
 



}

?>