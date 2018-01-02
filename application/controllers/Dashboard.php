<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("dashboard.js")
		);
		$viewData = array(
			"viewName" => "dashboard",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
