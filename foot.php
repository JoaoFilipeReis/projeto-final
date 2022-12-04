<?php

require_once 'config.php';

?>

<!--
<footer>
    <div class="container" style="margin-top: 50px; margin-bottom: 70px;"" style=" margin: auto;">
        <div class="row col-10 d-block d-md-none  mx-auto">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <hr class="footer-line">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-10 col-md-7 mx-auto">

                <div class="col-12 col-sm-3">
                    <div class="d-flex justify-content-center">
                        <h1 class="footer-title">contactos</h1>
                    </div>
                </div>

                <div class="col-12 col-sm-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h2 class="field-title">morada</h2>
                        <p class="field-text">Lorem ipsum, dolor sit amet 12, 1234-543 Lorem</p>
                    </div>
                </div>

                <br>

                <div class="col-12 col-sm-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h2 class="field-title">telefone</h2>
                        <p class="field-text">+351 123 456 789</p>
                    </div>
                </div>
                <br>

                <div class="col-12 col-sm-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h2 class="field-title">email</h2>
                        <p class="field-text">lorem@lorem.pt</p>
                    </div>
                </div>



                <div class="col-12 col-lg-8">
                    <div class="flex justify-content-center align-items-center">
                        <h1 class="social-title">siga-me nas redes sociais</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <img class="social-icons" src="./public/imagens-desktop/instagram1.svg" alt="instagram">
                        <img class="social-icons" src="./public/imagens-desktop/facebook1.svg" alt="facebook">
                        <img class="social-icons" src="./public/imagens-desktop/linkedin1.svg" alt="linkedin">
                    </div>
                </div>



                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <img class="livro-reclamacoes" src="./public/imagens-desktop/livroreclamacoes.svg" alt="instagram">
                        <img class="ralc" src="./public/imagens-desktop/ralc.svg" alt="facebook">
                    </div>
                </div>

            </div>


            <div class="col-12">
                <div class="">
                    <p class="cookies">Política de Cookies.</p>
                    <p class="copyright">Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </div>


</footer>
-->


<!--

Novo Footer

-->

<div class="d-flex justify-content-center aligns-items-center container-fluid d-none d-md-flex">

    <div class="menu-rodape-linha"></div>

    <div class="menu-rodape-itens">
        <a class="menus-barra-rodape " href="#">HOME</a>
        <a class="menus-barra-rodape " href="#">AUTOR</a>
        <a class="menus-barra-rodape " href="#">LIVROS</a>
        <a class="menus-barra-rodape " href="#">IMPRENSA</a>
        <a class="menus-barra-rodape " href="#">CONTACTOS</a>
    </div>

    <div class="menu-rodape-linha"></div>

</div>
<div class="menu-rodape-linha">utcut</div>
<footer class="container" style="margin-top: 50px; margin-bottom: 70px;">

    <div class="row">
        <div class="col-10 d-block d-md-none rodape-linha-mobile mx-auto"></div>
    </div>

    <div class="row">

        <div class="col-10 col-md-7 mx-auto">

            <div class="row destaques-titulo">
                <div class="col-12 text-center text-md-left">Contactos</div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <div class="contactos-titulo">Morada</div>
                    <div class="contactos-conteudo">Lorem ipsum, dolor sit amet 12, 1234-543 Lorem</div>
                </div>
                <div class="col-12 col-md-3 text-center text-md-left mt-3 mt-md-0">
                    <div class="contactos-titulo">Telefone</div>
                    <div class="contactos-conteudo">+351 123 456 789</div>
                </div>
                <div class="col-12 col-md-3 text-center text-md-left mt-3 mt-md-0">
                    <div class="contactos-titulo">Email</div>
                    <div class="contactos-conteudo">lorem@lorem.pt</div>
                </div>
            </div>
            <div class="d-none d-md-block" style="margin-top: 60px;">
                <img src="./public/imagens-desktop/livroreclamacoes.svg" alt="Livro de Reclamações"></a>
                <img src="./public/imagens-desktop/ralc.svg" alt="ralc"></a>
            </div>

        </div>

        <div class="col-12 col-md-3 text-center text-md-right mt-3 mt-md-0">
            <div class="d-flex justify-content-end">
                <h1 class="social-title">siga-me nas redes sociais</h1>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <img class="social-icons" src="./public/imagens-desktop/instagram1.svg" alt="instagram">
                <img class="social-icons" src="./public/imagens-desktop/facebook1.svg" alt="facebook">
                <img class="social-icons" src="./public/imagens-desktop/linkedin1.svg" alt="linkedin">
            </div>
        </div>



        <div class="col-12 d-flex flex-nowrap justify-content-around d-md-none mx-auto" style="margin-top: 50px;">
            <img id="livro-mobile" src="./public/imagens-desktop/livroreclamacoes.svg" alt="Livro de Reclamações"></a>
            <img id="ralc-mobile" src="./public/imagens-desktop/ralc.svg" alt="ralc"></a>
        </div>

        <div id="copyright" class="text-center p">
            <div class="cookies">Política de Cookies.</div>
            <div>Copyright © 2021 Grupo MediaMaster. <br class="d-md-none">Todos os direitos reservados.</div>
        </div>

    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="script.js"></script>


</body>

</html>