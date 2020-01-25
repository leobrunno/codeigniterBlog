CREATE DATABASE blog;

CREATE TABLE blog.postagem(
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100),
    conteudo TEXT,
    PRIMARY KEY(id)
);

CREATE TABLE `usuarios` (
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  PRIMARY KEY(usuario)
);