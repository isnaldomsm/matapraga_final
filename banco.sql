DROP DATABASE IF EXISTS matapraga;
CREATE DATABASE matapraga;
USE matapraga;
CREATE TABLE usuarios ( 
	id int NOT NULL auto_increment,
	login varchar(100) NOT NULL,
	senha varchar(100) NOT NULL,
	tipo varchar(100) NOT NULL,
	PRIMARY KEY (id)
);
CREATE TABLE materiais (
	id int NOT NULL auto_increment,
	nome varchar(100) NOT NULL,
	codigo char(10) NOT NULL,
	quantidade int NOT NULL,
	descricao varchar(255) NULL,
	PRIMARY KEY (id)
);

CREATE TABLE tecnicos (
	id int NOT NULL auto_increment,
	nome varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	disponibilidade varchar(100) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE clientes (
	id int NOT NULL auto_increment,
	nome varchar(100) NOT NULL,
	razao_social varchar(100) NOT NULL,
	cnpj char(18) NOT NULL,
	endereco varchar(255) NOT NULL,
	data_ultima_visita date NOT NULL,
	data_proxima_visita date NOT NULL,
	status varchar(100) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE servicos (
	id int NOT NULL auto_increment,
	tecnico_id int NOT NULL,
	cliente_id int NOT NULL,
	data_execucao date NOT NULL,
	garantia int NOT NULL,	
	status varchar(100) NOT NULL,
	tipos varchar(255) NOT NULL,
	observacoes text NULL,
	FOREIGN KEY (tecnico_id) REFERENCES tecnicos(id),
	FOREIGN KEY (cliente_id) REFERENCES clientes(id),
	PRIMARY KEY (id)	
);

INSERT INTO usuarios (login,senha,tipo) VALUES ('lucas',md5('123'),'agendamento');