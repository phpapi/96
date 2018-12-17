<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_kaifu`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_kaifu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ttid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `plnum` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `totaldown` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `newspath` char(20) NOT NULL DEFAULT '',
  `filename` char(36) NOT NULL DEFAULT '',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `firsttitle` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ispic` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `isqf` tinyint(1) NOT NULL DEFAULT '0',
  `ismember` tinyint(1) NOT NULL DEFAULT '0',
  `isurl` tinyint(1) NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `userfen` smallint(5) unsigned NOT NULL DEFAULT '0',
  `titlefont` char(14) NOT NULL DEFAULT '',
  `titleurl` char(200) NOT NULL DEFAULT '',
  `stb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `fstb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keyboard` char(80) NOT NULL DEFAULT '',
  `title` char(100) NOT NULL DEFAULT '',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `titlepic` char(120) NOT NULL DEFAULT '',
  `yxid` int(11) NOT NULL DEFAULT '0',
  `fuwuqi` text NOT NULL,
  `kfsj` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `eckuid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `newstime` (`newstime`),
  KEY `ttid` (`ttid`),
  KEY `firsttitle` (`firsttitle`),
  KEY `isgood` (`isgood`),
  KEY `ispic` (`ispic`),
  KEY `useridis` (`userid`,`ismember`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('1','9','0','0','0','0','',0x31,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509075016','1509080250','1','0','0','',0x2f6b616966752f312e68746d6c,'1','1','1','',0xe4bca0e5a587e4b896e7958ce6ada3e789884835,'1540610946','','828',0x3430e69c8d,'2018-11-27 11:00:06','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('2','9','0','0','0','0','',0x32,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509076059','1509080261','1','0','0','',0x2f6b616966752f322e68746d6c,'1','1','1','',0xe5aea0e789a9e7b2bee781b5,'1540612026','','871',0xe8b685e7baa7e79083,'2018-10-27 20:00:06','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('3','9','0','0','0','0','',0x33,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509076089','1509082820','1','0','0','',0x2f6b616966752f332e68746d6c,'1','1','1','',0xe6a2a6e98193,'1509076061','','837',0x533931,'2018-12-27 00:10:41','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('4','9','0','0','0','0','',0x34,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509076125','1509082865','1','0','0','',0x2f6b616966752f342e68746d6c,'1','1','1','',0xe58fa3e8a28be5a696e680aae88194e79b9f,'1509076091','','916',0x353537e58cba,'2018-12-30 08:00:11','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('5','9','0','0','0','0','',0x35,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078339','1509082861','1','0','0','',0x2f6b616966752f352e68746d6c,'1','1','1','',0xe5bc80e5bf83e59bbde78e8b,'1509078317','','822',0x313437e58cba,'2018-11-10 12:00:17','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('6','9','0','0','0','0','',0x36,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078380','1509078380','1','0','0','',0x2f6b616966752f362e68746d6c,'1','1','1','',0xe586b3e68898e6b299e59f8e,'1509078355','','918',0x31333330e58cba,'2018-11-10 11:00:55','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('7','9','0','0','0','0','',0x37,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078456','1509080271','1','0','0','',0x2f6b616966752f372e68746d6c,'1','1','1','',0xe9a398e9a398e6acb2e4bb99,'1540614382','','840',0xe78e8be880853131e69c8d,'2018-10-27 12:26:22','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('8','9','0','0','0','0','',0x38,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078490','1509082854','1','0','0','',0x2f6b616966752f382e68746d6c,'1','1','1','',0xe9be99e59f8ee99cb8e4b89aefbc88e696b0efbc89,'1509078470','','844',0x53343038,'2018-11-01 12:00:50','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('9','9','0','0','0','0','',0x39,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078555','1509078555','1','0','0','',0x2f6b616966752f392e68746d6c,'1','1','1','',0xe69e81e59381e4b889e59bbd,'1509078492','','884',0x323735e69c8d,'2018-01-02 10:00:12','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('10','9','0','0','0','0','',0x3130,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078593','1509078593','1','0','0','',0x2f6b616966752f31302e68746d6c,'1','1','1','',0xe6ada6e98193e887b3e5b08a,'1509078557','','891',0x53323239,'2018-01-30 08:00:17','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('11','9','0','0','0','0','',0x3131,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078648','1509078648','1','0','0','',0x2f6b616966752f31312e68746d6c,'1','1','1','',0xe69599e4b8bbe4b98be5aeb6,'1509078595','','795',0xe58abfe5a682e7a0b4e7abb9303039,'2018-03-03 12:00:55','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('12','9','0','0','0','0','',0x3132,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078730','1509614341','1','0','0','',0x2f6b616966752f31322e68746d6c,'1','1','1','',0xe4bb99e58991e5aea2e6a088,'1509078650','','800',0xe89c80e5b1b1e5908de4baba,'2027-12-01 12:00:50','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('13','9','0','0','0','0','',0x3133,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078776','1509614349','1','0','0','',0x2f6b616966752f31332e68746d6c,'1','1','1','',0xe799bee68898e6b299e59f8e,'1509078751','','851',0xe799bee68898313632e58cba,'2019-02-03 12:00:31','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('14','9','0','0','0','0','',0x3134,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078798','1509082782','1','0','0','',0x2f6b616966752f31342e68746d6c,'1','1','1','',0xe5a4a7e5ae97e5b888,'1509078779','','877',0x313339e69c8d,'2018-05-05 12:00:59','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('15','9','0','0','0','0','',0x3135,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078880','1509078880','1','0','0','',0x2f6b616966752f31352e68746d6c,'1','1','1','',0xe88da3e88080e7baaae58583,'1509078800','','885',0xe7baaae58583313230e58cba,'2018-01-01 12:00:20','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('16','9','0','0','0','0','',0x3136,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509078901','1509082840','1','0','0','',0x2f6b616966752f31362e68746d6c,'1','1','1','',0xe7bb9de4b896e7a59ee58a9f,'1509078882','','912',0x333537e58cba,'2018-01-05 12:00:42','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('17','9','0','0','0','0','',0x3137,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509079003','1509079003','1','0','0','',0x2f6b616966752f31372e68746d6c,'1','1','1','',0xe89c80e5b1b1e4b896e7958c,'1509078904','','906',0xe88bb1e99b84e8b1aae69db0,'2018-03-03 12:00:04','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('18','9','0','0','0','0','',0x3138,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509079158','1509079158','1','0','0','',0x2f6b616966752f31382e68746d6c,'1','1','1','',0xe4bca0e5a587e69da5e4ba86,'1509079005','','839',0x3435e69c8d,'2018-05-05 12:00:45','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('19','9','0','0','0','0','',0x3139,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509079957','1509079957','1','0','0','',0x2f6b616966752f31392e68746d6c,'1','1','1','',0xe6a2a6e683b3e6b5b7e5b29be78e8b,'1509079342','','852',0x3736e69c8d2de5aea0e8beb1e4b88de6838a,'2018-01-30 12:00:22','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('20','9','0','0','0','0','',0x3230,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509080056','1509614360','1','0','0','',0x2f6b616966752f32302e68746d6c,'1','1','1','',0xe5bc80e5bf83e59bbde78e8b,'1509080038','','822',0x313438e58cba,'2018-12-10 12:00:58','0');");
E_D("replace into `www_96kaifa_com_ecms_kaifu` values('21','9','0','0','0','0','',0x3231,'1',0x39366b61696661,'0','0','0','0','0','0','0','1509080142','1509699733','1','0','0','',0x2f6b616966752f32312e68746d6c,'1','1','1','',0xe88ebde88d92e7baaae6ada3e78988,'1509080085','','857',0xe69198e6989fe5ba9c2d313633,'2018-11-03 17:01:45','0');");

@include("../../inc/footer.php");
?>