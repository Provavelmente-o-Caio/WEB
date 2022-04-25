<?php
session_start();

require '../includes/controle.php';

$titulo = filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_POST,'corpo',FILTER_SANITIZE_SPECIAL_CHARS);
$usuario_id = $_SESSION['userId'];

require '../includes/conexao.php';
$sql = "INSERT INTO texto (titulo, corpo, usuario_id) VALUES('$titulo', '$corpo', $usuario_id)";
$conexao->query($sql);
#redireciona
header('Location:../index.php');