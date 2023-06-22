<?php
// inclui o arquivo que tem a classe "Autor.php"
require_once "classes/Autor.php";

//cria um novo objeto Autor
$autor = new Autor();

//chama o método listar e aramazena o resulatado em uma variável
$lista = $autor->listar();
        //O comando foreach é usado para percorrer todos os elementos do
        //array $lista. Ele funciona da seguinte maneira: a cada iteração do
        //loop, uma variável $linha é criada e recebe o valor do elemento do
        //array correspondente à iteração atual. Ou seja, a cada iteração do
        //loop, a variável $linha recebe um array associativo contendo os
        //valores das colunas id, descTurma e ano. Em seguida, esses valores
        //são exibidos na tabela HTML usando as tags td.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    /
    <h1>Biblioteca</h1>
    <h3>Listar Autores</h23>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
            <th>Data</th>
            <th>ações</th>
        </tr>
        <?php foreach($lista as $linha):?>
        <tr>
            <td><?php echo $linha['id_autor']?></td>          
            <td><?php echo $linha ['nome']?></td>
            <td><?php echo $linha['nacionalidade']?></td>
            <td><?php echo $linha['nacionalidade']?></td>
            <td>
                <a href="autor-editar.php?id_autor=<?= $linha['id_autor'] ?>">Atualizar</a>
                <a href="autor-excluir.php?id_autor=<?= $linha['id_autor'] ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>

</body>
</html>

