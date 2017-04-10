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


$func_name="user";
$func_sort[$func_name]=2;	//在工具列的排序,越大越後面
$func[$func_name]['config']['name']=$base->message("User");
$func[$func_name]['subfunc'][1]=$base->message("UserManage");
//$func[$func_name]['subfunc'][5]=$base->message("UserPoint");
//$func[$func_name]['subfunc'][2]=$base->message("UserGroup");
//$func[$func_name]['subfunc'][4]=$base->message("AutoAddUser");

/**
 * 將資料表同步成最新的
 *
 * @param unknown_type $aFormValues
 * @param unknown_type $objResponse
 */



function user_1($aFormValues,$objResponse)
{
	return user_list($aFormValues,$objResponse);
}

function user_list($aFormValues,$objResponse)
{
	global $template,$base,$db;
	//處理條件變數
	if($FilterRow=returnFilterRow($aFormValues)) $template->assign_vars($FilterRow);
	$objResponse=initFilterRow($aFormValues,$objResponse);
	//----

	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/user_list.htm'));

	//讀取使用者列表
	$sql_base="SELECT `account`.*,`power_group`.`power_type` FROM `account`
	LEFT JOIN `power_group` ON `power_group`.`user_id` = `account`.`user_id`
	WHERE 1 ";


	if($aFormValues['s_keyword'])
	{
		$sql_base.=" AND (`account`.`login_name` LIKE '%".$aFormValues['s_keyword']."%' OR `account`.`email` LIKE '%".$aFormValues['s_keyword']."%')";
		$template->assign_vars(array('s_keyword'=>$aFormValues['s_keyword']));
	}


	//排序
	switch($FilterRow['f_order'])
	{
		case "login_name":
			$sql_base.=" ORDER BY `login_name`";
			break;

		case "email":
			$sql_base.=" ORDER BY `email`";
			break;

		case "reg_date":
			$sql_base.=" ORDER BY `reg_date`";
			break;

		case "update_date":
			$sql_base.=" ORDER BY `update_date`";
			break;

		default:
			$sql_base.=" ORDER BY `user_id`";
			break;
	}


	//將排序的欄位加粗
	$template->assign_vars(array('order_'.$FilterRow['f_order']=>'bold'));


	//使用分頁
	#取得全部列數
	if(!$result=$db->sql_query($sql_base,FALSE,(__FILE__)."(".__LINE__.")"))
	{
		//如果操作失敗,有可能是沒有power_group
		//include('module_main_install.php');

		return create_admin($aFormValues,$objResponse);
	}
	$totalRows=$db->sql_numrows($result);


	#取得目前頁數,數據庫查詢結果
	$page=getCurrentPage($aFormValues['gotopage'],C_PagePerRow,$totalRows);
	$func='user_list';
	$Pagination=getPageNav($page,$totalRows,$func);
	$result=getPageSqlResult($sql_base,C_PagePerRow,$page);
	#取得目前頁數,數據庫查詢結果

	while($row=$db->sql_fetchrow($result))
	{
		$template->assign_block_vars('List',$row);
	}

	//載入字詞庫以及相關參數
	$template->assign_vars(array(
		'nav'=>$nav,
		'Pagination'=>$Pagination,
	));

	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	return $objResponse;
}



function remove_user_confirm_del($aFormValues,$objResponse)
{
	global $db;

	//刪除所選的項目
	$sql="DELETE FROM `account` WHERE `user_id` IN ( ".implode(',',$aFormValues['user_id']).")";
	$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");

	//刪除完成,返回使用者選單
	return user_list($aFormValues,$objResponse);
}

function show_user_edit($aFormValues,$objResponse)
{

	global $template,$base,$db,$_SiteInfo;
	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/user_info_edit.htm'));

	if($_SiteInfo['FUNC_TIMEPOINTMODE']=='1')
	{
		$template->assign_block_vars('FUN_TIME',array());
	}

	$FilterRow=returnFilterRow($aFormValues);
	$objResponse=initFilterRow($aFormValues,$objResponse);

	if($FilterRow['f_user_id']=="0" || !$FilterRow['f_user_id'])
	{	//新的
		$template->assign_vars(array('user_id'=>'0'));
	}
	else
	{	//舊的

		//讀取使用者列表
		$sql_base="SELECT *  FROM `account`
		LEFT JOIN `power_group` ON `power_group`.`user_id` = `account`.`user_id`
		WHERE 1 AND `account`.`user_id` = '".$FilterRow['f_user_id']."'";
		$result=$db->sql_query($sql_base,FALSE,(__FILE__)."(".__LINE__.")");
		$info=$db->sql_fetchrow($result);
		//因為有可能在power_group沒有值,所以要特別強調user_id
		$info['user_id']=$FilterRow['f_user_id'];

		//若是已使用,則不能再更改點數
		$info['userpoint_disabled']=($info['expirydate'])?'disabled':'';
		$info['userpoint_used']=($info['expirydate'])?'':'none';
		$template->assign_vars($info);
		$user_type_num=$info['power_type'];
	}


	$sql="SELECT DISTINCT(`power_type`) FROM `power_group`";

	$lang_manager[0]=$base->message('Guest');
	$lang_manager[100]=$base->message('Manager');

	$result=$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
	while($row2=$db->sql_fetchrow($result))
	{
		$template->assign_block_vars('USER_TYPE',array(
			'power_type'=>$row2['power_type'],
			'user_type'=>$lang_manager[$row2['power_type']],
			'selected'=>($user_type_num==$row2['power_type'])?' selected':'',
		));
	}

	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	return $objResponse;
}


/**
 * 儲存用戶
 *
 * @param unknown_type $aFormValues
 * @param unknown_type $objResponse
 */
function user_save($aFormValues,$objResponse)
{

	global $db,$user,$base;
	$user_id=0;
	//先檢查有沒有重覆
	$sql="SELECT *
	FROM `account` WHERE `user_id` != ".intval($aFormValues['user_id'])."
	AND (`login_name` LIKE '".$aFormValues['login_name']."'	OR `email` LIKE '".$aFormValues['email']."')";

	$result=$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
	$row=$db->sql_fetchrow($result);
	//$objResponse->addAssign('debug','innerHTML',$sql);
	$user_id=0;
	if($row['user_id'])
	{
		$objResponse->addAlert($base->message('m_UserDateDuplicate'));
		return $objResponse;
	}
	else
	{
		//沒重覆,修改
		if($aFormValues['user_id'])
		{
			//更新
			$sql="UPDATE `account` SET `login_name` = '".trim($aFormValues['login_name'])."',`email` = '".trim($aFormValues['email'])."' ";
			if(trim($aFormValues['password']))
			{
				$sql.=",`password` = '".md5(trim($aFormValues['password']))."'";
			}
			$sql.=" WHERE `user_id` =".$aFormValues['user_id']." LIMIT 1 ;";
			$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
			$user_id=$aFormValues['user_id'];
		//	$objResponse->addAssign('debug','innerHTML',$sql);
		}
		else
		{	//新增
			$sql="INSERT INTO `account` (`login_name` ,`password` ,`reg_date` ,`update_date` ,`email` ,`disabled` ) VALUES
			('".$aFormValues['login_name']."', '".md5(trim($aFormValues['password']))."', '".date('Y-m-d H:i:s')."' , '".date('Y-m-d H:i:s')."' , '".$aFormValues['email']."', '".$aFormValues['disabled']."');";
			$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
			$user_id=$db->sql_nextid();
		}
	}

	//確認權限資料表是否有寫入
	$check_ext="SELECT * FROM `power_group` WHERE `user_id` ='$user_id'";

	$result_ext=$db->sql_query($check_ext,FALSE,(__FILE__)."(".__LINE__.")");
	$row_ext=$db->sql_fetchrow($result_ext);
	if($row_ext['user_id'])
	{	//若之前存在,則更新
		$sql="UPDATE `power_group` SET `power_type`='".$aFormValues['power_type']."',point='".$aFormValues['point']."' WHERE  `user_id`='".$user_id."';";
	}
	else
	{	//未存在,則更新
		$sql="INSERT INTO `power_group` (`power_type` , `user_id`, `point`) VALUES ('".$aFormValues['power_type']."','".$user_id."','".$aFormValues['point']."');";

	}


	$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");

	return user_1($aFormValues,$objResponse);
}


function user_2($aFormValues,$objResponse)
{
	$objResponse->addAlert('Under Construction');
	return $objResponse;
}

function user_4($aFormValues,$objResponse)
{
	return auto_add_user($aFormValues,$objResponse);
}


function auto_add_user($aFormValues,$objResponse)
{
	global $db,$user,$base;

	$regnum=substr(strtoupper(md5(rand(0,10000))),2,8);
	$regnum=str_replace('O','B',$regnum);
	$new_username=str_replace('0','W',$regnum);
	$new_email=$new_username.'@bestwise.biz';
	$point=36000;
	//先檢查有沒有重覆
	$sql="SELECT *
	FROM `account` WHERE 1 AND (`login_name` LIKE '".$new_username."'	OR `email` LIKE '".$new_email."@bestwise.biz')";

	$result=$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
	$row=$db->sql_fetchrow($result);
	//$objResponse->addAssign('debug','innerHTML',$sql);
	$user_id=0;
	if($row['user_id'])
	{

	}
	else
	{
		//新增
		$sql="INSERT INTO `account` (`login_name` ,`password` ,`reg_date` ,`update_date` ,`email` ,`disabled` ) VALUES
		('".$new_username."', '".md5(trim($new_username))."', '".date('Y-m-d H:i:s')."' , '".date('Y-m-d H:i:s')."' , '".$new_email."', '0');";
		$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
		$user_id=$db->sql_nextid();

	}

	//確認權限資料表是否有寫入
	$check_ext="SELECT * FROM `power_group` WHERE `user_id` ='$user_id'";

	$result_ext=$db->sql_query($check_ext,FALSE,(__FILE__)."(".__LINE__.")");
	$row_ext=$db->sql_fetchrow($result_ext);
	if($row_ext['user_id'])
	{	//若之前存在,則更新
		$sql="UPDATE `power_group` SET `power_type`='0',`point`='".$point."' WHERE  `user_id`='".$user_id."';";
	}
	else
	{	//未存在,則更新
		$sql="INSERT INTO `power_group` (`power_type` , `user_id`, `point`) VALUES ('0','".$user_id."','".$point."');";

	}


	$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");

	return user_1($aFormValues,$objResponse);
}

function user_point($aFormValues,$objResponse)
{
	global $template,$base,$db;
	//處理條件變數
	if($FilterRow=returnFilterRow($aFormValues)) $template->assign_vars($FilterRow);
	$objResponse=initFilterRow($aFormValues,$objResponse);
	//----

	$template->set_filenames(array('body21' => '../templates/'.tpl_style.'/user_point.htm'));

	//讀取使用者列表
	$sql_header="SELECT SUM(point) AS `point` FROM `account` ";
	$sql_base_header="SELECT `account`.*,`power_group`.`power_type`,`power_group`.`point`,`power_group`.`expirydate`,`power_group`.`pg_id`,`power_group`.`unit`,`power_group`.`IP`  FROM `account` ";

	$sql_base.="LEFT JOIN `power_group` ON `power_group`.`user_id` = `account`.`user_id`
	WHERE 1 ";

	if($aFormValues['s_usedunit'])
	{
		$sql_base.=" AND `unit` LIKE '%".trim($aFormValues['s_usedunit'])."%'";
	}

#創建時間
	if($aFormValues['begin_s_date_text'])
	{
		if($aFormValues['begin_e_date_text'])
		{
			if(compare_date($aFormValues['begin_s_date_text'],$aFormValues['begin_e_date_text']))
			{
				$time1=$aFormValues['begin_s_date_text']." 00:00:00";
				$time2=$aFormValues['begin_e_date_text']." 23:59:59";
			}
			else
			{
				$time1=$aFormValues['begin_e_date_text']." 00:00:00";
				$time2=$aFormValues['begin_s_date_text']." 23:59:59";
			}

			$sql_base.=" AND `power_group`.`expirydate` BETWEEN '".$time1."' AND '".$time2."'";
		}
		else
		{
			$sql_base.=" AND `power_group`.`expirydate` >= '".$FilterRow['begin_s_date_text']." 00:00:00'";
		}
	}
	else if($aFormValues['begin_e_date_text'])
	{
		if(!$aFormValues['begin_s_date_text'])
		{
			$sql_base.=" AND `power_group`.`expirydate` <= '".$aFormValues['begin_e_date_text']." 23:59:59'";
		}
	}

	//排序
	switch($FilterRow['f_order'])
	{
		case "login_name":
			$sql_base.=" ORDER BY `login_name` DESC";
			break;

		case "order_point":
			$sql_base.=" ORDER BY `point` DESC";
			break;

		case "expirydate":
			$sql_base.=" ORDER BY `expirydate` DESC";
			break;

		case "ip":
			$sql_base.=" ORDER BY `ip` DESC";
			break;

		case "unit":
			$sql_base.=" ORDER BY `unit` DESC";
			break;

		default:
			$sql_base.=" ORDER BY `expirydate` DESC";
			break;
	}

	//將排序的欄位加粗
	$template->assign_vars(array('order_'.$FilterRow['f_order']=>'bold'));


	$sql_total=$sql_header.$sql_base;
	$result=$db->sql_query($sql_total,FALSE,(__FILE__)."(".__LINE__.")");
	$Rows=$db->sql_fetchrow($result);
	$total_rec_length=$Rows['point'];

	$sql_base=$sql_base_header.$sql_base;
	$objResponse->addAssign("tempsql","value",$sql_base);
	//使用分頁
	#取得全部列數
	$result=$db->sql_query($sql_base,FALSE,(__FILE__)."(".__LINE__.")");
	$totalRows=$db->sql_numrows($result);

	#取得目前頁數,數據庫查詢結果
	$page=getCurrentPage($aFormValues['gotopage'],C_PagePerRow,$totalRows);
	$func=__FUNCTION__;
	$Pagination=getPageNav($page,$totalRows,$func);
	$result=getPageSqlResult($sql_base,C_PagePerRow,$page);
	#取得目前頁數,數據庫查詢結果

	while($row=$db->sql_fetchrow($result))
	{
		$template->assign_block_vars('List',$row);
	}

	//載入字詞庫以及相關參數
	$template->assign_vars(array(
		'nav'=>$nav,
		'Pagination'=>$Pagination,
		'STATISTICS'=>sprintf($base->message("f_PointPageStatus"),$totalRows,$base->sec_to_timestring($total_rec_length)),
	));
	$template->assign_vars($aFormValues);
	$content=$template->pparse2('body21',$base);
	$objResponse->addAssign("mngcontain","innerHTML",$content);
	return $objResponse;
}

	function compare_date($f_datatime,$s_datatime)
	{
		$f_time_row=explode(' ',$f_datatime);
		$f_time_row_detail1=explode('-',$f_time_row[0]);
		if($f_time_row[1])
		$f_time_row_detail2=explode(':',$f_time_row[1]);

		$s_time_row=explode(' ',$s_datatime);
		$s_time_row_detail1=explode('-',$s_time_row[0]);
		if($s_time_row[1])
		$s_time_row_detail2=explode(':',$s_time_row[1]);

		foreach($f_time_row_detail1 as $index => $val)
		{
			if(intval($val) < intval($s_time_row_detail1[$index]))
			{
				return true;
			}
			else if(intval($val) > intval($s_time_row_detail1[$index]))
			{
				return false;
			}

		}

		if($f_time_row_detail2)
		{
			foreach($f_time_row_detail2 as $index => $val)
			{
				if(intval($val) < intval($s_time_row_detail2[$index]))
				{
					return true;
				}
				else if(intval($val) > intval($s_time_row_detail2[$index]))
				{
					return false;
				}
			}
		}
		return true;
	}



/**
 * 匯出學習紀錄
 *
 * @param unknown_type $aFormValues
 * @param unknown_type $objResponse
 * @return unknown
 */
function export_point_xls($aFormValues,$objResponse)
{
	global $root_path,$base,$db;
	$root_path='../';
	set_include_path($root_path.'Classes_Excel/');
	include 'PHPExcel.php';
	$objExcel = new PHPExcel();
	include 'PHPExcel/Writer/Excel5.php';     // 用于其他低版本xls
	$objWriter = new PHPExcel_Writer_Excel5($objExcel);     // 用于其他版本格式

	//*************************************
	//设置当前的sheet索引，用于后续的内容操作。
	//一般只有在使用多个sheet的时候才需要显示调用。
	//缺省情况下，PHPExcel会自动创建第一个sheet被设置SheetIndex=0
	$objExcel->setActiveSheetIndex(0);
	$objActSheet = $objExcel->getActiveSheet();

	//设置当前活动sheet的名称
	$objActSheet->setTitle($base->message("Point"));

	//*************************************
	//设置单元格内容
	//
	//由PHPExcel根据传入内容自动判断单元格内容类型

	//匯出的資料欄位與名稱
	$objActSheet->setCellValue('A1', $base->message('User'));  // 字符串内容
	$objActSheet->setCellValue('B1', $base->message('UserPoint'));  // 字符串内容
	$objActSheet->setCellValue('C1', $base->message('UserPoint'));  // 字符串内容
	$objActSheet->setCellValue('D1', $base->message('ExpiryDate'));  // 字符串内容
	$objActSheet->setCellValue('E1', $base->message('IP'));  // 字符串内容
	$objActSheet->setCellValue('F1', $base->message('UsedUnit'));  // 字符串内容

	$sql=$aFormValues['tempsql'];
	$result=$db->sql_query($sql,FALSE,(__FILE__)."(".__LINE__.")");
	$rowCount=1;
	while($row=$db->sql_fetchrow($result))
	{
		$rowCount++;
		$objActSheet->setCellValue('A'.$rowCount, $row['login_name']);  // 字符串内容
		$objActSheet->setCellValue('B'.$rowCount, $row['point']);  // 字符串内容
		$objActSheet->setCellValue('C'.$rowCount, $base->sec_to_timestring($row['point']));  // 字符串内容
		$objActSheet->setCellValue('D'.$rowCount, $row['expirydate']);  // 字符串内容
		$objActSheet->setCellValue('E'.$rowCount, $row['IP']);  // 字符串内容
		$objActSheet->setCellValue('F'.$rowCount, $row['unit']);  // 字符串内容
	}

	//*************************************
	//输出内容
	//
	@mkdir("../tmp");
	$FileName=md5(time()).'.xls';
	$outputFileName = "../tmp/".$FileName;
	//到文件
	$objWriter->save($outputFileName);
	$objResponse->addScriptCall("window.open","exportcsv.php?csv=".$FileName,"newwindow".time(),"height=200, width=200, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, status=no");


	return $objResponse;

}

?>