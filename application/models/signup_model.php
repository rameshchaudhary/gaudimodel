<?php
Class Signup_model extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function insert_user($username, $email, $userrole, $password, $name, $quote)
	{
		$user_data = array(
            'user_full_name' => $username,
            'user_email' => $password,
            'user_quote' => $quote,
			'user_name' => $name,
			'user_password' => $password,
			'user_role' => $userrole
        );
        
		$this->db->insert('users', $user_data);
		
	}
}
?>