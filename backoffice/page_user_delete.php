<?php

if (empty($_GET['id']) && !(int)$_GET['id']) {
    // Disparamos a mensagem abaixo.
    echo 'Identificação inválida, tente novamente';
    // Redirecionamentos para a rota 'user_read' 
    echo "<a href='user.read'></a>";
}

// declaração
$query = 'DELETE from  users WHERE id = ?';
// preparação 
$sql = $pdo->prepare($query);
// execução
if ($sql->execute([$_GET['id']])) {
    $message = "Registo apagado com sucesso.";
} else {
    $message = "Não foi possível apagar o registo, tente novamente.";
}

// Disparamos uma mensagem com o valor que está dentro da variável $message.
echo "$message";
// Redirecionamentos para a rota 'user_read' 
echo "<a href='user.read'></a>";
