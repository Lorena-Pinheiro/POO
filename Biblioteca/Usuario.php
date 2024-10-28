<?php
class Usuario{
    public $nome;
    public $cep;
    public $livros_emprestados = [];
    const MAX_EMPRESTIMO = 3;

    public function __construct($nome, $cep){
        $this->nome = $nome;
        $this->cep = $cep;
    }

    public function emprestar($livro){
        if(count($this->livros_emprestados) < self::MAX_EMPRESTIMO){
            array_push($this->livros_emprestados, $livro);
            return;
        }
    }

    public function devolver($livro){
        if(in_array($livro, $this->livros_emprestados)){
            $posicao = array_search($livro, $this->livros_emprestados);
            unset($this->livros_emprestados[$posicao]);
        }
    }

    public function create(){
        return $query = 'insert into usuario(nome, cep, genero) values ("'.$this->nome.'", "'.$this->cep.'");';
    }
    public function read(){
        return $query = 'select * from usuario where nome = "'.$this->nome.'";';
    }
    public function update($arrayColuna){
        $query = "update usuario set ";
        foreach($arrayColuna as $coluna){
            //pegar a chave
            //pegar valor

            $query .= $chave.' = "'.$valor.'"';
        }
        return $query += 'where nome = "'.$this->nome.'";';
    }
    public function delete(){
        return $query = 'delete * from usuario where nome = "'.$this->nome.'";';
    }
}