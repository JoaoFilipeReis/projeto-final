<!-- Área Bem-vindo-->
<?php
require_once 'config.php';
require_once 'head.php';

?>

<div class="container-fluid">
    <div id="caixa-topo" class="row offset-md-1 pt-5 pt-md-0">

        <div class="col-auto text-center pt-5 pt-md-0">
            <img class="bem-vindo" src="./public/imagens-desktop/FOTO-editada.jpg" alt="foto-editada">
        </div>

        <div class="col-10 col-md pr-md-5">
            <div>
                <h1 class="home-title">bem-vindo ao meu website</h1>
            </div>
            <div class="pr-md-5">
                <p1 class="home-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium.</p1>
            </div>
            <div class="mb-5 d-flex justify-content-center justify-content-md-end" style="margin-top: 30px;">
                <a href="autor.php">
                    <button class="botao-sabermais-banner"></button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Área Últimos Livros -->

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex flex-column justify-content-start">
                <h1 class="books-title">últimos livros</h1>
                <p class="books-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="./public/imagens-desktop/livro1.jpg" alt="Senhora do amor e da guerra">
                <div class="caption">
                    <div class="d-flex justify-content-start">
                        <h1>senhora do amor e da guerra</h1>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="category">novidade</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="./livro1.php"><button class="home-btn"></button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="./public/imagens-desktop/livro2.jpg" alt="O Velho que pensava que fugia">
                <div class="caption">
                    <div class="d-flex justify-content-start">
                        <h1>o velho que pensava que fugia</h1>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="category">mais vendido</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="./livro4.php"><button class="home-btn"></button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="thumbnail">
                <img src="./public/imagens-desktop/livro3.jpg" alt="coleccionador de amnésias">
                <div class="caption">
                    <div class="d-flex justify-content-start">
                        <h1>coleccionador de amnésias</h1>
                    </div>
                    <div class="d-flex justify-content-start">
                        <p class="category">em promoção</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="./livro3.php"><button class="home-btn"></button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
require_once 'foot.php'
?>