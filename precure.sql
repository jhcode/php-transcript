-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2014 at 07:02 PM
-- Server version: 5.5.40
-- PHP Version: 5.4.35-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `precure`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE IF NOT EXISTS `diseases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `drug_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `treatment`, `drug_id`) VALUES
(1, 'Ebola', '2 antidote daily', 0),
(2, 'HIV', '5mg of Paracetamol, 4 times daily', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `legal_class` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `pharmacological_class` varchar(255) NOT NULL,
  `generic_description` varchar(255) NOT NULL,
  `indications` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `contraindications` varchar(255) NOT NULL,
  `precautions` varchar(255) NOT NULL,
  `interactions` varchar(255) NOT NULL,
  `adverse_reactions` varchar(255) NOT NULL,
  `how_supplied` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`id`, `name`, `legal_class`, `manufacturer`, `pharmacological_class`, `generic_description`, `indications`, `children`, `contraindications`, `precautions`, `interactions`, `adverse_reactions`, `how_supplied`) VALUES
(1, 'Chloroquine Phosphate', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(2, 'Tetracycline', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(3, 'Ampicillin', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(4, 'Diclophenac', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(5, 'Omega H3', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(6, 'Ferrus', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(7, 'Emtrim', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(8, 'Gellucil', 'Rx', 'Sanfi Avetis', 'Magnesium Trisillicate', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(9, 'Piritin', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(10, 'Ampiclox', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(11, 'Paracetamol', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(12, 'Cough Syrup', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(13, 'Septrin', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(14, 'Phenophthalene', 'Rx', 'Sanfi Avetis', 'Aminoquinoline', 'An anti-malaria drug', 'Suppression and treatment of malaria', '8.35mg/kg once every 7 days', 'Retinal or visual field changes', 'Avoid overdose', 'Avoid cimetidine separate ampicilin dose by 2hours; dosing of antacids. Caution with heptatotoxic drugs', 'Retinopath, body itches, pruritus, photosensitivity, GI or CNS disturbances (seizures, psychosis, tinnitus), neuromyopaty, cardiomyopathy', 'twice in a month'),
(21, 'Gentamicin', 'Rx', 'Dana', 'Rithromoxicillin', '', 'pains in the skull', '10 times a day', 'Bfyve', 'avoid from the reach of old people', 'Nzwab', 'Etffx', 'Kfgjj'),
(22, 'Gentamicin', 'Rx', 'Dana', 'Rithromoxicillin', '', 'pains in the skull', '10 times a day', 'Bfyve', 'avoid from the reach of old people', 'Nzwab', 'Etffx', 'Kfgjj');

-- --------------------------------------------------------

--
-- Table structure for table `drug_odds`
--

CREATE TABLE IF NOT EXISTS `drug_odds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `drug1` int(11) NOT NULL,
  `drug2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(30) NOT NULL,
  `title` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `genotype` varchar(10) NOT NULL,
  `kin_name` varchar(255) NOT NULL,
  `kin_address` varchar(255) NOT NULL,
  `kin_relationship` varchar(40) NOT NULL,
  `kin_age` int(11) NOT NULL,
  `kin_gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `registration_no`, `title`, `user_id`, `date_of_birth`, `allergies`, `blood_group`, `genotype`, `kin_name`, `kin_address`, `kin_relationship`, `kin_age`, `kin_gender`) VALUES
(1, '001', 'Mr', 4, '1978-12-07 00:00:00', 'Chloroquine causes itches, Furry animals', 'O+', 'AA', 'Ajasa Otunba', '', '', 0, ''),
(2, '002', 'Mr', 6, '', 'Chloroquine causes itches, Furry animals', 'B+', 'AS', 'Jamie Lannister', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rx`
--

CREATE TABLE IF NOT EXISTS `rx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `prescription_id` varchar(30) NOT NULL,
  `patient_id` varchar(30) NOT NULL,
  `patient_generic_information` varchar(100) NOT NULL,
  `prescriber_id` varchar(30) NOT NULL,
  `pharmacist_id` varchar(30) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `dosage` varchar(30) NOT NULL,
  `start_date` datetime NOT NULL,
  `refill_date` datetime NOT NULL,
  `note` text,
  `validity` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rx`
--

INSERT INTO `rx` (`id`, `date_created`, `prescription_id`, `patient_id`, `patient_generic_information`, `prescriber_id`, `pharmacist_id`, `disease_id`, `drug_id`, `quantity`, `dosage`, `start_date`, `refill_date`, `note`, `validity`) VALUES
(1, '2014-11-19 22:07:42', '', '4', 'Height: 150cm, Weight: 200 LBS', '3', '2', 1, 2, '2 capsules', 'morning and night', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'keep out of reach of children', ''),
(2, '2014-11-19 22:07:42', '', '4', 'Height: 150cm, Weight: 200 LBS', '3', '4', 2, 7, '2 capsules', 'morning and night', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'keep out of reach of children', ''),
(3, '0000-00-00 00:00:00', '', '6', '', '3', '', 1, 1, '500 mg', 'twice daily', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, ''),
(4, '2014-11-20 05:18:22', '', '6', '', '3', '', 2, 13, '200 mg', 'once daily', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, ''),
(5, '2014-11-20 05:27:22', '', '4', '', '3', '', 1, 6, '4 ml', 'once a week', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(15) NOT NULL,
  `position` varchar(255) NOT NULL,
  `title` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `registration_no`, `position`, `title`, `user_id`, `date_of_birth`, `marital_status`, `phone`, `address`) VALUES
(1, '', 'Doctor', 'Dr.', 3, '1978-12-07 00:00:00', 'single', '', ''),
(2, '', 'Pharmacist', 'Mrs', 2, '1978-12-07 00:00:00', 'married', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `phone`, `gender`, `joined`, `password`) VALUES
(1, 'Glory Umeham', 'admin', 'admin@precure.com', '', 'female', '2014-11-17 23:35:04', '$2y$10$zcVTdqr5KNdajSzwL9e/8.XewH89UKagkFeLQh8NL.Ly.iHLLlnhS'),
(2, 'Glory Umeham', 'pharmacist', 'glory@precure.com', '', 'female', '2014-11-18 05:00:51', '$2y$10$odn.znZK0/kGxAhoh.5o/.mS6dZVXTpfuXfG3CqSNRR7Saq98HHa2'),
(3, 'Kurt Cobain', 'pediatrist', 'pediatrist@precure.com', '', 'male', '2014-11-18 09:39:05', '$2y$10$VJv6Raw4Nln.8RcZUzIl/OSEs4YCZWGB.7/EFaZkQETyDNtpyNf2G'),
(4, 'Otunba Aderongbe', 'patient', 'otunbaking@yahoo.com', '', 'male', '2014-11-18 09:44:13', '$2y$10$9e0MtYaJJ61P8iy5s2vsGelKDdEpKORVtkX1RfnzNsBvelmbVJIGi'),
(5, 'Goodluck Jonathan', 'ministry', 'goodbutbad@mail.com', '', 'male', '2014-11-18 09:46:21', '$2y$10$dFDeAVIAa4hTIhQ6Ufme3eLCLO1nr95dFt3zVHvpnAQSB1M7hjijm'),
(6, 'Adam Smith', 'patient', 'asmit@aol.com', '', 'male', '2014-11-19 15:09:19', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
