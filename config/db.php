<?php 
// conecta ao banco de dados usando MySQli
$host = 'localhost'; // Servidor (normalmente localhost)
$user = 'root';      // usuário do MySQli
$pass = '';          // senha (em localhost, normalmente vazia)
$db = 'login_tutorial';  // Nome do banco de dados

$conn = new mysqli( $host,$user,$pass,$db);//cria conexão

if ($conn->connect_error) { // verifica se houve erro
    die ("falha na conexão:". $conn->connect_error); // Exibe erro e para tudo
    
}

?>
