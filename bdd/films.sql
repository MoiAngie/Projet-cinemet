-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 09 Mai 2019 à 08:06
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CineMET`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_sortie` date NOT NULL,
  `genre_film` int(11) NOT NULL,
  `durée` varchar(100) NOT NULL,
  `producteur` varchar(255) NOT NULL,
  `nationalité` varchar(255) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `acteur_1` varchar(255) NOT NULL,
  `acteur_2` varchar(255) NOT NULL,
  `actrice_1` varchar(255) NOT NULL,
  `actrice_2` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `affiche` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table pour stocker des films';

--
-- Contenu de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `date_sortie`, `genre_film`, `durée`, `producteur`, `nationalité`, `realisateur`, `acteur_1`, `acteur_2`, `actrice_1`, `actrice_2`, `synopsis`, `affiche`, `image`, `video`) VALUES
(1, 'Avengers: Endgame', '2019-04-24', 1, '3h01min', 'Walt Disney', 'américain', 'Joe et Anthony Russo', 'Robert Downey jr.', 'Chris Evans', 'Scarlett Johansson', 'Brie Larson', 'Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel.', 'avengers-endgame.jpg', 'avengers-endgame.jpg', 'https://www.youtube.com/embed/wV-Q0o2OQjQ'),
(2, 'Dumbo', '2019-03-27', 5, '1h52min', 'Walt Disney', 'américain', 'Tim Burton', 'Colin Farrell', 'Danny DeVito', 'Eva Green', 'Nico Parker', 'Les enfants de Holt Farrier, ex-artiste de cirque chargé de s’occuper d’un éléphanteau dont les oreilles démesurées sont la risée du public, découvrent que ce dernier sait voler...', 'dumbo.jpg', 'dumbo.jpg', 'https://www.youtube.com/embed/lhwAcdj3HKg'),
(3, 'Tanguy, le retour', '2019-04-10', 3, '1h33min', 'SND', 'français', 'Etienne Chatiliez', 'André Dussolier', 'Eric Berger', 'Sabine Azéma', 'Emilie Yili Kang', '16 ans plus tard, Tanguy, qui a maintenant 44 ans, revient chez ses parents avec sa fille Zhu sous le bras car Meï Lin l’a quitté. Catastrophés de voir leur \"tout-petit\" dans cet état, Paul et Édith font tout pour lui redonner goût à la vie, sans réaliser que ce faisant, ils tressent la corde pour se pendre. Car Tanguy recommence à se sentir bien chez ses parents…\r\n', 'tanguy_le_retour.jpg', 'tanguy_le_retour.jpg', 'https://www.youtube.com/embed/mEhk__4A22s'),
(4, 'After - Chapitre 1', '2019-04-17', 4, '1h46min', 'SND', 'américain', 'Jenny Gage', 'Hero Fiennes-Tiffin', 'Samuel Larsen', 'JOSEPHINE LANGFORD', 'INANNA SARKIS', 'Depuis son plus jeune âge, Tessa était promise à un avenir tout tracé : une vie rangée, une brillante carrière, un mariage tranquille avec son fiancé de toujours. Jusqu’à sa rencontre avec Hardin à son arrivée à l’université. Grossier, provocateur, cruel, c’est le garçon le plus détestable qu’elle ait jamais croisé. Et pourtant, ce bad boy tatoué pourrait bien lui faire perdre tout contrôle…\r\n', 'after.jpg', 'after.jpg', 'https://www.youtube.com/embed/lb9HUR5k2gU'),
(5, 'Just a gigolo', '2019-04-17', 3, '1h34min', 'Mars Films', 'français', 'Olivier Baroux', 'Kad Merad', 'Leopold Moati', 'Anne Charrier', 'Anny Duperey', 'Comment vivre heureux et riche sans travailler ? Être Gigolo.\r\nMais après 25 ans de vie commune avec Denise, Alex le « gigolo » se fait congédier sans préavis et se retrouve à la rue. Forcé de s’installer chez sa sœur et son neveu de 10 ans, il n’a alors qu’une obsession : retrouver au plus vite une riche héritière.', 'just_a_gigolo.jpg', 'just_a_gigolo.jpg', 'https://www.youtube.com/embed/IkPH0-DF8ik'),
(6, '\r\nLa Malédiction de la Dame blanche', '2019-04-17', 6, '1h34min', 'Warner Bros France', 'américain', 'Michael Chaves', 'Roman Christou', 'RAYMOND CRUZ', 'LINDA CARDELLINI', 'JAYNEE-LYNNE KINCHEN', 'Interdit aux moins de 12 ans\r\nLos Angeles, années 1970. La Dame Blanche hante la nuit… et les enfants.\r\nIgnorant les avertissements d\'une mère soupçonnée de violence sur mineurs, une assistante sociale et ses enfants sont projetés dans un monde surnaturel des plus effrayants. Pour espérer survivre à la fureur mortelle de la Dame Blanche, leur seul recours est un prêtre désabusé et ses pratiques mystiques destinées à repousser les forces du mal… à la frontière où la peur et la foi se rencontrent…', 'dame_blanche.jpg', 'dame_blanche.jpg', 'https://www.youtube.com/embed/NlVWRyA8eAc'),
(7, 'Raoul Taburin\r\n', '2019-04-17', 3, '1h30min', 'Pathé', 'français', 'Pierre Godeau', 'Benoît Poelvoorde', 'Edouard Baer', 'Suzanne Clément', 'Ilona Bachelier', 'Raoul Taburin, c’est l’histoire d’un petit garçon devenu grand sans savoir faire du vélo. L’histoire d’un immense malentendu vécu comme une malédiction. Un imposteur malgré lui.', 'raoul_taburin.jpg', 'raoul_taburin.jpg', 'https://www.youtube.com/embed/dV43Dsk-ZJo'),
(8, 'Captain Marvel\r\n', '2019-03-06', 1, '2h04min', 'Walt Disney', 'américain', 'Anna Boden et Ryan Fleck', 'Samuel L. Jackson', 'Jude Law', 'Brie Larson', 'Gemma Chan', 'Captain Marvel raconte l’histoire de Carol Danvers qui va devenir l’une des super-héroïnes les plus puissantes de l’univers lorsque la Terre se révèle l’enjeu d’une guerre galactique entre deux races extraterrestres.', 'captain-marvel.jpg', 'captain-marvel.jpg', 'https://www.youtube.com/embed/yTYh2nlCUc0'),
(9, 'Shazam!\r\n', '2019-04-03', 2, '2h12min', 'Warner Bros', 'américain', 'David F. Sandberg', 'Zachary Levi', 'Asher Angel', 'Grace Fulton', 'Faithe Herman', 'On a tous un super-héros qui sommeille au fond de soi… il faut juste un peu de magie pour le réveiller. Pour Billy Batson, gamin débrouillard de 14 ans placé dans une famille d\'accueil, il suffit de crier \"Shazam !\" pour se transformer en super-héros.\r\nAdo dans un corps d\'adulte sculpté à la perfection, Shazam s\'éclate avec ses tout nouveaux superpouvoirs. Est-il capable de voler ? De voir à travers n\'importe quel type de matière ? De faire jaillir la foudre de ses mains ? Et de sauter son examen de sciences sociales ? Shazam repousse les limites de ses facultés avec l\'insouciance d\'un enfant. Mais il lui faudra maîtriser rapidement ses pouvoirs pour combattre les forces des ténèbres du Dr Thaddeus Sivana…', 'shazam.jpg', 'shazam.jpg', 'https://www.youtube.com/embed/KThUY2k_yW4'),
(10, 'Le Parc des merveilles\r\n', '2019-04-03', 5, '1h26min', 'Paramount Pictures', 'américain, espagnol', 'Dylan Brown (II), David Feiss', 'Marc Lavoine', 'FREDERIC LONGBO', 'BRIANNA DENSKI', 'JENNIFER GARNER', 'Le Parc des Merveilles raconte l’histoire d’un parc d’attractions fabuleux né de l’imagination extraordinaire d’une petite fille appelée June.\r\nUn jour, le Parc prend vie...', 'parc_merveilles.jpg', 'parc_merveilles.jpg', 'https://www.youtube.com/embed/DuO_QPrSJrU');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
