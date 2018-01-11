<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>CodeIgniter - <?php echo $pageTitle; ?></title>
    <!-- CSS-->
    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans|Quicksand|Raleway" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <!-- font Link -->
    <link href="https://fonts.googleapis.com/css?family=Gentium+Basic|Molengo|Poiret+One|Tenor+Sans" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <script type="text/javascript" src="http://twemoji.maxcdn.com/twemoji.min.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php if($this->session->userdata('email')){  ?>
 <nav>
    <div class="nav-wrapper">
    <!--  <a href="#" class="brand-logo">Logo</a> -->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <!-- <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li> -->
        <li><a href="<?php echo base_url(); ?>User_login/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a> </li>
      </ul>
    </div>
  </nav>

<?php }  ?>
   
</head>
<body>