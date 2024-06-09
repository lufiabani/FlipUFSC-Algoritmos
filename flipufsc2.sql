-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2024 at 11:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipufsc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int NOT NULL,
  `texto` longtext NOT NULL,
  `resposta` int NOT NULL,
  `questao_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alternativas`
--

INSERT INTO `alternativas` (`id`, `texto`, `resposta`, `questao_id`) VALUES
(77, 'Tolstói está correto ao afirmar que a circulação da seiva ocorre na casca, pois é nessa estrutura que a seiva sobe para os ramos, folhas e flores; por isso, histologicamente a casca é chamada de “súber”.', 0, 14),
(78, 'a retirada da casca das árvores faz com que elas morram, pois a subida da seiva bruta, rica em sais minerais e água, deixa de ocorrer.', 0, 14),
(79, 'as veias citadas por Tolstói possuem em suas paredes músculos que fazem com que elas sejam capazes de pulsar, razão pela qual, ao serem cortadas, podem levar o indivíduo à morte.', 0, 14),
(80, 'geralmente, nas folhas ocorre a transformação da seiva bruta em seiva elaborada.', 1, 14),
(81, 'nas raízes das árvores, não existe formação de casca como ocorre no caule, pois nelas não existe o meristema secundário.', 0, 14),
(82, 'a formação da casca nas árvores é o resultado da ação de um meristema secundário, o qual promove o crescimento transversal.', 1, 14),
(83, 'as células do SNC são mais suscetíveis ao ataque do vírus zika em função da ausência de fosfolipídios em sua membrana celular.', 0, 15),
(84, 'vírus diferentes, como aqueles que ocasionam a gripe, possuem tropismo para diferentes tipos de células ou de tecidos.', 1, 15),
(85, 'os mecanismos de transcrição e de tradução na síntese proteica que ocorre dentro dos vírus são semelhantes àqueles que ocorrem em células procarióticas.', 0, 15),
(86, 'vírus são parasitas intracelulares facultativos, existindo tipos como o da covid, que podem se reproduzir no ar e nas mãos – daí a recomendação da Organização Mundial de Saúde para o uso de máscara e a lavagem das mãos.', 0, 15),
(87, 'o termo “tropismo” também é utilizado em relação a outros fenômenos biológicos, como o fototropismo dos caules e das raízes.', 1, 15),
(88, 'as células do SNC são mais suscetíveis ao ataque do vírus zika em função da ausência de fosfolipídios em sua membrana celular.', 0, 16),
(89, 'vírus diferentes, como aqueles que ocasionam a gripe, possuem tropismo para diferentes tipos de células ou de tecidos.', 1, 16),
(90, 'os mecanismos de transcrição e de tradução na síntese proteica que ocorre dentro dos vírus são semelhantes àqueles que ocorrem em células procarióticas.', 0, 16),
(91, 'vírus são parasitas 10 intracelulares facultativos, existindo tipos como o da covid, que podem se reproduzir no ar e nas mãos – daí a recomendação da Organização Mundial de Saúde para o uso de máscara e a lavagem das mãos.', 0, 16),
(92, 'o termo “tropismo” também é utilizado em relação a outros fenômenos biológicos, como o fototropismo dos caules e das raízes.', 1, 16),
(93, 'ambos possuem membrana citoplasmática de constituição lipoproteica.', 1, 17),
(94, 'os procariontes são caracterizados por uma série de compartimentos intracelulares denominados “organelas citoplasmáticas”.', 0, 17),
(95, 'como exemplos de procariontes podem-se citar vírus, bactérias e fungos.', 0, 17),
(96, 'o material genético dos procariontes é apresentado de forma circular, enquanto o dos eucariontes é linear.', 1, 17),
(97, 'mitocôndrias e cloroplastos são comuns tanto nos organismos eucariontes quanto nos procariontes.', 0, 17),
(98, 'Listas podem conter diferentes tipos de dados.', 1, 18),
(99, 'Listas são imutáveis. (Valor: 2)', 0, 18),
(100, 'Listas podem ser aninhadas, ou seja, podem conter outras listas. (Valor: 4)', 1, 18),
(101, 'Listas têm tamanho fixo após serem criadas. (Valor: 8)', 0, 18),
(102, 'Listas são mutáveis. Listas têm métodos como append(), remove() e sort(). Listas em Python são implementadas como arrays dinâmicos. Listas em Python têm tamanho fixo. Listas em Python podem ser aninhadas para criar listas de listas. Listas não permitem valores duplicados.', 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE `alunos` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `matricula` int NOT NULL,
  `pontuacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `matricula`, `pontuacao`) VALUES
(101, 'Alisson Rola Caldeira', 23201212, '400'),
(102, 'Arthur Bauer Cardoso', 24103788, NULL),
(103, 'Arthur Silveira Sampaio', 24103786, NULL),
(104, 'Artur Manarin de Jesus', 24105747, NULL),
(105, 'Breno Felisbino dos Anjos', 24102016, NULL),
(106, 'Bruna Letícia Matos dos Santos', 22104524, NULL),
(107, 'Carlos Eduardo Caetano de Melo', 21105788, NULL),
(108, 'Caroline Resende Zeferino', 24105322, NULL),
(109, 'Cassio Augusto Reus Guidi', 24102020, NULL),
(110, 'Christian de Vargas Silva', 202400535, NULL),
(111, 'Davi Estevao Arcaro', 24103787, NULL),
(112, 'Davi Ferreira da Silveira', 24102025, NULL),
(113, 'Develin Souza Goncalves', 24102015, NULL),
(114, 'Diego Nyland Bloemer', 24103789, NULL),
(115, 'Diva Moreira de Souza', 24102022, NULL),
(116, 'Eduardo Catani de Almeida', 24103785, NULL),
(117, 'Fabio Natan Oliveira Bittencourt', 24102012, NULL),
(118, 'Felipe Cidade Soares', 24102023, NULL),
(119, 'Felipe Rigueira Matar', 23201012, NULL),
(120, 'Gabriel Guterro Flor Bittencourt Silveira de Souza', 24102024, NULL),
(121, 'Gabriel Luis Biasio dos Santos', 23104643, NULL),
(122, 'Gustavo Becker Lodette', 24105324, NULL),
(123, 'Henrique de Souza Cavalheiro', 18104123, NULL),
(124, 'Ivy Oliveira dos Reis', 24103142, NULL),
(125, 'Jefferson Horacio Fernandes', 24100094, NULL),
(126, 'Jullya Estelita da Conceicao', 24103784, NULL),
(127, 'Kaberlyn Estelir Medeiros Dorigon', 24105746, NULL),
(128, 'Leonardo Latorre Boteon', 24102026, NULL),
(129, 'Lucas Alexandre Machado', 24103790, NULL),
(130, 'Luis Antonio Scarabelot Fiabani', 24102006, '4200'),
(131, 'Luiz Angelo Tramontin Valdati', 22250755, NULL),
(132, 'Mauricio Melo Filho', 24103146, NULL),
(133, 'Pedro Konorath de Moraes', 23103315, NULL),
(134, 'Theo de Souza Gerhardt', 24104578, NULL),
(135, 'Thiago da Silva Fialho', 202400461, NULL),
(136, 'Victor Martins', 24103148, NULL),
(137, 'Fabrício Herpich', 1198799, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questoes`
--

CREATE TABLE `questoes` (
  `id` int NOT NULL,
  `enunciado` longtext NOT NULL,
  `referencia` mediumtext,
  `comando` mediumtext NOT NULL,
  `prova` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questoes`
--

INSERT INTO `questoes` (`id`, `enunciado`, `referencia`, `comando`, `prova`) VALUES
(14, 'O trecho abaixo, extraído de um conto de Liev Tolstói, faz uma comparação entre a circulação da seiva nas árvores e a circulação do sangue no corpo humano: “A casca das árvores é como as veias das pessoas: através das veias o sangue circula pelo corpo e através da casca a seiva circula pela árvore, sobe para os ramos, folhas e flores. Podemos escavar toda a parte interna de uma árvore que ela não morre, como acontece com os salgueiros velhos, mas só se a casca estiver viva a árvore continuará a viver: se a casca se for, a árvore está perdida. Se uma pessoa cortar as veias, vai morrer, primeiro porque o sangue vai escorrer para fora do corpo, e depois porque o sangue não vai mais circular pelo corpo [...].”', 'TOLSTÓI, L. Contos completos. Vol. 2. Trad. de Rubens Figueiredo. São Paulo: Cosac & Naify, 2015. p. 216-217.', 'Sobre os temas abordados no trecho acima, é correto afirmar que:', 'VESTIBULAR UFSC 2022 PROVA 1: AMARELA'),
(15, 'Pesquisa realizada pelo Centro de Estudo sobre o Genoma Humano e Células-Tronco (CEGH-CEL) da USP mostrou que o vírus zika é capaz de combater tumores avançados no sistema nervoso central (SNC). O estudo foi feito com cães e os resultados foram publicados na revista científica Molecular Therapy. Quando os cientistas iniciaram os estudos com o zika, eles descobriram que o vírus tem um tropismo para células cerebrais de bebês em gestação, as células progenitoras neurais, que mais tarde vão originar neurônios. Tropismo é a propensão que um vírus tem de infectar determinado tipo de célula ou tecido. Como existem tumores cerebrais que são ricos em células progenitoras, surgiu a ideia de testar o vírus zika em cães com tumores no SNC.', 'Disponível em: https://jornal.usp.br/ciencias/ciencias-biologicas/zika-trata-caes-com-cancer-no-sistema-nervoso-central. Acesso em: 15 out. 2021.', 'Sobre o assunto do texto acima, é correto afirmar que:', 'VESTIBULAR UFSC 2022 PROVA 1: AMARELA'),
(16, 'Pesquisa realizada pelo Centro de Estudo sobre o Genoma Humano e Células-Tronco (CEGH-CEL) da USP mostrou que o vírus zika é capaz de combater tumores avançados no sistema nervoso central (SNC). O estudo foi feito com cães e os resultados foram publicados na revista científica Molecular Therapy. Quando os cientistas iniciaram os estudos com o zika, eles descobriram que o vírus tem um tropismo para células cerebrais de bebês em gestação, as células progenitoras neurais, que mais tarde vão originar neurônios. Tropismo é a propensão que um vírus tem de infectar determinado tipo de célula ou tecido. Como existem tumores cerebrais que são ricos em células progenitoras, surgiu a ideia de testar o vírus zika em cães com tumores no SNC.', 'Disponível em: https://jornal.usp.br/ciencias/ciencias-biologicas/zika-trata-caes-com-cancer-no-sistema-nervoso-central. Acesso em: 15 out. 2021.', 'Sobre o assunto do texto acima, é correto afirmar que:', 'não sei'),
(17, 'Organismos eucariontes e procariontes apresentam semelhanças e diferenças. Sobre o assunto,', 'não consta', 'é correto afirmar que:', 'VESTIBULAR UFSC 2022 PROVA 1: AMARELA - questao 35'),
(18, 'Qual das seguintes opções são verdadeiras sobre listas em Python?', 'ChatGPT', 'Assinale as corretas.', 'Python'),
(19, 'Analise as proposições sobre listas em Python:', 'ChatGPT', 'Assinale as Verdadeiras', 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `rodadas`
--

CREATE TABLE `rodadas` (
  `id` int NOT NULL,
  `datahora` datetime NOT NULL,
  `aluno_id` int NOT NULL,
  `questao_id` int NOT NULL,
  `pontuacao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rodadas`
--

INSERT INTO `rodadas` (`id`, `datahora`, `aluno_id`, `questao_id`, `pontuacao`) VALUES
(3, '2024-06-07 17:01:10', 130, 15, '300'),
(4, '2024-06-07 17:02:26', 101, 14, '400'),
(5, '2024-06-08 13:10:53', 130, 18, '400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questao_id` (`questao_id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rodadas`
--
ALTER TABLE `rodadas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno_id` (`aluno_id`),
  ADD KEY `questao_id` (`questao_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativas`
--
ALTER TABLE `alternativas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rodadas`
--
ALTER TABLE `rodadas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternativas`
--
ALTER TABLE `alternativas`
  ADD CONSTRAINT `alternativas_ibfk_1` FOREIGN KEY (`questao_id`) REFERENCES `questoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rodadas`
--
ALTER TABLE `rodadas`
  ADD CONSTRAINT `rodadas_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rodadas_ibfk_2` FOREIGN KEY (`questao_id`) REFERENCES `questoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
