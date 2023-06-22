<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM tb_usuario WHERE usuario ='{$usuario}' and senha='{$senha}'";
$conexao = new PDO('mysql:host=127.0.0.1; dbname=biblioteca','root','');
$resultado = $conexao->query($sql);
$linha = $resultado ->fetch();
$usuario_logado=$linha['usuario'];

echo $sql;
echo "<prey>";
print_r($linha);
echo  "</prey>";
echo "$usuario_logado";
if($usuario_logado == null){
    header('location:biblioteca-erro.php');
}
else{
    session_start();
    $_SESSION['usuario'] = $usuario_logado;
    header(('loaction:index2.php'));
}
?>