<?php

require_once "classes/Livro.php";
$id_livro = $_POST['id_livro'];
$livro = new Livro($idLivro);
$livro->idLivro = $_POST['idLivro'];
$livro->titulo = $_POST['titulo'];
$livro->atualizar();
header('Location: livro-listar.php');

?>
