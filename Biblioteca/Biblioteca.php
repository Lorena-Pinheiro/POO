<?php
class Biblioteca{
    const servidor = "localhost";
    const usuario = "root";
    const senha = "";
    const banco_de_dados = "biblioteca";
    public static function emprestar($livro, $usuario){
        $livro->emprestar($usuario);
        $usuario->emprestar($livro);
    }

    public static function Devolver($livro, $usuario){
        $livro->devolver();
        $usuario->devolver($livro);
    }
    public static function conexao(){
        return $conexao = mysqli_connect(self::servidor,self::usuario,self::senha, self::banco_de_dados);
    }

    public static function createLivro($livro){
        self::conexao()->query($livro->create());
        self::conexao()->close();
    }
    public static function readLivro($livro){
        self::conexao()->query($livro->read());
        self::conexao()->close();
    }
    public static function updateLivro($livro, $valores){
        self::conexao()->query($livro->update($valores));
        self::conexao()->close();
    }
    public static function deleteLivro($livro){
        self::conexao()->query($livro->delete());
        self::conexao()->close();
    }


    public static function createUsuario($usuario){
        try{
            self::conexao()->query($usuario->create());
        } catch(Exception $e){
            echo 'Message: '.$e->getMessage();
        }
        self::conexao()->close();
    }
    public static function readUsuario($usuario){
        self::conexao()->query($usuario->read());
        self::conexao()->close();
    }
    public static function updateUsuario($usuario, $valores){
        self::conexao()->query($usuario->update($valores));
        self::conexao()->close();
    }
    public static function deleteUsuario($usuario){
        self::conexao()->query($usuario->delete());
        self::conexao()->close();
    } 
}