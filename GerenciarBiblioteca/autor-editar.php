<?php
// inclui o arquivo que tem a classe "Autor.php"
require_once "classes/Autor.php";

//obtem o valor do parâmetro "id' da URL e armazena em variável
$id_autor = $_GET['id_autor'];

// cria um novo objeto Autor
$autor = new Autor($id_autor);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="autor-editar-gravar.php" method="POST">
        <input type="hidden" name="id_autor" value="<?= $autor->id_autor?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome"value="<?= $autor->nome?>">
        <br><br>
        <label for="naci">Nacionalidade</label>
        <input type="text" name="naci"value="<?= $autor->nacionalidade?>">
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>