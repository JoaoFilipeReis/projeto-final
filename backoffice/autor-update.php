<?php

require_once '../config.php';

if (
    !empty($_POST['imagem'])  &&
    !empty($_POST['texto']) &&
    !empty($_POST['updated_at'])
) {
    $query = 'UPDATE autor SET imagem = ?, texto = ?, updated_at = ? WHERE id = ?';
    $sql = $pdo->prepare($query);
    if ($sql->execute([
        $_POST['imagem'],
        $_POST['texto'],
        $_POST['updated_at'],
        $_GET['id']
    ])) {
        echo "Atualização com sucesso.";
    } else {
        echo "Não foi possível atualizar. Tente novamente";
    }
}
$query = 'SELECT * FROM autor WHERE id = ?';
$sql = $pdo->prepare($query);
if ($sql->execute(
    [$_GET['id']]
)) {
    $autor = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    $autor = [];
}

require_once 'head.php'; ?>

<div class="page container">
    <section>
        <h3 class="main-title">Atualizar Imagem</h3>
        <form class="form" method="POST" action="autor-update.php?id=<?php echo $_GET['id']; ?>">
            <div class="form-field">
                <label for="title">Imagem</label>
                <input type="text" name="imagem" value="<?php echo $autor['imagem']; ?>" required>
            </div>
            <div class="form-field">
                <label for="author">Texto</label>
                <textarea id="" name="texto" cols="60" rows="10" value="<?php echo $autor['updated_at']; ?>" required></textarea>
            </div>
            <div class="form-field">
                <label for="updated_at">Data</label>
                <input type="text" name="updated_at" value="<?php echo $autor['updated_at']; ?>" required>
            </div>
            <div>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </section>

    <div class="d-flex justify-content-start btn-autor">
        <a href="../autor.php"><button id="voltar-atras"></button></a>
    </div>
</div>

