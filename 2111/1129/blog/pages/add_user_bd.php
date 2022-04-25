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

header('Location:../index.php?p=login');