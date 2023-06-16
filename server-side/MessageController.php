<?php

    require_once("MessageDAO.php");
    
    header("Content-Type: application/json; charset=utf-8");
    
    $nome = filter_input(INPUT_POST, "nome");
    $mensagem = filter_input(INPUT_POST, "mensagem");
    $messageDAO = new MessageDAO();
    $message = $messageDAO->send($nome, $mensagem);
    echo json_encode($message);
