CREATE DATABASE pecas;

USE pecas;

CREATE TABLE pecas (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  quantidade INT NOT NULL,
  os INT NOT NULL
);