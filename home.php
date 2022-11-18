<?php
require_once 'head.php';
?>

<!-- Área Bem-vindo-->

<div class="container">
    <div class="row">
        <div class="home-box col">
            <div class="d-flex justify-content-center">
                <img class="bem-vindo" src="./public/imagens-desktop/FOTO-editada.jpg" alt="foto-editada">
            </div>
            <div class="d-flex justify-content-left">
                <h1 class="home-title">bem-vindo ao meu website</h1>
            </div>
            <div class="d-flex justify-content-left">
                <p1 class="home-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p1>
            </div>
            <div class="d-flex justify-content-center">
                <button class="home-btn">Test button</button>
            </div>
        </div>
    </div>
</div>

<!-- Área Últimos Livros -->

<div class="container">
    <div class="row">
        <div class="d-flex flex-column justify-content-left col">
            <h1 class="books-title">últimos livros</h1>
            <p class="books-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sit quidem iste aliquam unde vel quod cupiditate, alias, assumenda distinctio saepe! Impedit quod ducimus numquam accusantium nostrum explicabo unde praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
</div>

<div class="container">
    <!-- Verificar responsividade nesta linha -->
    <div class="row">
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <img class="img-books" src="./public/imagens-desktop/livro1.jpg" alt="Senhora-do-amor-e-da-guerra">
        </div>
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <div class="last-books-box position-relative">
                <div class="d-flex justify-content-center position-relative">
                    <h1 class="highlight-title">senhora do amor e da guerra</h1>
                </div>
                <div class="d-flex justify-content-left">
                    <p class="categoria">novidade</p>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="highlight-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button class="highlight-btn">Teste 03</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <img class="img-books" src="./public/imagens-desktop/livro2.jpg" alt="O Velho que pensava que fugia">
        </div>
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <div class="last-books-box position-relative">
                <div class="d-flex justify-content-center">
                    <h1 class="highlight-title">o velho que pensava que fugia</h1>
                </div>
                <div class="d-flex justify-content-left">
                    <p class="categoria">mais vendido</p>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="highlight-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button class="highlight-btn">Teste 03</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <img class="img-books" src="./public/imagens-desktop/livro3.jpg" alt="coleccionador de amnésias">
        </div>
        <div class="d-flex justify-content-center col-12 col-sm-4">
            <div class="last-books-box position-relative">
                <div class="d-flex justify-content-center">
                    <h1 class="highlight-title">coleccionador de amnésias</h1>
                </div>
                <div class="d-flex justify-content-left">
                    <p class="categoria">em promoção</p>
                </div>
                <div class="d-flex justify-content-center">
                    <p class="highlight-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ipsum, dolorem aperiam id minus omnis ad beatae molestias odit iusto officia sequi corrupti doloribus atque dolore. Voluptatibus nostrum ab libero.</p>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button class="highlight-btn">Teste 03</button>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require_once 'foot.php';
?>