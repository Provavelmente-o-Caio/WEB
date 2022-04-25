<?php
#ver o resultado completo
require 'includes/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$sql = "SELECT texto.id, titulo, corpo, nome FROM texto, usuario WHERE texto.usuario_id=usuario.id AND texto.id=$id ORDER BY texto.id DESC";
$textos = $conexao->query($sql);
$texto = $textos->fetch();

echo '<article>';
echo '<h3>'.$texto['titulo'].'</h3>';
echo '<p>'.$texto['corpo'].'</p>';
echo '<small><em>'.$texto['nome'].'</em></small>';
echo '</article>';

echo '<br><hr>';
echo '<a href="index.php" class="black-text">Voltar</a>';