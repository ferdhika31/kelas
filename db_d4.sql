/*
Navicat MariaDB Data Transfer

Source Server         : MariaDB
Source Server Version : 100109
Source Host           : localhost:3306
Source Database       : db_d4

Target Server Type    : MariaDB
Target Server Version : 100109
File Encoding         : 65001

Date: 2016-05-09 20:23:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tempat` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `date_add` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `date_update` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `stt` smallint(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('1', '151524001', null, 'ALYA NURULITA RUSNANDAR', 'P', null, null, '1997-08-15', '151524001.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:26', '1');
INSERT INTO `mahasiswa` VALUES ('2', '151524002', null, 'ANDIKA TRI DARMAWAN', 'L', null, null, null, '151524002.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('3', '151524003', null, 'ANDRE RESHNA FADHILAH', 'L', null, null, null, '151524003.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '2');
INSERT INTO `mahasiswa` VALUES ('4', '151524004', null, 'ANGGASTYA DIAH ANDITA H.P', 'P', null, null, null, '151524004.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('5', '151524005', null, 'AZRI ALIVA ALHANIA', 'P', null, null, null, '151524005.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('6', '151524006', null, 'DEBBIE ARIYANTI', 'P', null, null, null, '151524006.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('7', '151524007', null, 'DIMAS AJI WARDHANA', 'L', null, null, null, '151524007.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('8', '151524008', null, 'FAHMI FATURAHMAN NUL HAKIM', 'L', null, null, null, '151524008.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('9', '151524009', null, 'FAKHRANA PRADNYA PARAMITA', 'P', null, null, null, '151524009.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('10', '151524010', null, 'FERDHIKA YUDIRA DIPUTRA', 'L', null, null, '1997-08-31', '151524010.jpg', '2016-04-20 17:16:05', '2016-04-20 17:16:05', '1');
INSERT INTO `mahasiswa` VALUES ('11', '151524011', null, 'FREENANDO R', 'L', null, null, null, '151524011.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('12', '151524012', null, 'GITA SUCIANA RAMADHANTY', 'P', null, null, null, '151524012.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('13', '151524013', null, 'HADIARTO B', 'L', null, null, null, '151524013.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('14', '151524014', null, 'HERDHIANTOKO FATHANI SANDRA', 'L', null, null, null, '151524014.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('15', '151524015', null, 'LINDA CHRISANTY', 'P', null, null, null, '151524015.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '2');
INSERT INTO `mahasiswa` VALUES ('16', '151524016', null, 'MAYA SRI RAMADIANI', 'P', null, null, null, '151524016.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('17', '151524017', null, 'MOCHAMAD DEBAN AZARIA', 'L', null, null, null, '151524017.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('18', '151524018', null, 'MOHAMAD PRASTA PRADIPTA', 'L', null, null, null, '151524018.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('19', '151524019', null, 'MUHAMMAD AULIA RAHMAN', 'L', null, null, null, '151524019.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('20', '151524020', null, 'MUHAMMAD DANIAL AKBAR', 'L', null, null, null, '151524020.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '2');
INSERT INTO `mahasiswa` VALUES ('21', '151524021', null, 'MUHAMMAD EDWIN', 'L', null, null, null, '151524021.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('22', '151524022', null, 'MUHAMMAD RIDWAN FATHIN', 'L', null, null, null, '151524022.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:34', '1');
INSERT INTO `mahasiswa` VALUES ('23', '151524023', null, 'NAUFAL ATHAYA SHABAH RAMADHAN', 'L', null, null, null, '151524023.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('24', '151524024', null, 'NUR ROHMAN', 'L', null, null, null, '151524024.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('25', '151524025', null, 'REKA ALAMSYAH', 'L', null, null, null, '151524025.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('26', '151524026', null, 'RENALDY RIZKI MAULANA', 'L', null, null, null, '151524026.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('27', '151524027', null, 'RESTU AGUSTINI', 'P', null, null, null, '151524027.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('28', '151524028', null, 'RIFA AZIZAH', 'P', null, null, null, '151524028.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('29', '151524029', null, 'RIZKY ADAM PRANANDA', 'L', null, null, null, '151524029.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('30', '151524030', null, 'SUKMA SETYAJI', 'L', null, null, null, '151524030.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('31', '151524031', null, 'UJANG WAHYU', 'L', null, null, null, '151524031.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
INSERT INTO `mahasiswa` VALUES ('32', '151524032', null, 'YUDISTHIRA POYOH', 'L', null, null, null, '151524032.jpg', '2016-04-16 12:15:16', '2016-04-20 17:15:35', '1');
