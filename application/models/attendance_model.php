<?php /**
* 
*/
class attendance_model extends CI_Model
{
	public function get_stud()
	{

		$c=$this->session->userdata('class');
		$d=$this->session->userdata('division');
		$q=$this->db->query("SELECT * FROM register WHERE class='".$c."' AND division='".$d."'");
		return $q->result_array();
		
		
	}
} 
?>