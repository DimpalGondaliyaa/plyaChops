<?php  $this->load->view("ProfileHeader"); ?>
<div class="PostContainer">
	<div class="row">

		<div class="col s12 m3">
			<div class="recentPostBox sticky">

				<div class="title">
					<h5>Suggest Friends...</h5>
				</div>

				<div class="recentPostData">
						<div class="main">
			<div class="profile-area">
				<div class="max-width">
					<div class="post-area row">

							<?php foreach ($rowData as $key => $roww) { ?>

                                     <?php 
								foreach ($roww["subCategory"] as $key => $value) {
							
							 ?>
							
					
							<div class="friendRow col s12 m12">
								<div class="col s2 m2">
								<img class="friend-img"  src="<?php echo base_url() ?>html/images/user_image/<?php echo $value['profile_photo'] ?>" class="responsive-img">
								</div>
								<div class="col s8 m7">
								<span class="friend-name">
									<?php echo $value['fname']; ?> &nbsp;<?php echo $value['lname']; ?></span>
								<label><h6>4 Mutual Friends.</h6></label>
								</div>
								<div class="col m2 s3 m2">
									<button class="btn btn-add-person flat-btn add-btn"><i class="large material-icons">person_add</i></button>
								</div>
							</div>
								<?php }	} ?>

					</div>
				</div>
			</div>
		</div>
				</div>
			</div>
		</div>


		<div class="col s12 m6">
		   <div class="main">
			  <div class="profile-area">
				  <div class="max-width">
					  <div class="post-area">
						<!-- post area for post -->
						<div class="postStoryBox">
							<div class="postBtns">
								
								<ul>
									<li><button type="button" class="btn btn-flat blue-text statusPostBtn active">Status</button></li>
									<li><button type="button" class="btn btn-flat blue-text  mediaPostBtn">Media</button></li>
									<li><button type="button" class="btn btn-flat blue-text  locationPostBtn">Location</button></li>
								</ul>

							</div>
							<div class="postStory" id="postStatus">
								<form name="postPOST" id="postPOST">
									<div class="input-field col s12">
									  <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
							          <textarea id="postStory" name="postStory" class="materialize-textarea" placeholder="Post Something..."></textarea>
							          <input type="hidden" name="postType" id="postType" value="status">
							          <input type="hidden" name="postStatus" id="postStatus" value="1">
							        </div>
							    <!--     <input id="post_attachment" name="post_attachment" type="file" class="validate" style="display: none;"> -->
							         <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button id="postPOSTButton" type="button" class="btn btn-flat blue white-text"

							        	<?php if($userData['post_status']==0){?> disabled <?php } ?>
							        	>Post</button>
							        </div>
							    	</div>
								</form>
							</div>
							<!-- post media -->
							<div class="postMedia" style="display: none;" id="postMedia">
								<!-- <label>Post Media</label> -->
								<form name="postMediaa" id="postMediaa">
									<div class="input-field col s12">
									  <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
							          <textarea id="postStory" name="postStory" class="materialize-textarea" placeholder="Post Media File..."></textarea>
							          <input type="hidden" name="postType" id="postType" value="status">
							          <input type="hidden" name="postStatus" id="postStatus" value="1">
							        </div>
							        <input id="post_attachment" name="post_attachment" type="file" class="validate" style="display: none;"> 
									
							        <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		  <li  aria-hidden="true" class="fa fa-camera btn-upload" onclick="$('input#post_attachment').click();"></li>
							        		
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button <?php if($userData['post_status']==0){?> disabled <?php } ?> type="button" id='mediapost' class="btn btn-flat blue white-text">Post</button>
							        </div>
							    	</div>
								</form>
							</div>
						

							<!-- post Loaction  -->
							<div class="postLocation" style="display: none;" id="postLocation">
								<!-- <label>Post Media</label> -->
								<form>
									<div class="input-field col s12">
							          <textarea id="postStory" class="materialize-textarea" placeholder="Share Location..."></textarea>
							        </div>
							         <div class="col s12 m12">
							        <div class="attachmentBox col s12 m8">
							        	<ul class="addAttachment">
							        		<li class="fa fa-map-marker" aria-hidden="true"></li>
							        		<li class="fa fa-camera" aria-hidden="true"></li>
							        		<li class="fa fa-tags" aria-hidden="true"></li>
							        	</ul>
							        </div>
							        <div class="col s12 m4">
							        	<button type="button" <?php if($userData['post_status']==0){?> disabled <?php } ?> class="btn btn-flat blue white-text">Post</button>
							        </div>
							    	</div>
								</form>
							</div>
							<!-- // post Location -->

						</div>
						<!-- // post area for post -->

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
								
								<label><h6><!-- <?php echo $postData['post_Id']; ?> --><?php echo $postData['postDate']; echo ' | '; echo $postData['postTime']; ?></h6></label>
								</div>
								<div class="col s4 m4">
									
							    </div>
							</div>
							<div class="row">
								<div class="col s12 m12">
									<div class="post">
										
										<?php echo $postData['postData'];  ?>
									</div>
									<div class="post_img">
										<?php if($postData['post_attachment']>0) {?>
									<img src="<?php echo base_url(); ?>html/images/post_images/<?php echo $postData['post_attachment']; ?>" >
									<?php } else { ?> <?php } ?>
								    </div>
								</div>
							</div>
							
							
							<div class="commentsBox">
								<div class="row">
									<div class="col s4 m4 row">

										
<form name="rating-form" id='rating-form'>
		<input type="hidden" name="star_post_id" value="<?php echo $postData['post_Id'];  ?>" id="star_post_id">
  <div class="rate">

    <input type="radio" onclick="$('#starbtn').click();" class="rating" name="star5" id="star5" name="rate" value="5" style="display: none;" />
    <label for="star5"  title="text">5 stars</label>
    <input type="radio"  onclick="$('#starbtn').click();" class="rating" id="star4" name="rate" value="4" style="display: none;"/>
    <label for="star4" title="text">4 stars</label>
    <input type="radio"  onclick="$('#starbtn').click();"  class="rating" id="star3" name="rate" value="3" style="display: none;" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio"  onclick="$('#starbtn').click();" class="rating" id="star2" name="rate" value="2" style="display: none;"/>
    <label for="star2" title="text">2 stars</label>
    <input type="radio"  onclick="$('#starbtn').click();" class="rating" id="star1" name="rate" value="1" style="display: none;"/>
    <label for="star1" title="text">1 star</label>
  </div>

	<a name="star_post_id" data-id="<?php echo $postData['post_Id']; ?>" value="<?php echo $postData['post_Id']; ?>" id="star_post_id"></a>


<!-- <a value='<?php echo $postData['post_Id'];  ?>' name='post_id' data-id="<?php echo $postData['post_Id'];  ?>" id="starbtn" class="waves-effect waves-light btn ">Rating</a> -->

  </form>


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
			<div class="recentPostBox sticky">
				<div class="title">
					<h5>Recent Post</h5>
				</div>
				<div class="recentPostData row">
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img1.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img5.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img2.jpg" class="responsive-img">

					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img3.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img4.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img6.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">
					<img src="<?php echo base_url() ?>html/images/recentPost/img4.jpg" class="responsive-img">
					</div>
					<div class="col s6 m4 recentBox">

					<img src="<?php echo base_url() ?>html/images/recentPost/img7.jpg" class="responsive-img">
					</div>
				</div>
			</div>
		
			<div class="serveybox sticky">
			<div class="postBtns">
				<div class="comm-title">
					 <i class="material-icons">add</i>comments
				</div>
			</div>
			<div class="postStory" id="postStatus">
				<form name="postPOST" id="postPOST">
					<div class="input-field col s12">
					  <input type="hidden" name="email" id="email" value="<?php echo $this->session->userdata('email'); ?>">
			          <textarea id="postStory" name="postStory" class="materialize-textarea" placeholder="Post Something..."></textarea>
			          <input type="hidden" name="postType" id="postType" value="status">
			          <input type="hidden" name="postStatus" id="postStatus" value="1">
			        </div>
			    <!--     <input id="post_attachment" name="post_attachment" type="file" class="validate" style="display: none;"> -->
			         <div class="col s12 m12">
			       
			        <div class="col s12 m4">
			        	<button id="postPOSTButton" type="button" class="btn btn-flat blue white-text"

			        	<?php if($userData['post_status']==0){?> disabled <?php } ?>
			        	>Post</button>
			        </div>
			    	</div>
				</form>
			</div>
	
						</div>
		
		</div>






	</div>
</div>

        

<!-- Modal Structure -->
 

<div id="q" class="modal">
    <div class="modal-content">
    
    </div>
    <div class="modal-footer">
    	
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat adddeshcomment">Agree</a>
     
    </div> 
  </div>


  <div class="row">

  </div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>