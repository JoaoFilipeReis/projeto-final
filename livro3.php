<?php

require_once 'config.php';
require_once 'head.php';

?>


<div>
    <div>
        <div class="container-fluid">
            <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
                <div class="col titulo-topo mt-5 ml-2 ml-md-5">Livros</div>
                <div class="w-100"></div>
                <div class="col destaques-titulo mt-2 ml-2 ml-md-5 mb-3">O Coleccionador de Amnésias</div>
            </div>
        </div>

        <div class="container" style="margin-top: 65px;">
            <div class="row d-flex">
                <div id="caixa-capa-livro" class="col-12 col-lg-5 d-flex justify-content-center">
                    <img id="capa-livro" class="row capa-livro" src="./public/imagens-desktop/livro-conteudo2.jpg" alt="O Coleccionador de Amnésias">
                </div>
                <div id="caixa-texto-livro-lateral" class="col-12 col-lg-7">
                    <div id="texto-livro-lateral" class=""></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est, doloribus excepturi eum provident earum recusandae nihil repellat libero? Reiciendis quis dolore quas sint at eos aliquam illo possimus dicta?
                        Sit totam explicabo, beatae obcaecati odio porro voluptatem deserunt! Quod, laboriosam. Deleniti architecto voluptates modi voluptatem, quae nihil, exercitationem natus aspernatur asperiores ipsa optio consectetur incidunt quisquam?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, repellendus blanditiis quidem ea doloribus, rem et quaerat at ullam, voluptatibus molestias vero! Sunt ratione sed voluptas veniam facere sapiente consequatur!</p>
                    <div>Edição: Agosto de 2019</div>
                    <div>Dimensões: 145 x 230 x 12 mm</div>
                    <div>Encadernação: Capa mole</div>
                    <div>Páginas: 225</div>
                    <div class="d-flex justify-content-end">
                        <a href="./imprensa.php"><button id="voltar-atras"></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once 'foot.php';

?>