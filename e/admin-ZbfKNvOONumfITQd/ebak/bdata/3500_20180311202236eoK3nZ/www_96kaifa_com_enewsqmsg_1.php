<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsqmsg`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsqmsg` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL DEFAULT '',
  `msgtext` text NOT NULL,
  `haveread` tinyint(1) NOT NULL DEFAULT '0',
  `msgtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `to_username` varchar(30) NOT NULL DEFAULT '',
  `from_userid` int(10) unsigned NOT NULL DEFAULT '0',
  `from_username` varchar(30) NOT NULL DEFAULT '',
  `isadmin` tinyint(1) NOT NULL DEFAULT '0',
  `issys` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`mid`),
  KEY `to_username` (`to_username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('4',0x39364b61694661e6ba90e7a081e58a9fe883bde6b58be8af95,0x39364b61694661e6ba90e7a081e594afe4b880e5ae98e7bd91efbc9a7777772e39366b616966612e636f6d,'1','2017-11-02 16:21:42',0x7777772e39366b616966612e636f6d,'0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('2',0x39364b61694661e6ba90e7a081e58a9fe883bde6b58be8af95,0xe6b58be8af95e6b58be8af95e6b58be8af95e6b58be8af95,'0','2017-11-02 15:35:55',0x7777772e626f79646f776e2e636f6d,'0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('3',0x39364b61694661e6ba90e7a081e58a9fe883bde6b58be8af95,0xe6b58be8af95e6b58be8af95e6b58be8af95e6b58be8af95,'0','2017-11-02 15:35:55',0x39366b616966612e636f6d,'0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('5',0x39364b61694661e6ba90e7a081e58a9fe883bde6b58be8af95,0x39364b61694661e6ba90e7a081e594afe4b880e5ae98e7bd91efbc9a7777772e39366b616966612e636f6d,'0','2017-11-02 16:21:42',0x7777772e626f79646f776e2e636f6d,'0','','1','1');");
E_D("replace into `www_96kaifa_com_enewsqmsg` values('6',0x39364b61694661e6ba90e7a081e58a9fe883bde6b58be8af95,0x39364b61694661e6ba90e7a081e594afe4b880e5ae98e7bd91efbc9a7777772e39366b616966612e636f6d,'0','2017-11-02 16:21:42',0x39366b616966612e636f6d,'0','','1','1');");

@include("../../inc/footer.php");
?>