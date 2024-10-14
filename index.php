<?php

    class Usuario{
        public $nome;
        public $idade;
        public $email;
        public $senha;

        public function Cadastrar(){
            if($this->email == "caique@gmail.com" && $this->senha == "12345"){
                echo"Cadastrado com sucesso";
            }
            else{
                echo "Erro ao cadastrar";
            }
        }
    }

    $caique = new Usuario();

    $caique->nome = "Caique Fernades";
    $caique->idade = 23;
    $caique->email = "caique@gmail.com";
    $caique->senha = "12345";

    //$caique->Cadastrar();


    class Pessoa{
        public $nome;
        public $idade;
        public $altura;
        public $peso;

        public function __construct($nome, $idade, $altura, $peso) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNome() {
            return $this->nome;
        }

        public function Andar(){
            echo $this->nome . " Andou";
        }

        public function Falar(){
            echo $this->nome . " Falou";
        }

        public function Comer(){
            echo $this->nome . " Comeu";
        }

        public function Dormir(){
            echo $this->nome . " Dormiu";
        }
    }

    $pedro = new Pessoa("Pedro Lucas", 17, 1.71, 45);
    //echo $pedro->getNome();
    $pedro->Andar();

    class Veiculo{
        public $nome;
        public $marca;
        public $modelo;
        public $placa;
        public $cor;

        public function __construct($nome, $marca, $modelo, $placa, $cor) {
            $this->nome = $nome;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->placa = $placa;
            $this->cor = $cor;
        }
    }

    class Moto extends Veiculo{
        public function Andar() {

        }

        public function Empinar() {

        }
    }

    class Carro extends Veiculo{
        public function Andar() {

        }
    }