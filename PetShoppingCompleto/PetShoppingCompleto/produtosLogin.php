<?php
session_start();


if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styleHome.css">


    <style>
        .banner-image {
            background-image: url(img/fundo3.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">

        <div class="container">
            <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/marca.png" alt="" width="60px">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="homeLogin.php">Inicio</a></li>
                    <li><a class="dropdown-item" href="produtosLogin.php">Produtos</a></li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav"></ul>
            </div>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            </form>

            <a href="carrinho.php"><button type="button" class="btn btn-outline-light"><i class="bi bi-cart"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg></i></button>
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <span class="nav-link" id="username">Bem vindo, Nome do Usuário</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Imagem Banner -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center 
        align-items-center">
        <div class="content text-center">
            <h1 class="text-info">De Todo o Amor ao seu PET</h1>
        </div>
    </div>


    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5">
        <div class="produtos">

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem; height:35rem;">
                        <img class="card-img-top" src="img/brinquedoGATO3.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Casinha Para Gatos</h5>
                            <p class="card-text">Uma casinha cheia de divertimento para seu felino </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$500,00</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; height:35rem;">
                        <img class="card-img-top" src="img/brinquedoGATO1.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Ratinho Brincalhão</h5>
                            <p class="card-text">Um bixinho de morde para seu pilantrinha entretido.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$40,00</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem; height:35rem;">
                        <img class="card-img-top" src="img/brinquedoDOG3.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mordedor Fofo</h5>
                            <p class="card-text">Um bixinho de morde para seu pilantrinha entretido.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">R$50,00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem; height:35rem;">
                    <img class="card-img-top" src="img/ComidaPET1.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Delicias</h5>
                        <p class="card-text">Um petisco delicioso a base de peixe e carne bovina.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$30,00</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem; height:35rem;">
                    <img class="card-img-top" src="img/TOSA.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">kit Tosa</h5>
                        <p class="card-text">Uma tosa feita cuidadosamente pra deixar seu Pet anda mais lindo.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$150,00</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem; height:35rem;">
                    <img class="card-img-top" src="img/banhoDOG.jfif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kit Banho</h5>
                        <p class="card-text">Um Banho quentinho e temperado para deixa o lindinho cheirosinho.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$150,00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© PetDrogo</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                window.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>