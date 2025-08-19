create database cadastro;
use database cadastro;

CREATE TABLE formulario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL UNIQUE,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    editado TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
);
