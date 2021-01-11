<?php

class Caneta{
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($m, $c, $p){ // o Método construtor pode ser usado também com o nome da Classe. EX: Caneta;
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    } 

    public function tampar(){
        $this->tampada = true;
    }

    //Modelo
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    //Ponta
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }


}