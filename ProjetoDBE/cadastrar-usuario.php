<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css2/style.css">
    <title>Restaurif - Cadastro</title>
</head>
<body>
<main>
        <img src="assets/img/logo.png" class="logo-admin" alt="logo-restaurif">
    <div class="container">
        <div>
        <h1>Cadastro de Usuários</h1>
    <section class="container-form">
        <form action="processar-cadastro.php" method="post">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="input" placeholder="Digite o nome do usuário" required>
            <br>
            <br>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="input" placeholder="Digite seu email" required>
            <br>
            <br>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="input" placeholder="Digite uma senha" required>
            <br>
            <br>
            <input type="submit" name="cadastro" class="botao-cadastrar" value="Cadastrar usuario"/>
        </form>
    </div>
    </section>
</div>
</main>

<script>
        document.getElementById("btn-tela-login").addEventListener("click", function() {
            window.location.href = "login.php"; // Substitua pela página de login real
        });
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/index.js"></script>
</body>
</html>