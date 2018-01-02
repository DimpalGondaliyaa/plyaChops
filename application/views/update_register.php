 <!--  <div class="parallax-container">
      <div class="parallax"><img src="<?php echo base_url(); ?>html/images/login.jpg"></div>
     
    </div>
 -->
 <div class="container-fullwidth login-container">
<div class="row login-row">
  <div class="admin-log-title">
    <ul>update register</ul>
  </div>
  <div class="login-card">

     <div class="row log-form-row">
    <form class="col s12 login-col" name="upres" id="upres">
      <div class="row">

         <div class="input-field col s12">
          <input id="user_reg_id" placeholder="user_reg_id" name="user_reg_id" value="<?php echo $user_reg_id; ?>" type="text" class="validate">
         
        </div>

        <div class="input-field col s12">
          <input id="fname" placeholder="fname" name="fname" type="text" value="<?php echo $fname; ?>" class="validate">
        
        </div>

         <div class="input-field col s12">
          <input id="lname" placeholder="lname" name="lname" type="text" value="<?php echo $lname; ?>" class="validate">
      
        </div>

         <div class="input-field col s12">
          <input id="rollno" placeholder="rollno" name="rollno" type="text" value="<?php echo $rollno; ?>" class="validate">
       
        </div>

         <div class="input-field col s12">
          <select name="class" id="class">
            <option value="" disabled selected>Choose your Class</option>
            <option value="1" <?php if(isset($class) && $class=='1'){?> selected <?php }else {} ?>>1</option>
            <option value="2" <?php if(isset($class) && $class=='2'){?> selected <?php }else {} ?>>2</option>
            <option value="3" <?php if(isset($class) && $class=='3'){?> selected <?php }else {} ?>>3</option>
            <option value="4" <?php if(isset($class) && $class=='4'){?> selected <?php }else {} ?>>4</option>
            <option value="5" <?php if(isset($class) && $class=='5'){?> selected <?php }else {} ?>>5</option>
            <option value="6" <?php if(isset($class) && $class=='6'){?> selected <?php }else {} ?>>6</option>
            <option value="7" <?php if(isset($class) && $class=='7'){?> selected <?php }else {} ?>>7</option>
            <option value="8" <?php if(isset($class) && $class=='8'){?> selected <?php }else {} ?>>8</option>
            <option value="9" <?php if(isset($class) && $class=='9'){?> selected <?php }else {} ?>>9</option>
            <option value="10" <?php if(isset($class) && $class=='10'){?> selected <?php }else {} ?>>10</option>
            <option value="11" <?php if(isset($class) && $class=='11'){?> selected <?php }else {} ?>>11</option>
            <option value="12" <?php if(isset($class) && $class=='12'){?> selected <?php }else {} ?>>12</option>
            <option value="13" <?php if(isset($class) && $class=='13'){?> selected <?php }else {} ?>>13</option>
            <option value="14" <?php if(isset($class) && $class=='14'){?> selected <?php }else {} ?>>14</option>
            <option value="15" <?php if(isset($class) && $class=='15'){?> selected <?php }else {} ?>>15</option>

          </select>
          <label>class</label>
        </div>

         <div class="input-field col s12">
          <select name="div">
            <option disabled selected></option>
            <option value="A" <?php if(isset($div) && $div=='A'){?> selected <?php }else {} ?> >A</option>
            <option value="B" <?php if(isset($div) && $div=='B'){?> selected <?php }else {} ?>>B</option>
            <option value="C" <?php if(isset($div) && $div=='C'){?> selected <?php }else {} ?>>C</option>
            <option value="D" <?php if(isset($div) && $div=='D'){?> selected <?php }else {} ?>>D</option>
             <option value="E" <?php if(isset($div) && $div=='E'){?> selected <?php }else {} ?>>E</option>
          </select>
          <label>Div</label>
        </div>

           <div class="input-field col s12">
          <input id="mobile" name="mobile"  value="<?php echo $mobile; ?>"type="text" class="validate">
          <label for="mobile">mobile</label>
          </div>

          <div class="input-field col s12">
          <input id="user_id" name="user_id" value="<?php echo $user_id; ?>" type="text" class="validate">
          <label for="user_id">User Id</label>
        </div>


       <div class="wrapper">
          <button class="form-control" id="keygen" type="button">Generate Password</button>
          <input class="form-control" id="apikey"  name="password" type="text" name="password" value="<?php echo $password; ?>" placeholder="Click on the button to generate a new API key ..."  />
        </div> 

         <div class="input-field col s12">
          <img src="<?php echo base_url(); ?>html/images/<?php  echo $images; ?>" width="100">
          <input id="images" name="images" type="file" class="validate">
        </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea id="address" value="<?php echo $address; ?>"  placeholder="address" name="address" class="materialize-textarea"><?php echo $address; ?></textarea>
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

      </div>
     
    </form>
  </div>
        

  </div>
</div>
</div>


<script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });</script>



  <script type="text/javascript">

/**
 * Function to produce UUID.
 * See: http://stackoverflow.com/a/8809472
 */
function generateUUID()
{
   var d = new Date().getTime();
   
   if( window.performance && typeof window.performance.now === "function" )
   {
      d += performance.now();
   }
   
   var uuid = 'User_Id_'+'xx-xxx-4xx-yxx-xx'.replace(/[xy]/g, function(c)
   {
      var r = (d + Math.random()*16)%16 | 0;
      d = Math.floor(d/16);
      return (c=='x' ? r : (r&0x3|0x8)).toString(16);
   });

return uuid;
}

/**
 * Generate new key and insert into input value
 */
$( '#keygen' ).on('click',function()
{
   $( '#apikey' ).val( generateUUID() );
});</script>


