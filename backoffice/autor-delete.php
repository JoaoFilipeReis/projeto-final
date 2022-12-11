<?php
require_once '../config.php';

if (empty($_GET['id']) && !(int)$_GET['id']) {
    // Disparamos a mensagem abaixo.
    echo "Identificação inválida, tente novamente";
};

// declaração
$query = 'DELETE from autor WHERE id = ?';
// preparação 
$sql = $pdo->prepare($query);
// execução
if ($sql->execute([$_GET['id']])) {
    echo "Imagem apagada com sucesso.";
} else {
    echo "Não foi possível apagar a imagem. Tente novamente.";
}

require_once 'head.php';
?>

<div class="container row col-12">
    <div class="d-flex justify-content-start btn-autor">
        <a href="../autor.php"><button id="voltar-atras"></button></a>
    </div>
</div>