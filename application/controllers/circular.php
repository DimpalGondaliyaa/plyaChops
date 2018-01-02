<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class circular extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("circular_model");
		$ress = $this->circular_model->fetch_circular();

		$headerData = array(
			"pageTitle" => "circular",
			"stylesheet" => array("circular.css")
		);
		$footerData = array(
			"jsFiles" => array("circular.js")
		);
		$viewData = array(
			"viewName" => "circular",
            "viewData" => array("ress"=>$ress),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function addcircular()
	{
		$this->load->model('circular_model');
		$data = array(
			'circular_id' => $_POST['circular_id'] ,
			'class' => implode(',', $_POST['class']),
			'division' =>  implode(',', $_POST['division']),
			'circular_name' => $_POST['circular_name'] ,
			'circular_title' => $_POST['circular_title'] ,
			'circular_date' => $_POST['circular_date'] ,
			'message' => $_POST['message'] 
		 );
		$id = $this->circular_model->addcir($data);

		$CatImage=$id."_circular.".pathinfo($_FILES['attachment']['name'],PATHINFO_EXTENSION);
		$updateEvent=array('attachment'=>$CatImage);
		$this->circular_model->addcatimg($updateEvent,$id);

		$config["upload_path"]='html/images/circular';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$id."_circular";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('attachment');
	}
	public function up_reg_data($id)
	{
		$this->load->model("circular_model");
		$upid = $this->circular_model->updatedata($id);
		$this->load->view("update_circular",$upid);
	}
	public function up_register()
	{
		$this->load->model("circular_model");
		$upidd = $_POST['id'];
		$addregdata = array(
		'circular_id' => $_POST['circular_id'] ,
			'class' => implode(',',$_POST['class'] ) ,
			'division' => implode(',',$_POST['division']) ,
			'circular_name' => $_POST['circular_name'] ,
			'circular_title' => $_POST['circular_title'] ,
			'circular_date' => $_POST['circular_date'] ,
			'message' => $_POST['message']  );
		$this->circular_model->update_reg($addregdata,$upidd);

		$CatImage=$upidd."_catImage.".pathinfo($_FILES['attachment']['name'],PATHINFO_EXTENSION);
         if($_FILES['attachment']['name']!="")
		{
			$data['attachment']=$CatImage;
		$updateEvent=array('attachment'=>$CatImage);
		$this->circular_model->addcatimg($updateEvent,$upidd);

		$config["upload_path"]='html/images/circular';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$upidd."_catImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('attachment');
	}

	}
	public function deletedata($id)
	{
		$this->load->model("circular_model");
			$this->circular_model->deletedata($id);
	}
}
