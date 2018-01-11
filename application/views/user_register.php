<div class="container-fullwidth">
  <div class="row">
    <div class="col s12 m4">
       <div class="registerBox">
           <div class="login-img">
                <img src="<?php  echo base_url();?>html/images/login.png">
          </div>
            <div class="title">
            <h5>sign up</h5>
          </div>
           <div class="login-panel">
            <div class="login-card">
             Enter your details to create your account:
            </div>
           </div>
          
           <div class="row">
    <form class="col s12" name="user_reg" id="user_reg" method='post' enctype="multipart/form-data">
    <div class="row">
         <div class="input-field col s12">
          <input id="fname"  name="fname" type="text" class="validate" required>
          <label for="fname">First Name</label>
        </div>
        <div class="input-field col s12">
          <input id="lname" name="lname" type="text" class="validate">
          <label for="lname">Last Name</label>
        </div>

         <div class="input-field col s12">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="mobile" name="mobile" maxlength="10" type="text" class="validate">
          <label for="mobile">Mobile</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="profile_photo" name="profile_photo" type="file" class="validate" style="display: none;">
          <button type="button" class="btn btn-flat btn-upload" onclick="$('input#profile_photo').click();">Upload Photo</button>
         <!--  <label for="profile_photo">Profile Photo</label> -->
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
         <div class="input-field col s12 m12" style="padding: 0px; margin: 0px;">
            <input type="checkbox" id="test5" />
            <label for="test5">I Agree the<span class="teearm"> <a href="">terms and conditions</a>   </span></label>
          </div>
        <div class="col s12 m6 input-field regin">
         <a class="waves-effect waves-light reg-btn btn user_Register">Next</a>
        </div>
          <div class="col s12 m6 input-field regin">
         <a href="<?php echo base_url(); ?>user_login" class="waves-effect waves-light btn reg-btn ">cancel</a>
        </div>
      </div>
    </form>
  </div>
  </div>
    </div>
     <div class="col s12 m8">
        <div class="parallax-container login-parallax">
      <div class="parallax"><img src="<?php  echo base_url();?>html/images/bg4.jpg"></div>
      <div class="right-side-title"> 
          play <span class="chops">chops</span><br>
          <span class="bold-text">make money doing fun stuff</span>
      </div>
    </div>
        
     </div>

  </div>
</div>



<!-- 


<div class="register-area">
	<div class="main">
		<div class="registerBox">
      <div class="title">
      <h5>sign up</h5>
    </div>
			 <div class="row">
    <form class="col s12" name="user_reg" id="user_reg" method='post' enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s12">
          <input id="fname"  name="fname" type="text" class="validate" required>
          <label for="fname">First Name</label>
        </div>
        <div class="input-field col s12">
          <input id="lname" name="lname" type="text" class="validate">
          <label for="lname">Last Name</label>
        </div>

         <div class="input-field col s12">
          <input id="email" name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="mobile" name="mobile" maxlength="10" type="text" class="validate">
          <label for="mobile">Mobile</label>
        </div>

         <div class="input-field col s12 m6">
          <input id="profile_photo" name="profile_photo" type="file" class="validate" style="display: none;">
          <button type="button" class="btn btn-flat btn-upload" onclick="$('input#profile_photo').click();">Upload Photo</button>
     
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="col s12 input-field">
        <a class="waves-effect waves-light btn user_Register">Next</a>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
 -->