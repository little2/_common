<?php

require_once "facebook.php";

/**
 * Extends the BaseFacebook class with the intent of using
 * PHP sessions to store user ids and access tokens.
 */
class myFacebook extends Facebook
{
	
	public function __construct($config) {
		if (!session_id()) {
			session_start();
		}
		parent::__construct($config);
		if (!empty($config['sharedSession'])) {
			$this->initSharedSession();
		}
	}
	
	function setdb(&$db)
	{
		$this->db=$db;
	}
	
	function get_user_by_email($user_email)
	{
		$sql="SELECT `user_sns`.*,`user`.*   FROM `user` 
		LEFT JOIN `user_sns` ON `user_sns`.`user_id` = `user`.`user_id` 
		WHERE `user_email` LIKE  '".$user_email."'";
		$result=$this->db->sql_query($sql);
		
		$row=$this->db->sql_fetchrow($result);
		return ($row);
	}
	
	
	
	function set_userinfo($user_id,$local_user_info,$facebook_user_profile)
	{
		/*
		 * Array ( [id] => 100000587907659 [name] => 邱榮嘉 [first_name] => 榮嘉 [last_name] => 邱 [link] => https://www.facebook.com/inetar.net [username] => inetar.net 
		 * [birthday] => 05/13/1980 [gender] => male [email] => ryan@inetar.net [timezone] => 8 [locale] => zh_TW [verified] => 1 [updated_time] => 2013-08-19T11:23:58+0000 )
		 */
		
		$user_info=$local_user_info;
		if(!$user_info['user_fb_id']) $user_info['new_fb_id']=true;
		$user_info['user_firstname']=$facebook_user_profile['first_name'];
		$user_info['user_lastname']=$facebook_user_profile['last_name'];
		$user_info['user_fb_id']=$facebook_user_profile['id'];
		$user_info['user_fb_link']=$facebook_user_profile['link'];
		$user_info['user_timezone']=$facebook_user_profile['timezone'];
		$user_info['user_locale']=$facebook_user_profile['locale'];
		$user_info['user_email']=$facebook_user_profile['email'];
		
		switch($facebook_user_profile['gender'])
		{
			case "male":
				$user_info['user_sex']="1";
				break;
			case "female":
				$user_info['user_sex']="2";
				break;
				
		}
		if($facebook_user_profile['birthday'])
		{
			$birthday=explode("/",$facebook_user_profile['birthday']);
			$user_info['user_birth_year']=$birthday[2];
			$user_info['user_birth_month']=$birthday[0];
			$user_info['user_birth_day']=$birthday[1];
		}
		

		if(!$user_info['user_id'])
		{
			unset($user_info['user_id']);
			$result=$this->db->dbaction($user_info,'user','I');		
			$user_info['user_id']=$result['nextid'];
		
		}
		else
		{
			
			$result=$this->db->dbaction($user_info,'user','U',"`user_id`='".$user_id."'");
			
		}
		
		if($user_info['new_fb_id'])
		{			
			$result=$this->db->dbaction($user_info,'user_sns','I');		
		}
		else
		{
			$result=$this->db->dbaction($user_info,'user_sns','U',"`user_id`='".$user_id."'");		
		}
		return $user_info;
	}
}