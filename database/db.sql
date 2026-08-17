CREATE DATABASE IF NOT EXISTS sistema_cadastrar_pratos_fixluc;
USE sistema_cadastrar_pratos_fixluc;

CREATE TABLE if NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30),
    gmail VARCHAR(255)
);

CREATE TABLE if NOT EXISTS pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40),
    preco DECIMAL(10,2),
    descricao VARCHAR(255),
    categoria VARCHAR(40),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);