/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : smileface

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-09-05 21:10:59
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------
INSERT INTO `tbl_image` VALUES ('1', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '111111', '0009', '2015-09-01 20:02:48', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('2', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-08-04 20:02:53', '男', null, '2');
INSERT INTO `tbl_image` VALUES ('3', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-17 20:02:57', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('4', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-14 20:03:01', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('5', '22.jpg', '22_big.jpg', '2014212', '0003', '2015-09-19 20:03:03', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('6', '22.jpg', '22_big.jpg', '2014212', '0003', '2015-09-19 20:03:06', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('7', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '女', null, '1');
INSERT INTO `tbl_image` VALUES ('8', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('9', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '0', '0002', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('10', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('11', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('12', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-08-04 20:02:53', '男', '', '0');
INSERT INTO `tbl_image` VALUES ('13', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-17 20:02:57', '女', '', '0');
INSERT INTO `tbl_image` VALUES ('14', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-14 20:03:01', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('15', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('16', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-08-04 20:02:53', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('17', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-17 20:02:57', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('18', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-14 20:03:01', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('19', '22.jpg', '22_big.jpg', '2014212', '0003', '2015-09-19 20:03:03', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('20', '22.jpg', '22_big.jpg', '2014212', '0003', '2015-09-19 20:03:06', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('21', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('22', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('23', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '0', '0002', '0000-00-00 00:00:00', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('24', '22.jpg', '22_big.jpg', '0', '0002', '0000-00-00 00:00:00', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('25', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014211', '0001', '2015-09-01 20:02:48', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('26', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-08-04 20:02:53', '男', '', '1');
INSERT INTO `tbl_image` VALUES ('27', '55e6af2907944.jpg', '55e6af2907944_big.jpg', '2014212', '0003', '2015-09-17 20:02:57', '女', '', '1');
INSERT INTO `tbl_image` VALUES ('28', '55e999696f23e.png', '55e999696f23e_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('29', '55e999a2558c3.png', '55e999a2558c3_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('30', '55e999fb96001.png', '55e999fb96001_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('31', '55e99ab671220.png', '55e99ab671220_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('32', '55e99b9045b7f.png', '55e99b9045b7f_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('33', '55e99d0378139.png', '55e99d0378139_big.png', '55', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('34', 'muwen.png', 'muwen_big.png', '0', '0000', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('35', '2015212432.png', '2015212432_big.png', '2015212432', '0000', '0000-00-00 00:00:00', '男', null, '1');
INSERT INTO `tbl_image` VALUES ('36', '2015212432.png', '2015212432_big.png', '2015212432', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('37', '2015212432.png', '2015212432_big.png', '2015212432', '0000', '0000-00-00 00:00:00', '男', null, '0');
INSERT INTO `tbl_image` VALUES ('38', '2015212432.png', '2015212432_big.png', '2015212432', '0000', '0000-00-00 00:00:00', '男', null, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', '张三', '2014', '2014', '男', '0', '2', null, null);
INSERT INTO `tbl_user` VALUES ('2', '李四', '2015', '2015', '男', '0', '2', null, null);
INSERT INTO `tbl_user` VALUES ('3', '王思', '111111', '111111', '女', '0', '4', null, null);
INSERT INTO `tbl_user` VALUES ('4', '王一仁', '2015212432', '', '男', '1', '5', '', null);
