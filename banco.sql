-- Criação da tabela "dados" para armazenar informações dos alunos
CREATE TABLE dados (
    AlunoID INT,                         -- Identificador do aluno (não está como chave primária)
    Nome VARCHAR(50),                    -- Nome do aluno
    Sobrenome VARCHAR(50),               -- Sobrenome do aluno
    Endereco VARCHAR(150),               -- Endereço completo
    Cidade VARCHAR(50),                  -- Cidade onde reside
    Host VARCHAR(50)                     -- Nome do host que inseriu o registro
);
