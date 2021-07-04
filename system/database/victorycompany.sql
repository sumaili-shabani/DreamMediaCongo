-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 juil. 2021 à 01:32
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `victorycompany`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idart` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `lien` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `image` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `idcat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES
(48, 'Un Manager en charge des Ressources Humaines pour la ville de Kinshasa ', '&lt;div&gt;&amp;nbsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;', '', '2021-06-09 14:20:43', '164816333.jpg', 'texte', 14),
(49, 'Un déficit de 22,9 milliards de CDF affiché par le compte du Trésor à fin mars 2021, selon la BCC', '&lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;', 'https://www.youtube.com/watch?v=wgGkF4k9c7A', '2021-06-09 14:23:55', '1017327145.jpg', 'video', 12),
(50, 'Décès d\'Idriss Déby: Félix Tshisekedi consterné', '	                  &lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-09 14:25:21', 'icone-user.png', 'texte', 12),
(51, 'Dossier Sokimo contre Kibali Gold Mine : la coalition « Tous pour le Congo » indexe le Tribunal de commerce de Kinshasa/Gombe', '	                  	                  &lt;div&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              \r\n	              ', '', '2021-06-09 14:28:16', '315890481.jpg', 'texte', 10),
(52, 'Toute une communauté autours du blog Fidba Graphics', '&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify;text-justify:inter-ideograph&quot;&gt;&lt;b&gt;&lt;span style=&quot;font-size:18.0pt;mso-bidi-font-size:\r\n12.0pt;line-height:115%;font-family:Roboto;mso-bidi-font-family:Arial;\r\nmso-ansi-language:FR&quot;&gt;Toute une communauté autours du blog Fidba Graphics&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify;text-justify:inter-ideograph&quot;&gt;&lt;span style=&quot;font-family:Roboto;mso-ansi-language:FR&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify;text-justify:inter-ideograph&quot;&gt;&lt;span style=&quot;font-family:Roboto;mso-ansi-language:FR&quot;&gt;Notre désir était de réunir la\r\ncommunauté autours d’une idée unique, communiquons sans partie pris, sans rancune\r\nmais dans l’intérêt de toutes nos communautés. Dans cette optique, nous avons\r\nréuni les savoirs&amp;nbsp;; des blogueurs, journalistes, des coach, rédacteurs et\r\nles passionnés de l’écriture.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraph&quot; style=&quot;margin-left:54.0pt;mso-add-space:auto&quot;&gt;&lt;span style=&quot;font-family:Roboto&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n                          ', '', '2021-06-09 14:29:25', '784678547.jpg', 'texte', 14),
(53, 'Députés pétitionnaires : l’égoïsme, la province d’origine et la tribu hissés au détriment de la Nation', '&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;', '', '2021-06-09 15:32:13', '1319159358.jpg', 'texte', 13),
(54, 'Health-malamu : chef de projet sante ', '&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;	                  \r\n                          \r\n	              ', '', '2021-06-09 15:33:09', '198202169.jpg', 'texte', 14),
(56, 'gentamicine', '&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          ', '', '2021-06-09 15:35:26', '1626154337.jpg', 'texte', 13),
(57, 'Vernissage de l’exposition « Lorsque l’art rencontre le fleuve »', '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-09 15:36:58', '1182456332.jpg', 'texte', 13),
(58, 'Kibali rejette la plainte de Sokimo et parle d\'une tentative \"d\'extorsion\"', '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-09 15:38:09', '1189491465.jpg', 'texte', 13),
(59, 'Kongo-Central : Kabuya s’oppose à toute campagne de diabolisation menée contre les députés nationaux suite à leur opinion en rapport avec le Gouvernement Sama', '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-09 15:39:12', '521349472.jpg', 'texte', 13),
(60, 'karisimbi', '&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;	                  \r\n                          \r\n	              ', '', '2021-06-09 15:39:55', '492626057.jpg', 'texte', 12),
(61, 'entrepreneuriat  ', '&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          ', '', '2021-06-09 15:40:39', '1066530870.jpg', 'texte', 10),
(65, 'Foyer Culturel de Goma', '	                  &lt;div&gt;&lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;ALERTE   ALERTE&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;&lt;span class=&quot;pq6dq46d tbxw36s4 knj5qynh kvgmc6g5 ditlmg2l oygrvhab nvdbi5me sf5mxxl7 gl3lb2sf hhz5lgdu&quot; style=&quot;margin: 0px 1px; height: 16px; width: 16px; display: inline-flex; vertical-align: middle; font-family: inherit;&quot;&gt;&lt;img height=&quot;16&quot; width=&quot;16&quot; alt=&quot;????&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png&quot; style=&quot;border: 0px;&quot;&gt;&lt;/span&gt;*&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*ÉVACUATION TOTALE DE PLUSIEURS QUARTIERS DE LA VILLE DE GOMA*&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Les données scientifiques prouvent que la ville de Goma est très en danger, une éruption à terre ou sous le lac.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Les quartiers qui doivent se vider d\'urgences des habitants sont les suivants:&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Majengo&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mabanga Nord&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mabanga Sud&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Bujovu&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Virunga&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Murara&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mapendo&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Mikeno&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier Kayembe&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;- Quartier le Volcan.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Sur instruction obligatoire du Gouverneur dans son message lu cette nuit sur la chaîne nationale la RTNC/Goma, tous les habitants de ces quartiers doivent quitter d\'urgence vers la cité de Sake.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Prenez toutes les dispositions nécessaires dans le calme en prenant le strict minimum pour un bon embarquement.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Quittez la ville de Goma d\'urgence s\'il vous plait!!!&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*ISHARA BUTARAGAZA Johnson*&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt; _Chercheur et Penseur libre et engagé_&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;+243993831396&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-09 15:43:55', '989863637.jpg', 'texte', 17),
(66, 'Test Covid-19 : à l’aéroport de N’djili, l’INRB refuse tout résultat venu de l’étranger et oblige aux voyageurs de payer 45 USD', '&lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                ', '', '2021-06-09 15:44:34', '358130361.jpg', 'texte', 8),
(67, 'Sauf imprévu, Sama Lukonde présente son programme d’actions ce jeudi 22 avril', '&lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;\r\n                          ', 'https://www.youtube.com/watch?v=no35TFWg0CU&list=PL0TnHYy48T2zwGWVTcRFAbKpxCM-66F4p&index=3', '2021-06-10 18:22:49', '322523268.jpg', 'video', 12),
(69, 'La comédienne Maman Shako n’est plus', '&lt;div class=&quot;first_article&quot; id=&quot;one_article&quot; style=&quot;margin: 0px; padding: 0px; border-top: 4px solid rgb(102, 172, 208); border-right: none; border-bottom: none; border-left: none; border-image: initial;&quot;&gt;&lt;div class=&quot;first_article_text&quot; itemprop=&quot;articleBody&quot; style=&quot;margin: 0px; padding: 0px; border: none; line-height: 25px;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;L’artiste Jackie Shako Diala Anahengo, autrement appelée « Maman Shako » est décédée ce mardi 15 juin 2021 à l’hôpital HJ dans la commune de Limete, apprend Actu30.cd de son groupe de théâtre.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Née le 23 août 1958, Maman Shako est une de grandes figures de la comédie congolaise qui ont créé l’histoire même du théâtre en République démocratique du Congo.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Jackie Shako Diala Anahengo était l’une de dernières survivantes de la grande génération des femmes qui s’étaient orientée dans la comédie, du reste diffusée sur la chaîne nationale RTNC.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Décédée à l’âge de 62 ans, Maman Shako aura marqué l’histoire du théâtre congolais avec qu’à son compte une carrière de 48 ans sur scène.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;CL&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Actu 30 / MCP, via mediacongo.net&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;article_comments&quot; id=&quot;post_message&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none; width: 645px; clear: both;&quot;&gt;&lt;div class=&quot;article_comments_intro&quot; style=&quot;background-image: url(&amp;quot;../pics/comment_icon.png&amp;quot;); background-position: left center; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 0px; padding: 0px 0px 0px 42px; border-top: 1px solid rgb(183, 182, 181); border-right: none; border-bottom: 1px solid rgb(183, 182, 181); border-left: none; border-image: initial; height: 40px; line-height: 40px; vertical-align: middle;&quot;&gt;&lt;div class=&quot;followers&quot; style=&quot;margin: 0px; padding: 0px; border: none; float: right; display: inline;&quot;&gt;2879 suivent la conversation&lt;/div&gt;5 commentaire(s)&lt;/div&gt;&lt;div class=&quot;aviscomments&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; margin: 10px 0px; padding: 5px; border: none; box-sizing: content-box; border-radius: 14px; text-overflow: ellipsis;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Faites connaissance avec votre « Code MediaCongo »&lt;/span&gt;&lt;/p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: none;&quot;&gt;Vous avez sans doute remarqué un nouveau&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&amp;nbsp;code à 7 caractères affiché à droite de votre Nom/Pseudo&lt;/span&gt;, par exemple « AB25CDF ».&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Il s’agit de&amp;nbsp;&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Votre Code MediaCongo&lt;/span&gt;, unique à chaque utilisateur, et qui permet de faire la différence entre utilisateurs ayant le même Nom ou Pseudo.&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Nous avons en effet reçu des réclamations d’utilisateurs se plaignant de confusion dans les commentaires ou dans les&amp;nbsp;&lt;a href=&quot;https://www.mediacongo.net/categories.html&quot; style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;« Petites annonces »&lt;/a&gt;&amp;nbsp;avec d’autres utilisateurs ayant respectivement les mêmes noms.&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Notre seul objectif et engagement est de&amp;nbsp;&lt;font color=&quot;#ffffff&quot; face=&quot;Georgia, Arial, Helvetica, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;continuer de vous offrir un service de qualité&lt;/span&gt;. N’hésitez pas à écrire à&amp;nbsp;&lt;span style=&quot;font-size: 15px; background-color: rgba(99, 54, 34, 0.78); border-width: initial; border-color: initial; border-image: initial;&quot;&gt;support@mediacongo.net&lt;/span&gt;&amp;nbsp;si vous avez des questions ou suggestions.&lt;/font&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;Merci et excellente expérience sur mediacongo.net&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;MediaCongo – Support Utilisateurs&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          ', '', '2021-06-15 16:57:50', '488256811.jpeg', 'texte', 17),
(70, 'Un monument du volcan en plein centre de Goma', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Très créatif. L’artiste plasticien rd-congolais n’attend pas qu’un étranger lui domine dans son sol. Trois semaines après (22 mai 2021), l’artiste rd-congolais Sanvura Ngonjangonja basé dans la ville touristique de Goma a réalisé un monument du volcan.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;En accord avec le gouvernement provincial du Nord-Kivu, cette œuvre d’art située au rond-point Sinyers. Il symbolise la montagne et la lave, mélange de terre et de feu, la ville même de Goma par le mont Nyiragongo.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Cette initiative contribuera également à l’attraction touristique de cette ville, qui en temps normal n’accueille déjà des milliers de touristes.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Signalons qu’une éruption volcanique est une puissance énorme, terriblement dangereuse et destructrice pour le territoire qui la vit.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Danny Kabanga&lt;/span&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Events RDC / MCP, via mediacongo.net&lt;/span&gt;&lt;/div&gt;', '', '2021-06-15 16:59:07', '1679040236.jpeg', 'texte', 17),
(71, 'L’Afrique en force au Festival de Cannes', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Quatre films africains seront présents sur la Croisette cette année. En lice pour la Palme d’or : le Marocain Nabil Ayouch et le Tchadien Mahamat-Saleh Haroun.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Qui succédera à Chronique des années de braise de Mohammed Lakhdar-Hamina ? En 1975, le cinéaste algérien obtenait une palme d\'or très politique pour une fresque de trois heures consacrées aux cinq années qui précédèrent le déclenchement de la guerre d\'Algérie. Depuis, aucun cinéaste africain n\'a obtenu le précieux trophée. En juillet, quatre films venus du continent ont été sélectionnés, dont deux en compétition. Tour d\'horizon d\'une sélection cannoise qui a résonné jusqu\'aux faubourgs d\'Abéché, du Caire, de Rabat ou Tunis. Thierry Frémaux, le délégué général de l\'institution, a égrené les noms des vingt-quatre réalisateurs qui batailleront pour obtenir la Palme d\'or. Parmi eux : le Marocain Nabil Ayouch et le Tchadien Mahamat-Saleh Haroun.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Maroc : la consécration pour Nabil Ayouch&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Âgé d\'à peine cinquante ans, le cinéaste affiche une sérieuse filmographie. Il a le don pour s\'emparer de sujets qui alpaguent la société marocaine : terrorisme (Les Chevaux deDieu), bidonville (Ali Zaoua, prince de la rue), prostitution à Marrakech (Much Loved)… Ce dernier avait provoqué un tsunami de scandales et de menaces, contraignant son actrice principale, Loubna Abidar, à se réfugier en France.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Présenté à la Quinzaine des réalisateurs en 2015, Much Loved fut interdit au Maroc. Conservateurs, islamistes et tartuffes d\'une image romancée du Royaume s\'étaient associés pour museler le film. Ce ne sera pas le cas avec son nouveau.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Tchad : Haroun, un habitué de la compétition&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le Tchadien est un enfant du festival, un de ces cinéastes dont la carrière épouse régulièrement son actualité. Pour la quatrième fois, Mahamat-Saleh Haroun grimpera marches et tapis rouge pour dévoiler Lingui, les liens sacrés. L\'histoire : une adolescente de quinze ans doit résoudre une grossesse non désirée dans un pays ou loi et religion s\'opposent à l\'avortement.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le pedigree cannois du cinéaste est éloquent : prix du jury en 2010 pour Un homme qui crie, membre du jury l\'année suivante, présentation de Grigris en 2013. En 2016, il présente Hissein Habré, une tragédie tchadienne, un documentaire qui donne la parole aux victimes de l\'ancien dictateur. Mahamat-Saleh Haroun a été nommé ministre de la Culture du Tchad en 2017. Le revoici sur la Croisette en tant qu\'artiste.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834352-embed-libre-jpg_8020481.jpg&quot; alt=&quot;&quot; width=&quot;482&quot; height=&quot;366&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Tunisie : amour et désirs, selon Leyla Bouzid&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;En marge de la course à la Palme d\'or, deux talents débutants dévoileront leurs films. La jeune réalisatrice franco-tunisienne Leyla Bouzid présentera Une histoire d\'amour et de désirs, en clôture de la soixantième édition de la Semaine de la critique. Son premier long-métrage, À peine j\'ouvre les yeux, avait décroché les honneurs d\'un autre prestigieux festival : la Mostra de Venise 2015.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Son deuxième s\'annonce comme une méchouia d\'identités : un jeune Franco-Algérien rencontre une jeune Tunisienne sur les bancs de la fac à Paris. Un charivari de sens et de littératures est annoncé. La cinéaste est la fille de Nouri Bouzid, lui-même sélectionné à deux reprises dans la sélection officielle dans les années 1980. Cette première mondiale consacre la bonne santé du cinéma tunisien depuis l\'avènement de la démocratie.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834372-embed-libre-jpg_8020482.jpg&quot; alt=&quot;&quot; width=&quot;517&quot; height=&quot;621&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Égypte : la contagieuse ironie d\'Omar El Zohairy&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;À trente-deux ans, cet ancien assistant-réalisateur de Yousri Nasrallah présentera son premier long-métrage à la Semaine de la critique. Sur le papier, Feathers (« Plumes ») semble le plus iconoclaste des films venus d\'Afrique : il imagine une famille engluée dans un quotidien qu\'un tour de magie commis pendant un anniversaire va bouleverser.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Le prestidigitateur va transformer le père autoritaire en poule. Le jeune réalisateur avait démontré un indéniable sens de l\'absurde et de l\'ironie dans un court-métrage au titre kilométrique : Les Conséquences de l\'inauguration des toilettes publiques au kilomètre 375. Dix minutes féroces, décalées, drôles.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://static.lpnt.fr/images/2021/06/09/21834061lpw-21834388-embed-libre-jpg_8020483.jpg&quot; alt=&quot;&quot; width=&quot;504&quot; height=&quot;606&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Quatre cinéastes en quête d\'audience&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Du 6 au 17 juillet, Cannes redeviendra la capitale mondiale du cinéma après un silence d\'une année pour cause de pandémie. Près de quatre-vingts films seront présentés sur quatre sélections, la Palme d\'or demeurant le Moby Dick des cinéastes, cette baleine blanche dont l\'obtention permet de toucher un public mondial. En 2019, Atlantique obtenait le grand prix du jury offrant à la cinéaste sénégalaise Mati Diop une reconnaissance internationale, facilitant la mise en œuvre de son prochain film. Les cinéastes africains seront au nombre de quatre. Ils viendront chercher gloire et honneurs, mais aussi rencontrer vendeurs internationaux, producteurs, distributeurs pour leurs futurs rêves. Cannes est un magnifique tremplin pour toucher le maximum de publics aux identités diverses.&lt;/p&gt;&lt;div class=&quot;one_article_who&quot; style=&quot;margin: 0px; padding: 30px 0px 0px; border: none;&quot;&gt;&lt;br style=&quot;margin: 0px; padding: 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;le Point/ MCP, via mediacongo.net&lt;/span&gt;&lt;/div&gt;', '', '2021-06-15 17:00:41', '532286801.jpeg', 'texte', 17),
(72, '« Kinshasa Now », le film qui raconte la vie des enfants de la rue', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;span style=&quot;border-width: initial; border-color: initial; border-image: initial;&quot;&gt;Faire connaitre la vie des enfants de la rue et trouver des moyens pour leur encadrement. C’est le message du film «&amp;nbsp;Kinshasa Now&amp;nbsp;» du réalisateur belge Marc-Henri Wajnberg. Ce nouveau spectacle lancé mercredi 26 mai à Kinshasa, relate la vie d’un jeune homme «&amp;nbsp;Mika&amp;nbsp;», chassé de la maison par la femme de son père. Accusé de sorcellerie, il se retrouve dans la rue et se livrent au vol à la tire pour survivre.&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;Mais sa vie ne se limite pas dans les marchés de Kinshasa. Il sera récupéré pour un encadrement par des structures d’encadrement d’enfants. Tourné en 3D, ce film véhicule un message clair d’après son réalisateur&amp;nbsp;: «&amp;nbsp;les enfants de la rue dégagent une énergie positive et doivent garder espoir&amp;nbsp;».&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;&lt;img src=&quot;https://photos.radiookapi.net/picture/20210527111213232477-marc_2.jpg?imgmax=300&quot; alt=&quot;&quot; width=&quot;450&quot; height=&quot;338&quot; style=&quot;margin: 0px; padding: 0px; border-width: initial; border-color: initial; border-image: initial;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 5px 0px; border: none;&quot;&gt;«&amp;nbsp;Kinshasa Now&amp;nbsp;» a été tourné et réalisé avec le financement de la Trust Merchant Bank (TMB), et d’autres partenaires dont le Réseau des éducateurs des enfants et jeunes de la rue (REEJER).&lt;/p&gt;', '', '2021-06-15 17:01:36', '704411193.jpeg', 'texte', 17);
INSERT INTO `article` (`idart`, `nom`, `description`, `lien`, `created_at`, `image`, `type`, `idcat`) VALUES
(73, 'Fidba graphics', '	                  &lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;&quot; dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;ecm0bbzt hv4rvrfc ihqw7lf3 dati1w0a&quot; data-ad-comet-preview=&quot;message&quot; data-ad-preview=&quot;message&quot; id=&quot;jsc_c_u&quot; style=&quot;padding: 4px 16px 16px; font-family: inherit;&quot;&gt;&lt;div class=&quot;j83agx80 cbu4d94t ew0dbk1b irj2b8pg&quot; style=&quot;flex-direction: column; margin-bottom: -5px; margin-top: -5px; display: flex; font-family: inherit;&quot;&gt;&lt;div class=&quot;qzhwtbm6 knvmm38d&quot; style=&quot;margin-top: 5px; margin-bottom: 5px; font-family: inherit;&quot;&gt;&lt;span class=&quot;d2edcug0 hpfvmrgz qv66sw1b c1et5uql lr9zc1uh a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m&quot; dir=&quot;auto&quot; style=&quot;line-height: 1.3333; display: block; overflow-wrap: break-word; max-width: 100%; min-width: 0px; font-size: 0.9375rem; font-family: inherit; color: var(--primary-text); word-break: break-word;&quot;&gt;&lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Ils ont choisi l’entrepreneuriat  malgré tout !&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Des jeunes de moins de 27 ans, détenant des diplômes universitaires chacun, se sont unis pour résoudre des  problèmes des communautés congolaises.&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Ils se réveillent chaque matin pour exprimer  les valeurs congolaises et pousser l’emblème national encore plus loin. &lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Ils viennent de familles qui dépendent d’eux c’est pourquoi ils se disent qu’ils n’ont pas droit à l’erreur. &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;Ils ont créé une Agence de Communication FIDBA GRAPHICS  pour que le monde découvre tout ce qui se passe à l’Est de la RDC. Il ne s’agit pas seulement de la &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/guerre?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#guerre&lt;/a&gt;&lt;/span&gt; ou du &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/volcan?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#volcan&lt;/a&gt;&lt;/span&gt; , mais aussi de l’innovation, travail, passion et histoire à raconter. Ces jeunes ne dorment pas! &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; font-family: inherit;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;&lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/jesuisentrepreneurs?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#JeSuisEntrepreneurs&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt; &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/agencedecom?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#AgenceDeCom&lt;/a&gt;&lt;/span&gt; &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/fidbagraphics?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#FidbaGraphics&lt;/a&gt;&lt;/span&gt;  &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/rdcongo?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#rdcongo&lt;/a&gt;&lt;/span&gt;  &lt;span style=&quot;font-family: inherit;&quot;&gt;&lt;a class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl q66pz984 gpro0wi8 b1v8xokw&quot; href=&quot;https://web.facebook.com/hashtag/entrepreneuriat?__eep__=6&amp;amp;__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*NK-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: var(--accent); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; text-align: inherit; display: inline; -webkit-tap-highlight-color: transparent; font-family: inherit;&quot;&gt;#entrepreneuriat&lt;/a&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;l9j0dhe7&quot; id=&quot;jsc_c_v&quot; style=&quot;position: relative; font-family: inherit;&quot;&gt;&lt;div class=&quot;l9j0dhe7&quot; style=&quot;position: relative; font-family: inherit;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;l9j0dhe7&quot; style=&quot;position: relative; font-family: inherit;&quot;&gt;&lt;div class=&quot;l9j0dhe7&quot; style=&quot;position: relative; font-family: inherit; padding-top: 500px;&quot;&gt;&lt;div class=&quot;ni8dbmo4 stjgntxs pmk7jnqg&quot; style=&quot;overflow: hidden; position: absolute; font-family: inherit; inset: calc(0% + 0px) calc(0% + 0px) calc(33.3333% + 1.01px);&quot;&gt;&lt;a aria-label=&quot;Peut être une image de 1 personne, position assise et intérieur&quot; class=&quot;oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l i09qtzwb n7fi1qx3 j9ispegn kr520xx4 tm8avpzi&quot; href=&quot;https://web.facebook.com/fidbagraphics/photos/pcb.895403007707145/895402747707171/?__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*bH-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: rgb(56, 88, 152); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; touch-action: manipulation; align-items: stretch; min-width: 0px; inset: 0px; text-align: inherit; flex-basis: auto; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-block; min-height: 0px; font-family: inherit;&quot;&gt;&lt;div class=&quot;stjgntxs ni8dbmo4&quot; style=&quot;overflow: hidden; font-family: inherit;&quot;&gt;&lt;div class=&quot;do00u71z ni8dbmo4 stjgntxs l9j0dhe7&quot; style=&quot;height: 0px; position: relative; overflow: hidden; font-family: inherit; padding-top: 333.328px;&quot;&gt;&lt;div class=&quot;pmk7jnqg kr520xx4&quot; style=&quot;top: 0px; position: absolute; font-family: inherit; height: 374.984px; width: 500px;&quot;&gt;&lt;img alt=&quot;&quot; class=&quot;i09qtzwb n7fi1qx3 datstx6m pmk7jnqg j9ispegn kr520xx4 k4urcfbm&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://scontent-mba1-1.xx.fbcdn.net/v/t1.6435-0/s600x600/197468283_895402751040504_1856535415027178366_n.jpg?_nc_cat=104&amp;amp;ccb=1-3&amp;amp;_nc_sid=8bfeb9&amp;amp;_nc_eui2=AeG8EPcW-DmGBzHUlsdnrMMFOihwbtDUbDY6KHBu0NRsNl--YMpMIVIG3BD4P1vulJ_dHPRGVm6333rHSzK6pFmJ&amp;amp;_nc_ohc=vWlvvfqcpkkAX8ZdQPa&amp;amp;_nc_ht=scontent-mba1-1.xx&amp;amp;tp=7&amp;amp;oh=ed0e737bc93dc54d9879b7b02bd77765&amp;amp;oe=60CD8BC2&quot; style=&quot;border: 0px; height: 374.984px; inset: 0px; width: 500px; position: absolute;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;hzruof5a opwvks06 linmgsc8 kr520xx4 j9ispegn pmk7jnqg n7fi1qx3 rq0escxv i09qtzwb&quot; style=&quot;border-bottom: 1px solid var(--media-inner-border); border-top: 1px solid var(--media-inner-border); pointer-events: none; inset: 0px; position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s&quot; data-visualcompletion=&quot;ignore&quot; style=&quot;border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; inset: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;ni8dbmo4 stjgntxs pmk7jnqg&quot; style=&quot;overflow: hidden; position: absolute; font-family: inherit; inset: calc(66.6667% + 1.01px) calc(66.6667% + 1.01px) calc(0% + 0px) calc(0% + 0px);&quot;&gt;&lt;a aria-label=&quot;Peut être une image de 1 personne, position debout et intérieur&quot; class=&quot;oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l i09qtzwb n7fi1qx3 j9ispegn kr520xx4 tm8avpzi&quot; href=&quot;https://web.facebook.com/fidbagraphics/photos/pcb.895403007707145/895402787707167/?__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*bH-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: rgb(56, 88, 152); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; touch-action: manipulation; align-items: stretch; min-width: 0px; inset: 0px; text-align: inherit; flex-basis: auto; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-block; min-height: 0px; font-family: inherit;&quot;&gt;&lt;div class=&quot;stjgntxs ni8dbmo4&quot; style=&quot;overflow: hidden; font-family: inherit;&quot;&gt;&lt;div class=&quot;do00u71z ni8dbmo4 stjgntxs l9j0dhe7&quot; style=&quot;height: 0px; position: relative; overflow: hidden; font-family: inherit; padding-top: 165.672px;&quot;&gt;&lt;div class=&quot;pmk7jnqg kr520xx4&quot; style=&quot;top: 0px; position: absolute; font-family: inherit; height: 165.672px; left: -45.25px; width: 220.891px;&quot;&gt;&lt;img alt=&quot;&quot; class=&quot;i09qtzwb n7fi1qx3 datstx6m pmk7jnqg j9ispegn kr520xx4 k4urcfbm&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://scontent-mba1-1.xx.fbcdn.net/v/t1.6435-0/s600x600/198451288_895402791040500_8846645678025178429_n.jpg?_nc_cat=108&amp;amp;ccb=1-3&amp;amp;_nc_sid=8bfeb9&amp;amp;_nc_eui2=AeHrNlb8xBt1Vl_UN7quD9_m49RVZmgUD_Xj1FVmaBQP9QXFcJS9NjepZP5udYqBtUUsENzMo5DsWepTDMJOpDzs&amp;amp;_nc_ohc=-2YOU-CaBZUAX_G6HLi&amp;amp;_nc_ht=scontent-mba1-1.xx&amp;amp;tp=7&amp;amp;oh=43884f1f1730e87108d47cfc3fae9cf7&amp;amp;oe=60CD2BE7&quot; style=&quot;border: 0px; height: 165.672px; inset: 0px; width: 220.891px; position: absolute;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;hzruof5a opwvks06 linmgsc8 kr520xx4 j9ispegn pmk7jnqg n7fi1qx3 rq0escxv i09qtzwb&quot; style=&quot;border-bottom: 1px solid var(--media-inner-border); border-top: 1px solid var(--media-inner-border); pointer-events: none; inset: 0px; position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s&quot; data-visualcompletion=&quot;ignore&quot; style=&quot;border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; inset: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;ni8dbmo4 stjgntxs pmk7jnqg&quot; style=&quot;overflow: hidden; position: absolute; font-family: inherit; inset: calc(66.6667% + 1.01px) calc(33.3333% + 1.01px) calc(0% + 0px);&quot;&gt;&lt;a aria-label=&quot;Peut être une image de 1 personne, intérieur et texte qui dit ’RAPHICS Les Professionnels orld Needs Us PRAA G’&quot; class=&quot;oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l i09qtzwb n7fi1qx3 j9ispegn kr520xx4 tm8avpzi&quot; href=&quot;https://web.facebook.com/fidbagraphics/photos/pcb.895403007707145/895402754373837/?__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*bH-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: rgb(56, 88, 152); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; touch-action: manipulation; align-items: stretch; min-width: 0px; inset: 0px; text-align: inherit; flex-basis: auto; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-block; min-height: 0px; font-family: inherit;&quot;&gt;&lt;div class=&quot;stjgntxs ni8dbmo4&quot; style=&quot;overflow: hidden; font-family: inherit;&quot;&gt;&lt;div class=&quot;do00u71z ni8dbmo4 stjgntxs l9j0dhe7&quot; style=&quot;height: 0px; position: relative; overflow: hidden; font-family: inherit; padding-top: 164.656px;&quot;&gt;&lt;div class=&quot;pmk7jnqg kr520xx4&quot; style=&quot;top: 0px; position: absolute; font-family: inherit; height: 164.656px; left: -3.5px; width: 219.531px;&quot;&gt;&lt;img alt=&quot;&quot; class=&quot;i09qtzwb n7fi1qx3 datstx6m pmk7jnqg j9ispegn kr520xx4 k4urcfbm&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://scontent-mba1-1.xx.fbcdn.net/v/t1.6435-0/s600x600/197590082_895402757707170_3275205634703452036_n.jpg?_nc_cat=103&amp;amp;ccb=1-3&amp;amp;_nc_sid=8bfeb9&amp;amp;_nc_eui2=AeHmaHKBl84hSmluKvCjokUwSD91NpkXwNFIP3U2mRfA0f6rRxgryB9KkcX2hOvY7kscdgzf3uyAVeaZ62Kg8Fpu&amp;amp;_nc_ohc=rgWJmBIP_LUAX80VK8B&amp;amp;_nc_ht=scontent-mba1-1.xx&amp;amp;tp=7&amp;amp;oh=31ab8574e465abda812c9db8355bd581&amp;amp;oe=60CD2D2C&quot; style=&quot;border: 0px; height: 164.656px; inset: 0px; width: 219.531px; position: absolute;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;hzruof5a opwvks06 linmgsc8 kr520xx4 j9ispegn pmk7jnqg n7fi1qx3 rq0escxv i09qtzwb&quot; style=&quot;border-bottom: 1px solid var(--media-inner-border); border-top: 1px solid var(--media-inner-border); pointer-events: none; inset: 0px; position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s&quot; data-visualcompletion=&quot;ignore&quot; style=&quot;border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; inset: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;div class=&quot;ni8dbmo4 stjgntxs pmk7jnqg&quot; style=&quot;overflow: hidden; position: absolute; font-family: inherit; inset: calc(66.6667% + 1.01px) calc(0% + 0px) calc(0% + 0px) calc(66.6667% + 1.01px);&quot;&gt;&lt;a aria-label=&quot;Peut être une image de 1 personne, montre-bracelet, costume et intérieur&quot; class=&quot;oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 q9uorilb mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso pmk7jnqg i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l i09qtzwb n7fi1qx3 j9ispegn kr520xx4 tm8avpzi&quot; href=&quot;https://web.facebook.com/fidbagraphics/photos/pcb.895403007707145/895402794373833/?__cft__[0]=AZX4pL_dvJvGZtF4epoOPW9m2odWCJgU4M609o8vM5Mm_hOms2B-Or-pjfHuYmeaaBIXqKxtMpmL6jkVK-q4eNy_tKiLMJmvldP8dYG12xOHBv9EVGswFIoM5vCRiXBQ-7N9V02Fx8RE4rd8l_MTdJJh&amp;amp;__tn__=*bH-R&quot; role=&quot;link&quot; tabindex=&quot;0&quot; style=&quot;color: rgb(56, 88, 152); cursor: pointer; outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; touch-action: manipulation; align-items: stretch; min-width: 0px; inset: 0px; text-align: inherit; flex-basis: auto; -webkit-tap-highlight-color: transparent; flex-shrink: 0; position: absolute; display: inline-block; min-height: 0px; font-family: inherit;&quot;&gt;&lt;div class=&quot;stjgntxs ni8dbmo4&quot; style=&quot;overflow: hidden; font-family: inherit;&quot;&gt;&lt;div class=&quot;do00u71z ni8dbmo4 stjgntxs l9j0dhe7&quot; style=&quot;height: 0px; position: relative; overflow: hidden; font-family: inherit; padding-top: 165.672px;&quot;&gt;&lt;div class=&quot;pmk7jnqg kr520xx4&quot; style=&quot;top: 0px; position: absolute; font-family: inherit; height: 165.672px; left: -55.2188px; width: 220.891px;&quot;&gt;&lt;img alt=&quot;&quot; class=&quot;i09qtzwb n7fi1qx3 datstx6m pmk7jnqg j9ispegn kr520xx4 k4urcfbm&quot; referrerpolicy=&quot;origin-when-cross-origin&quot; src=&quot;https://scontent-mba1-1.xx.fbcdn.net/v/t1.6435-0/s600x600/199475425_895402801040499_7487919063270294794_n.jpg?_nc_cat=105&amp;amp;ccb=1-3&amp;amp;_nc_sid=8bfeb9&amp;amp;_nc_eui2=AeGmIbQd8vxVX4Ap5Sbn0xIp-flkzQZQKj_5-WTNBlAqPzA99c_jfDs9cgklAwkfIt97VZ2P77KHrzix-g_kHAwX&amp;amp;_nc_ohc=nGQMUhozuNkAX9GHmma&amp;amp;_nc_ht=scontent-mba1-1.xx&amp;amp;tp=7&amp;amp;oh=63756de9ac39667dc553e28139314526&amp;amp;oe=60CCFF42&quot; style=&quot;border: 0px; height: 165.672px; inset: 0px; width: 220.891px; position: absolute;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;hzruof5a opwvks06 linmgsc8 kr520xx4 j9ispegn pmk7jnqg n7fi1qx3 rq0escxv i09qtzwb&quot; style=&quot;border-bottom: 1px solid var(--media-inner-border); border-top: 1px solid var(--media-inner-border); pointer-events: none; inset: 0px; position: absolute; font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s&quot; data-visualcompletion=&quot;ignore&quot; style=&quot;border-radius: inherit; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; inset: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; font-family: inherit;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;stjgntxs ni8dbmo4 l82x9zwi uo3d90p7 h905i5nu monazrh9&quot; data-visualcompletion=&quot;ignore-dynamic&quot; style=&quot;border-radius: 0px 0px 8px 8px; overflow: hidden; font-family: inherit;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div style=&quot;color: rgb(28, 30, 33); font-size: 12px; white-space: normal;&quot;&gt;&lt;div style=&quot;font-family: inherit;&quot;&gt;&lt;div class=&quot;tvfksri0 ozuftl9m&quot; style=&quot;margin-left: 12px; margin-right: 12px; font-family: inherit;&quot;&gt;&lt;div class=&quot;rq0escxv l9j0dhe7 du4w35lb j83agx80 pfnyh3mw i1fnvgqd gs1a9yip owycx6da btwxx1t3 ph5uu5jm b3onmgus e5nlhep0 ecm0bbzt nkwizq5d roh60bw9 mysgfdmx hddg9phg&quot; style=&quot;padding: 4px; flex-flow: row nowrap; z-index: 0; align-items: stretch; margin: -6px -2px; justify-content: space-between; display: flex; position: relative; flex-shrink: 0; font-family: inherit;&quot;&gt;&lt;div class=&quot;rq0escxv l9j0dhe7 du4w35lb j83agx80 cbu4d94t g5gj957u d2edcug0 hpfvmrgz rj1gh0hx buofh1pr n8tt0mok hyh9befq iuny7tx3 ipjc6fyt&quot; style=&quot;flex: 1 1 0px; flex-direction: column; max-width: 100%; z-index: 0; min-width: 0px; padding: 6px 2px; display: flex; position: relative; font-family: inherit;&quot;&gt;&lt;div aria-label=&quot;Envoyez ceci à vos amis ou publiez-le sur votre journal.&quot; class=&quot;oajrlxb2 gs1a9yip g5ia77u1 mtkw9kbi tlpljxtp qensuy8j ppp5ayq2 goun2846 ccm00jje s44p3ltw mk2mc5f4 rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv nhd2j8a9 pq6dq46d mg4g778l btwxx1t3 pfnyh3mw p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x tgvbjcpo hpfvmrgz jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 i1ao9s8h esuyzwwr f1sip0of du4w35lb lzcic4wl abiwlrkh p8dawk7l&quot; role=&quot;button&quot; tabindex=&quot;0&quot; style=&quot;outline: none; list-style: none; border-width: 0px; border-style: solid; border-top-color: var(--always-dark-overlay); border-left-color: var(--always-dark-overlay); border-bottom-color: var(--always-dark-overlay); border-right-color: var(--always-dark-overlay); padding: 0px; user-select: none; flex-direction: row; margin: 0px; z-index: 0; touch-action: manipulation; background-color: transparent; align-items: stretch; min-width: 0px; text-align: inherit; position: relative; flex-basis: auto; -webkit-tap-highlight-color: transparent; flex-shrink: 0; display: inline-flex; min-height: 0px; font-family: inherit;&quot;&gt;&lt;div class=&quot;n00je7tq arfg74bv qs9ysxi8 k77z8yql i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3&quot; data-visualcompletion=&quot;ignore&quot; style=&quot;border-radius: 4px; transition-property: opacity; opacity: 0; transition-duration: var(--fds-duration-extra-extra-short-out); pointer-events: none; inset: 0px; transition-timing-function: var(--fds-animation-fade-out); position: absolute; background-color: var(--hover-overlay); font-family: inherit;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;cwj9ozl2 tvmbv18p&quot; style=&quot;background-color: var(--card-background); margin-bottom: 4px; color: rgb(28, 30, 33); font-size: 12px; white-space: normal;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-15 17:48:20', '892955000.jpg', 'texte', 14),
(74, ' RDC : Guylain Badesi met sur le marché le carnet médical numérique « Health-Malamu »', '	                  	                  &lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Le jeune entrepreneur Congolais Guylain Badesi a mis en place ce jeudi 18 février 2021, un carnet médical numérique, “Health-Malamu” qui signifie bonne santé à tous.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;En effet, il s’agit d’un Carnet médical numérique capable de stocker et protéger les données médicales dans un bracelet. Ce carnet médical numérique Health-malamu est composé de QR-codes portatifs sous une montre ou un bracelet.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&lt;img alt=&quot;&quot; width=&quot;640&quot; height=&quot;640&quot; data-srcset=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?w=800&amp;amp;ssl=1 800w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=462%2C365&amp;amp;ssl=1 462w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=768%2C607&amp;amp;ssl=1 768w&quot; data-src=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=640%2C506&amp;amp;ssl=1&quot; data-sizes=&quot;(max-width: 640px) 100vw, 640px&quot; class=&quot;size-full wp-image-3807 aligncenter lazyloaded&quot; src=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=640%2C506&amp;amp;ssl=1&quot; sizes=&quot;(max-width: 640px) 100vw, 640px&quot; srcset=&quot;https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?w=800&amp;amp;ssl=1 800w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=462%2C365&amp;amp;ssl=1 462w, https://i1.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/Health-Malamu.jpeg?resize=768%2C607&amp;amp;ssl=1 768w&quot; style=&quot;border: 0px; max-width: 100%; height: auto; clear: both; display: block; margin-left: auto; margin-right: auto; opacity: 1; transition: opacity 400ms ease 0ms;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Il est connecté sur l’application mobile qu’on peut facilement installer sur un smartphone. Un simple scan permet d’accéder aux dossiers médicaux et gérer ses rendez-vous avec les médecins. Ça permet également à ce dernier d’avoir en premier lieu toutes les informations sur son patient avant de lui prescrire des médicaments, car toutes les informations sanitaires sont stockées dans le carnet (passeport) santé Health-malamu.&lt;/p&gt;&lt;div style=&quot;clear: both; margin-top: 0em; margin-bottom: 1em;&quot;&gt;&lt;a href=&quot;https://www.congonumerique.com/boost-avec-facebook-des-formations-gratuites-en-marketing-digital/&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot; class=&quot;u86e1de20e1715896bfaa9fabd1e70346&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: opacity 250ms ease 0s; min-height: 80px; position: relative; display: block; width: 795.594px; opacity: 1; border: 0px !important;&quot;&gt;&lt;div class=&quot;centered-text-area&quot; style=&quot;min-height: 80px; position: relative; width: 795.594px;&quot;&gt;&lt;div class=&quot;centered-text&quot; style=&quot;display: table; height: 80px; padding-left: 18px; top: 0px; float: left;&quot;&gt;&lt;div class=&quot;u86e1de20e1715896bfaa9fabd1e70346-content&quot; style=&quot;display: table-cell; margin: 0px; padding: 0px 108px 0px 0px; position: relative; vertical-align: middle; width: 688px;&quot;&gt;&lt;span class=&quot;ctaText&quot; style=&quot;border-bottom: 0px solid rgb(255, 255, 255); margin: 0px; padding: 0px;&quot;&gt;A LIRE&lt;/span&gt;&amp;nbsp;&amp;nbsp;&lt;span class=&quot;postTitle&quot; style=&quot;margin: 0px; padding: 0px; width: 100%;&quot;&gt;Boost avec Facebook : des formations gratuites en Marketing Digital&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;ctaButton&quot; style=&quot;border: none; border-radius: 3px; box-shadow: none; line-height: 26px; text-shadow: none; width: 80px; min-height: 80px; background-image: url(&amp;quot;https://www.congonumerique.com/wp-content/plugins/intelly-related-posts/assets/images/simple-arrow.png&amp;quot;); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; position: absolute; right: 0px; top: 0px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Selon Guylain Badesi, l’objectif est de réduire le taux de mortalité en évitant certaines erreurs médicales aux peuples congolais. « Notre objectif est de sauver beaucoup plus de vies dans notre pays en évitant des erreurs médicales. Nous mettons à la disposition de chaque Congolais un passeport santé pour sauver sa vie. De la même manière qu’on se promène avec son téléphone, son passeport, porte-monnaie, que chaque Congolais se déplace avec ses données médicales pour en faire usage en cas de besoin » a-t-il indiqué.&lt;/p&gt;&lt;div style=&quot;clear: both; margin-top: 0em; margin-bottom: 1em;&quot;&gt;&lt;a href=&quot;https://www.congonumerique.com/vodacom-rdc-donne-desormais-aux-developpeurs-lacces-aux-apis-m-pesa/&quot; target=&quot;_blank&quot; rel=&quot;nofollow&quot; class=&quot;ub38a936d3afcdb85a6c4b814e54472fb&quot; style=&quot;background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; transition: opacity 250ms ease 0s; min-height: 80px; position: relative; display: block; width: 795.594px; opacity: 1; border: 0px !important;&quot;&gt;&lt;div class=&quot;centered-text-area&quot; style=&quot;min-height: 80px; position: relative; width: 795.594px;&quot;&gt;&lt;div class=&quot;centered-text&quot; style=&quot;display: table; height: 80px; padding-left: 18px; top: 0px; float: left;&quot;&gt;&lt;div class=&quot;ub38a936d3afcdb85a6c4b814e54472fb-content&quot; style=&quot;display: table-cell; margin: 0px; padding: 0px 108px 0px 0px; position: relative; vertical-align: middle; width: 736px;&quot;&gt;&lt;span class=&quot;ctaText&quot; style=&quot;border-bottom: 0px solid rgb(255, 255, 255); margin: 0px; padding: 0px;&quot;&gt;A LIRE&lt;/span&gt;&amp;nbsp;&amp;nbsp;&lt;span class=&quot;postTitle&quot; style=&quot;margin: 0px; padding: 0px; width: 100%;&quot;&gt;Vodacom RDC donne désormais aux développeurs l\'accès aux APIs M-Pesa&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;ctaButton&quot; style=&quot;border: none; border-radius: 3px; box-shadow: none; line-height: 26px; text-shadow: none; width: 80px; min-height: 80px; background-image: url(&amp;quot;https://www.congonumerique.com/wp-content/plugins/intelly-related-posts/assets/images/simple-arrow.png&amp;quot;); background-position: initial; background-size: initial; background-repeat: no-repeat; background-attachment: initial; background-origin: initial; background-clip: initial; position: absolute; right: 0px; top: 0px;&quot;&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;&lt;img alt=&quot;health-malamu&quot; width=&quot;640&quot; height=&quot;640&quot; data-srcset=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=2560&amp;amp;ssl=1 2560w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=487%2C365&amp;amp;ssl=1 487w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=840%2C630&amp;amp;ssl=1 840w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=768%2C576&amp;amp;ssl=1 768w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1536%2C1152&amp;amp;ssl=1 1536w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=2048%2C1536&amp;amp;ssl=1 2048w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1320%2C990&amp;amp;ssl=1 1320w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=1920&amp;amp;ssl=1 1920w&quot; data-src=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=640%2C480&amp;amp;ssl=1&quot; data-sizes=&quot;(max-width: 640px) 100vw, 640px&quot; class=&quot;aligncenter wp-image-3808 size-full lazyloaded&quot; src=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=640%2C480&amp;amp;ssl=1&quot; sizes=&quot;(max-width: 640px) 100vw, 640px&quot; srcset=&quot;https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=2560&amp;amp;ssl=1 2560w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=487%2C365&amp;amp;ssl=1 487w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=840%2C630&amp;amp;ssl=1 840w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=768%2C576&amp;amp;ssl=1 768w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1536%2C1152&amp;amp;ssl=1 1536w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=2048%2C1536&amp;amp;ssl=1 2048w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?resize=1320%2C990&amp;amp;ssl=1 1320w, https://i2.wp.com/www.congonumerique.com/wp-content/uploads/2021/02/carnet-medical-carte--scaled.jpg?w=1920&amp;amp;ssl=1 1920w&quot; style=&quot;border: 0px; max-width: 100%; height: auto; clear: both; display: block; margin-left: auto; margin-right: auto; opacity: 1; transition: opacity 400ms ease 0ms;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 16px; margin-left: 0px;&quot;&gt;Il par ailleurs exprimé les difficultés qui handicap son œuvre, « Nous recevons actuellement beaucoup de demandes et nous n’arrivons pas à satisfaire nos clients, parce que nous sommes limités par les moyens financiers pour acheter des matériels. Ce pourquoi nous sollicitions l’accompagnement du ministère de la santé de la RDC et des personnes de bonne volonté pour atteindre nos objectifs. Nous invitons les Hôpitaux Congolais à nous ouvrir leurs portes pour que nous apportions notre pierre à l’édifice ».&lt;/p&gt;\r\n                          \r\n	              \r\n	              ', '', '2021-06-15 18:08:31', '1394375158.jpeg', 'texte', 17),
(75, 'Goma Foyer Culturel de Goma', '	                  &lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-24 10:18:55', '1962836.jpg', 'texte', 17),
(76, 'LA DEUXIÈME JOURNÉE DE CETTE FORMATION DES JEUNES FORMATEURS SUR LA BONNE GOUVERNANCE ET LE LEADERSHIP DE QUALITÉ, LES JEUNES ÉTAIENT ÉDIFIÉS', '	                  &lt;div&gt;&amp;nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;/div&gt;&lt;div&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/div&gt;                    	                  \r\n                          \r\n	              \r\n                \r\n	              ', '', '2021-06-24 10:20:02', '448774646.jpg', 'texte', 17),
(77, 'DYNAMIQUE GENERATION CONSCIENTE RDC', '	                  &lt;div class=&quot;kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*La RDC s\'apprête à la levée d\'État d\'Urgence institué par le Chef de l\'État depuis le mois de mars.* &lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;o9v6fnle cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q&quot; style=&quot;overflow-wrap: break-word; margin: 0.5em 0px 0px; white-space: pre-wrap; font-family: &amp;quot;Segoe UI Historic&amp;quot;, &amp;quot;Segoe UI&amp;quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 15px;&quot;&gt;&lt;div dir=&quot;auto&quot; style=&quot;font-family: inherit;&quot;&gt;*Pour sauver le pays du chaos économique qui pourrait en découler, Le Président du Parlement des Jeunes du Nord-Kivu et analyste économique Johnson Ishara… &lt;div class=&quot;oajrlxb2 g5ia77u1 qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 nc684nl6 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl oo9gr5id gpro0wi8 lrazzd5p&quot; role=&quot;button&quot; tabindex=&quot;0&quot; style=&quot;outline: none; list-style: none; border-width: 0px; border-style: initial; border-color: initial; padding: 0px; margin: 0px; touch-action: manipulation; background-color: transparent; text-align: inherit; font-weight: 600; display: inline; -webkit-tap-highlight-color: transparent; color: var(--primary-text); font-family: inherit;&quot;&gt;Afficher la suite&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n                          \r\n	              ', '', '2021-06-24 10:21:19', '1039945422.jpg', 'texte', 17);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcat` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcat`, `nom`, `created_at`) VALUES
(8, 'Tech', '2021-06-09 13:11:03'),
(10, 'Entreprises', '2021-06-09 13:11:43'),
(12, 'Sport', '2021-06-09 13:12:12'),
(13, 'Campagne', '2021-06-09 13:12:31'),
(14, 'Politique', '2021-06-09 13:12:47'),
(17, 'culture', '2021-06-15 16:53:03');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcomment` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etape1` text DEFAULT NULL,
  `etape2` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcomment`, `idart`, `etape1`, `etape2`, `created_at`) VALUES
(1, 73, '	                  	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;	                  &lt;div id=&quot;fb-root&quot;&gt;&lt;/div&gt;\r\n&lt;script async=&quot;&quot; defer=&quot;&quot; crossorigin=&quot;anonymous&quot; src=&quot;https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;amp;version=v11.0&amp;amp;appId=301499887887474&amp;amp;autoLogAppEvents=1&quot; nonce=&quot;C5oWUD7H&quot;&gt;&lt;/script&gt;\r\n\r\n	              \r\n	              \r\n	              ', '&lt;div class=&quot;fb-comments&quot; data-href=&quot;https://web.facebook.com/fidbagraphics/posts/895403007707145&quot; data-width=&quot;&quot; data-numposts=&quot;5&quot;&gt;&lt;/div&gt;\r\n	              \r\n	              \r\n	              ', '2021-06-15 17:50:49'),
(2, 74, '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;	                  &lt;div id=&quot;fb-root&quot; class=&quot; fb_reset&quot;&gt;&lt;div style=&quot;position: absolute; top: -10000px; width: 0px; height: 0px;&quot;&gt;&lt;div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;\r\n&lt;script async=&quot;&quot; defer=&quot;&quot; crossorigin=&quot;anonymous&quot; src=&quot;https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&amp;amp;version=v11.0&amp;amp;appId=301499887887474&amp;amp;autoLogAppEvents=1&quot; nonce=&quot;C5oWUD7H&quot;&gt;&lt;/script&gt;\r\n\r\n	              \r\n	              ', '', '2021-06-17 08:59:23'),
(4, 70, '	                  &lt;div&gt;&lt;br&gt;&lt;/div&gt;\r\n	              ', '', '2021-06-17 09:05:41'),
(5, 69, '', '', '2021-06-17 09:56:51'),
(6, 66, '', '', '2021-06-17 10:54:49');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `sujet` varchar(700) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `fichier` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`, `fichier`, `created_at`) VALUES
(5, 'yuma kayanda françois', 'yuma@gmail.com', 'savoir plus sur vous le sport', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '721465673.JPG', '2020-09-07 19:39:30'),
(7, 'kasumba kipindula bertin', 'kasumba@gmail.com', 'information personnele sur le podcast', 'bonjour le doyen! ', '851559741.jpg', '2021-02-07 17:28:00'),
(8, 'pataule', 'pataule@gmail.com', 'savoir plus sur vous le produit', 'je voudrais savoir les informations sur le cacao', NULL, '2021-05-15 20:18:13'),
(9, 'king lebon', 'king@gmail.com', 'on est en pleine guerre de mode', 'coucou', '1928290491.png', '2021-05-15 20:19:39'),
(10, 'sifa abeli', 'mikah@gmail.com', 'j\'aimerai savoir les informations sur...', 'coucou', NULL, '2021-05-15 20:20:04'),
(11, 'lula seguobe', 'lula@gmail.com', 'my life it never goes swolly', 'Je voudrai avoir un style de fashion', '1459638729.jpg', '2021-05-22 11:45:12'),
(12, 'sumaili shabani', 'info.devtech@gmail.com', 'information personnele sur le podcast', 'cool', NULL, '2021-05-22 11:46:03'),
(13, 'joel jong', 'jojo@gmail.com', 'jojo le boss ce moi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '645284740.jpg', '2021-06-11 14:59:27'),
(14, NULL, NULL, NULL, NULL, NULL, '2021-07-03 00:37:16'),
(15, NULL, NULL, NULL, NULL, NULL, '2021-07-03 00:39:24'),
(16, NULL, NULL, NULL, NULL, NULL, '2021-07-03 00:41:07');

-- --------------------------------------------------------

--
-- Structure de la table `galery2`
--

CREATE TABLE `galery2` (
  `idg` int(11) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `url` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galery2`
--

INSERT INTO `galery2` (`idg`, `image`, `created_at`, `url`) VALUES
(2, '1847791539.png', '2021-06-11 11:44:00', 'http://fidbagraphics.com/'),
(3, '1688795285.PNG', '2021-06-11 11:44:00', NULL),
(4, '1767621929.jpg', '2021-06-11 11:44:00', NULL),
(5, '1330627710.png', '2021-07-03 01:00:05', NULL),
(6, '1697197715.jpg', '2021-07-03 01:00:05', NULL),
(7, '649652685.png', '2021-07-03 01:00:05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `message` varchar(800) DEFAULT NULL,
  `url` varchar(800) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `icone` varchar(300) DEFAULT NULL,
  `titre` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `message`, `url`, `id_user`, `created_at`, `icone`, `titre`) VALUES
(25, 'yuma kayanda Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:29:13', 'fa fa-user', 'Nouvelle inscription'),
(27, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 7, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(28, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(29, 'kasumba kipundula Vient de rejoindre la plateforme ', 'admin/users', 9, '2021-04-12 13:30:58', 'fa fa-user', 'Nouvelle inscription'),
(30, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 7, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription'),
(31, 'mikah kalume Vient de rejoindre la plateforme ', 'admin/users', 8, '2021-04-12 13:33:19', 'fa fa-user', 'Nouvelle inscription');

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idp` int(11) NOT NULL,
  `idpersonne` int(11) DEFAULT NULL,
  `date_paie` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `motif` text DEFAULT NULL,
  `token` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `codeFacture` varchar(300) DEFAULT NULL,
  `etat_paiement` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_article`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_article` (
`idart` int(11)
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`idcat` int(11)
,`nom_cat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_commentaire`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_commentaire` (
`idcomment` int(11)
,`idart` int(11)
,`etape1` text
,`etape2` text
,`created_at` datetime
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`image` varchar(300)
,`type` varchar(300)
,`idcat` int(11)
,`nomcat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_paiement`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_paiement` (
`idp` int(11)
,`idpersonne` int(11)
,`date_paie` date
,`montant` float
,`motif` text
,`token` varchar(300)
,`created_at` datetime
,`codeFacture` varchar(300)
,`etat_paiement` int(11)
,`first_name` varchar(300)
,`last_name` varchar(300)
,`email` varchar(300)
,`telephone` varchar(300)
,`image` varchar(300)
,`id` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_publicite`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_publicite` (
`idp` int(11)
,`idart` int(11)
,`etat` int(11)
,`nom` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`image` varchar(300)
,`created_at` datetime
,`idcat` int(11)
,`nom_cat` varchar(300)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `profile_vue`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `profile_vue` (
`idv` int(11)
,`idart` int(11)
,`machine` varchar(20)
,`created_at` datetime
,`nom` varchar(300)
,`image` varchar(300)
,`description` text
,`lien` varchar(400)
,`type` varchar(300)
,`idcat` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `idp` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `etat` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`idp`, `idart`, `etat`) VALUES
(7, 66, 1),
(9, 59, 1),
(11, 61, 1),
(13, 57, 1),
(14, 74, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recupere`
--

CREATE TABLE `recupere` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `verification_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recupere`
--

INSERT INTO `recupere` (`id`, `email`, `verification_key`) VALUES
(3, 'alpha@gmail.com', '6aea3cee4087269ebea90ae4229698c7'),
(4, 'alpha@gmail.com', '1123adb273b435474c75f16e4b408015'),
(5, 'sumailiroger681@gmail.com', '2842866a6a01e443b04c94ccf6f76b9c'),
(6, 'sumailiroger681@gmail.com', 'b02db9fcf8f35a1e475f83d34abde9ce');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `nom` varchar(300) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idrole`, `nom`, `created_at`) VALUES
(1, 'admin', '2021-04-12 16:10:38'),
(2, 'visiteur', '2021-04-12 16:12:38'),
(3, 'membre', '2021-04-12 13:54:16');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `idinfo` int(11) NOT NULL,
  `nom_site` varchar(300) DEFAULT NULL,
  `icone` varchar(300) DEFAULT NULL,
  `tel1` varchar(300) DEFAULT NULL,
  `tel2` varchar(300) DEFAULT NULL,
  `adresse` text DEFAULT NULL,
  `facebook` varchar(600) DEFAULT NULL,
  `twitter` varchar(600) DEFAULT NULL,
  `linkedin` varchar(600) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `termes` text DEFAULT NULL,
  `confidentialite` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `objectif` text DEFAULT NULL,
  `blog` text DEFAULT NULL,
  `whatsapp` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_info`
--

INSERT INTO `tbl_info` (`idinfo`, `nom_site`, `icone`, `tel1`, `tel2`, `adresse`, `facebook`, `twitter`, `linkedin`, `email`, `termes`, `confidentialite`, `description`, `mission`, `objectif`, `blog`, `whatsapp`, `instagram`) VALUES
(1, 'Victory company', '1310921040.png', '+243 974 242 040', '+243 995 602 208', 'La Frontière, Goma, Nord-Kivu, COMMUNE DE GOMA', 'https://facebook.com/', 'https://twitter.com/', 'https://linkedin.com/', 'info@victorycompany.com', 'Notre Politique de protection des données personnelles décrit la manière dont #devtech traite les données à caractère personnel des visiteurs et des utilisateurs (ci- après les « Utilisateurs ») lors de leur navigation sur notre site. La Politique de protection des données personnelles fait partie intégrante des Conditions Générales d\'Utilisation du Site. #devtech accorde en permanence une attention aux données de nos Utilisateurs. Nous pouvons ainsi être amenés à modifier, compléter ou mettre à jour périodiquement la Politique de protection des données personnelles. Nous pourrons aussi apporter des modifications nécessaires afin de respecter les changements de la législation et règlementation en vigueur. Dans la mesure du possible, nous vous notifierons tout changement important. Nous vous encourageons toutefois à consulter régulièrement la dernière version en vigueur, accessible sur notre Site.', 'Conditions Générales d\'Utilisation Définitions Les Parties conviennent et acceptent que les termes suivants utilisés avec une majuscule, au singulier et/ou au pluriel, auront, dans le cadre des présentes Conditions Générales d\'Utilisation, la signification définie ci-après : • « Contrat » : désigne les présentes Conditions Générales d\'Utilisation ainsi que la Politique de protection des données personnelles ; • « Membre » : désigne indifféremment le Membre Freemium et le Membre Premium ; • « Membre Freemium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux fonctionnalités gratuites de notre Plateforme ; • « Membre Premium » désigne le membre ayant un compte sur notre Plateforme pour accéder aux services Premium Solo ou Plus ; • « Plateforme » : plateforme numérique de type site Web et/ou application mobile permettant l\'accès au Service ainsi que son utilisation ; • « Utilisateur » : désigne toute personne qui utilise la Plateforme, qu\'elle soit un Visiteur ou un Membre ; • « Visiteur » : désigne toute personne, internaute, naviguant sur la Plateforme sans création de compte associé. Les présentes Conditions Générales d\'Utilisation (ci-après les \"CGU\") régissent nos rapports avec vous, personne accédant à la Plateforme, applicables durant votre utilisation de la Plateforme et, si vous êtes un Membre jusqu\'à désactivation de votre compte. Si vous n\'êtes pas d\'accord avec les termes des CGU il vous est vivement recommandé de ne pas utiliser notre Plateforme et nos services. En naviguant sur la Plateforme, si vous êtes un Visiteur, vous reconnaissez avoir pris connaissance et accepté l\'intégralité des présentes CGU et notre Politique de protection des données personnelles. En créant un compte en cliquant sur le bouton « S\'inscrire avec Facebook » ou « Inscription avec un email » ou « S\'inscrire avec Google » pour devenir Membre, vous êtes invité à lire et accepter les présentes CGU et la Politique de protection des données personnelles, en cochant la case prévue à cet effet. Nous vous encourageons à consulter les « Conditions Générales d\'Utilisation et la Politique de protection des données personnelles » avant votre première utilisation de notre Plateforme et régulièrement lors de leurs mises à jour. Nous pouvons en effet être amenés à modifier les présentes CGU. Si des modifications sont apportées, nous vous informerons par email ou via notre Plateforme pour vous permettre d\'examiner les modifications avant qu\'elles ne prennent effet. Si vous continuez à utiliser notre Plateforme après la publication ou l\'envoi d\'un avis concernant les modifications apportées aux présentes conditions, cela signifie que vous acceptez les mises à jour. Les CGU qui vous seront opposables seront celles en vigueur lors de votre utilisation de la Plateforme. Article 1. Inscription au service 1.1 Conditions d\'inscription à la Plateforme Certaines fonctionnalités de la Plateforme nécessitent d\'être inscrit et d\'obtenir un compte. Avant de pouvoir vous inscrire sur la Plateforme vous devez avoir lu et accepté les présentes CGU et la Politique de protection des données personnelles. Vous déclarez avoir la capacité d\'accepter les présentes conditions générales d\'utilisation, c\'est-à-dire avoir plus de 16 ans et ne pas faire l\'objet d\'une mesure de protection juridique des majeurs (mise sous sauvegarde de justice, sous tutelle ou sous curatelle). Avant d\'accéder à notre Plateforme, le consentement des mineurs de moins de 16 ans doit être donné par le titulaire de l\'autorité parentale. Notre Plateforme ne prévoit aucunement l\'inscription, la collecte ou le stockage de renseignement relatifs à toute personne âgée de 15 ans ou moins. 1.2 Création de compte Vous pourrez créer un compte des deux manières suivantes : • Soit remplir manuellement, sur notre Plateforme, les champs obligatoires figurant sur le formulaire d\'inscription, à l\'aide d\'informations complètes et exactes.', 'Fidba Graphics est une agence de communication globale qui offre ses services en paquet pour les entreprises congolaises dans le but de promouvoir les produits et services #MadeInCongo auprès du public ciblé en répondant à tous leurs besoins de communication.\r\nPlus d’infos www.fidbagraphics.com \r\n', 'Nous travaillons chaque jour sur des projets innovants  mis en œuvre par nos clients, partenaires et nous bien sûr. Il nous a été difficile depuis deux ans de parler profondément de ces projets suite à la limitation des contenus publiés sur les réseaux sociaux. Grace à ce blog, nous serons à mesure de partager au monde les idées innovatrices locales, en temps réel. \r\nL’objectif spécifique  de ce blog est, premièrement, de positionner notre agence comme une référence dans la promotion des  entreprises congolaises. Deuxièmement, de témoigner de travaux acharnés que réalisent nos communautés entrepreneuriales.\r\n\r\nLes objectifs globaux:\r\n•	Générer du trafic qualifié pour nos partenaires et clients\r\n•	Booster la notoriété et améliorer l\'image de marque de notre marque et celle de nos clients\r\n•	Elargir notre audience et celle de notre clientèle.\r\n•	Créer du contenu de marque engageant.\r\n•	Fidéliser les internautes\r\n•	Informer la population des initiatives entrepreneuriales réalisées localement\r\n\r\n\r\nDevise: \r\nSans rancune,\r\nRestons professionnels\r\nNous ne parlerons que de ce que les clients de nos clients veulent savoir,\r\nC’est sympa non ? \r\n', 'Notre désir était de réunir la communauté autours d’une idée unique, communiquons sans partie pris, sans rancune mais dans l’intérêt de toutes nos communautés. Dans cette optique, nous avons réuni les savoirs ; des blogueurs, journalistes, des coach, rédacteurs et les passionnés de l’écriture.\r\n\r\n', 'Fidba Graphics est une Agence de communication  qui professe  la neutralité politique en mettant en rigueur ses valeurs. Cela marche de pair avec le blog que nous avons mis en ligne. Les articles publiés sur notre bloques  sont  apolitiques.\r\n\r\nLes principales rubriques sont :\r\n•	Tech : Dans cette rubrique nous parlerons principalement des nouvelles inventions technologies locales, des mises à jour de logiciels conçus localement et nous toucherons également sur l’actualité de l’industrie Tech internationale pour inspirer les innovateurs locaux à orienter leurs créativités.\r\n•	Innovation : Dans cette rubrique nous parlerons de toutes les œuvres qui valorisent nos communautés congolaises afin de promouvoir l’entrepreneuriat local au monde entier.\r\n•	Entreprises: Dans cette rubrique nous ferons découvrir à notre audience les entreprises qui se distinguent des autres sur l’aspect organisationnel, chiffre d’affaires, contrat signé, collaboration et bien d’autres.\r\n•	Partenariat : Dans cette rubrique nous parlerons que de nous, cela dit, nous mettrons en valeur les marchés que nous gagnons,  les entreprises qui  témoignent de notre savoir faire, qui préfèrent une collaboration longue et courte. Nous parlerons également des Events que nous accompagnons dans la communication globale et nous parlerons, sous de profile, de tous nos nouveaux partenaires et clients, si nécessaire.\r\n•	Critiques : Nous avons eu des longues et sérieuses discussions internes par rapport à ce sujet et au final nous avons opté de la laisser en ligne. La rubrique Critiques permet aux entreprises de rester professionnelles, de continuer de développer ses compétences, ses créativités et de chercher d’être  au dessus de la concurrence. Nous critiquerons sérieusement les entreprises qui tombent dans des failles de débutant en analysant chaque fait et geste posé par ces dernières. Nous serons aidés par des blogueurs, annalistes et coach en entrepreneuriat. \r\n•	Compagnes publicitaires : Les stratégies de communication bien réussies, des cibles bien touchées, des concepts carrément pro… Nous les publions directement sur notre blog pour pousser les autres entreprises à imiter le modèle afin de toucher encore les populations.\r\n•	Entrepreneurs : Ils se démarquent, ils font bien leur boulot, ils inspirent les communautés, voici le genre de profil qui sont mis en avant sur notre blog.\r\n•	Incubateurs : La ville de Goma est en train de se démarquer sur le plan entrepreneurial, des structures d’encadrement naissent à la vitesse de lumière. Nous ne pouvons pas rester silencieux face à ces grandes découvertes.\r\n', 'https://whatsapp.com/', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(300) DEFAULT NULL,
  `last_name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `telephone` varchar(300) DEFAULT NULL,
  `full_adresse` text DEFAULT NULL,
  `biographie` text DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `passwords` varchar(300) DEFAULT NULL,
  `idrole` int(11) NOT NULL,
  `sexe` varchar(30) DEFAULT NULL,
  `facebook` varchar(900) DEFAULT NULL,
  `linkedin` varchar(900) DEFAULT NULL,
  `twitter` varchar(900) DEFAULT NULL,
  `idposte` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `telephone`, `full_adresse`, `biographie`, `date_nais`, `passwords`, `idrole`, `sexe`, `facebook`, `linkedin`, `twitter`, `idposte`) VALUES
(7, 'sumaili shabani', 'roger patrona', 'sumailiroger681@gmail.com', '315269831.jpg', '+243817883541', 'tmk goma avenue mushanganya n°59', '<b>                                    Développeur</b> et <b>entrepreneur</b> en temps plein!                                    ', '1998-08-12', '9db09d6ae665e42340ef0b1ef1eb95b4', 1, 'M', 'https://www.facebook.com/patronat.shabanisumaili.9/', 'https://www.linkedin.com/in/sumaili-shabani-roger-patr%C3%B4na-7426a71a1/', 'https://twitter.com/RogerPatrona', 1),
(8, 'wilson vulembere', 'sedrickson', 'wilson@gmail.com', '1773716310.jpg', '+243990084881', 'Database administrator', NULL, '1995-06-09', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1),
(9, 'alpha blonde', 'cubaka', 'alpha@gmail.com', '475946374.jpg', '0998765432', 'Nord-kivu goma', '                  	Le <b>gars</b> de la planète                  ', '1997-04-13', 'e10adc3949ba59abbe56e057f20f883e', 3, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1),
(11, 'yuma kayanda', 'françois', 'yuma@gmail.com', '1786470015.JPG', '', '', NULL, '1995-01-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', 1),
(12, 'kasumba kipundula', 'bertin', 'kasumba@gmail.com', '2072503439.JPG', '+243810409151', 'Quartier birere', NULL, '1999-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1),
(13, 'mikah kalume', 'sefu', 'mikah@gmail.com', '1154037254.jpg', '+243810409151', 'quartier katoyi avenue konde', NULL, '2021-04-13', 'e10adc3949ba59abbe56e057f20f883e', 2, 'M', '', '', '', 1),
(14, 'madeleine stephanie', 'roger', 'madeleine@gmail.com', '540071256.jpg', '+243810409151', 'I know who i am', NULL, '1995-06-09', 'e10adc3949ba59abbe56e057f20f883e', 2, 'F', 'https://facebook.com/', 'https://linkedin.com/', 'https://twitter.com/', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vues`
--

CREATE TABLE `vues` (
  `idv` int(11) NOT NULL,
  `idart` int(11) DEFAULT NULL,
  `machine` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vues`
--

INSERT INTO `vues` (`idv`, `idart`, `machine`, `created_at`) VALUES
(18, 66, '169.159.215.21', '2021-06-11 11:57:58'),
(19, 52, '169.159.215.21', '2021-06-11 11:59:04'),
(20, 61, '169.159.215.21', '2021-06-11 11:59:31'),
(21, 65, '169.159.215.21', '2021-06-11 12:00:52'),
(22, 67, '169.159.215.21', '2021-06-11 14:02:07'),
(24, 71, '169.159.215.21', '2021-06-15 17:02:50'),
(25, 69, '169.159.215.21', '2021-06-15 17:37:44'),
(26, 72, '169.159.215.21', '2021-06-15 17:44:55'),
(27, 73, '169.159.215.21', '2021-06-15 17:48:50'),
(28, 71, '41.243.17.36', '2021-06-15 18:00:28'),
(29, 74, '41.243.17.36', '2021-06-15 18:09:14'),
(30, 69, '41.243.17.36', '2021-06-15 18:33:20'),
(31, 73, '41.243.17.36', '2021-06-15 18:33:34'),
(32, 73, '41.243.17.187', '2021-06-16 15:47:21'),
(33, 66, '41.243.17.187', '2021-06-16 16:12:29'),
(34, 49, '41.243.17.187', '2021-06-16 16:36:20'),
(35, 74, '41.243.17.187', '2021-06-16 16:52:03'),
(36, 71, '41.243.17.187', '2021-06-16 18:03:13'),
(37, 66, '41.243.17.186', '2021-06-17 15:34:44'),
(38, 59, '41.243.17.186', '2021-06-17 16:11:00'),
(39, 65, '41.243.17.186', '2021-06-17 16:16:44'),
(40, 73, '41.243.17.186', '2021-06-17 16:53:28'),
(41, 74, '41.243.17.186', '2021-06-17 17:43:50'),
(42, 74, '41.243.17.93', '2021-06-17 18:10:21'),
(43, 73, '41.243.17.93', '2021-06-17 18:13:19'),
(44, 57, '169.159.215.21', '2021-07-02 23:37:53'),
(45, 54, '169.159.215.21', '2021-07-03 00:30:27');

-- --------------------------------------------------------

--
-- Structure de la vue `profile_article`
--
DROP TABLE IF EXISTS `profile_article`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_article`  AS SELECT `article`.`idart` AS `idart`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`image` AS `image`, `article`.`created_at` AS `created_at`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nom_cat` FROM (`article` join `category` on(`article`.`idcat` = `category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_commentaire`
--
DROP TABLE IF EXISTS `profile_commentaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_commentaire`  AS SELECT `commentaire`.`idcomment` AS `idcomment`, `commentaire`.`idart` AS `idart`, `commentaire`.`etape1` AS `etape1`, `commentaire`.`etape2` AS `etape2`, `commentaire`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`image` AS `image`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nomcat` FROM ((`commentaire` join `article` on(`article`.`idart` = `commentaire`.`idart`)) join `category` on(`category`.`idcat` = `article`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_paiement`
--
DROP TABLE IF EXISTS `profile_paiement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_paiement`  AS SELECT `paiement`.`idp` AS `idp`, `paiement`.`idpersonne` AS `idpersonne`, `paiement`.`date_paie` AS `date_paie`, `paiement`.`montant` AS `montant`, `paiement`.`motif` AS `motif`, `paiement`.`token` AS `token`, `paiement`.`created_at` AS `created_at`, `paiement`.`codeFacture` AS `codeFacture`, `paiement`.`etat_paiement` AS `etat_paiement`, `users`.`first_name` AS `first_name`, `users`.`last_name` AS `last_name`, `users`.`email` AS `email`, `users`.`telephone` AS `telephone`, `users`.`image` AS `image`, `users`.`id` AS `id` FROM (`paiement` join `users` on(`paiement`.`idpersonne` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_publicite`
--
DROP TABLE IF EXISTS `profile_publicite`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_publicite`  AS SELECT `publicite`.`idp` AS `idp`, `publicite`.`idart` AS `idart`, `publicite`.`etat` AS `etat`, `article`.`nom` AS `nom`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`image` AS `image`, `article`.`created_at` AS `created_at`, `article`.`idcat` AS `idcat`, `category`.`nom` AS `nom_cat` FROM ((`publicite` join `article` on(`publicite`.`idart` = `article`.`idart`)) join `category` on(`article`.`idcat` = `category`.`idcat`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `profile_vue`
--
DROP TABLE IF EXISTS `profile_vue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_vue`  AS SELECT `vues`.`idv` AS `idv`, `vues`.`idart` AS `idart`, `vues`.`machine` AS `machine`, `vues`.`created_at` AS `created_at`, `article`.`nom` AS `nom`, `article`.`image` AS `image`, `article`.`description` AS `description`, `article`.`lien` AS `lien`, `article`.`type` AS `type`, `article`.`idcat` AS `idcat` FROM (`vues` join `article` on(`article`.`idart` = `vues`.`idart`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idart`),
  ADD KEY `idcat` (`idcat`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcat`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `idart` (`idart`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galery2`
--
ALTER TABLE `galery2`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `idpersonne` (`idpersonne`);

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`idp`),
  ADD UNIQUE KEY `unique_pub` (`idart`);

--
-- Index pour la table `recupere`
--
ALTER TABLE `recupere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Index pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`idinfo`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- Index pour la table `vues`
--
ALTER TABLE `vues`
  ADD PRIMARY KEY (`idv`),
  ADD KEY `idart` (`idart`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idcat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `galery2`
--
ALTER TABLE `galery2`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `recupere`
--
ALTER TABLE `recupere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `vues`
--
ALTER TABLE `vues`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idcat`) REFERENCES `category` (`idcat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `online`
--
ALTER TABLE `online`
  ADD CONSTRAINT `online_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD CONSTRAINT `publicite_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`idrole`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vues`
--
ALTER TABLE `vues`
  ADD CONSTRAINT `vues_ibfk_1` FOREIGN KEY (`idart`) REFERENCES `article` (`idart`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
