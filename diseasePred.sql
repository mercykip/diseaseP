-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2019 at 09:53 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diseasePred`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `disease_name`) VALUES
(1, 'hypertensive disease\r\n'),
(2, 'diabetes\r\n'),
(3, 'depressive disorder\r\n'),
(4, 'coronary heart disease\r\n'),
(5, 'pneumonia'),
(6, 'failure heart congestive\r\n\r\n'),
(7, 'accident cerebrovascular\r\n'),
(8, 'asthma\r\n'),
(9, 'myocardial infarction\r\n'),
(10, 'hypercholesterolemia\r\n'),
(11, 'infection\r\n'),
(12, 'infection urinary tract\r\n'),
(13, 'anemia\r\n'),
(14, 'chronic obstructive airway disease\r\n'),
(15, 'dementia\r\n'),
(16, 'insufficiency renal\r\n'),
(17, 'confusion\r\n'),
(18, 'degenerative polyarthritis\r\n'),
(19, 'hypothyroidism\r\n'),
(20, 'anxiety state\r\n'),
(21, 'malignant neoplasms'),
(22, 'acquired immuno-deficiency syndrome'),
(23, 'cellulitis\r\n'),
(24, 'gastroesophageal reflux disease\r\n'),
(25, 'septicemia\r\n'),
(26, 'deep vein thrombosis\r\n'),
(27, 'dehydration\r\n'),
(28, 'neoplasm\r\n'),
(29, 'embolism pulmonary\r\n'),
(30, 'epilepsy\r\n'),
(31, 'cardiomyopathy\r\n'),
(32, 'chronic kidney failure\r\n'),
(33, 'carcinoma\r\n'),
(34, 'hepatitis C\r\n'),
(35, 'peripheral vascular disease\r\n'),
(36, 'psychotic disorder\r\n'),
(37, 'hyperlipidemia\r\n'),
(38, 'bipolar disorder\r\n'),
(39, 'obesity\r\n'),
(40, 'ischemia\r\n'),
(41, 'cirrhosis\r\n'),
(42, 'exanthema\r\n'),
(43, 'benign prostatic hypertrophy\r\n'),
(44, 'kidney failure acute\r\n'),
(45, 'mitral valve insufficiency\r\n'),
(46, 'arthritis\r\n'),
(47, 'bronchitis\r\n'),
(48, 'hemiparesis\r\n'),
(49, 'osteoporosis\r\n'),
(50, 'transient ischemic attack\r\n'),
(51, 'adenocarcinoma\r\n'),
(52, 'infection urinary tract\r\n'),
(53, 'anemia\r\n'),
(54, 'chronic obstructive airway disease\r\n'),
(55, 'dementia\r\n'),
(56, 'insufficiency renal\r\n'),
(57, 'confusion\r\n'),
(58, 'degenerative polyarthritis\r\n'),
(59, 'hypothyroidism\r\n'),
(60, 'anxiety state\r\n'),
(61, 'malignant neoplasms'),
(62, 'acquired immuno-deficiency syndrome'),
(63, 'cellulitis\r\n'),
(64, 'gastroesophageal reflux disease\r\n'),
(65, 'septicemia\r\n'),
(66, 'deep vein thrombosis\r\n'),
(67, 'dehydration\r\n'),
(68, 'neoplasm\r\n'),
(69, 'embolism pulmonary\r\n'),
(70, 'epilepsy\r\n'),
(71, 'cardiomyopathy\r\n'),
(72, 'chronic kidney failure\r\n'),
(73, 'carcinoma\r\n'),
(74, 'hepatitis C\r\n'),
(75, 'peripheral vascular disease\r\n'),
(76, 'psychotic disorder\r\n'),
(77, 'hyperlipidemia\r\n'),
(78, 'bipolar disorder\r\n'),
(79, 'obesity\r\n'),
(80, 'ischemia\r\n'),
(81, 'cirrhosis\r\n'),
(82, 'exanthema\r\n'),
(83, 'benign prostatic hypertrophy\r\n'),
(84, 'kidney failure acute\r\n'),
(85, 'mitral valve insufficiency\r\n'),
(86, 'arthritis\r\n'),
(87, 'bronchitis\r\n'),
(88, 'hemiparesis\r\n'),
(89, 'osteoporosis\r\n'),
(90, 'transient ischemic attack\r\n'),
(91, 'adenocarcinoma\r\n'),
(92, 'paranoia\r\n'),
(93, 'pancreatitis\r\n'),
(94, 'incontinence\r\n'),
(95, 'paroxysmal dyspnea\r\n'),
(96, 'hernia\r\n'),
(97, 'malignant neoplasm of prostate'),
(98, 'edema pulmonary\r\n'),
(99, 'lymphatic diseases\r\n'),
(100, 'stenosis aortic valve\r\n'),
(101, 'malignant neoplasm of breast'),
(102, 'schizophrenia\r\n'),
(103, 'diverticulitis\r\n'),
(104, 'overload fluid\r\n'),
(105, 'ulcer peptic\r\n'),
(106, 'osteomyelitis\r\n'),
(107, 'gastritis\r\n'),
(108, 'bacteremia\r\n'),
(109, 'failure kidney\r\n'),
(110, 'sickle cell anemia\r\n'),
(111, ' heart failure\r\n'),
(112, 'upper respiratory infection\r\n'),
(113, 'hepatitis\r\n'),
(114, 'hypertension pulmonary\r\n'),
(115, 'deglutition disorder\r\n'),
(116, 'gout\r\n'),
(117, 'thrombocytopaenia\r\n'),
(118, 'hypoglycemia\r\n'),
(119, 'pneumonia aspiration\r\n'),
(120, 'colitis\r\n'),
(121, 'diverticulosis\r\n'),
(122, 'suicide attempt\r\n'),
(123, 'Pneumocystis carinii pneumonia\r\n'),
(124, 'hepatitis B\r\n'),
(125, 'parkinson disease\r\n'),
(126, 'lymphoma\r\n'),
(127, 'hyperglycemia\r\n'),
(128, 'encephalopathy\r\n'),
(129, 'tricuspid valve insufficiency\r\n'),
(130, 'Alzheimer\'s disease\r\n'),
(131, 'candidiasis\r\n'),
(132, 'paranoia\r\n'),
(133, 'pancreatitis\r\n'),
(134, 'incontinence\r\n'),
(135, 'paroxysmal dyspnea\r\n'),
(136, 'hernia\r\n'),
(137, 'malignant neoplasm of prostate'),
(138, 'edema pulmonary\r\n'),
(139, 'lymphatic diseases\r\n'),
(140, 'stenosis aortic valve\r\n'),
(141, 'malignant neoplasm of breast'),
(142, 'schizophrenia\r\n'),
(143, 'diverticulitis\r\n'),
(144, 'overload fluid\r\n'),
(145, 'ulcer peptic\r\n'),
(146, 'osteomyelitis\r\n'),
(147, 'gastritis\r\n'),
(148, 'bacteremia\r\n'),
(149, 'failure kidney\r\n'),
(150, 'sickle cell anemia\r\n'),
(151, ' heart failure\r\n'),
(152, 'upper respiratory infection\r\n'),
(153, 'hepatitis\r\n'),
(154, 'hypertension pulmonary\r\n'),
(155, 'deglutition disorder\r\n'),
(156, 'gout\r\n'),
(157, 'thrombocytopaenia\r\n'),
(158, 'hypoglycemia\r\n'),
(159, 'pneumonia aspiration\r\n'),
(160, 'colitis\r\n'),
(161, 'diverticulosis\r\n'),
(162, 'suicide attempt\r\n'),
(163, 'Pneumocystis carinii pneumonia\r\n'),
(164, 'hepatitis B\r\n'),
(165, 'parkinson disease\r\n'),
(166, 'lymphoma\r\n'),
(167, 'hyperglycemia\r\n'),
(168, 'encephalopathy\r\n'),
(169, 'tricuspid valve insufficiency\r\n'),
(170, 'Alzheimer\'s disease\r\n'),
(171, 'candidiasis\r\n'),
(172, 'neuropathy\r\n'),
(173, 'kidney disease\r\n'),
(174, 'fibroid tumor\r\n'),
(175, 'glaucoma\r\n'),
(176, 'neoplasm metastasis\r\n'),
(177, 'malignant tumor of colon\r\n'),
(178, 'ketoacidosis diabetic\r\n'),
(179, 'tonic-clonic epilepsy'),
(180, 'malignant neoplasms\r\n'),
(181, 'respiratory failure\r\n'),
(182, 'melanoma\r\n'),
(183, 'gastroenteritis\r\n'),
(184, 'malignant neoplasm of lung\r\n'),
(185, 'manic disorder\r\n'),
(186, 'personality disorder\r\n'),
(187, 'primary carcinoma of the liver cells\r\n'),
(188, 'emphysema pulmonary\r\n'),
(189, 'hemorrhoids\r\n'),
(190, 'spasm bronchial\r\n'),
(191, 'aphasia\r\n'),
(192, 'obesity morbid\r\n'),
(193, 'pyelonephritis\r\n'),
(194, 'endocarditis\r\n'),
(195, 'effusion pericardial\r\n'),
(196, 'chronic alcoholic intoxication\r\n'),
(197, 'pneumothorax\r\n'),
(198, 'delirium\r\n'),
(199, 'neutropenia\r\n'),
(200, 'hyperbilirubinemia\r\n'),
(201, 'influenza\r\n'),
(202, 'dependence\r\n'),
(203, 'thrombus\r\n'),
(204, 'cholecystitis\r\n'),
(205, 'hernia hiatal\r\n'),
(206, 'migraine disorders\r\n'),
(207, 'pancytopenia\r\n'),
(208, 'cholelithiasis'),
(209, 'tachycardia sinus\r\n'),
(210, 'ileus\r\n'),
(211, 'adhesion\r\n'),
(212, 'neuropathy\r\n'),
(213, 'kidney disease\r\n'),
(214, 'fibroid tumor\r\n'),
(215, 'glaucoma\r\n'),
(216, 'neoplasm metastasis\r\n'),
(217, 'malignant tumor of colon\r\n'),
(218, 'ketoacidosis diabetic\r\n'),
(219, 'tonic-clonic epilepsy'),
(220, 'malignant neoplasms\r\n'),
(221, 'respiratory failure\r\n'),
(222, 'melanoma\r\n'),
(223, 'gastroenteritis\r\n'),
(224, 'malignant neoplasm of lung\r\n'),
(225, 'manic disorder\r\n'),
(226, 'personality disorder\r\n'),
(227, 'primary carcinoma of the liver cells\r\n'),
(228, 'emphysema pulmonary\r\n'),
(229, 'hemorrhoids\r\n'),
(230, 'spasm bronchial\r\n'),
(231, 'aphasia\r\n'),
(232, 'obesity morbid\r\n'),
(233, 'pyelonephritis\r\n'),
(234, 'endocarditis\r\n'),
(235, 'effusion pericardial\r\n'),
(236, 'chronic alcoholic intoxication\r\n'),
(237, 'pneumothorax\r\n'),
(238, 'delirium\r\n'),
(239, 'neutropenia\r\n'),
(240, 'hyperbilirubinemia\r\n'),
(241, 'influenza\r\n'),
(242, 'dependence\r\n'),
(243, 'thrombus\r\n'),
(244, 'cholecystitis\r\n'),
(245, 'hernia hiatal\r\n'),
(246, 'migraine disorders\r\n'),
(247, 'pancytopenia\r\n'),
(248, 'cholelithiasis'),
(249, 'tachycardia sinus\r\n'),
(250, 'ileus\r\n'),
(251, 'adhesion\r\n'),
(252, 'delusion\r\n'),
(253, 'affect labile\r\n'),
(254, 'decubitus ulcer\r\n'),
(255, 'delusion\r\n'),
(256, 'affect labile\r\n'),
(257, 'decubitus ulcer\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptoms`
--

CREATE TABLE `disease_symptoms` (
  `id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_symptoms`
--

INSERT INTO `disease_symptoms` (`id`, `disease_id`, `symptom_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(25, 2, 12),
(26, 2, 13),
(27, 2, 2),
(28, 2, 1),
(29, 2, 4),
(30, 2, 10),
(31, 2, 26),
(32, 2, 15),
(33, 2, 8),
(34, 2, 27),
(35, 2, 16),
(36, 2, 17),
(37, 2, 7),
(38, 2, 18),
(39, 2, 19),
(75, 3, 20),
(76, 3, 21),
(77, 3, 41),
(78, 3, 40),
(79, 3, 39),
(80, 3, 38),
(81, 3, 37),
(82, 3, 22),
(83, 3, 23),
(84, 3, 24),
(85, 3, 25),
(86, 3, 28),
(87, 3, 29),
(88, 3, 30),
(89, 3, 31),
(90, 3, 32),
(91, 3, 33),
(92, 3, 34),
(93, 3, 35),
(94, 3, 36),
(159, 4, 1),
(160, 4, 11),
(161, 4, 2),
(162, 4, 42),
(163, 4, 8),
(164, 4, 24),
(165, 4, 12),
(166, 4, 43),
(167, 4, 26),
(168, 4, 44),
(169, 5, 45),
(170, 5, 46),
(171, 5, 2),
(172, 5, 25),
(173, 5, 48),
(174, 5, 49),
(175, 5, 50),
(176, 5, 51),
(177, 5, 52),
(178, 5, 53),
(179, 5, 54),
(180, 5, 55),
(181, 5, 56),
(182, 5, 57),
(183, 5, 58),
(203, 5, 59),
(204, 5, 60),
(205, 5, 61),
(206, 6, 2),
(207, 6, 26),
(208, 6, 62),
(209, 6, 15),
(210, 6, 43),
(216, 6, 45),
(217, 6, 56),
(220, 7, 63),
(221, 7, 64),
(224, 7, 4),
(225, 7, 65),
(226, 7, 66),
(227, 7, 16),
(228, 7, 67),
(229, 7, 68);

-- --------------------------------------------------------

--
-- Stand-in structure for view `filter_symptoms`
-- (See below for the actual view)
--
CREATE TABLE `filter_symptoms` (
`disease_name` varchar(255)
,`symptom_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptom_id` int(11) NOT NULL,
  `symptom_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptom_id`, `symptom_name`) VALUES
(1, 'pain chest'),
(2, 'shortness of breath'),
(3, 'dizziness'),
(4, 'asthenia'),
(5, 'fall'),
(6, 'syncope'),
(7, 'vertigo'),
(8, 'sweat'),
(9, 'palpitation'),
(10, 'nausea'),
(11, 'angina pectoris'),
(12, 'pressure chest'),
(13, 'polyuria'),
(14, 'polydypsia'),
(15, 'rale'),
(16, 'unresponsiveness'),
(17, 'mental status changes'),
(18, 'vomiting'),
(19, 'labored breathing'),
(20, 'feeling suicidal'),
(21, 'suicidal'),
(22, 'hallucinations auditory'),
(23, 'feeling hopeless'),
(24, 'weepiness'),
(25, 'sleeplessness'),
(26, 'orthopnea\r\n'),
(27, 'sweating increased\r\n'),
(28, 'motor retardation\r\n'),
(29, 'irritable mood\r\n'),
(30, 'blackout\r\n'),
(31, 'mood depressed\r\n'),
(32, 'hallucinations visual\r\n'),
(33, 'worry\r\n'),
(34, 'agitation\r\n'),
(35, 'tremor\r\n'),
(36, 'intoxication\r\n'),
(37, 'verbal auditory hallucinations\r\n'),
(38, 'energy increased\r\n'),
(39, 'nightmare\r\n'),
(40, 'unable to concentrate\r\n'),
(41, 'homelessness\r\n'),
(42, 'hypokinesia\r\n'),
(43, 'dyspnea on exertion\r\n'),
(44, 'chest tightness\r\n'),
(45, 'cough\r\n'),
(46, 'fever\r\n'),
(47, 'decreased translucency\r\n'),
(48, 'productive cough\r\n'),
(49, 'pleuritic pain\r\n'),
(50, 'yellow sputum\r\n'),
(51, 'breath sounds decreased\r\n'),
(52, 'chill\r\n'),
(53, 'rhonchus\r\n'),
(54, 'green sputum\r\n'),
(55, 'non-productive cough\r\n'),
(56, 'wheezing\r\n'),
(57, 'haemoptysis\r\n'),
(58, 'distress respiratory\r\n'),
(59, 'tachypnea\r\n'),
(60, 'malaise\r\n'),
(61, 'night sweat\r\n'),
(62, 'jugular venous distention\r\n'),
(63, 'dysarthria\r\n'),
(64, 'speech slurred\r\n'),
(65, 'facial paresis\r\n'),
(66, 'hemiplegia\r\n'),
(67, 'seizure\r\n'),
(68, 'numbness\r\n'),
(69, 'symptom aggravating factors\r\n'),
(164, 'difficulty\r\n'),
(261, 'st segment elevation\r\n'),
(268, 't wave inverted\r\n'),
(302, 'presence of q wave\r\n'),
(306, 'bradycardia\r\n'),
(311, 'nonsmoker\r\n'),
(323, 'erythema\r\n'),
(325, 'hepatosplenomegaly\r\n'),
(327, 'pruritus\r\n'),
(328, 'diarrhea\r\n'),
(329, 'abscess bacterial\r\n'),
(330, 'swelling\r\n'),
(332, 'apyrexial\r\n'),
(335, 'dysuria\r\n'),
(336, 'hematuria\r\n'),
(337, 'renal angle tenderness\r\n'),
(338, 'lethargy\r\n'),
(340, 'hyponatremia\r\n'),
(381, 'hemodynamically stable\r\n'),
(383, 'difficulty passing urine\r\n'),
(385, 'consciousness clear\r\n'),
(387, 'guaiac positive\r\n'),
(388, 'monoclonal\r\n'),
(389, 'ecchymosis\r\n'),
(390, 'tumor cell invasion\r\n'),
(392, 'pallor\r\n'),
(394, 'fatigue\r\n'),
(395, 'heme positive\r\n'),
(396, 'pain back\r\n'),
(405, 'transaminitis\r\n'),
(411, 'sputum purulent\r\n'),
(412, 'hypoxemia\r\n'),
(413, 'hypercapnia\r\n'),
(414, 'patient non compliance\r\n'),
(464, 'unconscious state\r\n'),
(466, 'bedridden'),
(469, 'abdominal tenderness\r\n'),
(471, 'unsteady gait\r\n'),
(474, 'hyperkalemia\r\n'),
(477, 'urgency of micturition\r\n'),
(478, 'ascites\r\n'),
(486, 'hypotension\r\n'),
(491, 'enuresis\r\n'),
(497, 'asterixis\r\n'),
(500, 'muscle twitch\r\n'),
(509, 'abdominal tenderness\r\n'),
(542, 'sleepy\r\n'),
(544, 'headache\r\n'),
(546, 'lightheadedness\r\n'),
(552, 'numbness of hand\r\n'),
(554, 'drowsiness\r\n'),
(559, 'stiffness\r\n'),
(562, 'prostatism\r\n'),
(581, 'food intolerance\r\n'),
(592, 'prostatism\r\n'),
(607, 'has religious belief\r\n'),
(608, 'nervousness\r\n'),
(610, 'formication\r\n'),
(618, 'hot flush\r\n'),
(623, 'mass of body structure\r\n'),
(624, 'lesion\r\n'),
(625, 'cushingoid facies'),
(626, 'emphysematous change\r\n'),
(627, 'decreased body weight\r\n'),
(629, 'hoarseness\r\n'),
(630, 'thicken\r\n'),
(634, 'spontaneous rupture of membranes\r\n'),
(666, 'emphysematous change\r\n'),
(683, 'muscle hypotonia'),
(688, 'redness\r\n'),
(692, 'hypesthesia\r\n'),
(693, 'hyperacusis\r\n'),
(696, 'scratch marks\r\n'),
(698, 'sore to touch\r\n'),
(701, 'burning sensation\r\n'),
(702, 'satiety early\r\n'),
(703, 'throbbing sensation quality\r\n'),
(705, 'sensory discomfort\r\n'),
(709, 'constipation\r\n'),
(711, 'pain abdominal\r\n'),
(732, 'hypesthesia\r\n'),
(752, 'heartburn\r\n'),
(763, 'cyanosis\r\n'),
(773, 'pain in lower limb\r\n'),
(774, 'cardiomegaly\r\n'),
(778, 'clonus\r\n'),
(786, 'lightheadedness\r\n'),
(787, 'unwell\r\n'),
(789, 'anorexia\r\n'),
(794, 'dizziness\r\n'),
(795, 'history of - blackout\r\n'),
(802, 'breech presentation\r\n'),
(834, 'dizziness\r\n'),
(842, 'anosmia\r\n'),
(848, 'hemianopsia homonymous\r\n'),
(853, 'hypoxemia\r\n'),
(859, 'neck stiffness\r\n'),
(862, 'cicatrisation\r\n'),
(869, 'hypometabolism\r\n'),
(870, 'aura\r\n'),
(877, 'gurgle\r\n'),
(880, 'Uwheelchair bound\r\n'),
(884, 'metastatic lesion\r\n'),
(893, 'hypoxemia\r\n'),
(895, 'hematocrit decreased\r\n'),
(932, 'left atrial hypertrophy\r\n'),
(934, 'weight gain\r\n'),
(939, 'oliguria\r\n'),
(955, 'catatonia\r\n'),
(1003, 'decreased body weight\r\n'),
(1009, 'unhappy\r\n'),
(1010, 'paresthesia\r\n'),
(1011, 'gravida 0\r\n'),
(1016, 'lung nodule\r\n'),
(1018, 'distended abdomen\r\n'),
(1022, 'macerated skin\r\n'),
(1033, 'sinus rhythm\r\n'),
(1045, 'general discomfort\r\n'),
(1061, 'ache\r\n'),
(1069, 'rest pain\r\n'),
(1072, 'hyperkalemia\r\n'),
(1095, 'withdraw\r\n'),
(1099, 'behavior hyperactive\r\n'),
(1102, 'terrify\r\n'),
(1109, 'photopsia\r\n'),
(1113, 'giddy mood\r\n'),
(1116, 'dizziness\r\n'),
(1142, 'terrify\r\n'),
(1156, 'dizziness\r\n'),
(1163, 'disturbed family\r\n'),
(1172, 'hypersomnia\r\n'),
(1175, 'hyperhidrosis disorder\r\n'),
(1176, 'mydriasis\r\n'),
(1178, 'loose associations\r\n'),
(1184, 'exhaustion\r\n'),
(1187, 'snore\r\n'),
(1189, 'r wave feature\r\n'),
(1193, 'overweight\r\n'),
(1194, 'systolic murmur\r\n'),
(1197, 'drowsiness\r\n'),
(1212, 'hypersomnia\r\n'),
(1217, 'extrapyramidal sign\r\n'),
(1227, 'snore\r\n'),
(1243, 'splenomegaly\r\n'),
(1246, 'tumor cell invasion\r\n'),
(1250, 'guaiac positive\r\n'),
(1255, 'macule\r\n'),
(1263, 'photophobia\r\n'),
(1267, 'painful swallowing\r\n'),
(1269, 'cachexia\r\n'),
(1271, 'orthostasis\r\n'),
(1277, 'hypotension\r\n'),
(1278, 'hypocalcemia result\r\n'),
(1283, 'splenomegaly\r\n'),
(1286, 'tumor cell invasion\r\n'),
(1288, 'lesion\r\n'),
(1290, 'guaiac positive\r\n'),
(1292, 'bleeding of vagina\r\n'),
(1296, 'lesion\r\n'),
(1300, 'arthralgia\r\n'),
(1317, 'hypotension\r\n'),
(1318, 'hypocalcemia result\r\n'),
(1322, 'hypothermia, natural\r\n'),
(1328, 'asymptomatic\r\n'),
(1337, 'pain\r\n'),
(1339, 'chest discomfort\r\n'),
(1346, 'atypia\r\n'),
(1376, 'general unsteadiness\r\n');

-- --------------------------------------------------------

--
-- Structure for view `filter_symptoms`
--
DROP TABLE IF EXISTS `filter_symptoms`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `filter_symptoms`  AS  select `disease`.`disease_name` AS `disease_name`,`symptoms`.`symptom_name` AS `symptom_name` from ((`disease` join `disease_symptoms` on((`disease_symptoms`.`disease_id` = `disease`.`disease_id`))) join `symptoms` on((`symptoms`.`symptom_id` = `disease_symptoms`.`symptom_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `disease_symptoms`
--
ALTER TABLE `disease_symptoms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `symptom_id` (`symptom_id`),
  ADD KEY `disease_id` (`disease_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
--
-- AUTO_INCREMENT for table `disease_symptoms`
--
ALTER TABLE `disease_symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `symptom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1377;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_symptoms`
--
ALTER TABLE `disease_symptoms`
  ADD CONSTRAINT `disease_symptoms_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `disease` (`disease_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disease_symptoms_ibfk_2` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`symptom_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
