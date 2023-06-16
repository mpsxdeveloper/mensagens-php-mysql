<?php

require_once("ConnectionFactory.php");

class MessageDAO {

    private $connection;
    
    public function __construct() {
        $this->connection = ConnectionFactory::connect();
    }

    public function send($nome, $mensagem) {
        try {            
            $sql = "INSERT INTO mensagens (nome, mensagem) VALUES (:nome, :mensagem)";
            $rs = $this->connection->prepare($sql);
            $rs->bindValue(":nome", $nome);
            $rs->bindValue(":mensagem", $mensagem);
            $rs->execute();
            if($rs->rowCount() > 0) {
                return true;
            }
        } 
        catch (PDOException $e) {
            $e->getMessage();            
            return false;
        }
        return false;
    }

}
