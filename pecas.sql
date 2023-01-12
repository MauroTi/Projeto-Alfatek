CREATE DATABASE pecas;

USE pecas;

CREATE TABLE pecas (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  quantidade INT NOT NULL,
  nome_pendencias VARCHAR(255) NOT NULL,
  codigo_pendencias VARCHAR(255) NOT NULL,
  quantidade_pendencias INT NOT NULL,
  os_pendencias INT NOT NULL
);