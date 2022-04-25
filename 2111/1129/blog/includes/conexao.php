<?php
 try{
    $user = 'root';
    $senha = '';
    $dbname = 'blog';
    $conexao = new PDO('mysql:host=localhost; dbname='.$dbname, $user, $senha);
 }catch(\PDOException $e){
    echo $e->getMessage();
    die("<p style=\"color:red\">Comportamento inesperado!</p>");
}