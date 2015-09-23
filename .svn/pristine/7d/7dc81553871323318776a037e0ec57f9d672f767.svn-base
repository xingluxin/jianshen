/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : jianshen

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-09-23 10:30:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for js_attribute
-- ----------------------------
DROP TABLE IF EXISTS `js_attribute`;
CREATE TABLE `js_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '字段名',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '字段注释',
  `field` varchar(100) NOT NULL DEFAULT '' COMMENT '字段定义',
  `type` varchar(20) NOT NULL DEFAULT '' COMMENT '数据类型',
  `value` varchar(100) NOT NULL DEFAULT '' COMMENT '字段默认值',
  `remark` varchar(100) NOT NULL DEFAULT '' COMMENT '备注',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '参数',
  `model_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '模型id',
  `is_must` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否必填',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `validate_rule` varchar(255) NOT NULL DEFAULT '',
  `validate_time` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `error_info` varchar(100) NOT NULL DEFAULT '',
  `validate_type` varchar(25) NOT NULL DEFAULT '',
  `auto_rule` varchar(100) NOT NULL DEFAULT '',
  `auto_time` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `auto_type` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `model_id` (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='模型属性表';

-- ----------------------------
-- Records of js_attribute
-- ----------------------------
INSERT INTO `js_attribute` VALUES ('1', 'uid', '用户ID', 'int(10) unsigned NOT NULL ', 'num', '0', '', '0', '', '1', '0', '1', '1384508362', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('3', 'title', '标题', 'char(80) NOT NULL ', 'string', '', '文档标题', '1', '', '1', '0', '1', '1383894778', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('4', 'category_id', '所属分类', 'int(10) unsigned NOT NULL ', 'string', '', '', '0', '', '1', '0', '1', '1384508336', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('5', 'description', '描述', 'char(140) NOT NULL ', 'textarea', '', '', '1', '', '1', '0', '1', '1383894927', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('6', 'root', '根节点', 'int(10) unsigned NOT NULL ', 'num', '0', '该文档的顶级文档编号', '0', '', '1', '0', '1', '1384508323', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('7', 'pid', '所属ID', 'int(10) unsigned NOT NULL ', 'num', '0', '父文档编号', '0', '', '1', '0', '1', '1384508543', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('8', 'model_id', '内容模型ID', 'tinyint(3) unsigned NOT NULL ', 'num', '0', '该文档所对应的模型', '0', '', '1', '0', '1', '1384508350', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('9', 'type', '内容类型', 'tinyint(3) unsigned NOT NULL ', 'select', '2', '', '1', '1:目录\r\n2:主题\r\n3:段落', '1', '0', '1', '1384511157', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('10', 'position', '推荐位', 'smallint(5) unsigned NOT NULL ', 'checkbox', '0', '多个推荐则将其推荐值相加', '1', '[DOCUMENT_POSITION]', '1', '0', '1', '1383895640', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('11', 'link_id', '外链', 'int(10) unsigned NOT NULL ', 'num', '0', '0-非外链，大于0-外链ID,需要函数进行链接与编号的转换', '1', '', '1', '0', '1', '1383895757', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('12', 'cover_id', '封面', 'int(10) unsigned NOT NULL ', 'picture', '0', '0-无封面，大于0-封面图片ID，需要函数处理', '1', '', '1', '0', '1', '1384147827', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('14', 'deadline', '截至时间', 'int(10) unsigned NOT NULL ', 'datetime', '0', '0-永久有效', '1', '', '1', '0', '1', '1387163248', '1383891233', '', '0', '', 'regex', '', '0', 'function');
INSERT INTO `js_attribute` VALUES ('15', 'attach', '附件数量', 'tinyint(3) unsigned NOT NULL ', 'num', '0', '', '0', '', '1', '0', '1', '1387260355', '1383891233', '', '0', '', 'regex', '', '0', 'function');
INSERT INTO `js_attribute` VALUES ('16', 'view', '浏览量', 'int(10) unsigned NOT NULL ', 'num', '0', '', '1', '', '1', '0', '1', '1383895835', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('17', 'comment', '评论数', 'int(10) unsigned NOT NULL ', 'num', '0', '', '1', '', '1', '0', '1', '1383895846', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('18', 'extend', '扩展统计字段', 'int(10) unsigned NOT NULL ', 'num', '0', '根据需求自行使用', '0', '', '1', '0', '1', '1384508264', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('19', 'level', '优先级', 'int(10) unsigned NOT NULL ', 'num', '0', '越高排序越靠前', '1', '', '1', '0', '1', '1383895894', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('20', 'create_time', '创建时间', 'int(10) unsigned NOT NULL ', 'datetime', '0', '', '1', '', '1', '0', '1', '1383895903', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('21', 'update_time', '更新时间', 'int(10) unsigned NOT NULL ', 'datetime', '0', '', '0', '', '1', '0', '1', '1384508277', '1383891233', '', '0', '', '', '', '0', '');
INSERT INTO `js_attribute` VALUES ('22', 'status', '数据状态', 'tinyint(4) NOT NULL ', 'radio', '0', '', '0', '-1:删除\r\n0:禁用\r\n1:正常\r\n2:待审核\r\n3:草稿', '1', '0', '1', '1384508496', '1383891233', '', '0', '', '', '', '0', '');

-- ----------------------------
-- Table structure for js_category
-- ----------------------------
DROP TABLE IF EXISTS `js_category`;
CREATE TABLE `js_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `list_row` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '列表每页行数',
  `meta_title` varchar(50) NOT NULL DEFAULT '' COMMENT 'SEO的网页标题',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `template_index` varchar(100) NOT NULL DEFAULT '' COMMENT '频道页模板',
  `template_lists` varchar(100) NOT NULL DEFAULT '' COMMENT '列表页模板',
  `template_detail` varchar(100) NOT NULL DEFAULT '' COMMENT '详情页模板',
  `template_edit` varchar(100) NOT NULL DEFAULT '' COMMENT '编辑页模板',
  `model` varchar(100) NOT NULL DEFAULT '' COMMENT '列表绑定模型',
  `model_sub` varchar(100) NOT NULL DEFAULT '' COMMENT '子文档绑定模型',
  `type` varchar(100) NOT NULL DEFAULT '' COMMENT '允许发布的内容类型',
  `link_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '外链',
  `allow_publish` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许发布内容',
  `display` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '可见性',
  `reply` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否允许回复',
  `check` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '发布的文章是否需要审核',
  `reply_model` varchar(100) NOT NULL DEFAULT '',
  `extend` text COMMENT '扩展设置',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '数据状态',
  `icon` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类图标',
  `groups` varchar(255) NOT NULL DEFAULT '' COMMENT '分组定义',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of js_category
-- ----------------------------
INSERT INTO `js_category` VALUES ('55', '单页', '0', '0', '10', '', '', '', '', '', '', '', '', '', '', '0', '1', '0', '0', '0', '', null, '1442815229', '1442815229', '1', '0', '');
INSERT INTO `js_category` VALUES ('56', '实用防身术', '53', '0', '10', '', '', '', '', '', '', '', '', '', '', '0', '1', '0', '0', '0', '', null, '1442913711', '1442913711', '1', '0', '');
INSERT INTO `js_category` VALUES ('54', '健康资讯', '53', '0', '10', '', '', '', '', '', '', '', '', '', '', '0', '1', '0', '0', '0', '', null, '1442542419', '1442542419', '1', '0', '');
INSERT INTO `js_category` VALUES ('53', '资讯', '0', '0', '10', '', '', '', '', '', '', '', '', '', '', '0', '1', '0', '0', '0', '', null, '1442542306', '1442542306', '1', '0', '');

-- ----------------------------
-- Table structure for js_config
-- ----------------------------
DROP TABLE IF EXISTS `js_config`;
CREATE TABLE `js_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '配置ID',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '配置名称',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '配置说明',
  `group` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置分组',
  `extra` varchar(255) NOT NULL DEFAULT '' COMMENT '配置值',
  `remark` varchar(100) NOT NULL COMMENT '配置说明',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `value` text NOT NULL COMMENT '配置值',
  `sort` smallint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_config
-- ----------------------------
INSERT INTO `js_config` VALUES ('1', 'WEB_SITE_TITLE', '1', '网站标题', '1', '', '网站标题前台显示标题', '1378898976', '1379235274', '1', 'test', '1');
INSERT INTO `js_config` VALUES ('2', 'WEB_SITE_DESCRIPTION', '2', '网站描述', '1', '', '网站搜索引擎描述', '1378898976', '1379235841', '1', 'OneThink内容管理框架', '19');
INSERT INTO `js_config` VALUES ('3', 'WEB_SITE_KEYWORD', '2', '网站关键字', '1', '', '网站搜索引擎关键字', '1378898976', '1381390100', '1', 'ThinkPHP,OneThink', '20');
INSERT INTO `js_config` VALUES ('4', 'WEB_SITE_CLOSE', '4', '关闭站点', '1', '0:关闭,1:开启', '站点关闭后其他用户不能访问，管理员可以正常访问', '1378898976', '1379235296', '1', '1', '2');
INSERT INTO `js_config` VALUES ('9', 'CONFIG_TYPE_LIST', '3', '配置类型列表', '4', '', '主要用于数据解析和页面表单的生成', '1378898976', '1379235348', '1', '0:数字\r\n1:字符\r\n2:文本\r\n3:数组\r\n4:枚举', '3');
INSERT INTO `js_config` VALUES ('10', 'WEB_SITE_ICP', '1', '网站备案号', '1', '', '设置在网站底部显示的备案号，如“沪ICP备12007941号-2', '1378900335', '1379235859', '1', '', '21');
INSERT INTO `js_config` VALUES ('11', 'DOCUMENT_POSITION', '3', '文档推荐位', '2', '', '文档推荐位，推荐到多个位置KEY值相加即可', '1379053380', '1379235329', '1', '1:列表页推荐\r\n2:频道页推荐\r\n4:网站首页推荐', '4');
INSERT INTO `js_config` VALUES ('12', 'DOCUMENT_DISPLAY', '3', '文档可见性', '2', '', '文章可见性仅影响前台显示，后台不收影响', '1379056370', '1379235322', '1', '0:所有人可见\r\n1:仅注册会员可见\r\n2:仅管理员可见', '5');
INSERT INTO `js_config` VALUES ('13', 'COLOR_STYLE', '4', '后台色系', '1', 'default_color:默认\r\nblue_color:紫罗兰', '后台颜色风格', '1379122533', '1379235904', '1', 'default_color', '22');
INSERT INTO `js_config` VALUES ('20', 'CONFIG_GROUP_LIST', '3', '配置分组', '4', '', '配置分组', '1379228036', '1442823178', '1', '1:基本\r\n2:内容\r\n3:用户\r\n4:系统\r\n5:支付', '6');
INSERT INTO `js_config` VALUES ('21', 'HOOKS_TYPE', '3', '钩子的类型', '4', '', '类型 1-用于扩展显示内容，2-用于扩展业务处理', '1379313397', '1379313407', '1', '1:视图\r\n2:控制器', '7');
INSERT INTO `js_config` VALUES ('22', 'AUTH_CONFIG', '3', 'Auth配置', '4', '', '自定义Auth.class.php类配置', '1379409310', '1379409564', '1', 'AUTH_ON:1\r\nAUTH_TYPE:2', '8');
INSERT INTO `js_config` VALUES ('23', 'OPEN_DRAFTBOX', '4', '是否开启草稿功能', '2', '0:关闭草稿功能\r\n1:开启草稿功能\r\n', '新增文章时的草稿功能配置', '1379484332', '1379484591', '1', '1', '9');
INSERT INTO `js_config` VALUES ('24', 'AOTUSAVE_DRAFT', '0', '自动保存草稿时间', '2', '', '自动保存草稿的时间间隔，单位：秒', '1379484574', '1379484574', '1', '60', '10');
INSERT INTO `js_config` VALUES ('25', 'LIST_ROWS', '0', '后台每页记录数', '2', '', '后台数据每页显示记录数', '1379503896', '1380427745', '1', '10', '23');
INSERT INTO `js_config` VALUES ('26', 'USER_ALLOW_REGISTER', '4', '是否允许用户注册', '3', '0:关闭注册\r\n1:允许注册', '是否开放用户注册', '1379504487', '1379504580', '1', '1', '11');
INSERT INTO `js_config` VALUES ('27', 'CODEMIRROR_THEME', '4', '预览插件的CodeMirror主题', '4', '3024-day:3024 day\r\n3024-night:3024 night\r\nambiance:ambiance\r\nbase16-dark:base16 dark\r\nbase16-light:base16 light\r\nblackboard:blackboard\r\ncobalt:cobalt\r\neclipse:eclipse\r\nelegant:elegant\r\nerlang-dark:erlang-dark\r\nlesser-dark:lesser-dark\r\nmidnight:midnight', '详情见CodeMirror官网', '1379814385', '1384740813', '1', 'ambiance', '12');
INSERT INTO `js_config` VALUES ('28', 'DATA_BACKUP_PATH', '1', '数据库备份根路径', '4', '', '路径必须以 / 结尾', '1381482411', '1381482411', '1', './Data/', '13');
INSERT INTO `js_config` VALUES ('29', 'DATA_BACKUP_PART_SIZE', '0', '数据库备份卷大小', '4', '', '该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M', '1381482488', '1381729564', '1', '20971520', '14');
INSERT INTO `js_config` VALUES ('30', 'DATA_BACKUP_COMPRESS', '4', '数据库备份文件是否启用压缩', '4', '0:不压缩\r\n1:启用压缩', '压缩备份文件需要PHP环境支持gzopen,gzwrite函数', '1381713345', '1381729544', '1', '1', '15');
INSERT INTO `js_config` VALUES ('31', 'DATA_BACKUP_COMPRESS_LEVEL', '4', '数据库备份文件压缩级别', '4', '1:普通\r\n4:一般\r\n9:最高', '数据库备份文件的压缩级别，该配置在开启压缩时生效', '1381713408', '1381713408', '1', '9', '16');
INSERT INTO `js_config` VALUES ('32', 'DEVELOP_MODE', '4', '开启开发者模式', '4', '0:关闭\r\n1:开启', '是否开启开发者模式', '1383105995', '1383291877', '1', '1', '17');
INSERT INTO `js_config` VALUES ('34', 'PAY_RECHARGE_TITLE', '1', '帐户充值标题', '5', '', '用于支付时显示的标题', '1442823407', '1442823482', '1', '帐户充值', '0');
INSERT INTO `js_config` VALUES ('35', 'PAY_RECHARGE_BODY', '1', '帐户充值描述', '5', '', '用于帐户充值时显示的描述', '1442823517', '1442823569', '1', '帐户充值描述', '0');

-- ----------------------------
-- Table structure for js_document
-- ----------------------------
DROP TABLE IF EXISTS `js_document`;
CREATE TABLE `js_document` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `pic_id` int(10) DEFAULT NULL,
  `pics_id` varchar(20) DEFAULT NULL,
  `file_id` int(10) DEFAULT NULL,
  `keywords` varchar(60) DEFAULT NULL,
  `source` varchar(60) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `linkurl` varchar(60) DEFAULT NULL,
  `hits` varchar(60) DEFAULT NULL,
  `orderid` int(20) DEFAULT NULL,
  `update_time` varchar(60) DEFAULT NULL,
  `create_time` varchar(60) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `position` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_document
-- ----------------------------
INSERT INTO `js_document` VALUES ('34', '1', '55', '受益规则', '', null, '0', null, '0', '', '', '', '', '0', '0', '1442815392', '1442815392', '1', null);
INSERT INTO `js_document` VALUES ('35', '1', '55', '咨询', '', '&lt;p&gt;电话：111111111&lt;/p&gt;', '0', '', '0', '', '', '', '', '0', '0', '1442912970', '1442912970', '1', null);
INSERT INTO `js_document` VALUES ('31', null, null, null, null, null, null, null, '0', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `js_document` VALUES ('32', '1', '54', '44', '44', '&lt;p&gt;44&lt;/p&gt;', '97', '', '0', '', '', '', '', '38', '0', '1442801399', '1442801399', '1', null);
INSERT INTO `js_document` VALUES ('33', '1', '55', '赚钱攻略', '1', '&lt;p&gt;1&lt;/p&gt;', '0', '', '0', '', '', '', '', '1', '0', '1442815786', '1442815786', '1', null);

-- ----------------------------
-- Table structure for js_excharge
-- ----------------------------
DROP TABLE IF EXISTS `js_excharge`;
CREATE TABLE `js_excharge` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `money` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `site_order` varchar(60) DEFAULT NULL,
  `create_time` varchar(60) DEFAULT NULL,
  `way` varchar(255) DEFAULT NULL COMMENT '提现方式',
  `account` varchar(120) DEFAULT NULL COMMENT '提款账号,支付宝或银行卡',
  `bank` varchar(60) DEFAULT NULL COMMENT '开户银行',
  `branch` varchar(255) DEFAULT NULL COMMENT '开户网点',
  `truename` varchar(60) DEFAULT NULL COMMENT '真实姓名',
  `mobile` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='提现表';

-- ----------------------------
-- Records of js_excharge
-- ----------------------------
INSERT INTO `js_excharge` VALUES ('1', '32', '123', '0', '20150922105220345', '1442890340', null, null, null, null, null, null);
INSERT INTO `js_excharge` VALUES ('3', '32', '123', '1', '20150922135839982', '1442901519', null, null, null, null, null, null);
INSERT INTO `js_excharge` VALUES ('4', '32', '20', '0', '20150922142416800', '1442903056', null, null, null, null, null, null);
INSERT INTO `js_excharge` VALUES ('5', '32', '123', '0', '20150922145027356', '1442904627', '0', '', '123', '123', '123', '123');
INSERT INTO `js_excharge` VALUES ('6', '32', '80', '0', '20150922145515512', '1442904915', '0', '', '123', '123', '123', '123');
INSERT INTO `js_excharge` VALUES ('7', '32', '123123', '0', '20150922145549205', '1442904949', '0', '', '123123', '123', '123123', '123123');
INSERT INTO `js_excharge` VALUES ('8', '32', '123123123', '0', '20150922145720375', '1442905040', '0', '123123', '123123', '123123', '123123123', '123123');
INSERT INTO `js_excharge` VALUES ('9', '32', '200', '1', '20150922150141915', '1442905301', '0', 'lussen@xingluxin.cn', '', '', '邢路鑫', '13488830175');

-- ----------------------------
-- Table structure for js_feed_back
-- ----------------------------
DROP TABLE IF EXISTS `js_feed_back`;
CREATE TABLE `js_feed_back` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `content` text,
  `create_time` varchar(60) DEFAULT NULL,
  `create_ip` varchar(60) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_feed_back
-- ----------------------------
INSERT INTO `js_feed_back` VALUES ('10', '32', 'fuck\r\n', '1442814870', '2130706433', '1');
INSERT INTO `js_feed_back` VALUES ('11', '32', '阿桑地方', '1442814904', '2130706433', '0');
INSERT INTO `js_feed_back` VALUES ('9', '32', '丰富丰富', '1442814843', '2130706433', '1');

-- ----------------------------
-- Table structure for js_file
-- ----------------------------
DROP TABLE IF EXISTS `js_file`;
CREATE TABLE `js_file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文件ID',
  `name` char(30) NOT NULL DEFAULT '' COMMENT '原始文件名',
  `savename` char(20) NOT NULL DEFAULT '' COMMENT '保存名称',
  `savepath` char(30) NOT NULL DEFAULT '' COMMENT '文件保存路径',
  `ext` char(5) NOT NULL DEFAULT '' COMMENT '文件后缀',
  `mime` char(40) NOT NULL DEFAULT '' COMMENT '文件mime类型',
  `size` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `md5` char(32) NOT NULL DEFAULT '' COMMENT '文件md5',
  `sha1` char(40) NOT NULL DEFAULT '' COMMENT '文件 sha1编码',
  `location` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '文件保存位置',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '远程地址',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_md5` (`md5`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='文件表';

-- ----------------------------
-- Records of js_file
-- ----------------------------
INSERT INTO `js_file` VALUES ('11', 'Penguins.jpg', '55f8d173030e7.jpg', '2015-09-16/', 'jpg', 'application/octet-stream', '777835', '9d377b10ce778c4938b3c7e2c63a229a', 'df7be9dc4f467187783aca68c7ce98e4df2172d0', '0', '', '1442369906');
INSERT INTO `js_file` VALUES ('12', 'Hydrangeas.jpg', '55f90aa2251b0.jpg', '2015-09-16/', 'jpg', 'application/octet-stream', '595284', 'bdf3bf1da3405725be763540d6601144', 'd997e1c37edc05ad87d03603e32ad495ee2cfce1', '0', '', '1442384546');
INSERT INTO `js_file` VALUES ('13', 'Desert.jpg', '55f90e2024296.jpg', '2015-09-16/', 'jpg', 'application/octet-stream', '845941', 'ba45c8f60456a672e003a875e469d0eb', '30420d1a9afb2bcb60335812569af4435a59ce17', '0', '', '1442385440');
INSERT INTO `js_file` VALUES ('14', 'Koala.jpg', '55f9315465f36.jpg', '2015-09-16/', 'jpg', 'application/octet-stream', '780831', '2b04df3ecc1d94afddff082d139c6f15', '9c3dcb1f9185a314ea25d51aed3b5881b32f420c', '0', '', '1442394452');
INSERT INTO `js_file` VALUES ('15', 'Jellyfish.jpg', '55fa675843753.jpg', '2015-09-17/', 'jpg', 'application/octet-stream', '775702', '5a44c7ba5bbe4ec867233d67e4806848', '3b15be84aff20b322a93c0b9aaa62e25ad33b4b4', '0', '', '1442473816');
INSERT INTO `js_file` VALUES ('16', 'Chrysanthemum.jpg', '55fa6a86d8874.jpg', '2015-09-17/', 'jpg', 'application/octet-stream', '879394', '076e3caed758a1c18c91a0e9cae3368f', 'f5f8ad26819a471318d24631fa5055036712a87e', '0', '', '1442474630');

-- ----------------------------
-- Table structure for js_member
-- ----------------------------
DROP TABLE IF EXISTS `js_member`;
CREATE TABLE `js_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
  `truename` varchar(60) DEFAULT NULL,
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date NOT NULL DEFAULT '0000-00-00' COMMENT '生日',
  `qq` char(10) NOT NULL DEFAULT '' COMMENT 'qq号',
  `score` mediumint(8) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `login` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '会员状态',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `ix_uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='会员表\r\n@author   麦当苗儿\r\n@version  2013-05-27';

-- ----------------------------
-- Records of js_member
-- ----------------------------
INSERT INTO `js_member` VALUES ('1', 'admin', null, '0', '0000-00-00', '', '20', '26', '0', '1441675799', '2130706433', '1442974417', '1');
INSERT INTO `js_member` VALUES ('32', 'test0122', '邢路鑫', '1', '0000-00-00', '753230175', '0', '13', '2130706433', '1442799963', '2130706433', '1442974259', '1');

-- ----------------------------
-- Table structure for js_model
-- ----------------------------
DROP TABLE IF EXISTS `js_model`;
CREATE TABLE `js_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '模型ID',
  `name` char(30) NOT NULL DEFAULT '' COMMENT '模型标识',
  `title` char(30) NOT NULL DEFAULT '' COMMENT '模型名称',
  `extend` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '继承的模型',
  `relation` varchar(30) NOT NULL DEFAULT '' COMMENT '继承与被继承模型的关联字段',
  `need_pk` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '新建表时是否需要主键字段',
  `field_sort` text COMMENT '表单字段排序',
  `field_group` varchar(255) NOT NULL DEFAULT '1:基础' COMMENT '字段分组',
  `attribute_list` text COMMENT '属性列表（表的字段）',
  `attribute_alias` varchar(255) NOT NULL DEFAULT '' COMMENT '属性别名定义',
  `template_list` varchar(100) NOT NULL DEFAULT '' COMMENT '列表模板',
  `template_add` varchar(100) NOT NULL DEFAULT '' COMMENT '新增模板',
  `template_edit` varchar(100) NOT NULL DEFAULT '' COMMENT '编辑模板',
  `list_grid` text COMMENT '列表定义',
  `list_row` smallint(2) unsigned NOT NULL DEFAULT '10' COMMENT '列表数据长度',
  `search_key` varchar(50) NOT NULL DEFAULT '' COMMENT '默认搜索字段',
  `search_list` varchar(255) NOT NULL DEFAULT '' COMMENT '高级搜索的字段',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `engine_type` varchar(25) NOT NULL DEFAULT 'MyISAM' COMMENT '数据库引擎',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='文档模型表';

-- ----------------------------
-- Records of js_model
-- ----------------------------
INSERT INTO `js_model` VALUES ('1', 'document', '基础文档', '0', '', '1', '{\"1\":[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\"]}', '1:基础', '', '', '', '', '', 'id:编号\r\ntitle:标题:[EDIT]\r\ntype:类型\r\nupdate_time:最后更新\r\nstatus:状态\r\nview:浏览\r\nid:操作:[EDIT]|编辑,[DELETE]|删除', '0', '', '', '1383891233', '1384507827', '1', 'MyISAM');

-- ----------------------------
-- Table structure for js_pay
-- ----------------------------
DROP TABLE IF EXISTS `js_pay`;
CREATE TABLE `js_pay` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL COMMENT '付款人用户id',
  `site_order` varchar(120) DEFAULT NULL COMMENT '网站订单ID',
  `pay_item` varchar(120) DEFAULT NULL,
  `pay_order` varchar(120) DEFAULT NULL COMMENT '第三方订单号',
  `pay_mode` varchar(30) DEFAULT NULL COMMENT '支付方式',
  `pay_money` varchar(255) DEFAULT NULL COMMENT '订单金额',
  `create_time` varchar(60) DEFAULT NULL COMMENT '订单创建时间',
  `finish_time` varchar(60) DEFAULT NULL COMMENT '订单完成时间',
  `isdone` int(10) DEFAULT NULL COMMENT '是否完成交易',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_pay
-- ----------------------------
INSERT INTO `js_pay` VALUES ('16', '32', '20150921150955', 'recharge', null, null, '11', '1442819515', null, '0');
INSERT INTO `js_pay` VALUES ('17', '32', '20150921150912834', 'recharge', null, null, '22', '1442819772', null, '0');
INSERT INTO `js_pay` VALUES ('18', '32', '20150921150921694', 'recharge', null, null, '444', '1442819781', null, '0');
INSERT INTO `js_pay` VALUES ('19', '32', '20150921150917951', 'recharge', null, null, '22', '1442819837', null, '0');
INSERT INTO `js_pay` VALUES ('20', '32', '20150921150944728', 'recharge', null, null, '123', '1442820284', null, '0');
INSERT INTO `js_pay` VALUES ('21', '32', '20150921150927983', 'recharge', null, null, '444', '1442820327', null, '0');
INSERT INTO `js_pay` VALUES ('22', '32', '20150921150927951', 'recharge', null, null, '22', '1442820387', null, '0');
INSERT INTO `js_pay` VALUES ('23', '32', '20150921150936525', 'recharge', null, null, '22', '1442820396', null, '0');
INSERT INTO `js_pay` VALUES ('24', '32', '20150921150951655', 'recharge', null, null, '44', '1442820531', null, '0');
INSERT INTO `js_pay` VALUES ('25', '32', '20150921150959799', 'recharge', null, null, '444', '1442820659', null, '0');
INSERT INTO `js_pay` VALUES ('26', '32', '20150921150932139', 'recharge', null, 'unionPay', '444', '1442820692', null, '0');
INSERT INTO `js_pay` VALUES ('27', '32', '20150921160908875', 'recharge', null, 'unionPay', '20', '1442822408', null, '0');
INSERT INTO `js_pay` VALUES ('28', '32', '20150921160915754', 'recharge', null, 'unionPay', '99', '1442822835', null, '0');
INSERT INTO `js_pay` VALUES ('29', '32', '20150921160940932', 'recharge', null, 'aliPay', '2', '1442822920', null, '0');
INSERT INTO `js_pay` VALUES ('30', '32', '20150921160949346', 'recharge', null, 'aliPay', '2', '1442823709', null, '0');
INSERT INTO `js_pay` VALUES ('31', '32', '20150921160949207', 'recharge', null, 'aliPay', '21', '1442823829', null, '0');
INSERT INTO `js_pay` VALUES ('32', '32', '20150921160923491', 'recharge', null, 'aliPay', '0.01', '1442825003', null, '0');
INSERT INTO `js_pay` VALUES ('33', '32', '20150921160907111', 'recharge', null, 'aliPay', '20', '1442825467', null, '0');
INSERT INTO `js_pay` VALUES ('34', '32', '20150921160920360', 'recharge', null, 'aliPay', '0.01', '1442825480', null, '0');
INSERT INTO `js_pay` VALUES ('35', '32', '20150921160905538', 'recharge', null, 'aliPay', '0.01', '1442825945', null, '0');
INSERT INTO `js_pay` VALUES ('36', '32', '20150921170904750', 'recharge', '2015092121001004650069920139', 'aliPay', '0.01', '1442826124', '1442826948', '1');
INSERT INTO `js_pay` VALUES ('37', '32', '20150921170928231', 'recharge', '2015092121001004650070596666', 'aliPay', '0.01', '1442828068', '1442828577', '1');
INSERT INTO `js_pay` VALUES ('38', '32', '20150922090928351', 'recharge', null, 'aliPay', '0.01', '1442884468', null, '0');
INSERT INTO `js_pay` VALUES ('39', '32', '20150922090950662', 'recharge', null, null, '1', '1442884790', null, '0');
INSERT INTO `js_pay` VALUES ('40', '32', '20150922090926406', 'recharge', null, null, '2', '1442885846', null, '0');

-- ----------------------------
-- Table structure for js_picture
-- ----------------------------
DROP TABLE IF EXISTS `js_picture`;
CREATE TABLE `js_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id自增',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '路径',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '图片链接',
  `md5` char(32) NOT NULL DEFAULT '' COMMENT '文件md5',
  `sha1` char(40) NOT NULL DEFAULT '' COMMENT '文件 sha1编码',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_picture
-- ----------------------------
INSERT INTO `js_picture` VALUES ('93', '/Uploads/Picture/2015-09-16/55f8d10b0f086.jpg', '', 'bdf3bf1da3405725be763540d6601144', 'd997e1c37edc05ad87d03603e32ad495ee2cfce1', '1', '1442369803');
INSERT INTO `js_picture` VALUES ('94', '/Uploads/Picture/2015-09-16/55f8d16f187c7.jpg', '', 'ba45c8f60456a672e003a875e469d0eb', '30420d1a9afb2bcb60335812569af4435a59ce17', '1', '1442369903');
INSERT INTO `js_picture` VALUES ('95', '/Uploads/Picture/2015-09-16/55f8d1772700c.jpg', '', '5a44c7ba5bbe4ec867233d67e4806848', '3b15be84aff20b322a93c0b9aaa62e25ad33b4b4', '1', '1442369911');
INSERT INTO `js_picture` VALUES ('96', '/Uploads/Picture/2015-09-16/55f8d177398f1.jpg', '', '2b04df3ecc1d94afddff082d139c6f15', '9c3dcb1f9185a314ea25d51aed3b5881b32f420c', '1', '1442369911');
INSERT INTO `js_picture` VALUES ('97', '/Uploads/Picture/2015-09-16/55f90a9e73aae.jpg', '', '076e3caed758a1c18c91a0e9cae3368f', 'f5f8ad26819a471318d24631fa5055036712a87e', '1', '1442384542');
INSERT INTO `js_picture` VALUES ('98', '/Uploads/Picture/2015-09-16/55f90e38b547c.jpg', '', 'fafa5efeaf3cbe3b23b2748d13e629a1', '54c2f1a1eb6f12d681a5c7078421a5500cee02ad', '1', '1442385464');
INSERT INTO `js_picture` VALUES ('99', '/Uploads/Picture/2015-09-17/55fa776fc05d9.jpg', '', '9d377b10ce778c4938b3c7e2c63a229a', 'df7be9dc4f467187783aca68c7ce98e4df2172d0', '1', '1442477935');

-- ----------------------------
-- Table structure for js_ucenter_admin
-- ----------------------------
DROP TABLE IF EXISTS `js_ucenter_admin`;
CREATE TABLE `js_ucenter_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `member_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员用户ID',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '管理员状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of js_ucenter_admin
-- ----------------------------
INSERT INTO `js_ucenter_admin` VALUES ('1', '1', '1');

-- ----------------------------
-- Table structure for js_ucenter_app
-- ----------------------------
DROP TABLE IF EXISTS `js_ucenter_app`;
CREATE TABLE `js_ucenter_app` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '应用ID',
  `title` varchar(30) NOT NULL COMMENT '应用名称',
  `url` varchar(100) NOT NULL COMMENT '应用URL',
  `ip` char(15) NOT NULL COMMENT '应用IP',
  `auth_key` varchar(100) NOT NULL COMMENT '加密KEY',
  `sys_login` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '同步登陆',
  `allow_ip` varchar(255) NOT NULL COMMENT '允许访问的IP',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '应用状态',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='应用表';

-- ----------------------------
-- Records of js_ucenter_app
-- ----------------------------

-- ----------------------------
-- Table structure for js_ucenter_member
-- ----------------------------
DROP TABLE IF EXISTS `js_ucenter_member`;
CREATE TABLE `js_ucenter_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` char(32) NOT NULL COMMENT '用户邮箱',
  `mobile` char(15) NOT NULL COMMENT '用户手机',
  `reg_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '注册IP',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` tinyint(4) DEFAULT '0' COMMENT '用户状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of js_ucenter_member
-- ----------------------------
INSERT INTO `js_ucenter_member` VALUES ('1', 'admin', 'f66c7ce124d5b1292e0f2abcd2d3a8e6', 'admin@admin.com', '', '1441675799', '2130706433', '1442974417', '2130706433', '1441675799', '1');
INSERT INTO `js_ucenter_member` VALUES ('32', 'test01', 'f66c7ce124d5b1292e0f2abcd2d3a8e6', '753230175@qq.com', '13488830175', '1442799955', '2130706433', '1442974259', '2130706433', '1442799955', '1');

-- ----------------------------
-- Table structure for js_ucenter_setting
-- ----------------------------
DROP TABLE IF EXISTS `js_ucenter_setting`;
CREATE TABLE `js_ucenter_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '设置ID',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '配置类型（1-用户配置）',
  `value` text NOT NULL COMMENT '配置数据',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设置表';

-- ----------------------------
-- Records of js_ucenter_setting
-- ----------------------------

-- ----------------------------
-- Table structure for js_wallet
-- ----------------------------
DROP TABLE IF EXISTS `js_wallet`;
CREATE TABLE `js_wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of js_wallet
-- ----------------------------
INSERT INTO `js_wallet` VALUES ('2', '32', 'MDAwMDAwMDAwMLF3ZduGpKF2');
