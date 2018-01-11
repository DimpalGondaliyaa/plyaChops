<?php  $this->load->view("ProfileHeader"); ?>

<!--===============perdsonal info model============-->
<!-- Modal Structure -->
  <div id="personal-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_personal_info");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-personal">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>
<!--===============hobby info model============-->
<!-- Modal Structure -->
  <div id="hobby-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_hobbies");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-hobbie">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>
<!--===============education info model============-->
<!-- Modal Structure -->
  <div id="education-model" class="modal">
    <div class="modal-content">
    	<?php
     $this->load->view("update_education");
    ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat edit-education">edit</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cancel</a>
    </div>
  </div>





<div class="PostContainer">
	<div class="row">
		<div class="col s12 m3">
			<div class="recentPostBox sticky">
				<a class="waves-effect waves-light btn edit-pro-btn">edit</a>
		<div class="title">	
			<h5>personal info</h5>

		</div>

			<div class="recentPostData row">
				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    about me
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['about_me']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthday:

						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						 <?php echo $pro_data['Birthday']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthplace:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Birthplace']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Lives in:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Lives_In']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Occupation:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Occupation']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Joined:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Joined']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Status:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $pro_data['Status']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Email:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <?php echo $this->session->userdata('email'); ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						   Website:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						   <?php echo $pro_data['Website']; ?>
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Phone Number:
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						 <?php echo $pro_data['mobile']; ?>
						</div>
				    </div>
				</div>

		<div class="other-social">
			<div class="other-title">Other Social Networks:</div>
			<a class="waves-effect waves-light btn other-social-fb"><i class="fa fa-facebook social-icon" aria-hidden="true"></i>facebook</a>
			<a class="waves-effect waves-light btn other-social-twitter"><i class="fa fa-twitter social-icon" aria-hidden="true"></i>twitter</a>
			<a class="waves-effect waves-light btn other-social-dribble"><i class="fa fa-dribbble social-icon" aria-hidden="true"></i>dribbble</a>
		</div>		
				
			</div>
		</div>
		</div>

		<div class="col s12 m9">
<div class="main">
	<div class="profile-area">
		<div class="max-width">
			<div class="post-area">
				<div class="postBox">
					<div class="postProfile row">
						<!-- <div class="col s4 m1">
						<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
						</div> -->
						<a class="waves-effect waves-light btn edit-hobbie-btn">edit</a>
						<div class="col s4 m7">

						<h5>Hobbies and Interests</h5>
						</div>
						<div class="col s4 m4">
							
						</div>
					</div>
					<div class="row">
						<div class="col s12 m4">
							<div class="postContent">
								<div class="Hobbies-title">Hobbies:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['hobby']; ?>
							   </div>
							</div>
						</div>

						<div class="col s12 m4">
							<div class="postContent">
								<div class="Hobbies-title">Other Interests:</div>
								<div class="Hobbies-content">
								<?php echo $pro_data['OtherInterests']; ?>
							   </div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="postBox">
					<div class="postProfile row">
						<!-- <div class="col s4 m1">
						<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
						</div> -->
						<a class="waves-effect waves-light btn edit-education-btn">edit</a>
						<div class="col s4 m7">

						<h5>Education and Employement</h5>
						</div>
						<div class="col s4 m4">
							
						</div>
					</div>
					<div class="row">

						<div class="col s12 m4">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['college']; ?></div>
								<div class="education-date"><?php echo $pro_data['college_start_year']; ?> - <?php echo $pro_data['college_end_year']; ?></div>
								<!-- <div class="Hobbies-content">
								Breaking Good, RedDevil, People of Interest, The Running Dead, Found, American Guy.
							   </div> -->
							</div>
						</div>

						<div class="col s12 m4">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['primaryschool']; ?></div>
								<div class="education-date"><?php echo $pro_data['start_primary_year']; ?> - <?php echo $pro_data['end_primary_year']; ?></div>
								
							</div>
						</div>

						<div class="col s12 m4">
							<div class="postContent">
								<div class="Hobbies-title"><?php echo $pro_data['highersecondary']; ?></div>
								<div class="education-date"><?php echo $pro_data['start_higher_year']; ?> - <?php echo $pro_data['end_higher_year']; ?></div>
								
							</div>
						</div>

					</div>
				</div>


						<?php 
							foreach ($postRow as $key => $postData) {
						?>
						<div class="postBox">
							<div class="postProfile row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/profile_photo/profile_Placeholder.png" class="responsive-img">
								</div>
								<div class="col s4 m7">

								<span>
									<?php 
										echo $userData['fname']; 
										echo ' ';
										echo $userData['lname'];
									?>
								</span>
								<label><h6><?php echo $postData['postDate']; echo ' | '; echo $postData['postTime']; ?></h6></label>


								</div>
								<div class="col s4 m4">
									<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red deletebtn" data-delid="<?php echo $postData['post_Id']; ?>"><i class="material-icons">close</i></a></li>
      <li>	<a class="btn-floating red postimage" data-postid="<?php echo $postData['post_Id'];  ?>"><i class="material-icons">create</i></a></li>
    
     
    </ul>
  </div>
								</div>
							</div>
							<div class="postContent">
								<p><?php echo $postData['postData']; ?></p>
							</div>
							<div class="row">
								<div class="col s12 m12">
									<div class="post_img">
											<?php if($postData['post_attachment']>0) {?>
									<img src="<?php echo base_url(); ?>html/images/post_images/<?php echo $postData['post_attachment']; ?>" >
									<?php } else { ?> <?php } ?>
								    </div>
								</div>
							</div>
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4">
										  <div class="likBox">
											<div class="valign-wrapper">
												 <a class="btn-floating btn-large waves-effect waves-light blue tooltipped btnLike" data-position="bottom" data-delay="50" data-tooltip="Like">
												 	<i class="material-icons">thumb_up</i>&nbsp;
												 </a> 20
											</div>	
										</div>
									
									</div>
									<div class="col s4 m4">
										 <div   id="coomm-div"">
										 	
										 		<div class="valign-wrapper">
							 		<a class="btn-floating btn-large waves-effect waves-light blue tooltipped mybtn"  data-messid="<?php echo $postData['post_Id']; ?>"  data- data-position="bottom" data-delay="50" data-tooltip="Comment">

										 			<i class="material-icons">message</i>
										 		</a> &nbsp; 30
										 		 
										 	</div>
										   <!-- <i class="fa fa-comment comm-btn blue-text " aria-hidden="true"></i> -->
										 </div>
										   <!-- <i class="fa fa-comment  comment-class" aria-hidden="true"> 284</i> -->
									</div>

									<div class="col s4 m4">
										<div class="valign-wrapper">
										 		<a class="btn-floating btn-large waves-effect waves-light blue tooltipped" data-position="bottom" data-delay="50" data-tooltip="share">
										 			<i class="material-icons">forward</i>&nbsp; 20
										 		</a>
										 	</div>
										<!-- <i class="fa fa-share" aria-hidden="true"> Share</i> -->
									</div>
								
								</div>
							</div>
							 <div>
							  	<?php foreach ($postData['coment'] as  $imagekey => $imageRow) {
							  			?>
							  			<?php echo $imageRow['comment']; ?>
							  			<?php
							  		}
							  	?> 
							  </div>
						</div>
						<?php } ?>
				
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="col s12 m3">
<!-- 	<div class="recentPostBox sticky">
		<div class="title">
			<h5>Recent Post</h5>
		</div>
		<div class="recentPostData row">
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			<div class="col s6 m4 recentBox">
			<img src="<?php echo base_url() ?>html/images/recentPost/placeholder-logo.png" class="responsive-img">
			</div>
			</div>

		</div> -->
	</div>
</div>
</div>



<div id="q" class="modal">
    <div class="modal-content">
    
    </div>
    <div class="modal-footer">
    	
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat adddeshcomment">Agree</a>
     
    </div> 
  </div>



 <!-- Modal Structure -->
  <div id="imagemodel" class="modal">
    <div class="modal-content">
     
    </div>
    <div class="modal-footer">
      <a  class="modal-action modal-close waves-effect waves-green btn-flat imageupdate" >Agree</a>
    </div>
  </div>
