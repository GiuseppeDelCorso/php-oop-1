<?php
class Moovie
{
    public $nome;
    public $protagonista;
    public $durata;




    public function __construct($nome, $protagonista, $durata,)
    {
        $this->nome = $nome;
        $this->protagonista = $protagonista;
        $this->durata = $durata;
    }
}
