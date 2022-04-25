<?php
session_start();
require "../includes/conexao.php";

$id = $_SESSION['userId'];


if (isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array ('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError == 0)
        {
            if($fileSize < 512000000)
            {
                $fileNovo = "perfil".$id.".".$fileActualExt;

                $fileDestination = '../images/perfil/'.$fileNovo;
                move_uploaded_file($fileTmpName, $fileDestination);

                $sql = "UPDATE imagem SET status=0, tipo='$fileActualExt' WHERE usuario_id='$id'";
                $conexao->query($sql);

                header('Location:../index.php');
            }
            else
            {
                echo "<p>O arquivo é grande demais</p>";
            }
        }
        else
        {
            echo "<p>Ocorreu um erro no upload</p>";
        }
    }
    else
    {
        echo "<p>Você deve fazer upload de uma imagem</p>";
    }
}