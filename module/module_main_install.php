<?php
/**
 * 安裝功能
 *
 * 后台-安裝功能
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2009-7-8 13:39:16
 */

$func_name="install";
$func_sort[$func_name]=2;	//在工具列的排序,越大越後面
$func[$func_name]['config']['name']=$base->message("Install");
$func[$func_name]['subfunc'][1]=$base->message("Create");


function install_1($aFormValues,$objResponse)
{
	global $template,$base,$db;
	if(!is_writable("../"))
	{
		$objResponse->addAlert('../ Cannot writable');
	}
	else
	{
		if (!extension_loaded('mcrypt')) {
			$objResponse->addAlert('mcrypt not loaded!');
			return $objResponse;
			exit;
		}
		else if(!function_exists("mcrypt_get_block_size"))
		{
			$objResponse->addAlert('Call to undefined function mcrypt_get_block_size()');
			return $objResponse;
			die;
		}

		$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/install_create_db.htm'));
		$template->assign_vars(array(
				'dbname'=>'common',
				'dbhost'=>'localhost'
			));
		$content=$template->pparse2('body21',$base);
		$objResponse->addAssign("mngcontain","innerHTML",$content);
	}
	return $objResponse;
}


function install_db_act($aFormValues,$objResponse)
{
	global $root_path;
	$dbtype=$aFormValues['dbtype'];
	$dbhost=$aFormValues['dbhost'];
	$dbuser=$aFormValues['dbuser'];
	$dbpasswd=$aFormValues['dbpasswd'];
	$dbname=trim($aFormValues['dbname']);

	/*
	if($msdb=mssql_connect($dbhost,$dbuser,$dbpasswd))
	{
		$objResponse->addAlert("OK");
	}
	else
	{
		$objResponse->addAlert($dbtype." module not found!");
	}
	return $objResponse;
	*/

	if(file_exists($root_path.common_library_path.$dbtype.'.php'))
	{
		include($root_path.common_library_path.$dbtype.'.php');
	}
	else
	{
		$objResponse->addAlert($dbtype." module not found!");
		return $objResponse;
	}

	$db= new sql_db();

	if($db->sql_db($dbhost, $dbuser, $dbpasswd, false, false))
	{

		$db->sql_query("CREATE DATABASE IF NOT EXISTS `".$dbname."` ;",FALSE,(__FILE__)."(".__LINE__.")");
		$content3='<?php'.chr(10);
		$content3.='$dbtype="'.$dbtype.'";'.chr(10);
		$content3.='$dbhost="'.$dbhost.'";'.chr(10);
		$content3.='$dbuser="'.$dbuser.'";'.chr(10);
		$content3.='$dbpasswd="'.$dbpasswd.'";'.chr(10);
		$content3.='$dbname="'.$dbname.'";'.chr(10);
		$content3.='?>'.chr(10);
		@unlink('../config_db.php');
		@file_put_contents('../config_db.php',$content3);
		unset($content3);
		return create_admin($aFormValues,$objResponse);
	}
	else
	{
		$objResponse->addAlert("Cannot connect to database".$dbhost." - ".$dbuser."  -".$dbpasswd." @ ".$dbtype);
		return $objResponse;
	}


}


function create_admin($aFormValues,$objResponse)
{
	global $template,$base,$db;

	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/install_create_admin.htm'));
	$template->assign_vars(array(
				'email'=>'',
				'Password'=>''
			));
	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	return $objResponse;
}

function create_admin_act($aFormValues,$objResponse)
{

	//

	global $db,$tdes;
	include('module_common.php');
	sync_table();
	$login_name=$aFormValues['login_name'];
	$user_id=$aFormValues['user_id'];
	$email=$aFormValues['email'];
	$password=md5(trim($aFormValues['password']));
	$BWDRMServerKey=trim($aFormValues['BWDRMServerKey']);




	$sql="INSERT INTO `account`
	(`user_id`, `login_name`, `password`, `reg_date`, `update_date`, `email`, `disabled`)
	VALUES ('100', '".$login_name."', '".$password."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '".$email."', '0');";
	$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
	$sql="INSERT INTO `power_group` ( `power_type`, `user_id`, `point`) VALUES ( '100', '100','');";
	$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");

	$BWDRM_enc_Server_Key=$tdes->des_handle($BWDRMServerKey,md5('BWDRM'),'enc');

	$content3='<?php'.chr(10);
	$content3.='$BWDRMServerKey="'.$BWDRM_enc_Server_Key.'";'.chr(10);
	$content3.='?>'.chr(10);
	@unlink('../config_bwkey.php');
	@file_put_contents('../config_bwkey.php',$content3);
	unset($content3);
	$objResponse->addRedirect('manager.php');
	return $objResponse;
}

?>