<?php
//inclui o arquivo com a classe Autor.php
require_once "classes/Autor.php";

//Cria um nono objeto Autor
$autor = new  Autor();

//define os valores como o nome e a nacionalidade do objeto Autor
// com os valores enviados pelo formulario
$autor->nome = $_POST['nome'];
$autor->nacionalidade = $_POST['nacionalidade'];
$autor->data =$_POST['data'];

//chama o método inserir da classe Autor.php
//para inserir os dados nom banco de dados autor
$autor->inserir();
?>