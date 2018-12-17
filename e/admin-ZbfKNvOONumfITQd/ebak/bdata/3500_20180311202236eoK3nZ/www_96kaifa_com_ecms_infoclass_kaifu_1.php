<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_ecms_infoclass_kaifu`;");
E_C("CREATE TABLE `www_96kaifa_com_ecms_infoclass_kaifu` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_yxid` text NOT NULL,
  `z_yxid` varchar(255) NOT NULL,
  `qz_yxid` varchar(255) NOT NULL,
  `save_yxid` varchar(10) NOT NULL,
  `zz_fuwuqi` text NOT NULL,
  `z_fuwuqi` varchar(255) NOT NULL,
  `qz_fuwuqi` varchar(255) NOT NULL,
  `save_fuwuqi` varchar(10) NOT NULL,
  `zz_kfsj` text NOT NULL,
  `z_kfsj` varchar(255) NOT NULL,
  `qz_kfsj` varchar(255) NOT NULL,
  `save_kfsj` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>