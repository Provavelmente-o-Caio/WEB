<?php
session_start();

require '../includes/controle.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

require '../includes/conexao.php';

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
$corpo = filter_input(INPUT_POST, 'corpo', FILTER_SANITIZE_SPECIAL_CHARS);
$usuario_id = $_SESSION['userId'];

$sql = "UPDATE texto SET titulo='$titulo', corpo='$corpo', usuario_id=$usuario_id WHERE id=$id";
$conexao->query($sql);

header('Location:../');