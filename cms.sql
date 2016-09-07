# Host: localhost  (Version 5.5.41)
# Date: 2016-09-07 16:23:26
# Generator: MySQL-Front 5.3  (Build 5.21)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin_table"
#

CREATE TABLE `admin_table` (
  `ADMINID` int(11) NOT NULL AUTO_INCREMENT,
  `ADMINNAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  PRIMARY KEY (`ADMINID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "admin_table"
#

INSERT INTO `admin_table` VALUES (1,'root','d033e22ae348aeb5660fc2140aec35850c4da997'),(2,'admin','ba324ca7b1c77fc20bb970d5aff6eea9377918a5');

#
# Structure for table "comment_del_table"
#

CREATE TABLE `comment_del_table` (
  `COMMENTDELID` int(11) NOT NULL AUTO_INCREMENT,
  `ADMINID` int(11) NOT NULL,
  `COMMENTID` int(11) NOT NULL,
  `DELETEDTIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DELETEREASON` text,
  PRIMARY KEY (`COMMENTDELID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "comment_del_table"
#


#
# Structure for table "comment_table"
#

CREATE TABLE `comment_table` (
  `COMMENTID` int(11) NOT NULL AUTO_INCREMENT,
  `VIDEOID` int(11) DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL,
  `COMMENTTEXT` text NOT NULL,
  `COMMENTTIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `COMMENTSTATUS` int(11) DEFAULT '1',
  `PARENTID` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`COMMENTID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

#
# Data for table "comment_table"
#

INSERT INTO `comment_table` VALUES (1,1,1,'测试吧','2016-09-05 11:05:25',1,0),(2,1,1,'测试2','2016-09-05 12:30:38',1,0),(3,1,1,'测试3','2016-09-05 12:40:32',1,0),(4,1,1,'测试4','2016-09-05 12:42:54',1,0),(5,18,9,'very good','2016-09-05 13:07:29',1,0),(6,18,9,'很棒','2016-09-05 13:07:45',1,0),(7,5,1,'test1','2016-09-05 14:48:13',1,0),(8,18,11,'sb','2016-09-05 16:41:14',2,0),(9,18,11,'傻逼\n','2016-09-05 16:41:12',0,0),(10,1,11,'？？？？\n','2016-09-05 15:49:41',1,0),(11,1,11,'傻逼','2016-09-05 16:50:55',2,0),(12,1,11,'共产党','2016-09-05 16:47:01',0,0),(13,1,11,'谁他妈上传的傻逼视频','2016-09-05 15:50:11',1,0),(14,1,7,'傻逼！','2016-09-05 16:43:24',0,0),(15,1,11,'习近平\n','2016-09-05 16:50:54',2,0),(16,1,11,'共产党','2016-09-05 16:47:18',0,0),(17,1,7,'狗屎视频！！！','2016-09-05 15:51:54',1,0),(18,1,11,'狗屎','2016-09-05 15:52:06',1,0),(19,1,7,'挺好挺好！！！','2016-09-05 15:52:13',1,0),(20,1,11,'还可以','2016-09-05 15:52:14',1,0),(21,1,7,'墙裂推荐啊！贼好看','2016-09-05 15:52:29',1,0),(22,25,7,'我詹威武！！！！','2016-09-05 15:54:21',1,0),(23,1,11,'楼上傻逼','2016-09-06 19:17:01',0,0),(24,38,9,'yes','2016-09-06 09:16:11',1,0),(25,38,9,'no','2016-09-06 09:16:19',1,0),(26,34,11,'1','2016-09-06 09:41:40',1,0),(27,14,11,'1234','2016-09-06 09:48:56',1,0),(28,14,11,'12343','2016-09-06 09:49:02',1,0),(29,13,11,'zzzz','2016-09-06 09:54:06',1,0),(30,10,1,'测试10','2016-09-06 10:35:28',1,0),(31,10,1,'测试10','2016-09-06 10:35:29',1,0),(32,10,1,'测试10','2016-09-06 10:36:37',1,0),(33,10,1,'测试10','2016-09-06 10:36:38',1,0),(34,10,1,'测试10','2016-09-06 10:36:38',1,0),(35,10,1,'测试10','2016-09-06 10:36:38',1,0),(36,10,1,'测试10','2016-09-06 10:37:13',1,0),(37,5,1,'ceshi ','2016-09-06 14:41:59',1,0),(38,5,6,'禁言测试\n','2016-09-06 15:53:23',1,0),(39,34,6,'测试评论\n','2016-09-06 16:15:05',1,0),(40,21,11,'1','2016-09-06 16:31:22',1,0),(41,24,9,'有趣','2016-09-07 09:38:22',1,0),(42,14,9,'周杰伦','2016-09-07 09:41:58',1,0),(43,18,13,'nice','2016-09-07 09:57:14',1,0),(44,14,11,'111','2016-09-07 15:45:50',1,0),(45,1,11,'test\nas c asd asd \nasd as\nas d\n\n','2016-09-07 15:49:43',1,0),(46,1,7,'去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去去1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111','2016-09-07 16:20:04',0,0),(47,18,9,'SB','2016-09-07 15:57:24',0,0),(48,18,9,'hehe','2016-09-07 15:57:14',1,0),(49,21,1,'fsdfasdfs','2016-09-07 16:05:00',1,0),(50,21,1,'sb','2016-09-07 16:06:00',0,0);

#
# Structure for table "playlist_table"
#

CREATE TABLE `playlist_table` (
  `PLAYLISTID` int(11) NOT NULL AUTO_INCREMENT,
  `USERID` int(11) NOT NULL,
  `VIDEOID` int(11) NOT NULL,
  `PLAYTIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`PLAYLISTID`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

#
# Data for table "playlist_table"
#

INSERT INTO `playlist_table` VALUES (1,1,10,'2016-09-06 14:58:24'),(2,1,5,'2016-09-06 14:59:05'),(3,7,39,'2016-09-06 15:28:39'),(4,7,9,'2016-09-06 15:28:56'),(5,1,5,'2016-09-06 15:43:36'),(6,1,5,'2016-09-06 15:44:46'),(7,1,5,'2016-09-06 15:45:25'),(8,1,5,'2016-09-06 15:45:44'),(9,1,18,'2016-09-06 15:46:15'),(10,6,34,'2016-09-06 15:51:59'),(11,6,5,'2016-09-06 15:52:02'),(12,6,18,'2016-09-06 15:52:13'),(13,6,5,'2016-09-06 15:52:28'),(14,6,5,'2016-09-06 15:53:09'),(15,6,5,'2016-09-06 15:53:25'),(16,6,34,'2016-09-06 16:14:57'),(17,6,34,'2016-09-06 16:16:07'),(18,6,34,'2016-09-06 16:16:34'),(19,11,21,'2016-09-06 16:31:15'),(20,11,21,'2016-09-06 16:31:23'),(21,11,24,'2016-09-06 16:31:30'),(22,11,13,'2016-09-06 16:32:34'),(23,11,25,'2016-09-06 16:32:43'),(24,11,18,'2016-09-06 16:32:53'),(25,11,18,'2016-09-06 16:33:02'),(26,6,37,'2016-09-06 16:33:12'),(27,11,5,'2016-09-06 16:33:31'),(28,1,39,'2016-09-06 18:08:16'),(29,1,36,'2016-09-06 18:21:09'),(30,1,24,'2016-09-06 18:50:22'),(31,1,25,'2016-09-06 19:46:04'),(32,9,22,'2016-09-07 09:32:14'),(33,9,23,'2016-09-07 09:37:59'),(34,9,24,'2016-09-07 09:38:04'),(35,9,24,'2016-09-07 09:38:24'),(36,11,44,'2016-09-07 09:40:30'),(37,9,27,'2016-09-07 09:41:04'),(38,9,14,'2016-09-07 09:41:47'),(39,9,14,'2016-09-07 09:41:59'),(40,9,14,'2016-09-07 09:42:30'),(41,1,40,'2016-09-07 09:45:03'),(42,1,44,'2016-09-07 09:45:42'),(43,1,44,'2016-09-07 09:45:43'),(44,1,44,'2016-09-07 09:45:43'),(45,1,44,'2016-09-07 09:45:43'),(46,1,18,'2016-09-07 09:47:04'),(47,1,18,'2016-09-07 09:47:14'),(48,9,18,'2016-09-07 09:47:25'),(49,13,14,'2016-09-07 09:55:18'),(50,13,14,'2016-09-07 09:55:25'),(51,13,14,'2016-09-07 09:55:29'),(52,13,18,'2016-09-07 09:56:54'),(53,13,18,'2016-09-07 09:57:16'),(54,1,42,'2016-09-07 09:57:44'),(55,1,42,'2016-09-07 09:57:47'),(56,1,42,'2016-09-07 09:57:56'),(57,1,42,'2016-09-07 10:06:23'),(58,1,42,'2016-09-07 10:11:09'),(59,1,37,'2016-09-07 10:11:56'),(60,1,37,'2016-09-07 10:13:28'),(61,9,11,'2016-09-07 10:20:24'),(62,9,9,'2016-09-07 10:20:29'),(63,9,1,'2016-09-07 10:21:44'),(64,1,1,'2016-09-07 11:14:09'),(65,1,1,'2016-09-07 14:31:49'),(66,7,39,'2016-09-07 14:53:04'),(67,7,14,'2016-09-07 14:53:17'),(68,9,1,'2016-09-07 15:13:27'),(69,7,21,'2016-09-07 15:26:30'),(70,1,1,'2016-09-07 15:29:11'),(71,11,14,'2016-09-07 15:45:40'),(72,11,14,'2016-09-07 15:45:46'),(73,11,14,'2016-09-07 15:45:51'),(74,11,6,'2016-09-07 15:46:08'),(75,11,24,'2016-09-07 15:47:57'),(76,9,1,'2016-09-07 15:48:09'),(77,11,1,'2016-09-07 15:49:03'),(78,11,1,'2016-09-07 15:49:45'),(79,7,1,'2016-09-07 15:49:46'),(80,7,1,'2016-09-07 15:50:33'),(81,11,1,'2016-09-07 15:50:44'),(82,9,18,'2016-09-07 15:56:04'),(83,9,18,'2016-09-07 15:56:12'),(84,9,18,'2016-09-07 15:57:00'),(85,9,18,'2016-09-07 15:57:15'),(86,9,18,'2016-09-07 15:57:31'),(87,11,37,'2016-09-07 15:57:33'),(88,9,18,'2016-09-07 16:01:13'),(89,11,37,'2016-09-07 16:01:25'),(90,11,37,'2016-09-07 16:01:27'),(91,1,21,'2016-09-07 16:04:37'),(92,1,21,'2016-09-07 16:05:02'),(93,1,21,'2016-09-07 16:05:26'),(94,1,21,'2016-09-07 16:05:41'),(95,1,21,'2016-09-07 16:06:07'),(96,1,10,'2016-09-07 16:09:15'),(97,1,10,'2016-09-07 16:09:50'),(98,1,12,'2016-09-07 16:16:26');

#
# Structure for table "silenced_table"
#

CREATE TABLE `silenced_table` (
  `SILENCEDID` int(11) NOT NULL AUTO_INCREMENT,
  `ADMINID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `SILENCEDTIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SILENCEDSTATUS` int(11) DEFAULT '1',
  `SILENCEDREASON` text,
  `RELEASETIME` datetime DEFAULT NULL,
  PRIMARY KEY (`SILENCEDID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "silenced_table"
#

INSERT INTO `silenced_table` VALUES (10,2,3,'2016-09-07 09:53:30',1,NULL,'2016-09-08 03:53:30'),(11,2,7,'2016-09-07 09:53:44',0,NULL,'2016-09-08 03:53:36');

#
# Structure for table "user_table"
#

CREATE TABLE `user_table` (
  `USERID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(64) NOT NULL,
  `USERDUTY` int(11) NOT NULL DEFAULT '1',
  `PASSWORD` varchar(64) NOT NULL,
  `USERSTATUS` int(11) NOT NULL DEFAULT '1',
  `SEX` char(64) DEFAULT NULL,
  `BIRTHDAY` date DEFAULT NULL,
  `MOBILEPHONE` varchar(64) DEFAULT NULL,
  `MAILADDERSS` varchar(64) DEFAULT NULL,
  `USERTEXT` text,
  `IMAGELINK` varchar(255) NOT NULL DEFAULT 'img/ava_10.jpg',
  PRIMARY KEY (`USERID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

#
# Data for table "user_table"
#

INSERT INTO `user_table` VALUES (1,'user1',1,'b3daa77b4c04a9551b8781d03191fe098f325e67',1,'male','2016-09-21',NULL,NULL,'','../upload/img_user/bab653432fec9d7fab6f1a01bebea6962905a420.jpg'),(2,'user2',1,'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(3,'user3',1,'0b7f849446d3383546d15a480966084442cd2193',0,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(4,'user4',1,'06e6eef6adf2e5f54ea6c43c376d6d36605f810e',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(6,'user0',1,'9c031d62a3c4909b216e1d86b7f69b982bdca0f9',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(7,'jiabao',1,'7c4a8d09ca3762af61e59520943dc26494f8941b',1,'male','1995-08-10',NULL,NULL,'中南第一帅','../upload/img_user/8e39a399255fa79b35bf776ec8fc7cf5a39213a9.jpg'),(8,'zezezezeze',1,'dec20f038e93aed915bb9a4fc0351bd5d1a89b39',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(9,'zeze',1,'a3a54606825e7474b9efcbc278b294b9354a563f',1,'female','2004-02-01',NULL,NULL,'say','../upload/img_user/d8dc4b479153f432d20575dade8fcb0020b88ebd.jpg'),(10,'li',1,'554dbf0b41b3cd068ee1fcfd6235466a263647b4',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(11,'user9',1,'554dbf0b41b3cd068ee1fcfd6235466a263647b4',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(12,'user8',1,'554dbf0b41b3cd068ee1fcfd6235466a263647b4',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg'),(13,'liaoyuqiao',1,'7c4a8d09ca3762af61e59520943dc26494f8941b',1,'male','1994-09-07',NULL,NULL,'','../upload/img_user/3200c26d4292eb4e0b8e8c67e63e516d2c85cecf.jpg'),(14,'lyq',1,'356a192b7913b04c54574d18c28d46e6395428ab',1,NULL,NULL,NULL,NULL,NULL,'img/ava_10.jpg');

#
# Structure for table "video_table"
#

CREATE TABLE `video_table` (
  `VIDEOID` int(11) NOT NULL AUTO_INCREMENT,
  `VIDEOLINK` varchar(256) NOT NULL,
  `VIDEONAME` varchar(64) NOT NULL,
  `IMAGELINK` varchar(256) NOT NULL,
  `VIDEOTEXT` text,
  `VIDEOLABEL` text,
  `UPLOADTIME` datetime DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL,
  `VIDEOTYPE` varchar(64) NOT NULL DEFAULT '0',
  `VIDEOSTATUS` int(11) DEFAULT '0',
  `ORIGINAL` int(11) DEFAULT '1',
  `PLAYTIMES` int(11) DEFAULT '0',
  PRIMARY KEY (`VIDEOID`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

#
# Data for table "video_table"
#

INSERT INTO `video_table` VALUES (1,'../upload/video/970666_b.flv','b123','../upload/img/110464_BbsImg146672856322451_1080x1080.jpg','这个东西很不错','无',NULL,1,'1',1,1,11),(5,'../upload/video/856958_b.flv','fdwe','../upload/img/484988_BbsImg146673278337413_1080x1080.jpg','wefw','fwef','2016-09-01 20:13:08',1,'6',0,0,11),(6,'../upload/video/729516_总决赛十大镜头 欧文单挑水花詹姆斯飞身空接 标清(270P).mp4','体育','','123','123','2016-09-02 05:09:01',6,'3',-2,1,1),(7,'../upload/video/166000_有样儿：发现 非洲群岛的明珠塞舍尔 标清(270P).mp4','非洲群岛','../upload/img/728417_体育1.png','灰常好看','非洲','2016-09-02 05:21:54',6,'6',-1,1,0),(9,'../upload/video/77019e0567bf9825ffa4fe9663c1ab56e9dd6a5fmp4','田馥甄-小幸运','../upload/img/9b3fc7cc065decf947824adfa9e37cf05d1117bdpng','贼好听','小幸运','2016-09-03 03:18:16',7,'7',0,1,2),(10,'../upload/video/1bec18970dfad6256b368d03bc48b30fdf36ad51.mp4','BIGBANG - SOBER','../upload/img/334d4ce855752ba1db4d468a55b0e0b1c0cc68b1.jpg','BIGBANG - SOBER新曲MV','BIGBANG,MV,音乐','2016-09-05 03:42:27',9,'7',1,0,2),(11,'../upload/video/1f64346501cb207150f46a95442bc60b9f03404c.mp4','Carly Rae Jepsen - Call Me Maybe','../upload/img/8243bda10b11713d3d7f59890c7c584ddec8db02.jpg','超人气加拿大创作才女Carly Rae Jepsen成名单曲《Call Me Maybe》，Youtube点击次数过两亿，Billboard公告牌冠军单曲。','Carly Rae Jepsen - Call Me Maybe，MV，音乐','2016-09-05 03:49:41',9,'7',1,0,1),(12,'../upload/video/9900f3fd211d8de5cb3b5e06c7cf5e87c21fc862.mp4','Janji - Fade','../upload/img/2711458c9d43db12349f345d734efc7e7c87c6d5.jpg','Fade的一个改编版','Janji - Fade，MV，电音','2016-09-05 03:55:37',9,'7',1,1,1),(13,'../upload/video/f6f806fe292a06cb1fc1145b84ac7138db552dcc.mp4','Mark Ronson - Uptown Funk','../upload/img/0d02c9ea4e3c7af429c89d90d356d0fd01d25285.jpg','美国DJ Mark Ronson联手火星哥Bruno Mars全球冠军大热单曲《Uptown Funk》单曲版及混音版EP。 6月29日更新全新混音版《Uptown Funk(Trinidad James Remix)》','Mark Ronson - Uptown Funk，MV，音乐','2016-09-05 04:00:01',9,'7',1,0,1),(14,'../upload/video/cfe373a51011310aa8b7cdb1b7e5d79d9d6dca65.mp4','周杰伦 - 前世情人','../upload/img/88cc0e8ca65f6f8c275703d78a58e89e655c847a.jpg','《前世情人》是由黄俊郎作词，周杰伦与Hathaway作曲，周杰伦演唱的歌曲，该曲先由2016年5月30日MV首播，后收录在6月24日发行的专辑《周杰伦的床边故事》中','周杰伦 - 前世情人，MV，音乐','2016-09-05 04:06:36',9,'7',1,0,10),(15,'../upload/video/fbbb5941777dccec3d216f9e690f53a655e0af6f.mp4','苍穹之下的勇敢者游戏','../upload/img/18a48699a3a9699d24e64f664c5e11532d65c1c6.jpg','','','2016-09-05 04:23:20',13,'6',1,0,0),(16,'','','','','','2016-09-05 04:32:53',13,'1',-2,1,0),(17,'','','','','','2016-09-05 04:32:55',13,'1',-2,1,0),(18,'../upload/video/4a9ab4943a8293192ced627c9241cd81656c31d7.mp4','B20代表全球工商界提出20项建议 标清(270P)','../upload/img/68918d040d3c0ead13a413daba1985a5c7194fbb.png','B20代表全球工商界提出20项建议 标清(270P)','新闻','2016-09-05 04:32:57',9,'2',1,1,15),(19,'','','../upload/img/9f59dc5137ccadef1fa9b5858b7eb37a5a551d1f.jpg','','','2016-09-05 04:33:12',13,'1',-2,1,0),(20,'','','','','','2016-09-05 04:33:24',13,'1',-2,1,0),(21,'../upload/video/d17d6411fe39b8a7f9b5e45c4351bf9d27fb67a0.mp4','冰桶挑战立大功！1亿美元帮助找出渐冻症基因','../upload/img/06dbc3c66b140453e5dbfed5b4bde0cc6b1f17d5.png','冰桶挑战立大功！1亿美元帮助找出渐冻症基因','新闻，实事','2016-09-05 04:37:15',9,'2',1,0,8),(22,'../upload/video/9359554762bd33c450debd252a827b94a2cdd4f8.mp4','高招老师篡改学生高考志愿被刑拘','../upload/img/1e7df320ed140f95b0a85cbc34e8067c4f58b2a0.png','高招老师篡改学生高考志愿被刑拘','新闻，实事','2016-09-05 04:38:47',9,'2',1,0,1),(23,'../upload/video/6472eba2d6553c06d3f2faf26ce760f0d3f27d41.mp4','开眼！大堤上的“抗洪神器”中国制造','../upload/img/10075b9c4313b7b5ffce6a8bd1cafdf2afe543e5.png','开眼！大堤上的“抗洪神器”中国制造','新闻，实事','2016-09-05 04:41:51',9,'2',1,0,1),(24,'../upload/video/9d3f60f5ce2196c7450f11432db68e72c8d02851.mp4','实拍选美颁奖典礼尴尬一幕 亚军戴上后冠又被摘掉','../upload/img/d379222daebd0847f756122028ddb572a78c1f06.png','实拍选美颁奖典礼尴尬一幕 亚军戴上后冠又被摘掉','新闻','2016-09-05 04:43:34',9,'2',1,0,5),(25,'../upload/video/6bdc0651909191a5455fd49b08296a2954f3f88b.mp4','总决赛十大镜头 欧文单挑水花詹姆斯飞身空接','../upload/img/cae98316b049764331110ca23dce2dbe5146ab93.png','总决赛十大镜头 欧文单挑水花詹姆斯飞身空接','体育，篮球','2016-09-05 04:47:32',9,'3',1,0,2),(26,'../upload/video/dc1df534f76772432bee08dc11eb74eb2f523a8b.mp4','总决赛十大扣篮 詹姆斯平筐空接利文斯顿单臂隔扣 ','../upload/img/d6333b7368ccace9caa3db910e8a1bab8f2c942c.png','总决赛十大扣篮 詹姆斯平筐空接利文斯顿单臂隔扣 ','体育，篮球','2016-09-05 04:48:54',9,'3',1,0,0),(27,'../upload/video/70869435a2c6bb32885b55ad82c62e474159d169.mp4','总决赛十大助攻 詹姆斯人缝送击地利文斯顿鬼手背传 ','../upload/img/b0b61d1f217301af7eaf44f817ebea26d51fde13.png','总决赛十大助攻 詹姆斯人缝送击地利文斯顿鬼手背传 ','体育，篮球','2016-09-05 04:51:48',9,'3',1,0,1),(28,'','','','','','2016-09-05 05:25:31',7,'1',-2,1,0),(29,'','','','','','2016-09-05 05:25:47',7,'1',-2,1,0),(30,'','','','','','2016-09-05 05:25:50',7,'1',-2,1,0),(31,'','123','','123','13','2016-09-05 05:26:04',7,'1',-2,1,0),(32,'../upload/video/c207de9070283b314cd9b2208a07f48b3dcc5e0a.flv','美国队长','','','','2016-09-05 05:29:04',7,'1',-2,0,0),(33,'../upload/video/bb366e9366c087272f9016f1f9fcefb34d14e564.flv','','','','','2016-09-05 05:29:52',7,'1',-2,1,0),(34,'../upload/video/c16804e0b6365c9dd2558eb1ef2d07360fb48820.flv','冰河时代','../upload/img/6f049126a382de4c479f63fb9bb197d9c3170453.png','经典回顾 冰河时代',' 冰河时代','2016-09-05 06:37:29',6,'1',-1,1,4),(35,'../upload/video/ff0c73fb394d3cf727e54e82893cd732119e3198.flv','阿一是大腿','../upload/img/4698435b4c987c8b4a3177e6c25fc52575b4437f.png','妹子和玩具~','阿一','2016-09-05 06:38:51',11,'4',-1,0,0),(36,'../upload/video/e55af8defb72a604cb2a7fd90c2932c78adfb2d6.flv','美国队长','../upload/img/e53018100a5b809728b92119d4c1785be4dd4cdc.png','美国队长','美国队长','2016-09-05 06:40:23',6,'1',-1,1,1),(37,'../upload/video/af6551e3e4be827269f552f35363a1cba746f4bd.flv','搔首弄姿','../upload/img/27885f34ca77068573025d8f354ed6ee3205fc95.png','没谁了','复古','2016-09-05 06:41:40',11,'4',1,0,6),(38,'../upload/video/d916b16f7233eceefdb0cf200719e6d06d84c459.flv','谍影重重','../upload/img/953140e08d07525f262f18c66b424f5f6412ab2d.png','谍影重重','谍影重重','2016-09-05 06:42:16',6,'1',-1,1,0),(39,'../upload/video/c7663f4d2f435d859cce118c88dc43d80fb956ad.flv','黄子韬青岛话','../upload/img/f4138795a501901ec8196b8e2b1fc755fd5245f3.png','摇手了！黄子韬讲青岛话辣！','黄子韬','2016-09-05 06:43:35',11,'4',1,0,3),(40,'../upload/video/f0c51d974fb67f41a61e34ad99a41237a7ec95d0.flv','【10月】宠物小精灵XY&Z 41预告','../upload/img/682e751c7b3ba8501345b7d179f613dfcfd5640b.png','【10月】宠物小精灵XY&Z 41预告','动漫','2016-09-05 06:45:41',9,'5',1,0,1),(41,'../upload/video/2c855eb7d953cdfc9e32bd3bd24e10bf482e4ed2.flv','张艺兴粉丝纪录片','../upload/img/a92fc445435a9c595888e6d7af34b4bdb6395ceb.png','张艺兴粉丝做的纪录片','粉丝纪录片','2016-09-05 06:46:38',11,'4',1,0,0),(42,'../upload/video/92f01c0d161a4b086af2a9fd2bd317cf88f38114.flv','test','../upload/img/bb4484fdab5c54c9b59c34ff34d4e46f2da09256.png','test','','2016-09-05 06:49:19',11,'4',1,0,5),(43,'../upload/video/e5027c7aa91930ebb413118b90aab8a27a2e4d24.flv','1','../upload/img/cf2c6d388c47315a18dc5d1a381109e1e5dbffb0.png','1','1','2016-09-05 06:50:46',11,'4',-2,0,0),(44,'../upload/video/f0a1970670707aaedbcf0c7b8a7a665afb2c36dc.flv','测试','../upload/img/da6536aea861ca2e30d7117733238f0f825060f3.jpg','测试','测试','2016-09-05 06:50:56',9,'5',1,1,5),(45,'','','','','','2016-09-05 06:51:39',11,'1',-2,1,0),(46,'','','','','','2016-09-05 06:51:48',11,'1',-2,1,0),(47,'','','','','','2016-09-05 06:51:52',11,'1',-2,1,0),(48,'','','','','','2016-09-05 06:51:54',11,'1',-2,1,0),(49,'../upload/video/d7ad84b21b98e185aed688b2b8b520ab5de27236.flv','测试2','../upload/img/3375c9fe8eb829499dcf012c28d0fbf9ad66c07b.jpg','','','2016-09-05 06:52:00',9,'5',1,1,0),(50,'../upload/video/dbf6a5f3764c63e5446087fbcc4a0bcf1ae4308c.flv','测试3','../upload/img/44bd3730bbbbb04a32827d865c6310dfa0ae4a5a.jpg','','','2016-09-05 06:52:29',9,'5',1,1,0),(51,'','','','','','2016-09-05 06:53:46',11,'1',-2,1,0),(52,'','','','','','2016-09-05 06:53:48',11,'1',-2,1,0),(53,'','','','','','2016-09-05 06:53:54',11,'1',-2,1,0),(54,'','','','','','2016-09-05 06:53:56',11,'1',-2,1,0),(55,'','','','','','2016-09-05 06:54:04',11,'1',-2,1,0),(56,'../upload/video/0ae5e9d405f84359a929d95ab2d4940be21b8845.flv','测试4','../upload/img/29a587f34dd81e408f0bfba906570de083f01ff4.jpg','','','2016-09-05 06:54:52',9,'5',1,1,0),(57,'','测试5','../upload/img/8bf468b9656ddac71c167f6749be72a29dd003ea.jpg','','','2016-09-05 06:55:21',9,'5',-2,1,0),(58,'../upload/video/c64cf98bd508b23c982a073c42e38e500968db16.flv','测试6','../upload/img/77f1bdf39116874bf17a2b15f2435647d024659a.jpg','','','2016-09-05 06:56:15',9,'5',1,1,0),(59,'../upload/video/4ecc3ed1bdfa04a34a0f4be6e12e192ad5e3779c.flv','测试100','../upload/img/65b4b0440f95b9285ea6e1e047e62168528a9226.jpg','测试100','测试100','2016-09-05 08:50:36',1,'1',-2,1,0),(60,'','','','','','2016-09-05 19:48:31',1,'1',-2,1,0),(61,'../upload/video/2dd5cc9b169c191eae734edc27bf65182aea3f0b.mp4','测试','../upload/img/5cca1e3e370633d76e2479ffbf7714a22e9f80cf.jpg','测试','测试','2016-09-06 09:33:30',1,'1',-2,1,0),(62,'../upload/video/85e7963f9995a3f0158a1a4e308cece3babfda70.mp4','测试','../upload/img/e34ee51e7cf1b7d02d57995af182fedb83fd763d.jpg','测试','测试','2016-09-06 09:34:08',1,'1',-1,1,0),(63,'','','','','','2016-09-07 09:47:28',9,'1',0,1,0);
