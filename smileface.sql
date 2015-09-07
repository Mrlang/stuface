/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : smileface

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-09-07 23:10:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_image
-- ----------------------------
DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `big_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` int(20) NOT NULL,
  `vote` int(4) unsigned zerofill NOT NULL DEFAULT '0000',
  `time` datetime NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pass` int(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------
INSERT INTO `tbl_image` VALUES ('60', 'dsadsa.jpg', 'dsadsa_big.jpg', '0', '0000', '2015-09-07 22:53:12', 'dsada', null, '0');
INSERT INTO `tbl_image` VALUES ('61', '王良.png', '王良_big.png', '2014255486', '0000', '2015-09-07 22:56:01', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('62', '333.png', '333_big.png', '334422', '0000', '2015-09-07 22:59:02', '男', null, '1');

-- ----------------------------
-- Table structure for tbl_manager
-- ----------------------------
DROP TABLE IF EXISTS `tbl_manager`;
CREATE TABLE `tbl_manager` (
  `id` int(11) NOT NULL,
  `manager` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_manager
-- ----------------------------
INSERT INTO `tbl_manager` VALUES ('1', 'hongyanstaff', 'hongyanstaff');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `has_upload` int(1) unsigned zerofill NOT NULL,
  `vote_day` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `college` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '张三', '2014', '2014', '男', '1', '6', '', null);
INSERT INTO `tbl_user` VALUES ('2', '李四', '2015', '2015', '男', '1', '2', '000', null);
INSERT INTO `tbl_user` VALUES ('3', '王思', '111111', '111111', '女', '1', '4', '888', null);
INSERT INTO `tbl_user` VALUES ('4', '王一仁', '2015212432', '092516', '男', '1', '2', '', null);
INSERT INTO `tbl_user` VALUES ('5', '111', '666', '666', '男', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('6', '', '111', '111', '', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('7', '', '222', '222', '', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('8', '', '333', '333', '', '1', '0', '333', null);
INSERT INTO `tbl_user` VALUES ('9', '43', '43', '43', '0', '1', '1', null, null);
INSERT INTO `tbl_user` VALUES ('10', '5', '7', '7', '7', '1', '1', '', null);
INSERT INTO `tbl_user` VALUES ('11', '3', '22', '22', '1', '1', '0', '12345678911', null);
INSERT INTO `tbl_user` VALUES ('12', '', '999', '999', '', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('13', '梁宸', '2014214054', '', '0', '0', '0', null, null);
INSERT INTO `tbl_user` VALUES ('14', 'dsadsa', 'dsad', '', 'dsada', '1', '0', null, null);
INSERT INTO `tbl_user` VALUES ('15', '王良', '2014255486', '', '男', '1', '0', null, null);
INSERT INTO `tbl_user` VALUES ('16', '333', '334422', '', '男', '1', '0', null, null);

-- ----------------------------
-- Table structure for tbl_vote
-- ----------------------------
DROP TABLE IF EXISTS `tbl_vote`;
CREATE TABLE `tbl_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vote_uid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vote_day` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_vote
-- ----------------------------
INSERT INTO `tbl_vote` VALUES ('1', '1', '1', '1');
INSERT INTO `tbl_vote` VALUES ('2', '2', '1', '0');
INSERT INTO `tbl_vote` VALUES ('3', '2', '1', '0');
INSERT INTO `tbl_vote` VALUES ('4', '2', '1', '0');
INSERT INTO `tbl_vote` VALUES ('5', '666', '1', '7');
INSERT INTO `tbl_vote` VALUES ('6', '666', '3', '7');
INSERT INTO `tbl_vote` VALUES ('7', '666', '4', '7');
INSERT INTO `tbl_vote` VALUES ('8', '111', '3', '7');
INSERT INTO `tbl_vote` VALUES ('9', '2015', '2014212', '7');
INSERT INTO `tbl_vote` VALUES ('10', '2015', '0', '7');
INSERT INTO `tbl_vote` VALUES ('11', '2015', '111111', '7');
INSERT INTO `tbl_vote` VALUES ('12', '2015', '2015212432', '7');
INSERT INTO `tbl_vote` VALUES ('13', '7', '2015212432', '7');
INSERT INTO `tbl_vote` VALUES ('14', '7', '2014212', '7');
INSERT INTO `tbl_vote` VALUES ('15', '7', '0', '7');
INSERT INTO `tbl_vote` VALUES ('16', '999', '0', '7');
INSERT INTO `tbl_vote` VALUES ('17', '999', '2014212', '7');
INSERT INTO `tbl_vote` VALUES ('18', '2015212432', '111111', '7');
