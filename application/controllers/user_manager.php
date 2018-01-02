<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_manager extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("user_model");
		$data = $this->user_model->fetchdata();
		$headerData = array(
			"pageTitle" => "user_manager",
			"stylesheet" => array("user_manager.css")
		);
		$footerData = array(
			"jsFiles" => array("user_manager.js")
		);
		$viewData = array(
			"viewName" => "user_manager",
            "viewData" => array("data"=>$data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function up_reg_data($id)
	{
		$this->load->model("user_model");
		$upid = $this->user_model->updatedata($id);
		$this->load->view("update_register",$upid);
	}
	public function up_register()
	{
		$this->load->model("user_model");
		$upidd = $_POST['id'];
		$addregdata = array('user_reg_id' => $_POST['user_reg_id'],
		'fname' => $_POST['fname'],
		'lname' => $_POST['lname'],
		'rollno' => $_POST['rollno'],
		'class' => $_POST['class'],
		'div' => $_POST['div'],
		'mobile' => $_POST['mobile'],
		"user_id"=>$_POST['user_id'],
		'password' => $_POST['password'],
		'address' => $_POST['address'] );
		$this->user_model->update_reg($addregdata,$upidd);

		 $CatImage=$upidd."_catImage.".pathinfo($_FILES['images']['name'],PATHINFO_EXTENSION);
         if($_FILES['images']['name']!="")
		{
			$data['images']=$CatImage;
		$updateEvent=array('images'=>$CatImage);
		$this->user_model->addcatimg($updateEvent,$upId);

		$config["upload_path"]='html/images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$upidd."_catImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('images');
	  }
	}
	public function deletedata($id)
	{
			$this->load->model("user_model");
			$this->user_model->deletedata($id);
	}
	public function viewdataa($viewid)
	{

	}
}
