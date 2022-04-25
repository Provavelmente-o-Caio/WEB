<?php
require "../includes/conexao.php";

# o objetivo é salvar os dados e salvar num BD
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

# MD5 é uma forma antiga, normalmente é usado junto ao SALT
# $senha = md5($senha);

$senha = password_hash($senha, PASSWORD_BCRYPT);

# cadastro

$sql = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$conexao->query($sql);

#Imagens
$sql = "SELECT * FROM usuario WHERE nome='$nome' AND email='$email'";
$resultado = $conexao->query($sql);
$cont = $resultado->rowCount();

if($cont > 0){
    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
        $id_usuario = $linha['id'];
        $sql = "INSERT INTO imagem(usuario_id, status, tipo) VALUES ('$id_usuario', 1, 'png')";
        $conexao->query($sql);
        header('Location:../index.php?p=login');
    }
}
else {
    echo "Ocorreu um erro";
}