<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teacher_login extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "teacher_login",
			"stylesheet" => array("teacher_login.css")
		);
		$footerData = array(
			"jsFiles" => array("teacher_login.js")
		);
		$viewData = array(
			"viewName" => "teacher_login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('teacher_template',$viewData);
	}
	public function tech_log()
	{
		$this->load->model("teacher_login_model");
		$log = $_POST['data'];
		$pass = $this->teacher_login_model->login($log);
    	echo json_encode($pass);
	}
	public function logout()
	{
		$this->session->unset_userdata("class");
		$this->session->unset_userdata("div");
		$this->session->sess_destroy();
		header("Location:".base_url()."teacher_login");
	}
}
