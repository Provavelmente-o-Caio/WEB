<?php
#protege página garantindo a autentificação

if(!isset($_SESSION['userId'])){
    header('Location:?p=login&erro=3');
    exit;
}