<?php
class Livro{
    public $titulo;
    public $autor;
    public $genero;
    public $usuario;
    public $status = 'Disponível'; 

    public function __construct($titulo,$autor,$genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
    }

    public function emprestar($usuario){
        if($this->status == 'Indisponivel'){
            echo 'Livro já está emprestado';
            return;
        }
        $this->usuario = $usuario;
        $this->status = 'Indisponivel';
    }

    public function devolver(){
        if($this->status == 'Disponível'){
            echo 'Livro não está emprestado';
            return;
        }
        $this->usuario = null;
        $this->status = 'Disponível';
    }
    
    public function create(){
        return $query = 'insert into livro(titulo, autor, genero) values ("'.$this->titulo.'", "'.$this->autor.'", "'.$this->genero.'");';
    }
    public function read(){
        return $query = 'select * from livro where titulo = "'.$this->titulo.'";';
    }
    public function update($arrayColuna){
        $query = "update livro set ";
        foreach($arrayColuna as $coluna){
            //pegar a chave
            //pegar valor

            $query .= $chave.' = "'.$valor.'"';
        }
        return $query += 'where titulo = "'.$this->titulo.'";';
    }
    public function delete(){
        return $query = 'delete * from livro where titulo = "'.$this->titulo.'";';
    }
}