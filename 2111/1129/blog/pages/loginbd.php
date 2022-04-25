<?php
require('../includes/conexao.php');

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha");

$sql = "SELECT * FROM usuario WHERE email = '$email'";
$users = $conexao->query($sql);
$user = $users->fetch();

#se não encontrou usuário
if(!$user){
    header("Location:../?p=login&erro=1");
    exit;
}

$hash = $user["senha"];

#verificar se a senha bate
if (password_verify($senha, $hash)) {
    session_start();
    $_SESSION['userId'] = $user['id'];
    $_SESSION['userNome'] = $user['nome'];
    header("Location:../");
}
else {
    #errou a senha
    header("Location:../?p=login&erro=2");
}