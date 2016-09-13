CREATE TABLE alunos (
  aluno_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_usu_cod INTEGER(10) UNSIGNED NOT NULL,
  aluno_nome VARCHAR(100) NULL,
  aluno_idade INTEGER(10) UNSIGNED NULL,
  aluno_dtnasc DATE NULL,
  aluno_cidade VARCHAR(100) NULL,
  aluno_rua VARCHAR(100) NULL,
  aluno_bairro VARCHAR(100) NULL,
  aluno_grau VARCHAR(100) NULL,
  aluno_interesse VARCHAR(100) NULL,
  aluno_cursou VARCHAR(100) NULL,
  aluno_trabalhou VARCHAR(100) NULL,
  aluno_dtcadas DATE NULL,
  PRIMARY KEY(aluno_cod),
  INDEX alunos_FKIndex1(usuario_usu_cod)
);

CREATE TABLE bairros (
  bairro_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  cidade_cod INTEGER(10) UNSIGNED NOT NULL,
  bairro_nome VARCHAR(100) NULL,
  PRIMARY KEY(bairro_cod),
  INDEX bairros_FKIndex1(cidade_cod)
);

CREATE TABLE cidade (
  cidade_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_usu_cod INTEGER(10) UNSIGNED NOT NULL,
  cidade_nome VARCHAR(100) NULL,
  PRIMARY KEY(cidade_cod),
  INDEX cidade_FKIndex1(usuario_usu_cod)
);

CREATE TABLE cursos (
  curso_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario_usu_cod INTEGER(10) UNSIGNED NOT NULL,
  curso_nome VARCHAR(100) NULL,
  curso_desc VARCHAR(100) NULL,
  curso_data DATE NULL,
  PRIMARY KEY(curso_cod),
  INDEX cursos_FKIndex1(usuario_usu_cod)
);

CREATE TABLE Telefones (
  telefone_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  alunos_aluno_cod INTEGER(10) UNSIGNED NOT NULL,
  telefone_res VARCHAR(100) NULL,
  telefone_com VARCHAR(100) NULL,
  telefone_cel VARCHAR(100) NULL,
  PRIMARY KEY(telefone_cod),
  INDEX Telefones_FKIndex1(alunos_aluno_cod)
);

CREATE TABLE usuario (
  usu_cod INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  usu_nome VARCHAR(100) NULL,
  usu_login VARCHAR(100) NULL,
  usu_pass VARCHAR(100) NULL,
  usu_data DATE NULL,
  usu_privilegio VARCHAR(100) NULL,
  PRIMARY KEY(usu_cod)
);

