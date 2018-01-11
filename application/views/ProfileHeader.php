
<div class="row">
		<div class="profileDetails-area">
      		<div class="row">
      		<div class="profile_img col s12 m2">
      			<img src="<?php echo base_url() ?>html/images/user_image/<?php echo $pro_data['profile_photo'];?>" class="responsive-img profile_photo">
      		</div>
      		<div class="profileData col s12 m10">
      			<div class="user_name">
      				<h4 class="about-name-title"><?php echo $pro_data['fname']; ?> &nbsp;<?php echo $pro_data['lname']; ?></h4>
      			</div>
      			<div class="totalData">
	      		<ul>
      				<li>
      				<div class="total_post">
	      				<h5>26</h5>
	      				<p>POST</p>
	      			</div>
		      		</li>
		      		<li>
		      		<div class="profile_followers">
	      				<h5>500</h5>
	      				<p>FOLLOWERS</p>
	      			</div>
	      			</li>
	      			<li>
	      			<div class="profile_followig">
	      				<h5>200</h5>
	      				<p>FOLLOWING</p>
	      			</div>
	      			</li>
      			</ul>
      			</div>
      			<div class="col s12 m12 profile_quickLinks">
      			<ul>
      				<li><a href="<?php echo base_url(); ?>ProfileDashboard">Timeline</a></li>
      				<li><a href="<?php echo base_url(); ?>ProfileAbout">About</a></li>
      				<li><a href='<?php echo base_url(); ?>FriendsList'>Friends List</a></li>
                              <li><a href='<?php echo base_url(); ?>buddyList'>Friends Request</a></li>
      				<!-- <li><a href="#!">Posts</a></li> -->
      				<!-- <li><a href="<?php echo base_url(); ?>ProfilePhoto">Photo</a></li> -->
                              <li><a href="<?php echo base_url(); ?>PointList">Chops</a></li>
      			</ul>
      			</div>
      		</div>
      		</div>
      	</div>
      </div>
