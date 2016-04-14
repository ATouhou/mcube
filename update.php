<?php
//mysql_connect("localhost","root","root");
mysql_connect("115.249.28.89","mcube","rzNeyYWcEFnvZu3h");
mysql_select_db("m3");
$rst = mysql_query("SELECT * FROM business");
if(mysql_num_rows($rst)>0){
	while($rec = mysql_fetch_assoc($rst)){
		$bid = $rec['bid'];	
        mysql_query("ALTER TABLE `".$bid."_groups` ADD  `landingregion` VARCHAR( 255 ) NOT NULL AFTER  `url` "); 
        mysql_query("ALTER TABLE `".$bid."_groups`  ADD `replytocust_missed` TINYINT(1) NOT NULL DEFAULT '1' AFTER `replytocustomer`"); 
        mysql_query("ALTER TABLE `".$bid."_groups`  ADD `replytocust_attended` TINYINT(1) NOT NULL DEFAULT '1' AFTER `replytocust_missed`"); 
        mysql_query("ALTER TABLE `".$bid."_groups`  ADD `replytocust_repcal` TINYINT(1) NOT NULL DEFAULT '1' AFTER `replytocust_attended`"); 
        mysql_query("ALTER TABLE `".$bid."_groups`  ADD `replytocust_voice` TINYINT(1) NOT NULL DEFAULT '1' AFTER `replytocust_repcal`"); 
        mysql_query("ALTER TABLE  `".$bid."_groups` ADD  `replytocust_voitext` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER  `replytocust_voice`"); 
        mysql_query("ALTER TABLE  `".$bid."_leads` ADD  `leadhistory` TEXT NOT NULL AFTER  `leadowner` "); 
        mysql_query("ALTER TABLE `".$bid."_pbxreport` ADD `tktid` INT NOT NULL ,ADD `leadid` INT NOT NULL "); 
        mysql_query("ALTER TABLE `".$bid."_ivrshistory` ADD `tktid` INT NOT NULL ,ADD `leadid` INT NOT NULL "); 
	}
mysql_query("INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '3', 'landingregion', '0', '0', '0', '0')");
mysql_query("INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '3', 'replytocust_missed', '0', '0', '0', '0'), (NULL, '3', 'replytocust_attended', '0', '0', '0', '0')");
mysql_query("INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '3', 'replytocust_repcal', '0', '0', '0', '0'), (NULL, '3', 'replytocust_voice', '0', '0', '0', '0')");
mysql_query("INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '3', 'replytocust_voitext', '0', '0', '0', '0')");
mysql_query("INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '26', 'leadhistory', '0', '0', '0', '0')");
//CREATE TABLE Provider(Provider varchar(255),Pro_name varchar(255));
mysql_query("INSERT INTO `Provider`(`Provider`, `Pro_name`) VALUES ('RL','Reliance'),('AT','Airtel'),('VO','Vodafone'),('TA','TATA'),('BS','BSNL')");
mysql_query("ALTER TABLE `prinumbers`  ADD `Region` TEXT NOT NULL AFTER `siminfo`;");
mysql_query("ALTER TABLE  `prilist` ADD  `provider` TEXT NOT NULL AFTER  `partner_id` ;");

/* word cloud DB changes */
ALTER TABLE `1_callhistory` ADD `callee_gender` VARCHAR( 10 ) NOT NULL AFTER `sms_content` ,
ADD `caller_gender` VARCHAR( 10 ) NOT NULL AFTER `callee_gender` ,
ADD `emotion` VARCHAR( 50 ) NOT NULL AFTER `caller_gender` ,
ADD `speech_text` TEXT NOT NULL AFTER `emotion` ,
ADD `word_cloud` VARCHAR( 250 ) NOT NULL AFTER `speech_text` 

/* Number Status  DB fields */
ALTER TABLE  `prinumbers` ADD  `number_status` TINYINT( 2 ) NOT NULL DEFAULT  '1'
ALTER TABLE  `prinumbers` ADD  `invoice_number` VARCHAR( 150 ) NOT NULL 
ALTER TABLE  `prinumbers` ADD  `payment_status`  TINYINT( 2 ) NOT NULL DEFAULT  '1'
ALTER TABLE `business` ADD `senderid` VARCHAR( 50 ) NOT NULL 

/*Mtrack */
INSERT INTO `m3`.`systemfields` (`fieldid`, `modid`, `fieldname`, `is_hidden`, `pack_module`, `addon`, `is_required`) VALUES (NULL, '2', 'recording', '0', '0', '0', '0');

ALTER TABLE  `user` ADD  `deviceid` VARCHAR( 100 ) NOT NULL AFTER  `authkey` ;
ALTER TABLE  `user` ADD  `gcmkey_track` VARCHAR( 300 ) NOT NULL AFTER  `deviceid` ;
ALTER TABLE  `user` ADD  `gcmkey_mcube` VARCHAR( 300 ) NOT NULL AFTER  `gcmkey_track` ;
ALTER TABLE  `user` ADD  `recording` TINYINT NOT NULL AFTER  `gcmkey_track`;
ALTER TABLE  `1_mtracker` CHANGE  `pulse`  `pulse` BIGINT( 255 ) NOT NULL ;
}
?>
