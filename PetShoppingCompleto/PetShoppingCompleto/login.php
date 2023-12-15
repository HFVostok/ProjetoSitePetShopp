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
            <h1>Faça login <br>E entre em um novo MUNDO</h1>
            <img src="img/CachorroA2.jpg" class="left-login-image" alt="Cachorro Modelo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>CLIENTES</h1>
                <form action="testLogin.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <a href="home.php"><button type="button" class="btn btn-outline-success">Home</button></a>
                    <a href="formulario.php"><button type="button" class="btn btn-outline-success">Cadastro</button></a>
                    <input class="inputSubmit" type="submit" name="submit" valeu="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>