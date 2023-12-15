<?php
session_start();

// print_r ($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['re'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = $_POST['re'];

    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('SENHA: ' . $senha);

    $sql = "SELECT * FROM funcionarios WHERE and senha = '$senha' and re = '$re'";

    $result = $conexao->query($sql);

    // print_r($sql);
    // print_r($result);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['re']);
        header('Location: loginFuncionario.php');
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['re'] = $senha;
        header('Location: homeLogin.php');
    }
} else {
    header('Location: loginFuncionario.php');
}
