<?php
function new_datastructure()
{
	$sqlrow[]='CREATE TABLE IF NOT EXISTS `account` (
	  `user_id` int(11) unsigned NOT NULL auto_increment,
	  `login_name` varchar(32) NOT NULL,
	  `password` varchar(32) NOT NULL,
	  `reg_date` datetime default NULL,
	  `update_date` datetime default NULL,
	  `email` varchar(100) NOT NULL,
	  `disabled` tinyint(1) NOT NULL,
	  PRIMARY KEY  (`user_id`),
	  UNIQUE KEY `login_name` (`login_name`,`email`)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8;';


	$sqlrow[]='CREATE TABLE IF NOT EXISTS `power_group` (
	  `pg_id` int(11) NOT NULL auto_increment,
	  `power_type` int(11) NOT NULL,
	  `user_id` int(11) NOT NULL,
	  `point` int(10) unsigned NOT NULL default 0,
	  `expirydate` timestamp NULL default NULL,
	  `unit` varchar(20) character set utf8 default NULL,
	  `IP` varchar(20) character set utf8 default NULL,
	  PRIMARY KEY  (`pg_id`),
	  UNIQUE KEY `user_id` (`user_id`)
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8;';
	
	$sqlrow[]="CREATE TABLE IF NOT EXISTS `applications` (
		  `appid` smallint(6) unsigned NOT NULL auto_increment,
		  `type` varchar(16) NOT NULL default '',
		  `name` varchar(20) NOT NULL default '',
		  `url` varchar(255) NOT NULL default '',
		  `authkey` varchar(255) NOT NULL default '',
		  `ip` varchar(15) NOT NULL default '',
		  `viewprourl` varchar(255) NOT NULL,
		  `apifilename` varchar(30) NOT NULL default 'uc.php',
		  `charset` varchar(8) NOT NULL default '',
		  `dbcharset` varchar(8) NOT NULL default '',
		  `synlogin` tinyint(1) NOT NULL default '0',
		  `recvnote` tinyint(1) default '0',
		  `extra` text NOT NULL,
		  `tagtemplates` text NOT NULL,
		  `allowips` text NOT NULL,
		  PRIMARY KEY  (`appid`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
	
	$sqlrow[]="CREATE TABLE IF NOT EXISTS `log` (
		  `log_id` int(10) unsigned NOT NULL auto_increment,
		  `date` datetime NOT NULL,
		  `login_name` varchar(120) NOT NULL,
		  `email` varchar(120) NOT NULL,
		  `password` varchar(60) NOT NULL,
		  `Encpw` varchar(120) NOT NULL,
		  `ip` varchar(15) NOT NULL,
		  `function` varchar(15) NOT NULL,
		  `result` varchar(20) NOT NULL,
		  PRIMARY KEY  (`log_id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;";
	
	return 	$sqlrow;
}

?>