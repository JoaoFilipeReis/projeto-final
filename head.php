<?php require_once 'config.php'; ?>

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


  <header>
    <div class="container-fluid">
      <div class="row d-lg-none">
        <div class="col-8 d-flex align-items-center">
          <h1 class="fs-3 main-title">sebastião alves</h1>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
          <button class="headbtn" data-bs-toggle="collapse" data-bs-target="#collapsebtn">
            <img src="./public/imagens-desktop/menu.svg" alt="">
          </button>
        </div>
        <div class="collapse col-12" id="collapsebtn">

          <ul class="list-unstyled">
            <li>
              <a class="" href="#">HOME</a>
            </li>
            <li>
              <a class="" href="#">AUTOR</a>
            </li>
            <li>
              <a class="" href="#">LIVROS</a>
            </li>
            <li>
              <a class="" href="#">IMPRENSA</a>
            </li>
            <li>
              <a class="" href="#">CONTACTOS</a>
            </li>
          </ul>

        </div>
      </div>

    </div>

    <div class="horizontal-line"></div>

    <div class="carousel-mobile">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./public/imagens-mobile/cabecalho1.jpg" class="d-block w-100" alt="imagem 1">
            <div class="carousel-caption d-md-block">
              <p class="t-150">NOVIDADE</p>
              <h5>senhora do amor e da guerra</h5>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae quasi sunt nesciunt in consequuntur harum totam voluptates, est, fuga vel inventore aliquid beatae sed neque esse voluptatum ullam ratione ea?</p>
              <div class="d-flex justify-content-end">
                <button class="header-btn"></button>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./public/imagens-mobile/cabecalho2.jpg" class="d-block w-100" alt="imagem 2">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./public/imagens-mobile/cabecalho3.jpg" class="d-block w-100" alt="imagem 3">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./public/imagens-mobile/cabecalho4.jpg" class="d-block w-100" alt="imagem 4">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!--
    <div class="container">
      <div class="row">
        <div class="col-8 d-flex align-items-center">
          <h1 class="fs-3 text-white">SEBASTIÃO ALVES</h1>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
          <span class="text-white menu-button">MENU</span>
        </div>
        <div class="col-12 menu-header d-flex">
          <ul class="list-unstyled m-0 py-3">
            <li>
              <a class="text-white" href="">HOME</a>
            </li>
            <li>
              <a class="text-white" href="">AUTOR</a>
            </li>
            <li>
              <a class="text-white" href="">LIVROS</a>
            </li>
            <li>
              <a class="text-white" href="">IMPRENSA</a>
            </li>
            <li>
              <a class="text-white" href="">CONTACTOS</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="carousel-mobile">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./public/imagens-mobile/cabecalho1.jpg" class="d-block w-100" alt="imagem 1">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/imagens-mobile/cabecalho2.jpg" class="d-block w-100" alt="imagem 2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./public/imagens-mobile/cabecalho3.jpg" class="d-block w-100" alt="imagem 3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
-->
  </header>