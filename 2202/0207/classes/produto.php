<?php
class Produto
{
    public $nome;
    public $preco = 0;

    function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}