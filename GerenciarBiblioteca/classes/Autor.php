<?php
class Autor{
    public $id_autor;
    public $nome;
    public $nacionalidade;
    public $data;

    
    // define um método construtor com parametro opcional
    public function __construct($id_autor = false){
        // verifica se a variavel id_autor foi definida
        if ($id_autor){
            //atribui valor de $id_autor á propriedade $id_autor do objeto
            $this->id_autor = $id_autor;
            //carrega as informaçãoes correspondente ao $id do objeto
            $this->carregar();
        }
    }
    
    public function inserir()
    {
        //define a string SQL de inserção de dados na tabela "tb_autor" usando INSER INTO
        $sql = "INSERT INTO tb_autor (nome, nacionalidade) VALUES ('".$this->nome."' , '".$this->nacionalidade."' , '".$this->data."')";
        
        // cria uma nova conexão PDo com o banco de dados "biblioteca"
        $conexao = new PDO('mysql:host=127.0.0.1; dbname=biblioteca','root','');

        // executa a string sql na conexao, inserindo os dados na tabela "tb_autor"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso!";
    
    }
   

    public function listar(){
        //Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_autor";

        // cria uma nova conexão PDo com o banco de dados "biblioteca"
        $conexao = new PDO('mysql:host=127.0.0.1; dbname=biblioteca','root','');
        
        // executa a string SQl na conexão retornando um objeto de resultado
        $resultado = $conexao->query($sql);
         
        //extrai todos os registros do objeto e os armazena em uma  array
        $lista = $resultado->fetchAll();

         // retorna o array contendo todo os registros da tabela tb_autor
        return $lista;
    }
    public  function excluir(){
        //define a string de consulta SQL para deletar um registro 
        //da tablea tb_autor com base no seu id
        $sql= "DELETE FROM tb_autor WHERE id_autor=" .$this->id_autor;
        echo $sql;
        die();
        // cria uma nova conexão PDo com o banco de dados "biblioteca"
        //no servidor 127.0.0.1 e autentica com usuario "root' (sem senha)
        $conexao = new PDO('mysql:host=127.0.0.1; dbname=biblioteca','root','');
        
        //execduta a instrução SQL de exclusao utilizando o método
        // "exec" do objeto de conexão PDO criado acima
        $conexao->exec($sql);
    }

    public function carregar(){
        // query SQL para buscar um autor no banco de dados pelo id
        $sql = "SELECT * FROM tb_autor WHERE id=" .$this->id_autor;

        // cria uma nova conexão PDO com o banco de dados "biblioteca"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=biblioteca','root','');
        
        // execução da query e aramzenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
         
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        //atribuição dos valores dos campos recuperado do banco
        $this->nome = $linha['nome'];
        $this->nacionalidade = $linha['nacionalidade'];
    }

    public function atualizar(){
        // querrySQl para atualizar um autor pelo id 
        $sql = "UPDATE tb_autor SET nome ='$this->nome', nacionalidade = '$this->nacionalidade',data = '$this->data.' WHERE id_autor = $this->id_autor";
        // cria uma nova conexão PDO com o banco de dados "biblioteca"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=biblioteca','root','');
        $conexao->exec($sql);
    }
        
}
?>