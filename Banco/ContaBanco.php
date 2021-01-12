<?php
// Atributos
class ContaBanco{
    public  $numeroConta;
    protected $tipo;
    private $nomeDono;
    private $saldo;
    private $status;

// Métodos
    public function abirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);

        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(1500);
        }
    } 
    public function fecharConta(){

    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function pagarMensal(){

    }
//Métodos Especiais
    public function __construct(){
        $this->numeroConta;
        $this->tipo;
        $this->nomeDono;
        $this->saldo;
        // $this->status;
    }

    public function getNumeroConta(){
        return $this->numeroConta;
    }
    public function setNumeroConta($numeroConta){
        $this->numeroConta = $numeroConta;
       
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getNomeDono(){
        return $this->nomeDono;
    }
    public function setNomeDono($nomeDono){
        $this->nomeDono = $nomeDono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $ststus;
    }

}