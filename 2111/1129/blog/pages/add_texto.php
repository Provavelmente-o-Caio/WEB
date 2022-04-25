<?php
#Formulário para cadastrar textos
require('includes/controle.php')
?>

<form action="pages/add_texto_bd.php" method="post">
    <div>
        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo">
    </div>
    <div>
        <textarea name="corpo" id="corop" style="width: 100%;" rows="50"></textarea>
    </div>
    <div>
        <input type="submit" value="gravar">
    </div>
</form>