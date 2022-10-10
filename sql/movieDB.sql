-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2022 às 01:52
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `movies`
--
CREATE DATABASE IF NOT EXISTS `movies` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `movies`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `genero`, `diretor`, `categoria`, `descricao`, `poster`) VALUES
(1, 'Batman', 'Crime, Mistério, Thriller', 'Matt Reeves', 'filme', 'Após dois anos espreitando as ruas como Batman, Bruce Wayne se encontra nas profundezas mais sombrias de Gotham City. Com poucos aliados confiáveis, o vigilante solitário se estabelece como a personificação da vingança para a população.', '633dda89acf8d.jpg'),
(2, 'Dark', 'Sci-Fi &amp; Fantasy, Drama, Mistério, Crime', 'Baran bo Odar', 'serie', 'Quatro famílias iniciam uma desesperada busca por respostas quando uma criança desaparece e um complexo mistério envolvendo três gerações começa a se revelar.', '633ddaeee4c5c.jpg'),
(3, 'Lightyear', 'Animação, Família, Fantasia', 'Angus MacLane', 'filme', 'A aventura de ação e ficção científica apresenta a história de origem definitiva de Buzz Lightyear - o herói que inspirou o brinquedo - apresentando o lendário Space Ranger que conquistaria gerações de fãs.', '633ddb58b4cfc.jpg'),
(4, 'Friends', 'Comédia, Drama', 'Marta Kauffman', 'serie', 'Seis jovens são unidos por laços familiares, românticos e, principalmente, de amizade, enquanto tentam vingar em Nova York. Rachel é a garota mimada que deixa o noivo no altar para viver com a amiga dos tempos de escola Monica, sistemática e apaixonada pe', '633ddbc997676.jpg'),
(5, 'Star Wars: Episódio VII', 'Aventura, Ação, Ficção científica, Fantasia', 'J.J. Abrams', 'filme', 'A queda de Darth Vader e do Império levou ao surgimento de uma nova força sombria: a Primeira Ordem. Eles procuram o jedi Luke Skywalker, desaparecido. A resistência tenta desesperadamente encontrá-lo antes para salvar a galáxia.', '633ddd75bb685.jpg'),
(6, 'Black Mirror', 'Sci-Fi &amp; Fantasy, Drama, Mistério', 'Charlie Brooker', 'serie', 'Esta série antológica de ficção científica explora um futuro próximo onde a natureza humana e a tecnologia de ponta entram em um perigoso conflito.', '633dddd564b46.jpg'),
(7, 'Breaking Bad', 'Drama', 'Vince Gilligan', 'serie', 'Ao saber que tem câncer, um professor passa a fabricar metanfetamina pelo futuro da família, mudando o destino de todos.', '633dde5bae315.jpg'),
(8, 'Coraline', 'Animação, Família, Fantasia', 'Henry Selick', 'filme', 'Entediada em sua nova casa, a pequena Coraline descobre uma porta secreta que contém um mundo parecido com o dela, porém melhor em muitas maneiras. Coraline se encanta com a descoberta, mas logo descobre que há algo de errado quando seus pais alternativos', '633e0f2d4c552.jpg'),
(9, 'Peaky Blinders', 'Drama, Crime', 'Steven Knight', 'serie', 'Thomas Shelby e seus irmãos retornam a Birmingham depois de servir no exército britânico durante a Primeira Guerra Mundial. Os Peaky Blinders, a gangue na qual Thomas é líder, controlam a cidade de Birmingham. Mas, como as ambições de Shelby se estendem p', '633e11f9cfdd6.jpg'),
(10, 'Velozes &amp; Furiosos 9', 'Ação, Aventura, Crime, Thriller', 'Justin Lin', 'filme', 'Dominic Toretto e sua família precisam enfrentar o seu irmão mais novo Jakob, um assassino mortal que está trabalhando com uma antiga inimiga, a cyber-terrorista Cipher.', '633e1286e8263.jpg'),
(11, 'Rick e Morty', 'Animação, Comédia, Sci-Fi &amp; Fantasy, Action &a', 'Dan Harmon e Justin Roiland', 'serie', 'Rick é um velho mentalmente desequilibrado, mas cientificamente talentoso que se reconectou recentemente com sua família. Ele passa a maior parte do tempo envolvendo o jovem neto Morty em aventuras perigosas e estranhas no espaço e em universos alternativ', '633e12df9342b.jpg'),
(12, 'Halloween Kills', 'Terror, Thriller', 'David Gordon Green', 'filme', 'Laurie Strode acredita que enfim venceu a luta contra Michael Myers, mas é surpreendida pelo seu retorno. Determinada a pôr um ponto final em seus ataques, ela e outros sobreviventes decidem enfrentá-lo e acabar com o ciclo de uma vez por todas.', '633e13761163b.jpg'),
(13, 'Sobrenatural', 'Drama, Mistério, Sci-Fi &amp; Fantasy', 'Eric Kripke', 'serie', 'Os irmãos Dean e Sam vasculham o país em busca de atividades paranormais, brigando com demônios, fantasmas e monstros no caminho.', '633e154e1eab3.jpg'),
(14, 'Up', 'Animação, Comédia, Família, Aventura', 'Pete Docter', 'filme', 'Carl Fredricksen é um vendedor de balões que, aos 78 anos, está prestes a perder a casa em que sempre viveu com sua esposa, a falecida Ellie. Após um incidente, Carl é considerado uma ameaça pública e forçado a ser internado. Para evitar que isto aconteça', '633e15e9c80a4.jpg'),
(15, 'Suits', 'Drama', 'Aaron Korsh', 'serie', 'Mesmo sem se formar e sem licença para advogar, um jovem brilhante impressiona um importante advogado e consegue uma cobiçada posição em sua firma.', '633e164898e64.jpg'),
(16, 'Shrek 2', 'Animação, Família, Comédia, Fantasia, Aventura', 'Andrew Adamson', 'filme', 'Após se casar com a Princesa Fiona (Cameron Diaz), Shrek (Mike Myers) vive feliz em seu pântano. Ao retornar de sua lua-de-mel Fiona recebe uma carta de seus pais, que não sabem que ela agora é um ogro, convidando-a para um jantar juntamente com seu grand', '633e170a54d59.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
