<?php /**
* 
*/
class user_register_model extends CI_Model
{
		public function user_reg_data($data)
		{
			$email = $data['email'];
			$mobile = $data['mobile'];
			$ress = $this->db->insert("user_ragister",$data);
			$sql = $this->db->insert_id();
			if($ress>0)
			{
				$this->session->set_userdata("email", $email);
				$this->session->set_userdata("mobile", $mobile);
			}
			return $sql;
		}
		public function adduserimg($data,$id)
		{
			$this->db->where('id',$id);
			$this->db->update('user_ragister',$data);
		}	
} 
?>