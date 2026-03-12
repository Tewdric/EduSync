INSERT INTO uf (uf) VALUES
('SP'),
('RJ');

INSERT INTO estado (nm_estado, uf_id) VALUES
('São Paulo',1),
('Rio de Janeiro',2);

INSERT INTO cidade (nm_cidade, estado_id) VALUES
('Campinas',1),
('Rio de Janeiro',2);

INSERT INTO bairro (nm_bairro) VALUES
('Centro'),
('Jardim América');

INSERT INTO tipo_logradouro (ds_tipo_logradouro, ativo) VALUES
('Rua', true),
('Avenida', true);

INSERT INTO logradouro (cep,nm_logradouro,bairro_id,tipo_logradouro_id,cidade_id) VALUES
('13000000','Rua das Flores',1,1,1),
('20000000','Av Brasil',2,2,2);

INSERT INTO sexo (sexo,ativo) VALUES
('Masculino',true),
('Feminino',true);

INSERT INTO tipo_usuario (ds_tipo_usuario,ativo) VALUES
('Aluno',true),
('Admin',true);

INSERT INTO curso (nome,duracao) VALUES
('Engenharia de Software',48),
('Ciência da Computação',48);

INSERT INTO situacaoCurso (descricao_situacao) VALUES
('Cursando'),
('Concluído');

INSERT INTO usuario
(nome,email,tp_usuario_id,situacaoCurso_id,sexo_id,curso_id,situacao,dt_inscricao,logradouro_id)
VALUES
('João Silva','joao@email.com',1,1,1,1,true,'2024-01-10',1),
('Maria Souza','maria@email.com',1,1,2,2,true,'2024-02-15',2);

INSERT INTO senha VALUES
(1,'hash123'),
(2,'hash456');

INSERT INTO telefone (numero,situacao) VALUES
('11999999999',true),
('21988888888',true);

INSERT INTO usuario_telefone VALUES
(1,1),
(2,2);

INSERT INTO instituicao
(nome,emec,logradouro_id,situacao,dt_inscricao)
VALUES
('Universidade Tech',12345,1,true,'2020-01-01');

INSERT INTO instituicao_telefone VALUES
(1,1);

INSERT INTO tipo_evento (titulo) VALUES
('Palestra'),
('Workshop');

INSERT INTO evento
(titulo,dt_inicio,dt_fim,endereco,horario,tipo_evento_id,instituicao_id)
VALUES
('Semana da Tecnologia','2025-06-10','2025-06-20','Auditório Central','19:00',1,1);

INSERT INTO tipo_publicacao (ds_tipo_publicacao,situacao)
VALUES
('Aviso',true);

INSERT INTO publicacao
(titulo,texto,dt_publicacao,situacao,usuario_id,tipo_publicacao_id)
VALUES
('Bem-vindos','Primeira publicação do sistema','2025-06-01',true,1,1);

INSERT INTO comentario
(texto,situacao,dt_comentario,usuario_id,publicacao_id)
VALUES
('Muito bom!',true,'2025-06-01',2,1);

INSERT INTO curtidas VALUES
(2,1,'2025-06-01',true);