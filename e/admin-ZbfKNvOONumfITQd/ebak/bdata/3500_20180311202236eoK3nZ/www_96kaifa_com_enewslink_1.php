<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewslink`;");
E_C("CREATE TABLE `www_96kaifa_com_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewslink` values('1',0x39364b61694661e6ba90e7a081,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-10-28 10:04:22','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('2',0xe7bd91e7ab99e6ba90e7a081,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-10-28 10:04:32','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('3',0xe7bd91e7ab99e6a8a1e78988,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-10-28 10:04:42','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('4',0xe5b89de59bbd636d73e6a8a1e78988,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-10-28 10:04:57','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('5',0xe4b88be8bdbde7ab99e6a8a1e78988,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652de4b88be8bdbde7ab992d302e68746d6c,'2017-10-28 10:06:20','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('6',0xe88081e794b7e4baba,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35312e68746d6c,'2017-10-28 10:06:33','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('7',0xe7aca8e6898be69cba,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f33322e68746d6c,'2017-10-28 10:06:55','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('8',0xe589a7e68385e78b97,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36372e68746d6c,'2017-10-28 10:07:13','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('9',0xe4bc98e6b8b8e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36362e68746d6c,'2017-10-28 10:07:29','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('10',0xe58d83e5ba93e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f37302e68746d6c,'2017-10-28 10:07:42','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('11',0xe7bd91e7ab99e6ba90e7a081,'',0x687474703a2f2f7777772e626f79646f776e2e636f6d2f,'2017-10-28 10:07:54','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('12',0xe794b7e4babae8a197,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f312e68746d6c,'2017-10-28 10:08:20','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('13',0xe58f91e59e8be7ab99,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35332e68746d6c,'2017-10-28 10:08:33','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('14',0xe788b1e4b8bde7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35342e68746d6c,'2017-10-28 10:08:44','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('15',0x5652e7958c,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34392e68746d6c,'2017-10-28 10:08:56','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('16',0xe58c97e4baace697b6e997b4,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34382e68746d6c,'2017-10-28 10:09:19','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('17',0xe7b3bbe7bb9fe5a4a9e5a082,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f33352e68746d6c,'2017-10-28 10:09:32','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('18',0xe7b3bbe7bb9fe4b98be5aeb6,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35392e68746d6c,'2017-10-28 10:09:51','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('19',0xe5bc80e6b798e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36302e68746d6c,'2017-10-28 10:10:07','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('20',0xe78c8ee5a587e590a7,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35362e68746d6c,'2017-10-28 10:10:26','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('21',0xe8b685e4babae8bdafe4bbb6,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36392e68746d6c,'2017-10-28 10:11:48','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('22',0x33353030e6b8b8e6888f,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f37312e68746d6c,'2017-10-28 10:12:03','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('23',0xe4b89ce696b9e5a4b4e69da1,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36322e68746d6c,'2017-10-28 10:12:56','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('24',0xe585abe5ae9de7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36312e68746d6c,'2017-10-28 10:13:11','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('25',0xe590bee788b1e8af97e7bb8fe7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36342e68746d6c,'2017-10-28 10:13:40','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('26',0xe696b0e8b6a3e5a4b4e69da1,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36352e68746d6c,'2017-10-28 10:13:52','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('27',0xe885bee7899be581a5e5bab7e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f36382e68746d6c,'2017-10-28 10:14:27','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('28',0xe5b08fe79aaee6898be6b8b8e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34342e68746d6c,'2017-10-28 10:14:54','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('29',0xe5bd93e4b88be8bdafe4bbb6e59bad,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34302e68746d6c,'2017-10-28 10:16:04','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('30',0xe9b384e9b1bce4b88be8bdbde7ab99,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34322e68746d6c,'2017-10-28 10:16:13','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('31',0xe7bbbfe88cb6e8bdafe4bbb6e59bad,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f33312e68746d6c,'2017-10-28 10:16:26','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('32',0x5850e7b3bbe7bb9fe4b98be5aeb6,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f33342e68746d6c,'2017-10-28 10:16:51','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('33',0xe5beaee4bfa1e5b08fe7a88be5ba8f,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34372e68746d6c,'2017-10-28 10:17:02','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('34',0xe5a48de585b4e5869be4ba8be7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35352e68746d6c,'2017-10-28 10:17:12','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('35',0x373247e6898be6b8b8e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f35382e68746d6c,'2017-10-28 10:17:42','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('39',0x39364b61694661e6ba90e7a081,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-11-03 15:59:48','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('37',0xe5a5b3e680a7e581a5e5bab7e7bd91,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f34312e68746d6c,'2017-10-28 10:18:53','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('38',0x5050e58aa9e6898b,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f636f64652f33392e68746d6c,'2017-10-28 10:19:26','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','1');");
E_D("replace into `www_96kaifa_com_enewslink` values('40',0xe7bd91e7ab99e6a8a1e69dbf,'',0x68747470733a2f2f7777772e39366b616966612e636f6d,'2017-11-03 16:00:00','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('41',0xe7bd91e7ab99e6ba90e7a081,'',0x687474703a2f2f7777772e626f79646f776e2e636f6d,'2017-11-03 16:00:22','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','2');");
E_D("replace into `www_96kaifa_com_enewslink` values('42',0xe5b89de59bbd636d73e6a8a1e78988,'',0x68747470733a2f2f7777772e39366b616966612e636f6d2f,'2017-11-03 16:00:59','0',0x3838,0x3331,0x5f626c616e6b,'0','','','1','0','2');");

@include("../../inc/footer.php");
?>