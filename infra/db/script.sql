// O script SQL abaixo é utilizado para criar o banco de dados e a tabela com os campos. Ele também insere um usuário padrão para que seja possível fazer login no sistema.

CREATE DATABASE sistema_simples;

USE sistema_simples;

CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

INSERT INTO usuario (usuario, senha) VALUES ('admin','123');