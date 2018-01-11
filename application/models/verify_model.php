<?php 


class verify_model extends CI_Model
{
	public function varify($data)
	{
		$email = $data['email'];
		$mobile = $data['mobile'];
		$sql = $this->db->query("SELECT  email,mobile FROM login WHERE email='".$email."' AND mobile='".$mobile."' ");
	   if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );
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