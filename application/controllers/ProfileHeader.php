<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileHeader extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();
		$headerData = array(
			"pageTitle" => "ProfileHeader",
			"stylesheet" => array("ProfileHeader.css","ProfileAbout.css")
		);
		$footerData = array(
			"jsFiles" => array("ProfileHeader.js","ProfileAbout.js")
		);
		$viewData = array(
			"viewName" => "ProfileHeader",
            "viewData" => array('pro_data'=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
