<?php

if (empty($_GET['id']) && !(int)$_GET['id']) {
    // Disparamos a mensagem abaixo.
    echo "Identificação inválida, tente novamente";
    // Redirecionamentos para a rota 'user_read' 
    url_redirect(['route' => 'user_read']);
}

/**
 * Na condição abaixo testamos se as chaves 
 * da super global $_POST NÃO estão vazias
 */
if (
    !empty($_POST['name'])  && // And
    !empty($_POST['login']) && // And
    !empty($_POST['password']) &&
    !empty($_POST['picture'])
) {
    // declaração
    $query = 'UPDATE users SET name = ?, login = ?, password = ?, picture = ? WHERE id = ?';
    // preparação 
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([
        $_POST['name'],
        $_POST['login'],
        $_POST['password'],
        $_POST['picture'],
        $_GET['id']
    ])) {
        $message = "Registo atualizado com sucesso";
    } else {
        $message = "Não foi atualizar o registo, tente novamente";
    }
        
    // Disparamos uma mensagem com o valor que está dentro da variável $message.
    echo "$message";
    // Redirecionamentos para a rota 'user_create' 
    url_redirect(['route' => 'user_update']);
} else {
    // declaração
    'SELECT * FROM users WHERE id = ?';
    // preparação 
    $sql = $pdo->prepare($query);
    // execução
    if ($sql->execute([$_GET['id']])) {
        $user = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        $user = [];
    }
}

?>

<div class="page">
    <form class="form" method="POST" action="<?php echo url_generate(['route' => 'user_update']); ?>">
        <h1>Atualizar utilizador</h1>
        <div class="horizontal-line"></div>
        <div class="form-group flex flex-col">
            <label for="name">Nome</label>
            <input type="text" name="name" value="<?php echo $user['name']; ?>">
        </div>
        <div class="form-group flex flex-col">
            <label for="name">Login</label>
            <input type="text" name="login" value="<?php echo $user['login']; ?>">
        </div>
        <div class="form-group flex flex-col">
            <label for="password">Password</label>
            <input type="password" name="password" value="<?php echo $user['password']; ?>">
        </div>
        <div class="form-group flex flex-col">
            <label for="picture">Picture</label>
            <input type="text" name="picture" value="<?php echo $user['picture']; ?>">
        </div>
        <div class="form-group flex flex-col">
            <button>Guardar</button>
        </div>
    </form>
</div>