<h1>Posts</h1>

<form action="" method="get">
    <input type="search" name="pesquisa" id="pesquisa" placeholder="Pesquisa" class="black-text white">
</form>

<script>
    4("#pesquisa".keyup(function()){
        let p = $("#pesquisa")
    });
</script>

<?php
require 'includes/conexao.php';
$pesquisa = filter_input(INPUT_GET, 'pesquisa', FILTER_SANITIZE_STRING);

if($pesquisa){
    $sql = "SELECT texto.id, titulo, corpo, nome, usuario_id FROM texto, usuario WHERE texto.usuario_id=usuario.id AND titulo LIKE '%$pesquisa%' ORDER BY texto.id DESC";
}
else{
    $sql = "SELECT texto.id, titulo, corpo, nome, usuario_id FROM texto, usuario WHERE texto.usuario_id=usuario.id ORDER BY texto.id DESC";
}
$textos = $conexao->query($sql);

foreach($textos as $texto){
    echo "<h3><a href='index.php?p=texto_over&id=$texto[id]'>$texto[titulo]</a></h3>";
    #echo '<div>'.nl2br($texto['corpo']).'</div>';
    echo '<p><small>Autor: <em>'.$texto['nome'].'</em></small></p>';

    #inicio apagar
    if(isset($_SESSION['userId']) && $_SESSION['userId']==$texto['usuario_id']){
        echo '<a href="index.php?p=edit_texto&id='.$texto['id'].'"><small><i class="fas fa-pen"></i>Editar</small></a>';

        echo '<br>';

        echo '<a href="pages/delete_texto.php?id='.$texto['id'].'" class="red-text"><small><i class="fas fa-trash"></i>apagar</small></a>';
    }
    #fim apagar

    echo '<br><hr>';
}