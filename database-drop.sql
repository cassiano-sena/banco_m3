DROP DATABASE IF EXISTS `projeto_bd`;
CREATE DATABASE `projeto_bd`;

USE `projeto_bd`;

DROP TABLE IF EXISTS `tab_usuario`;
CREATE TABLE `tab_usuario` (
    `usuario_id` int(11) AUTO_INCREMENT,
    `nome` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `telefone` varchar(50) NOT NULL,
    `senha` varchar(50) NOT NULL,
    `usuario_status` char(1) NOT NULL,
    PRIMARY KEY (`usuario_id`)
);

DROP TABLE IF EXISTS `tab_origem`;
CREATE TABLE `tab_origem` (
    `origem_id` int(11) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(110) NOT NULL,
    `telefone` varchar(110) NOT NULL,
    `email` varchar(110) NOT NULL,
    `origem_status` char(1) NOT NULL,
    PRIMARY KEY (`origem_id`)
);

DROP TABLE IF EXISTS `tab_categoria`;
CREATE TABLE `tab_categoria` (
    `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(110) NOT NULL,
    `descricao` varchar(110) NOT NULL,
    `categoria_status` char(1) NOT NULL,
    PRIMARY KEY (`categoria_id`)
);

DROP TABLE IF EXISTS `tab_forma_pagamento`;
CREATE TABLE `tab_forma_pagamento` (
    `forma_id` int(11) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(110) NOT NULL,
    `descricao` varchar(110) NOT NULL,
    `forma_status` char(1) NOT NULL,
    PRIMARY KEY (`forma_id`)
);

DROP TABLE IF EXISTS `tab_historico`;
CREATE TABLE `tab_historico` (
    `historico_id` int(11) NOT NULL AUTO_INCREMENT,
    `titulo` varchar(110) NOT NULL,
    `descricao` varchar(110) NOT NULL,
    `historico_status` char(1) NOT NULL,
    PRIMARY KEY (`historico_id`)
);

DROP TABLE IF EXISTS `tab_despesa`;
CREATE TABLE `tab_despesa` (
    `despesa_id` int(11) NOT NULL AUTO_INCREMENT,
    `usuario_id` int(11) NOT NULL,
    `origem_id` int(11) NOT NULL,
    `categoria_id` int(11) NOT NULL,
    `forma_id` int(11) NOT NULL,
    `titulo` varchar(50) NOT NULL,
    `descricao` varchar(200) NOT NULL,
    `despesa_status` char(1) NOT NULL,
    PRIMARY KEY (`despesa_id`),
    FOREIGN KEY (`usuario_id`) REFERENCES `tab_usuario`(`usuario_id`),
    FOREIGN KEY (`categoria_id`) REFERENCES `tab_categoria`(`categoria_id`),
    FOREIGN KEY (`forma_id`) REFERENCES `tab_forma_pagamento`(`forma_id`),
    FOREIGN KEY (`origem_id`) REFERENCES `tab_origem`(`origem_id`)
);

INSERT INTO `tab_usuario` (`usuario_id`,`nome`,`email`,`telefone`,`senha`,`usuario_status`) VALUES
(1,'Funcionario 1','Funcionario1@email.com','1234-5678','Funcionario','A'),
(2,'Funcionario 2','Funcionario2@email.com','1234-5678','Funcionario','A');

INSERT INTO `tab_origem` (`origem_id`,`titulo`,`telefone`,`email`,`origem_status`) VALUES
(1,'Origem 1','1111-1111','origem1@email.com','A'),
(2,'Origem 2','2222-2222','origem2@email.com','A');

INSERT INTO `tab_categoria` (`categoria_id`,`titulo`,`descricao`,`categoria_status`) VALUES
(1,'Para uso empresarial','1','A'),
(2,'Materiais para construção','2','A');

INSERT INTO `tab_forma_pagamento` (`forma_id`,`titulo`,`descricao`,`forma_status`) VALUES
(1,'Crédito','1','A'),
(2,'À vista','3','A');

INSERT INTO `tab_despesa` (`despesa_id`,`usuario_id`,`origem_id`,`categoria_id`,`forma_id`,`titulo`,`descricao`,`despesa_status`) VALUES
(1,1,1,1,1,'Despesa 1','Compra de detergente','A'),
(2,2,1,2,2,'Despesa 2','Compra de papel','A');
