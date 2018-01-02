<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class viewdata extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "viewdata",
			"stylesheet" => array("viewdata.css")
		);
		$footerData = array(
			"jsFiles" => array("viewdata.js")
		);
		$viewData = array(
			"viewName" => "viewdata",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function viewdataa($id)
	{
		$this->load->model('view_model');
		$fetched_view = $this->view_model->fetch_view_data($id);

		
		$headerData = array(
			"pageTitle" => "ViewDetail",
			"stylesheet" => array("viewdetail.css")
		);
		$footerData = array(
			"jsFiles" => array("viewdetail.js")
		);
		$viewData = array(
			"viewName" => "viewdata",
            "viewData" => array("fetched_view"=>$fetched_view),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

}
