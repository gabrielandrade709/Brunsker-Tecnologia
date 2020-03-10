CREATE DATABASE bdBrunSker;

USE bdBrunSker;

CREATE TABLE Usuario (
	nomeCompleto	VARCHAR (100) NOT NULL,
    apelido			VARCHAR (100) NOT NULL,
    cpf				VARCHAR (50)  NOT NULl,
    sexo			VARCHAR (9)	  NOT NULL,
    nascimento		VARCHAR 	(20)  NOT NULL,
    estado			VARCHAR	(50)	  NOT NULL,
    email			VARCHAR (100) NOT NULL,
    cidade			VARCHAR (50)  NOT NULL,
    cep				VARCHAR (50)  NOT NULL,
    telefone		VARCHAR	(20)  NOT NULL,
    celular			VARCHAR    (20)  NOT NULL,
    usuario 		VARCHAR (100) NOT NULL,
    senha			VARCHAR (100) NOT NULL,
    arquivo			VARCHAR (220) NULL
	);



INSERT INTO Usuario
			VALUES ('teste','teste','111.111.111-11','Masculino','11/11/1111','Minas Gerais','teste@teste.com','Belo Horizonte','11111-11','(11) 1111-1111','(11) 11111-1111','teste','teste','mario.jpg');
            

SELECT * FROM Usuario;