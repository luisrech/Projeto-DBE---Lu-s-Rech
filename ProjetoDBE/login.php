<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css2/style.css">
  <title>Restaurif - Login</title>
  <style>
    .erro {
    color: red;
}
  </style>
</head>
<body>
<main>
    <img src="assets/img/logo.png" class="logo-admin" alt="logo-restaurif">
    <div class="container">
      <div>
    <h1>Login Restaurif</h1>
  <section class="container-form">
  <form action="processar-login.php" method="POST">

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" class="input" placeholder="Digite o seu e-mail" required>
    <br>
    <br>
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" class="input" placeholder="Digite a sua senha" required>
    <?php if (isset($_GET['erro'])){?>
      <br>
      <label for="invalido" class="erro">E-mail ou senha inválida</label>

     
    <?php }
    ?>
    <br>
    <br>
    <input type="submit" class="botao-cadastrar" value="Entrar"/>
  </form>
      <p>Ainda não é cadastrado?<a href="cadastrar-usuario.php">Cadastre-se aqui</a></p>
  </section>
  </div>
</div>
</main>
</body>
</html>