<?php
require_once 'config.php';

require_once 'head.php';
?>



<div>
    <div class="container-fluid">
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-topo mt-5 ml-2 ml-md-5">Imprensa</div>
            <div class="w-100"></div>
            <div class="col destaques-titulo mt-2 ml-2 ml-md-5 mb-3">Útimas Notícias</div>
        </div>
    </div>

    <div class="container">
        <div class="col-10 mx-auto">
            <div class="row noticias-titulo ">LANÇAMENTO | SENHORA DO AMOR E DA GUERRA</div>
            <div class="row noticias-linha"></div>
            <div class="row imprensa-data d-flex justify-content-end">PUBLICADO A 17 DE JUNHO DE 2020</div>
            <div class="row noticias-conteudo d-flex justify-content-center">
                <img class="mb-5" src="./public/imagens-desktop/conteudo-imprensa1.jpg" style="width: 100%; height: 100%;" alt="SENHORA DO AMOR E DA GUERRA">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-10 mx-auto">
            <div class="row noticias-titulo ">LANÇAMENTO DO LIVRO "O VELHO QUE PENSAVA QUE FUGIA"</div>
            <div class="row noticias-linha"></div>
            <div class="row imprensa-data d-flex justify-content-end">PUBLICADO A 6 DE DEZEMBRO DE 2017</div>
            <div class="row noticias-conteudo d-flex justify-content-center">
                <img class="mb-5" src="./public/imagens-desktop/conteudo-imprensa2.jpg" style="width: 100%; height: 100%;" alt="O VELHO QUE PENSAVA QUE FUGIA">
                <div class="imprensa-texto d-block">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis magni, non dicta nulla quis, laboriosam sunt in et odit, dolorum ea iste labore iure mollitia quisquam officia? Nam, molestias numquam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore repellat natus, velit assumenda delectus nostrum qui fugiat placeat laudantium? Sint eveniet facere corporis unde doloribus obcaecati quas dolorem molestias iure?</p>
                    <p>Notícia do Técnico de Lisboa</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-top: 85px;">
        <div class="row text-center">
            <div class="col-auto d-flex flex-columns flex-nowrap mx-auto">
                <a class="" href="imprensa.php">
                    <div id="seta-esquerda" class="setas-paginacao"></div>
                </a>
                <a class="paginacao" href="imprensa.php">
                    <div>1</div>
                </a>
                <a class="paginacao" href="imprensa.php">
                    <div>2</div>
                </a>
                <a class="paginacao" href="imprensa.php">
                    <div>3</div>
                </a>
                <a class="" href="imprensa.php">
                    <div id="seta-direita" class="setas-paginacao"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'foot.php'
?>