<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	
	public function index()
	{	
		if(!$this->session->userdata('division'))
		{
			header("Location:".base_url()."teacher_login");
		}	

		$this->load->model("attendance_model");
		$stud=$this->attendance_model->get_stud();
		// var_dump($stud);
		$headerData = array(
			"pageTitle" => "Attendance",
			"stylesheet" => array("attendance.css")
		);
		$footerData = array(
			"jsFiles" => array("attendance.js")
		);
		$viewData = array(
			"viewName" => "attendance",
            "viewData" => array('stud'=>$stud),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('teacher_template.php',$viewData);
	}

	
}
