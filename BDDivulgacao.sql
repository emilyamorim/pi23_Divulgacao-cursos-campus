CREATE SCHEMA BDDivulgacao;

USE BDDivulgacao;

CREATE TABLE usuario(
id INT AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
usuario VARCHAR(10) NOT NULL,
senha INT NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE modalidade(
id INT AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE area_curso(
id INT AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE curso(
id INT AUTO_INCREMENT,
nome VARCHAR(30) NOT NULL,
descricao VARCHAR(200) NOT NULL,
carga_horaria VARCHAR(1000) NOT NULL,
id_modalidade INT NOT NULL,
id_area_curso INT NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_modalidade) REFERENCES modalidade (id),
FOREIGN KEY(id_area_curso) REFERENCES area_curso (id)
);