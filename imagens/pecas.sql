CREATE DATABASE pecas;

USE pecas;

CREATE TABLE pecas (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  codigo VARCHAR(255) NOT NULL,
  quantidade INT NOT NULL,
  observacoes VARCHAR(255),
  data_pecas date NOT NULL,
  nome_pendencias VARCHAR(255) NOT NULL,
  codigo_pendencias VARCHAR(255) NOT NULL,
  quantidade_pendencias INT NOT NULL,
  os_pendencias INT NOT NULL,
  data_pendencias date NOT NULL,
  observacoes_pendencias VARCHAR(255),
  suprimentos VARCHAR(255),
  usuario VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
);