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
        if ($t == "CC"){
            $this->setSaldo(50);
        } elseif ($t == "CP"){
            $this->setSaldo(150);
        }
    } 
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p>A Conta ainda tem Saldo, não e possivel finalizala!</p>";
        } elseif ($this->getSaldo() < 0){
            echo "<p>A Conta Está em Debito. Impossivel Finalizala!</p>";
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R$: $v na conta de ". $this->getNomeDono() ."</p>";
        }else{
            echo "<p>Conta Fechada com Sucesso, Não e mais possivel Depositar!</p>";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
            if ($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de $v Autorizado na conta: ".$this->getNomeDono()."</p>";
            } else {
                echo "<p>Saldo Insuficiente para Sacar.</p>";
            }
        } else {
            echo "<p>Imposivel sacar de uma conta Inativa!</p>";
        }
    }
    public function pagarMensal(){
        if( $this->getTipo() == "CC" ){
            $v = 12;
        }elseif($this->getTipo() == "CP"){
            $v = 20;
        }

        if($this->getStatus()){
            $this->setSaldo( $this->getSaldo() - $v );
            echo "<p>Mensalidade de R$: $v debitado na conta de ".$this->getNomeDono()."</p>";
        } else {
            echo "<p>Problema Com a conta, Não e Possivel Cobrar a Anuidade.</p>";
        }
    }
//Métodos Especiais
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada Com Sucesso!</p>";
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