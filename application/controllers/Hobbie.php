<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hobbie extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Hobbie",
			"stylesheet" => array("Hobbie.css")
		);
		$footerData = array(
			"jsFiles" => array("Hobbie.js")
		);
		$viewData = array(
			"viewName" => "Hobbie",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function addHobbie()
	{
		$this->load->model("Hobbie_model");
		$data =  array('hobby' => implode(',', $_POST['hobby'])  );

		$this->Hobbie_model->addhobbies($data);
	}
}
