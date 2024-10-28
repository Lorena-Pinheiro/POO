<?php 
interface Info{
    public function getInfo();
}
class Produto implements Info{
    public $nome;
    public $preco;
    public $descricao;
    public $quantidade;

    public function __construct($nome,$preco,$descricao,$quantidade){
        $this->nome=$nome;  
        $this->preco=$preco;
        $this->descricao=$descricao;
        $this->quantidade=$quantidade;
    }

    public function getInfo(){

    }
}