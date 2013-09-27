<?php

class User_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	public function username_check($username)
	{
		$query = $this->db->get_where('tbl_murid',array('no_kp'=>$username));
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}



	}
	public function username_password_check($username,$password)
	{

	}
	public function get_userid()
	{

	}
}