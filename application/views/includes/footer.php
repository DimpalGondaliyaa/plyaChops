
 <!-- Modal Structure -->
  <div id="register" class="modal">
    <div class="modal-content">
      <?php
     //$this->load->view("register");
     ?>
    </div>
    <div class="modal-footer">
      <a class="modal-action modal-close waves-effect waves-green btn-flat add_reg_data">Register</a>
    </div>
  </div>

 <!-- Modal Structure -->
  <div id="changee" class="modal">
    <div class="modal-content">
      <?php //$this->load->view("varify"); ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat varify">Agree</a>
    </div>
  </div>  

<footer>
  <div class="footer">
    
  </div>
</footer>

	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>