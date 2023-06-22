<?php
 class Livro{
    public $idLivro;
    public $titulo;
    public $autor;
    public $genero;

    public function __construct($idLivro = false){
        if($idLivro){
            $this->idLivro = $idLivro;
            $this->carregar();
        }
    }

    public function inserir(){
        $sql =  "INSERT INTO tb-livro (titulo, autor, genero) VALUES('{$this->titulo}', '{$this->genero}', '{$this->autor}')";
        include_once "classes/conexao.php";
        $conexao->exec($sql);
        echo "Registri gravado com sucesso!";

    }
    public  function  listar(){
        $sql = "SELECT * FROM tb-livro";
        include_once "classes/conexao.php";
        $resultado = $conexao->query($sql);
        return $lista;      
    }

    public function excluir(){
        $sql = "DELETE FROM tb-livro WHERE idLivro = ".$this->idLivro;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=biblioteca','root','');
        $conexao->exec($sql);
    }

    public function carregar()
    {
        $sql = "SELECT * FROM tb-livro WHERE idLivro = " .$this->idLivro;
        include_once "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $linha = $resultado->fetch();
        $this->titulo = $linha['id_livro'];
        $this->titulo = $linha['titulo'];
        $this->titulo = $linha['Genero'];
        $this->titulo = $linha['Autor'];
    }
    public function atualizar()
    {
        $sql = "UPDATE tb-livro SET
        titulo = '".$this->titulo."'
         WHERE idlivro = '".$this->idLivro."'";
             $conexao = new PDO('mysql:host=127.0.0.1;dbname=biblioteca','root','');
                    $conexao->exec($sql);
                
    }
}



 