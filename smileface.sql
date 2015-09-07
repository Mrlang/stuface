/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : smileface

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-09-07 20:31:09
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
  `vote` int(4) unsigned zerofill NOT NULL,
  `time` datetime NOT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_pass` int(1) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------
INSERT INTO `tbl_image` VALUES ('1', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '111111', '0010', '2015-09-01 20:02:48', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('2', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-08-04 20:02:53', '男', null, '2');
INSERT INTO `tbl_image` VALUES ('3', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-17 20:02:57', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('4', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-14 20:03:01', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('5', '22.jpg', '22_big.jpg', '2014212', '0006', '2015-09-19 20:03:03', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('6', '22.jpg', '22_big.jpg', '2014212', '0006', '2015-09-19 20:03:06', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('7', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('8', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('9', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '0', '0005', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('10', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('11', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('12', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-08-04 20:02:53', '男', '', '0');
INSERT INTO `tbl_image` VALUES ('13', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-17 20:02:57', '女', '', '0');
INSERT INTO `tbl_image` VALUES ('14', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-14 20:03:01', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('15', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('16', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-08-04 20:02:53', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('17', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-17 20:02:57', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('18', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-14 20:03:01', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('19', '22.jpg', '22_big.jpg', '2014212', '0006', '2015-09-19 20:03:03', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('20', '22.jpg', '22_big.jpg', '2014212', '0006', '2015-09-19 20:03:06', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('21', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('22', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('23', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '0', '0005', '0000-00-00 00:00:00', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('24', '22.jpg', '22_big.jpg', '0', '0005', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('25', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('26', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-08-04 20:02:53', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('27', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0006', '2015-09-17 20:02:57', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('28', '55e999696f23e.png', '55e999696f23e_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('29', '55e999a2558c3.png', '55e999a2558c3_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('30', '55e999fb96001.png', '55e999fb96001_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('31', '55e99ab671220.png', '55e99ab671220_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('32', '55e99b9045b7f.png', '55e99b9045b7f_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('33', '55e99d0378139.png', '55e99d0378139_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('34', 'muwen.png', 'muwen_big.png', '0', '0005', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('43', '111111.jpg', '111111_big.jpg', '111111', '0010', '0000-00-00 00:00:00', '女', null, '0');
INSERT INTO `tbl_image` VALUES ('44', '2015.jpg', '2015_big.jpg', '2015', '0000', '2015-09-06 18:14:49', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('45', '2014.jpg', '2014_big.jpg', '2014', '0000', '2015-09-06 18:16:35', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('46', '2014.jpg', '2014_big.jpg', '2014', '0000', '2015-09-06 18:17:20', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('47', '2014.jpg', '2014_big.jpg', '2014', '0000', '2015-09-06 18:18:46', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('48', '2014.jpg', '2014_big.jpg', '2014', '0000', '2015-09-06 18:19:54', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('49', '2014.jpg', '2014_big.jpg', '2014', '0000', '2015-09-06 18:22:57', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('50', '666.jpg', '666_big.jpg', '666', '0000', '2015-09-07 11:17:37', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('51', '111.jpg', '111_big.jpg', '111', '0000', '2015-09-07 17:42:32', '', null, '0');
INSERT INTO `tbl_image` VALUES ('52', '222.jpg', '222_big.jpg', '222', '0000', '2015-09-07 17:55:40', '', null, '0');
INSERT INTO `tbl_image` VALUES ('53', '333.jpg', '333_big.jpg', '333', '0000', '2015-09-07 18:01:17', '', null, '0');
INSERT INTO `tbl_image` VALUES ('54', '7.jpg', '7_big.jpg', '7', '0000', '2015-09-07 18:39:54', '7', null, '0');
INSERT INTO `tbl_image` VALUES ('55', '22.jpg', '22_big.jpg', '22', '0000', '2015-09-07 19:33:05', '1', null, '0');
INSERT INTO `tbl_image` VALUES ('56', '1441627525_999.jpg', '1441627525_999_big.jpg', '999', '0000', '2015-09-07 20:05:25', '', null, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '张三', '2014', '2014', '男', '1', '6', '', null);
INSERT INTO `tbl_user` VALUES ('2', '李四', '2015', '2015', '男', '1', '2', '000', null);
INSERT INTO `tbl_user` VALUES ('3', '王思', '111111', '111111', '女', '1', '4', '888', null);
INSERT INTO `tbl_user` VALUES ('4', '王一仁', '2015212432', '092516', '男', '0', '2', '2345324', null);
INSERT INTO `tbl_user` VALUES ('5', '111', '666', '666', '男', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('6', '', '111', '111', '', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('7', '', '222', '222', '', '1', '0', '', null);
INSERT INTO `tbl_user` VALUES ('8', '', '333', '333', '', '1', '0', '333', null);
INSERT INTO `tbl_user` VALUES ('9', '43', '43', '43', '0', '1', '1', null, null);
INSERT INTO `tbl_user` VALUES ('10', '5', '7', '7', '7', '1', '1', '', null);
INSERT INTO `tbl_user` VALUES ('11', '3', '22', '22', '1', '1', '0', '12345678911', null);
INSERT INTO `tbl_user` VALUES ('12', '', '999', '999', '', '1', '0', '', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
