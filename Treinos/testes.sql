create database projeto_caixaeletronico;

use projeto_caixaeletronico;

CREATE TABLE `contas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titular` varchar(100) DEFAULT NULL,
  `agencia` int(11) DEFAULT NULL,
  `conta` int(11) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


LOCK TABLES `contas` WRITE;
/*!40000 ALTER TABLE `contas` DISABLE KEYS */;

INSERT INTO `contas` (`id`, `titular`, `agencia`, `conta`, `senha`, `saldo`)
VALUES (1,'Bonieky Lacerda',123,321,'202cb962ac59075b964b07152d234b70',5083.2);

/*!40000 ALTER TABLE `contas` ENABLE KEYS */;
UNLOCK TABLES;

CREATE TABLE `historico` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_conta` int(11) DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `data_operacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


LOCK TABLES `historico` WRITE;


INSERT INTO `historico` (`id`, `id_conta`, `tipo`, `valor`, `data_operacao`)
VALUES(1,1,0,1000,'2017-07-10 12:28:00'),
	(2,1,1,150.3,'2017-07-10 12:28:31'),
	(3,1,0,20,'2017-07-10 12:28:54'),
	(4,1,1,69.7,'2017-07-10 12:29:09'),
	(5,1,1,100,'2017-07-10 12:29:20'),
	(6,1,0,4983.2,'2017-07-10 12:29:35'),
	(7,1,1,600,'2017-07-10 12:29:50');
    
    
UNLOCK TABLES;