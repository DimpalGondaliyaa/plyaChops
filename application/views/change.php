  <div class="parallax-container">
      <div class="parallax"><img src="<?php echo base_url(); ?>html/images/change.jpg"></div>

       <nav class="change-nav">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile menu-uL" class="right hide-on-med-and-down chenge-ul">
        <li><a class="menu-uL" id="reg">studentRegister</a></li>
         <li><a class="menu-uL" id="tech_reg">Teacher Register</a></li>
        <li><a class="menu-uL" id="change">change password</a></li>
        <li><a href="<?php echo base_url(); ?>user_manager" class="menu-uL">manage user</a></li>
         <li><a href="<?php echo base_url(); ?>circular" class="menu-uL">Circular</a></li>
        <li> <a class="logout" href="<?php echo base_url(); ?>change/logout" ><i class="fa fa-power-off" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </nav>
    </div>
<?php echo $this->session->userdata('email'); ?>


 <!-- student Modal Structure -->
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

 <!-- teachure Modal Structure -->
  <div id="tech_register" class="modal">
    <div class="modal-content">
      <?php
     $this->load->view("teacher_reg");
     ?>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat add_teach_data">Register</a>
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