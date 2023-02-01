CREATE TABLE professor
(
  nome VARCHAR(50) NOT NULL,
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id)
);

CREATE TABLE cursos
(
  cursoid INT NOT NULL AUTO_INCREMENT,
  professorid INT NOT NULL,
  nome VARCHAR(30) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  preco FLOAT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (professorid) REFERENCES Professor(id)
);
