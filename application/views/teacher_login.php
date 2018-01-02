<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url(); ?>html/images/admin_login_bg.jpg"></div>
    <div class="row">
      <div class="login-row">
      	<div class="admin-log-title">
      		teacher login
      	</div>
    	<div class="login-card">
    		<form class="col s12 login-col" name="mainform"  id="mainform" method="post">
          <div class="row">
             <div class="input-field col s4">
              <input id="teach_login_id" name="teach_login_id" type="text" class="validate" autofocus>
              <label class="lab" for="teach_login_id">teach_login_id</label>
            </div>
             <div class="input-field col s4">
                <div class="input-field col s12">
                <select  name='class' id='class'>
                  <option value="" disabled selected>Choose your option</option>
                   <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="3">5</option>
                    <option value="3">6</option>
                    <option value="3">7</option>
                    <option value="3">8</option>
                    <option value="3">9</option>
                    <option value="3">10</option>
                    <option value="3">11</option>
                    <option value="3">12</option>
                    <option value="3">13</option>
                    <option value="3">14</option>
                    <option value="3">15</option>
                  </select>
                  <label>class</label>
              </div>
            </div>
             <div class="input-field col s4">
                <div class="input-field col s12">
                    <select name='division' id='division'>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                       <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                    <label>Div</label>
                  </div>
            </div>
            <div class="input-field col s12">
              <input id="password" name="password" type="text" class="validate">
              <label class="lab" for="password">Password</label>
            </div>
          </div>
           
          <div class="log-div">
           <a class="waves-effect waves-light btn loginbtn">login</a>
         </div>
        </form>
      </div>

      </div>
    </div>
</div>

