<?php

class Ventilador {
    public $modelo;
    public $cor;
    private $tamanho;
    private $nivelRotacao;
    private $ligado;

//construtor
    public function __construct($modelo, $cor, $nivelRotacao, $tamanho){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->nivelRotacao = $nivelRotacao;
        $this->tamanho = $tamanho;
        $this->Ligada();
    }
    public function Ligada(){
        $this->ligado = true;
        // if($this->ligado = true){
        //     echo "O ventilador está Ligado!";
        // }else{
        //     echo "O ventilador está Desligado!";
        // }
    }
//get
    public function getModelo(){
        return $this->modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getNivelRotacao(){
        return $this->nivelRotacao;
    }
    public function getTamanho(){
        return $this->tamanho;
    }
//set
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function setNivelRotacao($nivelRotacao){
        $this->nivelRotacao = $nivelRotacao;
    }
    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }
}