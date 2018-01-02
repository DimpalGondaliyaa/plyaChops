<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Changepass",
			"stylesheet" => array("changepass.css")
		);
		$footerData = array(
			"jsFiles" => array("changepass.js")
		);
		$viewData = array(
			"viewName" => "changepass",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
