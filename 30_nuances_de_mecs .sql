-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Juin 2015 à 01:19
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `30_nuances_de_mecs`
--

-- --------------------------------------------------------

--
-- Structure de la table `conv`
--

CREATE TABLE IF NOT EXISTS `conv` (
`id` int(255) NOT NULL,
  `interlocuteur1` int(255) NOT NULL,
  `interlocuteur2` int(255) NOT NULL,
  `interlocuteur3` int(255) NOT NULL,
  `interlocuteur4` int(255) NOT NULL,
  `interlocuteur5` int(255) NOT NULL,
  `vu1` int(255) NOT NULL,
  `vu2` int(255) NOT NULL,
  `vu3` int(255) NOT NULL,
  `vu4` int(255) NOT NULL,
  `vu5` int(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `conv`
--

INSERT INTO `conv` (`id`, `interlocuteur1`, `interlocuteur2`, `interlocuteur3`, `interlocuteur4`, `interlocuteur5`, `vu1`, `vu2`, `vu3`, `vu4`, `vu5`) VALUES
(1, 36, 37, 0, 0, 0, 0, 0, 384, 384, 384),
(4, 36, 38, 0, 0, 0, 0, 8, 8, 8, 8),
(7, 36, 37, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 36, 56, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 71, 64, 0, 0, 0, 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(255) NOT NULL,
  `idExp` int(255) NOT NULL,
  `dateEnvoie` datetime NOT NULL,
  `idConv` int(255) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=585 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `idExp`, `dateEnvoie`, `idConv`, `message`) VALUES
(285, 36, '2015-04-30 15:17:51', 1, 'Bonjour'),
(286, 36, '2015-04-30 15:18:13', 1, 'Bon quand y a trop de messages c''est vraiment la mort va falloir rem&eacute;dier &agrave; ca !'),
(287, 36, '2015-05-01 13:04:10', 1, 'aazf'),
(288, 36, '2015-05-01 13:04:12', 1, 'oooh'),
(289, 36, '2015-05-01 13:04:14', 1, 'Ca marche'),
(290, 36, '2015-05-01 13:05:34', 1, 'bonjour'),
(291, 36, '2015-05-01 13:05:37', 4, 'zafza'),
(292, 36, '2015-05-01 13:05:39', 1, 'reher'),
(293, 37, '2015-05-01 13:06:03', 1, 'test'),
(294, 37, '2015-05-01 13:06:37', 1, 'test'),
(295, 37, '2015-05-01 13:06:43', 1, 'Voil&agrave; ca marche &lt;3'),
(296, 37, '2015-05-01 13:07:02', 1, 'C''est si beau'),
(297, 37, '2015-05-01 13:07:06', 1, 'Mouhahah'),
(298, 37, '2015-05-01 13:44:05', 1, 'test'),
(299, 37, '2015-05-01 13:44:10', 1, 'test'),
(300, 36, '2015-05-01 17:57:00', 1, 'ag'),
(301, 36, '2015-05-01 17:57:15', 1, 'agaz'),
(302, 36, '2015-05-01 17:57:48', 1, 'test'),
(303, 37, '2015-05-01 17:58:40', 1, 'test'),
(304, 36, '2015-05-01 19:01:24', 1, 'ta m&egrave;re'),
(305, 36, '2015-05-01 19:13:01', 1, 'zaf'),
(306, 36, '2015-05-01 19:43:16', 1, 'test'),
(307, 36, '2015-05-01 19:43:28', 1, 'prout'),
(308, 36, '2015-05-01 19:43:41', 1, 't''es moche'),
(309, 36, '2015-05-01 19:43:49', 1, 'tr&egrave;s moche'),
(310, 36, '2015-05-01 19:44:43', 1, 'faz'),
(311, 36, '2015-05-01 19:46:14', 1, 'test'),
(312, 36, '2015-05-01 19:46:41', 1, 'test'),
(313, 36, '2015-05-01 19:46:45', 1, 'test'),
(314, 36, '2015-05-01 19:46:53', 4, 'test'),
(315, 36, '2015-05-01 19:48:13', 1, 'test'),
(316, 36, '2015-05-01 19:48:15', 1, 'aniozaf'),
(317, 36, '2015-05-01 19:48:17', 1, 'egezg'),
(318, 36, '2015-05-01 19:48:18', 1, 'zegezg'),
(319, 36, '2015-05-01 19:48:19', 1, 'ezgezg'),
(320, 36, '2015-05-01 19:48:19', 1, 'ezgze'),
(321, 36, '2015-05-01 19:50:00', 1, 'yrdy'),
(322, 36, '2015-05-01 19:51:39', 1, 't''es moche'),
(323, 36, '2015-05-01 19:51:43', 1, 'tr&egrave;s moche'),
(324, 36, '2015-05-01 19:52:17', 1, 'test'),
(325, 36, '2015-05-01 19:52:19', 1, 'test'),
(326, 36, '2015-05-01 19:52:26', 1, 't''es tr&egrave;s moche'),
(327, 36, '2015-05-01 19:52:59', 1, 'test'),
(328, 36, '2015-05-01 19:53:03', 1, 'yryd*'),
(329, 36, '2015-05-01 19:53:06', 1, 'hrh'),
(330, 36, '2015-05-01 20:06:05', 1, 'test'),
(331, 37, '2015-05-01 20:11:13', 1, 'Bonjour'),
(332, 37, '2015-05-01 20:11:28', 1, '&ccedil;a va ?'),
(333, 37, '2015-05-01 20:11:39', 1, 'Au calme'),
(334, 36, '2015-05-01 20:11:44', 1, 'Je parle tout seul'),
(335, 37, '2015-05-01 20:11:50', 1, 'Ouais c''est g&eacute;nial..'),
(336, 37, '2015-05-01 20:12:01', 1, 'Trop cool'),
(337, 36, '2015-05-01 20:12:06', 1, 'Prout'),
(338, 37, '2015-05-01 20:12:44', 1, '1'),
(339, 37, '2015-05-01 20:12:45', 1, '2'),
(340, 37, '2015-05-01 20:12:45', 1, '3'),
(341, 37, '2015-05-01 20:12:46', 1, '4'),
(342, 37, '2015-05-01 20:12:46', 1, '5'),
(343, 37, '2015-05-01 20:12:47', 1, '6'),
(344, 37, '2015-05-01 20:12:50', 1, '7'),
(345, 37, '2015-05-01 20:12:50', 1, '7'),
(346, 37, '2015-05-01 20:12:51', 1, '8'),
(347, 37, '2015-05-01 20:12:51', 1, '8'),
(348, 37, '2015-05-01 20:12:51', 1, '48'),
(349, 37, '2015-05-01 20:12:51', 1, '14'),
(350, 37, '2015-05-01 20:12:52', 1, '8514'),
(351, 37, '2015-05-01 20:12:57', 1, 'a'),
(352, 37, '2015-05-01 20:12:57', 1, 'a'),
(353, 37, '2015-05-01 20:12:57', 1, 'a'),
(354, 37, '2015-05-01 20:12:57', 1, 'a'),
(355, 37, '2015-05-01 20:12:58', 1, 'a'),
(356, 37, '2015-05-01 20:12:58', 1, 'a'),
(357, 37, '2015-05-01 20:12:58', 1, 'a'),
(358, 37, '2015-05-01 20:12:58', 1, 'a'),
(359, 37, '2015-05-01 20:12:58', 1, 'a'),
(360, 37, '2015-05-01 20:12:59', 1, 'a'),
(361, 37, '2015-05-01 20:12:59', 1, 'a'),
(362, 37, '2015-05-01 20:12:59', 1, 'a'),
(363, 37, '2015-05-01 20:12:59', 1, 'a'),
(364, 37, '2015-05-01 20:12:59', 1, 'a'),
(365, 37, '2015-05-01 20:13:00', 1, 'a'),
(366, 37, '2015-05-01 20:13:00', 1, 'a'),
(367, 37, '2015-05-01 20:13:01', 1, 'a'),
(368, 37, '2015-05-01 20:13:02', 1, 'z'),
(369, 37, '2015-05-01 20:13:02', 1, 'z'),
(370, 37, '2015-05-01 20:13:02', 1, 'z'),
(371, 37, '2015-05-01 20:13:03', 1, 'z'),
(372, 37, '2015-05-01 20:13:03', 1, 'ze'),
(373, 37, '2015-05-01 20:13:04', 1, 'e'),
(374, 37, '2015-05-01 20:13:05', 1, 'r'),
(375, 37, '2015-05-01 20:13:05', 1, 'aze'),
(376, 37, '2015-05-01 20:13:06', 1, 'aze'),
(377, 37, '2015-05-01 20:13:06', 1, 'aze'),
(378, 37, '2015-05-01 20:13:07', 1, 'aze'),
(379, 37, '2015-05-01 20:13:07', 1, 'fa'),
(380, 37, '2015-05-01 20:13:08', 1, 'v'),
(381, 37, '2015-05-01 20:13:08', 1, 'azf'),
(382, 37, '2015-05-01 20:13:08', 1, 'azf'),
(383, 37, '2015-05-01 20:13:09', 1, 'zaf'),
(384, 37, '2015-05-01 20:13:09', 1, 'zafg'),
(385, 37, '2015-05-01 20:13:10', 1, 'zaf'),
(386, 37, '2015-05-01 20:13:10', 1, 'gag'),
(387, 37, '2015-05-01 20:13:10', 1, 'gd'),
(388, 37, '2015-05-01 20:13:11', 1, 'sdg'),
(389, 37, '2015-05-01 20:13:12', 1, 'sdg'),
(390, 37, '2015-05-01 20:13:14', 1, 'seg'),
(391, 37, '2015-05-01 20:13:15', 1, 'seg'),
(392, 37, '2015-05-01 20:13:16', 1, 'seg'),
(393, 37, '2015-05-01 20:13:19', 1, 'geg'),
(394, 37, '2015-05-01 20:15:01', 1, 'test'),
(395, 37, '2015-05-01 20:15:07', 1, 'En fait je suis juste un pur connard...'),
(396, 37, '2015-05-01 20:15:13', 1, 'J''avais empech&eacute; moi m&ecirc;me le truc'),
(397, 37, '2015-05-01 20:15:16', 1, 'Mouhaha'),
(398, 37, '2015-05-01 20:15:23', 1, 'QUEL BOLOSS'),
(399, 37, '2015-05-01 20:15:28', 1, 'Bon on va laisser comme ca'),
(400, 37, '2015-05-01 20:15:29', 1, 'Au pire'),
(401, 37, '2015-05-01 20:15:31', 1, 'On s''en fout'),
(402, 37, '2015-05-01 20:15:39', 1, 'Ca chargera tout &agrave; chaque fois'),
(403, 37, '2015-05-01 20:15:42', 1, 'On verra bien'),
(404, 37, '2015-05-01 20:16:04', 1, 'e'),
(405, 37, '2015-05-01 20:16:05', 1, 'e'),
(406, 37, '2015-05-01 20:16:05', 1, 'e'),
(407, 37, '2015-05-01 20:16:05', 1, 'e'),
(408, 37, '2015-05-01 20:16:05', 1, 'e'),
(409, 37, '2015-05-01 20:16:06', 1, 'e'),
(410, 37, '2015-05-01 20:16:06', 1, 'e'),
(411, 37, '2015-05-01 20:16:06', 1, 'e'),
(412, 37, '2015-05-01 20:16:06', 1, 'e'),
(413, 37, '2015-05-01 20:16:06', 1, 'e'),
(414, 37, '2015-05-01 20:16:07', 1, 'e'),
(415, 37, '2015-05-01 20:16:07', 1, 'ee'),
(416, 37, '2015-05-01 20:16:07', 1, 'e'),
(417, 37, '2015-05-01 20:16:07', 1, 'e'),
(418, 37, '2015-05-01 20:16:07', 1, 'e'),
(419, 37, '2015-05-01 20:16:08', 1, 'ez'),
(420, 37, '2015-05-01 20:16:08', 1, 'gez'),
(421, 37, '2015-05-01 20:16:08', 1, 'gez'),
(422, 37, '2015-05-01 20:16:08', 1, 'gze'),
(423, 37, '2015-05-01 20:16:08', 1, 'gez'),
(424, 37, '2015-05-01 20:16:09', 1, 'gez'),
(425, 37, '2015-05-01 20:16:09', 1, 'gez'),
(426, 37, '2015-05-01 20:16:09', 1, 'g'),
(427, 37, '2015-05-01 20:16:09', 1, 'zegez'),
(428, 37, '2015-05-01 20:16:09', 1, 'gez'),
(429, 37, '2015-05-01 20:16:10', 1, 'gez'),
(430, 37, '2015-05-01 20:16:10', 1, 'gze'),
(431, 37, '2015-05-01 20:16:10', 1, 'gez'),
(432, 37, '2015-05-01 20:16:10', 1, 'gez'),
(433, 37, '2015-05-01 20:16:10', 1, 'gze'),
(434, 37, '2015-05-01 20:16:11', 1, 'gz'),
(435, 37, '2015-05-01 20:16:11', 1, 'eg'),
(436, 37, '2015-05-01 20:16:11', 1, 'ezg'),
(437, 37, '2015-05-01 20:16:11', 1, 'zeg'),
(438, 37, '2015-05-01 20:16:11', 1, 'ze'),
(439, 37, '2015-05-01 20:16:11', 1, 'gze'),
(440, 37, '2015-05-01 20:16:12', 1, 'gze'),
(441, 37, '2015-05-01 20:16:12', 1, 'gze'),
(442, 37, '2015-05-01 20:16:12', 1, 'g'),
(443, 37, '2015-05-01 20:16:12', 1, 'ezg'),
(444, 37, '2015-05-01 20:16:12', 1, 'ezg'),
(445, 37, '2015-05-01 20:16:12', 1, 'ez'),
(446, 37, '2015-05-01 20:16:13', 1, 'gze'),
(447, 37, '2015-05-01 20:16:13', 1, 'gze'),
(448, 37, '2015-05-01 20:16:13', 1, 'gez'),
(449, 37, '2015-05-01 20:16:13', 1, 'gze'),
(450, 37, '2015-05-01 20:16:13', 1, 'g'),
(451, 37, '2015-05-01 20:16:13', 1, 'zeg'),
(452, 37, '2015-05-01 20:16:14', 1, 'zeg'),
(453, 37, '2015-05-01 20:16:14', 1, 'zeg'),
(454, 37, '2015-05-01 20:16:14', 1, 'zeg'),
(455, 37, '2015-05-01 20:16:14', 1, 'zeg'),
(456, 37, '2015-05-01 20:16:14', 1, 'ze'),
(457, 37, '2015-05-01 20:16:14', 1, 'gze'),
(458, 37, '2015-05-01 20:16:15', 1, 'gez'),
(459, 37, '2015-05-01 20:16:15', 1, 'gze'),
(460, 37, '2015-05-01 20:16:15', 1, 'g'),
(461, 37, '2015-05-01 20:16:15', 1, 'zeg'),
(462, 37, '2015-05-01 20:16:15', 1, 'ezg'),
(463, 37, '2015-05-01 20:16:15', 1, 'ze'),
(464, 37, '2015-05-01 20:16:16', 1, 'gze'),
(465, 37, '2015-05-01 20:16:16', 1, 'gez'),
(466, 37, '2015-05-01 20:16:16', 1, 'g'),
(467, 37, '2015-05-01 20:16:16', 1, 'zeg'),
(468, 37, '2015-05-01 20:16:16', 1, 'zeg'),
(469, 37, '2015-05-01 20:16:16', 1, 'z'),
(470, 37, '2015-05-01 20:16:17', 1, 'gez'),
(471, 37, '2015-05-01 20:16:17', 1, 'gze'),
(472, 37, '2015-05-01 20:16:17', 1, 'gz'),
(473, 37, '2015-05-01 20:16:17', 1, 'eg'),
(474, 37, '2015-05-01 20:16:17', 1, 'zeg'),
(475, 37, '2015-05-01 20:16:17', 1, 'ze'),
(476, 37, '2015-05-01 20:16:17', 1, 'gze'),
(477, 37, '2015-05-01 20:16:18', 1, 'gez'),
(478, 37, '2015-05-01 20:16:18', 1, 'g'),
(479, 37, '2015-05-01 20:16:18', 1, 'zeg'),
(480, 37, '2015-05-01 20:16:18', 1, 'ez'),
(481, 37, '2015-05-01 20:16:18', 1, 'gez'),
(482, 37, '2015-05-01 20:16:18', 1, 'gze'),
(483, 37, '2015-05-01 20:16:19', 1, 'g'),
(484, 37, '2015-05-01 20:16:19', 1, 'ezg'),
(485, 37, '2015-05-01 20:16:19', 1, 'ze'),
(486, 37, '2015-05-01 20:16:19', 1, 'gze'),
(487, 37, '2015-05-01 20:16:19', 1, 'gze'),
(488, 37, '2015-05-01 20:16:19', 1, 'g'),
(489, 37, '2015-05-01 20:16:20', 1, 'ze'),
(490, 37, '2015-05-01 20:16:20', 1, 'gez'),
(491, 37, '2015-05-01 20:16:20', 1, 'gze'),
(492, 37, '2015-05-01 20:16:20', 1, 'g'),
(493, 37, '2015-05-01 20:16:20', 1, 'ezg'),
(494, 37, '2015-05-01 20:16:20', 1, 'ez'),
(495, 37, '2015-05-01 20:16:21', 1, 'gez'),
(496, 37, '2015-05-01 20:16:21', 1, 'gez'),
(497, 37, '2015-05-01 20:16:21', 1, 'g'),
(498, 37, '2015-05-01 20:16:21', 1, 'zeg'),
(499, 37, '2015-05-01 20:16:21', 1, 'ze'),
(500, 37, '2015-05-01 20:16:21', 1, 'gez'),
(501, 37, '2015-05-01 20:16:22', 1, 'gez'),
(502, 37, '2015-05-01 20:16:22', 1, 'g'),
(503, 37, '2015-05-01 20:16:22', 1, 'ezg'),
(504, 37, '2015-05-01 20:16:22', 1, 'ezg'),
(505, 37, '2015-05-01 20:16:22', 1, 'ezg'),
(506, 37, '2015-05-01 20:16:22', 1, 'ze'),
(507, 37, '2015-05-01 20:16:23', 1, 'gez'),
(508, 37, '2015-05-01 20:16:23', 1, 'gze'),
(509, 37, '2015-05-01 20:16:23', 1, 'g'),
(510, 37, '2015-05-01 20:16:23', 1, 'ze'),
(511, 37, '2015-05-01 20:16:23', 1, 'gez'),
(512, 37, '2015-05-01 20:16:23', 1, 'gez'),
(513, 37, '2015-05-01 20:16:24', 1, 'gzeg'),
(514, 37, '2015-05-01 20:16:24', 1, 'ezg'),
(515, 37, '2015-05-01 20:16:24', 1, 'ez'),
(516, 37, '2015-05-01 20:16:24', 1, 'gz'),
(517, 37, '2015-05-01 20:16:24', 1, 'eg'),
(518, 37, '2015-05-01 20:16:24', 1, 'ze'),
(519, 37, '2015-05-01 20:16:25', 1, 'gze'),
(520, 37, '2015-05-01 20:16:25', 1, 'g'),
(521, 37, '2015-05-01 20:16:25', 1, 'zeg'),
(522, 37, '2015-05-01 20:16:25', 1, 'ze'),
(523, 37, '2015-05-01 20:16:25', 1, 'gze'),
(524, 37, '2015-05-01 20:16:25', 1, 'g'),
(525, 37, '2015-05-01 20:16:25', 1, 'zeg'),
(526, 37, '2015-05-01 20:16:26', 1, 'ze'),
(527, 37, '2015-05-01 20:16:26', 1, 'gez'),
(528, 37, '2015-05-01 20:16:26', 1, 'gze'),
(529, 37, '2015-05-01 20:16:26', 1, 'g'),
(530, 37, '2015-05-01 20:16:26', 1, 'zeg'),
(531, 37, '2015-05-01 20:16:26', 1, 'ze'),
(532, 37, '2015-05-01 20:16:27', 1, 'gz'),
(533, 37, '2015-05-01 20:16:27', 1, 'eg'),
(534, 37, '2015-05-01 20:16:27', 1, 'z'),
(535, 37, '2015-05-01 20:16:27', 1, 'gez'),
(536, 37, '2015-05-01 20:16:27', 1, 'gz'),
(537, 37, '2015-05-01 20:16:27', 1, 'eg'),
(538, 37, '2015-05-01 20:16:28', 1, 'ze'),
(539, 37, '2015-05-01 20:16:28', 1, 'gze'),
(540, 37, '2015-05-01 20:16:28', 1, 'g'),
(541, 37, '2015-05-01 20:16:28', 1, 'zeg'),
(542, 37, '2015-05-01 20:16:28', 1, 'zegze'),
(543, 37, '2015-05-01 20:16:28', 1, 'g'),
(544, 37, '2015-05-01 20:16:29', 1, 'ez'),
(545, 37, '2015-05-01 20:16:29', 1, 'gz'),
(546, 37, '2015-05-01 20:16:29', 1, 'eg'),
(547, 37, '2015-05-01 20:16:29', 1, 'ze'),
(548, 37, '2015-05-01 20:16:29', 1, 'ze'),
(549, 37, '2015-05-01 20:16:29', 1, 'g'),
(550, 37, '2015-05-01 20:16:29', 1, 'zeg'),
(551, 37, '2015-05-01 20:16:30', 1, 'ze'),
(552, 37, '2015-05-01 20:16:30', 1, 'gze'),
(553, 37, '2015-05-01 20:16:30', 1, 'g'),
(554, 37, '2015-05-01 20:16:30', 1, 'zeg'),
(555, 37, '2015-05-01 20:16:30', 1, 'ze'),
(556, 37, '2015-05-01 20:16:30', 1, 'gez'),
(557, 37, '2015-05-01 20:16:31', 1, 'ezzg'),
(558, 37, '2015-05-01 20:16:31', 1, 'z'),
(559, 37, '2015-05-01 20:16:31', 1, 'eg'),
(560, 37, '2015-05-01 20:16:31', 1, 'ze'),
(561, 37, '2015-05-01 20:16:31', 1, 'gez'),
(562, 37, '2015-05-01 20:16:37', 1, 'COUCOU'),
(563, 36, '2015-05-01 20:21:04', 4, 'T''es pas beau'),
(564, 36, '2015-05-01 20:21:19', 4, 'Le chat est tr&egrave;s beau pas contre'),
(565, 36, '2015-05-02 17:07:09', 1, 'Bonjour'),
(566, 37, '2015-05-31 19:54:44', 1, 'test'),
(567, 37, '2015-05-31 19:54:49', 1, 'test'),
(568, 37, '2015-05-31 19:55:17', 1, 'test'),
(569, 37, '2015-05-31 19:55:36', 1, 'test'),
(570, 37, '2015-05-31 19:57:37', 1, 'encore un test'),
(571, 37, '2015-05-31 20:00:45', 1, 'Bonjour'),
(572, 37, '2015-05-31 20:00:54', 1, 'ceci est un test'),
(573, 37, '2015-05-31 20:04:54', 1, '1'),
(574, 37, '2015-05-31 20:05:39', 1, '2'),
(575, 37, '2015-05-31 20:07:05', 1, '3'),
(576, 37, '2015-05-31 20:08:13', 1, '4'),
(577, 37, '2015-05-31 20:11:46', 1, 'test'),
(578, 36, '2015-06-03 22:21:23', 4, 'Bonjour'),
(579, 36, '2015-06-03 22:21:27', 4, 'T''es moche'),
(580, 37, '2015-06-04 17:01:28', 1, 'bonjour'),
(581, 37, '2015-06-04 17:01:33', 1, 'test'),
(582, 37, '2015-06-04 19:30:23', 1, 'T''es pas beau'),
(583, 36, '2015-06-04 19:30:39', 1, 'Bonjour'),
(584, 64, '2015-06-14 01:15:53', 9, 'Bonjour, ceci est un exemple !');

-- --------------------------------------------------------

--
-- Structure de la table `signalements`
--

CREATE TABLE IF NOT EXISTS `signalements` (
`id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `utilisateur` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `signalements`
--

INSERT INTO `signalements` (`id`, `message`, `utilisateur`) VALUES
(1, 'test', 'test'),
(2, 'test', 'Pikachu'),
(3, 'Il pue', 'Pikachu'),
(4, 'Il est pas beau', 'Bob l''Ã©ponge');

-- --------------------------------------------------------

--
-- Structure de la table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
`id` int(11) NOT NULL,
  `femme` varchar(255) NOT NULL,
  `pretendants` varchar(255) NOT NULL,
  `pretendants2` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `reponses` varchar(255) NOT NULL,
  `pretendants3` varchar(255) NOT NULL,
  `statut` int(1) NOT NULL,
  `dateCreation` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='avancement dans le  tournoi 1 - 30c / 2 - 15c  3 - 10c / 4 - 5c c = concurent(s)' AUTO_INCREMENT=26 ;

--
-- Contenu de la table `tournaments`
--

INSERT INTO `tournaments` (`id`, `femme`, `pretendants`, `pretendants2`, `question`, `reponses`, `pretendants3`, `statut`, `dateCreation`) VALUES
(23, 'Jean', 'AlexisNdl;Erwan;Jaxxxxxx;crocodieu;Rararabis;kozvel;anubite;Bob l''éponge;Mundoverse;mordekaiser;IronMan;Barney Stinson;Jaime Lannister;Heisenberg;', 'Pikachu;AlexisNdl;Erwan;Jaxxxxxx;crocodieu;Barney Stinson;Jaime Lannister;Heisenberg;', 'Es-tu beau ?', '', 'Pikachu;Erwan;', 2, '2015-06-03'),
(24, 'Cersei Lannister', 'kozvel;twitchiz;Gillardino;connardforceur;mordekaiser;Bob l''&eacute;ponge;Franck Underwood;Hulk;AlexisNdl;IronMan;Erwan;Vincent;Alex;anubite;Kristoff;', '', '', '', '', 1, '2015-06-14'),
(25, 'Anna', 'Hans;crocodieu;Kristoff;Barney Stinson;mordekaiser;levieux;Rararabis;Heisenberg;Jean;Rarara;Alex;Pikachu;anubite;connardforceur;Gillardino;', 'Hans;crocodieu;Kristoff;Barney Stinson;mordekaiser;levieux;Rararabis;Heisenberg;Jean;Rarara;Alex;Pikachu;anubite;connardforceur;', 'Do you want to build a snowman ?', 'Hans:nop;crocodieu:why ?;Kristoff:YEAH;', 'Barney Stinson;', 2, '2015-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
`id` int(255) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dateInscription` date NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photoProfil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'gratuit' COMMENT '1-admin/2-payant/3-gratuit',
  `derniereConnexion` date NOT NULL,
  `dejaVus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreTournoi` int(255) NOT NULL DEFAULT '0',
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marital` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personnalite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etudes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yeux` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cheveux` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `silhouette` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ethnique` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sportives` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interets` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `musique` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=76 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `mail`, `sexe`, `dateInscription`, `dateDeNaissance`, `mdp`, `photoProfil`, `photo1`, `photo2`, `statut`, `derniereConnexion`, `dejaVus`, `nombreTournoi`, `ville`, `marital`, `personnalite`, `etudes`, `profession`, `yeux`, `cheveux`, `silhouette`, `ethnique`, `sportives`, `interets`, `musique`, `description`) VALUES
(36, 'Jean', 'jean.dessane@eisti.eu', 'Homme', '2015-04-21', '1996-01-27', 'aze', '../images/users/d3bff5ff6d76c376fd815848d11fcf62/photo1.jpg', '../images/users/d3bff5ff6d76c376fd815848d11fcf62/photo2.jpg', '../images/users/d3bff5ff6d76c376fd815848d11fcf62/photo3.jpg', 'payant', '0000-00-00', '', 0, 'Cergy', '', '', 'EISTI', 'Moi je geek', 'marron', 'chatains', 'parfaite', 'divine', 'Course,Foot,Rugby,Extr&ecirc;me;', 'Cin&eacute;ma,T&eacute;l&eacute;vision;', 'â™« J''suis pas chasseur mais j''lui mettrais bien une cartouche â™«;', 'Bonjour test test'),
(37, 'Pikachu', 'pikachu@eisti.eu', 'Homme', '2015-04-22', '1991-01-03', 'aze', '../images/users/8272b5aa9f470b8620042cd300060721/photo1.png', '../images/users/8272b5aa9f470b8620042cd300060721/photo2.', '../images/users/8272b5aa9f470b8620042cd300060721/photo3.', 'gratuit', '0000-00-00', '', 0, 'Une pok&eacute;ball', '', '', '', '', 'noirs', '', '', '', 'combats', 'gaston', 'le zouk et la zumba', 'Un jour je serai le meilleur dresseur \r\nJe me battrai sans r&eacute;pit\r\nJe ferai tout pour &ecirc;tre vainqueur \r\nEt gagner les d&eacute;fis \r\nJe parcourrai la Terre enti&egrave;re \r\nTraquant avec espoir \r\nLes Pok&eacute;mon et leurs myst&egrave;res \r\nLe secret de leurs pouvoirs \r\n'),
(38, 'Bob l''Ã©ponge', 'bob@eisti.eu', 'Homme', '2015-04-22', '1994-09-06', 'aze', '../images/users/c6400a3eb8279d89c6cedfe1333bbed3/photo1.jpg', '../images/users/c6400a3eb8279d89c6cedfe1333bbed3/photo2.', '../images/users/c6400a3eb8279d89c6cedfe1333bbed3/photo3.', 'gratuit', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'test', 'test@test.fr', 'Femme', '2015-05-21', '1990-06-15', 'aze', '../images/users/f5a86569e49405751b95c81c99eb2f7f/photo1.jpg', '../images/users/f5a86569e49405751b95c81c99eb2f7f/photo2.jpg', '../images/users/f5a86569e49405751b95c81c99eb2f7f/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Cergy maggle', 'veuve', 'dr&ocirc;le', 'BAC', 'dealer', 'marron', 'bruns', 'normale', 'europ&eacute;enne', 'Foot,Tennis;', 'Lecture,T&amp;eacute;l&amp;eacute;vision,Nature;', 'Rap;', 'MA BITE'),
(40, 'levieux', 'kfeicfn@free.fr', 'Homme', '2015-05-21', '1960-03-10', 'azertyuiop', '../images/users/96c29fc14e1382182c145174e20444a2/photo1.jpg', '../images/users/96c29fc14e1382182c145174e20444a2/photo2.jpg', '../images/users/96c29fc14e1382182c145174e20444a2/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'paris', 'jamais mari&eacute;', 'calme', 'BAC+5 et plus', 'dealer', 'moches', 'noirs', 'quelques kilos en trop', 'africaine', 'Extr&ecirc;me;', 'Lecture;', 'Pop;', 'Esh'),
(41, 'Rarara', 'eguin@free.fr', 'Homme', '2015-05-21', '1979-03-03', 'azerty', '../images/users/d6fb3a56d7d38f5c74718fd60be9bfce/photo1.jpg', '../images/users/d6fb3a56d7d38f5c74718fd60be9bfce/photo2.jpg', '../images/users/d6fb3a56d7d38f5c74718fd60be9bfce/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Alexandrie', 'veuf', 'exigeant', 'BAC+5 et plus', 'dealer', 'autres', 'blonds', 'mince', 'divine', 'Extr&ecirc;me,Sports de chambres;', 'Dieu;', 'Metal;', 'Ra'),
(42, 'anubite', 'hihi@free.fr', 'Homme', '2015-05-21', '1990-01-17', 'azer', '../images/users/c47a8814ae8620057515f9fd61cc91a9/photo1.jpg', '../images/users/c47a8814ae8620057515f9fd61cc91a9/photo2.jpg', '../images/users/c47a8814ae8620057515f9fd61cc91a9/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Cergy', 'jamais mari&eacute;', 'aventureux', 'BAC+3', 'moi je geek', 'bleus', 'roux', 'trapu', 'm&eacute;diterran&eacute;enne', 'Course,Musculation,Foot,Rugby,Tennis;', 'Cin&eacute;ma,Lecture,Cuisine;', 'Rock;', 'gre'),
(43, 'Rararabis', 'zaefuyhb@free.fr', 'Homme', '2015-05-21', '1994-06-24', 'aze', '../images/users/73bfa9479de87944950aa0c9d4f254c7/photo1.jpg', '../images/users/73bfa9479de87944950aa0c9d4f254c7/photo2.jpg', '../images/users/73bfa9479de87944950aa0c9d4f254c7/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'juvisy', 'veuf', 'sociable', 'EISTI', 'moi je geek', 'noirs', 'autres ', 'mince', 'indienne', 'Rugby;', 'M&eacute;nage (pour les femmes);', 'Electro;', 'het'),
(44, 'crocodieu', 'zefvuih@free.fr', 'Homme', '2015-05-21', '1980-07-16', 'aze', '../images/users/46fc278c9c7502e93907cbb0d6a806fa/photo1.jpg', '../images/users/46fc278c9c7502e93907cbb0d6a806fa/photo2.jpg', '../images/users/46fc278c9c7502e93907cbb0d6a806fa/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'turfu', 'jamais mari&eacute;', 'spontan&eacute;', 'BAC+2', 'flemme', 'marron', 'moches', 'trapu', 'm&eacute;tisse', 'Course;', 'T&eacute;l&eacute;vision;', 'Pop;', 'lol'),
(45, 'mordekaiser', 'afui@free.fr', 'Homme', '2015-05-21', '1993-05-04', 'aze', '../images/users/ec21e8fd52fb923128b7b784c02720ec/photo1.jpg', '../images/users/ec21e8fd52fb923128b7b784c02720ec/photo2.jpg', '../images/users/ec21e8fd52fb923128b7b784c02720ec/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'biteuse', 'veuf', 'timide', 'EISTI', 'moi je geek', 'noirs', 'autres ', 'normale', 'latine', 'Voiles,Volley,Extr&ecirc;me;', 'Tricot,Collections,Th&eacute;atre;', 'Rock,Rap;', 'pop'),
(46, 'masteryi', 'afi@free.fr', 'Homme', '2015-05-21', '1991-03-01', 'aze', '../images/users/6ca9398aaf67fe3eb5de8636165b865d/photo1.jpg', '../images/users/6ca9398aaf67fe3eb5de8636165b865d/photo2.jpg', '../images/users/6ca9398aaf67fe3eb5de8636165b865d/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'kiloutou', 'jamais mari&eacute;', 'aventureux', 'EISTI', 'moi je geek', 'verts', 'poivre et sel ', 'sportive', 'divine', 'Course;', 'Jeux vid&eacute;o,Nature;', 'Regae;', 'mpm'),
(47, 'kozvel', 'zfi@free.fr', 'Homme', '2015-05-21', '1992-04-18', 'aze', '../images/users/621e56ac5ae46dea931d59c332419432/photo1.jpg', '../images/users/621e56ac5ae46dea931d59c332419432/photo2.jpg', '../images/users/621e56ac5ae46dea931d59c332419432/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'blind', 'veuf', 'dr&ocirc;le', 'EISTI', 'moi je geek', 'moches', 'moches', 'approximative', 'asiatique', 'Extr&ecirc;me;', 'Les patates;', 'Rock;', 'efe'),
(48, 'connardforceur', 'fvez@free.fr', 'Homme', '2015-05-21', '1994-06-10', 'aze', '../images/users/ba4d9ff3142ef09f78df94621324f218/photo1.jpg', '../images/users/ba4d9ff3142ef09f78df94621324f218/photo2.jpg', '../images/users/ba4d9ff3142ef09f78df94621324f218/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Demacia', 'jamais mari&eacute;', 'spontan&eacute;', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'dealer', 'noirs', 'noirs', 'sportive', 'divine', 'Course,Musculation,Rugby,Basket,Extr&ecirc;me,Sports de chambres;', 'Cin&eacute;ma,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Collections,Les patates,Dieu,Sports de chambre;', 'Pop,Rock,Rap,Metal,Blues,Jazz,Electro,Gospel,Regae,Slam,Patrick S&eacute;bastien;', 'tyt'),
(49, 'Jaxxxxxx', 'hrqea@free.fr', 'Homme', '2015-05-21', '1990-02-27', 'aze', '../images/users/5bf49880f575a3105631349a0b69ea14/photo1.jpg', '../images/users/5bf49880f575a3105631349a0b69ea14/photo2.jpg', '../images/users/5bf49880f575a3105631349a0b69ea14/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'jerico', 's&eacute;par&eacute;', 'g&eacute;n&eacute;reux', 'BAC+4', 'dealer', 'moches', 'blancs', 'ronde', 'arabe', 'Rugby,Tennis,Equitation;', 'Jeux vid&eacute;o,Animaux,Tricot,Collections;', 'Rock,Metal,Blues;', 'dfd'),
(50, 'twitchiz', 'zgikj@free.fr', 'Homme', '2015-05-21', '1989-09-01', 'aze', '../images/users/2d4db0fb8e02327db3e3ed5ea47a05f6/photo1.jpg', '../images/users/2d4db0fb8e02327db3e3ed5ea47a05f6/photo2.jpg', '../images/users/2d4db0fb8e02327db3e3ed5ea47a05f6/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'jungle', 'divorc&eacute;', 'r&eacute;serv&eacute;', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'moi je geek', 'verts', 'moches', 'trapu', 'm&eacute;tisse', 'Danse,Hand,Voiles,Volley;', 'Jeux vid&eacute;o;', 'Pop;', 'jyj'),
(51, 'Mundoverse', 'afuh@free.fr', 'Homme', '2015-05-21', '2000-10-31', 'aze', '../images/users/c3ac64333e8947e458d7f83fe2d0b3eb/photo1.jpg', '../images/users/c3ac64333e8947e458d7f83fe2d0b3eb/photo2.jpg', '../images/users/c3ac64333e8947e458d7f83fe2d0b3eb/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'toxiciti', 'jamais mari&eacute;', 'dr&ocirc;le', 'niveau lyc&eacute;e et inf&eacute;rieur', 'flemme', 'verts', 'blancs', 'sportive', 'latine', 'Course,Musculation,Foot,Rugby,Tennis,Basket,Hand,Extr&ecirc;me;', 'Cuisine;', 'Pop,Rock,Rap;', 'dsd'),
(52, 'Vivivi', 'qszeun@free.fr', 'Femme', '2015-05-21', '1994-08-11', 'aze', '../images/users/0471fa6f2ff64ba60ef22d24db9367f5/photo1.jpg', '../images/users/0471fa6f2ff64ba60ef22d24db9367f5/photo2.jpg', '../images/users/0471fa6f2ff64ba60ef22d24db9367f5/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'poing', 's&eacute;par&eacute;e', 'aventureuse', 'EISTI', 'dealer', 'noisettes', 'chatains', 'ronde', 'm&eacute;diterran&eacute;enne', 'Course,Equitation,Sports de chambres;', 'Animaux,Tricot,Collections;', 'Rap;', 'lml'),
(53, 'ahriiii', 'faizhnfza@free.fr', 'Femme', '2015-05-21', '1999-10-27', 'aze', '../images/users/0d11fb47ff4525ccfec2061323af1081/photo1.jpg', '../images/users/0d11fb47ff4525ccfec2061323af1081/photo2.jpg', '../images/users/0d11fb47ff4525ccfec2061323af1081/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'chaton', 'jamais mari&eacute;e', 'attentionn&eacute;e', 'BAC+3', 'flemme', 'verts', 'noirs', 'mince', 'divine', 'Course,Danse,Extr&ecirc;me,Sports de chambres;', 'Cin&eacute;ma,Lecture,Cuisine,Nature,Animaux,Tricot,Collections,Th&eacute;atre,M&eacute;nage (pour les femmes),Les patates,Dieu,Sports de chambre;', 'Pop,Metal,Blues,Jazz;', 'bvb'),
(54, 'AlexisNdl', 'nandillona@eisti.eu', 'Homme', '2015-06-02', '1995-06-27', 'jeanleplusbeau', '../images/users/88dbdc87617604ccbf3898f2018ffcdc/photo1.jpg', '../images/users/88dbdc87617604ccbf3898f2018ffcdc/photo2.jpg', '../images/users/88dbdc87617604ccbf3898f2018ffcdc/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'M&eacute;ry sur Oise', 'veuf', 'sensible', 'BAC+2', 'dealer', 'marron', 'bruns', 'sportive', 'divine', 'Course,Musculation,Foot;', 'T&eacute;l&eacute;vision,Jeux vid&eacute;o;', 'Pop,Rock,Rap,Electro,Regae,Patrick S&eacute;bastien;', 'Major des CPI1 de l\\''EISTI promo 2k18'),
(55, 'antoine', 'geernaerta@eisti.eu', 'Homme', '2015-06-02', '1995-04-26', 'test', '../images/users/161c9525caf47261c6ff00346b90644b/photo1.png', '../images/users/161c9525caf47261c6ff00346b90644b/photo2.jpg', '../images/users/161c9525caf47261c6ff00346b90644b/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Beauvais', 'jamais mari&eacute;', 'attentionn&eacute;', 'BAC+2', 'moi je geek', 'verts', 'roux', 'mince', 'europ&eacute;enne', 'Course,Foot,Tennis;', 'Cin&eacute;ma,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Animaux;', 'Pop,Rock,Electro,Patrick S&eacute;bastien;', 'Sympa'),
(56, 'Erwan', 'prout@eisti.eu', 'Homme', '2015-06-02', '1995-04-29', 'erwan', '../images/users/0d133008f7f3bdf62de2887435c39c2c/photo1.jpg', '../images/users/0d133008f7f3bdf62de2887435c39c2c/photo2.jpg', '../images/users/0d133008f7f3bdf62de2887435c39c2c/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Courdimanche', 'jamais mari&eacute;', 'sensible', 'BAC+2', 'moi je geek', 'verts', 'bruns', 'sportive', 'europ&eacute;enne', 'Voiles,Sports de chambres;', 'Cin&eacute;ma,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Nature,Tricot,M&eacute;nage (pour les femmes),Les patates,Dieu,Sports de chambre;', 'Pop,Rock,Rap,Metal,Blues,Jazz,Electro,Gospel,Regae,Slam;', 'Je m\\''appelle Erwan je suis une personne tr&egrave;s gentille je suis &agrave; l\\''EISTI je cherche l\\''ame soeur, pas de plan cul svp'),
(57, 'Alexis Nandillon', 'alexis@eisti.eu', 'Homme', '2015-06-02', '1995-06-17', 'alexis', '../images/users/b2a2148a3c37f531ead4774fe2e7ac2c/photo1.jpg', '../images/users/b2a2148a3c37f531ead4774fe2e7ac2c/photo2.jpg', '../images/users/b2a2148a3c37f531ead4774fe2e7ac2c/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Cergy', 'jamais mari&eacute;', 'sociable', 'BAC+2', 'dealer', 'marron', 'bruns', 'sportive', 'europ&eacute;enne', 'Course,Musculation,Foot,Sports de chambres;', 'Cin&eacute;ma,Lecture,Jeux vid&eacute;o,Nature,Collections,Les patates,Dieu;', 'Pop,Rap,Blues,Electro,Regae;', 'J\\''aime beaucoup abuser de substances illicites, je cherche quelqu\\''un comme moi. Pas d\\''alcool = pas d\\''amusement, zbraaaa'),
(58, 'Camille Audrain', 'camille@eisti.eu', 'Femme', '2015-06-02', '1995-09-01', 'camille', '../images/users/6d9251b747c931a1642ecb30497ba8ec/photo1.jpg', '../images/users/6d9251b747c931a1642ecb30497ba8ec/photo2.jpg', '../images/users/6d9251b747c931a1642ecb30497ba8ec/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Paris', 'jamais mari&eacute;e', 'exigeante', 'BAC+2', 'moi je geek', 'marron', 'chatains', 'normale', 'europ&eacute;enne', 'Tennis,Danse,Basket,Extr&ecirc;me;', 'Cin&eacute;ma,Cuisine,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Nature,Animaux,Tricot,Th&eacute;atre,M&eacute;nage (pour les femmes),Sports de chambre;', 'Rock,Rap,Blues,Electro,Gospel,Regae;', 'Cherche l\\''Amour avec un grand A. Pr&ecirc;te &agrave; tout pour l\\''obtenir, m&ecirc;me &agrave; faire des concessions. Par piti&eacute;, AIDEZ-MOI'),
(59, 'Vincent', 'vicent@eisti.eu', 'Homme', '2015-06-02', '1995-06-14', 'aze', '../images/users/adab40c15da982c5c1bfeaa868f59b31/photo1.jpg', '../images/users/adab40c15da982c5c1bfeaa868f59b31/photo2.jpg', '../images/users/adab40c15da982c5c1bfeaa868f59b31/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Courdimanche', 'jamais mari&eacute;', 'calme', 'EISTI', 'flemme', 'marron', 'bruns', 'normale', 'asiatique', 'Tennis,Basket,Volley;', 'Jeux vid&eacute;o,Sports de chambre;', 'Pop,Rock,Electro;', ''),
(60, 'Cersei Lannister', 'cersei@eisti.eu', 'Femme', '2015-06-02', '1930-01-01', 'cersei', '../images/users/1f9e43410898c8d9b8f92a6b2d9199e8/photo1.jpg', '../images/users/1f9e43410898c8d9b8f92a6b2d9199e8/photo2.jpg', '../images/users/1f9e43410898c8d9b8f92a6b2d9199e8/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'King\\''s Landing', 'veuve', 'fi&egrave;re', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'flemme', 'noisettes', 'blonds', 'parfaite', 'europ&eacute;enne', 'Rugby,Equitation,Danse,Sports de chambres;', 'Lecture,Nature,Animaux,Tricot,Sports de chambre;', 'Gospel,Regae;', 'Cherche un petit/grand fr&egrave;re, aime beaucoup l\\''inceste, ne couche qu\\''avec des membres de ma famille. Je ne me m&eacute;lange pas avec des personnes d\\''un sang &eacute;tranger. Veuve de 2 enfants, j\\''ai &eacute;galement un enfant qui est mort dans '),
(61, 'Jaime Lannister', 'jaime@eisti.eu', 'Homme', '2015-06-02', '1930-07-25', 'jaime', '../images/users/62ed5129cf42852e2fc733d5123bbf6f/photo1.jpg', '../images/users/62ed5129cf42852e2fc733d5123bbf6f/photo2.jpg', '../images/users/62ed5129cf42852e2fc733d5123bbf6f/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'King\\''s Landing', 'jamais mari&eacute;', 'spontan&eacute;', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'flemme', 'bleus', 'blonds', 'sportive', 'europ&eacute;enne', 'Course,Musculation,Equitation,Voiles,Extr&ecirc;me;', 'Lecture,Nature,Animaux,Les patates;', 'Pop,Rap,Blues,Jazz;', 'Recherche Cersei'),
(62, 'Alex', 'alex.vacheret@eisti.eu', 'Homme', '2015-06-02', '1995-02-09', 'aze', '../images/users/23d8b84d21738b8ca8414a91da68ab2b/photo1.jpg', '../images/users/23d8b84d21738b8ca8414a91da68ab2b/photo2.jpg', '../images/users/23d8b84d21738b8ca8414a91da68ab2b/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Les Clayes sous Bois', 'jamais mari&eacute;', 'g&eacute;n&eacute;reux', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'dealer', 'bleus', 'blonds', 'approximative', 'divine', 'Basket;', 'T&amp;eacute;l&amp;eacute;vision,Jeux vid&amp;eacute;o,Dieu,Sports de chambre;', 'Rap,Electro,Patrick S&amp;eacute;bastien;', 'Tant qu\\''il y a de l\\\\\\''ananas il y a de l\\''espoir !'),
(63, 'Robin Scherbatsky', 'robin@eisti.eu', 'Femme', '2015-06-02', '1990-04-15', 'robin', '../images/users/49f37a21090aac268c7eef6059c1dfd8/photo1.jpg', '../images/users/49f37a21090aac268c7eef6059c1dfd8/photo2.jpg', '../images/users/49f37a21090aac268c7eef6059c1dfd8/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Canada', 's&eacute;par&eacute;e', 'spontan&eacute;e', 'BAC+4', 'dealer', 'verts', 'bruns', 'parfaite', 'divine', 'Foot,Rugby,Basket,Hand,Volley,Extr&ecirc;me,Sports de chambres;', 'Cin&eacute;ma,Lecture,Cuisine,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Collections,Th&eacute;atre,Sports de chambre;', 'Rap,Blues,Gospel,Regae,Slam;', 'Cherche quelqu\\''un de s&eacute;rieux pour relation sur la dur&eacute;e. Traine souvent au pub MacLaren\\''s. Aime le football am&eacute;ricain, vient de Canada. '),
(64, 'Barney Stinson', 'barney@eisti.eu', 'Homme', '2015-06-02', '1990-09-08', 'barney', '../images/users/53efc05011cad2c61a9b64cb7c4282bd/photo1.jpg', '../images/users/53efc05011cad2c61a9b64cb7c4282bd/photo2.jpg', '../images/users/53efc05011cad2c61a9b64cb7c4282bd/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'New York', 'jamais mari&eacute;', 'dr&ocirc;le', 'BAC+2', 'flemme', 'marron', 'blonds', 'parfaite', 'divine', 'Course,Musculation,Foot,Rugby,Tennis,Equitation,Danse,Basket,Hand,Voiles,Volley,Extr&ecirc;me,Sports de chambres;', 'Cin&eacute;ma,Lecture,Cuisine,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Nature,Animaux,Tricot,Collections,Th&eacute;atre,Les patates,Dieu,Sports de chambre;', 'Pop,Rock,Rap,Metal,Blues,Jazz,Electro,Gospel,Regae,Slam,Patrick S&eacute;bastien;', 'Recherche l\\''ame soeur, homme tout &agrave; fait fid&egrave;le incapable de tromper la divine race f&eacute;minine. Relation s&eacute;rieuse uniquement s\\''il vous plait\r\n\r\n\r\n\r\nBANG BANG BANG'),
(65, 'Hulk', 'hulk@eisti.eu', 'Homme', '2015-06-02', '1980-03-09', 'hulk', '../images/users/b96d13d970aa9747efff4561f786b76c/photo1.jpg', '../images/users/b96d13d970aa9747efff4561f786b76c/photo2.jpg', '../images/users/b96d13d970aa9747efff4561f786b76c/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'New York', 'veuf', 'sensible', 'BAC+5 et plus', 'flemme', 'verts', 'bruns', 'sportive', 'asiatique', 'Course,Musculation,Extr&ecirc;me;', 'M&eacute;nage (pour les femmes);', ';', 'A ne surtout pas &eacute;nerver sous peine de transformation en horrible b&ecirc;te verte... A vous de voir.'),
(66, 'Gillardino', 'efghrfgj@gmail.fr', 'Homme', '2015-06-02', '1995-06-29', 'bibi', '../images/users/6eaed80d528fd4b08ae194d8374f8a79/photo1.jpg', '../images/users/6eaed80d528fd4b08ae194d8374f8a79/photo2.jpg', '../images/users/6eaed80d528fd4b08ae194d8374f8a79/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Luzarches', 'jamais mari&eacute;', 'fiable', 'EISTI', 'dealer', 'noisettes', 'chatains', 'mince', 'europ&eacute;enne', 'Foot,Tennis,Equitation;', 'Cin&eacute;ma,Lecture,Jeux vid&eacute;o,Les patates;', 'Patrick S&eacute;bastien;', 'I\\''m in love with the coco'),
(67, 'Heisenberg', 'heisenberg@eisti.eu', 'Homme', '2015-06-03', '1975-11-18', 'heisenberg', '../images/users/675374a9bff7ffbc9d7bb4d1c53421ce/photo1.jpg', '../images/users/675374a9bff7ffbc9d7bb4d1c53421ce/photo2.jpg', '../images/users/675374a9bff7ffbc9d7bb4d1c53421ce/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Albuquerque', 'divorc&eacute;', 'exigeant', 'BAC+5 et plus', 'flemme', 'marron', 'autres ', 'normale', 'europ&eacute;enne', 'Sports de chambres;', 'Cuisine,T&eacute;l&eacute;vision;', ';', 'I am the cook. Say my name. I AM THE ONE WHO KNOCKS'),
(68, 'Franck Underwood', 'Franck@eisti.eu', 'Homme', '2015-06-03', '1962-08-09', 'frank', '../images/users/bb118f91c2595712f76187c12c81466d/photo1.jpg', '../images/users/bb118f91c2595712f76187c12c81466d/photo2.jpg', '../images/users/bb118f91c2595712f76187c12c81466d/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Washington DC', 's&eacute;par&eacute;', 'aventureux', 'BAC+5 et plus', 'flemme', 'verts', 'blancs', 'sportive', 'europ&eacute;enne', 'Course,Musculation,Danse;', 'Cin&eacute;ma,Lecture,T&eacute;l&eacute;vision,Jeux vid&eacute;o,Th&eacute;atre;', ';', 'Pr&ecirc;t &agrave; tout pour parvenir &agrave; ses objectifs. Que Dieu b&eacute;nisse l\\''Am&eacute;rique.'),
(69, 'IronMan', 'ironman@eisti.eu', 'Homme', '2015-06-03', '1980-10-02', 'ironman', '../images/users/a878f5ceab26010e51f41e81591dcc7c/photo1.jpg', '../images/users/a878f5ceab26010e51f41e81591dcc7c/photo2.jpg', '../images/users/a878f5ceab26010e51f41e81591dcc7c/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'New York', 's&eacute;par&eacute;', 'aventureux', 'BAC+5 et plus', 'flemme', 'marron', 'bruns', 'sportive', 'europ&eacute;enne', 'Course,Musculation,Rugby,Extr&ecirc;me,Sports de chambres;', 'Cin&eacute;ma,Lecture,Animaux,Collections;', 'Rock,Metal,Blues;', 'Je suis absolument parfait. Je me trimballe souvent dans une genre de combinaison m&eacute;tallique, me permettant entre autre de voler'),
(71, 'Anna', 'anna@eh.fr', 'Femme', '2015-06-12', '1991-07-11', 'aze', '../images/users/e6c436b09f22508b00ae0619c6d938d4/photo1.jpg', '../images/users/e6c436b09f22508b00ae0619c6d938d4/photo2.jpg', '../images/users/e6c436b09f22508b00ae0619c6d938d4/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'Disney', 'jamais mari&eacute;e', 'dr&ocirc;le', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', ' Autres cat&eacute;gories', 'bleus', 'chatains', 'mince', 'europ&eacute;enne', 'Course;', 'Cin&eacute;ma,Lecture,Cuisine;', 'Metal;', 'Do you want to build a snowman ? â™«'),
(74, 'Hans', 'afazf@zaf.fr', 'Homme', '2015-06-12', '1995-07-07', 'aze', '../images/users/68f7b74d85bfa974e3c235ca6756d8bd/photo1.jpg', '../images/users/68f7b74d85bfa974e3c235ca6756d8bd/photo2.jpg', '../images/users/68f7b74d85bfa974e3c235ca6756d8bd/photo3.jpg', 'gratuit', '0000-00-00', '', 0, 'EvilTown', 'divorc&eacute;', 'aventureux', 'wesh ta kru gt al&eacute; a l&eacute;kol ?', 'Agriculteurs exploitants', 'bleus', 'chatains', 'sportive', 'arabe', 'Musculation,Foot,Rugby;', 'Sports de chambre;', 'â™« J''suis pas chasseur mais j''lui mettrais bien une cartouche â™«;', 'Je suis un connard'),
(73, 'Kristoff', 'aze@frefe.fr', 'Homme', '2015-06-12', '1994-06-10', 'aze', '../images/users/4d50953c17094dac9ecb099f6d63b8ed/photo1.jpg', '../images/users/4d50953c17094dac9ecb099f6d63b8ed/photo2.jpg', '../images/users/4d50953c17094dac9ecb099f6d63b8ed/photo3.jpg', 'gratuit', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', ';', ';', ';', 'J''coupe de la glace je sais pas pourquoi'),
(75, 'admin', 'admin', 'admin', '0000-00-00', '0000-00-00', 'admin', '', '', '', 'admin', '0000-00-00', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `conv`
--
ALTER TABLE `conv`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`), ADD KEY `idConv` (`idConv`), ADD KEY `idExp` (`idExp`,`idConv`);

--
-- Index pour la table `signalements`
--
ALTER TABLE `signalements`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tournaments`
--
ALTER TABLE `tournaments`
 ADD PRIMARY KEY (`id`), ADD KEY `femme` (`femme`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `conv`
--
ALTER TABLE `conv`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=585;
--
-- AUTO_INCREMENT pour la table `signalements`
--
ALTER TABLE `signalements`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tournaments`
--
ALTER TABLE `tournaments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
