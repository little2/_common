<?php
/**
 * 公司管理
 *
 * 后台-公司管理的功能
 *.
 * @author Ryan Chiu <[email]ryan@inetar.net[/email]>
 * @version 1.0
 * @date 2011-9-2 09:39:16
 */

/*
$func_name="company";
$func_sort[$func_name]=3;	//在工具列的排序,越大越後面
$func[$func_name]['config']['name']=$base->message("Company");
$func[$func_name]['subfunc'][1]=$base->message("CompanyManage");	
*/

/**
 * CompanyManage
 *
 * @param unknown_type $aFormValues
 * @param unknown_type $objResponse
 * @return unknown
 */
function company_1($aFormValues,$objResponse)
{	
	$objResponse->addAssign("mngcontain","innerHTML",'<font color="black"><b>Under Construction</b></font>');		
	return $objResponse;
}


?>