<div class="title">	
	<h5>personal info</h5>
</div>
<form name='up_personal_info' id="up_personal_info" >
			<div class="recentPostData row">
				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    about me
						</div>
					</div>
					<div class="col m8">	
					    <div class="personal-right-title">
						  <input placeholder="about_me" id="about_me" name='about_me' value="<?php echo $pro_data['about_me']; ?>" type="text" class="validate">       
						</div>
				    </div>
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthday:
						</div>
					</div>
					<div class="input-field col s12 m6">
			          <input type="text"  class="datepicker" name='Birthday' value="<?php echo $pro_data['about_me']; ?>" id="Birthday">
			          <label for="Birthday">Birthday</label>
			        </div>
					<!-- <div class="col m8">	
					    <div class="personal-right-title">
						  <input placeholder="Birthday" id="Birthday" name='Birthday' value="<?php echo $pro_data['Birthday']; ?>" type="text" class="validate">       
						</div>
				    </div> -->
				</div>

				<div class="personal-box">
					<div class="col m4">
						<div class="personal-left-title">
						    Birthplace:
						</div>
					</div>

					<div class="col m8">	
					    <div class="personal-right-title">
						  <input placeholder="Birthplace" id="Birthplace" name='Birthplace' value=" <?php echo $pro_data['Birthplace']; ?>" type="text" class="validate">       
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
						  <input placeholder="Lives_In" id="Lives_In" name='Lives_In' value=" <?php echo $pro_data['Lives_In']; ?>" type="text" class="validate">       
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
						  <input placeholder="Occupation" id="Occupation" name='Occupation' value="UI/UX Designer" type="text" class="validate">       
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
						  <input placeholder="Joined" id="Joined" name='Joined' value=" April 31st, 2014" type="text" class="validate">       
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
						  <input placeholder="Status" id="Status" name='Status' value=" <?php echo $pro_data['Status']; ?>" type="text" class="validate">       
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
						  <input placeholder="email" id="email" name='email' value=" <?php echo $this->session->userdata('email'); ?>" type="text" class="validate">       
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
						  <input placeholder="Website" id="Website" name='Website' value="daydreamsagency.com" type="text" class="validate">       
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
						  <input placeholder="mobile" maxlength="10" id="mobile" name='mobile' value="<?php echo $pro_data['mobile']; ?>" type="text" class="validate">       
						</div>
				    </div>
				</div>
				<input type="hidden" name="upid" value="<?php echo $pro_data['id']; ?>">
			
			</div>
			</form>	
