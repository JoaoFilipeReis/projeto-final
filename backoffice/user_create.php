<?php 
require_once 'config.php';
//require_once 'head.php';


if (
    !empty($_POST['titulo'])  && 
    !empty($_POST['publicacao']) && 
    !empty($_POST['imagem']) && 
    !empty($_POST['conteudo']) 
) {
    $query = 'INSERT INTO livraria (titulo, publicacao, imagem, conteudo) VALUES (?, ?, ?, ?)';
    $sql = $pdo->prepare($query);
    if ($sql->execute([
        $_POST['titulo'],
        $_POST['publicacao'],
        $_POST['imagem'],
        $_POST['conteudo']
    ])) {
        echo "Livro criado com Sucesso!";
    } else {
        echo "Erro ao criar Livro. Tente novamente!";
    }
};

?>


<div class="page container">
    <section>
        <h3>Adicionar Livro</h3>
        <form class="form" method="post" action="user_create.php">
            <div class="form-field">
                <label for="">Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-field">
                <label for="">publicacao</label>
                <input type="text" name="author">
            </div>
            <div class="form-field">
                <label for="created_at">Imagem</label>
                <input type="img" name="imagem">
            </div>
            <div class="form-field">
                <label for="created_at">Conteúdo</label>
                <textarea id="editor" name="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-field">
                <button>Guardar</button>
            </div>
        </form>
    </section>
</div>

<?php

require_once 'foot.php';