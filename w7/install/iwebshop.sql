--
-- 表的结构 `{pre}admin`  //用户表
--

DROP TABLE IF EXISTS `{pre}admin`;
CREATE TABLE `{pre}admin` (
`u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) DEFAULT NULL,
  `u_pwd` varchar(32) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 表结构 '{pre}num'       //微信表
--
DROP TABLE IF EXISTS `{pre}num`;
CREATE TABLE `{pre}num` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(200) DEFAULT NULL,
  `w_appid` varchar(100) DEFAULT NULL,
  `w_serveid` varchar(100) DEFAULT NULL,
  `w_token` varchar(32) DEFAULT NULL,
  `w_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- ----------------------------


--
-- 表结构 '{pre}sessiom'       //session入库
--

DROP TABLE IF EXISTS `{pre}session`;
CREATE TABLE `{pre}session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- ----------------------------