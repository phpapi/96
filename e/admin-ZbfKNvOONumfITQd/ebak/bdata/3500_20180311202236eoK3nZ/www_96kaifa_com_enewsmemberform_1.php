<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `www_96kaifa_com_enewsmemberform`;");
E_C("CREATE TABLE `www_96kaifa_com_enewsmemberform` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(60) NOT NULL DEFAULT '',
  `ftemp` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `enter` text NOT NULL,
  `mustenter` text NOT NULL,
  `filef` varchar(255) NOT NULL DEFAULT '',
  `imgf` varchar(255) NOT NULL DEFAULT '0',
  `tobrf` text NOT NULL,
  `viewenter` text NOT NULL,
  `searchvar` varchar(255) NOT NULL DEFAULT '',
  `canaddf` text NOT NULL,
  `caneditf` text NOT NULL,
  `checkboxf` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_96kaifa_com_enewsmemberform` values('1',0xe4b8aae4babae6b3a8e5868ce8a1a8e58d95,0x2020202020203c64697620636c6173733d226f75746572223e3c6c6162656c3ee79c9fe5ae9ee5a793e5908defbc9a3c2f6c6162656c3e5b212d2d747275656e616d652d2d5d3c2f6469763e0d0a2020202020203c64697620636c6173733d226f75746572223e3c6c6162656c3e5151e58fb7e7a081efbc9a3c2f6c6162656c3e5b212d2d6f6963712d2d5d3c2f6469763e0d0a2020202020203c64697620636c6173733d226f75746572223e3c6c6162656c3ee88194e7b3bbe794b5e8af9defbc9a3c2f6c6162656c3e5b212d2d6d7963616c6c2d2d5d3c2f6469763e0d0a2020202020203c64697620636c6173733d226f75746572223e3c6c6162656c3ee6898be69cbaefbc9a3c2f6c6162656c3e5b212d2d70686f6e652d2d5d3c2f6469763e0d0a2020202020203c64697620636c6173733d226f75746572223e3c6c6162656c3ee4bc9ae59198e5a4b4e5838fefbc9a3c2f6c6162656c3e5b212d2d757365727069632d2d5d3c2f6469763e,'',0xe79c9fe5ae9ee5a793e5908d3c212d2d6669656c642d2d2d3e747275656e616d653c212d2d7265636f72642d2d3ee88194e7b3bbe794b5e8af9d3c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee6898be69cba3c212d2d6669656c642d2d2d3e70686f6e653c212d2d7265636f72642d2d3e5151e58fb7e7a0813c212d2d6669656c642d2d2d3e6f6963713c212d2d7265636f72642d2d3e4d534e3c212d2d6669656c642d2d2d3e6d736e3c212d2d7265636f72642d2d3ee7bd91e7ab99e59cb0e59d803c212d2d6669656c642d2d2d3e686f6d65706167653c212d2d7265636f72642d2d3ee4bc9ae59198e5a4b4e5838f3c212d2d6669656c642d2d2d3e757365727069633c212d2d7265636f72642d2d3ee88194e7b3bbe59cb0e59d803c212d2d6669656c642d2d2d3e616464726573733c212d2d7265636f72642d2d3ee982aee7bc963c212d2d6669656c642d2d2d3e7a69703c212d2d7265636f72642d2d3ee7ae80e4bb8b3c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,'',0x2c,0x2c757365727069632c,0x2c736179746578742c,0xe79c9fe5ae9ee5a793e5908d3c212d2d6669656c642d2d2d3e747275656e616d653c212d2d7265636f72642d2d3ee88194e7b3bbe794b5e8af9d3c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee6898be69cba3c212d2d6669656c642d2d2d3e70686f6e653c212d2d7265636f72642d2d3e5151e58fb7e7a0813c212d2d6669656c642d2d2d3e6f6963713c212d2d7265636f72642d2d3e4d534e3c212d2d6669656c642d2d2d3e6d736e3c212d2d7265636f72642d2d3ee7bd91e7ab99e59cb0e59d803c212d2d6669656c642d2d2d3e686f6d65706167653c212d2d7265636f72642d2d3ee4bc9ae59198e5a4b4e5838f3c212d2d6669656c642d2d2d3e757365727069633c212d2d7265636f72642d2d3ee88194e7b3bbe59cb0e59d803c212d2d6669656c642d2d2d3e616464726573733c212d2d7265636f72642d2d3ee982aee7bc963c212d2d6669656c642d2d2d3e7a69703c212d2d7265636f72642d2d3ee7ae80e4bb8b3c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,'',0x2c747275656e616d652c6d7963616c6c2c70686f6e652c6f6963712c6d736e2c686f6d65706167652c757365727069632c616464726573732c7a69702c736179746578742c,0x2c747275656e616d652c6d7963616c6c2c70686f6e652c6f6963712c6d736e2c686f6d65706167652c757365727069632c616464726573732c7a69702c736179746578742c,0x2c);");
E_D("replace into `www_96kaifa_com_enewsmemberform` values('2',0xe4bc81e59198e6b3a8e5868ce8a1a8e58d95,0x3c7461626c652077696474683d27313030252720616c69676e3d2763656e746572272063656c6c70616464696e673d332063656c6c73706163696e673d31206267636f6c6f723d2723444245414635273e3c74723e3c74642077696474683d2732352527206865696768743d3235206267636f6c6f723d27666666666666273ee585ace58fb8e5908de7a7b03c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d636f6d70616e792d2d5d282a293c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee88194e7b3bbe4baba3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d747275656e616d652d2d5d282a293c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee88194e7b3bbe794b5e8af9d3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d6d7963616c6c2d2d5d282a293c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee4bca0e79c9f3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d6661782d2d5d3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee6898be69cba3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d70686f6e652d2d5d3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273e5151e58fb7e7a0813c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d6f6963712d2d5d3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273e4d534e3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d6d736e2d2d5d3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee7bd91e59d803c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d686f6d65706167652d2d5d3c2f74643e3c2f74723e0d0a3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee4bc9ae59198e5a4b4e5838f3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d757365727069632d2d5d3c2f74643e3c2f74723e0d0a3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee88194e7b3bbe59cb0e59d803c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d616464726573732d2d5d266e6273703be982aee7bc963a205b212d2d7a69702d2d5d3c2f74643e3c2f74723e3c74723e3c74642077696474683d2731362527206865696768743d3235206267636f6c6f723d27666666666666273ee585ace58fb8e4bb8be7bb8d3c2f74643e3c7464206267636f6c6f723d27666666666666273e5b212d2d736179746578742d2d5d3c2f74643e3c2f74723e3c2f7461626c653e,'',0xe585ace58fb8e5908de7a7b03c212d2d6669656c642d2d2d3e636f6d70616e793c212d2d7265636f72642d2d3ee88194e7b3bbe4baba3c212d2d6669656c642d2d2d3e747275656e616d653c212d2d7265636f72642d2d3ee88194e7b3bbe794b5e8af9d3c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee4bca0e79c9f3c212d2d6669656c642d2d2d3e6661783c212d2d7265636f72642d2d3ee6898be69cba3c212d2d6669656c642d2d2d3e70686f6e653c212d2d7265636f72642d2d3e5151e58fb7e7a0813c212d2d6669656c642d2d2d3e6f6963713c212d2d7265636f72642d2d3e4d534e3c212d2d6669656c642d2d2d3e6d736e3c212d2d7265636f72642d2d3ee7bd91e59d803c212d2d6669656c642d2d2d3e686f6d65706167653c212d2d7265636f72642d2d3ee4bc9ae59198e5a4b4e5838f3c212d2d6669656c642d2d2d3e757365727069633c212d2d7265636f72642d2d3ee88194e7b3bbe59cb0e59d803c212d2d6669656c642d2d2d3e616464726573733c212d2d7265636f72642d2d3ee982aee7bc963c212d2d6669656c642d2d2d3e7a69703c212d2d7265636f72642d2d3ee585ace58fb8e4bb8be7bb8d3c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,0x2c636f6d70616e792c747275656e616d652c6d7963616c6c2c,0x2c,0x2c757365727069632c,0x2c736179746578742c,0xe585ace58fb8e5908de7a7b03c212d2d6669656c642d2d2d3e636f6d70616e793c212d2d7265636f72642d2d3ee88194e7b3bbe4baba3c212d2d6669656c642d2d2d3e747275656e616d653c212d2d7265636f72642d2d3ee88194e7b3bbe794b5e8af9d3c212d2d6669656c642d2d2d3e6d7963616c6c3c212d2d7265636f72642d2d3ee4bca0e79c9f3c212d2d6669656c642d2d2d3e6661783c212d2d7265636f72642d2d3ee6898be69cba3c212d2d6669656c642d2d2d3e70686f6e653c212d2d7265636f72642d2d3e5151e58fb7e7a0813c212d2d6669656c642d2d2d3e6f6963713c212d2d7265636f72642d2d3e4d534e3c212d2d6669656c642d2d2d3e6d736e3c212d2d7265636f72642d2d3ee7bd91e59d803c212d2d6669656c642d2d2d3e686f6d65706167653c212d2d7265636f72642d2d3ee4bc9ae59198e5a4b4e5838f3c212d2d6669656c642d2d2d3e757365727069633c212d2d7265636f72642d2d3ee88194e7b3bbe59cb0e59d803c212d2d6669656c642d2d2d3e616464726573733c212d2d7265636f72642d2d3ee982aee7bc963c212d2d6669656c642d2d2d3e7a69703c212d2d7265636f72642d2d3ee585ace58fb8e4bb8be7bb8d3c212d2d6669656c642d2d2d3e736179746578743c212d2d7265636f72642d2d3e,0x2c636f6d70616e792c,0x2c636f6d70616e792c747275656e616d652c6d7963616c6c2c6661782c70686f6e652c6f6963712c6d736e2c686f6d65706167652c757365727069632c616464726573732c7a69702c736179746578742c,0x2c636f6d70616e792c747275656e616d652c6d7963616c6c2c6661782c70686f6e652c6f6963712c6d736e2c686f6d65706167652c757365727069632c616464726573732c7a69702c736179746578742c,0x2c);");

@include("../../inc/footer.php");
?>