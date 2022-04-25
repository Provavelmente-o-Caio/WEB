<?php
require "includes/conexao.php";
?>

<form action="pages/upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>
</form>