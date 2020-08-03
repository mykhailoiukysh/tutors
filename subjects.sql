/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : tutors

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 03/08/2020 13:21:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for subjects
-- ----------------------------
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectTitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `languageMedium` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of subjects
-- ----------------------------
INSERT INTO `subjects` VALUES (1, 'O-Level', 'English Language', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/1128_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (2, 'O-Level', 'History', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/2174_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (3, 'O-Level', 'Geography', 'English', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/2236_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (4, 'O-Level', 'Hindi', 'Hindi', '1128', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3194_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (5, 'O-Level', 'Urdu', 'Urdu', '3196', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3196_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (6, 'O-Level', 'Gujarati', 'Gujarati', '3199', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3199_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (7, 'O-Level', 'Panjabi', 'Panjabi', '3203', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3203_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (8, 'O-Level', 'Bengali', 'Bengali', '3215', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/3215_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (9, 'O-Level', 'Additional Mathematics', 'English', '4047', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/4047_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (10, 'O-Level', 'Mathematics', 'English', '4048', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/4048_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (11, 'O-Level', 'Science (Physics, Chemistry)', 'English', '5076', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5076_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (12, 'O-Level', 'Science (Physics, Biology)', 'English', '5077', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5077_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (13, 'O-Level', 'Science (Chemistry, Biology)', 'English', '5078', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/5078_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (14, 'O-Level', 'Physics', 'English', '6091', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6091_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (15, 'O-Level', 'Chemistry', 'English', '6092', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6092_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (16, 'O-Level', 'Biology', 'English', '6093', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/6093_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (17, 'O-Level', 'Computing', 'English', '7155', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/7155_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (18, 'O-Level', 'Principles of Accounts', 'English', '7175', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/olevel/2020syllabus/7175_y20_sy.pdf\r\n', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (19, 'A-Level', 'General Paper', 'English', '8807', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8807_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (20, 'A-Level', 'Geography', 'English', '8813', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8813_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (21, 'A-Level', 'History', 'English', '8821', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8821_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (22, 'A-Level', 'Economics', 'English', '8823', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8823_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (23, 'A-Level', 'Bengali', 'Bengali', '8827', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8827_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (24, 'A-Level', 'Gujarati', 'Gujarati', '8828', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8828_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (25, 'A-Level', 'Hindi', 'Hindi', '8829', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8829_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (26, 'A-Level', 'Panjabi', 'Panjabi', '8836', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8836_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (27, 'A-Level', 'Urdu', 'Urdu', '8837', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8837_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (28, 'A-Level', 'Mathematics', 'English', '8865', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8865_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (29, 'A-Level', 'Physics', 'English', '8867', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8867_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (30, 'A-Level', 'Chemistry', 'English', '8873', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8873_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (31, 'A-Level', 'Biology', 'English', '8876', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/8876_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');
INSERT INTO `subjects` VALUES (32, 'A-Level', 'Computing [Revised]', 'English', '9569', 'https://www.seab.gov.sg/docs/default-source/national-examinations/syllabus/alevel/2020syllabus/9569_y20_sy.pdf', '2020-08-01 00:00:00', '2020-08-01 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
