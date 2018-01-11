<?php 

class login_model extends CI_Model
{
	public function logg($loginn)
	{
		$email = $loginn['email'];
		$password = $loginn['password'];
		$sql = $this->db->query("SELECT * FROM login WHERE email='".$email."' AND password='".$password."'");
		
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );
			$this->session->set_userdata('email',$email);
			
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}
	
}




?>