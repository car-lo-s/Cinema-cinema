-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Ago-2022 às 17:33
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filme`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmedado`
--

CREATE TABLE `filmedado` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `roteirista` varchar(100) NOT NULL,
  `caminho` varchar(100) NOT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmedado`
--

INSERT INTO `filmedado` (`id`, `nome`, `descricao`, `genero`, `roteirista`, `caminho`, `tipo`) VALUES
(3, 'Brooklyn Nine-Nine', 'Jake Peralta é um detetive brilhante e ao mesmo tempo imaturo, que nunca precisou se preocupar em respeitar as regras. Tudo muda quando um capitão exigente assume o comando de seu esquadrão e Jake deve aprender a trabalhar em equipe.', 'comedia', 'robertin', 'https://upload.wikimedia.org/wikipedia/commons/8/8a/Brooklyn_Nine-Nine_Logo.png', 'serie'),
(4, 'suits', 'O grande advogado corporativo de Manhattan, Harvey Specter, e sua equipe, Donna Paulsen, Louis Litt e Alex Williams, são lançados em uma disputa pelo poder quando um novo sócio se junta à empresa. Com seus dois melhores associados desaparecidos e Jessica ', 'drama', 'Breno vital', 'https://br.web.img2.acsta.net/pictures/14/03/28/10/18/433386.jpg', 'serie'),
(5, 'Avengers Endgame', 'Após Thanos eliminar metade das criaturas vivas, os Vingadores têm de lidar com a perda de amigos e entes queridos. Com Tony Stark vagando perdido no espaço sem água e comida, Steve Rogers e Natasha Romanov lideram a resistência contra o titã louco.', 'Ação', 'Lula', 'https://upload.wikimedia.org/wikipedia/pt/9/9b/Avengers_Endgame.jpg', 'filme'),
(6, 'One Piece', 'One Piece é uma série de mangá escrita e ilustrada por Eiichiro Oda. Os capítulos têm sido serializados na revista Weekly Shōnen Jump desde 22 de julho de 1997, com os capítulos compilados e publicados em 103 volumes tankōbon pela editora Shueisha até ago', 'Aventura', 'Oda', 'https://upload.wikimedia.org/wikipedia/pt/f/ff/One_Piece_vol._01.jpg', 'desenho'),
(7, 'The Batman', 'Durante o halloween, o prefeito de Gotham City Don Mitchell Jr. (Rupert Penry-Jones) é assassinado por um serial-killer que se chama Charada (Paul Dano). Operando em Gotham por dois anos como o vigilante Batman, o bilionário Bruce Wayne (Robert Pattinson)', 'luta', 'joao', 'https://upload.wikimedia.org/wikipedia/pt/3/38/The_Batman_poster.jpg?20220303140528', 'filme'),
(8, 'Bob Esponja: O Incrível Resgate', 'Os amigos mais queridos do fundo do mar, Bob Esponja e Patrick, vão se aventurar em busca do Gary, que foi “caracolstrado”! Eles precisam sair em uma missão de resgate pela cidade perdida de Atlantic City, que é para onde o Rei Poseidon levou o caracol', 'aventura', 'Carlos Renato', 'https://upload.wikimedia.org/wikipedia/pt/0/0a/The_SpongeBob_Movie-_Sponge_on_the_Run_poster.jpg?202', 'filme');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmedado`
--
ALTER TABLE `filmedado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmedado`
--
ALTER TABLE `filmedado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
