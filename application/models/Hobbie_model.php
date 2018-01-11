<?php /**
* 
*/
class Hobbie_model extends CI_Model
{
	public function addhobbies($data)
	{
		$hobby = $data['hobby'];
		$email = $this->session->userdata("email");
		$this->db->where("email",$email);
		$this->db->update("user_ragister",$data);

		
	}

} ?>