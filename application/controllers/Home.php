<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){

			header("Location:User_login");
		}
		$headerData = array(
			"pageTitle" => "home",
			"stylesheet" => array("home.css")
		);
		$footerData = array(
			"jsFiles" => array("home.js")
		);
		$viewData = array(
			"viewName" => "home",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
