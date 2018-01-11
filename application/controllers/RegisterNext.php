<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterNext extends CI_Controller {

	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Profile Dashboard",
			"stylesheet" => array("RegisterNext.css")
		);
		$footerData = array(
			"jsFiles" => array("RegisterNext.js")
		);
		$viewData = array(
			"viewName" => "RegisterNext",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}
	public function addnextdata()
	{
		$this->load->model('RegisterNextModel');
		$data = array('Birthday' => $_POST['Birthday'] ,
		'Birthplace' => $_POST['Birthplace'] ,
		'Status' => $_POST['Status'] ,
		'country' => $_POST['country'] , 
		'state' => $_POST['state'] ,
		'Lives_In'=>$_POST['Lives_In'] ,
		'college' => $_POST['college'],
		'college_start_year'=>$_POST['college_start_year'],
		'college_end_year'=>$_POST['college_end_year'],
		'primaryschool'=>$_POST['primaryschool'],
		'start_primary_year'=>$_POST['start_primary_year'],
		'end_primary_year'=>$_POST['end_primary_year'],
		'highersecondary'=>$_POST['highersecondary'],
		'start_higher_year'=>$_POST['start_higher_year'],
		'end_higher_year'=>$_POST['end_higher_year'],
		'hobby' => $_POST['hobby'] );
		$this->RegisterNextModel->insertNextdata($data);
	}
	public function updatenextdata()
	{
		$this->load->model('RegisterNextModel');
		$data = array(
		'Birthday' => $_POST['Birthday'] ,
		'Birthplace' => $_POST['Birthplace'] ,
		'Status' => $_POST['Status'] ,
		'Lives_In'=>$_POST['Lives_In'] ,
		'about_me'=>$_POST['about_me'],
		'Occupation'=>$_POST['Occupation'],
		'Joined'=>$_POST['Joined'],
		'email'=>$_POST['email'],
		'mobile'=>$_POST['mobile'],
		'Website'=>$_POST['Website']);
		$this->RegisterNextModel->updateNextdata($data);
	}
	public function updatehobbiedata()
	{
		$this->load->model('RegisterNextModel');
		$data = array(
		'hobby' => $_POST['hobby'] ,
		'OtherInterests'=>$_POST['OtherInterests'] );
		$this->RegisterNextModel->updathobbiydata($data);
	}
	public function updateeducationdata()
	{
		$this->load->model('RegisterNextModel');
		$data = array(
		'college' => $_POST['college'] ,
		'college_start_year' => $_POST['college_start_year'] ,
		'college_end_year' => $_POST['college_end_year'] ,
		'primaryschool'=>$_POST['primaryschool'] ,
		'start_primary_year'=>$_POST['start_primary_year'],
		'end_primary_year'=>$_POST['end_primary_year'],
		'highersecondary'=>$_POST['highersecondary'],
		'start_higher_year'=>$_POST['start_higher_year'],
		'end_higher_year'=>$_POST['end_higher_year']);
		$this->RegisterNextModel->updatEducationdata($data);
	}
}
?>