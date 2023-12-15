<?php

// CADASTRO


if (isset($_POST['submit'])) {


    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, senha, email,telefone,data_nasc,cidade,estado,endereco) 
    VALUES('$nome', '$senha','$email','$telefone','$data_nasc','$cidade','$estado','$endereco')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    <title>Cadastro</title>
</head>


<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu cadastro <br>E use nossos serviços</h1>
            <img src="img/cachorroB.jpg" class="left-login-image" alt="Cachorro Modelo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <form action="formulario.php" method="POST">
                    <fieldset>
                        <legend><b>Fórmulário de Cadastro</b></legend>
                        <div class="inputBox">
                            <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome">
                            <label for="nome" class="labelInput"></label>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="senha" id="senha" class="inputUser" required placeholder="Senha">
                            <label for="senha" class="labelInput"></label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" id="email" class="inputUser" required placeholder="Email">
                            <label for="email" class="labelInput"></label>
                        </div>
                        <div class="inputBox">
                            <input type="tel" name="telefone" id="telefone" class="inputUser" required required placeholder="Telefone">
                            <label for="telefone" class="labelInput"></label>
                        </div>
                        <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                        <br><br><br>
                        <div class="inputBox">
                            <input type="text" name="cidade" id="cidade" class="inputUser" required placeholder="Cidade">
                            <label for="cidade" class="labelInput"></label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="text" name="estado" id="estado" class="inputUser" required placeholder="Estado">
                            <label for="estado" class="labelInput"></label>
                        </div>
                        <br><br>
                        <div class="inputBox">
                            <input type="text" name="endereco" id="endereco" class="inputUser" required placeholder="Endereço">
                            <label for="endereco" class="labelInput"></label>
                        </div>
                        <br><br>
                        <a href="home.php"><button type="button" class="btn btn-outline-success">Home</button></a>
                        <a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
                        <input class="inputSubmit" type="submit" name="submit" valeu="Enviar">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>