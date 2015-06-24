/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50622
Source Host           : localhost:3306
Source Database       : exam

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2015-03-25 17:50:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_examinfo
-- ----------------------------
DROP TABLE IF EXISTS `tb_examinfo`;
CREATE TABLE `tb_examinfo` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  `question` varchar(500) COLLATE utf8_bin NOT NULL,
  `answer` varchar(255) COLLATE utf8_bin NOT NULL,
  `rightanswer` varchar(255) COLLATE utf8_bin NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tb_manager
-- ----------------------------
DROP TABLE IF EXISTS `tb_manager`;
CREATE TABLE `tb_manager` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `passwd` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tb_score
-- ----------------------------
DROP TABLE IF EXISTS `tb_score`;
CREATE TABLE `tb_score` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  `score` varchar(255) COLLATE utf8_bin NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tb_subject
-- ----------------------------
DROP TABLE IF EXISTS `tb_subject`;
CREATE TABLE `tb_subject` (
  `subjectid` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`subjectid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tb_test
-- ----------------------------
DROP TABLE IF EXISTS `tb_test`;
CREATE TABLE `tb_test` (
  `testid` int(10) NOT NULL,
  `subject` varchar(20) COLLATE utf8_bin NOT NULL,
  `question` varchar(500) COLLATE utf8_bin NOT NULL,
  `answera` varchar(300) COLLATE utf8_bin NOT NULL,
  `answerb` varchar(300) COLLATE utf8_bin NOT NULL,
  `answerc` varchar(300) COLLATE utf8_bin NOT NULL,
  `answerd` varchar(300) COLLATE utf8_bin NOT NULL,
  `rightanswer` varchar(300) COLLATE utf8_bin NOT NULL,
  `jiexi` varchar(300) COLLATE utf8_bin NOT NULL,
  `score` int(10) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `passwd` varchar(20) COLLATE utf8_bin NOT NULL,
  `age` int(10) NOT NULL,
  `sex` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `question` varchar(300) COLLATE utf8_bin NOT NULL,
  `answer` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
