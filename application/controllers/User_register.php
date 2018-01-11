<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_register extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "user_register",
			"stylesheet" => array("user_register.css")
		);
		$footerData = array(
			"jsFiles" => array("user_register.js")
		);
		$viewData = array(
			"viewName" => "user_register",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function user_reg_data()
	{
		$this->load->model("user_register_model");
		$data = array(
			'fname' => $_POST['fname'],
			'lname' => $_POST['lname'],
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'mobile' => $_POST['mobile'], );
		$reg_id = $this->user_register_model->user_reg_data($data);

		$userImage=$reg_id."_userImage.".pathinfo($_FILES['profile_photo']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('profile_photo'=>$userImage);
		$this->user_register_model->adduserimg($adduserimgg,$reg_id);

		$config["upload_path"]='html/images/user_image';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$reg_id."_userImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('profile_photo');

	}
}
