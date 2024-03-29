<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="styles.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Home.php">PetDrogo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.html">Produtos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <header>
        <span>Carrinho de compras do <b>fernandev</b></span>
    </header>
    <main>
        <div class="page-title">Seu Carrinho</div>
        <div class="content">
            <section>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="product">
                                    <img src="https://picsum.photos/100/120" alt="" />
                                    <div class="info">
                                        <div class="name">Nome do produto</div>
                                        <div class="category">Categoria</div>
                                    </div>
                                </div>
                            </td>
                            <td>R$ 120</td>
                            <td>
                                <div class="qty">
                                    <button><i class="bx bx-minus"></i></button>
                                    <span>2</span>
                                    <button><i class="bx bx-plus"></i></button>
                                </div>
                            </td>
                            <td>R$ 240</td>
                            <td>
                                <button class="remove"><i class="bx bx-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product">
                                    <img src="https://picsum.photos/100/120" alt="" />
                                    <div class="info">
                                        <div class="name">Nome do produto</div>
                                        <div class="category">Categoria</div>
                                    </div>
                                </div>
                            </td>
                            <td>R$ 120</td>
                            <td>
                                <div class="qty">
                                    <button><i class="bx bx-minus"></i></button>
                                    <span>2</span>
                                    <button><i class="bx bx-plus"></i></button>
                                </div>
                            </td>
                            <td>R$ 240</td>
                            <td>
                                <button class="remove"><i class="bx bx-x"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product">
                                    <img src="https://picsum.photos/100/120" alt="" />
                                    <div class="info">
                                        <div class="name">Nome do produto</div>
                                        <div class="category">Categoria</div>
                                    </div>
                                </div>
                            </td>
                            <td>R$ 120</td>
                            <td>
                                <div class="qty">
                                    <button><i class="bx bx-minus"></i></button>
                                    <span>2</span>
                                    <button><i class="bx bx-plus"></i></button>
                                </div>
                            </td>
                            <td>R$ 240</td>
                            <td>
                                <button class="remove"><i class="bx bx-x"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <aside>
                <div class="box">
                    <header>Resumo da compra</header>
                    <div class="info">
                        <div><span>Sub-total</span><span>R$ 418</span></div>
                        <div><span>Frete</span><span>Gratuito</span></div>
                        <div>
                            <button>
                                Adicionar cupom de desconto
                                <i class="bx bx-right-arrow-alt"></i>
                            </button>
                        </div>
                    </div>
                    <footer>
                        <span>Total</span>
                        <span>R$ 418</span>
                    </footer>
                </div>
                <button>Finalizar Compra</button>
            </aside>
        </div>
    </main>
</body>

</html>