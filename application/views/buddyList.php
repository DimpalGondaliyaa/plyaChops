
<?php  $this->load->view("ProfileHeader"); ?>

<div class="PostContainer">
	<div class="row">
		<div class="col s12 m3">
			<div class="recentPostBox sticky">
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
			</div>
		</div>
		<div class="col s12 m6">
		<div class="main">
			<div class="profile-area">
				<div class="max-width">
					<div class="post-area">

						<!-- post area for post -->
						<div class="postBox">
							<div class="friendRow row">
								<h5>Suggest Friends...</h5>
							</div>
							
							<?php foreach ($rowData as $key => $roww) { ?>

                                     <?php 
								foreach ($roww["subCategory"] as $key => $value) {
							
							 ?>
							
					
							<div class="friendRow row">
								<div class="col s4 m1">
								<img src="<?php echo base_url() ?>html/images/user_image/<?php echo $value['profile_photo'] ?>" class="responsive-img">
								</div>
								<div class="col s8 m5">
								<span class="friendname"><?php echo $value['fname']; ?> &nbsp;<?php echo $value['lname']; ?></span>
								<label><h6>4 Mutual Friends.</h6></label>
								</div>
								<div class="col s12 m6">
									<button class="btn flat-btn add-btn ">Add Friend</button>&nbsp;
									<button class="btn flat-btn remove-btn">Remove</button>
								</div>
							</div>
								<?php }	} ?>

						</div>
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
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/mojs/latest/mo.min.js"></script>