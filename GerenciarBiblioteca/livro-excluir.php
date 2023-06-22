<?php
// inclui o arquivo que tem a classe "Autor.php"
require_once "classes/Livro.php";

//obtem o valor do parâmetro "id' da URL e armazena em variável
$id = $_GET['idLivro'];

// cria um novo objeto Autor
$livro = new Livro($idLivro);

//chama o método excluir
$livro->excluir();
// redireciona o usuario para a pagina "autor-listara.php"
header('location:autor-listar.php');
?>
