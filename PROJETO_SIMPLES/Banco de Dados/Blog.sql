DROP DATABASE IF EXISTS Blog;

CREATE DATABASE Blog;

USE Blog;

CREATE TABLE fornecedor(
idfornecedor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
senha VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
telefone CHAR(11) NOT NULL,
Empresa VARCHAR(255)
)engine=innoDB;

CREATE TABLE usuarios(
	idusuario  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	senha VARCHAR(14) NOT NULL,
    cpf char(11) NOT NULL,
    Telefone char(11) NOT NULL,
	Endereco VARCHAR(255) NOT NULL,
	Cidade VARCHAR(255) NOT NULL,
	CEP	char(8) NOT NULL,
	Pais VARCHAR(255) NOT NULL
)engine=innoDB;

 CREATE TABLE produtos(
codproduto INT AUTO_INCREMENT PRIMARY KEY,
imagem varchar (255) NOT NULL,
marca varchar(255),
nome VARCHAR(255) NOT NULL,
descricao VARCHAR(255) NOT NULL,
preco decimal(10,2) not null,
categoria varchar(255) not null
)engine=innoDB;


CREATE TABLE ADM (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
senha VARCHAR(255) NOT NULL,
Telefone char(11) NOT NULL,
email VARCHAR(255) NOT NULL
)engine=innoDB;

INSERT INTO produtos
(codproduto,imagem,nome,marca,descricao,preco,categoria)
VALUES
("0","https://http2.mlstatic.com/D_NQ_NP_2X_615348-MLA95941985237_102025-F.webp","GuardianCam Pro","GuardianSec","Câmera de segurança Full HD com visão noturna e detecção de movimento.","349,90","Câmeras de Segurança"),
("0","https://static.tp-link.com/upload/image-line/IMG_01_normal_20231004135406e.jpg","TP-Link Tapo C200","TP-Link","Câmera Wi-Fi interna Full HD 1080p, visão 360°, rotação pan/tilt, visão noturna e áudio bidirecional — ideal para casas e pequenos escritórios.","289,90","Câmeras de Segurança"),
("0","https://http2.mlstatic.com/D_Q_NP_866520-MLU77104985049_062024-F.webp","Hikvision DS-2CE16D0T-IRP","Hikvision","Câmera Full HD com infravermelho de 20m, ideal para áreas externas.","160,00","Câmeras de Segurança"),
("0","https://m.media-amazon.com/images/I/41zRtAoGFsL._AC_SL1000_.jpg","Intelbras XAS 4010 SMART","Intelbras","Sensor para portas e janelas com comunicação sem fio.","85,00","Sensores de Alarme"),
("0","https://m.media-amazon.com/images/I/31ksHJNphFL._AC_SL1200_.jpg","Intelbras IVA 7100 Sensor de Barreira","Intelbras","Sensor infravermelho ativo de 30m para proteção perimetral."," 230,00"," Sensores Perimetrais"),
("0","https://http2.mlstatic.com/D_NQ_NP_2X_925628-MLB79060264309_092024-F.webp","JFL Active 20 Bus","JFL"," Central de alarme com 20 zonas e suporte para controle por app.","420,00","Centrais de Alarme"),
("0","https://http2.mlstatic.com/D_NQ_NP_2X_685697-MLA99935997515_112025-F.webp","Positivo Smart Fechadura Wi-Fi","Positivo","Fechadura digital com senha, tag e controle remoto via Wi-Fi.","580,00","Fechaduras Smart"),
("0","https://m.magazineluiza.com.br/a-static/420x420/fechadura-digital-de-sobrepor-com-biometria-fr-220-preta-intelbras/intelbraslojaoficial/4527002/2a25ea5828ee7b52de88556f6a4ab835.jpeg","Intelbras FR 220 Fechadura Digital","Intelbras"," Fechadura digital com senha, travamento automático e modo privacidade.","420,00","Fechaduras Smart"),
("0","https://m.media-amazon.com/images/I/417NjhnJc4L._AC_SL1024_.jpg","Intelbras Mibo iC3","Intelbras","Câmera Wi-Fi com visão noturna, detecção de movimento e gravação no app.","220,00","Câmeras de Segurança"),
("0","hhttps://m.media-amazon.com/images/I/41z0zpjoQBL._AC_SY450_.jpg","Intelbras Sir 1000"," Intelbras","Sirene de 105 dB para centrais de alarme.","35,00","Alarmes"),
("0","https://elsys.vtexassets.com/arquivos/ids/160767-1200-1200?v=637407908240200000&width=1200&height=1200&aspect=true","Elsys ESS 422"," Elsys","Câmera Wi-Fi resistente à chuva com gravação em nuvem.","190,00","Câmeras de Segurança"),
("0","https://m.media-amazon.com/images/I/610Gf7BU2tL._AC_SX355_.jpg","Intelbras VRLA 12V 7Ah XB 1270","Intelbras","Bateria para alarmes, cercas elétricas e nobreaks residenciais.","95,00","Baterias");



-- CREATE TABLE Categorias(
-- 	CodCategoria INT NOT NULL AUTO_INCREMENT primary key,
-- 	quantidadeD VARCHAR(5)
-- );