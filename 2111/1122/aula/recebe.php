<?php
#arquivo que recebe o formulário

/*
forma antiga
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
*/

/* Modo moderno, permite a adição de filtros, sendo mais seguro */
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome',  FILTER_SANITIZE_SPECIAL_CHARS);

echo "Seu nome completo é $nome $sobrenome";
?>