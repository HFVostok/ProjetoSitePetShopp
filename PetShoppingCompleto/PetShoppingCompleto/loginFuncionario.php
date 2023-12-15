<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Login</title>
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login <br>E vamos espalhar FELICIDADE</h1>
            <img src="img/CachorroB2.jpg" class="left-login-image" alt="Cachorro Modelo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>FUNCIONARIOS</h1>
                <form action="testLogin.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <div class="textfield">
                        <label for="re">Senha</label>
                        <input type="text" name="re" placeholder="re">
                    </div>
                    <a href="home.php"><button type="button" class="btn btn-outline-success">Home</button></a>
                    <a href="formularioFuncionario.php"><button type="button" class="btn btn-outline-success">Cadastro</button></a>
                    <input class="inputSubmit" type="submit" name="submit" valeu="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>