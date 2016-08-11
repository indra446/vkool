/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : dbcake

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-06-03 12:22:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `acos`
-- ----------------------------
DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=857 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('1', null, null, null, 'controllers', '1', '118');
INSERT INTO `acos` VALUES ('2', '1', null, null, 'Groups', '2', '13');
INSERT INTO `acos` VALUES ('3', '2', null, null, 'index', '3', '4');
INSERT INTO `acos` VALUES ('4', '2', null, null, 'view', '5', '6');
INSERT INTO `acos` VALUES ('5', '2', null, null, 'add', '7', '8');
INSERT INTO `acos` VALUES ('6', '2', null, null, 'edit', '9', '10');
INSERT INTO `acos` VALUES ('7', '2', null, null, 'delete', '11', '12');
INSERT INTO `acos` VALUES ('8', '1', null, null, 'Pages', '14', '19');
INSERT INTO `acos` VALUES ('9', '8', null, null, 'display', '15', '16');
INSERT INTO `acos` VALUES ('10', '1', null, null, 'Posts', '20', '31');
INSERT INTO `acos` VALUES ('11', '10', null, null, 'index', '21', '22');
INSERT INTO `acos` VALUES ('12', '10', null, null, 'view', '23', '24');
INSERT INTO `acos` VALUES ('13', '10', null, null, 'add', '25', '26');
INSERT INTO `acos` VALUES ('14', '10', null, null, 'edit', '27', '28');
INSERT INTO `acos` VALUES ('15', '10', null, null, 'delete', '29', '30');
INSERT INTO `acos` VALUES ('16', '1', null, null, 'Users', '32', '49');
INSERT INTO `acos` VALUES ('17', '16', null, null, 'index', '33', '34');
INSERT INTO `acos` VALUES ('18', '16', null, null, 'login', '35', '36');
INSERT INTO `acos` VALUES ('19', '16', null, null, 'logout', '37', '38');
INSERT INTO `acos` VALUES ('20', '16', null, null, 'view', '39', '40');
INSERT INTO `acos` VALUES ('21', '16', null, null, 'add', '41', '42');
INSERT INTO `acos` VALUES ('22', '16', null, null, 'edit', '43', '44');
INSERT INTO `acos` VALUES ('23', '16', null, null, 'delete', '45', '46');
INSERT INTO `acos` VALUES ('24', '1', null, null, 'Widgets', '50', '61');
INSERT INTO `acos` VALUES ('25', '24', null, null, 'index', '51', '52');
INSERT INTO `acos` VALUES ('26', '24', null, null, 'view', '53', '54');
INSERT INTO `acos` VALUES ('27', '24', null, null, 'add', '55', '56');
INSERT INTO `acos` VALUES ('28', '24', null, null, 'edit', '57', '58');
INSERT INTO `acos` VALUES ('29', '24', null, null, 'delete', '59', '60');
INSERT INTO `acos` VALUES ('31', '16', null, null, 'initDB', '47', '48');
INSERT INTO `acos` VALUES ('32', '8', null, null, 'depan', '17', '18');
INSERT INTO `acos` VALUES ('829', '1', null, null, 'Acl', '62', '117');
INSERT INTO `acos` VALUES ('830', '829', null, null, 'Acl', '63', '68');
INSERT INTO `acos` VALUES ('831', '830', null, null, 'index', '64', '65');
INSERT INTO `acos` VALUES ('832', '830', null, null, 'admin_index', '66', '67');
INSERT INTO `acos` VALUES ('833', '829', null, null, 'Acos', '69', '80');
INSERT INTO `acos` VALUES ('834', '833', null, null, 'admin_index', '70', '71');
INSERT INTO `acos` VALUES ('835', '833', null, null, 'admin_empty_acos', '72', '73');
INSERT INTO `acos` VALUES ('836', '833', null, null, 'admin_build_acl', '74', '75');
INSERT INTO `acos` VALUES ('837', '833', null, null, 'admin_prune_acos', '76', '77');
INSERT INTO `acos` VALUES ('838', '833', null, null, 'admin_synchronize', '78', '79');
INSERT INTO `acos` VALUES ('839', '829', null, null, 'Aros', '81', '116');
INSERT INTO `acos` VALUES ('840', '839', null, null, 'admin_index', '82', '83');
INSERT INTO `acos` VALUES ('841', '839', null, null, 'admin_check', '84', '85');
INSERT INTO `acos` VALUES ('842', '839', null, null, 'admin_users', '86', '87');
INSERT INTO `acos` VALUES ('843', '839', null, null, 'admin_update_user_role', '88', '89');
INSERT INTO `acos` VALUES ('844', '839', null, null, 'admin_ajax_role_permissions', '90', '91');
INSERT INTO `acos` VALUES ('845', '839', null, null, 'admin_role_permissions', '92', '93');
INSERT INTO `acos` VALUES ('846', '839', null, null, 'admin_user_permissions', '94', '95');
INSERT INTO `acos` VALUES ('847', '839', null, null, 'admin_empty_permissions', '96', '97');
INSERT INTO `acos` VALUES ('848', '839', null, null, 'admin_clear_user_specific_permissions', '98', '99');
INSERT INTO `acos` VALUES ('849', '839', null, null, 'admin_grant_all_controllers', '100', '101');
INSERT INTO `acos` VALUES ('850', '839', null, null, 'admin_deny_all_controllers', '102', '103');
INSERT INTO `acos` VALUES ('851', '839', null, null, 'admin_get_role_controller_permission', '104', '105');
INSERT INTO `acos` VALUES ('852', '839', null, null, 'admin_grant_role_permission', '106', '107');
INSERT INTO `acos` VALUES ('853', '839', null, null, 'admin_deny_role_permission', '108', '109');
INSERT INTO `acos` VALUES ('854', '839', null, null, 'admin_get_user_controller_permission', '110', '111');
INSERT INTO `acos` VALUES ('855', '839', null, null, 'admin_grant_user_permission', '112', '113');
INSERT INTO `acos` VALUES ('856', '839', null, null, 'admin_deny_user_permission', '114', '115');

-- ----------------------------
-- Table structure for `aros`
-- ----------------------------
DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros
-- ----------------------------
INSERT INTO `aros` VALUES ('1', null, 'Group', '1', null, '1', '4');
INSERT INTO `aros` VALUES ('2', null, 'Group', '2', null, '5', '8');
INSERT INTO `aros` VALUES ('3', null, 'Group', '3', null, '9', '10');
INSERT INTO `aros` VALUES ('4', '1', 'User', '1', null, '2', '3');
INSERT INTO `aros` VALUES ('5', '2', 'User', '2', null, '6', '7');
INSERT INTO `aros` VALUES ('7', null, 'Group', '1', null, '11', '26');
INSERT INTO `aros` VALUES ('8', null, 'Group', '2', null, '27', '32');
INSERT INTO `aros` VALUES ('10', '7', 'User', '5', null, '12', '13');
INSERT INTO `aros` VALUES ('11', '7', 'User', '1', null, '14', '15');
INSERT INTO `aros` VALUES ('12', '7', 'User', '1', null, '16', '17');
INSERT INTO `aros` VALUES ('13', '8', 'User', '2', null, '28', '29');
INSERT INTO `aros` VALUES ('15', '7', 'User', '4', null, '18', '19');
INSERT INTO `aros` VALUES ('16', '7', 'User', '1', null, '20', '21');
INSERT INTO `aros` VALUES ('17', '8', 'User', '2', null, '30', '31');
INSERT INTO `aros` VALUES ('25', '7', 'User', '10', null, '22', '23');
INSERT INTO `aros` VALUES ('26', null, 'Group', '4', null, '33', '36');
INSERT INTO `aros` VALUES ('27', '28', 'User', '11', null, '38', '39');
INSERT INTO `aros` VALUES ('28', null, 'Group', '5', null, '37', '40');
INSERT INTO `aros` VALUES ('29', '26', 'User', '12', null, '34', '35');
INSERT INTO `aros` VALUES ('30', '7', 'User', '13', null, '24', '25');

-- ----------------------------
-- Table structure for `aros_acos`
-- ----------------------------
DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros_acos
-- ----------------------------
INSERT INTO `aros_acos` VALUES ('1', '7', '1', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('2', '8', '1', '-1', '-1', '-1', '-1');
INSERT INTO `aros_acos` VALUES ('3', '8', '10', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('4', '8', '24', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('10', '8', '8', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('22', '26', '9', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('23', '26', '32', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('34', '28', '32', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('35', '28', '9', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('93', '8', '4', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('94', '8', '3', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('95', '8', '6', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('96', '8', '7', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('97', '8', '5', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('107', '3', '1', '-1', '-1', '-1', '-1');
INSERT INTO `aros_acos` VALUES ('108', '3', '13', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('109', '3', '14', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('110', '3', '27', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('111', '3', '28', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('112', '3', '8', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'Super Admin', '2013-03-25 08:43:41', '2013-03-25 08:43:41');
INSERT INTO `groups` VALUES ('2', 'Administrator', '2013-03-25 08:43:48', '2013-03-25 08:43:48');
INSERT INTO `groups` VALUES ('4', 'SKPD', '2013-05-08 08:40:31', '2013-05-08 08:52:04');
INSERT INTO `groups` VALUES ('5', 'KECAMATAN', '2013-05-14 03:38:43', '2013-05-14 03:38:43');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` varchar(20) DEFAULT NULL,
  `tb_skpd_id` varchar(3) DEFAULT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_control` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', null, 'Super Administrator', '-', 'super', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-03-25 09:18:43', '2013-03-25 09:18:43');
INSERT INTO `users` VALUES ('2', '2', '', 'Administrator', null, 'admin', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-03-25 09:26:08', '2013-03-25 09:26:08');
INSERT INTO `users` VALUES ('13', '1', null, 'indra aries', '', 'indla', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-06-03 06:37:41', '2013-06-03 06:37:41');
