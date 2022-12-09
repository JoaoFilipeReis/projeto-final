<?php 

require_once 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fonts.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header class="container-fluid">

        <div id="start" class="row">
            <div class="main-title col-12 d-flex justify-content-around justify-content-md-center">
                <div class="row">Sebastião Alves</div>
                <div class="row">
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebtn">
                        <img id="botao-menu-imagem" src="./public/imagens-desktop/menu.svg">
                    </button>
                </div>
            </div>
            <div class="linha-titulo col-auto mx-auto"></div>

            <nav id="menu-topo" class="col-12 navbar navbar-expand-md">
                <div class="collapse navbar-collapse d-block-md" id="collapsebtn">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-md-3">
                            <a class="nav-link menus active" href="home.php">Home</a>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link menus " href="autor.php">Autor</a>
                        </li>
                        <li class="nav-item mr-md-3 dropdown" id="li-menu-livros">
                            <a class="nav-link menus " href="" id="menu-livros" data-bs-toggle="dropdown">Livros</a>
                            <div id="submenu-livros" class="dropdown-menu">
                                <a class="dropdown-item submenus " href="livro1.php">Senhora do Amor e da Guerra</a>
                                <a class="dropdown-item submenus " href="livro2.php">O caracol estrábico</a>
                                <a class="dropdown-item submenus " href="livro3.php">O Coleccionador de amnésias</a>
                                <a class="dropdown-item submenus " href="livro4.php">O Velho que pensava que fugia</a>
                            </div>
                        </li>
                        <li class="nav-item mr-md-3">
                            <a class="nav-link menus" href="imprensa.php">Imprensa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menus" href="contactos.php">Contactos</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>

        <div id="cabecalho" class="row d-none d-md-block">
            <div id="carousel-desktop" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
                <ol class="carousel-indicators cabecalho-indicadores">
                    <li class="active mr-3" data-bs-target="#carousel-desktop" data-bs-slide-to="0"></li>
                    <li class=" mr-3" data-bs-target="#carousel-desktop" data-bs-slide-to="1"></li>
                    <li class=" mr-3" data-bs-target="#carousel-desktop" data-bs-slide-to="2"></li>
                    <li class=" mr-3" data-bs-target="#carousel-desktop" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="./public/imagens-desktop/cabecalho1.jpg" alt="Cabeçalho 1">
                        <div class="carousel-caption d-none d-md-block cabecalho-legendas">
                            <div class="banner-novidade">Novidade</div>
                            <div class="banner-titulo">Senhora do Amor e da Guerra</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro1.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>


                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-desktop/cabecalho2.jpg" alt="Cabeçalho 2">
                        <div class="carousel-caption d-none d-md-block cabecalho-legendas">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O caracol Estrábico</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro2.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>


                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-desktop/cabecalho3.jpg" alt="Cabeçalho 3">
                        <div class="carousel-caption d-none d-md-block cabecalho-legendas">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O Colecionador de amnésias</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro3.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>

                        </div>
                    </div>


                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-desktop/cabecalho4.jpg" alt="Cabeçalho 4">
                        <div class="carousel-caption d-none d-md-block cabecalho-legendas">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O Velho que pensava que fugia</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro4.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Mobile Header -->

        <div id="cabecalho-mobile" class="row d-block d-md-none">
            <div id="carousel-mobile" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
                <ol class="carousel-indicators cabecalho-indicadores-mobile">
                    <li class="active mr-3" data-bs-target="#carousel-mobile" data-bs-slide-to="0"></li>
                    <li class=" mr-3" data-bs-target="#carousel-mobile" data-bs-slide-to="1"></li>
                    <li class=" mr-3" data-bs-target="#carousel-mobile" data-bs-slide-to="2"></li>
                    <li class=" mr-3" data-bs-target="#carousel-mobile" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="./public/imagens-mobile/cabecalho1.jpg" alt="Cabeçalho 1">
                        <div class="carousel-caption d-block cabecalho-legendas-mobile">
                            <div class="banner-novidade">Novidade</div>
                            <div class="banner-titulo">Senhora do Amor e da Guerra</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro1.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-mobile/cabecalho2.jpg" alt="Cabeçalho 2">
                        <div class="carousel-caption d-block cabecalho-legendas-mobile">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O Caracol Estrábico</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro2.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-mobile/cabecalho3.jpg" alt="Cabeçalho 3">
                        <div class="carousel-caption d-block cabecalho-legendas-mobile">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O coleccionador de amnésias</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro3.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <img class="d-block img-fluid" src="./public/imagens-mobile/cabecalho4.jpg" alt="Cabeçalho 4">
                        <div class="carousel-caption d-block cabecalho-legendas-mobile">
                            <div class="banner-novidade-vazio"></div>
                            <div class="banner-titulo">O Velho que pensava que fugia</div>
                            <div class="banner-texto">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit magnam tempore odio recusandae ullam soluta, fuga nisi obcaecati. In deleniti rem, possimus velit quam nam voluptatem at autem odit? Tempore?</p>
                            </div>
                            <a href="livro4.php">
                                <button class="botao-sabermais-banner"></button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </header>