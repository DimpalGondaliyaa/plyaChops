<?php
    $this->load->view("includes/teacher_header.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/teacher_footer.php",$footerData); 
?>