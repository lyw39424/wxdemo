/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql1.6
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : weixin

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-05-11 17:48:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wx_adminuser
-- ----------------------------
DROP TABLE IF EXISTS `wx_adminuser`;
CREATE TABLE `wx_adminuser` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_value` varchar(10) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '默认没有使用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_adminuser
-- ----------------------------
INSERT INTO `wx_adminuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0', '/Museum/img/2016-04-26/571f0de5353af.jpg', '0', null, null, null, null, null, null, null, null, null, '0');
INSERT INTO `wx_adminuser` VALUES ('2', 'lyw007', 'e10adc3949ba59abbe56e057f20f883e', '7', '/Store/zhut/2016-05-11/5732d519c91b0.jpg', '1', '1', null, null, '2016-05-11 14:46:10', null, null, 'on', '15184412498', '139844@qq.com', '1');

-- ----------------------------
-- Table structure for wx_category
-- ----------------------------
DROP TABLE IF EXISTS `wx_category`;
CREATE TABLE `wx_category` (
  `id` int(100) NOT NULL,
  `category_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `state` varchar(20) COLLATE utf8_unicode_ci DEFAULT '1',
  `weixinid` int(100) DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_category
-- ----------------------------
INSERT INTO `wx_category` VALUES ('38', '1', '公号类别', '1', '订阅号', '刘永望', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', null, null);
INSERT INTO `wx_category` VALUES ('39', '1', '公号类别', '2', '服务号', '刘永望', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', null, null);
INSERT INTO `wx_category` VALUES ('40', '1', '公号类别', '3', '企业号', '', null, null, null, null, '1', null, null);

-- ----------------------------
-- Table structure for wx_hmenu
-- ----------------------------
DROP TABLE IF EXISTS `wx_hmenu`;
CREATE TABLE `wx_hmenu` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `menu_cate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `menu_tite` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titel_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `z_fkid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_fkid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_hmenu
-- ----------------------------
INSERT INTO `wx_hmenu` VALUES ('102', '消息管理', '新增', 'TeReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '文本管理', 'TeReply-index', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}');
INSERT INTO `wx_hmenu` VALUES ('103', '消息管理', '修改', 'TeReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '文本管理', 'TeReply-index', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}');
INSERT INTO `wx_hmenu` VALUES ('104', '消息管理', '删除', 'TeReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '文本管理', 'TeReply-index', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}', '{AB126B44-CEB6-416A-B2DA-1F7F5F57083C}');
INSERT INTO `wx_hmenu` VALUES ('105', '消息管理', '新增', 'GrReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '图文管理', 'GrReply-index', '{C65600E0-F56F-42AA-8A90-6832C6410862}', '{C65600E0-F56F-42AA-8A90-6832C6410862}');
INSERT INTO `wx_hmenu` VALUES ('106', '消息管理', '修改', 'GrReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '图文管理', 'GrReply-index', '{C65600E0-F56F-42AA-8A90-6832C6410862}', '{C65600E0-F56F-42AA-8A90-6832C6410862}');
INSERT INTO `wx_hmenu` VALUES ('107', '消息管理', '删除', 'GrReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '图文管理', 'GrReply-index', '{C65600E0-F56F-42AA-8A90-6832C6410862}', '{C65600E0-F56F-42AA-8A90-6832C6410862}');
INSERT INTO `wx_hmenu` VALUES ('108', '消息管理', '上传', 'GrReply-img', '1', null, null, '2016-05-09 17:37:46', null, null, '图文管理', 'GrReply-index', '{C65600E0-F56F-42AA-8A90-6832C6410862}', '{C65600E0-F56F-42AA-8A90-6832C6410862}');
INSERT INTO `wx_hmenu` VALUES ('109', '消息管理', '新增', 'MuReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '音乐消息', 'MuReply-index', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}');
INSERT INTO `wx_hmenu` VALUES ('110', '消息管理', '修改', 'MuReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '音乐消息', 'MuReply-index', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}');
INSERT INTO `wx_hmenu` VALUES ('111', '消息管理', '删除', 'MuReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '音乐消息', 'MuReply-index', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}');
INSERT INTO `wx_hmenu` VALUES ('112', '消息管理', '上传', 'MuReply-music', '1', null, null, '2016-05-09 17:37:46', null, null, '音乐消息', 'MuReply-index', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}', '{6B6BDC28-F01D-4F04-AD13-23CCAAE2007F}');
INSERT INTO `wx_hmenu` VALUES ('113', '消息管理', '新增', 'VoReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '语言消息', 'VoReply-index', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}');
INSERT INTO `wx_hmenu` VALUES ('114', '消息管理', '修改', 'VoReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '语言消息', 'VoReply-index', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}');
INSERT INTO `wx_hmenu` VALUES ('115', '消息管理', '删除', 'VoReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '语言消息', 'VoReply-index', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}');
INSERT INTO `wx_hmenu` VALUES ('116', '消息管理', '上传', 'VoReply-music', '1', null, null, '2016-05-09 17:37:46', null, null, '语言消息', 'VoReply-index', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}', '{CC19F0D3-55E5-4A93-928D-762F82F18A17}');
INSERT INTO `wx_hmenu` VALUES ('117', '消息管理', '新增', 'VeReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '视频消息', 'VeReply-index', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}');
INSERT INTO `wx_hmenu` VALUES ('118', '消息管理', '修改', 'VeReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '视频消息', 'VeReply-index', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}');
INSERT INTO `wx_hmenu` VALUES ('119', '消息管理', '删除', 'VeReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '视频消息', 'VeReply-index', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}');
INSERT INTO `wx_hmenu` VALUES ('120', '消息管理', '上传', 'VeReply-cideo', '1', null, null, '2016-05-09 17:37:46', null, null, '视频消息', 'VeReply-index', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}', '{AE3EE143-BBAC-4A73-AEA3-FD7F67A25D65}');
INSERT INTO `wx_hmenu` VALUES ('121', '消息管理', '新增', 'ImgReply-add', '1', null, null, '2016-05-09 17:37:46', null, null, '图片回复', 'ImgReply-index', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}');
INSERT INTO `wx_hmenu` VALUES ('122', '消息管理', '修改', 'ImgReply-update', '1', null, null, '2016-05-09 17:37:46', null, null, '图片回复', 'ImgReply-index', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}');
INSERT INTO `wx_hmenu` VALUES ('123', '消息管理', '删除', 'ImgReply-delete', '1', null, null, '2016-05-09 17:37:46', null, null, '图片回复', 'ImgReply-index', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}');
INSERT INTO `wx_hmenu` VALUES ('124', '消息管理', '上传', 'ImgReply-img', '1', null, null, '2016-05-09 17:37:46', null, null, '图片回复', 'ImgReply-index', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}', '{3685DD50-5ABD-41FE-B793-FCD5B6F8F91B}');
INSERT INTO `wx_hmenu` VALUES ('128', '基本设置', '新增', 'Cate-add', '2', null, null, '2016-05-11 16:48:41', null, null, '数据字典', 'Cate-index', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}');
INSERT INTO `wx_hmenu` VALUES ('129', '基本设置', '修改', 'Cate-update', '2', null, null, '2016-05-11 16:48:41', null, null, '数据字典', 'Cate-index', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}');
INSERT INTO `wx_hmenu` VALUES ('130', '基本设置', '删除', 'Cate-delete', '2', null, null, '2016-05-11 16:48:41', null, null, '数据字典', 'Cate-index', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}');
INSERT INTO `wx_hmenu` VALUES ('131', '基本设置', '一览', 'WxIndex-index', '2', null, null, '2016-05-11 16:48:41', null, null, '数据字典', 'Cate-index', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}', '{B81D0C98-759F-483C-9615-2756A7BD7FCC}');

-- ----------------------------
-- Table structure for wx_jour
-- ----------------------------
DROP TABLE IF EXISTS `wx_jour`;
CREATE TABLE `wx_jour` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `potal` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iptotal` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reserveone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservetwo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservethree` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_jour
-- ----------------------------

-- ----------------------------
-- Table structure for wx_menue
-- ----------------------------
DROP TABLE IF EXISTS `wx_menue`;
CREATE TABLE `wx_menue` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '唯一识别的id',
  `me_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单名称',
  `me_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '菜单类型',
  `url_value` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'key值',
  `pid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '外键',
  `wxid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '微信id',
  `creat_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `tw_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '二级菜单名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_menue
-- ----------------------------
INSERT INTO `wx_menue` VALUES ('196', '9D4479C8-3295-48CB-B2EF-07313366BF5F', '刘永望', 'click', '12', '0', '1', null, null, null, null, null, null, null);
INSERT INTO `wx_menue` VALUES ('197', '07B19906-2802-436E-B72B-DE6DE928672B', '测试1', null, null, '0', '1', null, null, null, null, null, null, null);
INSERT INTO `wx_menue` VALUES ('198', '07B19906-2802-436E-B72B-DE6DE928672B', '刘永望', 'click', '测试1', '07B19906-2802-436E-B72B-DE6DE928672B', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('199', '07B19906-2802-436E-B72B-DE6DE928672B', '刘永望', 'click', '测试1', '07B19906-2802-436E-B72B-DE6DE928672B', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('200', '07B19906-2802-436E-B72B-DE6DE928672B', '刘永望', 'click', '测试1', '07B19906-2802-436E-B72B-DE6DE928672B', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('201', '07B19906-2802-436E-B72B-DE6DE928672B', '刘永望', 'click', '测试1', '07B19906-2802-436E-B72B-DE6DE928672B', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('202', '07B19906-2802-436E-B72B-DE6DE928672B', '刘永望', 'click', '测试1', '07B19906-2802-436E-B72B-DE6DE928672B', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('203', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '测试1', null, null, '0', '1', null, null, null, null, null, null, null);
INSERT INTO `wx_menue` VALUES ('204', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '刘永望', 'click', '测试1', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('205', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '刘永望', 'click', '测试1', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('206', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '刘永望', 'click', '测试1', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('207', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '刘永望', 'click', '测试1', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '1', null, null, null, null, null, null, '测试1');
INSERT INTO `wx_menue` VALUES ('208', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '刘永望', 'click', '测试1', '0F5AB5B9-DB6C-4712-8221-7DA7A952F6A3', '1', null, null, null, null, null, null, '测试1');

-- ----------------------------
-- Table structure for wx_rolue
-- ----------------------------
DROP TABLE IF EXISTS `wx_rolue`;
CREATE TABLE `wx_rolue` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` text COLLATE utf8_unicode_ci,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `catalog` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_cate` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_rolue
-- ----------------------------
INSERT INTO `wx_rolue` VALUES ('7', '微信测试-管理员', '{57D00810-2F13-4430-A9D2-5EA5EF1E4EC3}', '1', 'TeReply-add,TeReply-update,TeReply-delete,,GrReply-add,GrReply-update,GrReply-delete,GrReply-img,MuReply-add,MuReply-update,MuReply-delete,MuReply-music,VoReply-add,VoReply-update,VoReply-delete,VoReply-music,VeReply-add,VeReply-update,VeReply-delete,VeReply-cideo,ImgReply-add,ImgReply-update,ImgReply-delete,ImgReply-img,Cate-add,Cate-update,Cate-delete,WxIndex-index,,,,,,,,,,,,,,,,,,,,', '1', null, '2016-05-11 17:07:37', null, null, '消息管理,基本设置', '文本管理+TeReply-index,图文管理+GrReply-index,音乐消息+MuReply-index,语言消息+VoReply-index,视频消息+VeReply-index,图片回复+');

-- ----------------------------
-- Table structure for wx_user
-- ----------------------------
DROP TABLE IF EXISTS `wx_user`;
CREATE TABLE `wx_user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `openid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bickname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provice` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgurl` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxtime` datetime DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_user
-- ----------------------------

-- ----------------------------
-- Table structure for wx_wechat
-- ----------------------------
DROP TABLE IF EXISTS `wx_wechat`;
CREATE TABLE `wx_wechat` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `wxname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '账号名称',
  `wxnumber` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '微信公众号',
  `wxtype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '公众号类型',
  `appid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'appID',
  `appsecret` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '应用秘钥',
  `token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '令牌',
  `accesstoken` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ACCESS_TOKEN',
  `accesstime` datetime DEFAULT NULL COMMENT 'ACCESS_TOKEN',
  `emall` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aeskey` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_wechat
-- ----------------------------
INSERT INTO `wx_wechat` VALUES ('1', '微信测试', 'liuyw39424', '0', 'wxf9e681feaa48e47b', '5977610a8f73b25b5c3375a945474c2a', 'gh_64d4a88c1514', null, null, '1321394994@qq.com', '0BF2wQClh91fu1c4gt4JkiY5n5irPS7vI68iDObFuaT');
INSERT INTO `wx_wechat` VALUES ('10', '13221`3', '321421`', '1', '3213', '21`321`3', '21321', null, '2016-04-28 17:24:47', '10496@qq.com', null);
