/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50725
Source Host           : 127.0.0.1:33060
Source Database       : l5packages

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-02-28 14:53:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------
INSERT INTO `oauth_access_tokens` VALUES ('0af24960a727005f64ac69363a722a54b4a439a828e282f889ffa24a9eb31b496cfaa68d574179e8', '1', '1', 'token', '[]', '0', '2019-02-28 06:09:51', '2019-02-28 06:09:51', '2020-02-28 06:09:51');
INSERT INTO `oauth_access_tokens` VALUES ('0ba31105f758168f2be8d5ce28573ae12339c167f2b2238d2327fefa071d100c2e1edb173af1172e', '1', '1', 'token', '[]', '0', '2019-02-28 06:15:49', '2019-02-28 06:15:49', '2020-02-28 06:15:49');
INSERT INTO `oauth_access_tokens` VALUES ('531b57ab8f26afce0b801548f6cbdd1e41fbc9f3bdfc84695b4035d7d6bb80706be8e5e509c6f1e4', '1', '2', null, '[]', '0', '2019-02-28 03:31:30', '2019-02-28 03:31:30', '2019-03-15 03:31:29');
INSERT INTO `oauth_access_tokens` VALUES ('53e54f9913014d25aba5fef5fd968542838ba83881fc4602a5b0072f9d3c066880d9da33927bbf4e', null, '2', null, '[]', '0', '2019-02-28 05:49:17', '2019-02-28 05:49:17', '2019-03-15 05:49:16');
INSERT INTO `oauth_access_tokens` VALUES ('772bb2008eaaf4772971cd505befa8f829957e960cb77a6b88d918a32aae6310537b603e7db7c56a', '1', '2', null, '[\"*\"]', '1', '2019-02-28 06:51:17', '2019-02-28 06:51:17', '2019-03-15 06:51:17');
INSERT INTO `oauth_access_tokens` VALUES ('8ca78e51a743153c351f5870de7fa89dca97fd7ec7296a35066c4625285478db700561968ab55bfc', null, '2', null, '[]', '0', '2019-02-28 05:56:47', '2019-02-28 05:56:47', '2019-03-15 05:56:47');
INSERT INTO `oauth_access_tokens` VALUES ('a5fe22f29d97b5e4a65e7a69f24ace2b4108da5a8b68d2ef52436c579b80616c774c560fae9a323a', '1', '2', null, '[\"*\"]', '0', '2019-02-28 06:52:40', '2019-02-28 06:52:40', '2019-03-15 06:52:40');
INSERT INTO `oauth_access_tokens` VALUES ('b4c2707289b73817b50c82f3ac4d7b3a9ddfcb84bd355089886e0846f7991ee0955046e5140a8796', '1', '2', null, '[\"*\"]', '0', '2019-02-28 03:52:19', '2019-02-28 03:52:19', '2019-03-15 03:52:18');
INSERT INTO `oauth_access_tokens` VALUES ('c5f3cb6ca28613b14f6a7b0849eddd627ea61bd6735a628bfcc976e82cbc1b35f0ae324b7e58d8d1', '1', '2', null, '[\"*\"]', '0', '2019-02-28 03:44:14', '2019-02-28 03:44:14', '2019-03-15 03:44:14');
INSERT INTO `oauth_access_tokens` VALUES ('d8dcdd49433f72ee5da7834e39481e56129edd1883fa25c68a6e3aadc4d0bd99fd890a31d4f4e516', '1', '2', null, '[\"*\"]', '0', '2019-02-28 03:54:00', '2019-02-28 03:54:00', '2019-03-15 03:54:00');
INSERT INTO `oauth_access_tokens` VALUES ('dbd4f2508aac84c88c3239b70250b2cedfcf56da267a021ee85e3ceb6af1658d60771fd72320b434', null, '3', null, '[]', '0', '2019-02-28 05:51:52', '2019-02-28 05:51:52', '2019-03-15 05:51:51');
INSERT INTO `oauth_access_tokens` VALUES ('fb20b3393feb6a0de0a4953a7a5d374a96194f206fadbf1f4525d6b39419032cf816e61cf758bf50', '1', '2', null, '[]', '0', '2019-02-28 03:28:54', '2019-02-28 03:28:54', '2019-03-15 03:28:53');
