--LOCALIZAÇÃO - OK

CREATE TABLE uf (
    id BIGSERIAL PRIMARY KEY,
    uf CHAR(2)
);

CREATE TABLE estado (
    id BIGSERIAL PRIMARY KEY,
    nm_estado VARCHAR(100),
    uf_id BIGINT REFERENCES uf(id)
);

CREATE TABLE cidade (
    id BIGSERIAL PRIMARY KEY,
    nm_cidade VARCHAR(100),
    estado_id BIGINT REFERENCES estado(id)
);

CREATE TABLE bairro (
    id BIGSERIAL PRIMARY KEY,
    nm_bairro VARCHAR(100)
);

CREATE TABLE tipo_logradouro (
    id BIGSERIAL PRIMARY KEY,
    ds_tipo_logradouro VARCHAR(20),
    ativo BOOLEAN
);

CREATE TABLE logradouro (
    id BIGSERIAL PRIMARY KEY,
    cep VARCHAR(9),
    nm_logradouro VARCHAR(100),
    bairro_id BIGINT REFERENCES bairro(id),
    tipo_logradouro_id BIGINT REFERENCES tipo_logradouro(id),
    cidade_id BIGINT REFERENCES cidade(id)
);

-- SEGUNDO CREATE - OK

CREATE TABLE telefone (
    id BIGSERIAL PRIMARY KEY,
    numero VARCHAR(20),
    situacao BOOLEAN
);

CREATE TABLE sexo (
    id BIGSERIAL PRIMARY KEY,
    sexo VARCHAR(10),
    ativo BOOLEAN
);

CREATE TABLE tipo_usuario (
    id BIGSERIAL PRIMARY KEY,
    ds_tipo_usuario VARCHAR(10),
    ativo BOOLEAN
);

CREATE TABLE situacaoCurso (
    id BIGSERIAL PRIMARY KEY,
    descricao_situacao VARCHAR(50)
);

CREATE TABLE curso (
    id BIGSERIAL PRIMARY KEY,
    nome VARCHAR(250),
    duracao INT
);

CREATE TABLE tipo_instituicao (
    tp_instituicao_id SERIAL PRIMARY KEY,
    descricao_instituicao VARCHAR(20),
    situacao BOOLEAN
);

--TERCEIRO CREATE - OK

CREATE TABLE instituicao (
    id BIGSERIAL PRIMARY KEY,
    nome VARCHAR(250),
    emec INT,
    logradouro_id BIGINT REFERENCES logradouro(id),
    situacao BOOLEAN,
    dt_inscricao DATE,
    url_img VARCHAR(300)
);

CREATE TABLE usuario (
    id BIGSERIAL PRIMARY KEY,
    nome VARCHAR(250) NOT NULL,
    email VARCHAR(80) NOT NULL,
    tp_usuario_id BIGINT REFERENCES tipo_usuario(id),
    situacaoCurso_id BIGINT REFERENCES situacaoCurso(id),
    sexo_id BIGINT REFERENCES sexo(id),
    curso_id BIGINT REFERENCES curso(id),
    situacao BOOLEAN,
    dt_inscricao DATE,
    url_img VARCHAR(300),
    logradouro_id BIGINT REFERENCES logradouro(id)
);

CREATE TABLE senha (
    usuario_id BIGINT PRIMARY KEY REFERENCES usuario(id),
    senha_hash VARCHAR(200)
);

CREATE TABLE usuario_endereco (
    id BIGSERIAL PRIMARY KEY,
    usuario_id BIGINT REFERENCES usuario(id),
    logradouro_id BIGINT REFERENCES logradouro(id),
    numero VARCHAR(50),
    complemento VARCHAR(100)
);

--QUARTO CREATE

CREATE TABLE usuario_telefone (
    usuario_id BIGINT REFERENCES usuario(id),
    telefone_id BIGINT REFERENCES telefone(id),
    PRIMARY KEY (usuario_id, telefone_id)
);

CREATE TABLE instituicao_telefone (
    instituicao_id BIGINT REFERENCES instituicao(id),
    telefone_id BIGINT REFERENCES telefone(id),
    PRIMARY KEY (instituicao_id, telefone_id)
);

--EVENTOS 

CREATE TABLE tipo_evento (
    tipo_evento_id SERIAL PRIMARY KEY,
    titulo VARCHAR(100),
    descricao_instituicao VARCHAR(100)
);

CREATE TABLE evento (
    evento_id SERIAL PRIMARY KEY,
    titulo VARCHAR(100),
    descricao_instituicao VARCHAR(100),
    dt_inicio DATE,
	dt_fim DATE,
	ativo BIT, 
    endereco VARCHAR(100),
    horario VARCHAR(100),
    tipo_evento_id INT REFERENCES tipo_evento(tipo_evento_id),
    instituicao_id BIGINT REFERENCES instituicao(id)
);

CREATE TABLE inscricao_evento (
    usuario_id BIGINT REFERENCES usuario(id),
    evento_id INT REFERENCES evento(evento_id),
    dt_inscricao DATE,
    PRIMARY KEY (usuario_id, evento_id)
);

--Publicacoes

CREATE TABLE tipo_publicacao (
    id SERIAL PRIMARY KEY,
    ds_tipo_publicacao VARCHAR(20),
    situacao BOOLEAN
);

CREATE TABLE publicacao (
    id BIGSERIAL PRIMARY KEY,
    titulo VARCHAR(50),
    texto TEXT,
    dt_publicacao DATE,
    dt_atualizacao DATE,
    situacao BOOLEAN,
    instituicao_id BIGINT REFERENCES instituicao(id),
    usuario_id BIGINT REFERENCES usuario(id),
    tipo_publicacao_id INT REFERENCES tipo_publicacao(id)
);

CREATE TABLE comentario (
    id BIGSERIAL PRIMARY KEY,
    texto TEXT,
    situacao BOOLEAN,
    dt_comentario DATE,
    comentario_pai BIGINT,
    usuario_id BIGINT REFERENCES usuario(id),
    publicacao_id BIGINT REFERENCES publicacao(id)
);

CREATE TABLE curtidas (
    usuario_id BIGINT REFERENCES usuario(id),
    publicacao_id BIGINT REFERENCES publicacao(id),
    dt_curtida DATE,
    situacao BOOLEAN,
    PRIMARY KEY (usuario_id, publicacao_id)
);


CREATE VIEW vw_usuarios AS
SELECT
u.id,
u.nome,
u.email,
tu.ds_tipo_usuario AS tipo_usuario,
s.sexo,
c.nome AS curso,
sc.descricao_situacao AS situacao_curso,
u.dt_inscricao,
u.situacao
FROM usuario u
LEFT JOIN tipo_usuario tu ON u.tp_usuario_id = tu.id
LEFT JOIN sexo s ON u.sexo_id = s.id
LEFT JOIN curso c ON u.curso_id = c.id
LEFT JOIN situacaocurso sc ON u.situacaocurso_id = sc.id;

CREATE VIEW vw_instituicoes AS
SELECT
i.id,
i.nome,
i.emec,
l.nm_logradouro,
c.nm_cidade,
e.nm_estado,
i.dt_inscricao
FROM instituicao i
LEFT JOIN logradouro l ON i.logradouro_id = l.id
LEFT JOIN cidade c ON l.cidade_id = c.id
LEFT JOIN estado e ON c.estado_id = e.id;

CREATE VIEW vw_publicacoes AS
SELECT
p.id,
p.titulo,
p.texto,
p.dt_publicacao,
u.nome AS autor,
tp.ds_tipo_publicacao,
p.situacao
FROM publicacao p
LEFT JOIN usuario u ON p.usuario_id = u.id
LEFT JOIN tipo_publicacao tp ON p.tipo_publicacao_id = tp.id;

CREATE VIEW vw_comentarios AS
SELECT
c.id,
c.texto,
c.dt_comentario,
u.nome AS usuario,
p.titulo AS publicacao
FROM comentario c
LEFT JOIN usuario u ON c.usuario_id = u.id
LEFT JOIN publicacao p ON c.publicacao_id = p.id;

CREATE VIEW vw_usuario_telefone AS
SELECT
u.nome,
t.numero
FROM usuario u
JOIN usuario_telefone ut ON u.id = ut.usuario_id
JOIN telefone t ON ut.telefone_id = t.id;

CREATE VIEW vw_eventos AS
SELECT
e.titulo,
e.dt_inicio,
e.dt_fim,
e.horario,
te.titulo AS tipo_evento,
i.nome AS instituicao
FROM evento e
LEFT JOIN tipo_evento te ON e.tipo_evento_id = te.tipo_evento_id
LEFT JOIN instituicao i ON e.instituicao_id = i.id;



