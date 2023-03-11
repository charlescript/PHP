<?php

class Contato {

    private $pdo;


    // Método construtor já fazendo a conexão com o banco de dados.
    public function __construct() {
        $this->pdo = new PDO("mysql:dbname=POO_CRUD;host=127.0.0.1","root","");
        //echo "Conexão bem sucedida!<br/>";
    }


    //---------------------------------------------------------------------------------------------
    // Função para adicionar um nome e email na tabela contatos, sendo que nome não é obrigatório, por isso foi inicializado com valor nulo
    public function adicionar($email,$nome = '') {

        // 1º passo = verificar se o email já existe no sistema
        // 2º passo = adicionar

        if($this->existeEmail($email) == false) {
            $sql = "INSERT INTO contatos(nome, email) values (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            
            echo "<br/>Nome: ".$nome. " foi adicionado com email: ".$email;
            return true;

        } else {
            return false;
        }
    }

    //---------------------------------------------------------------------------------------------
    // Função para consultar um nome da tabela contato que tenha o email que foi passado como parametro
    public function getNome($email) {
        $sql = "SELECT nome FROM contatos where EMAIL = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info['nome'];

        } else {
            return '';
        }

    }



    //---------------------------------------------------------------------------------------------
    //Função para pegar todos os dados da tabela contatos
    public function getAll() {
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0) {
            return $sql->fetchAll();
        } else {
            return array();
        }
    }


    public function getInfo($id){
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else {
            return array();
        }

    }

    //---------------------------------------------------------------------------------------------    

    // Função para editar nome ou email do usuário
    public function editar($nome, $email) {
        
        if($this->existeEmail($email) == true){
            $sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();
            echo "<br/>Usuário com email: ".$email." teve seu nome alterado para: ".$nome;
            return true;

        } else {
            return false;
        }   
    }

    public function editar2($id, $nome, $email) {
        
        if($this->existeId($id) == true){
            if($this->existeEmail($email) == false) {
                $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
                $sql = $this->pdo->prepare($sql);
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":email", $email);
                $sql->bindValue(":id", $id);
                $sql->execute();
            }
        } else {
            return false;
        }   
    }
 

    //---------------------------------------------------------------------------------------------
    // Função para excluir email que foi passado como parametro caso ele exista
    // public function excluir($email) {
    //     if($this->existeEmail($email) == true){
    //         $sql = "DELETE FROM contatos WHERE email = :email";
    //         $sql = $this->pdo->prepare($sql);
    //         $sql->bindValue(":email", $email);
    //         $sql->execute();
            
    //         $data_delecao = date('d/m/Y');
    //         if(!empty($nome)){
    //             echo "<br/>Usuário com email: ".$email." cujo nome é: ".$nome. " teve seu registro deletado ".$data_delecao;
    //         }   else {
    //             echo "<br/>Usuário com email: ".$email." teve seu registro deletado ".$data_delecao;
    //         }

    //         return true;

    //     } else {
    //         return false;
    //     }
    // }

    public function excluirPeloEmail($email){
        $sql = "DELETE FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();
    }

    public function excluirPeloId($id) {
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    //---------------------------------------------------------------------------------------------
    
    // Função para verificar se um email existe na tabela contatos.
    private function existeEmail($email) {
        $sql = "SELECT * FROM CONTATOS WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    private function existeId($id) {
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            return true;
        }
        else{
            return false;
        }
    }


    //---------------------------------------------------------------------------------------------
   

}
?>