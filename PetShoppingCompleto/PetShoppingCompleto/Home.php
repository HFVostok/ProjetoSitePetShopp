<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetDrogo</title>
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
                    <li><a class="dropdown-item" href="Home.php">INICIO</a></li>
                    <li><a class="dropdown-item" href="produtos.php">PRODUTOS</a></li>

                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav"></ul>
            </div>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            </form>

            <a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
            <a href="loginFuncionario.php"><button type="button" class="btn btn-outline-success">Funcionarios</button></a>

        </div>
    </nav>

    <!-- Imagem Banner -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center 
        align-items-center">
        <div class="content text-center">
            <h1 class="text-info">SEJA BEM VINDO</h1>
        </div>
    </div>


    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5">
        <H1>NOVIDADES</H1>
        <div class="linha1">
            <div class="pcards">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem; height:35rem;">
                            <img class="card-img-top" src="img/brinquedoGATO3.jfif" alt="Card image cap">
                            <div class="card-body">
                                <a href="Produtos.php">
                                    <h5 class="card-title">Casinha Para Gatos</h5>
                                </a>
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
                                <a href="Produtos.php">
                                    <h5 class="card-title">Ratinho Brincalhão</h5>
                                </a>
                                <p class="card-text">Um bixinho de morde para seu pilantrinha entretido.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">R$40,00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem; height:35rem;">
                            <img class="card-img-top" src="img/brinquedoDOG3.jfif" alt="Card imag cap">
                            <div class="card-body">
                                <a href="Produtos.php">
                                    <h5 class="card-title">Mordedor Fofo</h5>
                                </a>
                                <p class="card-text">Um bixinho de morde para seu pilantrinha entretido.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">R$50,00</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 PetDrogo, Inc</span>
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

    <div class="container my-5 p-4 rounded bg-dark text-light">
        <h2>Objetivos do PetDrogo</h2>
        <p>O PetDrogo tem o compromisso de oferecer produtos e serviços de alta qualidade para cuidar e mimar os seus animais de estimação. Nossa missão é proporcionar uma experiência única e satisfatória para você e seu pet, promovendo o bem-estar e a felicidade dos nossos clientes peludos.</p>
        <p>Contamos com uma ampla variedade de produtos, desde brinquedos até alimentos premium, e nossa equipe está sempre pronta para ajudar e aconselhar você na melhor escolha para o seu animal de estimação.</p>
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