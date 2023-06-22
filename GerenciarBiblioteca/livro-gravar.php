<?php

require_once "classes/Livro.php";


$livro = new Livro();

$livro->titulo = $_POST['titulo'];
$livro->genero = $_POST['genero'];
$livro->autor =$_POST['autor'];


$autor->inserir();
?>