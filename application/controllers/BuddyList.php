<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuddyList extends CI_Controller {

	

	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}
		$this->load->model("buddyListt");
		$rowData = $this->buddyListt->fetchbuddylist();

		$this->load->model("profile_about_model");
	$pro_data = $this->profile_about_model->fetch_pro_data();

		$headerData = array(
			"pageTitle" => "BuddyList",
			"stylesheet" => array("buddyList.css","ProfileAbout.css")
		);
		$footerData = array(
			"jsFiles" => array("buddyList.js")
		);
		$viewData = array(
			"viewName" => "buddyList",
            "viewData" => array("rowData"=>$rowData,"pro_data"=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
