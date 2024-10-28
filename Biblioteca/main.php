<?php
require "Livro.php";
require "Usuario.php";
require "Biblioteca.php";

use Livro as Livro;
use Usuario as Usuario;

$usuario = new Usuario('fghhgj', '123');
Biblioteca::createUsuario($usuario);