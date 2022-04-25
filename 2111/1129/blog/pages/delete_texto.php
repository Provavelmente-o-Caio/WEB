<?php
session_start();

require '../includes/controle.php';
require '../includes/conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "SELECT * FROM texto WHERE id=$id";
$textos = $conexao->query($sql);
$texto = $textos->fetch();

if($texto && $_SESSION['userId'] && $texto['usuario_id']==$_SESSION['userId']){
    $sql = 'DELETE FROM texto WHERE id='.$id;
    $conexao->query($sql);
}

#redireciona
header('Location:../index.php');