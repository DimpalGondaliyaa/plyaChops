<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email'))
		{
			header("Location:".base_url()."login");
		}

		
		$headerData = array(
			"pageTitle" => "Change",
			"stylesheet" => array("change.css")
		);
		$footerData = array(
			"jsFiles" => array("change.js")
		);
		$viewData = array(
			"viewName" => "change",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function add_reg_data()
	{
		if(!$this->session->userdata('email'))
		{
			header("Location:".base_url()."login");
		}
		$this->load->model("register_model");
		$addregdata = array('user_reg_id' => $_POST['user_reg_id'],
		'fname' => $_POST['fname'],
		'lname' => $_POST['lname'],
		'rollno' => $_POST['rollno'],
		'class' => $_POST['class'],
		'division' => $_POST['division'],
		'mobile' => $_POST['mobile'],
		"user_id"=>$_POST['user_id'],
		'password' => $_POST['password'],
		'address' => $_POST['address'] );
		$id = $this->register_model->addreg($addregdata);

		$CatImage=$id."_catImage.".pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
		$updateEvent=array('images'=>$CatImage);
		$this->register_model->addcatimg($updateEvent,$id);

		$config["upload_path"]='html/images/student';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_catImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('images');
	}
	public function logout()
	{
		$this->session->unset_userdata("email");
		$this->session->sess_destroy();
		header("Location:".base_url()."login");
	}
	public function varifyy()
	{
		$this->load->model("verify_model");
		$data = $_POST['data'];
		$pass=$this->verify_model->varify($data);
		echo json_encode($pass);
	}
	public function add_teachreg_data()
	{
		$this->load->model("register_model");
		$addregdata = array(
	    'teach_id' => $_POST['teach_id'],
		'name' => $_POST['name'],
		'class' => implode(',',$_POST['class']) ,
		'division' => implode(',',$_POST['division']) ,
		'teach_login_id' => $_POST['teach_login_id'],
		'password' => $_POST['password'] );
		 $this->register_model->addteachreg($addregdata);
	}
}
