<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PointList extends CI_Controller {

	
	public function index()
	{		

		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();

		$headerData = array(
			"pageTitle" => "PointList",
			"stylesheet" => array("PointList.css","profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("PointList.js")
		);
		$viewData = array(
			"viewName" => "PointList",
            "viewData" => array("pro_data"=>$pro_data),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
}
?>
