<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewslog`;");
E_C("CREATE TABLE `www_96kaifa_com_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewslog` values('1',0x39366b61696661,'2017-10-24 09:40:13',0x3139322e3136382e302e313838,'1','','0',0x3531313536);");
E_D("replace into `www_96kaifa_com_enewslog` values('2',0x39366b61696661,'2017-10-25 09:47:13',0x3139322e3136382e302e313838,'1','','0',0x3532363339);");
E_D("replace into `www_96kaifa_com_enewslog` values('3',0x39366b61696661,'2017-10-25 16:14:08',0x3139322e3136382e302e313838,'1','','0',0x3533313538);");
E_D("replace into `www_96kaifa_com_enewslog` values('4',0x39366b61696661,'2017-10-26 09:27:07',0x3139322e3136382e302e313838,'1','','0',0x3439383433);");
E_D("replace into `www_96kaifa_com_enewslog` values('5',0x39366b61696661,'2017-10-27 07:58:47',0x3139322e3136382e302e313838,'1','','0',0x3531353639);");
E_D("replace into `www_96kaifa_com_enewslog` values('6',0x39366b61696661,'2017-10-28 10:45:27',0x3139322e3136382e302e313838,'1','','0',0x3630363231);");
E_D("replace into `www_96kaifa_com_enewslog` values('7',0x39366b61696661,'2017-10-27 10:45:50',0x3139322e3136382e302e313838,'1','','0',0x3630363530);");
E_D("replace into `www_96kaifa_com_enewslog` values('8',0x39366b61696661,'2017-10-28 09:34:10',0x3139322e3136382e302e313838,'1','','0',0x3531373232);");
E_D("replace into `www_96kaifa_com_enewslog` values('9',0x39366b61696661,'2017-10-28 11:24:39',0x3139322e3136382e302e313838,'1','','0',0x3531303033);");
E_D("replace into `www_96kaifa_com_enewslog` values('10',0x39366b61696661,'2017-10-28 14:57:36',0x3139322e3136382e302e313838,'1','','0',0x3530333139);");
E_D("replace into `www_96kaifa_com_enewslog` values('11',0x39366b61696661,'2017-10-28 14:58:20',0x3139322e3136382e302e313838,'1','','0',0x3530333235);");
E_D("replace into `www_96kaifa_com_enewslog` values('12',0x39366b61696661,'2017-10-29 09:28:53',0x3139322e3136382e302e313838,'1','','0',0x3532313335);");
E_D("replace into `www_96kaifa_com_enewslog` values('13',0x39366b61696661,'2017-10-29 22:23:47',0x3139322e3136382e302e313838,'1','','0',0x3630393337);");
E_D("replace into `www_96kaifa_com_enewslog` values('14',0x39366b61696661,'2017-10-30 12:12:18',0x3139322e3136382e302e313838,'1','','0',0x3537383430);");
E_D("replace into `www_96kaifa_com_enewslog` values('15',0x39366b61696661,'2017-10-31 17:11:07',0x3139322e3136382e302e313838,'1','','0',0x3537323030);");
E_D("replace into `www_96kaifa_com_enewslog` values('16',0x39366b61696661,'2017-11-01 10:04:16',0x3139322e3136382e302e313838,'1','','0',0x3439363732);");
E_D("replace into `www_96kaifa_com_enewslog` values('17',0x39366b61696661,'2017-11-02 08:43:00',0x3139322e3136382e302e313838,'1','','0',0x3530313133);");
E_D("replace into `www_96kaifa_com_enewslog` values('18',0x39366b61696661,'2017-11-02 14:20:07',0x3139322e3136382e302e313838,'1','','0',0x3536333031);");
E_D("replace into `www_96kaifa_com_enewslog` values('19',0x39366b61696661,'2017-11-02 18:26:35',0x3139322e3136382e302e313838,'1','','0',0x3631323432);");
E_D("replace into `www_96kaifa_com_enewslog` values('20',0x39366b61696661,'2017-11-03 09:52:28',0x3139322e3136382e302e313838,'1','','0',0x3530323330);");
E_D("replace into `www_96kaifa_com_enewslog` values('21',0x39366b61696661,'2017-11-03 18:49:06',0x3139322e3136382e302e313838,'1','','0',0x3630313133);");
E_D("replace into `www_96kaifa_com_enewslog` values('22',0x39366b61696661,'2017-11-03 21:02:56',0x3139322e3136382e302e313838,'1','','0',0x3539373137);");
E_D("replace into `www_96kaifa_com_enewslog` values('23',0x39366b61696661,'2017-11-04 09:52:42',0x3139322e3136382e302e313838,'1','','0',0x3534303138);");
E_D("replace into `www_96kaifa_com_enewslog` values('24',0x39366b61696661,'2017-11-04 13:45:54',0x3139322e3136382e302e313838,'1','','0',0x3630373337);");
E_D("replace into `www_96kaifa_com_enewslog` values('25',0x39366b61696661,'2017-11-04 13:46:12',0x3139322e3136382e302e313838,'1','','0',0x3538353736);");
E_D("replace into `www_96kaifa_com_enewslog` values('26',0x39366b61696661,'2017-11-04 13:52:32',0x3139322e3136382e302e313838,'1','','0',0x3631303338);");
E_D("replace into `www_96kaifa_com_enewslog` values('27',0x39366b61696661,'2017-11-04 13:53:02',0x3139322e3136382e302e313838,'1','','0',0x3630373733);");
E_D("replace into `www_96kaifa_com_enewslog` values('28',0x39366b61696661,'2017-11-04 17:48:10',0x3139322e3136382e302e313838,'1','','0',0x3533343934);");
E_D("replace into `www_96kaifa_com_enewslog` values('29',0x39366b61696661,'2017-11-04 18:17:55',0x3139322e3136382e302e313838,'1','','0',0x3537323638);");
E_D("replace into `www_96kaifa_com_enewslog` values('30',0x39366b61696661,'2017-11-04 18:45:40',0x3139322e3136382e302e313838,'1','','0',0x3630353936);");
E_D("replace into `www_96kaifa_com_enewslog` values('31',0x39366b61696661,'2017-11-05 16:17:29',0x3139322e3136382e302e313838,'0','','0',0x3630393136);");
E_D("replace into `www_96kaifa_com_enewslog` values('32',0x39366b61696661,'2017-11-05 16:17:37',0x3139322e3136382e302e313838,'0','','0',0x3630393136);");
E_D("replace into `www_96kaifa_com_enewslog` values('33',0x39366b61696661,'2017-11-05 16:17:44',0x3139322e3136382e302e313838,'1','','0',0x3630393136);");
E_D("replace into `www_96kaifa_com_enewslog` values('34',0x39366b61696661,'2017-11-06 10:29:37',0x3139322e3136382e302e313838,'1','','0',0x3633383234);");
E_D("replace into `www_96kaifa_com_enewslog` values('35',0x39366b61696661,'2017-11-19 16:05:18',0x3139322e3136382e302e313838,'1','','0',0x3635343934);");
E_D("replace into `www_96kaifa_com_enewslog` values('36',0x39366b61696661,'2017-11-27 12:32:12',0x3139322e3136382e302e313838,'1','','0',0x3537313832);");
E_D("replace into `www_96kaifa_com_enewslog` values('37',0x39366b61696661,'2017-11-27 23:31:05',0x3139322e3136382e302e313838,'1','','0',0x3538343033);");
E_D("replace into `www_96kaifa_com_enewslog` values('38',0x39366b61696661,'2017-11-28 10:28:24',0x3139322e3136382e302e313838,'1','','0',0x3531363431);");
E_D("replace into `www_96kaifa_com_enewslog` values('39',0x39366b61696661,'2017-11-30 15:55:37',0x3139322e3136382e302e313838,'1','','0',0x3634353838);");
E_D("replace into `www_96kaifa_com_enewslog` values('40',0x39366b61696661,'2017-12-02 17:31:40',0x3139322e3136382e302e313838,'1','','0',0x3539333930);");
E_D("replace into `www_96kaifa_com_enewslog` values('41',0x39366b61696661,'2017-12-06 12:17:50',0x3139322e3136382e302e313838,'1','','0',0x3534303534);");
E_D("replace into `www_96kaifa_com_enewslog` values('42',0x39366b61696661,'2017-12-11 18:15:04',0x3139322e3136382e302e313838,'1','','0',0x3532373033);");
E_D("replace into `www_96kaifa_com_enewslog` values('43',0x39366b61696661,'2017-12-20 20:34:23',0x3139322e3136382e302e313838,'1','','0',0x3633333535);");
E_D("replace into `www_96kaifa_com_enewslog` values('44',0x39366b61696661,'2017-12-20 21:05:56',0x3139322e3136382e302e313838,'1','','0',0x3534383830);");
E_D("replace into `www_96kaifa_com_enewslog` values('45',0x39366b61696661,'2017-12-27 11:34:26',0x3139322e3136382e302e313838,'1','','0',0x3535383432);");
E_D("replace into `www_96kaifa_com_enewslog` values('46',0x39366b61696661,'2018-01-04 16:08:31',0x3139322e3136382e302e313838,'1','','0',0x3632393831);");
E_D("replace into `www_96kaifa_com_enewslog` values('47',0x39366b61696661,'2018-01-04 17:44:58',0x3139322e3136382e302e313838,'1','','0',0x3530343532);");
E_D("replace into `www_96kaifa_com_enewslog` values('48',0x39366b61696661,'2018-01-04 18:16:55',0x3139322e3136382e302e313838,'1','','0',0x3532323338);");
E_D("replace into `www_96kaifa_com_enewslog` values('49',0x39366b61696661,'2018-01-05 10:59:22',0x3139322e3136382e302e313838,'1','','0',0x3534303235);");
E_D("replace into `www_96kaifa_com_enewslog` values('50',0x39366b61696661,'2018-01-09 12:34:53',0x3139322e3136382e302e313838,'1','','0',0x3532313937);");
E_D("replace into `www_96kaifa_com_enewslog` values('51',0x39366b61696661,'2018-01-09 12:36:08',0x3139322e3136382e302e313838,'0','','0',0x3532313937);");
E_D("replace into `www_96kaifa_com_enewslog` values('52',0x39366b61696661,'2018-01-09 12:36:15',0x3139322e3136382e302e313838,'1','','0',0x3532313937);");
E_D("replace into `www_96kaifa_com_enewslog` values('53',0x39366b61696661,'2018-01-22 13:39:27',0x3139322e3136382e302e313838,'1','','0',0x3632393432);");
E_D("replace into `www_96kaifa_com_enewslog` values('54',0x39366b61696661,'2018-02-04 00:00:50',0x3139322e3136382e302e313838,'1','','0',0x3633363335);");
E_D("replace into `www_96kaifa_com_enewslog` values('55',0x39366b61696661,'2018-02-21 11:51:22',0x3139322e3136382e302e313838,'1','','0',0x3531343039);");
E_D("replace into `www_96kaifa_com_enewslog` values('56',0x39366b61696661,'2018-02-21 11:54:36',0x3139322e3136382e302e313838,'1','','0',0x3531343833);");
E_D("replace into `www_96kaifa_com_enewslog` values('57',0x39366b61696661,'2018-02-21 14:42:33',0x3139322e3136382e302e313838,'1','','0',0x3634393938);");
E_D("replace into `www_96kaifa_com_enewslog` values('58',0x39366b61696661,'2018-02-21 15:02:44',0x3139322e3136382e302e313838,'1','','0',0x3439363930);");
E_D("replace into `www_96kaifa_com_enewslog` values('59',0x39366b61696661,'2018-02-21 15:08:32',0x3139322e3136382e302e313838,'1','','0',0x3530353135);");
E_D("replace into `www_96kaifa_com_enewslog` values('60',0x39366b61696661,'2018-03-02 12:21:26',0x3132372e302e302e31,'1','','0',0x3535393338);");
E_D("replace into `www_96kaifa_com_enewslog` values('61',0x39366b61696661,'2018-03-02 12:39:03',0x3132372e302e302e31,'1','','0',0x3536383638);");
E_D("replace into `www_96kaifa_com_enewslog` values('62',0x39366b61696661,'2018-03-02 15:34:13',0x3132372e302e302e31,'1','','0',0x3632393735);");
E_D("replace into `www_96kaifa_com_enewslog` values('63',0x39366b61696661,'2018-03-02 15:55:05',0x3132372e302e302e31,'1','','0',0x3633343236);");
E_D("replace into `www_96kaifa_com_enewslog` values('64',0x39366b61696661,'2018-03-02 15:59:10',0x3132372e302e302e31,'1','','0',0x3633363233);");
E_D("replace into `www_96kaifa_com_enewslog` values('65',0x39366b61696661,'2018-03-02 16:12:09',0x3132372e302e302e31,'1','','0',0x3634323439);");
E_D("replace into `www_96kaifa_com_enewslog` values('66',0x39366b61696661,'2018-03-02 16:12:29',0x3132372e302e302e31,'1','','0',0x3634333730);");
E_D("replace into `www_96kaifa_com_enewslog` values('67',0x39366b61696661,'2018-03-02 16:18:17',0x3132372e302e302e31,'1','','0',0x3634373134);");
E_D("replace into `www_96kaifa_com_enewslog` values('68',0x7777772e39366b616966612e636f6d,'2018-03-02 16:50:46',0x3132372e302e302e31,'0','','0',0x3530333431);");
E_D("replace into `www_96kaifa_com_enewslog` values('69',0x39366b61696661,'2018-03-02 16:50:49',0x3132372e302e302e31,'1','','0',0x3530333431);");
E_D("replace into `www_96kaifa_com_enewslog` values('70',0x39366b61696661,'2018-03-02 20:31:23',0x3132372e302e302e31,'1','','0',0x3538303736);");
E_D("replace into `www_96kaifa_com_enewslog` values('71',0x39366b61696661,'2018-03-03 17:37:25',0x3132372e302e302e31,'1','','0',0x3536373733);");
E_D("replace into `www_96kaifa_com_enewslog` values('72',0x39366b61696661,'2018-03-03 23:30:48',0x3132372e302e302e31,'1','','0',0x3633333236);");
E_D("replace into `www_96kaifa_com_enewslog` values('73',0x39366b61696661,'2018-03-04 21:58:38',0x3132372e302e302e31,'1','','0',0x3634353230);");
E_D("replace into `www_96kaifa_com_enewslog` values('74',0x39366b61696661,'2018-03-05 10:07:31',0x3132372e302e302e31,'1','','0',0x3533353731);");
E_D("replace into `www_96kaifa_com_enewslog` values('75',0x39366b61696661,'2018-03-06 09:56:35',0x3132372e302e302e31,'1','','0',0x3531313439);");
E_D("replace into `www_96kaifa_com_enewslog` values('76',0x39366b61696661,'2018-03-06 11:36:09',0x3132372e302e302e31,'1','','0',0x3631303237);");
E_D("replace into `www_96kaifa_com_enewslog` values('77',0x39366b61696661,'2018-03-06 17:53:12',0x3132372e302e302e31,'1','','0',0x3538323333);");
E_D("replace into `www_96kaifa_com_enewslog` values('78',0x39366b61696661,'2018-03-06 18:49:38',0x3132372e302e302e31,'1','','0',0x3535303638);");
E_D("replace into `www_96kaifa_com_enewslog` values('79',0x39366b61696661,'2018-03-06 21:40:49',0x3132372e302e302e31,'1','','0',0x3532363630);");
E_D("replace into `www_96kaifa_com_enewslog` values('80',0x39366b61696661,'2018-03-06 22:01:38',0x3132372e302e302e31,'1','','0',0x3537323030);");
E_D("replace into `www_96kaifa_com_enewslog` values('81',0x39366b61696661,'2018-03-06 22:36:43',0x3132372e302e302e31,'1','','0',0x3537323031);");
E_D("replace into `www_96kaifa_com_enewslog` values('82',0x39366b61696661,'2018-03-07 17:30:37',0x3132372e302e302e31,'1','','0',0x3532353739);");
E_D("replace into `www_96kaifa_com_enewslog` values('83',0x39366b61696661,'2018-03-08 20:24:35',0x3132372e302e302e31,'1','','0',0x3539313031);");
E_D("replace into `www_96kaifa_com_enewslog` values('84',0x39366b61696661,'2018-03-08 21:11:00',0x3132372e302e302e31,'1','','0',0x3530363732);");
E_D("replace into `www_96kaifa_com_enewslog` values('85',0x39366b61696661,'2018-03-09 16:58:14',0x3132372e302e302e31,'1','','0',0x3530333631);");
E_D("replace into `www_96kaifa_com_enewslog` values('86',0x39366b61696661,'2018-03-11 12:28:54',0x3132372e302e302e31,'1','','0',0x3539393634);");
E_D("replace into `www_96kaifa_com_enewslog` values('87',0x39366b61696661,'2018-03-11 20:21:48',0x3132372e302e302e31,'1','','0',0x3537393836);");

@include("../../inc/footer.php");
?>