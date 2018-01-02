 <!--  <div class="parallax-container">
      <div class="parallax"><img src="<?php echo base_url(); ?>html/images/login.jpg"></div>
     
    </div>
 -->
 <div class="container-fullwidth login-container">
<div class="row login-row">
  <div class="admin-log-title">
    <ul>admin register</ul>
  </div>
  <div class="login-card">

     <div class="row log-form-row">
    <form class="col s12 login-col" name="teachformm" id="teachformm">
      <div class="row">

         <!-- <div class="input-field col s12">
          <input id="user_reg_id" name="user_reg_id" type="text" class="validate">
          <label for="user_reg_id">User Register Id</label>
        </div> -->
         <div class="input-field col s12">
          <input id="teach_id" name="teach_id" type="text" class="validate">
          <label for="teach_id">teach Reg Id</label>
        </div>

        <div class="input-field col s12">
          <input id="name" name="name" type="text" class="validate">
          <label for="name"> Name</label>
        </div>

         <div class="input-field col s12">
          <select multiple name="class[]" id="class">
            <option value="" disabled >Choose your option</option>
             <option name="class" value="1">1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
          </select>
          <label>class</label>
        </div>

         <div class="input-field col s12">
          <select multiple name="division[]">
          <option value="" disabled selected>Choose your option</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
             <option value="D">D</option>
              <option value="E">E</option>
          </select>
         <label>Div</label>
        </div>

         <div class="input-field col s12">
          <input id="teach_login_id" name="teach_login_id" type="text" class="validate">
          <label for="teach_login_id">teach_login_id</label>
        </div>


       <div class="wrapper">
          <button class="form-control" id="key" type="button">Generate API Key</button>
          <input class="form-control" id="api" name="password" type="text" name="password" value="" placeholder="Click on the button to generate a new API key ..."  />
        </div> 

      </div>
     
    </form>
  </div>
        
  </div>
</div>
</div>


