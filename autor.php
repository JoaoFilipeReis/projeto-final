<?php
require_once 'config.php';
require_once 'head.php';

$query = 'SELECT * FROM autor';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $autor = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $autor = [];
}

?>

<div>
    <div class="container-fluid">
        <div id="caixa-topo" class="row offset-md-1 pt-1 pl-4">
            <div class="col titulo-topo mt-5 ml-2 ml-md-5">AUTOR</div>
            <div class="w-100"></div>
            <div class="col destaques-titulo mt-2 ml-2 ml-md-5 mb-3">SOBRE MIM</div>
        </div>
    </div>

    <section>
        <div class="container">
            <?php foreach ($autor as $autores) : ?>
                <div class="col-10 mx-auto">
                    <div class="row d-flex justify-content-center">
                        <img width="100%" height="100%" id="imagem-autor" src="<?php echo $autores['imagem']; ?>" alt="autor">
                    </div>
                </div>

                <div id="area-texto" class="m-top">
                    <p><span class="author"><?php echo $autores['texto']; ?></p>
                </div>

                <div>
                    <p>Date: <span class="date"><?php echo $autores['created_at']; ?></span></p>
                </div>
                <div class="d-flex">
                    <a href="./backoffice/autor-update.php?id=<?php echo $autores['id'] ?>" class="nav-link menus" style="margin-right: 25px;">Editar</a>
                    <a onclick="return confirm('Tem certeza?');" href="./backoffice/autor-delete.php?id=<?php echo $autores['id'] ?>" class="nav-link menus">Apagar</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="d-flex justify-content-start container btn-autor">
        <a href="./imprensa.php"><button id="voltar-atras"></button></a>
    </div>
</div>




<?php
require_once 'foot.php'
?>