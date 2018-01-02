<div class="parallax-container">
  <div class="parallax"><img src="<?php echo base_url(); ?>html/images/change.jpg"></div>
  <div class="submenu-area">
    <div class="row">
      <div class="submenu-box">
        <div class="col s6 m3">
          <div class="menuBox">
              <div class="menuData">
                <h5>Register</h5>
              </div>
          </div>
        </div>

        <div class="col s6 m3">
          <div class="menuBox">
              <div class="menuData">
                <h5>Register</h5>
              </div>
          </div>
        </div>

        <div class="col s6 m3">
          <div class="menuBox">
              <div class="menuData">
                <h5>Register</h5>
              </div>
          </div>
        </div>

        <div class="col s6 m3">
          <div class="menuBox">
              <div class="menuData">
                <h5>Register</h5>
              </div>
          </div>
        </div>

        <div class="col s6 m3">
          <div class="menuBox">
              <div class="menuData">
                <h5>Register</h5>
              </div>
          </div>
        </div>
      </div>


    </div>
  </div>
   
</div>



 <!-- Modal Structure -->
  <div id="register" class="modal">
    <div class="modal-content">
      <?php
     $this->load->view("register");
     ?>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat add_reg_data">Register</a>
    </div>
  </div>

 <!-- Modal Structure -->
  <div id="changee" class="modal">
    <div class="modal-content">
      <?php $this->load->view("varify"); ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat varify">Agree</a>
    </div>
  </div>  