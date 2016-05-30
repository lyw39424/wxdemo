/*
Navicat MySQL Data Transfer

Source Server         : 本地mysql1.6
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : weixin

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-05-30 15:30:10
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
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ip地址',
  `nice` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '登陆次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_adminuser
-- ----------------------------
INSERT INTO `wx_adminuser` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '0', '/Museum/img/2016-04-26/571f0de5353af.jpg', '0', null, null, null, null, null, null, null, null, null, '0', null, '0');
INSERT INTO `wx_adminuser` VALUES ('6', 'lyw001', 'e10adc3949ba59abbe56e057f20f883e', '14', '/Store/zhut/2016-05-25/574570bd38173.jpg', '1', '1', null, null, '2016-05-25 17:30:54', null, '2016-05-25 18:01:12', 'on', '15184412498', '10967545@qq.com', '0', '127.0.0.1', '3');
INSERT INTO `wx_adminuser` VALUES ('7', 'lyw002', 'e10adc3949ba59abbe56e057f20f883e', '15', '/Store/zhut/2016-05-25/57457146cca71.jpg', '1', '1', null, null, '2016-05-25 17:33:10', null, '2016-05-26 16:38:36', 'on', '13511812285', '4654165@qq.com', '0', '127.0.0.1', '3');
INSERT INTO `wx_adminuser` VALUES ('8', 'lyw003', 'e10adc3949ba59abbe56e057f20f883e', '17', '/Store/zhut/2016-05-25/57457146cca71.jpg', '1', '1', '1', null, '2016-05-26 10:32:57', null, '2016-05-26 16:54:34', 'on', '13612308840', '1321394994@qq.com', '1', '127.0.0.1', '5');

-- ----------------------------
-- Table structure for wx_category
-- ----------------------------
DROP TABLE IF EXISTS `wx_category`;
CREATE TABLE `wx_category` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
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
  `wxid` int(100) DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_category
-- ----------------------------
INSERT INTO `wx_category` VALUES ('47', '{187F7B66-1730-475C-9A4C-0BC25E79E2BE}', '消息类别', 'tereply', '文本消息', '2', 'lyw007', '2016-05-18 17:26:06', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('49', '{187F7B66-1730-475C-9A4C-0BC25E79E2BE}', '消息类别', 'voreply', '语音消息', '2', 'lyw007', '2016-05-18 17:26:06', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('50', '{187F7B66-1730-475C-9A4C-0BC25E79E2BE}', '消息类别', 'vereply', '视频回复', '2', 'lyw007', '2016-05-18 17:26:06', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('51', '{187F7B66-1730-475C-9A4C-0BC25E79E2BE}', '消息类别', 'imgreply', '图片回复', '2', 'lyw007', '2016-05-18 17:26:06', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('52', '{187F7B66-1730-475C-9A4C-0BC25E79E2BE}', '消息类别', 'mureply', '音乐回复', '2', 'lyw007', '2016-05-18 17:26:06', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('53', '{812CD172-BDB2-4C52-9968-C910A5DFD30D}', '是否回复', '0', '是', '2', 'lyw007', '2016-05-19 14:01:47', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('54', '{812CD172-BDB2-4C52-9968-C910A5DFD30D}', '是否回复', '1', '否', '2', 'lyw007', '2016-05-19 14:01:47', null, null, '1', '1', null);
INSERT INTO `wx_category` VALUES ('55', '{1E2FE97F-1B48-4736-8DB0-043665B58DA8}', '新闻类别', '1', '文章', '8', 'lyw003', '2016-05-26 16:32:31', null, null, '1', '11', null);
INSERT INTO `wx_category` VALUES ('56', '{1E2FE97F-1B48-4736-8DB0-043665B58DA8}', '新闻类别', '2', '新闻', '8', 'lyw003', '2016-05-26 16:32:31', null, null, '1', '11', null);

-- ----------------------------
-- Table structure for wx_comment
-- ----------------------------
DROP TABLE IF EXISTS `wx_comment`;
CREATE TABLE `wx_comment` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fk_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cont` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_comment
-- ----------------------------

-- ----------------------------
-- Table structure for wx_grreply
-- ----------------------------
DROP TABLE IF EXISTS `wx_grreply`;
CREATE TABLE `wx_grreply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discription` text COLLATE utf8_unicode_ci,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picurl` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `autor` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_grreply
-- ----------------------------
INSERT INTO `wx_grreply` VALUES ('1', '{80843B5D-FB14-4F11-B041-7951F9743872}', '再别康桥', '&lt;p&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　 &amp;nbsp; &amp;nbsp;轻轻的我走了，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;正如我轻轻的来；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　我轻轻的招手，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;作别西天的云彩。&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　那河畔的金柳，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;是夕阳中的新娘；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　波光里的艳影，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;在我的心头荡漾。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;white-space: normal;&quot;&gt;&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;软泥上的青荇，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;油油的在水底招摇；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　在康河的柔波里，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;甘心做一条水草！&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　那榆荫下的一潭，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;不是清泉，是天上虹；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　揉碎在浮藻间，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;沉淀着彩虹似的梦。&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　寻梦？撑一支长篙，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;向青草更青处漫溯；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　满载一船星辉，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;在星辉斑斓里放歌。&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　但我不能放歌，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;悄悄是别离的笙箫；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　夏虫也为我沉默，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;沉默是今晚的康桥！&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　悄悄的我走了，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;正如我悄悄的来；&lt;/span&gt;&lt;br style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;/&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;　　我挥一挥衣袖，&lt;/span&gt;&lt;span style=&quot;color: rgb(69, 69, 69); font-family: arial, 宋体, sans-serif, tahoma, &amp;#39;Microsoft YaHei&amp;#39;; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;不带走一片云彩。&lt;/span&gt;&lt;/p&gt;', '', '/tw/img/2016-05-17/573a78cb64bb0.jpg', '1', '2', 'lyw007', '2016-05-17 09:53:01', null, null, null, '刘永望');
INSERT INTO `wx_grreply` VALUES ('2', '{C91B8E10-7E42-4C22-8875-E0B0E2AA1296}', '这个是什么鬼啊', '&lt;p&gt;123212121&lt;/p&gt;', '421', '/tw/img/2016-05-17/573a8e2b53b4a.jpg', '1', '2', 'lyw007', '2016-05-17 11:22:24', null, null, null, '刘永望');
INSERT INTO `wx_grreply` VALUES ('3', '{C91B8E10-7E42-4C22-8875-E0B0E2AA1296}', '测试', '&lt;p&gt;安慰法律及地方是当今的撒&lt;/p&gt;', '', '/tw/img/2016-05-17/573a8ebe15cdb.jpg', '1', '2', 'lyw007', '2016-05-17 11:23:52', null, null, null, '刘永望');

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
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_hmenu
-- ----------------------------
INSERT INTO `wx_hmenu` VALUES ('132', '基本设置', '我的桌面', 'WxOther-welcome', '1', null, 'admin', '2016-05-25 11:50:33', null, null, '微信用户管理', 'WxUser-index', '{C88E0910-BC0E-4A6F-B66E-65D2CFF69340}', '{C88E0910-BC0E-4A6F-B66E-65D2CFF69340}');
INSERT INTO `wx_hmenu` VALUES ('133', '基本设置', '桌面一览', 'WxIndex-index', '1', null, 'admin', '2016-05-25 11:50:33', null, null, '微信用户管理', 'WxUser-index', '{C88E0910-BC0E-4A6F-B66E-65D2CFF69340}', '{C88E0910-BC0E-4A6F-B66E-65D2CFF69340}');
INSERT INTO `wx_hmenu` VALUES ('134', '消息管理', '新增', 'TeReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '文本管理', 'TeReply-index', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}');
INSERT INTO `wx_hmenu` VALUES ('135', '消息管理', '修改', 'TeReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '文本管理', 'TeReply-index', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}');
INSERT INTO `wx_hmenu` VALUES ('136', '消息管理', '删除', 'TeReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '文本管理', 'TeReply-index', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}', '{F815358B-C3D5-4E91-A402-E7E328ABC6CD}');
INSERT INTO `wx_hmenu` VALUES ('137', '消息管理', '新增', 'GrReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图文管理', 'GrReply-index', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}');
INSERT INTO `wx_hmenu` VALUES ('138', '消息管理', '修改', 'GrReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图文管理', 'GrReply-index', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}');
INSERT INTO `wx_hmenu` VALUES ('139', '消息管理', '展示', 'GrReply-show', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图文管理', 'GrReply-index', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}');
INSERT INTO `wx_hmenu` VALUES ('140', '消息管理', '删除', 'GrReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图文管理', 'GrReply-index', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}');
INSERT INTO `wx_hmenu` VALUES ('141', '消息管理', '上传', 'GrReply-img', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图文管理', 'GrReply-index', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}', '{FB6813CC-82A5-4EA9-ABAE-B0691C20F8F5}');
INSERT INTO `wx_hmenu` VALUES ('142', '消息管理', '新增', 'MuReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '音乐管理', 'MuReply-index', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}');
INSERT INTO `wx_hmenu` VALUES ('143', '消息管理', '修改', 'MuReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '音乐管理', 'MuReply-index', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}');
INSERT INTO `wx_hmenu` VALUES ('144', '消息管理', '删除', 'MuReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '音乐管理', 'MuReply-index', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}');
INSERT INTO `wx_hmenu` VALUES ('145', '消息管理', '上传', 'MuReply-img', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '音乐管理', 'MuReply-index', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}', '{4AAD87A7-0BE3-435C-8668-58B0BF87289D}');
INSERT INTO `wx_hmenu` VALUES ('146', '消息管理', '新增', 'VoReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '语音管理', 'VoReply-index', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}');
INSERT INTO `wx_hmenu` VALUES ('147', '消息管理', '修改', 'VoReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '语音管理', 'VoReply-index', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}');
INSERT INTO `wx_hmenu` VALUES ('148', '消息管理', '删除', 'VoReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '语音管理', 'VoReply-index', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}');
INSERT INTO `wx_hmenu` VALUES ('149', '消息管理', '上传', 'VoReply-img', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '语音管理', 'VoReply-index', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}', '{784CCA9E-FB85-4316-B00A-AB46115C05BD}');
INSERT INTO `wx_hmenu` VALUES ('150', '消息管理', '新增', 'VeReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '视频管理', 'VeReply-index', '{581E987A-3E53-4934-AEDB-ED3B48270289}', '{581E987A-3E53-4934-AEDB-ED3B48270289}');
INSERT INTO `wx_hmenu` VALUES ('151', '消息管理', '修改', 'VeReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '视频管理', 'VeReply-index', '{581E987A-3E53-4934-AEDB-ED3B48270289}', '{581E987A-3E53-4934-AEDB-ED3B48270289}');
INSERT INTO `wx_hmenu` VALUES ('152', '消息管理', '上传', 'VeReply-img', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '视频管理', 'VeReply-index', '{581E987A-3E53-4934-AEDB-ED3B48270289}', '{581E987A-3E53-4934-AEDB-ED3B48270289}');
INSERT INTO `wx_hmenu` VALUES ('153', '消息管理', '删除', 'VeReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '视频管理', 'VeReply-index', '{581E987A-3E53-4934-AEDB-ED3B48270289}', '{581E987A-3E53-4934-AEDB-ED3B48270289}');
INSERT INTO `wx_hmenu` VALUES ('154', '消息管理', '新增', 'ImgReply-add', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图片管理', 'ImgReply-index', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}');
INSERT INTO `wx_hmenu` VALUES ('155', '消息管理', '修改', 'ImgReply-update', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图片管理', 'ImgReply-index', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}');
INSERT INTO `wx_hmenu` VALUES ('156', '消息管理', '上传', 'ImgReply-img', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图片管理', 'ImgReply-index', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}');
INSERT INTO `wx_hmenu` VALUES ('157', '消息管理', '删除', 'ImgReply-delete', '1', null, 'admin', '2016-05-25 11:56:01', null, null, '图片管理', 'ImgReply-index', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}', '{F6BF3EA7-55CA-46FC-98E4-C7D8FBD7B708}');
INSERT INTO `wx_hmenu` VALUES ('158', '消息回复', '新增', 'KeyReply-add', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '关键字回复', 'KeyReply-index', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}');
INSERT INTO `wx_hmenu` VALUES ('159', '消息回复', '修改', 'KeyReply-update', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '关键字回复', 'KeyReply-index', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}');
INSERT INTO `wx_hmenu` VALUES ('160', '消息回复', '删除', 'KeyReply-delete', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '关键字回复', 'KeyReply-index', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}', '{E4170E5A-495A-4D91-91C7-3B52120F7D00}');
INSERT INTO `wx_hmenu` VALUES ('161', '消息回复', '回复', 'Message-update', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '普通回复', 'Message-index', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}');
INSERT INTO `wx_hmenu` VALUES ('162', '消息回复', '统计', 'Message-count', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '普通回复', 'Message-index', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}');
INSERT INTO `wx_hmenu` VALUES ('163', '消息回复', '删除', 'Message-delete', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '普通回复', 'Message-index', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}', '{17EE361B-84F0-4EE3-93FB-9B96544C6DD9}');
INSERT INTO `wx_hmenu` VALUES ('164', '消息回复', '群发', 'Send-add', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '群发管理', 'Send-index', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}');
INSERT INTO `wx_hmenu` VALUES ('165', '消息回复', '删除', 'Send-delete', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '群发管理', 'Send-index', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}');
INSERT INTO `wx_hmenu` VALUES ('166', '消息回复', '统计', 'Send-count', '1', null, 'admin', '2016-05-25 11:58:50', null, null, '群发管理', 'Send-index', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}', '{83A8A933-6D21-4945-BA20-DAE187ACCBC6}');
INSERT INTO `wx_hmenu` VALUES ('167', '评论管理', '回复', 'Comment-update', '1', null, 'admin', '2016-05-25 11:59:45', null, null, '评论列表', 'Comment-index', '{6FC0596A-2AA2-4A8F-AAF2-9BA29C204344}', '{6FC0596A-2AA2-4A8F-AAF2-9BA29C204344}');
INSERT INTO `wx_hmenu` VALUES ('168', '评论管理', '删除', 'Comment-delete', '1', null, 'admin', '2016-05-25 11:59:45', null, null, '评论列表', 'Comment-index', '{6FC0596A-2AA2-4A8F-AAF2-9BA29C204344}', '{6FC0596A-2AA2-4A8F-AAF2-9BA29C204344}');
INSERT INTO `wx_hmenu` VALUES ('186', '系统统计', null, null, '1', null, 'admin', '2016-05-26 09:56:59', null, null, '区域图', 'MaState-chartone.html', '{E36BCC87-7441-423E-96BA-DA53911E6B1C}', null);
INSERT INTO `wx_hmenu` VALUES ('187', '系统统计', null, null, '1', null, 'admin', '2016-05-26 09:56:59', null, null, '3D柱状图', 'MaState-charttwo.html', '{A66DDFE3-DF31-47E1-A1B5-D79A846BA179}', null);
INSERT INTO `wx_hmenu` VALUES ('207', '系统管理', null, null, '1', null, 'admin', '2016-05-26 10:03:35', null, null, '屏蔽词', 'WxOther-shield', '{8B58BF77-F822-49A2-AD00-69FEBE36AC67}', null);
INSERT INTO `wx_hmenu` VALUES ('208', '系统管理', '新增', 'WxCategory-add', '1', null, 'admin', '2016-05-26 10:03:35', null, null, '数据字典', 'WxCategory-index', '{9119C9D0-ED1C-466B-8336-8062711C44BE}', '{9119C9D0-ED1C-466B-8336-8062711C44BE}');
INSERT INTO `wx_hmenu` VALUES ('209', '系统管理', '修改', 'WxCategory-update', '1', null, 'admin', '2016-05-26 10:03:35', null, null, '数据字典', 'WxCategory-index', '{9119C9D0-ED1C-466B-8336-8062711C44BE}', '{9119C9D0-ED1C-466B-8336-8062711C44BE}');
INSERT INTO `wx_hmenu` VALUES ('210', '系统管理', '删除', 'WxCategory-delete', '1', null, 'admin', '2016-05-26 10:03:35', null, null, '数据字典', 'WxCategory-index', '{9119C9D0-ED1C-466B-8336-8062711C44BE}', '{9119C9D0-ED1C-466B-8336-8062711C44BE}');
INSERT INTO `wx_hmenu` VALUES ('211', '系统管理', '上传', 'WxCategory-img', '1', null, 'admin', '2016-05-26 10:03:35', null, null, '数据字典', 'WxCategory-index', '{9119C9D0-ED1C-466B-8336-8062711C44BE}', '{9119C9D0-ED1C-466B-8336-8062711C44BE}');
INSERT INTO `wx_hmenu` VALUES ('215', '系统管理', '', '', '1', null, 'admin', '2016-05-26 10:03:35', null, null, '系统日志', 'WxOther-log', '{93579EAF-C607-487F-B07B-3FB039CAA222}', '{9119C9D0-ED1C-466B-8336-8062711C44BE}');
INSERT INTO `wx_hmenu` VALUES ('216', '内容管理', '新增', 'WxArticle-add', '1', null, 'admin', '2016-05-26 16:37:21', null, null, '文章管理', 'WxArticle-index', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}');
INSERT INTO `wx_hmenu` VALUES ('217', '内容管理', '修改', 'WxArticle-update', '1', null, 'admin', '2016-05-26 16:37:21', null, null, '文章管理', 'WxArticle-index', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}');
INSERT INTO `wx_hmenu` VALUES ('218', '内容管理', '删除', 'WxArticle-delete', '1', null, 'admin', '2016-05-26 16:37:21', null, null, '文章管理', 'WxArticle-index', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}', '{DB595F8D-11B7-450A-86B8-DD24D9AA9C1D}');

-- ----------------------------
-- Table structure for wx_imgreply
-- ----------------------------
DROP TABLE IF EXISTS `wx_imgreply`;
CREATE TABLE `wx_imgreply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_imgreply
-- ----------------------------

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
-- Table structure for wx_keyreply
-- ----------------------------
DROP TABLE IF EXISTS `wx_keyreply`;
CREATE TABLE `wx_keyreply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `key_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_count` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_keyreply
-- ----------------------------
INSERT INTO `wx_keyreply` VALUES ('2', 'v多少', 'vereply', '1', '1', '2', 'lyw007', '2016-05-19 13:28:46', null, null, null);

-- ----------------------------
-- Table structure for wx_log
-- ----------------------------
DROP TABLE IF EXISTS `wx_log`;
CREATE TABLE `wx_log` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `count` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_log
-- ----------------------------
INSERT INTO `wx_log` VALUES ('1', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-24 17:23:53', '1');
INSERT INTO `wx_log` VALUES ('2', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-24 17:44:50', '1');
INSERT INTO `wx_log` VALUES ('3', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-24 17:45:23', '1');
INSERT INTO `wx_log` VALUES ('4', '登陆失败!', 'lyw007', '127.0.0.1', '2016-05-24 17:47:01', '1');
INSERT INTO `wx_log` VALUES ('5', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-25 10:07:54', '1');
INSERT INTO `wx_log` VALUES ('6', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-25 10:32:51', '1');
INSERT INTO `wx_log` VALUES ('7', '登陆失败!', 'lyw007', '127.0.0.1', '2016-05-25 11:19:31', '1');
INSERT INTO `wx_log` VALUES ('8', '登陆成功!', 'lyw007', '127.0.0.1', '2016-05-25 11:20:12', '1');
INSERT INTO `wx_log` VALUES ('9', '登陆失败!', 'lyw001', '127.0.0.1', '2016-05-25 17:35:00', '11');
INSERT INTO `wx_log` VALUES ('10', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 17:40:41', '11');
INSERT INTO `wx_log` VALUES ('11', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:01:12', '11');
INSERT INTO `wx_log` VALUES ('12', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:21:45', '11');
INSERT INTO `wx_log` VALUES ('13', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:21:48', '11');
INSERT INTO `wx_log` VALUES ('14', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:21:58', '11');
INSERT INTO `wx_log` VALUES ('15', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:22:19', '11');
INSERT INTO `wx_log` VALUES ('16', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:38:57', '11');
INSERT INTO `wx_log` VALUES ('17', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:39:28', '11');
INSERT INTO `wx_log` VALUES ('18', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:39:42', '11');
INSERT INTO `wx_log` VALUES ('19', '登陆成功!', 'lyw001', '127.0.0.1', '2016-05-25 18:40:26', '11');
INSERT INTO `wx_log` VALUES ('20', '登陆成功!', 'lyw002', '127.0.0.1', '2016-05-25 18:44:04', '1');
INSERT INTO `wx_log` VALUES ('21', '登陆成功!', 'lyw002', '127.0.0.1', '2016-05-26 09:17:48', '1');
INSERT INTO `wx_log` VALUES ('22', '登陆成功!', 'lyw002', '127.0.0.1', '2016-05-26 09:21:29', '1');
INSERT INTO `wx_log` VALUES ('23', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 10:58:06', '11');
INSERT INTO `wx_log` VALUES ('24', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 11:21:19', '11');
INSERT INTO `wx_log` VALUES ('25', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 15:58:38', '11');
INSERT INTO `wx_log` VALUES ('26', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 15:58:38', '11');
INSERT INTO `wx_log` VALUES ('27', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 15:58:44', '11');
INSERT INTO `wx_log` VALUES ('28', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 15:58:48', '11');
INSERT INTO `wx_log` VALUES ('29', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 15:58:49', '11');
INSERT INTO `wx_log` VALUES ('30', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:01:53', '11');
INSERT INTO `wx_log` VALUES ('31', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:02:05', '11');
INSERT INTO `wx_log` VALUES ('32', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:02:11', '11');
INSERT INTO `wx_log` VALUES ('33', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:02:12', '11');
INSERT INTO `wx_log` VALUES ('34', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:02:12', '11');
INSERT INTO `wx_log` VALUES ('35', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:09', '11');
INSERT INTO `wx_log` VALUES ('36', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:10', '11');
INSERT INTO `wx_log` VALUES ('37', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:12', '11');
INSERT INTO `wx_log` VALUES ('38', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:14', '11');
INSERT INTO `wx_log` VALUES ('39', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:15', '11');
INSERT INTO `wx_log` VALUES ('40', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:16', '11');
INSERT INTO `wx_log` VALUES ('41', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:17', '11');
INSERT INTO `wx_log` VALUES ('42', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:18', '11');
INSERT INTO `wx_log` VALUES ('43', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:03:20', '11');
INSERT INTO `wx_log` VALUES ('44', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:00', '11');
INSERT INTO `wx_log` VALUES ('45', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:01', '11');
INSERT INTO `wx_log` VALUES ('46', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:27', '11');
INSERT INTO `wx_log` VALUES ('47', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:27', '11');
INSERT INTO `wx_log` VALUES ('48', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:31', '11');
INSERT INTO `wx_log` VALUES ('49', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:30:32', '11');
INSERT INTO `wx_log` VALUES ('50', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:30', '11');
INSERT INTO `wx_log` VALUES ('51', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:30', '11');
INSERT INTO `wx_log` VALUES ('52', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:33', '11');
INSERT INTO `wx_log` VALUES ('53', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:33', '11');
INSERT INTO `wx_log` VALUES ('54', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:39', '11');
INSERT INTO `wx_log` VALUES ('55', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:41', '11');
INSERT INTO `wx_log` VALUES ('56', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:47', '11');
INSERT INTO `wx_log` VALUES ('57', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:31:49', '11');
INSERT INTO `wx_log` VALUES ('58', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:32:31', '11');
INSERT INTO `wx_log` VALUES ('59', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:32:31', '11');
INSERT INTO `wx_log` VALUES ('60', '登陆成功!', 'lyw002', '127.0.0.1', '2016-05-26 16:38:36', '1');
INSERT INTO `wx_log` VALUES ('61', '登陆成功!', 'lyw002', '127.0.0.1', '2016-05-26 16:38:36', '1');
INSERT INTO `wx_log` VALUES ('62', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:39:16', '11');
INSERT INTO `wx_log` VALUES ('63', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:39:17', '11');
INSERT INTO `wx_log` VALUES ('64', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:40:33', '11');
INSERT INTO `wx_log` VALUES ('65', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:40:52', '11');
INSERT INTO `wx_log` VALUES ('66', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:40:53', '11');
INSERT INTO `wx_log` VALUES ('67', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:40:54', '11');
INSERT INTO `wx_log` VALUES ('68', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:40:58', '11');
INSERT INTO `wx_log` VALUES ('69', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:42:02', '11');
INSERT INTO `wx_log` VALUES ('70', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:42:04', '11');
INSERT INTO `wx_log` VALUES ('71', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:42:11', '11');
INSERT INTO `wx_log` VALUES ('72', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:43:42', '11');
INSERT INTO `wx_log` VALUES ('73', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:43:45', '11');
INSERT INTO `wx_log` VALUES ('74', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:43:45', '11');
INSERT INTO `wx_log` VALUES ('75', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:44:43', '11');
INSERT INTO `wx_log` VALUES ('76', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:44:43', '11');
INSERT INTO `wx_log` VALUES ('77', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:44:45', '11');
INSERT INTO `wx_log` VALUES ('78', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:44:46', '11');
INSERT INTO `wx_log` VALUES ('79', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:45:16', '11');
INSERT INTO `wx_log` VALUES ('80', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:45:18', '11');
INSERT INTO `wx_log` VALUES ('81', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:45:21', '11');
INSERT INTO `wx_log` VALUES ('82', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:45:21', '11');
INSERT INTO `wx_log` VALUES ('83', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:06', '11');
INSERT INTO `wx_log` VALUES ('84', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:10', '11');
INSERT INTO `wx_log` VALUES ('85', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:11', '11');
INSERT INTO `wx_log` VALUES ('86', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:13', '11');
INSERT INTO `wx_log` VALUES ('87', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:13', '11');
INSERT INTO `wx_log` VALUES ('88', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:15', '11');
INSERT INTO `wx_log` VALUES ('89', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:15', '11');
INSERT INTO `wx_log` VALUES ('90', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:17', '11');
INSERT INTO `wx_log` VALUES ('91', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:19', '11');
INSERT INTO `wx_log` VALUES ('92', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:46:23', '11');
INSERT INTO `wx_log` VALUES ('93', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:03', '11');
INSERT INTO `wx_log` VALUES ('94', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:05', '11');
INSERT INTO `wx_log` VALUES ('95', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:05', '11');
INSERT INTO `wx_log` VALUES ('96', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:08', '11');
INSERT INTO `wx_log` VALUES ('97', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:17', '11');
INSERT INTO `wx_log` VALUES ('98', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:18', '11');
INSERT INTO `wx_log` VALUES ('99', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:48:19', '11');
INSERT INTO `wx_log` VALUES ('100', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:10', '11');
INSERT INTO `wx_log` VALUES ('101', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:10', '11');
INSERT INTO `wx_log` VALUES ('102', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:24', '11');
INSERT INTO `wx_log` VALUES ('103', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:24', '11');
INSERT INTO `wx_log` VALUES ('104', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:56', '11');
INSERT INTO `wx_log` VALUES ('105', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:49:56', '11');
INSERT INTO `wx_log` VALUES ('106', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:50:17', '11');
INSERT INTO `wx_log` VALUES ('107', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:50:18', '11');
INSERT INTO `wx_log` VALUES ('108', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:50:19', '11');
INSERT INTO `wx_log` VALUES ('109', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:50:20', '11');
INSERT INTO `wx_log` VALUES ('110', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:50:22', '11');
INSERT INTO `wx_log` VALUES ('111', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:51:05', '11');
INSERT INTO `wx_log` VALUES ('112', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:51:06', '11');
INSERT INTO `wx_log` VALUES ('113', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:51:08', '11');
INSERT INTO `wx_log` VALUES ('114', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:51:27', '11');
INSERT INTO `wx_log` VALUES ('115', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:51:27', '11');
INSERT INTO `wx_log` VALUES ('116', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:19', '11');
INSERT INTO `wx_log` VALUES ('117', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:20', '11');
INSERT INTO `wx_log` VALUES ('118', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:22', '11');
INSERT INTO `wx_log` VALUES ('119', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:24', '11');
INSERT INTO `wx_log` VALUES ('120', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:24', '11');
INSERT INTO `wx_log` VALUES ('121', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:27', '11');
INSERT INTO `wx_log` VALUES ('122', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:27', '11');
INSERT INTO `wx_log` VALUES ('123', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:36', '11');
INSERT INTO `wx_log` VALUES ('124', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:37', '11');
INSERT INTO `wx_log` VALUES ('125', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:39', '11');
INSERT INTO `wx_log` VALUES ('126', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:40', '11');
INSERT INTO `wx_log` VALUES ('127', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:40', '11');
INSERT INTO `wx_log` VALUES ('128', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:43', '11');
INSERT INTO `wx_log` VALUES ('129', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:43', '11');
INSERT INTO `wx_log` VALUES ('130', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:45', '11');
INSERT INTO `wx_log` VALUES ('131', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:46', '11');
INSERT INTO `wx_log` VALUES ('132', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:56', '11');
INSERT INTO `wx_log` VALUES ('133', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:56', '11');
INSERT INTO `wx_log` VALUES ('134', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:57', '11');
INSERT INTO `wx_log` VALUES ('135', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:52:58', '11');
INSERT INTO `wx_log` VALUES ('136', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:54:35', '11');
INSERT INTO `wx_log` VALUES ('137', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:54:35', '11');
INSERT INTO `wx_log` VALUES ('138', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:54:46', '11');
INSERT INTO `wx_log` VALUES ('139', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:55:15', '11');
INSERT INTO `wx_log` VALUES ('140', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:55:16', '11');
INSERT INTO `wx_log` VALUES ('141', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:55:20', '11');
INSERT INTO `wx_log` VALUES ('142', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:56:05', '11');
INSERT INTO `wx_log` VALUES ('143', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:56:05', '11');
INSERT INTO `wx_log` VALUES ('144', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:56:08', '11');
INSERT INTO `wx_log` VALUES ('145', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:56:08', '11');
INSERT INTO `wx_log` VALUES ('146', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:57:20', '11');
INSERT INTO `wx_log` VALUES ('147', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:57:23', '11');
INSERT INTO `wx_log` VALUES ('148', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:57:23', '11');
INSERT INTO `wx_log` VALUES ('149', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:57:26', '11');
INSERT INTO `wx_log` VALUES ('150', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:39', '11');
INSERT INTO `wx_log` VALUES ('151', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:39', '11');
INSERT INTO `wx_log` VALUES ('152', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:41', '11');
INSERT INTO `wx_log` VALUES ('153', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:42', '11');
INSERT INTO `wx_log` VALUES ('154', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:45', '11');
INSERT INTO `wx_log` VALUES ('155', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:46', '11');
INSERT INTO `wx_log` VALUES ('156', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:48', '11');
INSERT INTO `wx_log` VALUES ('157', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:48', '11');
INSERT INTO `wx_log` VALUES ('158', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:50', '11');
INSERT INTO `wx_log` VALUES ('159', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:51', '11');
INSERT INTO `wx_log` VALUES ('160', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:58:52', '11');
INSERT INTO `wx_log` VALUES ('161', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:05', '11');
INSERT INTO `wx_log` VALUES ('162', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:06', '11');
INSERT INTO `wx_log` VALUES ('163', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:09', '11');
INSERT INTO `wx_log` VALUES ('164', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:09', '11');
INSERT INTO `wx_log` VALUES ('165', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:12', '11');
INSERT INTO `wx_log` VALUES ('166', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:18', '11');
INSERT INTO `wx_log` VALUES ('167', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 16:59:19', '11');
INSERT INTO `wx_log` VALUES ('168', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 17:00:08', '11');
INSERT INTO `wx_log` VALUES ('169', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 17:00:09', '11');
INSERT INTO `wx_log` VALUES ('170', '登陆成功!', 'lyw003', '127.0.0.1', '2016-05-26 17:00:12', '11');

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
-- Table structure for wx_message
-- ----------------------------
DROP TABLE IF EXISTS `wx_message`;
CREATE TABLE `wx_message` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `count` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_user` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sendcount` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `fkid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_message
-- ----------------------------

-- ----------------------------
-- Table structure for wx_mureply
-- ----------------------------
DROP TABLE IF EXISTS `wx_mureply`;
CREATE TABLE `wx_mureply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `music_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hq_music` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `th_media` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_mureply
-- ----------------------------
INSERT INTO `wx_mureply` VALUES ('1', '如果这就是命', '  『ささやかな欲望/ありがとう あなた』は1975年9月にリリースされた山口百恵の10枚目のシングルである。山口百恵のシングルは「ちっぽけな感傷」を除.', 'http://music.163.com/#/m/song?id=25726275', 'http://music.163.com/#/m/song?id=25726275', null, 'http://localhost:80/wxdemo/Uploads/music/url/2016-05-17/573ad421a8d75.mp3', '1', '2', 'lyw007', '2016-05-17 16:21:29', null, null, null);

-- ----------------------------
-- Table structure for wx_news
-- ----------------------------
DROP TABLE IF EXISTS `wx_news`;
CREATE TABLE `wx_news` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ne_img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ne_count` text COLLATE utf8_unicode_ci,
  `ne_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT '0',
  `author` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `cate` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_news
-- ----------------------------
INSERT INTO `wx_news` VALUES ('1', '我们的家', '/tw/img/2016-05-26/5746b69aa152d.jpg', '&lt;p&gt;&amp;nbsp;&lt;span style=&quot;font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;某日，樱子在爱丽丝和奏太的房间里看到了爱丽丝做的展示伴家家族关系的照片。在光太郎和新太郎的照片上画着爱心。这意味着最近他二人与爱丽丝的关系越来越亲近了。晚饭时，樱子打量着集合在饭桌前的一家人，声称这群人中有人背叛了去世的妈妈。一时间饭桌上气氛变得极其紧张，琴音询问谁是叛徒，一听这话，樱子一阵怪笑。吃过晚饭后，连没有画上爱心的祖父奏一郎的照片也找到了的樱子，开始审问哥哥、弟弟和祖父与爱丽丝的关系。光太郎兄弟对樱子的质问采取了反抗态度。遭到反抗的樱子十分困惑，不过，她也从中发现了爱丽丝收买人心的策略。这时，丈治正在为前妻不肯让他见儿子龙治而苦恼。爱丽丝非常用同情他，说要帮他解决这个问题，正好被樱子听见了。她们争着要比对方早一步解决丈治的难题。然而在丈治前妻的家门口，她们发现丈治的前妻已经有了新男友，而且龙治管那个男人叫爸爸，一家三口看起来很幸福。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img src=&quot;http://localhost/wxdemo/umeditor/php/upload/20160526/14642530888339.jpg&quot; _src=&quot;http://localhost/wxdemo/umeditor/php/upload/20160526/14642530888339.jpg&quot; style=&quot;width: 429.777777671814px; height: 397.777777671814px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp;&lt;span style=&quot;font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;平时就有咬人习惯的桃子在幼儿园咬了朋友。祖父奏一郎被园长叫来，他催桃子道歉，但是桃子却不高兴，更不肯道歉。园长不明白桃子爱咬人的原因，而奏一郎也不明所以。樱子听说后，推测也许妹妹是借此缓解压力。琴音也附和着说孩子对环境的变化极为敏感。爱丽丝听完后觉得她们是在暗示自己才是造成桃子反常的原因。樱子干脆指责爱丽丝是混进伴家的病毒。这时，新太郎开口说桃子爱咬人的毛病是从妈妈去世后才养成的。光太郎也同意他的说法。奏太问他们有没有直接向桃子打听她咬人的理由，众人一听不禁面面相觑。&lt;/span&gt;&lt;/p&gt;', '', '刘永望', '11', '8', 'lyw003', '2016-05-26 16:42:02', null, null, null, null);
INSERT INTO `wx_news` VALUES ('3', '我们的家园吧', '/tw/img/2016-05-26/5746b8fcd3ff5.jpg', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&lt;span style=&quot;font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;樱子在中学的音乐教室听光太郎弹舒伯特的钢琴曲。就在乐曲终了的一瞬间，一群女孩子忽然从周围涌了出来。她们都是光太郎的粉丝。樱子被这些女孩子挤得东倒西歪，不禁向哥哥发牢骚。另一方面，爱丽丝在奏太的衬衫上发现口红的痕迹，马上大发雷霆。奏太解释说那是粉丝留下的。琴音见状说男人都是些见异思迁的东西，樱子和爱丽丝更加烦躁。由于有了共同语言而意气相投的伴家女性们决定不给这些朝三暮四的男人做饭，一起带桃子出去吃饭。被扔在家里的奏太等男性心情都不好，新太郎抱怨说自己根本没有劈腿却也跟着倒霉。过了一天，樱子到奏太演出的酒吧，把那些围在他身边转的女粉丝赶跑了。而爱丽丝到中学为光太郎的粉丝团拍了照，家里的女人们让光太郎从照片中选一个做女朋友，这样其他女孩才会死心。光太郎急得哭了起来。爱丽斯、樱子认为他是对女孩不感兴趣。不过祖父和光太郎谈过话后告诉她们，光太郎不是讨厌女孩，而是眼光高，还透露说光太郎的心上人近在咫尺。樱子怀疑哥哥喜欢的是自己。&lt;/span&gt;&lt;/p&gt;', '', '刘永望', '11', '8', 'lyw003', '2016-05-26 16:51:27', null, null, null, null);
INSERT INTO `wx_news` VALUES ('4', '注意道德', '/tw/img/2016-05-26/5746ba76cf469.jpg', '&lt;p&gt;&amp;nbsp;&lt;span style=&quot;font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;某日，樱子在爱丽丝和奏太的房间里看到了爱丽丝做的展示伴家家族关系的照片。在光太郎和新太郎的照片上画着爱心。这意味着最近他二人与爱丽丝的关系越来越亲近了。晚饭时，樱子打量着集合在饭桌前的一家人，声称这群人中有人背叛了去世的妈妈。一时间饭桌上气氛变得极其紧张，琴音询问谁是叛徒，一听这话，樱子一阵怪笑。吃过晚饭后，连没有画上爱心的祖父奏一郎的照片也找到了的樱子，开始审问哥哥、弟弟和祖父与爱丽丝的关系。光太郎兄弟对樱子的质问采取了反抗态度。遭到反抗的樱子十分困惑，不过，她也从中发现了爱丽丝收买人心的策略。这时，丈治正在为前妻不肯让他见儿子龙治而苦恼。爱丽丝非常用同情他，说要帮他解决这个问题，正好被樱子听见了。她们争着要比对方早一步解决丈治的难题。然而在丈治前妻的家门口，她们发现丈治的前妻已经有了新男友，而且龙治管那个男人叫爸爸，一家三口看起来很幸福。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;img src=&quot;http://localhost/wxdemo/umeditor/php/upload/20160526/14642530888339.jpg&quot; _src=&quot;http://localhost/wxdemo/umeditor/php/upload/20160526/14642530888339.jpg&quot; style=&quot;width: 429.777777671814px; height: 397.777777671814px;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp;&lt;span style=&quot;font-family: arial, 宋体, sans-serif; font-size: 14px; line-height: 24px; white-space: normal;&quot;&gt;平时就有咬人习惯的桃子在幼儿园咬了朋友。祖父奏一郎被园长叫来，他催桃子道歉，但是桃子却不高兴，更不肯道歉。园长不明白桃子爱咬人的原因，而奏一郎也不明所以。樱子听说后，推测也许妹妹是借此缓解压力。琴音也附和着说孩子对环境的变化极为敏感。爱丽丝听完后觉得她们是在暗示自己才是造成桃子反常的原因。樱子干脆指责爱丽丝是混进伴家的病毒。这时，新太郎开口说桃子爱咬人的毛病是从妈妈去世后才养成的。光太郎也同意他的说法。奏太问他们有没有直接向桃子打听她咬人的理由，众人一听不禁面面相觑。&lt;/span&gt;&lt;/p&gt;', '', '刘永望', '11', '8', 'lyw003', '2016-05-26 16:58:39', null, null, null, null);

-- ----------------------------
-- Table structure for wx_reply_mess
-- ----------------------------
DROP TABLE IF EXISTS `wx_reply_mess`;
CREATE TABLE `wx_reply_mess` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `reply_time` datetime DEFAULT NULL,
  `fk_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reply_sex` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rec_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rec_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rec_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rec_sex` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_reply_mess
-- ----------------------------

-- ----------------------------
-- Table structure for wx_rolue
-- ----------------------------
DROP TABLE IF EXISTS `wx_rolue`;
CREATE TABLE `wx_rolue` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number` text COLLATE utf8_unicode_ci,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8_unicode_ci,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `catalog` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_cate` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_rolue
-- ----------------------------
INSERT INTO `wx_rolue` VALUES ('14', '藏游客测试1', '{9E775256-1819-4D7C-9BDA-8440DA1E0EB3}', '11', 'TeReply-add,TeReply-update,TeReply-delete,GrReply-add,GrReply-update,GrReply-show,GrReply-delete,GrReply-img,MuReply-add,MuReply-update,MuReply-delete,MuReply-img,VoReply-add,VoReply-update,VoReply-delete,VoReply-img,VeReply-add,VeReply-update,VeReply-img,VeReply-delete,ImgReply-add,ImgReply-update,ImgReply-img,ImgReply-delete,KeyReply-add,KeyReply-update,KeyReply-delete,Message-update,Message-count,Message-delete,Send-add,Send-delete,Send-count', '1', null, '2016-05-25 17:29:12', null, null, '消息管理,消息回复', '文本管理+TeReply-index,图文管理+GrReply-index,音乐管理+MuReply-index,语音管理+VoReply-index,视频管理+VeReply-index,图片管理+ImgReply-index,关键字回复+KeyReply-index,普通回复+Message-index,群发管理+Send-index');
INSERT INTO `wx_rolue` VALUES ('15', '藏游客测试2', '{8DB0F102-E08B-43C6-BAC9-80875C6C27DB}', '1', 'WxOther-welcome,WxIndex-index,TeReply-add,TeReply-update,TeReply-delete,GrReply-add,GrReply-update,GrReply-show,GrReply-delete,GrReply-img,MuReply-add,MuReply-update,MuReply-delete,MuReply-img,VoReply-add,VoReply-update,VoReply-delete,VoReply-img,VeReply-add,VeReply-update,VeReply-img,VeReply-delete,ImgReply-add,ImgReply-update,ImgReply-img,ImgReply-delete,KeyReply-add,KeyReply-update,KeyReply-delete,Message-update,Message-count,Message-delete,Send-add,Send-delete,Send-count,Comment-update,Comment-delete,WxCategory-add,WxCategory-update,WxCategory-delete,WxCategory-img', '1', null, '2016-05-25 17:29:55', null, null, '基本设置,消息管理,消息回复,评论管理,系统管理', '微信用户管理+WxUser-index,文本管理+TeReply-index,图文管理+GrReply-index,音乐管理+MuReply-index,语音管理+VoReply-index,视频管理+VeReply-index,图片管理+ImgReply-index,关键字回复+KeyReply-index,普通回复+Message-index,群发管理+Send-index,评论列表+Comment-index,数据字典+WxCategory-index');
INSERT INTO `wx_rolue` VALUES ('17', '藏游客完整版本', '{7BFBC888-57F2-4DDF-AE6D-660B9A711B39}', '11', 'WxOther-welcome,WxIndex-index,TeReply-add,TeReply-update,TeReply-delete,GrReply-add,GrReply-update,GrReply-show,GrReply-delete,GrReply-img,MuReply-add,MuReply-update,MuReply-delete,MuReply-img,VoReply-add,VoReply-update,VoReply-delete,VoReply-img,KeyReply-add,KeyReply-update,KeyReply-delete,Message-update,Message-count,Message-delete,Send-add,Send-delete,Send-count,Comment-update,Comment-delete,WxCategory-add,WxCategory-update,WxCategory-delete,WxCategory-img,WxArticle-add,WxArticle-update,WxArticle-delete', '1', null, '2016-05-26 16:37:31', null, null, '基本设置,消息管理,消息回复,评论管理,系统统计,系统管理,内容管理', '微信用户管理+WxUser-index,文本管理+TeReply-index,图文管理+GrReply-index,音乐管理+MuReply-index,语音管理+VoReply-index,视频管理+VeReply-index,图片管理+ImgReply-index,关键字回复+KeyReply-index,普通回复+Message-index,群发管理+Send-index,评论列表+Comment-index,区域图+MaState-chartone.html,3D柱状图+MaState-charttwo.html,屏蔽词+WxOther-shield,数据字典+WxCategory-index,系统日志+WxOther-log,文章管理+WxArticle-index');

-- ----------------------------
-- Table structure for wx_send
-- ----------------------------
DROP TABLE IF EXISTS `wx_send`;
CREATE TABLE `wx_send` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `state` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_send
-- ----------------------------

-- ----------------------------
-- Table structure for wx_setcolumn
-- ----------------------------
DROP TABLE IF EXISTS `wx_setcolumn`;
CREATE TABLE `wx_setcolumn` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `scolumn` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `key_word` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describe` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `upload` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `re_number` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_setcolumn
-- ----------------------------
INSERT INTO `wx_setcolumn` VALUES ('4', '藏游客微信网站测试', 'key', '控制', 'img', '2046@jsadj.com', '', '1');
INSERT INTO `wx_setcolumn` VALUES ('5', '藏游客测试', '123', '213', '213', '123', '', '11');

-- ----------------------------
-- Table structure for wx_tereply
-- ----------------------------
DROP TABLE IF EXISTS `wx_tereply`;
CREATE TABLE `wx_tereply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `count` text COLLATE utf8_unicode_ci,
  `wxid` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_tereply
-- ----------------------------
INSERT INTO `wx_tereply` VALUES ('3', '测试', '这是我的第一个文本！12', '1', '2', 'lyw007', '2016-05-12 16:24:08', '2', 'lyw007', '2016-05-12 17:26:59');

-- ----------------------------
-- Table structure for wx_total
-- ----------------------------
DROP TABLE IF EXISTS `wx_total`;
CREATE TABLE `wx_total` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `a_strators` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `information` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `library` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_total
-- ----------------------------
INSERT INTO `wx_total` VALUES ('3', '2', null, null, '2016-05-23 15:54:40', null);
INSERT INTO `wx_total` VALUES ('4', '2', null, null, '2016-05-23 17:41:41', null);
INSERT INTO `wx_total` VALUES ('5', '2', null, null, '2016-05-24 09:15:08', null);
INSERT INTO `wx_total` VALUES ('6', '2', null, null, '2016-05-24 09:52:18', null);
INSERT INTO `wx_total` VALUES ('7', '2', null, null, '2016-05-24 11:15:01', null);
INSERT INTO `wx_total` VALUES ('8', '2', null, null, '2016-05-24 11:51:06', null);
INSERT INTO `wx_total` VALUES ('9', '2', null, null, '2016-05-24 14:16:30', null);
INSERT INTO `wx_total` VALUES ('10', '2', null, null, '2016-05-24 14:20:35', null);
INSERT INTO `wx_total` VALUES ('11', '2', null, null, '2016-05-24 14:37:16', null);
INSERT INTO `wx_total` VALUES ('12', '2', null, null, '2016-05-24 17:23:53', null);
INSERT INTO `wx_total` VALUES ('13', '2', null, null, '2016-05-25 10:07:54', null);
INSERT INTO `wx_total` VALUES ('14', '2', null, null, '2016-05-25 10:32:51', null);
INSERT INTO `wx_total` VALUES ('15', '2', null, null, '2016-05-25 11:20:12', '1');
INSERT INTO `wx_total` VALUES ('16', '6', null, null, '2016-05-25 17:35:00', null);
INSERT INTO `wx_total` VALUES ('17', '6', null, null, '2016-05-25 17:40:41', '11');
INSERT INTO `wx_total` VALUES ('18', '6', null, null, '2016-05-25 18:01:12', '11');
INSERT INTO `wx_total` VALUES ('19', '7', null, null, '2016-05-25 18:44:04', '11');
INSERT INTO `wx_total` VALUES ('20', '7', null, null, '2016-05-26 09:17:48', null);
INSERT INTO `wx_total` VALUES ('21', '8', null, null, '2016-05-26 10:58:06', '1');
INSERT INTO `wx_total` VALUES ('22', '8', null, null, '2016-05-26 11:21:19', '11');
INSERT INTO `wx_total` VALUES ('23', '8', null, null, '2016-05-26 16:30:26', '11');
INSERT INTO `wx_total` VALUES ('24', '7', null, null, '2016-05-26 16:38:36', '11');
INSERT INTO `wx_total` VALUES ('25', '8', null, null, '2016-05-26 16:39:16', '1');
INSERT INTO `wx_total` VALUES ('26', '8', null, null, '2016-05-26 16:54:34', null);

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
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_user
-- ----------------------------

-- ----------------------------
-- Table structure for wx_vereply
-- ----------------------------
DROP TABLE IF EXISTS `wx_vereply`;
CREATE TABLE `wx_vereply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ve_discription` text COLLATE utf8_unicode_ci,
  `media_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_vereply
-- ----------------------------
INSERT INTO `wx_vereply` VALUES ('1', '测试', '测试视频视频', '/vedio/url/2016-05-19/573d388964669.mp4', null, '1', '2', 'lyw007', '2016-05-19 11:52:51', null, null, null);

-- ----------------------------
-- Table structure for wx_voreply
-- ----------------------------
DROP TABLE IF EXISTS `wx_voreply`;
CREATE TABLE `wx_voreply` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wxid` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` datetime DEFAULT NULL,
  `update_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_voreply
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of wx_wechat
-- ----------------------------
INSERT INTO `wx_wechat` VALUES ('1', '微信测试', 'liuyw39424', '0', 'wxf9e681feaa48e47b', '5977610a8f73b25b5c3375a945474c2a', 'gh_64d4a88c1514', null, null, '1321394994@qq.com', '0BF2wQClh91fu1c4gt4JkiY5n5irPS7vI68iDObFuaT');
INSERT INTO `wx_wechat` VALUES ('11', '藏游客', 'tsxz_zyk', '2', 'wx8d6807dbae5be901', '38a4575e7167dc92a451ec4ca61e34f1', 'gh_13c5a2b71a03', null, '2016-05-25 10:18:22', 'zangyouke@ctibet.cn', null);
