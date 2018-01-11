<?php 

	/**
	* 
	*/
	class postLike_model extends CI_Model
	{
		
		public function postLikeData($data)
		{
			$this->db->insert('userliks',$data);
			
		}
	}


?>