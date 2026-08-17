CREATE DATABASE IF NOT EXISTS sistema_cadastrar_pratos_fixluc;
USE sistema_cadastrar_pratos_fixluc;

CREATE TABLE if NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    email VARCHAR(255) NOT NULL
);

CREATE TABLE if NOT EXISTS pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao VARCHAR(255),
    categoria VARCHAR(40) NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);