-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 jan. 2022 à 15:32
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leste`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(2, 'admin'),
(3, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `chiffre_labo`
--

CREATE TABLE `chiffre_labo` (
  `id` int(11) NOT NULL,
  `articles` int(11) NOT NULL,
  `membres` int(11) NOT NULL,
  `brevets_deposes` int(11) NOT NULL,
  `habilitations_soutenues` int(11) NOT NULL,
  `theses_soutenues` int(11) NOT NULL,
  `mastere` int(11) NOT NULL,
  `congres` int(11) NOT NULL,
  `corps_A` int(11) NOT NULL,
  `corps_B` int(11) NOT NULL,
  `doctorant` int(11) NOT NULL,
  `Staff_technique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `chiffre_labo`
--

INSERT INTO `chiffre_labo` (`id`, `articles`, `membres`, `brevets_deposes`, `habilitations_soutenues`, `theses_soutenues`, `mastere`, `congres`, `corps_A`, `corps_B`, `doctorant`, `Staff_technique`) VALUES
(1, 502, 146, 5, 22, 95, 134, 441, 12, 35, 60, 3);

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `grade`
--

INSERT INTO `grade` (`id`, `name`) VALUES
(3, 'maitre assistant'),
(4, 'professeur'),
(7, 'assistant');

-- --------------------------------------------------------

--
-- Structure de la table `presentation_contenu`
--

CREATE TABLE `presentation_contenu` (
  `id` int(11) NOT NULL,
  `paragraphe_gauche` text COLLATE latin1_general_ci NOT NULL,
  `paragraphe_droite` text COLLATE latin1_general_ci NOT NULL,
  `cards` text COLLATE latin1_general_ci NOT NULL,
  `equipements` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `presentation_contenu`
--

INSERT INTO `presentation_contenu` (`id`, `paragraphe_gauche`, `paragraphe_droite`, `cards`, `equipements`) VALUES
(1, '<p>Le laboratoire d&#39;Etudes des Syst&egrave;mes Thermiques et Energ&eacute;tiques (LESTE) est un laboratoire de recherche de l&#39;Ecole Nationale des Ing&eacute;nieurs de Monastir situ&eacute; sur le site universitaire de Skanes-Monastir (Plan d&#39;acces). Le laboratoire est dirig&eacute; par le Professeur A. Jemni et regroupe des chercheurs sur les th&eacute;matique g&eacute;n&eacute;rales de l&#39;<strong><em>a&eacute;rothermodynamique</em></strong>,<strong><em>mat&eacute;riaux pour l&rsquo;&eacute;nergie</em></strong>,<strong><em>&nbsp;milieux h&eacute;t&eacute;rogenes</em></strong>&nbsp;,<strong><em>modelisation et optimisation des systemes &eacute;nerg&eacute;tiques</em></strong>&nbsp;et&nbsp;<strong><em>combustion</em></strong>. LESTE est essentiellement structur&eacute; autour de 05 &eacute;quipes de recherche. Cette structuration permet un partage des responsabilit&eacute;s d&rsquo;encadrement et de gestion. Le responsable de l&rsquo;&eacute;quipe est un maillon essentiel qui assure la relation avec la direction.</p>\n\n<p>La sp&eacute;cialit&eacute; du LESTE concerne:<br />\n<strong>1.</strong>&nbsp;Le d&eacute;veloppement de moyens d&rsquo;&eacute;tudes (moyens de mesure, codes num&eacute;riques) adapt&eacute;s aux diff&eacute;rents probl&egrave;mes de m&eacute;canique des fluides et d&rsquo;&eacute;nerg&eacute;tique.<br />\n<strong>2.</strong>&nbsp;La contribution &agrave; l&rsquo;avancement de l&rsquo;&eacute;tat des connaissances de certains sujets touchant &agrave; la m&eacute;canique des fluides et aux transferts de la mati&egrave;re et de l&rsquo;&eacute;nergie.<br />\n<strong>3.</strong>&nbsp;La cr&eacute;ation d&rsquo;un p&ocirc;le de comp&eacute;tences dans le domaine de la m&eacute;canique des fluides et de l&rsquo;&eacute;nerg&eacute;tique.<br />\n<strong>4.</strong>&nbsp;La formation des formateurs.<br />\nDeux s&eacute;minaires annuels, des s&eacute;minaires internes mensuels, des r&eacute;unions de groupes et enfin la participation &agrave; l&rsquo;organisation de manifestations scientifiques sont des facteurs important d&rsquo;unit&eacute; et contribuent &agrave; la visibilit&eacute; du laboratoire &agrave; l&#39;&eacute;chelle Nationale et internationale.</p>\n', '<p>La production scientifique du LESTE a progress&eacute; depuis sa cr&eacute;ation en 1999. Elle s&rsquo;est stabilis&eacute;e &agrave; plus de 37 articles par an durant les cinq derni&egrave;res ann&eacute;es.</p>\n\n<p><em><strong>HABILITATIONS SOUTENUES:</strong>&nbsp;22.<br />\n<strong>TH&Egrave;SES</strong> <strong>SOUTENUES:&nbsp;</strong>95.<br />\n<strong>MAST&Egrave;RES ET DEA SOUTENUES:&nbsp;</strong>134.<br />\n<strong>NOMBRE D&rsquo;ARTICLES:&nbsp;</strong>502.<br />\n<strong>PARTICIPATION &Agrave; DES CONGR&Egrave;S:&nbsp;</strong>441.<br />\n<strong>BREVETS D&Eacute;POS&Eacute;S:&nbsp;</strong>05.</em></p>\n\n<p><em><strong>CORPS A:&nbsp;</strong>12<br />\n<strong>CORPS B:&nbsp;</strong>35<br />\n<strong>DOCTORANT:&nbsp;</strong>60<br />\n<strong>STAFF TECHNIQUE:&nbsp;</strong>03<br />\n<strong>TOTAL:&nbsp;</strong>110 membres</em></p>\n', '<p>&nbsp;&nbsp;&nbsp;</p>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\n	<tbody>\n		<tr>\n			<td><strong>CODE DE LA STRUCTURE:&nbsp;</strong>LR99ES31.<br />\n			<strong>ADRESSE:</strong>&nbsp;Avenue Ibn Aljazzar 5000 Monastir.<br />\n			<strong>E-MAIL:</strong>&nbsp;enim_leste@yahoo.fr</td>\n			<td>&nbsp;</td>\n			<td><strong>DIRECTEUR DU LABO:</strong>&nbsp;JEMNI abdelmajid.<br />\n			<strong>T&Eacute;L&Eacute;PHONE:&nbsp;</strong>+216 73 50 15 97.<br />\n			<strong>E-MAIL:</strong>&nbsp;abdelmajidjemni1@gmail.com.</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n', '<p>Le laboratoire est dot&eacute; d&#39;&eacute;quipements tr&egrave;s performants et avanc&eacute;s dont la plupart sont con&ccedil;us et d&eacute;v&eacute;lopp&eacute;s au sein du LESTE.<br />\nLa diversit&eacute; de ses &eacute;quipements fail du laboratoire un p&ocirc;le de recherche national permettant au chercheurs de r&eacute;aliser leurs objectifs et d&#39;obtenir des resultats exacts.</p>\n\n<ul>\n	<li>Une Cha&icirc;ne de v&eacute;locim&eacute;trie par images de particules.</li>\n	<li>Une Soufflerie &agrave; temp&eacute;rature et humidit&eacute; r&eacute;gul&eacute;es.</li>\n	<li>Une Cha&icirc;ne de v&eacute;locim&eacute;trie par images de particules.</li>\n	<li>Un Banc de mesure de la conductivit&eacute; thermique des mat&eacute;riaux de constructions (M&eacute;thodes des boites).</li>\n	<li>Un Banc de mesure de la diffusivit&eacute; thermique des mat&eacute;riaux (M&eacute;thode Flash).</li>\n	<li>Un Banc de mesure de la conductivit&eacute; thermique des plaques minces.</li>\n	<li>Un Banc de mesure de la perm&eacute;abilit&eacute; des mat&eacute;riaux poreux.</li>\n	<li>Un Banc de mesure du coefficients de diffusion de la vapeur.</li>\n	<li>Un Banc de mesure de l&#39;&eacute;missivit&eacute; des surfaces opaques.</li>\n	<li>Un Banc de mesure de r&eacute;flectivit&eacute; des surfaces opaques.</li>\n	<li>Bancs d&#39;&eacute;tude des r&eacute;acteurs m&eacute;tal-h&eacute;t&eacute;rog&egrave;nes.</li>\n	<li>Une Cha&icirc;ne d&#39;an&eacute;mometrie &agrave; fil chaud.</li>\n	<li>Cartes d&#39;acquisition de temp&eacute;rature.</li>\n	<li>Capteurs de temp&eacute;rature, d&#39;hygrom&eacute;trie et de pression.</li>\n	<li>Un bain thermostat&eacute;.</li>\n	<li>Un Parc informatique (43 micro-ordinateurs, 10 imprimantes, une station de calcul).</li>\n	<li>Un Spectrom&egrave;tre et cha&icirc;ne d&#39;acquisition UV-Visible.</li>\n	<li>Cannes pyrom&eacute;triques et syst&egrave;mes d&#39;acquisition de temp&eacute;ratures.</li>\n	<li>Un Analyseur des produits de combustion.</li>\n	<li>Dessalement multi-&eacute;tages.</li>\n</ul>\n\n<h4>Les appareils</h4>\n\n<ul>\n	<li>Actionneur fluidique.</li>\n	<li>Agilent technologies 34980A &laquo; Multifonction Switch/Mesure Unit &raquo;.</li>\n	<li>Agitateur magn&eacute;tique.</li>\n	<li>Alimentation 12V DC.</li>\n	<li>Alimentation &agrave; trois sorties.</li>\n	<li>Alimentation AC.</li>\n	<li>Alimentation automatique flash.</li>\n	<li>Alimentation digital.</li>\n	<li>Alimentation pour lampe spectrale.</li>\n	<li>Alimentation variable &agrave; deux sorties.</li>\n	<li>Amplificateur de puissance.</li>\n	<li>D&eacute;bitm&egrave;tre.</li>\n	<li>Appareil de mesure d&rsquo;hygrom&eacute;trie HD200.</li>\n	<li>Hygrom&eacute;trie VT300.</li>\n	<li>Appareil d&rsquo;impression de circuit Int&eacute;gr&eacute;.</li>\n	<li>Appareil multifonction.</li>\n	<li>Appareil photo num&eacute;rique Nikon D100 + Accessoires.</li>\n	<li>Appareil photo num&eacute;rique Nikon D200 + Accessoires.</li>\n	<li>Bain r&eacute;frig&eacute;r&eacute; thermostat&eacute; 60 L.</li>\n	<li>Bain r&eacute;frig&eacute;r&eacute; thermostat&eacute; pilotable 11L (Cryostat).</li>\n	<li>Bain r&eacute;frig&eacute;r&eacute; thermostat&eacute; pilotable 30L (Cryostat).</li>\n	<li>Bain r&eacute;frig&eacute;r&eacute; thermostat&eacute; pilotable 5L (Cryostat).</li>\n	<li>Balance de pr&eacute;cision num&eacute;rique 10-2 METLER TOLEDO &laquo; 3,1 Kg &raquo;.</li>\n	<li>Balance de pr&eacute;cision num&eacute;rique 10-3 POINTEC &laquo; 1Kg &raquo;.</li>\n	<li>Balance de pr&eacute;cision num&eacute;rique 10-1 METLER TOLEDO &laquo; 6 Kg &raquo;.</li>\n	<li>Balance de pr&eacute;cision num&eacute;rique 10-4 METLER TOLEDO &laquo; 600 g &raquo;.</li>\n	<li>Cam&eacute;ra flexyfly.</li>\n	<li>Carte d&rsquo;acquisition.</li>\n	<li>Central d&rsquo;acquisition Agilent.</li>\n	<li>Cloche &agrave; vide en c&eacute;ramique + Accessoires.</li>\n	<li>Compresseur grande mod&egrave;le.</li>\n	<li>Compresseur petit mod&egrave;le.</li>\n	<li>Etuve &laquo; Lab. Companion &raquo;.</li>\n	<li>Flash style 300S.</li>\n	<li>G&eacute;n&eacute;rateur GBF 0.1 Hz-&gt; 2 Mhz.</li>\n	<li>G&eacute;n&eacute;rateur Base Fr&eacute;quence &laquo; GBF &raquo;.</li>\n	<li>G&eacute;n&eacute;rateur de courant Agilent.</li>\n	<li>G&eacute;n&eacute;rateur de fum&eacute;.</li>\n	<li>G&eacute;n&eacute;rateur wilding de couran.</li>\n	<li>Manom&egrave;tre &laquo; Digiton &raquo;.</li>\n	<li>M&eacute;gohmm&egrave;tre Agilent 4339B.</li>\n	<li>Micro manom&egrave;tre num&eacute;rique.</li>\n	<li>Module Agilent 34908A 40V.</li>\n	<li>Manom&egrave;tre fil chaud.</li>\n	<li>Onduleur on-line.</li>\n	<li>Oscilloscope num&eacute;rique.</li>\n	<li>PIV Laser.</li>\n	<li>Pompe &agrave; vide.</li>\n	<li>Pousse Seringue.</li>\n	<li>Rh&eacute;ostat 220V.</li>\n	<li>Thermor&eacute;gulateur.</li>\n	<li>Variateur de vitesse triphas&eacute;.</li>\n</ul>\n\n<h5>Toutefois, le Laboratoire a acc&egrave;s &agrave; d&#39;autres &eacute;quipements de l&#39;ENIM tel que:</h5>\n\n<ul>\n	<li>Une Soufflerie subsonique &agrave; circuit ouvert.</li>\n	<li>Un Microscope &agrave; force atomique.</li>\n	<li>Un R&eacute;acteur de d&eacute;p&ocirc;t sous vide.</li>\n</ul>\n');

-- --------------------------------------------------------

--
-- Structure de la table `projets_de_recherche`
--

CREATE TABLE `projets_de_recherche` (
  `id` int(200) NOT NULL,
  `contenu` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projets_internationaux`
--

CREATE TABLE `projets_internationaux` (
  `id` int(200) NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `duree` varchar(255) NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `responsable_tunisien` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `responsable_francais` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets_internationaux`
--

INSERT INTO `projets_internationaux` (`id`, `type`, `duree`, `titre`, `responsable_tunisien`, `responsable_francais`, `description`) VALUES
(4, 'CMCU', '2016-2018', 'Analyse expérimentale et numérique des écoulements générés en milieu fluide par onde ultrasonore focalisée.', 'Maher BEN CHIEKH', 'J. Christophe BERA', ''),
(5, 'Tuniso-Indien', '2018-2020', 'Hierarchical Control of Hybrid Power Systems.', 'JEMNI Abdelmajid', 'MAITY Somnath', '');

-- --------------------------------------------------------

--
-- Structure de la table `projets_nationaux`
--

CREATE TABLE `projets_nationaux` (
  `id` int(200) NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `duree` varchar(100) NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `responsable_tunisien` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `responsable_francais` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projets_nationaux`
--

INSERT INTO `projets_nationaux` (`id`, `type`, `duree`, `titre`, `responsable_tunisien`, `responsable_francais`, `description`) VALUES
(2, 'PNRI', '2012-2014', 'Séchage et traitement du bois à l’énergie solaire.', 'M.S. Guellouz', 'CTIBA', ''),
(3, 'PNRI', '2017-2018', 'Développement d’un textile innovant, fonctionnel et confortable.', 'F. Fayala et S. Ben Ltoufa', 'CETTEX', ''),
(4, 'PRF', '2008-2013', 'Maitrise des technologies utilisées dans le dessalement solaire.', 'Sassi Ben Nasrallah', 'ANME', ''),
(5, 'PNRI', '2012-2014', 'Conception et réalisation d’un séchoir solaire de produit agro-alimentaires.', 'M.S. Guellouz', 'CETTEX', ''),
(6, 'VRR', '2017-2019', 'Réalisation d’un prototype de concentrateur solaire parabolique.', 'S. EL ALIMI', 'ENIM', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscri` datetime NOT NULL DEFAULT current_timestamp(),
  `id_grade` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `telephone`, `etablissement`, `login`, `mot_de_passe`, `date_inscri`, `id_grade`, `id_categorie`) VALUES
(1, 'dia', 'dia@gmail.com', '98417466', 'ENIM', 'admin', 'admin', '2021-12-26 17:18:23', 3, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chiffre_labo`
--
ALTER TABLE `chiffre_labo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation_contenu`
--
ALTER TABLE `presentation_contenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_de_recherche`
--
ALTER TABLE `projets_de_recherche`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_internationaux`
--
ALTER TABLE `projets_internationaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_nationaux`
--
ALTER TABLE `projets_nationaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_grade_2` (`id_grade`),
  ADD UNIQUE KEY `id_categorie_2` (`id_categorie`),
  ADD KEY `id_grade` (`id_grade`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `chiffre_labo`
--
ALTER TABLE `chiffre_labo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `presentation_contenu`
--
ALTER TABLE `presentation_contenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `projets_de_recherche`
--
ALTER TABLE `projets_de_recherche`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projets_internationaux`
--
ALTER TABLE `projets_internationaux`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `projets_nationaux`
--
ALTER TABLE `projets_nationaux`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `cat_user` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gra_user` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
