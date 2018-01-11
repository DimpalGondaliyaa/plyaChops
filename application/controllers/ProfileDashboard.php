<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileDashboard extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata('email')){
			header('Location:user_login');
		}

		$this->load->model('ProfileDashboard_model');
		$postRow=$this->ProfileDashboard_model->getPostData();

		$this->load->model("buddyListt");
		$rowData = $this->buddyListt->fetchbuddylist();



			/*GET PROFILE ID*/
	/*	$id = $this->ProfileDashboard_model->getid();*/

		/*get User Deatails by Email*/
		$this->load->model('getUserDetais_model');
		$userData=$this->getUserDetais_model->getUserDetails();

		$this->load->model("profile_about_model");
		$pro_data = $this->profile_about_model->fetch_pro_data();

		$headerData = array(
			"pageTitle" => "Profile Dashboard",
			"stylesheet" => array("profileDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("profileDashboard.js")
		);
		$viewData = array(
			"viewName" => "profileDashboard",

            "viewData" => array('postRow'=>$postRow,'userData'=>$userData,'pro_data'=>$pro_data,'rowData'=>$rowData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('template',$viewData);
	}

	public function postStatus(){
		$this->load->model('ProfileDashboard_model');
		$this->load->helper('date');
		
		//$dt = new DateTime();
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");
		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$time= date("h:i:a");
		$data = array(
					'postData' =>$_POST['postStory'],
					'email'=>$_POST['email'],
					'postType'=>$_POST['postType'],
					'post_status'=>$_POST['postStatus'],
					'postTime'=>$time,
					'postDate'=>$date
				   );
		 $postid = $this->ProfileDashboard_model->postStatus($data);
	
	}

	public function postMedia()
	{
		$this->load->model('ProfileDashboard_model');
		$this->load->helper('date');
		
		//$dt = new DateTime();
		date_default_timezone_set("UTC");
    	$date=gmdate("F j, Y");

		if (function_exists('date_default_timezone_set'))
		{
		  date_default_timezone_set('Asia/Kolkata');
		}

		$time= date("h:i:a");
		$data = array(
					'postData' =>$_POST['postStory'],
					'email'=>$_POST['email'],
					'postType'=>$_POST['postType'],
					'post_status'=>$_POST['postStatus'],
					'postTime'=>$time,
					'postDate'=>$date
				   );
		 $postid = $this->ProfileDashboard_model->postStatus($data);
		 $userImage=$postid."_postImage.".pathinfo($_FILES['post_attachment']['name'],PATHINFO_EXTENSION);
   
		$adduserimgg=array('post_attachment'=>$userImage);
		$this->ProfileDashboard_model->addpostimg($adduserimgg,$postid);

		$config["upload_path"]='html/images/post_images';
		$config["allowed_types"]='gif|png|jpg|jpeg';
		$config["file_name"]=$postid."_postImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('post_attachment');
	}

	public function commentpost()

	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(
		'comment'=>$_POST['comment'],
		'post_id' =>$_POST['post_id']);
		$this->ProfileDashboard_model->addcommentpost($data);
	}
	public function ratingpost()
	{
		$this->load->model("ProfileDashboard_model");
		$data  = array(

		'rate'=>$_POST['rate'],
		'post_id'=>$_POST['star_post_id']

		 );
		$this->ProfileDashboard_model->addratingpost($data);
	}
	public function adddashcomment()
	{
		$this->load->model("ProfileDashboard_model");
		$id = $_POST['post_Id'];
		$data = array('comment' => $_POST['comment'] ,'post_Id'=> $_POST['post_Id'] );
		$this->ProfileDashboard_model->adddascomm($data);
	}
	
	public function getcomm($id)
	{
		$this->load->model("ProfileDashboard_model");
		$data =$this->ProfileDashboard_model->getcomm($id);
		$this->load->view("add_comment",$data);
	}

	/*public function postLike(){
		$this->load->model('postLike_model');*/
		/*$data=$_POST['data'];*/
		/*$data=array(
			'post_id'=>$_POST['id'],
			'email'=>$_POST['email'],
			'likes'=>$_POST['likes'],
			'status'=>$_POST['status']
		);
		$this->postLike_model->postLikeData($data);*/
		/*echo json_encode($likes);*/
	/*}*/






	/*============= Ratting system ===============*/

	   // .. some User controller code up here
    // Rate function on User Controller
    public function rate()
    {
        // Turn of layout for Ajax request
       
        // Gather ajax post data
        // Load model data
        $this->load->model('Post');
        $post_id = $this->Post->get_post_id($post_url);
        // Call function to check if user is login
        // return current login user id, null if not login yet
        // You need to define this helper function your self
        if (get_user_id()) {
            // Call the Post Model is_rated method to check whether the current login user has submit a rate to related post
            if (!$this->Post->is_rated(get_user_id(), $post_id))
            {
                $data = array("post_id" => $post_id,
                    "user_id" => get_user_id(),
                    "posts_rating_value" => $rate,
                    "posts_rating_date" => date("Y-m-d H:i:s")
                );
                // Call Post model method to insert rating data
                if ($this->Post->insert_rating($data, $post_id, $rate)) {
                    echo json_encode(array("code" => "Success", "msg" => "Thank you, rate has been submitted"));
                }
                else {
                    echo json_encode(array("code" => "Error", "msg" => "Sorry, something wrong. Please try again."));
                }
            }
            // If post has been rated by the current login user
            else {
                echo json_encode(array("code" => "Error", "msg" => "You have already rated this post"));
            }
        }
        // User is not login yet, ask them to login first
        else {
            echo json_encode(array("code" => "Error", "msg" => "Please login to submit this rate"));
        }
        // Do not proceed to view, just terminate to send Json response
        exit;
    }
    // .. any other User controller code goes here



}
?>