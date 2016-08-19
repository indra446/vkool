/*
Navicat MySQL Data Transfer

Source Server         : vkool
Source Server Version : 50505
Source Host           : 103.28.220.30:3306
Source Database       : vkool

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-08-19 11:28:07
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
) ENGINE=InnoDB AUTO_INCREMENT=10375 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of acos
-- ----------------------------
INSERT INTO `acos` VALUES ('1', null, null, null, 'controllers', '1', '512');
INSERT INTO `acos` VALUES ('2', '1', null, null, 'Groups', '2', '15');
INSERT INTO `acos` VALUES ('3', '2', null, null, 'index', '3', '4');
INSERT INTO `acos` VALUES ('4', '2', null, null, 'view', '5', '6');
INSERT INTO `acos` VALUES ('5', '2', null, null, 'add', '7', '8');
INSERT INTO `acos` VALUES ('6', '2', null, null, 'edit', '9', '10');
INSERT INTO `acos` VALUES ('7', '2', null, null, 'delete', '11', '12');
INSERT INTO `acos` VALUES ('8', '1', null, null, 'Pages', '16', '23');
INSERT INTO `acos` VALUES ('9', '8', null, null, 'display', '17', '18');
INSERT INTO `acos` VALUES ('10', '1', null, null, 'Posts', '24', '37');
INSERT INTO `acos` VALUES ('11', '10', null, null, 'index', '25', '26');
INSERT INTO `acos` VALUES ('12', '10', null, null, 'view', '27', '28');
INSERT INTO `acos` VALUES ('13', '10', null, null, 'add', '29', '30');
INSERT INTO `acos` VALUES ('14', '10', null, null, 'edit', '31', '32');
INSERT INTO `acos` VALUES ('15', '10', null, null, 'delete', '33', '34');
INSERT INTO `acos` VALUES ('16', '1', null, null, 'Users', '38', '55');
INSERT INTO `acos` VALUES ('17', '16', null, null, 'index', '39', '40');
INSERT INTO `acos` VALUES ('18', '16', null, null, 'login', '41', '42');
INSERT INTO `acos` VALUES ('19', '16', null, null, 'logout', '43', '44');
INSERT INTO `acos` VALUES ('20', '16', null, null, 'view', '45', '46');
INSERT INTO `acos` VALUES ('21', '16', null, null, 'add', '47', '48');
INSERT INTO `acos` VALUES ('22', '16', null, null, 'edit', '49', '50');
INSERT INTO `acos` VALUES ('23', '16', null, null, 'delete', '51', '52');
INSERT INTO `acos` VALUES ('32', '8', null, null, 'depan', '19', '20');
INSERT INTO `acos` VALUES ('885', '1', null, null, 'Categories', '56', '71');
INSERT INTO `acos` VALUES ('886', '885', null, null, 'index', '57', '58');
INSERT INTO `acos` VALUES ('887', '885', null, null, 'view', '59', '60');
INSERT INTO `acos` VALUES ('888', '885', null, null, 'add', '61', '62');
INSERT INTO `acos` VALUES ('889', '885', null, null, 'edit', '63', '64');
INSERT INTO `acos` VALUES ('890', '885', null, null, 'delete', '65', '66');
INSERT INTO `acos` VALUES ('891', '1', null, null, 'Customers', '72', '85');
INSERT INTO `acos` VALUES ('892', '891', null, null, 'index', '73', '74');
INSERT INTO `acos` VALUES ('893', '891', null, null, 'view', '75', '76');
INSERT INTO `acos` VALUES ('894', '891', null, null, 'add', '77', '78');
INSERT INTO `acos` VALUES ('895', '891', null, null, 'edit', '79', '80');
INSERT INTO `acos` VALUES ('896', '891', null, null, 'delete', '81', '82');
INSERT INTO `acos` VALUES ('897', '1', null, null, 'DetailPenjualans', '86', '99');
INSERT INTO `acos` VALUES ('898', '897', null, null, 'index', '87', '88');
INSERT INTO `acos` VALUES ('899', '897', null, null, 'view', '89', '90');
INSERT INTO `acos` VALUES ('900', '897', null, null, 'add', '91', '92');
INSERT INTO `acos` VALUES ('901', '897', null, null, 'edit', '93', '94');
INSERT INTO `acos` VALUES ('902', '897', null, null, 'delete', '95', '96');
INSERT INTO `acos` VALUES ('903', '1', null, null, 'Karyawans', '100', '115');
INSERT INTO `acos` VALUES ('904', '903', null, null, 'index', '101', '102');
INSERT INTO `acos` VALUES ('905', '903', null, null, 'view', '103', '104');
INSERT INTO `acos` VALUES ('906', '903', null, null, 'add', '105', '106');
INSERT INTO `acos` VALUES ('907', '903', null, null, 'edit', '107', '108');
INSERT INTO `acos` VALUES ('908', '903', null, null, 'delete', '109', '110');
INSERT INTO `acos` VALUES ('909', '1', null, null, 'Merks', '116', '131');
INSERT INTO `acos` VALUES ('910', '909', null, null, 'index', '117', '118');
INSERT INTO `acos` VALUES ('911', '909', null, null, 'view', '119', '120');
INSERT INTO `acos` VALUES ('912', '909', null, null, 'add', '121', '122');
INSERT INTO `acos` VALUES ('913', '909', null, null, 'edit', '123', '124');
INSERT INTO `acos` VALUES ('914', '909', null, null, 'delete', '125', '126');
INSERT INTO `acos` VALUES ('915', '1', null, null, 'Pembelians', '132', '159');
INSERT INTO `acos` VALUES ('916', '915', null, null, 'index', '133', '134');
INSERT INTO `acos` VALUES ('917', '915', null, null, 'view', '135', '136');
INSERT INTO `acos` VALUES ('918', '915', null, null, 'add', '137', '138');
INSERT INTO `acos` VALUES ('919', '915', null, null, 'edit', '139', '140');
INSERT INTO `acos` VALUES ('920', '915', null, null, 'delete', '141', '142');
INSERT INTO `acos` VALUES ('921', '1', null, null, 'Penjualans', '160', '235');
INSERT INTO `acos` VALUES ('922', '921', null, null, 'index', '161', '162');
INSERT INTO `acos` VALUES ('923', '921', null, null, 'view', '163', '164');
INSERT INTO `acos` VALUES ('924', '921', null, null, 'add', '165', '166');
INSERT INTO `acos` VALUES ('925', '921', null, null, 'edit', '167', '168');
INSERT INTO `acos` VALUES ('926', '921', null, null, 'delete', '169', '170');
INSERT INTO `acos` VALUES ('927', '1', null, null, 'PicVendors', '236', '249');
INSERT INTO `acos` VALUES ('928', '927', null, null, 'index', '237', '238');
INSERT INTO `acos` VALUES ('929', '927', null, null, 'view', '239', '240');
INSERT INTO `acos` VALUES ('930', '927', null, null, 'add', '241', '242');
INSERT INTO `acos` VALUES ('931', '927', null, null, 'edit', '243', '244');
INSERT INTO `acos` VALUES ('932', '927', null, null, 'delete', '245', '246');
INSERT INTO `acos` VALUES ('933', '1', null, null, 'Pics', '250', '263');
INSERT INTO `acos` VALUES ('934', '933', null, null, 'index', '251', '252');
INSERT INTO `acos` VALUES ('935', '933', null, null, 'view', '253', '254');
INSERT INTO `acos` VALUES ('936', '933', null, null, 'add', '255', '256');
INSERT INTO `acos` VALUES ('937', '933', null, null, 'edit', '257', '258');
INSERT INTO `acos` VALUES ('938', '933', null, null, 'delete', '259', '260');
INSERT INTO `acos` VALUES ('939', '1', null, null, 'Products', '264', '287');
INSERT INTO `acos` VALUES ('940', '939', null, null, 'index', '265', '266');
INSERT INTO `acos` VALUES ('941', '939', null, null, 'view', '267', '268');
INSERT INTO `acos` VALUES ('942', '939', null, null, 'add', '269', '270');
INSERT INTO `acos` VALUES ('943', '939', null, null, 'edit', '271', '272');
INSERT INTO `acos` VALUES ('944', '939', null, null, 'delete', '273', '274');
INSERT INTO `acos` VALUES ('945', '1', null, null, 'Roles', '288', '301');
INSERT INTO `acos` VALUES ('946', '945', null, null, 'index', '289', '290');
INSERT INTO `acos` VALUES ('947', '945', null, null, 'view', '291', '292');
INSERT INTO `acos` VALUES ('948', '945', null, null, 'add', '293', '294');
INSERT INTO `acos` VALUES ('949', '945', null, null, 'edit', '295', '296');
INSERT INTO `acos` VALUES ('950', '945', null, null, 'delete', '297', '298');
INSERT INTO `acos` VALUES ('951', '1', null, null, 'Stoks', '302', '315');
INSERT INTO `acos` VALUES ('952', '951', null, null, 'index', '303', '304');
INSERT INTO `acos` VALUES ('953', '951', null, null, 'view', '305', '306');
INSERT INTO `acos` VALUES ('954', '951', null, null, 'add', '307', '308');
INSERT INTO `acos` VALUES ('955', '951', null, null, 'edit', '309', '310');
INSERT INTO `acos` VALUES ('956', '951', null, null, 'delete', '311', '312');
INSERT INTO `acos` VALUES ('957', '1', null, null, 'Units', '316', '329');
INSERT INTO `acos` VALUES ('958', '957', null, null, 'index', '317', '318');
INSERT INTO `acos` VALUES ('959', '957', null, null, 'view', '319', '320');
INSERT INTO `acos` VALUES ('960', '957', null, null, 'add', '321', '322');
INSERT INTO `acos` VALUES ('961', '957', null, null, 'edit', '323', '324');
INSERT INTO `acos` VALUES ('962', '957', null, null, 'delete', '325', '326');
INSERT INTO `acos` VALUES ('963', '1', null, null, 'Vendors', '330', '345');
INSERT INTO `acos` VALUES ('964', '963', null, null, 'index', '331', '332');
INSERT INTO `acos` VALUES ('965', '963', null, null, 'view', '333', '334');
INSERT INTO `acos` VALUES ('966', '963', null, null, 'add', '335', '336');
INSERT INTO `acos` VALUES ('967', '963', null, null, 'edit', '337', '338');
INSERT INTO `acos` VALUES ('968', '963', null, null, 'delete', '339', '340');
INSERT INTO `acos` VALUES ('1109', '885', null, null, 'kategori', '67', '68');
INSERT INTO `acos` VALUES ('1194', '963', null, null, 'all', '341', '342');
INSERT INTO `acos` VALUES ('1223', '921', null, null, 'model', '171', '172');
INSERT INTO `acos` VALUES ('1252', '921', null, null, 'auto', '173', '174');
INSERT INTO `acos` VALUES ('1281', '915', null, null, 'auto_produk', '143', '144');
INSERT INTO `acos` VALUES ('1310', '915', null, null, 'cart', '145', '146');
INSERT INTO `acos` VALUES ('1339', '915', null, null, 'del_produk', '147', '148');
INSERT INTO `acos` VALUES ('1368', '1', null, null, 'Submerks', '346', '359');
INSERT INTO `acos` VALUES ('1369', '1368', null, null, 'index', '347', '348');
INSERT INTO `acos` VALUES ('1370', '1368', null, null, 'view', '349', '350');
INSERT INTO `acos` VALUES ('1371', '1368', null, null, 'add', '351', '352');
INSERT INTO `acos` VALUES ('1372', '1368', null, null, 'edit', '353', '354');
INSERT INTO `acos` VALUES ('1373', '1368', null, null, 'delete', '355', '356');
INSERT INTO `acos` VALUES ('1430', '915', null, null, 'konversi_tanggal', '149', '150');
INSERT INTO `acos` VALUES ('1515', '909', null, null, 'merk', '127', '128');
INSERT INTO `acos` VALUES ('1966', '1', null, null, 'Banks', '360', '373');
INSERT INTO `acos` VALUES ('1967', '1966', null, null, 'index', '361', '362');
INSERT INTO `acos` VALUES ('1968', '1966', null, null, 'view', '363', '364');
INSERT INTO `acos` VALUES ('1969', '1966', null, null, 'add', '365', '366');
INSERT INTO `acos` VALUES ('1970', '1966', null, null, 'edit', '367', '368');
INSERT INTO `acos` VALUES ('1971', '1966', null, null, 'delete', '369', '370');
INSERT INTO `acos` VALUES ('2056', '939', null, null, 'stock', '275', '276');
INSERT INTO `acos` VALUES ('2197', '903', null, null, 'ajax', '111', '112');
INSERT INTO `acos` VALUES ('2338', '1', null, null, 'Bahanbakuses', '374', '405');
INSERT INTO `acos` VALUES ('2339', '2338', null, null, 'index', '375', '376');
INSERT INTO `acos` VALUES ('2340', '2338', null, null, 'view', '377', '378');
INSERT INTO `acos` VALUES ('2341', '2338', null, null, 'add', '379', '380');
INSERT INTO `acos` VALUES ('2342', '2338', null, null, 'edit', '381', '382');
INSERT INTO `acos` VALUES ('2343', '2338', null, null, 'delete', '383', '384');
INSERT INTO `acos` VALUES ('2484', '921', null, null, 'bahanbaku', '175', '176');
INSERT INTO `acos` VALUES ('2625', '921', null, null, 'cart', '177', '178');
INSERT INTO `acos` VALUES ('3047', '921', null, null, 'del_produk', '179', '180');
INSERT INTO `acos` VALUES ('3188', '921', null, null, 'samping', '181', '182');
INSERT INTO `acos` VALUES ('3329', '921', null, null, 'del_produksamping', '183', '184');
INSERT INTO `acos` VALUES ('3470', '921', null, null, 'belakang', '185', '186');
INSERT INTO `acos` VALUES ('3471', '921', null, null, 'aksesoris', '187', '188');
INSERT INTO `acos` VALUES ('3472', '921', null, null, 'service', '189', '190');
INSERT INTO `acos` VALUES ('3753', '921', null, null, 'autoaksesoris', '191', '192');
INSERT INTO `acos` VALUES ('3754', '921', null, null, 'autoservice', '193', '194');
INSERT INTO `acos` VALUES ('3895', '921', null, null, 'del_produkbelakang', '195', '196');
INSERT INTO `acos` VALUES ('3896', '921', null, null, 'del_produkaksesoris', '197', '198');
INSERT INTO `acos` VALUES ('3897', '921', null, null, 'del_produkservice', '199', '200');
INSERT INTO `acos` VALUES ('4038', '921', null, null, 'jumlahtot', '201', '202');
INSERT INTO `acos` VALUES ('4319', '939', null, null, 'check', '277', '278');
INSERT INTO `acos` VALUES ('4460', '939', null, null, 'LabaRugi', '279', '280');
INSERT INTO `acos` VALUES ('4601', '921', null, null, 'preview', '203', '204');
INSERT INTO `acos` VALUES ('4742', '2338', null, null, 'bayar', '385', '386');
INSERT INTO `acos` VALUES ('5023', '2338', null, null, 'tambah', '387', '388');
INSERT INTO `acos` VALUES ('5164', '921', null, null, 'histori', '205', '206');
INSERT INTO `acos` VALUES ('5305', '921', null, null, 'rekaphistori', '207', '208');
INSERT INTO `acos` VALUES ('5446', '921', null, null, 'createnomor', '209', '210');
INSERT INTO `acos` VALUES ('5587', '921', null, null, 'createorder', '211', '212');
INSERT INTO `acos` VALUES ('5728', '921', null, null, 'detail', '213', '214');
INSERT INTO `acos` VALUES ('5869', '2338', null, null, 'depan', '389', '390');
INSERT INTO `acos` VALUES ('6290', '1', null, null, 'Bayars', '406', '429');
INSERT INTO `acos` VALUES ('6291', '6290', null, null, 'index', '407', '408');
INSERT INTO `acos` VALUES ('6292', '6290', null, null, 'view', '409', '410');
INSERT INTO `acos` VALUES ('6293', '6290', null, null, 'add', '411', '412');
INSERT INTO `acos` VALUES ('6294', '6290', null, null, 'edit', '413', '414');
INSERT INTO `acos` VALUES ('6295', '6290', null, null, 'delete', '415', '416');
INSERT INTO `acos` VALUES ('6436', '6290', null, null, 'riwayat', '417', '418');
INSERT INTO `acos` VALUES ('6718', '6290', null, null, 'ceklunas', '419', '420');
INSERT INTO `acos` VALUES ('6859', '921', null, null, 'ceklunas', '215', '216');
INSERT INTO `acos` VALUES ('7000', '2338', null, null, 'del_depan', '391', '392');
INSERT INTO `acos` VALUES ('7281', '6290', null, null, 'nota', '421', '422');
INSERT INTO `acos` VALUES ('7422', '921', null, null, 'autoprodukd', '217', '218');
INSERT INTO `acos` VALUES ('7423', '921', null, null, 'autoproduks', '219', '220');
INSERT INTO `acos` VALUES ('7424', '921', null, null, 'autoprodukb', '221', '222');
INSERT INTO `acos` VALUES ('7705', '2338', null, null, 'detail', '393', '394');
INSERT INTO `acos` VALUES ('7986', '939', null, null, 'produk', '281', '282');
INSERT INTO `acos` VALUES ('8127', '1', null, null, 'Returs', '430', '449');
INSERT INTO `acos` VALUES ('8128', '8127', null, null, 'index', '431', '432');
INSERT INTO `acos` VALUES ('8129', '8127', null, null, 'view', '433', '434');
INSERT INTO `acos` VALUES ('8130', '8127', null, null, 'add', '435', '436');
INSERT INTO `acos` VALUES ('8131', '8127', null, null, 'edit', '437', '438');
INSERT INTO `acos` VALUES ('8132', '8127', null, null, 'delete', '439', '440');
INSERT INTO `acos` VALUES ('8273', '8127', null, null, 'auto_produk', '441', '442');
INSERT INTO `acos` VALUES ('8274', '8127', null, null, 'del_produk', '443', '444');
INSERT INTO `acos` VALUES ('8275', '8127', null, null, 'cart', '445', '446');
INSERT INTO `acos` VALUES ('8556', '8127', null, null, 'konversi_tanggal', '447', '448');
INSERT INTO `acos` VALUES ('8977', '939', null, null, 'all', '283', '284');
INSERT INTO `acos` VALUES ('9426', '915', null, null, 'isidel', '151', '152');
INSERT INTO `acos` VALUES ('9567', '915', null, null, 'hapus', '153', '154');
INSERT INTO `acos` VALUES ('9708', '6290', null, null, 'notahidden', '423', '424');
INSERT INTO `acos` VALUES ('9877', '2338', null, null, 'popdetail', '395', '396');
INSERT INTO `acos` VALUES ('9878', '2338', null, null, 'konversi_tanggal', '397', '398');
INSERT INTO `acos` VALUES ('9879', '1966', null, null, 'konversi_tanggal', '371', '372');
INSERT INTO `acos` VALUES ('9880', '6290', null, null, 'konversi_tanggal', '425', '426');
INSERT INTO `acos` VALUES ('9881', '885', null, null, 'konversi_tanggal', '69', '70');
INSERT INTO `acos` VALUES ('9882', '891', null, null, 'konversi_tanggal', '83', '84');
INSERT INTO `acos` VALUES ('9883', '897', null, null, 'konversi_tanggal', '97', '98');
INSERT INTO `acos` VALUES ('9884', '2', null, null, 'konversi_tanggal', '13', '14');
INSERT INTO `acos` VALUES ('9885', '903', null, null, 'konversi_tanggal', '113', '114');
INSERT INTO `acos` VALUES ('9886', '909', null, null, 'konversi_tanggal', '129', '130');
INSERT INTO `acos` VALUES ('9887', '8', null, null, 'konversi_tanggal', '21', '22');
INSERT INTO `acos` VALUES ('9888', '921', null, null, 'konversi_tanggal', '223', '224');
INSERT INTO `acos` VALUES ('9889', '927', null, null, 'konversi_tanggal', '247', '248');
INSERT INTO `acos` VALUES ('9890', '933', null, null, 'konversi_tanggal', '261', '262');
INSERT INTO `acos` VALUES ('9891', '10', null, null, 'konversi_tanggal', '35', '36');
INSERT INTO `acos` VALUES ('9892', '939', null, null, 'konversi_tanggal', '285', '286');
INSERT INTO `acos` VALUES ('9893', '945', null, null, 'konversi_tanggal', '299', '300');
INSERT INTO `acos` VALUES ('9894', '951', null, null, 'konversi_tanggal', '313', '314');
INSERT INTO `acos` VALUES ('9895', '1368', null, null, 'konversi_tanggal', '357', '358');
INSERT INTO `acos` VALUES ('9896', '957', null, null, 'konversi_tanggal', '327', '328');
INSERT INTO `acos` VALUES ('9897', '16', null, null, 'konversi_tanggal', '53', '54');
INSERT INTO `acos` VALUES ('9898', '963', null, null, 'konversi_tanggal', '343', '344');
INSERT INTO `acos` VALUES ('9930', '921', null, null, 'detailpenj', '225', '226');
INSERT INTO `acos` VALUES ('9962', '921', null, null, 'printorder', '227', '228');
INSERT INTO `acos` VALUES ('9994', '6290', null, null, 'printnota', '427', '428');
INSERT INTO `acos` VALUES ('10026', '2338', null, null, 'updatedisc', '399', '400');
INSERT INTO `acos` VALUES ('10058', '2338', null, null, 'success', '401', '402');
INSERT INTO `acos` VALUES ('10090', '921', null, null, 'isidel', '229', '230');
INSERT INTO `acos` VALUES ('10153', '921', null, null, 'hapus', '231', '232');
INSERT INTO `acos` VALUES ('10185', '915', null, null, 'success', '155', '156');
INSERT INTO `acos` VALUES ('10217', '915', null, null, 'simpan', '157', '158');
INSERT INTO `acos` VALUES ('10249', '921', null, null, 'historirekap', '233', '234');
INSERT INTO `acos` VALUES ('10312', '2338', null, null, 'retur', '403', '404');
INSERT INTO `acos` VALUES ('10344', '1', null, null, 'Acl', '450', '511');
INSERT INTO `acos` VALUES ('10345', '10344', null, null, 'Acl', '451', '458');
INSERT INTO `acos` VALUES ('10346', '10345', null, null, 'index', '452', '453');
INSERT INTO `acos` VALUES ('10347', '10345', null, null, 'admin_index', '454', '455');
INSERT INTO `acos` VALUES ('10348', '10345', null, null, 'konversi_tanggal', '456', '457');
INSERT INTO `acos` VALUES ('10349', '10344', null, null, 'Acos', '459', '472');
INSERT INTO `acos` VALUES ('10350', '10349', null, null, 'admin_index', '460', '461');
INSERT INTO `acos` VALUES ('10351', '10349', null, null, 'admin_empty_acos', '462', '463');
INSERT INTO `acos` VALUES ('10352', '10349', null, null, 'admin_build_acl', '464', '465');
INSERT INTO `acos` VALUES ('10353', '10349', null, null, 'admin_prune_acos', '466', '467');
INSERT INTO `acos` VALUES ('10354', '10349', null, null, 'admin_synchronize', '468', '469');
INSERT INTO `acos` VALUES ('10355', '10349', null, null, 'konversi_tanggal', '470', '471');
INSERT INTO `acos` VALUES ('10356', '10344', null, null, 'Aros', '473', '510');
INSERT INTO `acos` VALUES ('10357', '10356', null, null, 'admin_index', '474', '475');
INSERT INTO `acos` VALUES ('10358', '10356', null, null, 'admin_check', '476', '477');
INSERT INTO `acos` VALUES ('10359', '10356', null, null, 'admin_users', '478', '479');
INSERT INTO `acos` VALUES ('10360', '10356', null, null, 'admin_update_user_role', '480', '481');
INSERT INTO `acos` VALUES ('10361', '10356', null, null, 'admin_ajax_role_permissions', '482', '483');
INSERT INTO `acos` VALUES ('10362', '10356', null, null, 'admin_role_permissions', '484', '485');
INSERT INTO `acos` VALUES ('10363', '10356', null, null, 'admin_user_permissions', '486', '487');
INSERT INTO `acos` VALUES ('10364', '10356', null, null, 'admin_empty_permissions', '488', '489');
INSERT INTO `acos` VALUES ('10365', '10356', null, null, 'admin_clear_user_specific_permissions', '490', '491');
INSERT INTO `acos` VALUES ('10366', '10356', null, null, 'admin_grant_all_controllers', '492', '493');
INSERT INTO `acos` VALUES ('10367', '10356', null, null, 'admin_deny_all_controllers', '494', '495');
INSERT INTO `acos` VALUES ('10368', '10356', null, null, 'admin_get_role_controller_permission', '496', '497');
INSERT INTO `acos` VALUES ('10369', '10356', null, null, 'admin_grant_role_permission', '498', '499');
INSERT INTO `acos` VALUES ('10370', '10356', null, null, 'admin_deny_role_permission', '500', '501');
INSERT INTO `acos` VALUES ('10371', '10356', null, null, 'admin_get_user_controller_permission', '502', '503');
INSERT INTO `acos` VALUES ('10372', '10356', null, null, 'admin_grant_user_permission', '504', '505');
INSERT INTO `acos` VALUES ('10373', '10356', null, null, 'admin_deny_user_permission', '506', '507');
INSERT INTO `acos` VALUES ('10374', '10356', null, null, 'konversi_tanggal', '508', '509');

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

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
INSERT INTO `aros` VALUES ('26', null, 'Group', '4', null, '33', '40');
INSERT INTO `aros` VALUES ('29', '26', 'User', '12', null, '34', '35');
INSERT INTO `aros` VALUES ('30', '7', 'User', '13', null, '22', '23');
INSERT INTO `aros` VALUES ('31', null, 'Group', '6', null, '41', '42');
INSERT INTO `aros` VALUES ('32', null, 'Group', '7', null, '43', '46');
INSERT INTO `aros` VALUES ('33', '32', 'User', '14', null, '44', '45');
INSERT INTO `aros` VALUES ('34', '26', 'User', '15', null, '36', '37');
INSERT INTO `aros` VALUES ('35', '26', 'User', '16', null, '38', '39');

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
  `tipe` int(2) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bahanbakus
-- ----------------------------
INSERT INTO `bahanbakus` VALUES ('1', '6', '100', '100', null, '1', '1', '1', '6', '2016-08-15 17:41:42', '2016-08-15 17:41:42');
INSERT INTO `bahanbakus` VALUES ('2', '6', '100', '100', null, '1', '5', '1', '6', '2016-08-16 12:41:21', '2016-08-16 12:41:21');
INSERT INTO `bahanbakus` VALUES ('3', '30', '1000', '100', null, '1', '2', '1', '30', '2016-08-18 10:17:06', '2016-08-18 10:17:06');
INSERT INTO `bahanbakus` VALUES ('4', '30', '900', '50', null, '1', '2', '2', '30', '2016-08-18 10:17:06', '2016-08-18 10:17:06');

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
  `id_penjualan` int(10) DEFAULT NULL,
  `bayar` varchar(255) NOT NULL,
  `kembalian` varchar(10) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `tipe_bayar` varchar(25) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `ket` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bayars
-- ----------------------------
INSERT INTO `bayars` VALUES ('2', '5', '2039987', '', '2039987', 'Tunai', '0000-00-00', '', '2016-08-16 00:00:00', '2016-08-16 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
INSERT INTO `categories` VALUES ('13', '2', '14', '15', 'bemper depan', '0', '2016-06-30 11:38:22', '2016-06-30 11:39:19');
INSERT INTO `categories` VALUES ('15', null, '19', '20', 'Kategori', '1', '2016-08-06 12:16:06', '2016-08-06 12:16:06');
INSERT INTO `categories` VALUES ('16', null, '21', '24', 'kategori tes', '1', '2016-08-15 16:11:08', '2016-08-15 16:11:57');
INSERT INTO `categories` VALUES ('17', '16', '22', '23', 'kategori tes tes', '1', '2016-08-15 16:11:47', '2016-08-15 16:11:47');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

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
INSERT INTO `customers` VALUES ('9', 'Pelanggan', 'alamat', null, '08242341', '2016-08-09 17:47:19', '2016-08-09');
INSERT INTO `customers` VALUES ('10', 'nama pelanggan', 'Semarang', null, '08324421', '2016-08-10 12:44:25', '2016-08-10');
INSERT INTO `customers` VALUES ('11', 'nama pelanggan 2', 'ekdjslkdj', null, '01232321', '2016-08-11 13:43:56', '2016-08-11');
INSERT INTO `customers` VALUES ('12', 'ry', 'rutr', null, 'ryr', '2016-08-12 15:26:27', '2016-08-12');

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
  `disc` int(100) DEFAULT NULL,
  `hidden_disc` int(100) DEFAULT NULL,
  `id_karyawan` int(11) NOT NULL,
  `ket` text,
  `flag` varchar(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `penjualan_id` (`penjualan_id`),
  CONSTRAINT `detail_penjualans_ibfk_1` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of detail_penjualans
-- ----------------------------
INSERT INTO `detail_penjualans` VALUES ('2', '1', '6', '2', '1000', '1', null, '1', '2', '1', '2016-08-15 16:51:33', '2016-08-15 16:51:33');
INSERT INTO `detail_penjualans` VALUES ('3', '2', '30', '2', '150000', '30000', null, '12', '', '1', '2016-08-15 18:50:21', '2016-08-15 18:50:21');
INSERT INTO `detail_penjualans` VALUES ('4', '3', '30', '21', '150000', '20000', null, '10', '', null, '2016-08-15 18:53:39', '2016-08-15 18:53:39');
INSERT INTO `detail_penjualans` VALUES ('5', '5', '6', '2', '20000', '10', null, '10', 'ok', '1', '2016-08-15 23:25:06', '2016-08-15 23:25:06');
INSERT INTO `detail_penjualans` VALUES ('6', '5', '16', '2', '1000000', '1', null, '10', 'ok', '1', '2016-08-15 23:25:06', '2016-08-15 23:25:06');
INSERT INTO `detail_penjualans` VALUES ('7', '6', '13', '2', '20000', '2', null, '2', 'ok', null, '2016-08-15 23:31:11', '2016-08-15 23:31:11');
INSERT INTO `detail_penjualans` VALUES ('8', '6', '13', '2', '10000', '1', null, '2', 'ok', null, '2016-08-15 23:31:11', '2016-08-15 23:31:11');
INSERT INTO `detail_penjualans` VALUES ('9', '7', '5', '2', '2', '2', null, '1', 'ok', null, '2016-08-16 11:43:24', '2016-08-16 11:43:24');
INSERT INTO `detail_penjualans` VALUES ('10', '7', '5', '10', '21', '2', null, '1', 'ok', null, '2016-08-16 11:43:24', '2016-08-16 11:43:24');
INSERT INTO `detail_penjualans` VALUES ('11', '7', '5', '2', '2', '2', null, '1', 'ok', null, '2016-08-16 11:43:24', '2016-08-16 11:43:24');
INSERT INTO `detail_penjualans` VALUES ('12', '7', '6', '2', '20000', '10', null, '1', 'ok', null, '2016-08-16 11:43:24', '2016-08-16 11:43:24');
INSERT INTO `detail_penjualans` VALUES ('13', '8', '6', '2', '1000', '2', null, '10', 'ok', null, '2016-08-16 11:59:36', '2016-08-16 11:59:36');
INSERT INTO `detail_penjualans` VALUES ('14', '8', '6', '2', '1000', '2', null, '10', 'ok', null, '2016-08-16 11:59:36', '2016-08-16 11:59:36');
INSERT INTO `detail_penjualans` VALUES ('15', '9', '6', '2', '1000', '2', null, '2', 'ok', null, '2016-08-16 11:59:37', '2016-08-16 11:59:37');
INSERT INTO `detail_penjualans` VALUES ('16', '9', '13', '2', '2000', '1', null, '2', 'ok', null, '2016-08-16 11:59:37', '2016-08-16 11:59:37');
INSERT INTO `detail_penjualans` VALUES ('17', '10', '5', '2', '100', '2', null, '12', 'ok', null, '2016-08-16 13:28:59', '2016-08-16 13:28:59');
INSERT INTO `detail_penjualans` VALUES ('18', '10', '5', '2', '200', '10', null, '12', 'ok', null, '2016-08-16 13:28:59', '2016-08-16 13:28:59');
INSERT INTO `detail_penjualans` VALUES ('19', '11', '30', '2', '200000', '10000', null, '10', 'info', null, '2016-08-16 17:54:56', '2016-08-16 17:54:56');
INSERT INTO `detail_penjualans` VALUES ('20', '12', '31', '4', '150000', '20000', null, '12', '', null, '2016-08-16 17:55:24', '2016-08-16 17:55:24');

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
  `no_ktp` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text,
  `ket` text,
  `aktif` int(1) DEFAULT '0' COMMENT '0=nonaktif;1=aktif',
  `date_join` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_ktp` (`no_ktp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawans
-- ----------------------------
INSERT INTO `karyawans` VALUES ('1', '1111', 'Angga', 'Ungaran', 'OK', '1', '2016-07-27', '2016-05-10 05:19:18', '2016-08-10 16:15:11');
INSERT INTO `karyawans` VALUES ('2', '12345', 'Andrie', 'malang', 'Bagus', '1', '2016-07-28', '2016-05-11 04:57:23', '2016-05-31 01:50:44');
INSERT INTO `karyawans` VALUES ('10', '123456', 'Kasir', 'jogja', 'norek', '1', '2016-07-28', '2016-06-30 11:54:51', '2016-07-30 11:01:49');
INSERT INTO `karyawans` VALUES ('12', '123454', 'Receptionist', '-', '-', '1', '2016-07-30', '2016-07-30 11:01:30', '2016-07-30 11:01:30');
INSERT INTO `karyawans` VALUES ('13', '11112', 'nama2', 'alamat2', 'ket2', '0', '2016-05-06', '2016-08-06 12:20:52', '2016-08-06 12:21:59');

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
  PRIMARY KEY (`id`,`nomor`),
  KEY `nomor` (`nomor`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pembelians
-- ----------------------------
INSERT INTO `pembelians` VALUES ('4', '1234567890', '2016-05-12', '6', 'keterangan', '1', '25', '25000000', null, '100000', '16000', '1', null, null, '2016-05-14 05:14:43', '2016-05-14 05:14:43');
INSERT INTO `pembelians` VALUES ('5', '1234567890', '2016-05-12', '6', 'keterangan', '4', '2000', '2500000', null, '100000', '16000', '1', null, null, '2016-05-14 05:14:43', '2016-05-14 05:14:43');
INSERT INTO `pembelians` VALUES ('23', '446', '2016-05-30', '29', 'ket', '1', '10', '2500000', '5%', '1500000', '16000', '1', '0', '0', '2016-05-31 03:41:47', '2016-05-31 03:41:47');
INSERT INTO `pembelians` VALUES ('24', '446', '2016-05-30', '29', 'ket', '4', '150', '5250000', '0%', '1500000', '16000', '1', '0', '0', '2016-05-31 03:41:47', '2016-05-31 03:41:47');
INSERT INTO `pembelians` VALUES ('25', '345678', '2016-05-07', '6', '-', '6', '1', '500000', '0%', '', '', '1', '0', '0', '2016-05-31 05:11:30', '2016-05-31 05:11:30');
INSERT INTO `pembelians` VALUES ('31', '1234', '2016-06-06', '6', '231', '11', '100', '100000', '0', '', '', '1', '0', '0', '2016-06-07 06:01:42', '2016-06-07 06:01:42');
INSERT INTO `pembelians` VALUES ('33', 'XX/01000', '2016-07-26', '28', 'Beli', '4', '20', '100000', '10', '3', '1000', '1', '0', '0', '2016-07-27 15:44:16', '2016-07-27 15:44:16');
INSERT INTO `pembelians` VALUES ('37', 'INV/07/26/0001', '2016-07-25', '29', 'ket', '1', '1', '1000000', '5', '100000', '64000', '1', '0', '0', '2016-07-28 00:32:48', '2016-07-28 00:32:48');
INSERT INTO `pembelians` VALUES ('38', 'INV/07/26/0001', '2016-07-25', '29', 'ket', '4', '1', '3500000', '0', '100000', '64000', '1', '0', '0', '2016-07-28 00:32:48', '2016-07-28 00:32:48');
INSERT INTO `pembelians` VALUES ('39', '3654363', '2016-07-28', '32', 'Kaca', '1', '2', '1000', '70', '100', '1000', '1', '0', '0', '2016-07-29 13:59:55', '2016-07-29 13:59:55');
INSERT INTO `pembelians` VALUES ('40', '3654363', '2016-07-28', '32', 'Kaca', '10', '1000', '10000', '10', '100', '1000', '1', '0', '0', '2016-07-29 13:59:55', '2016-07-29 13:59:55');
INSERT INTO `pembelians` VALUES ('41', '78735', '2016-07-29', '28', 'ok', '5', '100', '1000', '1', '1', '1000', '1', '0', '0', '2016-07-29 15:31:14', '2016-07-29 15:31:14');
INSERT INTO `pembelians` VALUES ('42', '745y64343', '2016-07-27', '30', 'joid', '13', '20', '20000', '10', '1', '1', '1', '0', '0', '2016-07-29 15:34:22', '2016-07-29 15:34:22');
INSERT INTO `pembelians` VALUES ('45', '123456789', '2016-08-05', '8', 'Lalalala', '1', '15', '10000', '10', '30000', '20000', '1', '0', '0', '2016-08-06 12:12:43', '2016-08-06 12:12:43');
INSERT INTO `pembelians` VALUES ('46', 'qwe123', '2016-08-17', '8', 'ket', '1', '10', '1000000', '10', '', '', '1', '0', '0', '2016-08-09 18:18:46', '2016-08-09 18:18:46');
INSERT INTO `pembelians` VALUES ('47', 'asd123', '2016-08-09', '8', 'ket', '18', '1', '100000', '10', '', '', '1', '0', '0', '2016-08-09 18:20:36', '2016-08-09 18:20:36');
INSERT INTO `pembelians` VALUES ('48', 'qwerty', '2016-08-09', '8', 'ket', '1', '5', '100000', '10', '1000', '10000', '1', '0', '0', '2016-08-09 18:48:07', '2016-08-09 18:48:07');
INSERT INTO `pembelians` VALUES ('49', 'qwerty', '2016-08-09', '8', 'ket', '5', '30', '100000', '12', '1000', '10000', '1', '0', '0', '2016-08-09 18:48:07', '2016-08-09 18:48:07');
INSERT INTO `pembelians` VALUES ('50', '52343242', '2016-08-04', '6', '', '4', '1', '5000000', '0', '25000', '32000', '1', '1', '10000', '2016-08-10 16:50:27', '2016-08-10 16:50:27');
INSERT INTO `pembelians` VALUES ('52', '5423423', '2016-08-10', '8', 'ket', '24', '10', '1300000', '10', '200000', '230000', '1', '1', '300000', '2016-08-10 12:10:21', '2016-08-10 12:10:21');
INSERT INTO `pembelians` VALUES ('53', '5423423', '2016-08-10', '8', 'ket', '25', '12', '200000', '10', '200000', '230000', '1', '1', '300000', '2016-08-10 12:10:21', '2016-08-10 12:10:21');
INSERT INTO `pembelians` VALUES ('55', 'anyar01', '2016-08-10', '29', '-', '1', '2', '100000', '10', '0', '32000', '1', '1', '1000', '2016-08-10 17:22:49', '2016-08-10 17:22:49');
INSERT INTO `pembelians` VALUES ('56', 'qwerty123', '2016-08-12', '28', 'ket', '28', '12', '230000', '10', '1200000', '100000', '1', '1', '123333', '2016-08-11 13:34:39', '2016-08-11 13:34:39');
INSERT INTO `pembelians` VALUES ('57', 'qwerty123', '2016-08-12', '28', 'ket', '29', '20', '430000', '23', '1200000', '100000', '1', '1', '123333', '2016-08-11 13:34:39', '2016-08-11 13:34:39');
INSERT INTO `pembelians` VALUES ('62', 'asd123', '2016-08-12', '32', 'ket', '28', '12', '12', '12', '10', '10', '1', '1', '10', '2016-08-11 17:01:25', '2016-08-11 17:01:25');
INSERT INTO `pembelians` VALUES ('63', 'asd123', '2016-08-12', '32', 'ket', '28', '14', '14', '14', '10', '10', '1', '1', '10', '2016-08-11 17:01:25', '2016-08-11 17:01:25');
INSERT INTO `pembelians` VALUES ('68', 'AR446123', '2016-08-05', '6', '', '6', '12', '12', '12', '', '', '1', '0', '0', '2016-08-11 17:22:31', '2016-08-11 17:22:31');
INSERT INTO `pembelians` VALUES ('69', '314412', '2016-08-12', '31', 'qwre', '30', '12', '120000', '12', '', '', '1', '0', '0', '2016-08-12 12:45:22', '2016-08-12 12:45:22');
INSERT INTO `pembelians` VALUES ('70', '314412', '2016-08-12', '31', 'qwre', '31', '21', '210000', '21', '', '', '1', '0', '0', '2016-08-12 12:45:22', '2016-08-12 12:45:22');
INSERT INTO `pembelians` VALUES ('71', '354g', '2016-08-04', '28', 'r', '32', '3', '10000', '10', '', '32000', '1', '0', '0', '2016-08-15 15:22:23', '2016-08-15 15:22:23');
INSERT INTO `pembelians` VALUES ('72', 'xxx123456bbb', '2016-08-16', '29', '-', '6', '2', '1000000', '0', '', '', '1', '0', '0', '2016-08-16 12:00:49', '2016-08-16 12:00:49');

-- ----------------------------
-- Table structure for penjualans
-- ----------------------------
DROP TABLE IF EXISTS `penjualans`;
CREATE TABLE `penjualans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `disc` int(11) DEFAULT NULL,
  `hidden_disc` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penjualans
-- ----------------------------
INSERT INTO `penjualans` VALUES ('1', 'F/08/2016/SMG/0001', 'CO/08/2016/0001', '1', '3', '8', '2010', 'H 7373 NG', 'Ok0iu0', '0-0--wrw', '1', '2', '1', '2016-08-15 16:51:33', '2016-08-15 16:51:33');
INSERT INTO `penjualans` VALUES ('2', 'F/08/2016/SMG/0002', 'CO/08/2016/0002', '11', '4', '9', '12', '12', '12', '12', '1', '50000', '25000', '2016-08-15 18:50:21', '2016-08-15 18:50:21');
INSERT INTO `penjualans` VALUES ('3', 'F/08/2016/SMG/0003', 'CO/08/2016/0003', '10', '4', '9', '21', '21', '21', '21', '1', '123', '3213', '2016-08-15 18:53:39', '2016-08-15 18:53:39');
INSERT INTO `penjualans` VALUES ('4', 'F/08/2016/SMG/0003', 'CO/08/2016/0003', '10', '3', '8', '2', '2', '2', '2', '1', '123', '3213', '2016-08-15 18:53:44', '2016-08-15 18:53:44');
INSERT INTO `penjualans` VALUES ('5', 'F/08/2016/SMG/0004', 'CO/08/2016/0004', '11', '1', '5', '2010', 'H 878 NG', '43637', '3737', '1', '1', '1', '2016-08-15 23:25:06', '2016-08-15 23:25:06');
INSERT INTO `penjualans` VALUES ('6', 'F/08/2016/SMG/0005', 'CO/08/2016/0005', '1', '1', '5', '2010', '4', '3473', '347', '1', '2', '2', '2016-08-15 23:31:11', '2016-08-15 23:31:11');
INSERT INTO `penjualans` VALUES ('7', 'F/08/2016/SMG/0006', 'CO/08/2016/0006', '1', '1', '5', '2010', 'wetw', 'wetwe', 'twet', '1', '1', '1', '2016-08-16 11:43:24', '2016-08-16 11:43:24');
INSERT INTO `penjualans` VALUES ('8', 'F/08/2016/SMG/0007', 'CO/08/2016/0007', '11', '1', '5', '2010', 'H 863893 N', '89790', '8978989', '1', '1', '1', '2016-08-16 11:59:36', '2016-08-16 11:59:36');
INSERT INTO `penjualans` VALUES ('9', 'F/08/2016/SMG/0008', 'CO/08/2016/0008', '9', '3', '8', '2010', 'K 87887 NF', '890', '8989', '1', '1', '200', '2016-08-16 11:59:37', '2016-08-16 11:59:37');
INSERT INTO `penjualans` VALUES ('10', 'F/08/2016/SMG/0009', 'CO/08/2016/0009', '1', '1', '5', '2010', 'ewtwe', 'wetwet', 'ewtewt', '1', '1', '1', '2016-08-16 13:28:59', '2016-08-16 13:28:59');
INSERT INTO `penjualans` VALUES ('11', 'F/08/2016/SMG/0010', 'CO/08/2016/0010', '10', '3', '8', '3', '3', '3', '3', '1', '50000', '30000', '2016-08-16 17:54:55', '2016-08-16 17:54:55');
INSERT INTO `penjualans` VALUES ('12', 'F/08/2016/SMG/0011', 'CO/08/2016/0011', '10', '3', '8', '2', '2', '1', '1', '1', '12342', '1212', '2016-08-16 17:55:24', '2016-08-16 17:55:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

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
INSERT INTO `pic_vendors` VALUES ('56', '8', '432434323', 'Office', '2016-08-10 19:07:58', '2016-08-10 19:07:58');
INSERT INTO `pic_vendors` VALUES ('57', '8', '0812334556', 'Public Relation', '2016-08-10 19:07:58', '2016-08-10 19:07:58');
INSERT INTO `pic_vendors` VALUES ('58', '33', '0812334556', 'Andi', '2016-08-19 10:52:16', '2016-08-19 10:52:16');
INSERT INTO `pic_vendors` VALUES ('59', '33', '0831231331', 'Anda', '2016-08-19 10:52:16', '2016-08-19 10:52:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'Kaca Vkool Depan', '4', 'Luas', '90,1000', 'gulungan', 'kaca film 3m', null, null, null, '0', '2016-05-10 05:00:42', '2016-08-18 11:54:12');
INSERT INTO `products` VALUES ('4', 'Spoiler', '2', 'Luas', null, 'pcs', '', null, null, null, '1', null, '2016-05-25 02:07:29');
INSERT INTO `products` VALUES ('5', 'Sunglasses', '2', 'Unit', null, 'pcs', '', null, null, null, '1', null, '2016-06-23 01:13:10');
INSERT INTO `products` VALUES ('6', 'Kaca Belakang', '7', 'Luas', '100,100', 'gulungan', '', null, '1', null, '1', null, '2016-06-28 23:41:04');
INSERT INTO `products` VALUES ('8', 'Kacafilm 60%', '4', 'Luas', '1000,5000', 'gulungan', '12131', null, null, null, '1', '2016-06-04 04:43:23', '2016-06-04 04:43:23');
INSERT INTO `products` VALUES ('10', 'Kacafilm 30%', '6', 'Luas', '1000,1000', 'gulungan', '123', null, null, null, '1', '2016-06-07 06:00:39', '2016-06-28 23:41:26');
INSERT INTO `products` VALUES ('12', 'VKOOL', '5', 'Luas', '3000,152', 'CM', 'CM2', null, null, null, '1', '2016-06-24 05:59:17', '2016-06-24 06:00:15');
INSERT INTO `products` VALUES ('13', 'Ganti Oli', '3', 'Unit', null, '', '', null, null, null, '1', null, '2016-07-27 15:42:29');
INSERT INTO `products` VALUES ('14', 'bemper depan avanza', '13', 'Unit', null, 'Set', 'model ABS', null, null, null, '1', '2016-06-30 11:42:41', '2016-06-30 11:42:41');
INSERT INTO `products` VALUES ('15', 'bemper belakang avanza', '13', 'Unit', null, 'Set', 'sample', null, null, null, '0', '2016-06-30 11:51:33', '2016-08-11 18:36:09');
INSERT INTO `products` VALUES ('16', 'solargard', '4', 'Luas', '30000,1520', 'rol', 'sample film', null, null, null, '1', '2016-06-30 11:53:51', '2016-06-30 11:53:51');
INSERT INTO `products` VALUES ('17', 'Produk kategori', '1', 'Luas', '1000,100', 'pcs', 'deskripsi', null, null, null, '1', '2016-08-06 12:17:07', '2016-08-06 12:18:30');
INSERT INTO `products` VALUES ('18', 'nama produk', '4', 'Luas', '10000,1000', 'gulungan', 'des', null, null, null, '1', '2016-08-09 18:19:38', '2016-08-09 18:19:38');
INSERT INTO `products` VALUES ('24', 'produk', '4', 'Luas', '1000,100', 'pcs', 'des', null, null, null, '1', '2016-08-10 12:01:00', '2016-08-10 12:12:23');
INSERT INTO `products` VALUES ('25', 'produk', '6', 'Luas', '1000,100', 'pcs', 'des', null, null, null, '1', '2016-08-10 12:03:34', '2016-08-10 12:12:59');
INSERT INTO `products` VALUES ('26', 'produk 2', '4', 'Unit', null, 'pcs', 'des', null, null, null, '1', '2016-08-10 12:35:25', '2016-08-10 12:40:15');
INSERT INTO `products` VALUES ('27', 'produk 3', '2', 'Unit', null, 'pcs', '', null, null, null, '0', '2016-08-10 19:02:39', '2016-08-10 19:05:28');
INSERT INTO `products` VALUES ('28', 'tes produk', '4', 'Luas', '1000,100', 'roll', 'des', null, null, null, '1', '2016-08-11 13:32:13', '2016-08-11 13:37:40');
INSERT INTO `products` VALUES ('29', 'tes produk 2', '6', 'Unit', null, 'pcs', 'des', null, null, null, '1', '2016-08-11 13:32:41', '2016-08-11 13:38:00');
INSERT INTO `products` VALUES ('30', 'tes produk 3', '1', 'Luas', '1000,100', 'roll', 'des', null, null, null, '1', '2016-08-12 12:41:57', '2016-08-12 12:42:34');
INSERT INTO `products` VALUES ('31', 'tes produk 4', '1', 'Unit', null, 'pcs', 'des', null, null, null, '1', '2016-08-12 12:42:20', '2016-08-12 12:42:20');
INSERT INTO `products` VALUES ('32', 'produk produk', '1', 'Luas', '10,10', 'pcs', 'des', null, null, null, '1', '2016-08-12 18:22:59', '2016-08-12 18:22:59');
INSERT INTO `products` VALUES ('35', 'coba', '2', 'Unit', null, 'set', 'ret', null, null, null, '1', '2016-08-12 18:30:45', '2016-08-12 18:30:45');
INSERT INTO `products` VALUES ('36', 'produk produk 2', '4', 'Unit', null, 'pcs', 'des', null, null, null, '0', '2016-08-12 18:32:44', '2016-08-12 18:33:00');
INSERT INTO `products` VALUES ('37', 'produk tes', '17', 'Luas', '12,12', 'qwe', 'qwe', null, null, null, '1', '2016-08-15 16:12:39', '2016-08-15 16:12:39');

-- ----------------------------
-- Table structure for returs
-- ----------------------------
DROP TABLE IF EXISTS `returs`;
CREATE TABLE `returs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noretur` varchar(7) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `bahanbakus_id` int(11) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `luas` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `jenis` varchar(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of returs
-- ----------------------------
INSERT INTO `returs` VALUES ('2', 'RE00002', '1', null, null, null, '20', '2016-08-17', '32', 'ok', '1', '2016-08-18 10:15:04', '2016-08-18 10:15:04');
INSERT INTO `returs` VALUES ('3', 'RE00002', '1', null, null, null, '10', '2016-08-17', '32', 'ok', '2', '2016-08-18 10:15:04', '2016-08-18 10:15:04');
INSERT INTO `returs` VALUES ('4', 'RE00003', '35', null, null, null, '20', '2016-08-19', '29', 'ok', '1', '2016-08-18 10:26:14', '2016-08-18 10:26:14');
INSERT INTO `returs` VALUES ('5', 'RE00003', '35', null, null, null, '10', '2016-08-19', '29', 'ok', '2', '2016-08-18 10:26:14', '2016-08-18 10:26:14');
INSERT INTO `returs` VALUES ('6', 'RE00004', '13', null, null, null, '2', '2016-08-19', '8', 'ket', '1', '2016-08-18 12:12:49', '2016-08-18 12:12:49');
INSERT INTO `returs` VALUES ('7', 'RE00004', '13', null, null, null, '1', '2016-08-19', '8', 'ket', '2', '2016-08-18 12:12:49', '2016-08-18 12:12:49');

-- ----------------------------
-- Table structure for returs_copy
-- ----------------------------
DROP TABLE IF EXISTS `returs_copy`;
CREATE TABLE `returs_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noretur` varchar(7) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `sn` varchar(255) DEFAULT NULL,
  `luas` varchar(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `jenis` varchar(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of returs_copy
-- ----------------------------
INSERT INTO `returs_copy` VALUES ('1', 'RE00001', '5', null, null, '0', '2016-08-18', '30', 'ok', null, '2016-08-18 09:31:31', '2016-08-18 09:31:31');
INSERT INTO `returs_copy` VALUES ('2', 'RE00002', '1', null, null, '0', '2016-08-18', '30', 'okh', null, '2016-08-18 09:33:40', '2016-08-18 09:33:40');
INSERT INTO `returs_copy` VALUES ('3', 'RE00003', '1', null, null, '0', '2016-08-18', '4', 'dgd', '1', '2016-08-18 09:48:35', '2016-08-18 09:48:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', null, 'Super Administrators', '-', 'super', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-03-25 09:18:43', '2016-08-18 14:31:08');
INSERT INTO `users` VALUES ('2', '2', null, 'Administrator', null, 'usroperator', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '2013-03-25 09:26:08', '2016-07-28 17:45:02');
INSERT INTO `users` VALUES ('13', '1', null, 'indra aries', '', 'indla', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '998e69ddc31c40ec98f8991aa145a7ae6a394d40', '2013-06-03 06:37:41', '2013-06-03 06:37:41');
INSERT INTO `users` VALUES ('14', '7', '12', 'Receptionist', null, 'usrrecep', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '91efca55e9a34eaeb0c09eb9f253647ca355d051', '2016-07-30 11:02:38', '2016-07-30 11:02:38');
INSERT INTO `users` VALUES ('15', '4', '10', 'Kasir', null, 'usrkasir', '84a13432b890a47c4a99d8a0fa3a92df91311339', '84a13432b890a47c4a99d8a0fa3a92df91311339', '2016-07-30 11:03:05', '2016-08-18 15:39:04');
INSERT INTO `users` VALUES ('16', '4', '10', 'Kasir', null, 'usrkasir1', '84a13432b890a47c4a99d8a0fa3a92df91311339', '84a13432b890a47c4a99d8a0fa3a92df91311339', '2016-08-06 12:28:48', '2016-08-06 12:28:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vendors
-- ----------------------------
INSERT INTO `vendors` VALUES ('4', 'indra', 'jakarta', '', '45745875865', 'ok', '1', '2016-05-11 03:37:21', '2016-06-23 01:14:47');
INSERT INTO `vendors` VALUES ('6', 'Otobox', 'Semarang', '1', '1122', '111', '1', '2016-05-12 05:46:35', '2016-05-31 03:05:03');
INSERT INTO `vendors` VALUES ('8', 'Gajah Tunggal', 'Surabaya', '1', '436456456', 'sip', '0', '2016-05-12 05:47:20', '2016-08-10 19:07:58');
INSERT INTO `vendors` VALUES ('28', 'Mega Tron', 'California', null, '1234566', null, '1', '2016-05-31 01:58:58', '2016-05-31 01:58:58');
INSERT INTO `vendors` VALUES ('29', 'Optimus Prime', 'Calijaga', 'Indonesia', '09809799', null, '1', '2016-05-31 02:00:39', '2016-05-31 02:00:39');
INSERT INTO `vendors` VALUES ('30', 'Megra', 'Kaliwage', '1', 'dsgdsfg', 'dfgdfgdf', '1', '2016-05-31 03:03:19', '2016-05-31 03:03:19');
INSERT INTO `vendors` VALUES ('31', 'Vendor', 'alamat', '1', '32424234342', 'ket', '1', '2016-06-04 04:52:01', '2016-06-04 04:52:35');
INSERT INTO `vendors` VALUES ('32', 'INDOMOTOR LESTARI', 'PECENONGAN JAKARTA', '1', '4586215421', 'KACA FILM', '1', '2016-06-24 06:13:21', '2016-06-24 06:13:21');
INSERT INTO `vendors` VALUES ('33', 'PT Maju Jaya', 'Semarang', '4', '1292332983', 'keterangan', '1', '2016-08-19 10:52:16', '2016-08-19 10:52:16');

-- ----------------------------
-- View structure for vw_history
-- ----------------------------
DROP VIEW IF EXISTS `vw_history`;
CREATE ALGORITHM=UNDEFINED DEFINER=`vkool`@`%` SQL SECURITY DEFINER VIEW `vw_history` AS select `penjualans`.`id` AS `id`,`penjualans`.`nomor` AS `nomor`,`penjualans`.`created` AS `created`,`customers`.`nama` AS `nama`,sum(`bayars`.`bayar`) AS `bayar`,`bayars`.`total` AS `total` from (((`penjualans` join `customers` on((`penjualans`.`customer_id` = `customers`.`id`))) join `bayars` on((`bayars`.`id_penjualan` = `penjualans`.`id`))) join `bahanbakus` on((`bahanbakus`.`penjualan_id` = `penjualans`.`id`))) group by `penjualans`.`id`,`penjualans`.`nomor`,`penjualans`.`created`,`customers`.`nama` ;
