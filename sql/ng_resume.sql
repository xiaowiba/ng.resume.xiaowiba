/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1:ng_resume
Source Server Version : 50173
Source Host           : 127.0.0.1:3306
Source Database       : ng_resume

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2018-11-26 14:34:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ngr_article`
-- ----------------------------
DROP TABLE IF EXISTS `ngr_article`;
CREATE TABLE `ngr_article` (
  `ccid` varchar(255) NOT NULL COMMENT '唯一ID',
  `cname` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `duty` varchar(255) DEFAULT NULL COMMENT '职务',
  `stime` varchar(255) DEFAULT NULL COMMENT '开始时间',
  `etime` varchar(255) DEFAULT NULL COMMENT '结束时间',
  `duration` varchar(255) DEFAULT NULL COMMENT '工作时长',
  `salary` int(11) DEFAULT NULL COMMENT '薪资',
  `content` longtext COMMENT '内容',
  `markdown` longtext COMMENT 'markdown',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `auth` int(1) NOT NULL DEFAULT '0' COMMENT '权限： 0:无 ; 1:有',
  `pwd` varchar(255) DEFAULT NULL COMMENT '访问密码',
  `exhibition` int(1) NOT NULL DEFAULT '1' COMMENT '展示： 0:不展示 ; 1:展示',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`ccid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ngr_article
-- ----------------------------
INSERT INTO `ngr_article` VALUES ('1c8693957d51cd9f11729a2fd4180702', '阿里巴巴科技有限公司', '前端/PHP', '2018-08', '2018-11', '4个月', null, 'test', 'test', '1', '0', null, '1', null);

-- ----------------------------
-- Table structure for `ngr_config`
-- ----------------------------
DROP TABLE IF EXISTS `ngr_config`;
CREATE TABLE `ngr_config` (
  `ffid` varchar(255) NOT NULL COMMENT '唯一ID',
  `access` int(1) NOT NULL DEFAULT '1' COMMENT '是否允许访问 0:不允许访问 ; 1:允许访问但数据加密 ; 2:允许访问且数据不加密',
  PRIMARY KEY (`ffid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ngr_config
-- ----------------------------
INSERT INTO `ngr_config` VALUES ('F0001', '1');

-- ----------------------------
-- Table structure for `ngr_user`
-- ----------------------------
DROP TABLE IF EXISTS `ngr_user`;
CREATE TABLE `ngr_user` (
  `uuid` varchar(255) NOT NULL COMMENT '唯一ID',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `pwd` varchar(255) NOT NULL COMMENT '密码',
  `realname` varchar(255) DEFAULT '' COMMENT '姓名',
  `sex` int(1) DEFAULT '0' COMMENT '0:男 ; 1:女 ; 2:保密',
  `birthday` varchar(255) DEFAULT NULL COMMENT '出生年月',
  `age` int(3) DEFAULT NULL COMMENT '年龄',
  `workinglife` int(11) DEFAULT NULL COMMENT '工作年限',
  `education` int(1) DEFAULT '1' COMMENT '0:专科 ; 1:本科 ; 2:研究生 ; 3:保密',
  `school` varchar(255) DEFAULT NULL COMMENT '毕业院校',
  `major` varchar(255) DEFAULT NULL COMMENT '大学专业',
  `duties` varchar(255) DEFAULT NULL COMMENT '大学职务',
  `political` int(1) DEFAULT '0' COMMENT '0:群众 ; 1:团员 ; 2:预备党员 ; 3:党员 ; 4:保密',
  `english` int(1) DEFAULT '1' COMMENT '0:无 ; 1:四级 ; 2:六级 ; 3:八级 ; 4:保密',
  `address` varchar(255) DEFAULT NULL COMMENT '家庭住址',
  `phone` varchar(255) DEFAULT NULL COMMENT '电话号码',
  `qq` varchar(255) DEFAULT NULL COMMENT 'qq',
  `wechat` varchar(255) DEFAULT NULL COMMENT '微信',
  `github` varchar(255) DEFAULT NULL COMMENT 'github',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `drivinglicense` varchar(255) DEFAULT NULL COMMENT '驾照',
  `blog` varchar(255) DEFAULT NULL COMMENT '博客',
  `skill` varchar(255) DEFAULT NULL COMMENT '技能',
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(255) DEFAULT NULL COMMENT '登录IP',
  `logincount` int(11) DEFAULT NULL COMMENT '登录次数',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `auth` int(1) NOT NULL DEFAULT '2' COMMENT '权限：0:超级管理员 ; 1:测试 ; 2:普通用户',
  PRIMARY KEY (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ngr_user
-- ----------------------------
INSERT INTO `ngr_user` VALUES ('U0002', 'test', '098f6bcd4621d373cade4e832627b4f6', '测试', '0', '2018.1.1', '18', '2', '1', '牛津', '佛学', '测试', '0', '1', null, '15866886688', '123456', 'test', 'https://github.com/', 'test@test.com', null, 'http://xiaowiba.com', '测试,运维', '1542865835', '127.0.0.1', '2', null, '1');