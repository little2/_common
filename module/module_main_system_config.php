<?php
/**
 * 我的資訊管理
 *
 * 后台-使用者個人資訊管理的功能
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2009-7-8 13:39:16
 */


	$func_name="system";
	$func_sort[$func_name]=199;	//在工具列的排序,越大越後面
	$func[$func_name]['config']['name']=$base->message("System");
	$func[$func_name]['subfunc'][1]=$base->message("SystemBasicConfig");
	$func[$func_name]['subfunc'][2]=$base->message("EmailSet");



function system_1($aFormValues,$objResponse)
{

	return system_basic($aFormValues,$objResponse);
}

function system_2($aFormValues,$objResponse)
{

	return show_smtp($aFormValues,$objResponse);
}

function system_basic($aFormValues,$objResponse)
{
	global $template,$db,$base,$_SiteInfo;
	$template->assign_vars(array(
			'SystemBasicConfig'=>$base->message('SystemBasicConfig'),
			'Edtion'=>$_SiteInfo['EDTION'],
			'Version'=>$_SiteInfo['VERSION'],
			'CurrentTime'=>date("Y/m/d H:i:s")
	));



	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/system_basic_config.htm'));
	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	$objResponse->addScriptCall('fresh_now_time_start','systemtime');
	return $objResponse;
}


function show_smtp($aFormValues,$objResponse)
{
	//<!-- Update Date: 2012.4.12 -->
	global $template,$db,$base,$func,$root_path;
	@include($root_path.'/config_email.php');

	if($FilterRow=returnFilterRow($aFormValues)) $template->assign_vars($FilterRow);
	$objResponse=initFilterRow($aFormValues,$objResponse);


	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/smtp_info.htm'));

	$nav="<a href=\"javascript:CallXajaxByName('system_1','mng')\">".$func['system']['config']['name']."</a>";
	$nav.=" > <a href=\"javascript:CallXajaxByName('show_smtp','mng')\">".$func['system']['subfunc'][2]."</a>";



	$smtp_row["email_smtpServer"]=$_SiteInfo["EMAIL_SMTPSERVER"];
	$smtp_row["email_username"]=$_SiteInfo["EMAIL_USERNAME"];
	$smtp_row["email_password"]=$_SiteInfo["EMAIL_PASSWORD"];
	$smtp_row["email_port"]=$_SiteInfo["EMAIL_PORT"];
	$smtp_row["email_sender"]=$_SiteInfo["EMAIL_SENDER"];
	$smtp_row["email_ssl"]=$_SiteInfo["EMAIL_SSL"];
	$smtp_row["email_backup"]=$_SiteInfo["EMAIL_BACKUP"];
	$smtp_row["selected_ssh_".$smtp_row["email_ssl"]]='selected';
	$template->assign_vars($smtp_row);

	//載入相關參數
	$template->assign_vars(array('nav'=>$nav));


	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);

	return $objResponse;


}

//儲存設定
function save_smtp($aFormValues,$objResponse)
{
	global $template,$db,$base,$root_path;

    if(!isset($aFormValues['email_sender'])||$aFormValues['email_sender']=="")
    	$aFormValues['email_sender'] = $aFormValues['email_username'];
	$content3='<?php'.chr(10);
	$content3.='$_SiteInfo["EMAIL_SMTPSERVER"]="'.$aFormValues['email_smtpServer'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_USERNAME"]="'.$aFormValues['email_username'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_BACKUP"]="'.$aFormValues['email_backup'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_PASSWORD"]="'.$aFormValues['email_password'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_PORT"]="'.$aFormValues['email_port'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_SENDER"]="'.$aFormValues['email_sender'].'";'.chr(10);
	$content3.='$_SiteInfo["EMAIL_SSL"]="'.$aFormValues['email_ssl'].'";'.chr(10);
	$content3.='?>'.chr(10);

	@unlink($root_path.'/config_email.php');
	@file_put_contents($root_path.'/config_email.php',$content3);
	unset($content3);
	$objResponse->addAlert($base->message('Success'));
	return $objResponse;

}


/*

//寄送測試信
function send_test($aFormValues,$objResponse)
{
	global $root_path,$base;
	//使用的SMTP資料

	if($aFormValues['receiver'])
	{

		if(!file_exists("../includes/class_email.php"))
		{
			$objResponse->addAlert("class_email不存在");
			return $objResponse;
		}
		include_once("../include/class_email.php");
		//include_once($root_path.common_library_path."class_email.php");
		$emailer = new emailer();


		//使用的SMTP資料

		$emailer->smtpServer = $aFormValues['email_smtpServer'];
		$emailer->username = $aFormValues['email_username'];
		$emailer->password = $aFormValues['email_password'];
		$emailer->usertitle = $aFormValues['email_sender'];
		$emailer->port=$aFormValues['email_port'];
		$emailer->ssl=$aFormValues['email_ssl'];
		$emailer->to = $aFormValues['receiver'];
		$emailer->message='这是来自'.productname.'的测试邮件';
		$mail_subject = "=?UTF-8?B?".base64_encode('这是来自'.productname.'的测试邮件 At '.date("Y-m-d H:i:s"))."?=";
		$emailer->set_subject(str_replace("\'", "''", $mail_subject));

		if($emailer->ssl)
		{
			if(!extension_loaded('openssl'))
			{
				$objResponse->addAlert("You probably need to enable the PHP extension for SSL");
				return $objResponse;
			}
		}



		if($emailer->Send())
		{
			$objResponse->addAlert("已成功寄送");
		}
		else
		{
			$objResponse->addAlert("失敗");
		}


	}
	else
	{
		$objResponse->addAlert("请輸入测試寄送之收件人郵件位址");

	}
	$objResponse->addAssign('test_bt','style.display','');
	return $objResponse;
}*/
//寄送測試信
function send_test($aFormValues,$objResponse)
{
	global $root_path,$base;
	//使用的SMTP資料

	if($aFormValues['receiver'])
	{

		if(!file_exists($root_path.common_library_path."class_email.php"))
		{
			$objResponse->addAlert("class_email不存在");
			return $objResponse;
		}
		include_once($root_path.common_library_path."class_email.php");

		$emailer = new emailer();


		//使用的SMTP資料

		$emailer->smtpServer = $aFormValues['email_smtpServer'];
		$emailer->username = $aFormValues['email_username'];
		$emailer->password = $aFormValues['email_password'];
		$emailer->usertitle = $aFormValues['email_sender'];
		$emailer->port=$aFormValues['email_port'];
		$emailer->ssl=$aFormValues['email_ssl'];
		$emailer->to = $aFormValues['receiver'];
		//$emailer->message='这是来自'.productname.'的测试邮件';
		//$mail_subject = "=?UTF-8?B?".base64_encode('这是来自'.productname.'的测试邮件 At '.date("Y-m-d H:i:s"))."?=";
		$emailer->message='这是来自User Center的测试邮件';
		$mail_subject = "=?UTF-8?B?".base64_encode('这是来自User Center的测试邮件 At '.date("Y-m-d H:i:s"))."?=";
		$emailer->set_subject(str_replace("\'", "''", $mail_subject));

		if($emailer->ssl)
		{
		    if(!extension_loaded('openssl'))
	    	{
	    		$objResponse->addAlert("You probably need to enable the PHP extension for SSL");
	    		return $objResponse;
	    	}
		}



		if($emailer->Send())
		{
			$objResponse->addAlert("已成功寄送");
		}
		else
		{
			$objResponse->addAlert("失敗");
		}


	}
	else
	{
		$objResponse->addAlert("请輸入测試寄送之收件人郵件位址");

	}
	$objResponse->addAssign('test_bt','style.display','');
	return $objResponse;
}


function update_version($aFormValues,$objResponse)
{
	global $base,$db;
	@mkdir("../update");
	if(file_exists('../update/active_tag'))
	{
		$update_date=file_get_contents('../update/active_tag');
		$objResponse->addAlert('請等待系統排程進行更行('.$update_date.')');
	}
	else
	{
		include("../includes/class_maintain.php");
		$maintain=new maintain();
		$maintain->db=$db;
		$maintain->sync_table();
		
		
		file_put_contents("../update/active_tag",date("Y-m-d H:i:s"));
		$objResponse->addAlert('請等待系統排程進行更行');
	}
	return $objResponse;
}



?>