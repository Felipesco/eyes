CREATE DATABASE bdEyes
USE bdEyes

CREATE TABLE tbVuln(
    idVuln INT PRIMARY KEY AUTO_INCREMENT
    , nomeVuln VARCHAR(80) 
    , tipoVuln VARCHAR(50) 
    , descricaoVuln VARCHAR(200)
	, cveidVuln VARCHAR(35)
    , refenciaVuln VARCHAR(200)
    , riscoVuln INT 
    , imgVuln LONGBLOB
);

CREATE TABLE tbAlvo(
    idAlvo INT PRIMARY KEY AUTO_INCREMENT
    , FOREIGN KEY(idVuln) REFERENCES tbVuln(idVuln)
    , nomeAlvo VARCHAR(100) NOT NULL
    , descricaoAlvo VARCHAR(200)
    , urlAlvo VARCHAR(200) NOT NULL 
);
