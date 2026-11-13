
CREATE DATABASE banco_oficina;
USE banco_oficina;

SET NAMES utf8mb4;

CREATE TABLE usuarios  (
    id     INT AUTO_INCREMENT PRIMARY KEY,
    nome   VARCHAR(100) NOT NULL,
    login  VARCHAR(50)  NOT NULL UNIQUE,
    senha  VARCHAR(255) NOT NULL,
    ativo  TINYINT(1)   NOT NULL DEFAULT 1
);

CREATE TABLE servicos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    status BOOLEAN NOT NULL,
    descricao VARCHAR(100)
);

INSERT INTO usuarios $2y$12$.q6zGjUyEqDts4DcYY9bzORvVzocrBsdkisHYLmOJ1x2ORulTY4hy