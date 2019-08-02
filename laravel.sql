/*
Navicat MySQL Data Transfer

Source Server         : yuuu
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-08-01 16:37:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(111) NOT NULL COMMENT '用户uid',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_name` varchar(255) NOT NULL DEFAULT '0' COMMENT '商品名称',
  `goods_pic` varchar(255) NOT NULL DEFAULT '0' COMMENT '商品图片',
  `goods_price` int(11) NOT NULL DEFAULT '0' COMMENT '商品价格',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cart
-- ----------------------------

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) NOT NULL DEFAULT '0' COMMENT '商品名称',
  `goods_pic` varchar(255) NOT NULL DEFAULT '0' COMMENT '商品图片链接',
  `goods_price` int(11) NOT NULL DEFAULT '0' COMMENT '商品的价格，没有小数',
  `add_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for l_goods
-- ----------------------------
DROP TABLE IF EXISTS `l_goods`;
CREATE TABLE `l_goods` (
  `g_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) NOT NULL,
  `g_img` varchar(255) NOT NULL,
  `g_price` decimal(10,0) NOT NULL,
  `g_num` varchar(255) NOT NULL,
  `create_time` varchar(255) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of l_goods
-- ----------------------------
INSERT INTO `l_goods` VALUES ('26', 'wqe', 'upload/img/041f53c9a78068be538c2e606ffeeee0.jpg', '200', '1234', '1560911519');
INSERT INTO `l_goods` VALUES ('27', 'rwrwrqrewq', 'upload/img/9943a783cc1f99cc1beb9fee36a6ba82.jpg', '999', '33344', '1560911554');
INSERT INTO `l_goods` VALUES ('29', '士大夫撒旦倒萨', 'upload/img/8bb0feae10f97935e32146839ae5c329.jpg', '325', '22', '1561111520');
INSERT INTO `l_goods` VALUES ('30', 'weqweq', 'upload/img/ca19787e57256cdf111ec04b5aa71fcc.jpg', '447', '222222', '1563154068');
INSERT INTO `l_goods` VALUES ('22', '犹太人太快了', 'upload/img/fb73bcb8d96477d8033afc4137daadd4.jpg', '778', '22', '1560849617');
INSERT INTO `l_goods` VALUES ('23', 'a\'a', 'upload/img/d0c242f50288a94a2527d6770d4f168f.jpg', '25', '2', '1560849669');
INSERT INTO `l_goods` VALUES ('28', 'eqw', 'upload/img/92b2b0f19066f2b4c022d9dfedb73051.jpg', '61', '222', '1560911607');
INSERT INTO `l_goods` VALUES ('25', 'iiiiiiii', 'upload/img/0531cdc1f20a3528ae2c51d844c62c56.jpg', '55', '333333', '1560860842');
INSERT INTO `l_goods` VALUES ('31', 'ertfgf', 'upload/img/7ac15f2f9154cadf7a395e5105fa7907.jpg', '334', '3212', '1563516227');

-- ----------------------------
-- Table structure for l_student
-- ----------------------------
DROP TABLE IF EXISTS `l_student`;
CREATE TABLE `l_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of l_student
-- ----------------------------
INSERT INTO `l_student` VALUES ('1', '强强强强', '13131313153', '22');
INSERT INTO `l_student` VALUES ('3', 'sdxsdfs', '13345456678', '22');
INSERT INTO `l_student` VALUES ('4', '小雪', '18533588979', '23');
INSERT INTO `l_student` VALUES ('5', '小白', '18533588979', '23');
INSERT INTO `l_student` VALUES ('6', '小雪', '18777899988', '23');
INSERT INTO `l_student` VALUES ('7', '狗梁', '18777899988', '22');

-- ----------------------------
-- Table structure for l_train
-- ----------------------------
DROP TABLE IF EXISTS `l_train`;
CREATE TABLE `l_train` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `oaddress` varchar(255) NOT NULL,
  `stime` varchar(255) NOT NULL,
  `otime` varchar(255) NOT NULL,
  `utime` varchar(255) NOT NULL,
  `tedengzuo` varchar(255) NOT NULL DEFAULT '0',
  `yidengzuo` varchar(255) NOT NULL DEFAULT '0',
  `erdengzuo` varchar(255) NOT NULL DEFAULT '0',
  `beizhu` varchar(255) NOT NULL DEFAULT '0' COMMENT '0表示无备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of l_train
-- ----------------------------
INSERT INTO `l_train` VALUES ('1', 'k1163', '北京', '长治', '8:00', '18:40', '10:40', '99', '156', '658', '0');
INSERT INTO `l_train` VALUES ('2', 'k1164', '长治', '北京', '19:00', '5:40', '10:40', '0', '396', '898', '0');

-- ----------------------------
-- Table structure for l_usr
-- ----------------------------
DROP TABLE IF EXISTS `l_usr`;
CREATE TABLE `l_usr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of l_usr
-- ----------------------------
INSERT INTO `l_usr` VALUES ('1', 'sda', '3275816179@qq.com', '111');
INSERT INTO `l_usr` VALUES ('2', 'admin', '1850506766@qq.com', '010174');
INSERT INTO `l_usr` VALUES ('3', '狗梁', '1850506766@qq.com', '123123');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `oid` varchar(30) NOT NULL DEFAULT '0' COMMENT '订单编号',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `pay_money` int(11) NOT NULL DEFAULT '0',
  `state` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1 未支付 2 已支付 3 过期',
  `pay_time` int(11) unsigned NOT NULL DEFAULT '0',
  `add_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `oid` char(14) NOT NULL DEFAULT '订单编号',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_name` varchar(255) NOT NULL DEFAULT '0' COMMENT '货物名称',
  `goods_pic` varchar(255) NOT NULL DEFAULT '0' COMMENT '货物图片',
  `add_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_detail
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1  普通用户 2 管理员',
  `reg_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
