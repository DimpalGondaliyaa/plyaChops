<?php
    $this->load->view("includes/header.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/footer.php",$footerData); 
?>