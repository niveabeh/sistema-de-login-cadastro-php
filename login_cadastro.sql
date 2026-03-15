-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/03/2026 às 20:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login_cadastro`
--

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `telefone`, `sexo`, `data_nascimento`, `cep`, `endereco`, `cidade`, `estado`, `senha`, `data_cadastro`) VALUES
(3, 'Luis Fernando', 'ontrabalholfp@gmail.com', '41987029668', 'masculino', '1994-10-27', '89237-630', '', 'Joinville', 'SC', '1234321', '2026-03-14 15:31:06'),
(6, 'user2', 'user2@gmail.com', '323124', 'feminino', '2026-03-09', '89237-630', NULL, 'Joinville', 'SC', '123', '2026-03-15 15:55:13'),
(7, 'Lucas Almeida', 'lucas.almeida1@email.com', '47991000001', 'masculino', '1993-02-10', '89201000', 'Rua A, 10', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(8, 'Camila Rocha', 'camila.rocha1@email.com', '47991000002', 'feminino', '1996-03-15', '88010000', 'Rua B, 20', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(9, 'Rafael Lima', 'rafael.lima1@email.com', '47991000003', 'masculino', '1991-07-22', '89020000', 'Rua C, 30', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(10, 'Juliana Martins', 'juliana.martins1@email.com', '47991000004', 'feminino', '1999-11-05', '80030000', 'Rua D, 40', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(11, 'Bruno Costa', 'bruno.costa1@email.com', '47991000005', 'masculino', '1994-01-18', '70040000', 'Rua E, 50', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(12, 'Fernanda Souza', 'fernanda.souza1@email.com', '47991000006', 'feminino', '1997-09-12', '89202000', 'Rua F, 60', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(13, 'Gabriel Pereira', 'gabriel.pereira1@email.com', '47991000007', 'masculino', '1992-05-30', '88020000', 'Rua G, 70', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(14, 'Patrícia Gomes', 'patricia.gomes1@email.com', '47991000008', 'feminino', '1995-08-14', '89030000', 'Rua H, 80', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(15, 'Thiago Ribeiro', 'thiago.ribeiro1@email.com', '47991000009', 'masculino', '1990-12-01', '80040000', 'Rua I, 90', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(16, 'Amanda Fernandes', 'amanda.fernandes1@email.com', '47991000010', 'feminino', '1998-04-27', '70050000', 'Rua J, 100', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(17, 'Diego Carvalho', 'diego.carvalho1@email.com', '47991000011', 'masculino', '1993-06-16', '89203000', 'Rua K, 110', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(18, 'Larissa Alves', 'larissa.alves1@email.com', '47991000012', 'feminino', '1996-10-09', '88030000', 'Rua L, 120', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(19, 'Felipe Teixeira', 'felipe.teixeira1@email.com', '47991000013', 'masculino', '1991-03-03', '89040000', 'Rua M, 130', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(20, 'Bianca Nunes', 'bianca.nunes1@email.com', '47991000014', 'feminino', '1999-07-19', '80050000', 'Rua N, 140', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(21, 'Vinicius Mendes', 'vinicius.mendes1@email.com', '47991000015', 'masculino', '1994-11-23', '70060000', 'Rua O, 150', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(22, 'Isabela Dias', 'isabela.dias1@email.com', '47991000016', 'feminino', '1997-02-28', '89204000', 'Rua P, 160', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(23, 'Eduardo Freitas', 'eduardo.freitas1@email.com', '47991000017', 'masculino', '1992-08-08', '88040000', 'Rua Q, 170', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(24, 'Carolina Barros', 'carolina.barros1@email.com', '47991000018', 'feminino', '1995-12-17', '89050000', 'Rua R, 180', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(25, 'Marcelo Araujo', 'marcelo.araujo1@email.com', '47991000019', 'masculino', '1990-04-04', '80060000', 'Rua S, 190', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(26, 'Tatiane Melo', 'tatiane.melo1@email.com', '47991000020', 'feminino', '1998-09-21', '70070000', 'Rua T, 200', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(27, 'Rodrigo Pinto', 'rodrigo.pinto1@email.com', '47991000021', 'masculino', '1993-01-11', '89205000', 'Rua U, 210', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(28, 'Natália Correia', 'natalia.correia1@email.com', '47991000022', 'feminino', '1996-06-06', '88050000', 'Rua V, 220', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(29, 'Leonardo Martins', 'leonardo.martins1@email.com', '47991000023', 'masculino', '1991-10-10', '89060000', 'Rua W, 230', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(30, 'Aline Batista', 'aline.batista1@email.com', '47991000024', 'feminino', '1999-03-25', '80070000', 'Rua X, 240', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(31, 'Gustavo Moreira', 'gustavo.moreira1@email.com', '47991000025', 'masculino', '1994-07-07', '70080000', 'Rua Y, 250', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(32, 'Priscila Castro', 'priscila.castro1@email.com', '47991000026', 'feminino', '1997-05-14', '89206000', 'Rua Z, 260', 'Joinville', 'SC', '123456', '2026-03-15 18:54:57'),
(33, 'Henrique Lopes', 'henrique.lopes1@email.com', '47991000027', 'masculino', '1992-12-12', '88060000', 'Rua AA, 270', 'Florianópolis', 'SC', '123456', '2026-03-15 18:54:57'),
(34, 'Sabrina Vieira', 'sabrina.vieira1@email.com', '47991000028', 'feminino', '1995-02-02', '89070000', 'Rua AB, 280', 'Blumenau', 'SC', '123456', '2026-03-15 18:54:57'),
(35, 'André Ramos', 'andre.ramos1@email.com', '47991000029', 'masculino', '1990-09-09', '80080000', 'Rua AC, 290', 'Curitiba', 'PR', '123456', '2026-03-15 18:54:57'),
(36, 'Beatriz Cardoso', 'beatriz.cardoso1@email.com', '47991000030', 'feminino', '1998-11-30', '70090000', 'Rua AD, 300', 'Brasília', 'DF', '123456', '2026-03-15 18:54:57'),
(37, 'Alexandre Moraes', 'alex.moraes2@email.com', '47992010001', 'masculino', '1989-03-14', '89100000', 'Rua das Acácias, 101', 'Jaraguá do Sul', 'SC', 'senha1', '2026-03-15 18:55:45'),
(38, 'Renata Figueiredo', 'renata.f2@email.com', '47992010002', 'feminino', '1993-07-21', '87000000', 'Av. Independência, 202', 'Maringá', 'PR', 'senha2', '2026-03-15 18:55:45'),
(39, 'Marcela Andrade', 'marcela.andrade2@email.com', '47992010003', 'feminino', '1996-01-09', '01000000', 'Rua Paulista, 303', 'São Paulo', 'SP', 'senha3', '2026-03-15 18:55:45'),
(40, 'Vitor Henrique', 'vitor.h2@email.com', '47992010004', 'masculino', '1991-10-18', '20000000', 'Rua do Comércio, 404', 'Rio de Janeiro', 'RJ', 'senha4', '2026-03-15 18:55:45'),
(41, 'Sérgio Augusto', 'sergio.a2@email.com', '47992010005', 'masculino', '1988-05-02', '30100000', 'Rua Minas Gerais, 505', 'Belo Horizonte', 'MG', 'senha5', '2026-03-15 18:55:45'),
(42, 'Letícia Prado', 'leticia.prado2@email.com', '47992010006', 'feminino', '1999-12-11', '40000000', 'Rua Bahia, 606', 'Salvador', 'BA', 'senha6', '2026-03-15 18:55:45'),
(43, 'Daniel Ferreira', 'daniel.ferreira2@email.com', '47992010007', 'masculino', '1994-08-30', '60000000', 'Rua Ceará, 707', 'Fortaleza', 'CE', 'senha7', '2026-03-15 18:55:45'),
(44, 'Helena Batista', 'helena.batista2@email.com', '47992010008', 'feminino', '1997-04-27', '50000000', 'Rua Pernambuco, 808', 'Recife', 'PE', 'senha8', '2026-03-15 18:55:45'),
(45, 'Paulo Ricardo', 'paulo.ricardo2@email.com', '47992010009', 'masculino', '1992-06-16', '69000000', 'Rua Amazonas, 909', 'Manaus', 'AM', 'senha9', '2026-03-15 18:55:45'),
(46, 'Gabriela Torres', 'gabriela.torres2@email.com', '47992010010', 'feminino', '1995-02-23', '78000000', 'Rua Goiás, 1001', 'Cuiabá', 'MT', 'senha10', '2026-03-15 18:55:45'),
(47, 'Rodrigo Sampaio', 'rodrigo.sampaio2@email.com', '47992010011', 'masculino', '1990-09-05', '29000000', 'Rua Espírito Santo, 111', 'Vitória', 'ES', 'senha11', '2026-03-15 18:55:45'),
(48, 'Bianca Monteiro', 'bianca.monteiro2@email.com', '47992010012', 'feminino', '1998-11-19', '64000000', 'Rua Piauí, 222', 'Teresina', 'PI', 'senha12', '2026-03-15 18:55:45'),
(49, 'Fábio Carvalho', 'fabio.carvalho2@email.com', '47992010013', 'masculino', '1987-01-28', '77000000', 'Rua Tocantins, 333', 'Palmas', 'TO', 'senha13', '2026-03-15 18:55:45'),
(50, 'Camila Duarte', 'camila.duarte2@email.com', '47992010014', 'feminino', '1996-03-08', '66000000', 'Rua Pará, 444', 'Belém', 'PA', 'senha14', '2026-03-15 18:55:45'),
(51, 'Thiago Azevedo', 'thiago.azevedo2@email.com', '47992010015', 'masculino', '1993-12-03', '57000000', 'Rua Alagoas, 555', 'Maceió', 'AL', 'senha15', '2026-03-15 18:55:45'),
(52, 'Priscila Nogueira', 'priscila.nogueira2@email.com', '47992010016', 'feminino', '1994-04-17', '59000000', 'Rua Paraíba, 666', 'João Pessoa', 'PB', 'senha16', '2026-03-15 18:55:45'),
(53, 'Leonardo Souza', 'leonardo.souza2@email.com', '47992010017', 'masculino', '1991-07-07', '49000000', 'Rua Sergipe, 777', 'Aracaju', 'SE', 'senha17', '2026-03-15 18:55:45'),
(54, 'Amanda Ribeiro', 'amanda.ribeiro2@email.com', '47992010018', 'feminino', '1999-09-29', '68000000', 'Rua Rondônia, 888', 'Porto Velho', 'RO', 'senha18', '2026-03-15 18:55:45'),
(55, 'Carlos Eduardo', 'carlos.eduardo2@email.com', '47992010019', 'masculino', '1985-02-14', '69900000', 'Rua Acre, 999', 'Rio Branco', 'AC', 'senha19', '2026-03-15 18:55:45'),
(56, 'Juliana Freitas', 'juliana.freitas2@email.com', '47992010020', 'feminino', '1997-06-22', '69300000', 'Rua Roraima, 1010', 'Boa Vista', 'RR', 'senha20', '2026-03-15 18:55:45'),
(57, 'Mateus Lima', 'mateus.lima2@email.com', '47992010021', 'masculino', '1992-08-12', '35500000', 'Rua Uberaba, 1111', 'Uberlândia', 'MG', 'senha21', '2026-03-15 18:55:45'),
(58, 'Larissa Campos', 'larissa.campos2@email.com', '47992010022', 'feminino', '1995-01-30', '96000000', 'Rua Dom Pedro, 1212', 'Pelotas', 'RS', 'senha22', '2026-03-15 18:55:45'),
(59, 'Guilherme Rocha', 'guilherme.rocha2@email.com', '47992010023', 'masculino', '1990-10-25', '97000000', 'Rua Sete de Setembro, 1313', 'Santa Maria', 'RS', 'senha23', '2026-03-15 18:55:45'),
(60, 'Natasha Oliveira', 'natasha.oliveira2@email.com', '47992010024', 'feminino', '1998-05-18', '83000000', 'Rua XV de Novembro, 1414', 'Ponta Grossa', 'PR', 'senha24', '2026-03-15 18:55:45'),
(61, 'Bruno Martins', 'bruno.martins2@email.com', '47992010025', 'masculino', '1993-03-11', '14000000', 'Rua São João, 1515', 'Ribeirão Preto', 'SP', 'senha25', '2026-03-15 18:55:45'),
(62, 'Elaine Costa', 'elaine.costa2@email.com', '47992010026', 'feminino', '1996-12-01', '24000000', 'Rua Niterói, 1616', 'Niterói', 'RJ', 'senha26', '2026-03-15 18:55:45'),
(63, 'Rafael Gonçalves', 'rafael.goncalves2@email.com', '47992010027', 'masculino', '1989-07-09', '11000000', 'Rua Santos, 1717', 'Santos', 'SP', 'senha27', '2026-03-15 18:55:45'),
(64, 'Tatiana Lima', 'tatiana.lima2@email.com', '47992010028', 'feminino', '1994-09-15', '58000000', 'Rua Campina Grande, 1818', 'Campina Grande', 'PB', 'senha28', '2026-03-15 18:55:45'),
(65, 'Anderson Silva', 'anderson.silva2@email.com', '47992010029', 'masculino', '1991-11-27', '75000000', 'Rua Anápolis, 1919', 'Anápolis', 'GO', 'senha29', '2026-03-15 18:55:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
