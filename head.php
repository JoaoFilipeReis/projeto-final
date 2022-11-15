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
<!--
<header>
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h1 class="fs-3">SEBASTIÃO ALVES</h1>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
                <span class="text-white menu-button"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="29" viewBox="0 0 35 29">
                        <defs>
                            <clipPath id="clip-path">
                                <rect width="35" height="29" fill="none" />
                            </clipPath>
                        </defs>
                        <g id="Repeat_Grid_1" data-name="Repeat Grid 1" clip-path="url(#clip-path)">
                            <g transform="translate(-122.5 -140)">
                                <line id="Line_31" data-name="Line 31" x2="35" transform="translate(122.5 141.5)" fill="none" stroke="#b07d41" stroke-width="3" />
                            </g>
                            <g transform="translate(-122.5 -129)">
                                <line id="Line_31-2" data-name="Line 31" x2="35" transform="translate(122.5 141.5)" fill="none" stroke="#b07d41" stroke-width="3" />
                            </g>
                            <g transform="translate(-122.5 -118)">
                                <line id="Line_31-3" data-name="Line 31" x2="35" transform="translate(122.5 141.5)" fill="none" stroke="#b07d41" stroke-width="3" />
                            </g>
                        </g>
                    </svg></span>
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
                <img src="./public/imagens-mobile/cabecalho1.jpg" class="d-block w-100" alt="1">
                <div class="carousel-caption d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./public/imagens-mobile/cabecalho2.jpg" class="d-block w-100" alt="2">
                <div class="carousel-caption d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./public/imagens-mobile/cabecalho3.jpg" class="d-block w-100" alt="3">
                <div class="carousel-caption d-md-block">
                    <h1>O COLECIONADOR DE AMNÉSIAS</h1>
                    <br>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis a voluptatum quas nulla consectetur voluptate facere saepe cupiditate facilis fuga ex nesciunt tempora magnam, autem voluptatibus molestiae hic quam excepturi.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero obcaecati nemo atque cum accusamus rerum aliquid nobis. Deserunt, autem adipisci? Commodi beatae autem cumque harum blanditiis laborum veniam itaque perferendis!
                    </p>
                    <br>
                    <svg version="1.1" id="Component_1_40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 30" style="enable-background:new 0 0 120 30;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #B17E3B;
                            }

                            .st1 {
                                enable-background: new;
                            }

                            .st2 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <rect id="Rectangle_27" class="st0" width="120" height="30" />
                        <g class="st1">
                            <path class="st2" d="M27.6,20.1c-0.7,0-1.4-0.1-1.9-0.4c-0.5-0.3-0.9-0.6-1.3-1l1.2-1.2c0.6,0.6,1.3,1,2.1,1c0.4,0,0.8-0.1,1-0.3
		c0.2-0.2,0.3-0.4,0.3-0.7c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.3-0.8-0.3l-0.8-0.1c-0.9-0.1-1.5-0.4-1.9-0.8c-0.4-0.4-0.6-1-0.6-1.7
		c0-0.4,0.1-0.7,0.2-1s0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,1-0.5s0.8-0.2,1.3-0.2c0.6,0,1.2,0.1,1.7,0.3s0.9,0.5,1.2,0.9l-1.2,1.2
		c-0.2-0.2-0.4-0.4-0.7-0.6c-0.3-0.1-0.6-0.2-1.1-0.2c-0.4,0-0.7,0.1-0.9,0.2c-0.2,0.1-0.3,0.3-0.3,0.6c0,0.3,0.1,0.5,0.2,0.6
		c0.2,0.1,0.4,0.2,0.8,0.3l0.8,0.1c0.9,0.1,1.5,0.4,1.9,0.8s0.6,1,0.6,1.7c0,0.4-0.1,0.8-0.2,1.1c-0.1,0.3-0.4,0.6-0.6,0.9
		c-0.3,0.2-0.6,0.4-1,0.6C28.6,20.1,28.2,20.1,27.6,20.1z" />
                            <path class="st2" d="M37.6,20L37,18h-2.8l-0.6,2h-1.8l2.8-8.4h2.3l2.7,8.4H37.6z M35.6,13.3L35.6,13.3l-1,3.2h1.9L35.6,13.3z" />
                            <path class="st2" d="M40.6,11.6h4.1c0.7,0,1.2,0.2,1.6,0.6c0.4,0.4,0.6,0.9,0.6,1.6c0,0.3,0,0.6-0.1,0.8c-0.1,0.2-0.2,0.4-0.3,0.6
		c-0.1,0.1-0.3,0.2-0.5,0.3s-0.4,0.1-0.6,0.1v0.1c0.2,0,0.4,0,0.6,0.1c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.2,0.3,0.4,0.5,0.6
		s0.2,0.6,0.2,0.9c0,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.3,0.5-0.4,0.8s-0.4,0.4-0.7,0.5S45.4,20,45.1,20h-4.4V11.6z M42.5,15.1h1.8
		c0.2,0,0.4-0.1,0.6-0.2c0.1-0.1,0.2-0.3,0.2-0.6v-0.4c0-0.2-0.1-0.4-0.2-0.6c-0.1-0.1-0.3-0.2-0.6-0.2h-1.8V15.1z M42.5,18.5h2.1
		c0.2,0,0.4-0.1,0.6-0.2c0.1-0.1,0.2-0.3,0.2-0.6v-0.4c0-0.2-0.1-0.4-0.2-0.6s-0.3-0.2-0.6-0.2h-2.1V18.5z" />
                            <path class="st2" d="M48.6,20v-8.4h5.7v1.6h-3.9v1.7h3.3v1.6h-3.3v1.8h3.9V20H48.6z" />
                            <path class="st2" d="M57.7,20h-1.8v-8.4h4c0.4,0,0.7,0.1,1,0.2c0.3,0.1,0.6,0.3,0.8,0.5c0.2,0.2,0.4,0.5,0.5,0.8
		c0.1,0.3,0.2,0.7,0.2,1.1c0,0.6-0.1,1.1-0.4,1.5s-0.6,0.7-1.1,0.9l1.6,3.3h-2l-1.5-3.1h-1.3V20z M59.7,15.4c0.3,0,0.5-0.1,0.6-0.2
		c0.2-0.1,0.2-0.3,0.2-0.6V14c0-0.3-0.1-0.5-0.2-0.6c-0.2-0.1-0.4-0.2-0.6-0.2h-1.9v2.2H59.7z" />
                            <path class="st2" d="M73.1,14.5L73.1,14.5l-0.6,1.2l-1.6,3l-1.6-3l-0.6-1.3h0V20h-1.7v-8.4h1.9l2.1,3.9h0l2-3.9h1.9V20h-1.7V14.5z" />
                            <path class="st2" d="M81.8,20l-0.6-2h-2.8l-0.6,2H76l2.8-8.4H81l2.7,8.4H81.8z M79.8,13.3L79.8,13.3l-1,3.2h1.9L79.8,13.3z" />
                            <path class="st2" d="M84.6,20v-1.5h1.1v-5.5h-1.1v-1.5h4v1.5h-1.1v5.5h1.1V20H84.6z" />
                            <path class="st2" d="M92.8,20.1c-0.7,0-1.4-0.1-1.9-0.4c-0.5-0.3-0.9-0.6-1.3-1l1.2-1.2c0.6,0.6,1.3,1,2.1,1c0.4,0,0.8-0.1,1-0.3
		c0.2-0.2,0.3-0.4,0.3-0.7c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.3-0.8-0.3l-0.8-0.1c-0.9-0.1-1.5-0.4-2-0.8c-0.4-0.4-0.6-1-0.6-1.7
		c0-0.4,0.1-0.7,0.2-1s0.4-0.6,0.6-0.8c0.3-0.2,0.6-0.4,1-0.5c0.4-0.1,0.8-0.2,1.3-0.2c0.6,0,1.2,0.1,1.7,0.3
		c0.5,0.2,0.9,0.5,1.2,0.9l-1.2,1.2c-0.2-0.2-0.4-0.4-0.7-0.6c-0.3-0.1-0.6-0.2-1.1-0.2c-0.4,0-0.7,0.1-0.9,0.2s-0.3,0.3-0.3,0.6
		c0,0.3,0.1,0.5,0.2,0.6c0.2,0.1,0.4,0.2,0.8,0.3l0.8,0.1c0.9,0.1,1.5,0.4,1.9,0.8s0.6,1,0.6,1.7c0,0.4-0.1,0.8-0.2,1.1
		c-0.1,0.3-0.4,0.6-0.6,0.9c-0.3,0.2-0.6,0.4-1,0.6C93.8,20.1,93.3,20.1,92.8,20.1z" />
                        </g>
                    </svg>

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
</header>
-->



