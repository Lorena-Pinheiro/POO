<?php
    class Pessoa{
        const nome = "Agatha";

        public function getNome(){
            echo self::nome;
        }
    }

    class Lorena extends Pessoa{
        const nome = "Lorena";
        public function getNomeParent(){
            echo parent::nome;
        }
    }