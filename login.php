<?php 
if(isset($_GET['sucesso'])) {
    //verifica se há o parâmetro'sucesso'na URL(ex:login.php?sucesso=1)
    //se existir,mostra uma mensagem de sucesso
    echo "<p style='color:green;>conta criada com sucesso!faça login.</p>";
}
if (isset($_GET['erro'])) {
    // Verifica se há o parâmetro 'erro' na URL (ex: login.php?erro=senha)

    if ($_GET['erro'] == 'senha') {
       // Se o erro for 'email', mostra mensgem de erro para senha incorreta
       echo "<p style='color: red;'>Senha incorreta.</p>";
    } elseif ($_GET['erro'] == 'email') {
      // Se o erro for 'email', mostra mensagem de erro para email não encontrado 
      echo "<p style='color: red;'>Email não encontrado.</p>";

    }
}
?>
<h2>LOGIN</h2>
<!-- Titulo da página -->

<form action="process_login.php" method="POST">
<!-- Inicio do formulário. Ao enviar, os dados irão para 'process-login.php' usando método POST -->

  EMAIL: <input type="email" name="email" required><br><br>
  <!-- Campo de entrada para o email. Obrigatório (required) -->

  SENHA: <input type="password" name="senha" required><br><br>
  <!-- Campo de entrada para a senha. Os caracteres são ocultos. Obrigatório -->

  <button type="submit">ENTRAR</button>
  <!-- Botão que envia o formulário para ser processado -->
</form>
<!-- Fim do formulário -->
<p>Não tem conta? <a href="register.php">Criar conta</a></p>
<!-- Link para redirecionar á tela de cadastro caso o usuário ainda não tenha conta -->
