<h2>Criar Conta</h2>
<!-- Inicio da página exibido para o usuário -->

<form action="process_register.php" method="POST">
<!-- Inicio do formulário. Os dados serão enviados para 'process_register.php' via método POST -->

     Nome: <input type="text" name="nome" required> <br><br>
     <!-- Campo para o usuário digitar seu nome. Obrigatório (required) -->

     Email: <input type="email" name="email" required> <br><br>
     <!-- Campo para o usuário digitar seu email. Navegador valida o formato de email. Obrigatório (required) -->

     Senha: <input type="password" name="senha" required> <br><br>
     <!-- Campo para digitar digitar a senha. O tipo "password" oculta os caracteres. Obrigatório -->

     <button type="sbmit">Cadastrar</button>
     <!-- Botão que envia os dados do formulário ao clicar -->
</form>
<!-- Fim do formulário -->

<p>Já tem conta? <a href="login.php"></a>Entrar</p>
<!-- Link para redirecionar á página de login, caso o usuário já tenha conta -->



</form>