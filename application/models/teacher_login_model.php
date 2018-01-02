<?php /**
* 
*/
class teacher_login_model extends CI_Model
{
	public function login($data)
	{
		$class=$data['class'];
		$div=$data['division'];
		$teach_login_id = $data['teach_login_id'];
		$password = $data['password'];
		$sql = $this->db->query("select * from teacher_register where teach_login_id='$teach_login_id' and password='$password'");
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );

			$this->session->set_userdata('class',$class);
			$this->session->set_userdata('division',$div);	
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}
	public function get_reg_data($data)
	{
		$class=$data['class'];
		$div=$data['division'];
		$teach_login_id = $data['teach_login_id'];
		$password = $data['password'];
		$sql = $this->db->query("select * from teacher_register where teach_login_id='$teach_login_id' and password='$password'");
		if($sql->num_rows()==1)
		{
			$sql= array('status' => "ok",
			'message' => "login ok" );

			$this->session->set_userdata('class',$class);
			$this->session->set_userdata('div',$div);	
		}
		else
		{
			$sql= array('status' => "no",
			'message' => "login fail"  );
		}
		return $sql;
	}


} ?>