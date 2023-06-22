<?php
// inclui o arquivo que tem a classe "Autor.php"
require_once "classes/Livro.php";

//obtem o valor do parâmetro "id' da URL e armazena em variável
$idLivro = $_GET['idLivro'];

// cria um novo objeto Autor
$livro= new Livro($idLivro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="livro-editar-gravar.php" method="POST">
        <input type="hidden" name="idLivro" value="<?= $livro->idLivro?>">
        <label for="nvtitulo">Novo Titulo:</label>
        <input type="text" name="nvtitulo"value="<?= $livro->titulo?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>