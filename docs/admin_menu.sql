/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50725
Source Host           : 127.0.0.1:33060
Source Database       : l5packages

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-05 16:00:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', '0', '1', '首页', 'fa-bar-chart', '/', null, null, null);
INSERT INTO `admin_menu` VALUES ('2', '0', '2', '系统管理', 'fa-tasks', '', null, null, null);
INSERT INTO `admin_menu` VALUES ('3', '2', '3', '后台用户', 'fa-users', 'auth/users', null, null, null);
INSERT INTO `admin_menu` VALUES ('4', '2', '4', '角色管理', 'fa-user', 'auth/roles', null, null, null);
INSERT INTO `admin_menu` VALUES ('5', '2', '5', '权限管理', 'fa-ban', 'auth/permissions', null, null, null);
INSERT INTO `admin_menu` VALUES ('6', '2', '6', '菜单管理', 'fa-bars', 'auth/menu', null, null, null);
INSERT INTO `admin_menu` VALUES ('7', '2', '7', '操作日志', 'fa-history', 'auth/logs', null, null, null);
INSERT INTO `admin_menu` VALUES ('8', '0', '8', '用户管理', 'fa-user', 'users', null, '2019-03-01 01:25:24', '2019-03-01 06:38:22');
INSERT INTO `admin_menu` VALUES ('9', '0', '0', '文章管理', 'fa-file-word-o', 'posts', null, '2019-03-05 02:47:49', '2019-03-05 02:47:49');
