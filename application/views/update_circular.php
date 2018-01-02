  <div class="row">
    <form class="col s12" method="post" name="uppform" id="uppform"  enctype="multipart/form-data">
      <div class="row">
      
        <div class="input-field col s6">
          <input  value="<?php echo $circular_id ; ?>" id="circular_id" type="text" name="circular_id" class="validate">
          <label for="circular_id">circular_id</label>
        </div>

         <div class="input-field col s6">
          <select multiple id="class"  value="<?php echo $class ; ?>" name="class[]">
            <option value="" disabled selected>Choose your CLASS</option>
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
           <label for="class">class</label>
        </div>

        <div class="input-field col s6">
          <select multiple id="division"  value="<?php echo $division ; ?>" name="division[]">
            <option value="" disabled selected>Choose your division</option>
           <option value="A" <?php if(isset($div) && $div=='A'){?> selected <?php }else {} ?> >A</option>
            <option value="B" <?php if(isset($div) && $div=='B'){?> selected <?php }else {} ?>>B</option>
            <option value="C" <?php if(isset($div) && $div=='C'){?> selected <?php }else {} ?>>C</option>
            <option value="D" <?php if(isset($div) && $div=='D'){?> selected <?php }else {} ?>>D</option>
             <option value="E" <?php if(isset($div) && $div=='E'){?> selected <?php }else {} ?>>E</option>
          </select>
           <label for="division">division</label>
        </div>

        <div class="input-field col s6">
          <input id="circular_name"  value="<?php echo $circular_name ; ?>" type="text" class="validate" name="circular_name">
          <label for="circular_name">circular_name</label>
        </div>
        <div class="input-field col s6">
          <input id="circular_title"  value="<?php echo $circular_title ; ?>" type="text" class="validate " name="circular_title">
          <label for="circular_title">circular_title</label>
        </div>
        <div class="input-field col s6">
           <input type="text" class="datepicker"  value="<?php echo $circular_date ; ?>" name="circular_date">
          <label for="circular_date">circular_date</label>
        </div>
        <div class="input-field col s6">
          <input id="message" type="text"  value="<?php echo $message ; ?>" class="validate" name="message">
          <label for="message">message</label>
        </div>

        <div class="input-field col s6" id="at">
          <img src="<?php echo base_url(); ?>html/images/circular/<?php  echo $attachment; ?>" width="100">
          <input id="attachment" type="file"  value="<?php echo $attachment ; ?>" class="validate" name="attachment" style="display: none;">
          <button type="button" class="btn btn-flat blue white-text " onclick="$('#at input').click()">upload file</button>
        </div>
       <!--  <div class="input-field col s6">
          <img src="<?php echo base_url(); ?>html/images/circular/<?php  echo $attachment; ?>" width="100">
          <input id="attachment"  value="<?php echo $attachment ; ?>" name="attachment" type="file" class="validate" style="display: none;" >
         <button type="button" name="attachment" class="btn btn-flat blue white-text " onclick="$('#attachment').click()">upload file</button>
        </div> -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
      </div>
    
    </form>
  </div>


  <script type="text/javascript">
      $(document).ready(function() {
    $('select').material_select();
  });
            
  </script>