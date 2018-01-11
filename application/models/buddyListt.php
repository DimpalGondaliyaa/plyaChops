<?php /**
* 
*/
class buddyListt extends CI_Model
{
	public function fetchbuddylist()
	{
		/*$email=$this->session->set_userdata('hobby',$hobby);*/
		$email = $this->session->userdata('email');
		$data = $this->db->query("select * from user_ragister where email='$email' ");
		$ress = $data->result_array();
		foreach($ress as $key=>$rowData){
			$ress[$key]["subCategory"] = $this->gethobby($rowData["hobby"]);
		}
		/*var_dump($ress);*/
		return $ress;
	}
	public function gethobby($h)
	{
		$dta = $this->db->query("select * from user_ragister where hobby='$h'");
		$r = $dta->result_array();
		/*var_dump($r);*/
		return $r;
	}
} ?>