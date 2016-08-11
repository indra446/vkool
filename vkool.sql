/*
Navicat MySQL Data Transfer

Source Server         : vkool
Source Server Version : 50505
Source Host           : 103.28.220.30:3306
Source Database       : vkool

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-01 14:55:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acos
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
) ENGINE=InnoDB AUTO_INCREMENT=8977 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('1', null, null, null, 'controllers', '1', '432');
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
INSERT INTO `acos` VALUES ('16', '1', null, null, 'Users', '32', '47');
INSERT INTO `acos` VALUES ('17', '16', null, null, 'index', '33', '34');
INSERT INTO `acos` VALUES ('18', '16', null, null, 'login', '35', '36');
INSERT INTO `acos` VALUES ('19', '16', null, null, 'logout', '37', '38');
INSERT INTO `acos` VALUES ('20', '16', null, null, 'view', '39', '40');
INSERT INTO `acos` VALUES ('21', '16', null, null, 'add', '41', '42');
INSERT INTO `acos` VALUES ('22', '16', null, null, 'edit', '43', '44');
INSERT INTO `acos` VALUES ('23', '16', null, null, 'delete', '45', '46');
INSERT INTO `acos` VALUES ('32', '8', null, null, 'depan', '17', '18');
INSERT INTO `acos` VALUES ('885', '1', null, null, 'Categories', '48', '61');
INSERT INTO `acos` VALUES ('886', '885', null, null, 'index', '49', '50');
INSERT INTO `acos` VALUES ('887', '885', null, null, 'view', '51', '52');
INSERT INTO `acos` VALUES ('888', '885', null, null, 'add', '53', '54');
INSERT INTO `acos` VALUES ('889', '885', null, null, 'edit', '55', '56');
INSERT INTO `acos` VALUES ('890', '885', null, null, 'delete', '57', '58');
INSERT INTO `acos` VALUES ('891', '1', null, null, 'Customers', '62', '73');
INSERT INTO `acos` VALUES ('892', '891', null, null, 'index', '63', '64');
INSERT INTO `acos` VALUES ('893', '891', null, null, 'view', '65', '66');
INSERT INTO `acos` VALUES ('894', '891', null, null, 'add', '67', '68');
INSERT INTO `acos` VALUES ('895', '891', null, null, 'edit', '69', '70');
INSERT INTO `acos` VALUES ('896', '891', null, null, 'delete', '71', '72');
INSERT INTO `acos` VALUES ('897', '1', null, null, 'DetailPenjualans', '74', '85');
INSERT INTO `acos` VALUES ('898', '897', null, null, 'index', '75', '76');
INSERT INTO `acos` VALUES ('899', '897', null, null, 'view', '77', '78');
INSERT INTO `acos` VALUES ('900', '897', null, null, 'add', '79', '80');
INSERT INTO `acos` VALUES ('901', '897', null, null, 'edit', '81', '82');
INSERT INTO `acos` VALUES ('902', '897', null, null, 'delete', '83', '84');
INSERT INTO `acos` VALUES ('903', '1', null, null, 'Karyawans', '86', '99');
INSERT INTO `acos` VALUES ('904', '903', null, null, 'index', '87', '88');
INSERT INTO `acos` VALUES ('905', '903', null, null, 'view', '89', '90');
INSERT INTO `acos` VALUES ('906', '903', null, null, 'add', '91', '92');
INSERT INTO `acos` VALUES ('907', '903', null, null, 'edit', '93', '94');
INSERT INTO `acos` VALUES ('908', '903', null, null, 'delete', '95', '96');
INSERT INTO `acos` VALUES ('909', '1', null, null, 'Merks', '100', '113');
INSERT INTO `acos` VALUES ('910', '909', null, null, 'index', '101', '102');
INSERT INTO `acos` VALUES ('911', '909', null, null, 'view', '103', '104');
INSERT INTO `acos` VALUES ('912', '909', null, null, 'add', '105', '106');
INSERT INTO `acos` VALUES ('913', '909', null, null, 'edit', '107', '108');
INSERT INTO `acos` VALUES ('914', '909', null, null, 'delete', '109', '110');
INSERT INTO `acos` VALUES ('915', '1', null, null, 'Pembelians', '114', '133');
INSERT INTO `acos` VALUES ('916', '915', null, null, 'index', '115', '116');
INSERT INTO `acos` VALUES ('917', '915', null, null, 'view', '117', '118');
INSERT INTO `acos` VALUES ('918', '915', null, null, 'add', '119', '120');
INSERT INTO `acos` VALUES ('919', '915', null, null, 'edit', '121', '122');
INSERT INTO `acos` VALUES ('920', '915', null, null, 'delete', '123', '124');
INSERT INTO `acos` VALUES ('921', '1', null, null, 'Penjualans', '134', '197');
INSERT INTO `acos` VALUES ('922', '921', null, null, 'index', '135', '136');
INSERT INTO `acos` VALUES ('923', '921', null, null, 'view', '137', '138');
INSERT INTO `acos` VALUES ('924', '921', null, null, 'add', '139', '140');
INSERT INTO `acos` VALUES ('925', '921', null, null, 'edit', '141', '142');
INSERT INTO `acos` VALUES ('926', '921', null, null, 'delete', '143', '144');
INSERT INTO `acos` VALUES ('927', '1', null, null, 'PicVendors', '198', '209');
INSERT INTO `acos` VALUES ('928', '927', null, null, 'index', '199', '200');
INSERT INTO `acos` VALUES ('929', '927', null, null, 'view', '201', '202');
INSERT INTO `acos` VALUES ('930', '927', null, null, 'add', '203', '204');
INSERT INTO `acos` VALUES ('931', '927', null, null, 'edit', '205', '206');
INSERT INTO `acos` VALUES ('932', '927', null, null, 'delete', '207', '208');
INSERT INTO `acos` VALUES ('933', '1', null, null, 'Pics', '210', '221');
INSERT INTO `acos` VALUES ('934', '933', null, null, 'index', '211', '212');
INSERT INTO `acos` VALUES ('935', '933', null, null, 'view', '213', '214');
INSERT INTO `acos` VALUES ('936', '933', null, null, 'add', '215', '216');
INSERT INTO `acos` VALUES ('937', '933', null, null, 'edit', '217', '218');
INSERT INTO `acos` VALUES ('938', '933', null, null, 'delete', '219', '220');
INSERT INTO `acos` VALUES ('939', '1', null, null, 'Products', '222', '241');
INSERT INTO `acos` VALUES ('940', '939', null, null, 'index', '223', '224');
INSERT INTO `acos` VALUES ('941', '939', null, null, 'view', '225', '226');
INSERT INTO `acos` VALUES ('942', '939', null, null, 'add', '227', '228');
INSERT INTO `acos` VALUES ('943', '939', null, null, 'edit', '229', '230');
INSERT INTO `acos` VALUES ('944', '939', null, null, 'delete', '231', '232');
INSERT INTO `acos` VALUES ('945', '1', null, null, 'Roles', '242', '253');
INSERT INTO `acos` VALUES ('946', '945', null, null, 'index', '243', '244');
INSERT INTO `acos` VALUES ('947', '945', null, null, 'view', '245', '246');
INSERT INTO `acos` VALUES ('948', '945', null, null, 'add', '247', '248');
INSERT INTO `acos` VALUES ('949', '945', null, null, 'edit', '249', '250');
INSERT INTO `acos` VALUES ('950', '945', null, null, 'delete', '251', '252');
INSERT INTO `acos` VALUES ('951', '1', null, null, 'Stoks', '254', '265');
INSERT INTO `acos` VALUES ('952', '951', null, null, 'index', '255', '256');
INSERT INTO `acos` VALUES ('953', '951', null, null, 'view', '257', '258');
INSERT INTO `acos` VALUES ('954', '951', null, null, 'add', '259', '260');
INSERT INTO `acos` VALUES ('955', '951', null, null, 'edit', '261', '262');
INSERT INTO `acos` VALUES ('956', '951', null, null, 'delete', '263', '264');
INSERT INTO `acos` VALUES ('957', '1', null, null, 'Units', '266', '277');
INSERT INTO `acos` VALUES ('958', '957', null, null, 'index', '267', '268');
INSERT INTO `acos` VALUES ('959', '957', null, null, 'view', '269', '270');
INSERT INTO `acos` VALUES ('960', '957', null, null, 'add', '271', '272');
INSERT INTO `acos` VALUES ('961', '957', null, null, 'edit', '273', '274');
INSERT INTO `acos` VALUES ('962', '957', null, null, 'delete', '275', '276');
INSERT INTO `acos` VALUES ('963', '1', null, null, 'Vendors', '278', '291');
INSERT INTO `acos` VALUES ('964', '963', null, null, 'index', '279', '280');
INSERT INTO `acos` VALUES ('965', '963', null, null, 'view', '281', '282');
INSERT INTO `acos` VALUES ('966', '963', null, null, 'add', '283', '284');
INSERT INTO `acos` VALUES ('967', '963', null, null, 'edit', '285', '286');
INSERT INTO `acos` VALUES ('968', '963', null, null, 'delete', '287', '288');
INSERT INTO `acos` VALUES ('1109', '885', null, null, 'kategori', '59', '60');
INSERT INTO `acos` VALUES ('1194', '963', null, null, 'all', '289', '290');
INSERT INTO `acos` VALUES ('1223', '921', null, null, 'model', '145', '146');
INSERT INTO `acos` VALUES ('1252', '921', null, null, 'auto', '147', '148');
INSERT INTO `acos` VALUES ('1281', '915', null, null, 'auto_produk', '125', '126');
INSERT INTO `acos` VALUES ('1310', '915', null, null, 'cart', '127', '128');
INSERT INTO `acos` VALUES ('1339', '915', null, null, 'del_produk', '129', '130');
INSERT INTO `acos` VALUES ('1368', '1', null, null, 'Submerks', '292', '303');
INSERT INTO `acos` VALUES ('1369', '1368', null, null, 'index', '293', '294');
INSERT INTO `acos` VALUES ('1370', '1368', null, null, 'view', '295', '296');
INSERT INTO `acos` VALUES ('1371', '1368', null, null, 'add', '297', '298');
INSERT INTO `acos` VALUES ('1372', '1368', null, null, 'edit', '299', '300');
INSERT INTO `acos` VALUES ('1373', '1368', null, null, 'delete', '301', '302');
INSERT INTO `acos` VALUES ('1430', '915', null, null, 'konversi_tanggal', '131', '132');
INSERT INTO `acos` VALUES ('1515', '909', null, null, 'merk', '111', '112');
INSERT INTO `acos` VALUES ('1966', '1', null, null, 'Banks', '304', '315');
INSERT INTO `acos` VALUES ('1967', '1966', null, null, 'index', '305', '306');
INSERT INTO `acos` VALUES ('1968', '1966', null, null, 'view', '307', '308');
INSERT INTO `acos` VALUES ('1969', '1966', null, null, 'add', '309', '310');
INSERT INTO `acos` VALUES ('1970', '1966', null, null, 'edit', '311', '312');
INSERT INTO `acos` VALUES ('1971', '1966', null, null, 'delete', '313', '314');
INSERT INTO `acos` VALUES ('2056', '939', null, null, 'stock', '233', '234');
INSERT INTO `acos` VALUES ('2197', '903', null, null, 'ajax', '97', '98');
INSERT INTO `acos` VALUES ('2338', '1', null, null, 'Bahanbakuses', '316', '337');
INSERT INTO `acos` VALUES ('2339', '2338', null, null, 'index', '317', '318');
INSERT INTO `acos` VALUES ('2340', '2338', null, null, 'view', '319', '320');
INSERT INTO `acos` VALUES ('2341', '2338', null, null, 'add', '321', '322');
INSERT INTO `acos` VALUES ('2342', '2338', null, null, 'edit', '323', '324');
INSERT INTO `acos` VALUES ('2343', '2338', null, null, 'delete', '325', '326');
INSERT INTO `acos` VALUES ('2484', '921', null, null, 'bahanbaku', '149', '150');
INSERT INTO `acos` VALUES ('2625', '921', null, null, 'cart', '151', '152');
INSERT INTO `acos` VALUES ('3047', '921', null, null, 'del_produk', '153', '154');
INSERT INTO `acos` VALUES ('3188', '921', null, null, 'samping', '155', '156');
INSERT INTO `acos` VALUES ('3329', '921', null, null, 'del_produksamping', '157', '158');
INSERT INTO `acos` VALUES ('3470', '921', null, null, 'belakang', '159', '160');
INSERT INTO `acos` VALUES ('3471', '921', null, null, 'aksesoris', '161', '162');
INSERT INTO `acos` VALUES ('3472', '921', null, null, 'service', '163', '164');
INSERT INTO `acos` VALUES ('3753', '921', null, null, 'autoaksesoris', '165', '166');
INSERT INTO `acos` VALUES ('3754', '921', null, null, 'autoservice', '167', '168');
INSERT INTO `acos` VALUES ('3895', '921', null, null, 'del_produkbelakang', '169', '170');
INSERT INTO `acos` VALUES ('3896', '921', null, null, 'del_produkaksesoris', '171', '172');
INSERT INTO `acos` VALUES ('3897', '921', null, null, 'del_produkservice', '173', '174');
INSERT INTO `acos` VALUES ('4038', '921', null, null, 'jumlahtot', '175', '176');
INSERT INTO `acos` VALUES ('4319', '939', null, null, 'check', '235', '236');
INSERT INTO `acos` VALUES ('4460', '939', null, null, 'LabaRugi', '237', '238');
INSERT INTO `acos` VALUES ('4601', '921', null, null, 'preview', '177', '178');
INSERT INTO `acos` VALUES ('4742', '2338', null, null, 'bayar', '327', '328');
INSERT INTO `acos` VALUES ('5023', '2338', null, null, 'tambah', '329', '330');
INSERT INTO `acos` VALUES ('5164', '921', null, null, 'histori', '179', '180');
INSERT INTO `acos` VALUES ('5305', '921', null, null, 'rekaphistori', '181', '182');
INSERT INTO `acos` VALUES ('5446', '921', null, null, 'createnomor', '183', '184');
INSERT INTO `acos` VALUES ('5587', '921', null, null, 'createorder', '185', '186');
INSERT INTO `acos` VALUES ('5728', '921', null, null, 'detail', '187', '188');
INSERT INTO `acos` VALUES ('5869', '2338', null, null, 'depan', '331', '332');
INSERT INTO `acos` VALUES ('6290', '1', null, null, 'Bayars', '338', '355');
INSERT INTO `acos` VALUES ('6291', '6290', null, null, 'index', '339', '340');
INSERT INTO `acos` VALUES ('6292', '6290', null, null, 'view', '341', '342');
INSERT INTO `acos` VALUES ('6293', '6290', null, null, 'add', '343', '344');
INSERT INTO `acos` VALUES ('6294', '6290', null, null, 'edit', '345', '346');
INSERT INTO `acos` VALUES ('6295', '6290', null, null, 'delete', '347', '348');
INSERT INTO `acos` VALUES ('6436', '6290', null, null, 'riwayat', '349', '350');
INSERT INTO `acos` VALUES ('6718', '6290', null, null, 'ceklunas', '351', '352');
INSERT INTO `acos` VALUES ('6859', '921', null, null, 'ceklunas', '189', '190');
INSERT INTO `acos` VALUES ('7000', '2338', null, null, 'del_depan', '333', '334');
INSERT INTO `acos` VALUES ('7281', '6290', null, null, 'nota', '353', '354');
INSERT INTO `acos` VALUES ('7422', '921', null, null, 'autoprodukd', '191', '192');
INSERT INTO `acos` VALUES ('7423', '921', null, null, 'autoproduks', '193', '194');
INSERT INTO `acos` VALUES ('7424', '921', null, null, 'autoprodukb', '195', '196');
INSERT INTO `acos` VALUES ('7705', '2338', null, null, 'detail', '335', '336');
INSERT INTO `acos` VALUES ('7986', '939', null, null, 'produk', '239', '240');
INSERT INTO `acos` VALUES ('8127', '1', null, null, 'Returs', '356', '375');
INSERT INTO `acos` VALUES ('8128', '8127', null, null, 'index', '357', '358');
INSERT INTO `acos` VALUES ('8129', '8127', null, null, 'view', '359', '360');
INSERT INTO `acos` VALUES ('8130', '8127', null, null, 'add', '361', '362');
INSERT INTO `acos` VALUES ('8131', '8127', null, null, 'edit', '363', '364');
INSERT INTO `acos` VALUES ('8132', '8127', null, null, 'delete', '365', '366');
INSERT INTO `acos` VALUES ('8273', '8127', null, null, 'auto_produk', '367', '368');
INSERT INTO `acos` VALUES ('8274', '8127', null, null, 'del_produk', '369', '370');
INSERT INTO `acos` VALUES ('8275', '8127', null, null, 'cart', '371', '372');
INSERT INTO `acos` VALUES ('8556', '8127', null, null, 'konversi_tanggal', '373', '374');
INSERT INTO `acos` VALUES ('8949', '1', null, null, 'Acl', '376', '431');
INSERT INTO `acos` VALUES ('8950', '8949', null, null, 'Acl', '377', '382');
INSERT INTO `acos` VALUES ('8951', '8950', null, null, 'index', '378', '379');
INSERT INTO `acos` VALUES ('8952', '8950', null, null, 'admin_index', '380', '381');
INSERT INTO `acos` VALUES ('8953', '8949', null, null, 'Acos', '383', '394');
INSERT INTO `acos` VALUES ('8954', '8953', null, null, 'admin_index', '384', '385');
INSERT INTO `acos` VALUES ('8955', '8953', null, null, 'admin_empty_acos', '386', '387');
INSERT INTO `acos` VALUES ('8956', '8953', null, null, 'admin_build_acl', '388', '389');
INSERT INTO `acos` VALUES ('8957', '8953', null, null, 'admin_prune_acos', '390', '391');
INSERT INTO `acos` VALUES ('8958', '8953', null, null, 'admin_synchronize', '392', '393');
INSERT INTO `acos` VALUES ('8959', '8949', null, null, 'Aros', '395', '430');
INSERT INTO `acos` VALUES ('8960', '8959', null, null, 'admin_index', '396', '397');
INSERT INTO `acos` VALUES ('8961', '8959', null, null, 'admin_check', '398', '399');
INSERT INTO `acos` VALUES ('8962', '8959', null, null, 'admin_users', '400', '401');
INSERT INTO `acos` VALUES ('8963', '8959', null, null, 'admin_update_user_role', '402', '403');
INSERT INTO `acos` VALUES ('8964', '8959', null, null, 'admin_ajax_role_permissions', '404', '405');
INSERT INTO `acos` VALUES ('8965', '8959', null, null, 'admin_role_permissions', '406', '407');
INSERT INTO `acos` VALUES ('8966', '8959', null, null, 'admin_user_permissions', '408', '409');
INSERT INTO `acos` VALUES ('8967', '8959', null, null, 'admin_empty_permissions', '410', '411');
INSERT INTO `acos` VALUES ('8968', '8959', null, null, 'admin_clear_user_specific_permissions', '412', '413');
INSERT INTO `acos` VALUES ('8969', '8959', null, null, 'admin_grant_all_controllers', '414', '415');
INSERT INTO `acos` VALUES ('8970', '8959', null, null, 'admin_deny_all_controllers', '416', '417');
INSERT INTO `acos` VALUES ('8971', '8959', null, null, 'admin_get_role_controller_permission', '418', '419');
INSERT INTO `acos` VALUES ('8972', '8959', null, null, 'admin_grant_role_permission', '420', '421');
INSERT INTO `acos` VALUES ('8973', '8959', null, null, 'admin_deny_role_permission', '422', '423');
INSERT INTO `acos` VALUES ('8974', '8959', null, null, 'admin_get_user_controller_permission', '424', '425');
INSERT INTO `acos` VALUES ('8975', '8959', null, null, 'admin_grant_user_permission', '426', '427');
INSERT INTO `acos` VALUES ('8976', '8959', null, null, 'admin_deny_user_permission', '428', '429');

-- ----------------------------
-- Table structure for aros
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

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
INSERT INTO `aros` VALUES ('16', '7', 'User', '1', null, '24', '25');
INSERT INTO `aros` VALUES ('17', '8', 'User', '2', null, '30', '31');
INSERT INTO `aros` VALUES ('25', '7', 'User', '10', null, '20', '21');
INSERT INTO `aros` VALUES ('26', null, 'Group', '4', null, '33', '38');
INSERT INTO `aros` VALUES ('29', '26', 'User', '12', null, '34', '35');
INSERT INTO `aros` VALUES ('30', '7', 'User', '13', null, '22', '23');
INSERT INTO `aros` VALUES ('31', null, 'Group', '6', null, '39', '40');
INSERT INTO `aros` VALUES ('32', null, 'Group', '7', null, '41', '44');
INSERT INTO `aros` VALUES ('33', '32', 'User', '14', null, '42', '43');
INSERT INTO `aros` VALUES ('34', '26', 'User', '15', null, '36', '37');

-- ----------------------------
-- Table structure for aros_acos
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
) ENGINE=InnoDB AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aros_acos
-- ----------------------------
INSERT INTO `aros_acos` VALUES ('1', '7', '1', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('2', '8', '1', '-1', '-1', '-1', '-1');
INSERT INTO `aros_acos` VALUES ('3', '8', '10', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('10', '8', '8', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('22', '26', '9', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('23', '26', '32', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('93', '8', '4', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('94', '8', '3', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('95', '8', '6', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('96', '8', '7', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('97', '8', '5', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('107', '3', '1', '-1', '-1', '-1', '-1');
INSERT INTO `aros_acos` VALUES ('108', '3', '13', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('109', '3', '14', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('112', '3', '8', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('113', '32', '18', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('114', '32', '19', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('115', '32', '894', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('116', '32', '896', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('117', '32', '895', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('118', '32', '892', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('119', '32', '893', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('120', '32', '32', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('121', '32', '9', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('122', '31', '32', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('123', '31', '9', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('124', '31', '18', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('125', '31', '19', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('126', '8', '19', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('127', '8', '18', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('128', '26', '18', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('129', '26', '19', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('130', '31', '22', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('131', '32', '22', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('132', '8', '22', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('133', '26', '22', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('134', '26', '924', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('135', '26', '3471', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('136', '26', '1252', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('137', '26', '3753', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('138', '26', '7424', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('139', '26', '7422', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('140', '26', '7423', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('141', '26', '3754', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('142', '26', '2484', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('143', '26', '3470', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('144', '26', '2625', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('145', '26', '6859', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('146', '26', '5446', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('147', '26', '5587', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('148', '26', '3047', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('149', '26', '3896', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('150', '26', '3895', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('151', '26', '3329', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('152', '26', '3897', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('153', '26', '926', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('154', '26', '5728', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('155', '26', '925', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('156', '26', '5164', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('157', '26', '922', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('158', '26', '4038', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('159', '26', '1223', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('160', '26', '4601', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('161', '26', '923', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('162', '26', '3472', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('163', '26', '3188', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('164', '26', '5305', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('165', '26', '2339', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('166', '26', '5023', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('167', '26', '2342', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('168', '26', '7000', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('169', '26', '4742', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('170', '26', '2341', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('171', '26', '2343', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('172', '26', '5869', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('173', '26', '7705', '1', '1', '1', '1');
INSERT INTO `aros_acos` VALUES ('174', '26', '2340', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for bahanbakus
-- ----------------------------
DROP TABLE IF EXISTS `bahanbakus`;
CREATE TABLE `bahanbakus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT NULL,
  `dm1` varchar(10) DEFAULT NULL,
  `dm2` varchar(10) DEFAULT NULL,
  `jum_sisa` varchar(10) DEFAULT NULL,
  `id_teknisi` varchar(10) DEFAULT NULL,
  `penjualan_id` int(11) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bahanbakus
-- ----------------------------
INSERT INTO `bahanbakus` VALUES ('1', '13', null, null, '19', '1', '1', '13', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('2', '1', null, null, '1132', '1', '1', '1', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('3', '1', null, null, '1131', '1', '1', '1', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('4', '10', null, null, '999', '1', '1', '10', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('5', '10', null, null, '998', '1', '1', '10', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('6', '6', null, null, '1', '1', '1', '6', '2016-07-30 11:02:56', '2016-07-30 11:02:56');
INSERT INTO `bahanbakus` VALUES ('7', '5', '900', '400', '99', '2', '2', '5', '2016-08-02 11:52:38', '2016-08-02 11:52:38');
INSERT INTO `bahanbakus` VALUES ('8', '13', null, null, '19', '2', '2', '13', '2016-08-02 11:52:38', '2016-08-02 11:52:38');
INSERT INTO `bahanbakus` VALUES ('9', '8', null, null, '49', '2', '2', '8', '2016-08-02 11:52:38', '2016-08-02 11:52:38');

-- ----------------------------
-- Table structure for banks
-- ----------------------------
DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `aktif` varchar(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banks
-- ----------------------------
INSERT INTO `banks` VALUES ('1', 'BCA', '1', '2016-05-31 02:38:01', '2016-05-31 02:40:44');
INSERT INTO `banks` VALUES ('2', 'Mandiri', '1', '2016-05-31 02:38:05', '2016-05-31 02:38:11');
INSERT INTO `banks` VALUES ('3', 'BRI', '1', '2016-05-31 02:38:20', '2016-05-31 02:38:20');
INSERT INTO `banks` VALUES ('4', 'BNI', '1', '2016-05-31 02:38:40', '2016-05-31 02:38:40');

-- ----------------------------
-- Table structure for bayars
-- ----------------------------
DROP TABLE IF EXISTS `bayars`;
CREATE TABLE `bayars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bayar` varchar(255) DEFAULT NULL,
  `id_penjualan` int(10) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `tipe_bayar` varchar(25) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `ket` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bayars
-- ----------------------------
INSERT INTO `bayars` VALUES ('1', '40994', '1', '40994', 'Tunai', '0000-00-00', 'Lunas', null, null);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `kategori` varchar(100) NOT NULL,
  `aktif` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, '1', '12', 'Kacafilm', '1', '2016-06-04 05:08:35', '2016-06-07 06:00:08');
INSERT INTO `categories` VALUES ('2', null, '13', '16', 'Aksesoris', '1', '2016-06-04 05:08:47', '2016-06-04 05:11:06');
INSERT INTO `categories` VALUES ('3', null, '17', '18', 'Service', '1', '2016-06-23 01:11:11', '2016-06-23 01:11:11');
INSERT INTO `categories` VALUES ('4', '1', '2', '3', 'Depan', '1', '2016-06-24 02:03:28', '2016-06-24 02:03:28');
INSERT INTO `categories` VALUES ('5', '1', '4', '5', 'VKOOL 7060', '1', '2016-06-24 05:56:37', '2016-06-24 05:56:37');
INSERT INTO `categories` VALUES ('6', '1', '6', '7', 'Samping', '1', '2016-06-25 00:34:37', '2016-06-25 00:34:37');
INSERT INTO `categories` VALUES ('7', '1', '8', '9', 'Belakang', '1', '2016-06-25 00:34:46', '2016-06-25 00:34:46');
INSERT INTO `categories` VALUES ('8', '1', '10', '11', 'lain lain', '1', '2016-06-28 01:46:49', '2016-06-28 01:46:49');
INSERT INTO `categories` VALUES ('10', null, '19', '20', 'a', '1', '2016-06-30 11:30:29', '2016-06-30 11:30:29');
INSERT INTO `categories` VALUES ('11', null, '21', '24', 'vvv', '0', '2016-06-30 11:30:37', '2016-06-30 11:30:37');
INSERT INTO `categories` VALUES ('12', null, '25', '26', 'ssss', '0', '2016-06-30 11:30:44', '2016-06-30 11:30:44');
INSERT INTO `categories` VALUES ('13', '2', '14', '15', 'bemper depan', '0', '2016-06-30 11:38:22', '2016-06-30 11:39:19');
INSERT INTO `categories` VALUES ('14', '11', '22', '23', 'bemper belakang', '1', '2016-06-30 11:45:16', '2016-06-30 11:45:16');

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(25) DEFAULT NULL,
  `hp` varchar(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', 'Rio', 'Magelang', null, '0857827972', null, null);
INSERT INTO `customers` VALUES ('2', 'Haryanto', 'Semarang', null, '897937293782', null, null);
INSERT INTO `customers` VALUES ('3', 'Ghufron', 'Rembang', null, '0857827972', '2016-06-04 06:16:57', '2016-06-04');
INSERT INTO `customers` VALUES ('4', 'Indra', 'Kedung Mundu', null, '0-0-80', '2016-06-04 06:21:17', '2016-06-04');
INSERT INTO `customers` VALUES ('5', 'qwerty', 'Semarang', null, '08239', '2016-06-08 04:10:07', '2016-06-08');
INSERT INTO `customers` VALUES ('6', 'Wawan', 'Yogyakarta', null, '088822236456', '2016-06-24 05:44:09', '2016-06-24');
INSERT INTO `customers` VALUES ('7', 'sapto', 'yogyakarta', null, '085221365897', '2016-06-24 05:45:56', '2016-06-24');
INSERT INTO `customers` VALUES ('8', 'Suzuki', 'Yogyakarta', null, '', '2016-06-24 05:48:03', '2016-06-24');

-- ----------------------------
-- Table structure for detail_penjualans
-- ----------------------------
DROP TABLE IF EXISTS `detail_penjualans`;
CREATE TABLE `detail_penjualans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `penjualan_id` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(100) DEFAULT NULL,
  `disc` varchar(100) DEFAULT NULL,
  `hidden_disc` varchar(100) DEFAULT NULL,
  `id_karyawan` int(11) NOT NULL,
  `ket` text,
  `flag` varchar(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_penjualans
-- ----------------------------
INSERT INTO `detail_penjualans` VALUES ('1', '1', '1', '2', '10000', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-22 15:22:33', '2016-07-22 15:22:33');
INSERT INTO `detail_penjualans` VALUES ('2', '1', '10', '1', '2000', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-22 15:22:33', '2016-07-22 15:22:33');
INSERT INTO `detail_penjualans` VALUES ('3', '1', '6', '2', '4000', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-22 15:22:33', '2016-07-22 15:22:33');
INSERT INTO `detail_penjualans` VALUES ('4', '1', '13', '2', '1000', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-22 15:22:33', '2016-07-22 15:22:33');
INSERT INTO `detail_penjualans` VALUES ('5', '2', '8', '2', '1000', '100', '100', '1', 'Proses Broh', '1', '2016-07-22 15:31:44', '2016-07-22 15:31:44');
INSERT INTO `detail_penjualans` VALUES ('6', '2', '5', '2', '100', '100', '100', '1', 'Proses Broh', '1', '2016-07-22 15:31:44', '2016-07-22 15:31:44');
INSERT INTO `detail_penjualans` VALUES ('7', '2', '13', '1', '5000', '100', '100', '1', 'Proses Broh', '1', '2016-07-22 15:31:44', '2016-07-22 15:31:44');
INSERT INTO `detail_penjualans` VALUES ('8', '3', '1', '1', '60000', '4', '4', '1', 'OK', null, '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `detail_penjualans` VALUES ('9', '3', '10', '2', '1000', '4', '4', '1', 'OK', null, '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `detail_penjualans` VALUES ('10', '3', '6', '2', '1000', '4', '4', '1', 'OK', null, '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `detail_penjualans` VALUES ('11', '3', '5', '2', '1000', '4', '4', '1', 'OK', null, '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `detail_penjualans` VALUES ('12', '3', '13', '1', '7000', '4', '4', '1', 'OK', null, '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `detail_penjualans` VALUES ('13', '4', '16', '1', '2', '5', '5000', '10', 'ok', null, '2016-07-23 17:31:06', '2016-07-23 17:31:06');
INSERT INTO `detail_penjualans` VALUES ('14', '4', '10', '1', '2000', '5', '5000', '10', 'ok', null, '2016-07-23 17:31:06', '2016-07-23 17:31:06');
INSERT INTO `detail_penjualans` VALUES ('15', '1', '1', '1', '10000', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-27 12:39:19', '2016-07-27 12:39:19');
INSERT INTO `detail_penjualans` VALUES ('16', '5', '1', '2', '10000', '100', '200', '10', 'OK ', null, '2016-07-27 15:52:38', '2016-07-27 15:52:38');
INSERT INTO `detail_penjualans` VALUES ('17', '5', '16', '2', '10000', '100', '200', '10', 'OK ', null, '2016-07-27 15:52:38', '2016-07-27 15:52:38');
INSERT INTO `detail_penjualans` VALUES ('18', '5', '10', '1', '10000', '100', '200', '10', 'OK ', null, '2016-07-27 15:52:38', '2016-07-27 15:52:38');
INSERT INTO `detail_penjualans` VALUES ('19', '6', '1', '2', '2', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('20', '6', '8', '2', '21000', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('21', '6', '10', '2', '2', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('22', '6', '6', '2', '2', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('23', '6', '5', '2', '2000', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('24', '6', '13', '2', '50000', '100', '5000', '10', 'Segera di kerjakan', null, '2016-07-29 11:37:28', '2016-07-29 11:37:28');
INSERT INTO `detail_penjualans` VALUES ('25', '1', '10', '2', '2', '1000', '10', '10', 'Segera Kerjakan', '1', '2016-07-29 11:55:15', '2016-07-29 11:55:15');
INSERT INTO `detail_penjualans` VALUES ('26', '2', '16', '2', '1000', '100', '100', '1', 'Proses Broh', '1', '2016-07-29 17:18:27', '2016-07-29 17:18:27');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'Super Admin', '2013-03-25 08:43:41', '2016-05-04 11:11:51');
INSERT INTO `groups` VALUES ('2', 'Operator', '2013-03-25 08:43:48', '2016-06-30 12:12:22');
INSERT INTO `groups` VALUES ('4', 'Kasir', '2013-05-08 08:40:31', '2016-07-28 17:42:39');
INSERT INTO `groups` VALUES ('6', 'Owner', '2016-05-10 15:55:31', '2016-05-10 15:55:33');
INSERT INTO `groups` VALUES ('7', 'Receptionist', '2016-06-30 12:12:32', '2016-07-28 17:55:51');

-- ----------------------------
-- Table structure for karyawans
-- ----------------------------
DROP TABLE IF EXISTS `karyawans`;
CREATE TABLE `karyawans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(100) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alamat` text,
  `ket` text,
  `aktif` int(1) DEFAULT '0' COMMENT '0=nonaktif;1=aktif',
  `date_join` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_ktp` (`no_ktp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawans
-- ----------------------------
INSERT INTO `karyawans` VALUES ('1', '1111', 'Angga', 'Ungaran', 'OK', '1', '2016-07-27', '2016-05-10 05:19:18', '2016-05-31 02:39:33');
INSERT INTO `karyawans` VALUES ('2', '12345', 'Andrie', 'malang', 'Bagus', '1', '2016-07-28', '2016-05-11 04:57:23', '2016-05-31 01:50:44');
INSERT INTO `karyawans` VALUES ('10', '123456', 'Kasir', 'jogja', 'norek', '1', '2016-07-28', '2016-06-30 11:54:51', '2016-07-30 11:01:49');
INSERT INTO `karyawans` VALUES ('12', '12345', 'Receptionist', '-', '-', '1', '2016-07-30', '2016-07-30 11:01:30', '2016-07-30 11:01:30');

-- ----------------------------
-- Table structure for merks
-- ----------------------------
DROP TABLE IF EXISTS `merks`;
CREATE TABLE `merks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `aktif` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of merks
-- ----------------------------
INSERT INTO `merks` VALUES ('1', null, '1', '6', 'Honda', '1', '2016-05-18 00:12:08', '2016-05-18 00:12:08');
INSERT INTO `merks` VALUES ('2', null, '7', '10', 'Toyota', '1', '2016-05-18 00:12:23', '2016-05-18 00:12:23');
INSERT INTO `merks` VALUES ('3', null, '11', '14', 'Suzuki', '1', '2016-05-18 00:12:35', '2016-05-18 00:12:35');
INSERT INTO `merks` VALUES ('4', null, '15', '18', 'Nissan', '1', '2016-05-18 00:12:52', '2016-05-18 00:12:52');
INSERT INTO `merks` VALUES ('5', '1', '2', '3', 'Jazz', '1', '2016-05-18 00:13:14', '2016-05-18 00:23:50');
INSERT INTO `merks` VALUES ('6', '1', '4', '5', 'Civic', '1', '2016-05-18 00:24:07', '2016-05-18 00:24:07');
INSERT INTO `merks` VALUES ('7', '2', '8', '9', 'Innova', '1', '2016-05-18 00:24:33', '2016-05-18 00:24:33');
INSERT INTO `merks` VALUES ('8', '3', '12', '13', 'Smash', '1', '2016-06-01 03:05:42', '2016-06-01 03:06:07');
INSERT INTO `merks` VALUES ('9', '4', '16', '17', 'Jukebox', '1', '2016-06-01 03:06:01', '2016-06-01 03:06:01');

-- ----------------------------
-- Table structure for pembelians
-- ----------------------------
DROP TABLE IF EXISTS `pembelians`;
CREATE TABLE `pembelians` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `jml` varchar(100) DEFAULT NULL,
  `harga` varchar(150) DEFAULT NULL,
  `pot_item` varchar(100) DEFAULT NULL,
  `potongan` varchar(100) DEFAULT NULL,
  `biaya_kirim` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `isppn` varchar(1) DEFAULT '0',
  `ppn` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nomor` (`nomor`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembelians
-- ----------------------------
INSERT INTO `pembelians` VALUES ('4', '1234567890', '2016-05-12', '6', 'keterangan', '1', '25', '25000000', null, '100000', '16000', '1', null, null, '2016-05-14 05:14:43', '2016-05-14 05:14:43');
INSERT INTO `pembelians` VALUES ('5', '1234567890', '2016-05-12', '6', 'keterangan', '4', '2000', '2500000', null, '100000', '16000', '1', null, null, '2016-05-14 05:14:43', '2016-05-14 05:14:43');
INSERT INTO `pembelians` VALUES ('23', '446', '2016-05-30', '29', 'ket', '1', '100', '2500000', '5%', '1500000', '16000', '1', '0', '0', '2016-05-31 03:41:47', '2016-05-31 03:41:47');
INSERT INTO `pembelians` VALUES ('24', '446', '2016-05-30', '29', 'ket', '4', '150', '5250000', '0%', '1500000', '16000', '1', '0', '0', '2016-05-31 03:41:47', '2016-05-31 03:41:47');
INSERT INTO `pembelians` VALUES ('25', '345678', '2016-05-07', '6', '-', '6', '1', '500000', '0%', '', '', '1', '0', '0', '2016-05-31 05:11:30', '2016-05-31 05:11:30');
INSERT INTO `pembelians` VALUES ('28', '213434', '2016-06-03', '0', '', '1', '4', '100000', '', '', '', '1', '0', '0', '2016-06-04 05:50:32', '2016-06-04 05:50:32');
INSERT INTO `pembelians` VALUES ('29', '123123', '2016-06-06', '4', '12312', '1', '1000', '100000', '', '', '', '1', '0', '0', '2016-06-07 05:57:52', '2016-06-07 05:57:52');
INSERT INTO `pembelians` VALUES ('30', '321', '2016-06-06', '29', '123', '8', '100', '100000', '0', '', '', '1', '0', '0', '2016-06-07 05:59:12', '2016-06-07 05:59:12');
INSERT INTO `pembelians` VALUES ('31', '1234', '2016-06-06', '6', '231', '11', '100', '100000', '0', '', '', '1', '0', '0', '2016-06-07 06:01:42', '2016-06-07 06:01:42');
INSERT INTO `pembelians` VALUES ('32', 'INV16000545', '2016-06-23', '0', 'VKOOL 7060', '12', '1', '30750000', '0', '2750000', '100000', '1', '0', '0', '2016-06-24 06:11:28', '2016-06-24 06:11:28');
INSERT INTO `pembelians` VALUES ('33', 'XX/01000', '2016-07-26', '28', 'Beli', '4', '20', '100000', '10', '3', '1000', '1', '0', '0', '2016-07-27 15:44:16', '2016-07-27 15:44:16');
INSERT INTO `pembelians` VALUES ('34', '7yjhg556', '2016-07-25', '32', '-', '1', '1', '1500000', '15%', '150000', '32000', '1', '0', '0', '2016-07-27 23:59:49', '2016-07-27 23:59:49');
INSERT INTO `pembelians` VALUES ('35', '7yjhg556', '2016-07-25', '32', '-', '6', '1', '300000', '5%', '150000', '32000', '1', '0', '0', '2016-07-27 23:59:49', '2016-07-27 23:59:49');
INSERT INTO `pembelians` VALUES ('36', '7yjhg556', '2016-07-25', '32', '-', '4', '1', '3500000', '0', '150000', '32000', '1', '0', '0', '2016-07-27 23:59:49', '2016-07-27 23:59:49');
INSERT INTO `pembelians` VALUES ('37', 'INV/07/26/0001', '2016-07-25', '29', 'ket', '1', '1', '1000000', '5', '100000', '64000', '1', '0', '0', '2016-07-28 00:32:48', '2016-07-28 00:32:48');
INSERT INTO `pembelians` VALUES ('38', 'INV/07/26/0001', '2016-07-25', '29', 'ket', '4', '1', '3500000', '0', '100000', '64000', '1', '0', '0', '2016-07-28 00:32:48', '2016-07-28 00:32:48');
INSERT INTO `pembelians` VALUES ('39', '3654363', '2016-07-28', '32', 'Kaca', '1', '2', '1000', '70', '100', '1000', '1', '0', '0', '2016-07-29 13:59:55', '2016-07-29 13:59:55');
INSERT INTO `pembelians` VALUES ('40', '3654363', '2016-07-28', '32', 'Kaca', '10', '1000', '10000', '10', '100', '1000', '1', '0', '0', '2016-07-29 13:59:55', '2016-07-29 13:59:55');
INSERT INTO `pembelians` VALUES ('41', '78735', '2016-07-29', '28', 'ok', '5', '100', '1000', '1', '1', '1000', '1', '0', '0', '2016-07-29 15:31:14', '2016-07-29 15:31:14');
INSERT INTO `pembelians` VALUES ('42', '745y64343', '2016-07-27', '30', 'joid', '13', '20', '20000', '10', '1', '1', '1', '0', '0', '2016-07-29 15:34:22', '2016-07-29 15:34:22');

-- ----------------------------
-- Table structure for penjualans
-- ----------------------------
DROP TABLE IF EXISTS `penjualans`;
CREATE TABLE `penjualans` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(20) DEFAULT NULL,
  `noorder` varchar(20) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `model_id` int(11) DEFAULT NULL,
  `thn` varchar(4) DEFAULT NULL,
  `nopol` varchar(10) DEFAULT NULL,
  `nomesin` varchar(100) DEFAULT NULL,
  `norangka` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjualans
-- ----------------------------
INSERT INTO `penjualans` VALUES ('1', 'F/07/2016/SMG/0001', 'CO/07/2016/0001', '2', '1', '5', '2009', 'K 383 HG', '080-8', '1993773', '1', '2016-07-22 15:22:33', '2016-07-29 11:52:40');
INSERT INTO `penjualans` VALUES ('2', 'F/07/2016/SMG/0002', 'CO/07/2016/0002', '4', '1', '5', '2010', 'H 87867 NG', '93247532', '83759325', '1', '2016-07-22 15:31:44', '2016-07-23 16:29:16');
INSERT INTO `penjualans` VALUES ('3', 'F/07/2016/SMG/0003', 'CO/07/2016/0003', '3', '2', '7', '2008', 'H 8989 ZD', 'K863838-ND', 'KJHNBYGH', '1', '2016-07-22 16:32:59', '2016-07-22 16:32:59');
INSERT INTO `penjualans` VALUES ('4', 'F/07/2016/SMG/0004', 'CO/07/2016/0004', '1', '1', '5', '2010', 'K 2727 ND', '3453463', '64363', '1', '2016-07-23 17:31:06', '2016-07-26 13:06:36');
INSERT INTO `penjualans` VALUES ('5', 'F/07/2016/SMG/0005', 'CO/07/2016/0005', '1', '1', '5', '2009', 'K 6868 HD', '808087', '8686868', '1', '2016-07-27 15:52:38', '2016-07-27 15:52:38');
INSERT INTO `penjualans` VALUES ('6', 'F/07/2016/SMG/0006', 'CO/07/2016/0006', '3', '2', '7', '2010', 'H 3763 NF', '32759', '790w790r', '1', '2016-07-29 11:37:28', '2016-07-29 11:37:28');

-- ----------------------------
-- Table structure for pics
-- ----------------------------
DROP TABLE IF EXISTS `pics`;
CREATE TABLE `pics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pics
-- ----------------------------

-- ----------------------------
-- Table structure for pic_vendors
-- ----------------------------
DROP TABLE IF EXISTS `pic_vendors`;
CREATE TABLE `pic_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_id` int(11) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendor_id` (`vendor_id`),
  CONSTRAINT `pic_vendors_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pic_vendors
-- ----------------------------
INSERT INTO `pic_vendors` VALUES ('28', '28', '686868', 'ps', '2016-05-31 01:58:58', '2016-05-31 01:58:58');
INSERT INTO `pic_vendors` VALUES ('29', '28', 's', 'ss', '2016-05-31 01:58:58', '2016-05-31 01:58:58');
INSERT INTO `pic_vendors` VALUES ('30', '29', '9797', 'Ok', '2016-05-31 02:00:39', '2016-05-31 02:00:39');
INSERT INTO `pic_vendors` VALUES ('31', '29', '65868', 'wrr', '2016-05-31 02:00:39', '2016-05-31 02:00:39');
INSERT INTO `pic_vendors` VALUES ('34', '30', '90809', '979079', '2016-05-31 03:03:19', '2016-05-31 03:03:19');
INSERT INTO `pic_vendors` VALUES ('35', '6', '3432432', 'CS', '2016-05-31 03:05:03', '2016-05-31 03:05:03');
INSERT INTO `pic_vendors` VALUES ('39', '31', '024124232', 'Pic', '2016-06-04 04:52:35', '2016-06-04 04:52:35');
INSERT INTO `pic_vendors` VALUES ('40', '31', '023131232', 'wqerty', '2016-06-04 04:52:35', '2016-06-04 04:52:35');
INSERT INTO `pic_vendors` VALUES ('47', '4', '9899898', 'CS', '2016-06-23 01:14:47', '2016-06-23 01:14:47');
INSERT INTO `pic_vendors` VALUES ('48', '4', '1232', 'PR', '2016-06-23 01:14:47', '2016-06-23 01:14:47');
INSERT INTO `pic_vendors` VALUES ('49', '4', '5435435435', 'HRF', '2016-06-23 01:14:47', '2016-06-23 01:14:47');
INSERT INTO `pic_vendors` VALUES ('52', '32', '021582', 'MUNIROH', '2016-06-24 06:13:21', '2016-06-24 06:13:21');
INSERT INTO `pic_vendors` VALUES ('53', '32', '15648451', 'KENRIC', '2016-06-24 06:13:21', '2016-06-24 06:13:21');
INSERT INTO `pic_vendors` VALUES ('54', '8', '432434323', 'Office', '2016-06-30 12:01:14', '2016-06-30 12:01:14');
INSERT INTO `pic_vendors` VALUES ('55', '8', '0812334556', 'Public Relation', '2016-06-30 12:01:14', '2016-06-30 12:01:14');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(150) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `tipe` varchar(4) DEFAULT NULL COMMENT '1=luas;2=unit',
  `dimensi` varchar(100) DEFAULT NULL,
  `satuan` varchar(10) DEFAULT NULL,
  `deskripsi` text,
  `sn` varchar(100) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `aktif` int(1) DEFAULT '0' COMMENT '0=nonaktif;1=aktif',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Kaca Vkool Depan', '4', 'Luas', '9,9', 'gulungan', 'kaca film 3m', null, null, null, '1', '2016-05-10 05:00:42', '2016-06-28 23:40:40');
INSERT INTO `products` VALUES ('4', 'Spoiler', '2', 'Luas', null, 'pcs', '', null, null, null, '1', null, '2016-05-25 02:07:29');
INSERT INTO `products` VALUES ('5', 'Sunglasses', '2', 'Unit', null, 'pcs', '', null, null, null, '1', null, '2016-06-23 01:13:10');
INSERT INTO `products` VALUES ('6', 'Kaca Belakang', '7', 'Luas', '100,100', 'gulungan', '', null, '1', null, '1', null, '2016-06-28 23:41:04');
INSERT INTO `products` VALUES ('8', 'Kacafilm 60%', '4', 'Luas', '1000,5000', 'gulungan', '12131', null, null, null, '1', '2016-06-04 04:43:23', '2016-06-04 04:43:23');
INSERT INTO `products` VALUES ('10', 'Kacafilm 30%', '6', 'Luas', '1000,1000', 'gulungan', '123', null, null, null, '1', '2016-06-07 06:00:39', '2016-06-28 23:41:26');
INSERT INTO `products` VALUES ('12', 'VKOOL', '5', 'Luas', '3000,152', 'CM', 'CM2', null, null, null, '1', '2016-06-24 05:59:17', '2016-06-24 06:00:15');
INSERT INTO `products` VALUES ('13', 'Ganti Oli', '3', 'Unit', null, '', '', null, null, null, '1', null, '2016-07-27 15:42:29');
INSERT INTO `products` VALUES ('14', 'bemper depan avanza', '13', 'Unit', null, 'Set', 'model ABS', null, null, null, '1', '2016-06-30 11:42:41', '2016-06-30 11:42:41');
INSERT INTO `products` VALUES ('15', 'bemper belakang avanza', '13', 'Unit', null, 'Set', 'sample', null, null, null, '1', '2016-06-30 11:51:33', '2016-06-30 11:51:33');
INSERT INTO `products` VALUES ('16', 'solargard', '4', 'Luas', '30000,1520', 'rol', 'sample film', null, null, null, '1', '2016-06-30 11:53:51', '2016-06-30 11:53:51');

-- ----------------------------
-- Table structure for returs
-- ----------------------------
DROP TABLE IF EXISTS `returs`;
CREATE TABLE `returs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noretur` varchar(7) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `luas` varchar(255) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of returs
-- ----------------------------
INSERT INTO `returs` VALUES ('2', 'RE00001', '6', '12', '1', '2016-07-22', '8', 'ket 1', '2016-07-29 15:18:37', '2016-07-29 15:18:37');
INSERT INTO `returs` VALUES ('3', 'RE00001', '4', '2', '3', '2016-07-22', '8', 'ket 1', '2016-07-29 15:18:37', '2016-07-29 15:18:37');
INSERT INTO `returs` VALUES ('5', 'RE00002', '1', '532432', '100', '2016-07-09', '28', 'sd', '2016-07-29 15:43:54', '2016-07-29 15:43:54');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `sys_name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`sys_name`),
  UNIQUE KEY `sys_name` (`sys_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Operator', 'sys_op', '2016-05-11 06:09:33', '2016-05-11 06:09:33');
INSERT INTO `roles` VALUES ('2', 'Sales', 'sys_sal', '2016-05-11 06:10:04', '2016-05-11 06:10:04');
INSERT INTO `roles` VALUES ('3', 'Teknisi', 'sys_tek', '2016-05-11 06:10:24', '2016-05-11 06:10:24');
INSERT INTO `roles` VALUES ('4', 'Owner', 'sys_ow', '2016-05-11 06:10:38', '2016-05-11 06:10:38');

-- ----------------------------
-- Table structure for stoks
-- ----------------------------
DROP TABLE IF EXISTS `stoks`;
CREATE TABLE `stoks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `jml` varchar(100) DEFAULT NULL,
  `ket` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_id` (`product_id`) USING BTREE,
  CONSTRAINT `stoks_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stoks
-- ----------------------------
INSERT INTO `stoks` VALUES ('1', '8', '100', '-', '2016-06-25 01:18:01', '2016-06-25 01:22:11');
INSERT INTO `stoks` VALUES ('4', '1', '10000', 'qwer', '2016-06-25 04:15:27', '2016-06-25 04:15:27');
INSERT INTO `stoks` VALUES ('5', '10', '0', '', '2016-07-23 17:48:16', '2016-07-23 17:48:16');

-- ----------------------------
-- Table structure for submerks
-- ----------------------------
DROP TABLE IF EXISTS `submerks`;
CREATE TABLE `submerks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submerks
-- ----------------------------
INSERT INTO `submerks` VALUES ('1', 'hondal');
INSERT INTO `submerks` VALUES ('2', 'jazz');

-- ----------------------------
-- Table structure for units
-- ----------------------------
DROP TABLE IF EXISTS `units`;
CREATE TABLE `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of units
-- ----------------------------
INSERT INTO `units` VALUES ('1', 'a', '2016-05-10 05:19:03', '2016-05-10 05:19:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `email_admin` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_control` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', null, 'Super Administrators', '-', 'super', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-03-25 09:18:43', '2016-06-04 04:47:03');
INSERT INTO `users` VALUES ('2', '2', null, 'Administrator', null, 'usroperator', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '2013-03-25 09:26:08', '2016-07-28 17:45:02');
INSERT INTO `users` VALUES ('13', '1', null, 'indra aries', '', 'indla', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-06-03 06:37:41', '2013-06-03 06:37:41');
INSERT INTO `users` VALUES ('14', '7', '12', 'Receptionist', null, 'usrrecep', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '2016-07-30 11:02:38', '2016-07-30 11:02:38');
INSERT INTO `users` VALUES ('15', '4', '10', 'Kasir', null, 'usrkasir', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '2016-07-30 11:03:05', '2016-07-30 11:03:05');

-- ----------------------------
-- Table structure for vendors
-- ----------------------------
DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_vendor` varchar(150) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `bank_id` varchar(10) DEFAULT NULL,
  `norek` varchar(30) DEFAULT NULL,
  `ket` text,
  `aktif` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES ('4', 'indra', 'jakarta', '', '45745875865', 'ok', '1', '2016-05-11 03:37:21', '2016-06-23 01:14:47');
INSERT INTO `vendors` VALUES ('6', 'Otobox', 'Semarang', '1', '1122', '111', '1', '2016-05-12 05:46:35', '2016-05-31 03:05:03');
INSERT INTO `vendors` VALUES ('8', 'Gajah Tunggal', 'Surabaya', '1', '436456456', 'sip', '1', '2016-05-12 05:47:20', '2016-06-30 12:01:14');
INSERT INTO `vendors` VALUES ('28', 'Mega Tron', 'California', null, '1234566', null, '1', '2016-05-31 01:58:58', '2016-05-31 01:58:58');
INSERT INTO `vendors` VALUES ('29', 'Optimus Prime', 'Calijaga', 'Indonesia', '09809799', null, '1', '2016-05-31 02:00:39', '2016-05-31 02:00:39');
INSERT INTO `vendors` VALUES ('30', 'Megra', 'Kaliwage', '1', 'dsgdsfg', 'dfgdfgdf', '1', '2016-05-31 03:03:19', '2016-05-31 03:03:19');
INSERT INTO `vendors` VALUES ('31', 'Vendor', 'alamat', '1', '32424234342', 'ket', '1', '2016-06-04 04:52:01', '2016-06-04 04:52:35');
INSERT INTO `vendors` VALUES ('32', 'INDOMOTOR LESTARI', 'PECENONGAN JAKARTA', '1', '4586215421', 'KACA FILM', '1', '2016-06-24 06:13:21', '2016-06-24 06:13:21');
