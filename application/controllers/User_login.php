<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {

	
	public function index()
	{	
		/*if(!$this->session->userdata('email')){
			header('Location:User_login');
		}*/

		$headerData = array(
			"pageTitle" => "user_login",
			"stylesheet" => array("user_login.css")
		);
		$footerData = array(
			"jsFiles" => array("user_login.js")
		);
		$viewData = array(
			"viewName" => "user_login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	
	public function userlog()
	{
		$this->load->model("user_login_model");
		$data = $_POST['data'];
		$ress = $this->user_login_model->logindata($data);
		echo json_encode($ress);
	}

	public function logout()
	{
		$this->session->unset_userdata("email");
		$this->session->sess_destroy();
		header("Location:".base_url()."user_login");
	}
}
