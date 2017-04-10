<?php
/**
 * 使用者管理
 *
 * 后台-使用者管理的功能
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2009-7-8 13:39:16
 */


$func_name="auth";
$func_sort[$func_name]=9;	//在工具列的排序,越大越後面
$func[$func_name]['config']['name']=$base->message("Login");
$func[$func_name]['subfunc'][1]=$base->message("Login");



function auth_1($aFormValues,$objResponse)
{
	global $template,$base,$db;
	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/user_login.htm'));
	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	return $objResponse;
}

function check_auth($aFormValues,$objResponse)
{
	global $template,$base,$db;
	$sql="SELECT * FROM `account`
	LEFT JOIN power_group ON `power_group`.`user_id`=`account`.`user_id`
	WHERE `account`.`password` LIKE '".trim(md5($aFormValues['password']))."'
	AND `account`.`login_name` LIKE '".trim(($aFormValues['login_name']))."'
	AND `account`.`disabled` = 0
	AND `power_group`.`power_type` = '100'";
	if($reulst=$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")"))
	{
		$row=$db->sql_fetchrow($result);
		//$objResponse->addAssign('debug','innerHTML',$sql);
		if($row['user_id'])
		{
			$_SESSION[productname]['user_id']=$row['user_id'];
			$objResponse->addRedirect('manager.php');
		}
		else
		{
			$objResponse->addAlert('ERROR');
		}
	}
	else
	{
		return create_admin($aFormValues,$objResponse);
	}
	return $objResponse;
}



?>