<?php
$erro = filter_input(INPUT_GET, "erro", FILTER_SANITIZE_SPECIAL_CHARS);
switch ($erro) {
    case 1:
        echo '<div class="erro">E-mail não encontrado!</div>';
        break;

    case 2:
        echo '<div class="erro">Senha incorreta!</div>';
        break;

    case 3:
        echo '<div class="erro">Você precisa estar logado!</div>';
}
?>

<form action="pages/loginbd.php" method="post">
    <h2>Login</h2>
    <div>
        <label for="user">E-mail</label>
        <input type="email" name="email" id="user">
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
    </div>
    <div>
        <input type="submit" value="login">
    </div>
</form>
<p><a href="?p=add_user">Quero me cadastrar</a></p>