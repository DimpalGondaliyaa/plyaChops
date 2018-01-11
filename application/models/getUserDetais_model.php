<?php 
 /**
 * 
 */
 class getUserDetais_model extends CI_Model
 {
 	
 	public function getUserDetails()
 	{
 		$email=$this->session->userdata('email');
 		$userData=$this->db->query("SELECT * FROM user_ragister WHERE email='".$email."'");
 		$data=$userData->row_array();
 		return $data;
 	}
 }

?>