CREATE DATABASE bdEyes
USE bdEyes

CREATE TABLE IF NOT EXISTS tbVuln(
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
    , nomeAlvo VARCHAR(100) NOT NULL
    , descricaoAlvo VARCHAR(200)
    , urlAlvo VARCHAR(200) NOT NULL 
    , idVuln INT NOT NULL
    , FOREIGN KEY(idVuln) REFERENCES tbVuln(idVuln)
);

CREATE TABLE tbUser(
	idUser INT PRIMARY KEY AUTO_INCREMENT
    , nomeUser VARCHAR(80) NOT NULL
    , emailUser VARCHAR(100) NOT NULL
    , senhaUser VARCHAR(32) NOT NULL
    , telefoneUser VARCHAR(14)
    , idAlvo INT
    , FOREIGN KEY(idAlvo) REFERENCES tbAlvo(idAlvo)
);
