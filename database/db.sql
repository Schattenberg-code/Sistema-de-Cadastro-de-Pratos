CREATE database if not exists sistema_cadastrar_pratos_fixluc;
USE sistema_cadastrar_pratos_fixluc;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30),
    gmail VARCHAR(255),
    senha VARCHAR(20)
);

CREATE TABLE pratos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT FOREIGN KEY
);