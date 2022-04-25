<?php
session_start();

require '../includes/controle.php';
require '../includes/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

#burcar o texto no BD, comparar a chave estrangeiro com a sessão do user
