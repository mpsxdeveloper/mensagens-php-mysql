CREATE DATABASE mensagem;

CREATE TABLE mensagens (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(20) NOT NULL,
    mensagem VARCHAR(300) NOT NULL,
    PRIMARY KEY(id)
);