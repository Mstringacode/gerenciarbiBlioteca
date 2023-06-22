<?php
// inclui o arquivo que tem a classe "Autor.php"
require_once "classes/Autor.php";

//obtem o valor do parâmetro "id' da URL e armazena em variável
$id = $_GET['id_autor'];

// cria um novo objeto Autor
$autor = new Autor($id);

//chama o método excluir
$autor->excluir();
// redireciona o usuario para a pagina "autor-listara.php"
header('location:autor-listar.php');
?>

