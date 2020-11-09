-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2020 at 09:11 AM
-- Server version: 5.5.60-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Nowcast`
--

-- --------------------------------------------------------

--
-- Table structure for table `Districtwise_Nowcast_Mapping`
--

CREATE TABLE `Districtwise_Nowcast_Mapping` (
  `MC_RMC` varchar(30) NOT NULL DEFAULT '',
  `District` varchar(50) NOT NULL DEFAULT '',
  `Data` varchar(39) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Districtwise_Nowcast_Mapping`
--

INSERT INTO `Districtwise_Nowcast_Mapping` (`MC_RMC`, `District`, `Data`) VALUES
('rmc_kolkata', 'NICOBAR', ''),
('rmc_kolkata', 'NORTH & MIDDLE ANDAMAN', ''),
('rmc_kolkata', 'SOUTH ANDAMAN', ''),
('rmc_guwahati', 'ANJAW', ''),
('rmc_guwahati', 'CHANGLANG', ''),
('rmc_guwahati', 'DIBANG VALLEY', ''),
('rmc_guwahati', 'EAST KAMENG', ''),
('rmc_guwahati', 'EAST SIANG', ''),
('rmc_guwahati', 'KURUNG KUMEY', ''),
('rmc_guwahati', 'LOHIT', ''),
('rmc_guwahati', 'LOWER DIBANG VALLEY', ''),
('rmc_guwahati', 'PAPUMPARA', ''),
('rmc_guwahati', 'LOWER SUBANSIRI', ''),
('rmc_guwahati', 'TAWANG', ''),
('rmc_guwahati', 'TIRAP', ''),
('rmc_guwahati', 'UPPER SIANG', ''),
('rmc_guwahati', 'UPPER SUBANSIRI', ''),
('rmc_guwahati', 'WEST KAMENG', ''),
('rmc_guwahati', 'WEST SIANG', ''),
('rmc_guwahati', 'BAKSA', ''),
('rmc_guwahati', 'BARPETA', ''),
('rmc_guwahati', 'BONGAIGAON', ''),
('rmc_guwahati', 'CACHAR', ''),
('rmc_guwahati', 'CHIRANG', ''),
('rmc_guwahati', 'DARRANG', ''),
('rmc_guwahati', 'DHEMAJI', ''),
('rmc_guwahati', 'DHUBRI', ''),
('rmc_guwahati', 'DIBRUGARH', ''),
('rmc_guwahati', 'GOALPARA', ''),
('rmc_guwahati', 'GOLAGHAT', ''),
('rmc_guwahati', 'HAILAKANDI', ''),
('rmc_guwahati', 'JORHAT', ''),
('rmc_guwahati', 'KAMRUP METRO', ''),
('rmc_guwahati', 'KAMRUP RURAL', ''),
('rmc_guwahati', 'KARBI ANALOG', ''),
('rmc_guwahati', 'KARIMGANJ', ''),
('rmc_guwahati', 'KOKRAJHAR', ''),
('rmc_guwahati', 'LAKHIMPUR', ''),
('rmc_guwahati', 'MORIGAON', ''),
('rmc_guwahati', 'DIMA HASAO', ''),
('rmc_guwahati', 'NAGAON', ''),
('rmc_guwahati', 'NALBARI', ''),
('rmc_guwahati', 'SIBSAGAR', ''),
('rmc_guwahati', 'SONITPUR', ''),
('rmc_guwahati', 'TINSUKIA', ''),
('rmc_guwahati', 'UDALGURI', ''),
('rmc_guwahati', 'EAST GARO HILLS', ''),
('rmc_guwahati', 'EAST KHASI HILLS', ''),
('rmc_guwahati', 'JAINTIA HILLS', ''),
('rmc_guwahati', 'RI BHOI', ''),
('rmc_guwahati', 'SOUTH GARO HILLS', ''),
('rmc_guwahati', 'WEST GARO HILLS', ''),
('rmc_guwahati', 'WEST KHASI HILLS', ''),
('rmc_guwahati', 'DIMAPUR', ''),
('rmc_guwahati', 'KIPHIRE', ''),
('rmc_guwahati', 'KOHIMA', ''),
('rmc_guwahati', 'LONGLENG', ''),
('rmc_guwahati', 'MOKOKCHUNG', ''),
('rmc_guwahati', 'MON', ''),
('rmc_guwahati', 'PEREN', ''),
('rmc_guwahati', 'PHEK', ''),
('rmc_guwahati', 'TUENSANG', ''),
('rmc_guwahati', 'WOKHA', ''),
('rmc_guwahati', 'ZUNHEBOTO', ''),
('rmc_guwahati', 'BISHNUPUR', ''),
('rmc_guwahati', 'CHURACHANDPUR', ''),
('rmc_guwahati', 'CHANDEL', ''),
('rmc_guwahati', 'IMPHAL EAST', ''),
('rmc_guwahati', 'IMPHAL WEST', ''),
('rmc_guwahati', 'SENAPATI', ''),
('rmc_guwahati', 'TAMENGLONG', ''),
('rmc_guwahati', 'THOUBAL', ''),
('rmc_guwahati', 'UKHRUL', ''),
('rmc_guwahati', 'AIZAWL', ''),
('rmc_guwahati', 'CHHIMTUIPUI ', ''),
('rmc_guwahati', 'CHAMPHAI', ''),
('rmc_guwahati', 'KOLASIB', ''),
('rmc_guwahati', 'LAWNGTLAI', ''),
('rmc_guwahati', 'LUNGLEI', ''),
('rmc_guwahati', 'MAMIT', ''),
('rmc_guwahati', 'SAIHA', ''),
('rmc_guwahati', 'SERCHHIP', ''),
('mc_agartala', 'DHALAI', ''),
('mc_agartala', 'NORTH TRIPURA', ''),
('mc_agartala', 'SOUTH TRIPURA', ''),
('mc_agartala', 'WEST TRIPURA', ''),
('mc_gangtok', 'EAST SIKKIM', ''),
('mc_gangtok', 'NORTH SIKKIM', ''),
('mc_gangtok', 'SOUTH SIKKIM', ''),
('mc_gangtok', 'WEST SIKKIM', ''),
('rmc_kolkata', 'DAKSHIN DINAJPUR                                  ', ''),
('rmc_kolkata', 'DARJEELING                                        ', ''),
('rmc_kolkata', 'JALPAIGURI', ''),
('rmc_kolkata', 'KOCHBIHAR ', ''),
('rmc_kolkata', 'MALDA', ''),
('rmc_kolkata', 'UTTAR_DINAJPUR', ''),
('rmc_kolkata', 'BANKURA', ''),
('rmc_kolkata', 'BARDAMAN', ''),
('rmc_kolkata', 'BIRBHUM', ''),
('rmc_kolkata', 'EASTMEDNIPUR                                      ', ''),
('rmc_kolkata', 'HAORA                                             ', ''),
('rmc_kolkata', 'HUGLI', ''),
('rmc_kolkata', 'KOLKATA                                           ', ''),
('rmc_kolkata', 'MURSHIDABAD', ''),
('rmc_kolkata', 'NADIA', ''),
('rmc_kolkata', 'NORTH 24 PRAGANA                                  ', ''),
('rmc_kolkata', 'PASHCHIM MEDINIPUR                                ', ''),
('rmc_kolkata', 'PURULIYA', ''),
('rmc_kolkata', 'SOUTH 24 PARGANAS  ', ''),
('mc_bhubneshwar', 'ANUGUL', ''),
('mc_bhubneshwar', 'BALANGIR', ''),
('mc_bhubneshwar', 'BALESHWAR      ', ''),
('mc_bhubneshwar', 'BARAGARH', ''),
('mc_bhubneshwar', 'BAUDA', ''),
('mc_bhubneshwar', 'BHADRAK', ''),
('mc_bhubneshwar', 'CUTTACK', ''),
('mc_bhubneshwar', 'DEOGARH', ''),
('mc_bhubneshwar', 'DHENKANAL ', ''),
('mc_bhubneshwar', 'GAJAPATHI', ''),
('mc_bhubneshwar', 'GANJAM', ''),
('mc_bhubneshwar', 'JAGATSINGHPUR ', ''),
('mc_bhubneshwar', 'JAJAPUR', ''),
('mc_bhubneshwar', 'JHARSUGUDA', ''),
('mc_bhubneshwar', 'KALAHANDI', ''),
('mc_bhubneshwar', 'KANDHAMAL', ''),
('mc_bhubneshwar', 'KENDRAPARHA', ''),
('mc_bhubneshwar', 'KENDUJHAR', ''),
('mc_bhubneshwar', 'KHORDHA', ''),
('mc_bhubneshwar', 'KORAPUT', ''),
('mc_bhubneshwar', 'MALKANGIRI', ''),
('mc_bhubneshwar', 'MAYURBHANJ', ''),
('mc_bhubneshwar', 'NABARANGAPUR                                      ', ''),
('mc_bhubneshwar', 'NAYAGARH                                          ', ''),
('mc_bhubneshwar', 'NUAPARHA                                          ', ''),
('mc_bhubneshwar', 'PURI', ''),
('mc_bhubneshwar', 'RAYAGARHA', ''),
('mc_bhubneshwar', 'SAMBALPUR', ''),
('mc_bhubneshwar', 'SUBARNAPUR', ''),
('mc_bhubneshwar', 'SUNDARGARH', ''),
('mc_ranchi', 'BOKARO', ''),
('mc_ranchi', 'CHATRA', ''),
('mc_ranchi', 'DEVGARH', ''),
('mc_ranchi', 'DHANBAD', ''),
('mc_ranchi', 'DUMKA', ''),
('mc_ranchi', 'GARHWA', ''),
('mc_ranchi', 'GIRIDIH', ''),
('mc_ranchi', 'GOODA', ''),
('mc_ranchi', 'GUMLA', ''),
('mc_ranchi', 'HAZARIBAGH', ''),
('mc_ranchi', 'JAMTARA', ''),
('mc_ranchi', 'KHUNTI', ''),
('mc_ranchi', 'KODARMA', ''),
('mc_ranchi', 'LATEHAR', ''),
('mc_ranchi', 'LOHARDAGA', ''),
('mc_ranchi', 'PAKUR', ''),
('mc_ranchi', 'PALAMU', ''),
('mc_ranchi', 'PASCHIM SINGHBHUMI                                ', ''),
('mc_ranchi', 'PURBI SINGBHUMI                                   ', ''),
('mc_ranchi', 'RAMGARH', ''),
('mc_ranchi', 'RANCHI', ''),
('mc_ranchi', 'SAHEBGANJ', ''),
('mc_ranchi', 'SARAIKELA ', ''),
('mc_ranchi', 'SIMDEGA', ''),
('mc_patna', 'ARARIYA', ''),
('mc_patna', 'ARWAL', ''),
('mc_patna', 'AURANGABAD', ''),
('mc_patna', 'BANKA', ''),
('mc_patna', 'BEGUSARAI', ''),
('mc_patna', 'BHABUA', ''),
('mc_patna', 'BHAGALPUR', ''),
('mc_patna', 'BHOJPUR', ''),
('mc_patna', 'BUXAR', ''),
('mc_patna', 'DARBHANGA', ''),
('mc_patna', 'GAYA', ''),
('mc_patna', 'GOPALGANJ', ''),
('mc_patna', 'JAHANABAD', ''),
('mc_patna', 'JAMUI', ''),
('mc_patna', 'KATIHAR', ''),
('mc_patna', 'KHAGARIA', ''),
('mc_patna', 'KISHANGANJ', ''),
('mc_patna', 'LAKHISARAI', ''),
('mc_patna', 'MADHEPURA', ''),
('mc_patna', 'MADUBANI', ''),
('mc_patna', 'MUNGER', ''),
('mc_patna', 'MUZAFFARPUR', ''),
('mc_patna', 'NALANDA', ''),
('mc_patna', 'NAWADA', ''),
('mc_patna', 'PACHIM CHAMPARAN', ''),
('mc_patna', 'PATNA', ''),
('mc_patna', 'PURBA CHAMPARAN  ', ''),
('mc_patna', 'PURNIA', ''),
('mc_patna', 'ROHTAS', ''),
('mc_patna', 'SAHARSA', ''),
('mc_patna', 'SAMASTIPUR', ''),
('mc_patna', 'SARAN', ''),
('mc_patna', 'SHEIKHPURA', ''),
('mc_patna', 'SHEOHAR', ''),
('mc_patna', 'SITAMARHI', ''),
('mc_patna', 'SIWAN', ''),
('mc_patna', 'SUPAUL', ''),
('mc_patna', 'VAISHALI', ''),
('mc_lucknow', 'ALLAHABAD', ''),
('mc_lucknow', 'AMBEDKARNAGAR', ''),
('mc_lucknow', 'AMETHI', ''),
('mc_lucknow', 'AZAMGARH', ''),
('mc_lucknow', 'BAHRAICH', ''),
('mc_lucknow', 'BALLIA', ''),
('mc_lucknow', 'BALRAMPUR', ''),
('mc_lucknow', 'BANDA', ''),
('mc_lucknow', 'BARABANKI', ''),
('mc_lucknow', 'BASTI', ''),
('mc_lucknow', 'CHANDAULI', ''),
('mc_lucknow', 'CHITRAKOOT', ''),
('mc_lucknow', 'DEORIA', ''),
('mc_lucknow', 'FAIZABAD', ''),
('mc_lucknow', 'FARRUKHABAD', ''),
('mc_lucknow', 'FATEHPUR', ''),
('mc_lucknow', 'GAZIPUR', ''),
('mc_lucknow', 'GONDA', ''),
('mc_lucknow', 'GORAKHPUR', ''),
('mc_lucknow', 'HARDOI', ''),
('mc_lucknow', 'JAUNPUR', ''),
('mc_lucknow', 'KANNAUJ', ''),
('mc_lucknow', 'KANPUR', ''),
('mc_lucknow', 'KANPUR DEHAT', ''),
('mc_lucknow', 'KAUSHAMBI', ''),
('mc_lucknow', 'KHERI', ''),
('mc_lucknow', 'KUSHINAGAR', ''),
('mc_lucknow', 'LUCKNOW', ''),
('mc_lucknow', 'MAHARAJGANJ', ''),
('mc_lucknow', 'MAU', ''),
('mc_lucknow', 'MIRZAPUR', ''),
('mc_lucknow', 'PRATAPGARH', ''),
('mc_lucknow', 'RAIBEARELI  ', ''),
('mc_lucknow', 'SANTKABIRNAGAR', ''),
('mc_lucknow', 'SANTRAVIDASNAGAR', ''),
('mc_lucknow', 'SHRAWASTI ', ''),
('mc_lucknow', 'SIDDHARTHNAGAR', ''),
('mc_lucknow', 'SITAPUR', ''),
('mc_lucknow', 'SONBHADRA', ''),
('mc_lucknow', 'SULTANPUR', ''),
('mc_lucknow', 'UNNAO', ''),
('mc_lucknow', 'VARANASI', ''),
('mc_lucknow', 'AGRA', ''),
('mc_lucknow', 'ALIGARH', ''),
('mc_lucknow', 'AURAIYA', ''),
('mc_lucknow', 'BADAUN', ''),
('mc_lucknow', 'BAGHPAT', ''),
('mc_lucknow', 'BAREILLY', ''),
('mc_lucknow', 'BIJNOR', ''),
('mc_lucknow', 'BULANDSAHAR', ''),
('mc_lucknow', 'ETAH', ''),
('mc_lucknow', 'ETAWAH', ''),
('mc_lucknow', 'FIROZABAD', ''),
('mc_lucknow', 'GAUTAMBUDHNAGAR', ''),
('mc_lucknow', 'GHAZIABAD', ''),
('mc_lucknow', 'HAMIRPUR', ''),
('mc_lucknow', 'JALAUN', ''),
('mc_lucknow', 'JHANSI', ''),
('mc_lucknow', 'JYOTIBAPHULE NAGAR', ''),
('mc_lucknow', 'KANSHIRAMNAGAR', ''),
('mc_lucknow', 'LALITPUR', ''),
('mc_lucknow', 'MAHAMAYANAGAR', ''),
('mc_lucknow', 'MAHOBA', ''),
('mc_lucknow', 'MAINPURI', ''),
('mc_lucknow', 'MATHURA', ''),
('mc_lucknow', 'MEERUT', ''),
('mc_lucknow', 'MORADABAD', ''),
('mc_lucknow', 'MUZAFARNAGAR', ''),
('mc_lucknow', 'PILHIBHIT', ''),
('mc_lucknow', 'RAMPUR', ''),
('mc_lucknow', 'SHAHJAHANPUR', ''),
('mc_lucknow', 'SHARANPUR  ', ''),
('mc_dehradun', 'ALMORA', ''),
('mc_dehradun', 'BAGESHWAR', ''),
('mc_dehradun', 'CHAMOLI', ''),
('mc_dehradun', 'CHAMPAWAT', ''),
('mc_dehradun', 'DEHRADUN', ''),
('mc_dehradun', 'HARIDWAR', ''),
('mc_dehradun', 'NANITAL', ''),
('mc_dehradun', 'PAURI GARHWAL', ''),
('mc_dehradun', 'PITHORAGARH', ''),
('mc_dehradun', 'RUDRAPRAYAG', ''),
('mc_dehradun', 'TEHRI GARWAL', ''),
('mc_dehradun', 'UDHAM SINGH NAGAR', ''),
('mc_dehradun', 'UTTARKASHI', ''),
('mc_chandigarh', 'AMBALA', ''),
('mc_chandigarh', 'BHIWANI', ''),
('mc_chandigarh', 'FARIDABAD', ''),
('mc_chandigarh', 'FATEHABAD', ''),
('mc_chandigarh', 'GURGAON', ''),
('mc_chandigarh', 'HISAR', ''),
('mc_chandigarh', 'JHAJJAR', ''),
('mc_chandigarh', 'JIND', ''),
('mc_chandigarh', 'KAITHAL', ''),
('mc_chandigarh', 'KARNAL', ''),
('mc_chandigarh', 'KURUKSHETRA', ''),
('mc_chandigarh', 'MAHENDRAGARH', ''),
('mc_chandigarh', 'MEWAT', ''),
('mc_chandigarh', 'PALWAL', ''),
('mc_chandigarh', 'PANCHKULA', ''),
('mc_chandigarh', 'PANIPAT', ''),
('mc_chandigarh', 'REWARI', ''),
('mc_chandigarh', 'ROHTAK', ''),
('mc_chandigarh', 'SIRSA', ''),
('mc_chandigarh', 'SONIPAT', ''),
('mc_chandigarh', 'YAMUNANAGAR', ''),
('mc_chandigarh', 'CHANDIGARH', ''),
('rmc_newdelhi', 'CENTRAL DELHI', ''),
('rmc_newdelhi', 'EAST DELHI', ''),
('rmc_newdelhi', 'NEW DELHI', ''),
('rmc_newdelhi', 'NORTH DELHI', ''),
('rmc_newdelhi', 'NORTH EAST DELHI', ''),
('rmc_newdelhi', 'NORTH WEST DELHI', ''),
('rmc_newdelhi', 'SOUTH DELHI', ''),
('rmc_newdelhi', 'SOUTH WEST DELHI', ''),
('rmc_newdelhi', 'WEST DELHI', ''),
('mc_chandigarh', 'AMRITSAR', ''),
('mc_chandigarh', 'BARNALA', ''),
('mc_chandigarh', 'BATHINDA', ''),
('mc_chandigarh', 'FARIDKOT', ''),
('mc_chandigarh', 'FATEHGARH SAHIB', ''),
('mc_chandigarh', 'FIROZPUR', ''),
('mc_chandigarh', 'GURDASPUR', ''),
('mc_chandigarh', 'HOSHIARPUR', ''),
('mc_chandigarh', 'JALANDHAR', ''),
('mc_chandigarh', 'KAPURTHALA', ''),
('mc_chandigarh', 'LUDHIANA', ''),
('mc_chandigarh', 'MANSA', ''),
('mc_chandigarh', 'MOGA', ''),
('mc_chandigarh', 'MUKTSAR', ''),
('mc_chandigarh', 'NAWASHAHR', ''),
('mc_chandigarh', 'PATIALA', ''),
('mc_chandigarh', 'RUPNAGAR', ''),
('mc_chandigarh', 'SANGRUR', ''),
('mc_chandigarh', 'SAS NAGAR', ''),
('mc_chandigarh', 'TARN TARAN', ''),
('mc_shimla', 'KULLU', NULL),
('mc_srinagar', 'ANANTNAG', ''),
('mc_srinagar', 'BADGAM                                            ', ''),
('mc_srinagar', 'BANDIPORE                                         ', ''),
('mc_srinagar', 'BARAMULA', ''),
('mc_srinagar', 'DODA                                              ', ''),
('mc_srinagar', 'GANDERWAL                                         ', ''),
('mc_srinagar', 'JAMMU', ''),
('mc_srinagar', 'KARGIL ', ''),
('mc_srinagar', 'KATHUA', ''),
('mc_srinagar', 'KISTWAR                                           ', ''),
('mc_srinagar', 'KULGAM                                            ', ''),
('mc_srinagar', 'KUPWARA                                           ', ''),
('mc_srinagar', 'LEH AND LADAKH                                    ', ''),
('mc_srinagar', 'PULWAMA                                           ', ''),
('mc_srinagar', 'PUNCH                                             ', ''),
('mc_srinagar', 'RAJOURI                                           ', ''),
('mc_srinagar', 'RAMBAN                                            ', ''),
('mc_srinagar', 'RIASI                                             ', ''),
('mc_srinagar', 'SAMBA                                             ', ''),
('mc_srinagar', 'SHOPIAN                                           ', ''),
('mc_srinagar', 'SRINAGAR                                          ', ''),
('mc_srinagar', 'UDHAMPUR', ''),
('mc_jaipur', 'BARMER', ''),
('mc_jaipur', 'BIKANER', ''),
('mc_jaipur', 'CHURU', ''),
('mc_jaipur', 'GANGANAGAR                                        ', ''),
('mc_jaipur', 'HANUMANGARH                                       ', ''),
('mc_jaipur', 'JAISELMER', ''),
('mc_jaipur', 'JALOR', ''),
('mc_jaipur', 'JODHPUR', ''),
('mc_jaipur', 'NAGAUR', ''),
('mc_jaipur', 'PALI', ''),
('mc_jaipur', 'AJMER', ''),
('mc_jaipur', 'ALWAR', ''),
('mc_jaipur', 'BANSWARA', ''),
('mc_jaipur', 'BARAN', ''),
('mc_jaipur', 'BHARATPUR', ''),
('mc_jaipur', 'BHILWARA', ''),
('mc_jaipur', 'BUNDI', ''),
('mc_jaipur', 'CHITTAURGARH', ''),
('mc_jaipur', 'DAUSA', ''),
('mc_jaipur', 'DHOLPUR', ''),
('mc_jaipur', 'DUNGARPUR', ''),
('mc_jaipur', 'JAIPUR', ''),
('mc_jaipur', 'JHALAWAR', ''),
('mc_jaipur', 'JHUNJHUNU', ''),
('mc_jaipur', 'KARAULI', ''),
('mc_jaipur', 'KOTA', ''),
('mc_jaipur', 'PRATAAPGARH', ''),
('mc_jaipur', 'RAJSMAND', ''),
('mc_jaipur', 'SIKAR', ''),
('mc_jaipur', 'SIROHI', ''),
('mc_jaipur', 'SWAIMADHOPUR', ''),
('mc_jaipur', 'TONK', ''),
('mc_jaipur', 'UDAIPUR', ''),
('mc_bhopal', 'AGAR-MALWA', ''),
('mc_bhopal', 'ALIRAJPUR', ''),
('mc_bhopal', 'ASHOKNAGAR', ''),
('mc_bhopal', 'BARWANI', ''),
('mc_bhopal', 'BETUL', ''),
('mc_bhopal', 'BHIND', ''),
('mc_bhopal', 'BHOPAL', ''),
('mc_bhopal', 'BURHANPUR', ''),
('mc_bhopal', 'DATIA', ''),
('mc_bhopal', 'DEWAS', ''),
('mc_bhopal', 'DHAR', ''),
('mc_bhopal', 'GUNA', ''),
('mc_bhopal', 'GWALIOR', ''),
('mc_bhopal', 'HARDA', ''),
('mc_bhopal', 'HOSHANGABAD', ''),
('mc_bhopal', 'INDORE', ''),
('mc_bhopal', 'JHABUA', ''),
('mc_bhopal', 'KHANDWA', ''),
('mc_bhopal', 'KHARGONE', ''),
('mc_bhopal', 'MANDSAUR', ''),
('mc_bhopal', 'MORENA', ''),
('mc_bhopal', 'NIMACH ', ''),
('mc_bhopal', 'RAISEN', ''),
('mc_bhopal', 'RAJGARH', ''),
('mc_bhopal', 'RATLAM', ''),
('mc_bhopal', 'SEHORE', ''),
('mc_bhopal', 'SHAJAPUR', ''),
('mc_bhopal', 'SHEOPUR', ''),
('mc_bhopal', 'SHIVPURI', ''),
('mc_bhopal', 'UJJAIN', ''),
('mc_bhopal', 'VIDESHA', ''),
('mc_bhopal', 'ANUPPUR', ''),
('mc_bhopal', 'BALAGHAT', ''),
('mc_bhopal', 'CHHATARPUR', ''),
('mc_bhopal', 'CHHINDWARA', ''),
('mc_bhopal', 'DAMOH', ''),
('mc_bhopal', 'DINDORI', ''),
('mc_bhopal', 'JABALPUR', ''),
('mc_bhopal', 'KATNI', ''),
('mc_bhopal', 'MANDLA', ''),
('mc_bhopal', 'NARSHIMAPURA', ''),
('mc_bhopal', 'PANNA', ''),
('mc_bhopal', 'REWA', ''),
('mc_bhopal', 'SAGAR', ''),
('mc_bhopal', 'SATNA', ''),
('mc_bhopal', 'SEONI', ''),
('mc_bhopal', 'SHAHDOL', ''),
('mc_bhopal', 'SIDHI', ''),
('mc_bhopal', 'SINGRAULI', ''),
('mc_bhopal', 'TIKAMGARH', ''),
('mc_bhopal', 'UMARIA', ''),
('mc_ahmedabad', 'DAMAN', ''),
('mc_ahmedabad', 'AHMADABAD', ''),
('mc_ahmedabad', 'ANAND', ''),
('mc_ahmedabad', 'ARAVALLI', ''),
('mc_ahmedabad', 'BANASKANTHA', ''),
('mc_ahmedabad', 'BHARUCH', ''),
('mc_ahmedabad', 'CHHOTA UDEPUR', ''),
('mc_ahmedabad', 'DAHOD', ''),
('mc_ahmedabad', 'DANGS', ''),
('mc_ahmedabad', 'GANDHINAGAR', ''),
('mc_ahmedabad', 'KHERA                                             ', ''),
('mc_ahmedabad', 'MAHESANA                                          ', ''),
('mc_ahmedabad', 'MAHISAGAR', ''),
('mc_ahmedabad', 'NARMADA', ''),
('mc_ahmedabad', 'NAVSARI', ''),
('mc_ahmedabad', 'PANCHMAHAL', ''),
('mc_ahmedabad', 'PATAN', ''),
('mc_ahmedabad', 'SABAR KANTHA', ''),
('mc_ahmedabad', 'SURAT', ''),
('mc_ahmedabad', 'TAPI', ''),
('mc_ahmedabad', 'VADODARA', ''),
('mc_ahmedabad', 'VALSAD', ''),
('mc_ahmedabad', 'AMRELI', ''),
('mc_ahmedabad', 'BHAVNAGAR', ''),
('mc_ahmedabad', 'BOTAD', ''),
('mc_ahmedabad', 'DEVBHOOMI DWARKA', ''),
('mc_ahmedabad', 'GIR SOMNATH', ''),
('mc_ahmedabad', 'JAMNAGAR', ''),
('mc_ahmedabad', 'JUNAGARH', ''),
('mc_ahmedabad', 'KACHCHH', ''),
('mc_ahmedabad', 'MORBI', ''),
('mc_ahmedabad', 'PORBANDAR', ''),
('mc_ahmedabad', 'RAJKOT', ''),
('mc_ahmedabad', 'SURENDRANAGAR', ''),
('mc_ahmedabad', 'DIU', ''),
('mc_goa', 'NORTH GOA', ''),
('mc_goa', 'SOUTH GOA', ''),
('rmc_mumbai', 'NANDED', NULL),
('rmc_mumbai', 'LATUR', NULL),
('rmc_mumbai', 'JALNA', NULL),
('rmc_mumbai', 'HINGOLI', NULL),
('rmc_mumbai', 'AURANGABAAD', NULL),
('rmc_mumbai', 'SANGLI', NULL),
('rmc_mumbai', 'PUNE', NULL),
('rmc_mumbai', 'AHMADNAGAR', NULL),
('rmc_mumbai', 'THANE', NULL),
('rmc_mumbai', 'PALGHAR', NULL),
('rmc_mumbai', 'MUMBAI CITY', NULL),
('rmc_nagpur', 'AKOLA', ''),
('rmc_nagpur', 'AMARAVATI', ''),
('rmc_nagpur', 'BHANDARA', ''),
('rmc_nagpur', 'BULDHANA', ''),
('rmc_nagpur', 'CHANDRAPUR', ''),
('rmc_nagpur', 'GADCHIROLI', ''),
('rmc_nagpur', 'GONDIYA', ''),
('rmc_nagpur', 'NAGPUR', ''),
('rmc_nagpur', 'WARDHA', ''),
('rmc_nagpur', 'WASHIM', ''),
('rmc_nagpur', 'YAVATMAL', '                                      '),
('mc_raipur', 'BALARAMPUR  ', ''),
('mc_raipur', 'BALOD', ''),
('mc_raipur', 'BALODA BAZAR', ''),
('mc_raipur', 'BASTAR', ''),
('mc_raipur', 'BEMETARA ', ''),
('mc_raipur', 'BIJAPUR', ''),
('mc_raipur', 'BILASPUR', ''),
('mc_raipur', 'DANTEWARA', ''),
('mc_raipur', 'DHAMTARI', ''),
('mc_raipur', 'DURG', ''),
('mc_raipur', 'GARIABAND                                         ', ''),
('mc_raipur', 'JANJGIR_CHAMPA                                    ', ''),
('mc_raipur', 'JASHPUR', ''),
('mc_raipur', 'KABIRDHAM', ''),
('mc_raipur', 'KANKER', ''),
('mc_raipur', 'KONDAGAON', ''),
('mc_raipur', 'KORBA', ''),
('mc_raipur', 'KOREA', ''),
('mc_raipur', 'MAHASAMUND', ''),
('mc_raipur', 'MUNGELI', ''),
('mc_raipur', 'NARAYANPUR', ''),
('mc_raipur', 'RAIGARH', ''),
('mc_raipur', 'RAIPUR', ''),
('mc_raipur', 'RAJNANDGAON', ''),
('mc_raipur', 'SUKMA', ''),
('mc_raipur', 'SURAJPUR', ''),
('mc_raipur', 'SURGUJA', ''),
('cwc_visakhapatanam', 'EAST GODAVARI', ''),
('cwc_visakhapatanam', 'GUNTUR', ''),
('cwc_visakhapatanam', 'KRISHNA', ''),
('cwc_visakhapatanam', 'NELLORE', ''),
('cwc_visakhapatanam', 'PRAKASAM', ''),
('cwc_visakhapatanam', 'SRIKAKULAM', ''),
('cwc_visakhapatanam', 'VISHAKHAPATNAM', ''),
('cwc_visakhapatanam', 'VIZIANAGARAM', ''),
('cwc_visakhapatanam', 'WEST GODAVARI', ''),
('mc_hyderabad', 'ADILABAD', ''),
('mc_hyderabad', 'B. KOTHAGUDEM', ''),
('mc_hyderabad', 'HYDERABAD', ''),
('mc_hyderabad', 'J. BHUPALPALLY', ''),
('mc_hyderabad', 'JAGTIAL', ''),
('mc_hyderabad', 'JANGAON', ''),
('mc_hyderabad', 'JOGULAMBA GADWAL', ''),
('mc_hyderabad', 'KAMAREDDY', ''),
('mc_hyderabad', 'KARIMNAGAR', ''),
('mc_hyderabad', 'KHAMMAM', ''),
('mc_hyderabad', 'KUMARAM BHEEM  ', ''),
('mc_hyderabad', 'M. MALKAJGIRI', ''),
('mc_hyderabad', 'MAHABUBABAD', ''),
('mc_hyderabad', 'MAHABUBNAGAR', ''),
('mc_hyderabad', 'MANCHERIAL', ''),
('mc_hyderabad', 'MEDAK', ''),
('mc_hyderabad', 'NAGARKURNOOL', ''),
('mc_hyderabad', 'NALGONDA', ''),
('mc_hyderabad', 'NIRMAL', ''),
('mc_hyderabad', 'NIZAMABAD', ''),
('mc_hyderabad', 'PEDDAPALLE', ''),
('mc_hyderabad', 'RAJANNA SIRCILLA', ''),
('mc_hyderabad', 'RANGAREDDY', ''),
('mc_hyderabad', 'SANGAREDDY', ''),
('mc_hyderabad', 'SIDDIPET', ''),
('mc_hyderabad', 'SURYAPET', ''),
('mc_hyderabad', 'VIKARABAD', ''),
('mc_hyderabad', 'WANAPARTHY', ''),
('mc_hyderabad', 'WARANGAL_RURAL', ''),
('mc_hyderabad', 'WARANGAL_URBAN', ''),
('mc_hyderabad', 'Y. BHUVANAGIRI', ''),
('cwc_visakhapatanam', 'ANANTHAPUR                                        ', ''),
('cwc_visakhapatanam', 'CHITTOOR                                          ', ''),
('cwc_visakhapatanam', 'CUDDAPAH                                          ', ''),
('cwc_visakhapatanam', 'KURNOOL', ''),
('rmc_chennai', 'ARIYALUR', ''),
('rmc_chennai', 'CHENNAI', ''),
('rmc_chennai', 'COIMBATORE', ''),
('rmc_chennai', 'CUDDALORE', ''),
('rmc_chennai', 'DHARAMPURI', ''),
('rmc_chennai', 'DINDIGUL', ''),
('rmc_chennai', 'ERODE', ''),
('rmc_chennai', 'KANCHIPURAM', ''),
('rmc_chennai', 'KANYAKUMARI', ''),
('rmc_chennai', 'KARUR', ''),
('rmc_chennai', 'KRISHNAGIRI', ''),
('rmc_chennai', 'MADURAI', ''),
('rmc_chennai', 'NAGAPATTINAM', ''),
('rmc_chennai', 'NAMAKKAL', ''),
('rmc_chennai', 'NILGIRI', ''),
('rmc_chennai', 'PERAMBALUR ', ''),
('rmc_chennai', 'PUDUKKOTTAI', ''),
('rmc_chennai', 'RAMANATHAPURAM', ''),
('rmc_chennai', 'SALEM', ''),
('rmc_chennai', 'SIVAGANGA', ''),
('rmc_chennai', 'TENI', ''),
('rmc_chennai', 'THANJAVUR', ''),
('rmc_chennai', 'THIRUVARUR', ''),
('rmc_chennai', 'TIRUCHIRAPPALLI', ''),
('rmc_chennai', 'TIRUNELVELI', ''),
('rmc_chennai', 'TIRUPPUR', ''),
('rmc_chennai', 'TIRUVALLUR', ''),
('rmc_chennai', 'TIRUVANNAMALAI', ''),
('rmc_chennai', 'TUTICORIN', ''),
('rmc_chennai', 'VELLORE', ''),
('rmc_chennai', 'VILLUPURAM', ''),
('rmc_chennai', 'VIRUDHUNAGAR', ''),
('rmc_chennai', 'KARAIKAL                                          ', ''),
('rmc_chennai', 'MAHE                                              ', ''),
('rmc_chennai', 'PUDUCHERY', ''),
('rmc_chennai', 'YANAM     ', ''),
('mc_bengaluru', 'TUMKUR', NULL),
('mc_bengaluru', 'SHIMOGA', NULL),
('mc_bengaluru', 'RAMNAGAR', NULL),
('mc_bengaluru', 'MANDHYA', NULL),
('mc_bengaluru', 'KOLAR', NULL),
('mc_bengaluru', 'KODAGU', NULL),
('mc_bengaluru', 'HASSAN', NULL),
('mc_bengaluru', 'DAVANGERE', NULL),
('mc_thiruvananthapuram', 'ALAPPUZHA', ''),
('mc_thiruvananthapuram', 'ERNAKULAM', ''),
('mc_thiruvananthapuram', 'IDUKKI', ''),
('mc_thiruvananthapuram', 'KANNUR', ''),
('mc_thiruvananthapuram', 'KASARAGODE', ''),
('mc_thiruvananthapuram', 'KOLLAM', ''),
('mc_thiruvananthapuram', 'KOTTYAM                                           ', ''),
('mc_thiruvananthapuram', 'KOZHIKODE', ''),
('mc_thiruvananthapuram', 'MALAPPURAM', ''),
('mc_thiruvananthapuram', 'PALAKKAD', ''),
('mc_thiruvananthapuram', 'PATHANAMTHITTA', ''),
('mc_thiruvananthapuram', 'THIRUVANANTHAPURAM', ''),
('mc_thiruvananthapuram', 'THRISSUR', ''),
('mc_thiruvananthapuram', 'WAYANAD', ''),
('mc_thiruvananthapuram', 'LAKSHADWEEP', ''),
('rmc_chennai', 'NAGAPATTINAAM', NULL),
('rmc_mumbai', 'PARBHANI', NULL),
('rmc_mumbai', 'OSMANABAD', NULL),
('rmc_mumbai', 'BID', NULL),
('rmc_mumbai', 'SOLAPUR', NULL),
('rmc_mumbai', 'SATARA', NULL),
('rmc_mumbai', 'NASIK', NULL),
('rmc_mumbai', 'NANDURBAR', NULL),
('rmc_mumbai', 'KOLHAPUR', NULL),
('rmc_mumbai', 'JALGAON', NULL),
('rmc_mumbai', 'DHULE', NULL),
('rmc_mumbai', 'SUBURBAN MUMBAI', NULL),
('rmc_mumbai', 'SINDHUDURG', NULL),
('rmc_mumbai', 'RATNAGIRI', NULL),
('rmc_mumbai', 'RAIGAD', NULL),
('mc_shimla', 'UNA', NULL),
('mc_shimla', 'SOLAN', NULL),
('mc_shimla', 'SIRMAUR', NULL),
('mc_shimla', 'SHIMLA', NULL),
('mc_shimla', 'MANDI', NULL),
('mc_shimla', 'LAHUL&SPITI', NULL),
('mc_shimla', 'KINNAUR', NULL),
('mc_shimla', 'KANGRA', NULL),
('mc_shimla', 'HAMIRPURR', NULL),
('mc_shimla', 'CHAMBA', NULL),
('mc_shimla', 'BILAASPUR', NULL),
('mc_bengaluru', 'MYSORE', NULL),
('mc_bengaluru', 'CHITRADURGA', NULL),
('mc_bengaluru', 'CHIKMAGALUR', NULL),
('mc_bengaluru', 'CHIKBALLAPUR', NULL),
('mc_bengaluru', 'CHAMARAJANAGAR', NULL),
('mc_bengaluru', 'BELLARY', NULL),
('mc_bengaluru', 'BANGLORE URBAN', NULL),
('mc_bengaluru', 'BANGLORE RURAL', NULL),
('mc_bengaluru', 'YADGIR', NULL),
('mc_bengaluru', 'RAICHUR', NULL),
('mc_bengaluru', 'KOPPAL', NULL),
('mc_bengaluru', 'HAVERI', NULL),
('mc_bengaluru', 'GULBARGA', NULL),
('mc_bengaluru', 'GADAG', NULL),
('mc_bengaluru', 'DHARWAD', NULL),
('mc_bengaluru', 'BIJAAPUR', NULL),
('mc_bengaluru', 'BIDAR', NULL),
('mc_bengaluru', 'BELGAUM', NULL),
('mc_bengaluru', 'BAGALKOT', NULL),
('mc_bengaluru', 'UTTAR KANNADA', NULL),
('mc_bengaluru', 'UDUPI', NULL),
('mc_bengaluru', 'DAKSHIN KANNADA', NULL),
('mc_ahmedabad', 'Dadar & Nagar Haveli', NULL),
('mc_hyderabad', 'mulugu', NULL),
('mc_srinagar', 'GILGIT', ''),
('mc_srinagar', 'TRIBAL TERITORY', ''),
('mc_srinagar', 'CHILAS', ''),
('mc_srinagar', 'GILGIT WAZARAT', ''),
('mc_srinagar', 'MUZAFARABAD', ''),
('mc_srinagar', 'MIRPUR', ''),
('mc_amaravati', 'ANANTHAPUR                                        ', ''),
('mc_amaravati', 'CHITTOOR                                          ', ''),
('mc_amaravati', 'CUDDAPAH                                          ', ''),
('mc_amaravati', 'EAST GODAVARI', ''),
('mc_amaravati', 'KURNOOL', ''),
('mc_amaravati', 'SRIKAKULAM', ''),
('mc_amaravati', 'VIZIANAGARAM', ''),
('mc_amaravati', 'VISHAKHAPATNAM', ''),
('mc_amaravati', 'WEST GODAVARI', ''),
('mc_amaravati', 'KRISHNA', ''),
('mc_amaravati', 'GUNTUR', ''),
('mc_amaravati', 'PRAKASAM', ''),
('mc_amaravati', 'NELLORE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Districtwise_Nowcast_Mapping`
--
ALTER TABLE `Districtwise_Nowcast_Mapping`
  ADD PRIMARY KEY (`MC_RMC`,`District`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
