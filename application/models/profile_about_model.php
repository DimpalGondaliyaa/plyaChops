<?php /**
* 
*/
class profile_about_model extends CI_Model
{
	public function fetch_pro_data()
	{
		$email = $this->session->userdata('email');
		$sql = $this->db->query("select * from user_ragister where email='$email'");
		$ress = $sql->row_array();
		return $ress;
	}
	
	/**/
	public function deletepostt($id)
	{
		$this->db->where("post_Id",$id);
		$this->db->delete("buddyposts");
	}
	public function fetchpostt($id)
	{
		$ress = $this->db->query("select * from  buddyposts where post_Id='$id'");
        $qqq = $ress->row_array();
        return $qqq;
	}
	public function updateimages($data,$id)
	{
		$this->db->where("post_Id",$id);
		$this->db->update("buddyposts",$data);
	}
	public function uppostimg($data,$id)
	{
		$this->db->where("post_Id",$id);
		$this->db->update("buddyposts",$data);
	}
} ?>