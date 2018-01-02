<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "login",
			"stylesheet" => array("login.css")
		);
		$footerData = array(
			"jsFiles" => array("login.js")
		);
		$viewData = array(
			"viewName" => "login",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function dologin()
	{
		$this->load->model("login_model");

		$log = $_POST['data'];

	/*	$log = array('email'=>$_POST['email'],
		'password'=>$_POST['password']);*/
		$pass=$this->login_model->logg($log);
		echo json_encode($pass);
	}
}
