<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileAbout extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}
		$this->load->model('ProfileDashboard_model');
		$postRow=$this->ProfileDashboard_model->getPostData();

		$this->load->model('getUserDetais_model');
		$userData=$this->getUserDetais_model->getUserDetails();


		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();
		$headerData = array(
			"pageTitle" => "Profile ProfileAbout",
			"stylesheet" => array("ProfileAbout.css")
		);
		$footerData = array(
			"jsFiles" => array("ProfileAbout.js","RegisterNext.js")
		);
		$viewData = array(
			"viewName" => "ProfileAbout",
            "viewData" => array('pro_data'=>$pro_data,"postRow"=>$postRow,"userData"=>$userData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}


	public function updatepost($id)
	{
		$this->load->model("profile_about_model");
		$data = $this->profile_about_model->getmainId($id);
		/*echo json_encode($data);*/
		$this->load->view("update_post_images",$data);
	}
	public function updateimages()
	{
		$id = $_POST['upid'];
		$this->load->model("profile_about_model");
		$data = array('postData'=>$_POST['postData'] );
		$this->profile_about_model->updatepostimages($data,$id);
	}
	public function deletepost($id)
	{
		$this->load->model('profile_about_model');
		$this->profile_about_model->deletepostt($id);
	}
	public function fetchpost($id)
	{
		$this->load->model("profile_about_model");
		$post =$this->profile_about_model->fetchpostt($id);
		
         $this->load->view("post_images",$post);
	}
	public function updatepostdata()
	{
		$upimgid = $_POST['postid'];
		$this->load->model("profile_about_model");
		$data = array('postData'=>$_POST['postData'] );
		$this->profile_about_model->updateimages($data,$upimgid);

		$userImage=$upimgid."_postImage.".pathinfo($_FILES['post_attachment']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('post_attachment'=>$userImage);
		$this->profile_about_model->uppostimg($adduserimgg,$upimgid);

		$config["upload_path"]='html/images/post_images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$upimgid."_postImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('post_attachment');
	}
}
?>