<?php
	/**
	* 
	*/
	class ProfileDashboard_model extends CI_Model
	{
		
		public function postStatus($data)
		{
			$post=$this->db->insert('buddyposts',$data);
			$post=$this->db->insert_id();
			return $post;
		}
		
		/*get Post Data*/
		public function getPostData(){
			$email=$this->session->userdata('email');
			$date=gmdate("F j, Y");
			$time= date("h:i:a");
				$row=$this->db->query("SELECT * FROM buddyposts WHERE email='".$email."' AND postDate ='".$date."' 
					 ORDER BY post_Id DESC");
				$row=$row->result_array();
				foreach ($row as $key => $coments) {
					$row[$key]["coment"] = $this->getComments($coments["post_Id"]);
		 		}
				return $row;
		}
		public function getComments($id){
			$query = $this->db->query("Select * from commenttbl where post_id='$id' GROUP BY id DESC LIMIT 2");
			$profileRow = $query->result_array();
		
			return $profileRow;
		}
        public function adddascomm($data)
        {


        	$this->db->insert("commenttbl",$data);
        }
        public function getcomm($id)
        {
        	$data = $this->db->query("select * from buddyposts where post_Id='$id'");
        	$ress = $data->row_array();
        	return $ress;
        }
	
		public function addpostimg($data,$id)
		{
			$this->db->where("post_Id",$id);
			$this->db->update("buddyposts",$data);
		}
		public function addcommentpost($data)
		{
			$this->db->insert("commenttbl",$data);
		}
		public function addratingpost($data)
		{
			$this->db->insert("userliks",$data);
		}
	}
?>