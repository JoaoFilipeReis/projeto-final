<?php

require_once '../config.php';
require_once 'head.php';


if (
    !empty($_POST['imagem'])  &&
    !empty($_POST['texto'])
) {
    $query = 'INSERT INTO autor (imagem, texto) VALUES (?, ?)';
    $sql = $pdo->prepare($query);
    if ($sql->execute([
        $_POST['imagem'],
        $_POST['texto']
    ])) {
        echo "Imagem adicionada com Sucesso";
    } else {
        echo "Erro ao adicionar. Tente novamente!";
    }
};

?>


<div class="container">
    <section>
        <h3 class="main-title">Adicionar Imagem</h3>
        <form class="form" method="POST" action="autor-create.php">
            <div class="form-field d-flex justify-content-center flex-column">
                <label for="">Imagem</label>
                <input type="text" name="imagem" required>
            </div>
            <div class="form-field">
                <label for="texto">Texto</label>
                <textarea id="" name="texto" cols="60" rows="10" required></textarea>
            </div>
            <div class="form-field">
                <label for="created_at">Data</label>
                <input type="date" id="datepicker" name="created_at" required>
            </div>
            <div>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form>
        <div class="d-flex justify-content-start btn-autor">
            <a href="../autor.php"><button id="voltar-atras"></button></a>
        </div>
    </section>
</div>