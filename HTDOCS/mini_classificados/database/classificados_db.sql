-- Crie um novo banco de dados ou use um existente
CREATE DATABASE IF NOT EXISTS classificados_db;

-- Use o banco de dados
USE classificados_db;

-- Tabela para armazenar os usuários
CREATE TABLE IF NOT EXISTS usuarios (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE, -- Email deve ser único
senha VARCHAR(255) NOT NULL, -- Para armazenar o hash da senha
data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela para armazenar as categorias dos anúncios
CREATE TABLE IF NOT EXISTS categorias (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL UNIQUE
);

-- Tabela principal para os anúncios
CREATE TABLE IF NOT EXISTS anuncios (
id INT AUTO_INCREMENT PRIMARY KEY,
id_usuario INT NOT NULL, -- Chave estrangeira para a 'tabela' 'usuarios'
id_categoria INT NOT NULL, -- Chave estrangeira para a 'tabela' 'categorias'
titulo VARCHAR(255) NOT NULL,
descricao TEXT,
preco DECIMAL(10, 2) NOT NULL,
data_publicacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

-- Definindo as chaves estrangeiras e a ação em caso de exclusão
FOREIGN KEY (id_usuario) REFERENCES usuarios(id) ON DELETE
CASCADE,
FOREIGN KEY (id_categoria) REFERENCES categorias(id)

);

-- Inserir algumas categorias de exemplo
INSERT INTO categorias (nome) VALUES ('Eletrônicos'), ('Veículos'), ('Imóveis'),
('Moda e Acessórios'), ('Serviços');