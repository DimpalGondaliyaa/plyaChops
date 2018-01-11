<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FriendsList extends CI_Controller {

	
	public function index()
	{		
		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();

		$headerData = array(
			"pageTitle" => "FriendsList",
			"stylesheet" => array("FriendsList.css","profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("FriendsList.js")
		);
		$viewData = array(
			"viewName" => "FriendsList",
            "viewData" => array("pro_data"=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
