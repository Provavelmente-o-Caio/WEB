<?php
#Formulário para editar textos
require 'includes/conexao.php';
require 'includes/controle.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
#buscando texto baseado no id pela URL
$sql = "SELECT * FROM texto WHERE id=$id";
$textos = $conexao->query($sql);
$texto = $textos->fetch();

#pesquisar todos os usuarios da tabela
$usuarios = $conexao->query("SELECT id, nome FROM usuario ORDER BY nome");
?>

<form action="pages/edit_texto_bd.php?id=<?=$texto['id']?>" method="post">
    <div>
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" value="<?=$texto['titulo']?>">
    </div>
    <div>
        <textarea name="corpo" id="corpo" style="width: 100%;" rows="50"><?=$texto['corpo']?></textarea>
    </div>
    <div>
        <label for="usuario"></label>
        <select name="idusuario" id="usuario" style="display: block !important;">
            <?php
            foreach ($usuarios as $user) {
                $selected = '';
                if($user['id']==$texto['usuario_id']){
                    $selected = 'selected';
                }
                echo '<option value="'.$user['id'].'" '.$selected.'>';
                echo $user['nome'];
                echo '</option>';
            }
            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="gravar">
    </div>
</form>