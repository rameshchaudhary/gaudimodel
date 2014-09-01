<?php
Class user_model extends CI_Model
{
	function login($username, $password)
	{
		$this -> db -> select('user_id, user_name, user_password');
		$this -> db -> from('users');
		$this -> db -> where('user_name', $username);
		$this -> db -> where('user_password', $password);
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		
		if($query -> num_rows() == 1)
		{
			 return $query->result();
		}
		else
		{
			 return false;
		}
	}

	function display()
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		
		$query = $this -> db -> get();
		return $query->result();
	}
}
?>

