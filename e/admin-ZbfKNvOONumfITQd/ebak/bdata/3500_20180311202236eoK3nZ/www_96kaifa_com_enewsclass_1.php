<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsclass`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsclass` values('1','0',0xe8b584e8aeaf,0x7c327c337c347c357c,'0','20','10','0','0','1','','0',0x7a6978756e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','10','','10','1','1','10',0xe8b584e8aeaf,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe6b8b8e6888fe8b584e8aeafe9a291e98193e68f90e4be9be69c80e696b04835e6b8b8e6888fe8b584e8aeafe38081e6898be69cbae9a1b5e6b8b8e8b584e8aeafe38082,'','1','0','0','0','0','0','0','','0','0','0',0x4835e6b8b8e6888fe8b584e8aeaf,'1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1508810242','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('2','1',0xe696b0e997bb,'','0','20','10','1','0','1',0x7c317c,'1',0x7a6978756e2f78696e77656e,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe696b0e997bb,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0',0x7a6978756e,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','67','67','1508810336','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('3','1',0xe694bbe795a5,'','0','20','10','1','0','1',0x7c317c,'1',0x7a6978756e2f676f6e676c7565,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe694bbe795a5,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0',0x7a6978756e,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','78','78','1508810356','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('4','1',0xe6b4bbe58aa8,'','0','20','10','1','0','1',0x7c317c,'1',0x7a6978756e2f68756f646f6e67,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe6b4bbe58aa8,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0',0x7a6978756e,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','403','403','1508810382','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('5','1',0xe585ace5918a,'','0','20','10','1','0','1',0x7c317c,'1',0x7a6978756e2f676f6e6767616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe585ace5918a,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0',0x7a6978756e,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','243','243','1508810411','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('6','0',0xe7bd91e6b8b8,'','0','30','10','10','0','9','','1',0x67616d65,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','1','','10','9','1','10',0xe7bd91e6b8b8,'1','0','9',0x67616d65,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe696b0e6b8b8e9a291e98193e4b8bae794a8e688b7e68f90e4be9be69c80e696b0e79a844835e6b8b8e6888fe38081e6898be69cbae9a1b5e6b8b8efbc8ce696b0e6b8b8e58f8ae697b6e78ea9efbc8ce5b0b1e59ca833353030e6b8b8e6888f4835e696b0e6b8b8e9a291e98193e38082,'','1','0','0','0','0','0','0','','0','0','0',0x4835e696b0e6b8b82c4835e6b8b8e6888f2ce6898be69cbae9a1b5e6b8b8,'9','0','0','0','0','0',0x67616d65,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','135','135','1508827022','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('7','0',0xe5b08fe6b8b8e6888f,'','0','30','10','11','0','11','','1',0x64616e6a69,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','5','','10','10','1','10',0xe5b08fe6b8b8e6888f,'1','0','10',0x64616e6a69,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe58d95e69cbae59ca8e7babfe5b08fe6b8b8e6888fe5b9b3e58fb0e68f90e4be9be697b6e4b88be69c80e5a5bde78ea9e79a84e59ca8e7babfe6898be69cba4835e5b08fe6b8b8e6888f2ce6898be69cbae7bd91e9a1b5e5b08fe6b8b8e6888fe59ca8e7babfe78ea9e38082,'','1','0','0','0','0','0','0','','0','0','0',0xe6898be69cbae59ca8e7babfe5b08fe6b8b8e6888f2c4835e5b08fe6b8b8e6888f,'11','1','0','0','0','0',0x64616e6a69,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','125','125','1508907595','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('8','0',0xe7a4bce58c85,'','0','20','10','12','0','13','','1',0x6c6962616f,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','7','','10','11','1','10',0xe7a4bce58c85,'0','0','11',0x6c6962616f,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe7a4bce58c85e4b8ade5bf83e4b8bae5b9bfe5a4a7e794a8e688b7e68f90e4be9b4835e6b8b8e6888fe7a4bce58c85e38081e6bf80e6b4bbe7a081e38081e696b0e6898be58da1e38081e58591e68da2e7a081e7ad89e7ad89efbc8ce69bb4e5a49ae6898be69cbae9a1b5e6b8b8e7a4bce58c85e7a081efbc8ce5b0bde59ca8e7a4bce58c85e4b8ade5bf83e38082,'','1','0','0','0','0','0','0','','0','0','0',0x4835e6b8b8e6888fe7a4bce58c852ce6898be69cbae9a1b5e6b8b8e7a4bce58c85,'13','1','0','0','0','0',0x6c6962616f,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','21','21','1509000597','0','','0','0');");
E_D("replace into `www_96kaifa_com_enewsclass` values('9','0',0xe5bc80e69c8de8a1a8,'','0','30','10','13','0','14','','1',0x6b61696675,0x2e68746d6c,'','0',0x2e68746d6c,'0','1','10','10','10','','0','20','','10','12','1','10',0xe5bc80e69c8de8a1a8,'1','0','12',0x6b61696675,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,0xe5bc80e69c8de8a1a8e4b8bae794a8e688b7e68f90e4be9be69c80e696b0e79a84e4bba5e58f8ae69caae69da5e7acace4b880e697b6e997b4e79a844835e6b8b8e6888fe5bc80e69c8de697b6e997b4e8a1a8efbc8ce58c85e590abe69c80e783ade6898be69cbae9a1b5e6b8b8e5bc80e69c8de697b6e997b4e8a1a8e38081e5bc80e6b58be7a4bce58c85e68f90e98692e7ad89e7ad89e38082,'','1','0','0','0','0','0','0','','0','0','0',0x4835e6b8b8e6888fe5bc80e69c8de8a1a82ce6898be69cbae9a1b5e6b8b8e5bc80e69c8de8a1a82c4835e6b8b8e6888f,'14','1','0','0','0','0',0x6b61696675,'1','0','0','0','','0','0','0','0','','0','0','0','','0','0','21','21','1509066335','0','','0','0');");

@include("../../inc/footer.php");
?>