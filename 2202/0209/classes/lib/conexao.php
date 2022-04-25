<?php

namespace MeuApp\lib;

use \PDO;

class conexao extends PDO
{

    private $banco = 'empresa';
    private $user = 'root';
    private $senha = '';

    function __construct()
    {
        $dns = 'mysql:host=localhost;dbname='.$this->banco;

        try
        {
            parent:host
        }
    }
}