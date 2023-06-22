<?php
require_once "classes/Autor.php";
// cria um novo objeto turma usando o id como referencia
$id_autor = $_POST['id_autor'];
$autor = new Autor($id);

//define as propriedades do nome e da nacionalidade do objeto Autor.
$autor->nome =$_POST['nome'];
$autor->nacionalidade = $_POST['nacionalidade'];

//chama o objeto atualizar() no objeto Autor
$autor->atualizar();
// redireciona a pagina para a listagem dos aurtores
header(('Location: turmas-listar.php'));
?> 