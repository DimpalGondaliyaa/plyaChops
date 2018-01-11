<div class="container-fullwidth">
  <div class="row">
    <div class="col s12 m4">
       <div class="registerBox">
           <div class="login-img">
                <img src="<?php  echo base_url();?>html/images/login.png">
          </div>
           <div class="card-panel login-panel">
            <div class="login-card">
              Use username demo@demo.com and password demo to continue or singup.
            </div>
           </div>
            <div class="title">
            <h5> Sign In To Admin</h5>
          </div>
           <div class="row">
    <form class="col s12" name="user_login" id="user_login" method='post' enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s12">
          <input id="email"  name="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>

           <div class="input-field col s12 m6" style="padding: 0px; margin: 0px;">
            <input type="checkbox" id="test5" />
            <label for="test5">Remember me</label>
          </div>
            <div class="input-field col s12 m6" style="    margin-top: 13px;">
           <a href="">forget password</a>
            </div>
              <div class="col s12 input-field col s12">
                <div class="login-btn">
                 <a class="waves-effect waves-light btn user_login">Login</a>
                 <a href="https://en-gb.facebook.com/login/" target="_blank" class="waves-effect waves-light btn facebook-btn">login with facebook</a>
                  <a href="https://twitter.com/login" target="_blank" class="waves-effect waves-light btn twitter-btn">login with twitter</a>
               </div>
              </div>

        <div class="input-field col s12 center">
          <p class="center">Don't have an account yet ? <a href="<?php echo base_url() ?>User_register"> Sign up. </a></p>
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