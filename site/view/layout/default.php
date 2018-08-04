<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Mon site'; ?></title> 
    
          <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL.DS.'webroot'.DS.'css'.DS.'css'.DS.'bootstrap.css';?>" />

 
    <!-- Custom styles for this template -->
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL.DS.'webroot'.DS.'css'.DS.'css'.DS.'main.css';?>" />
       <link rel="stylesheet" type="text/css" href="<?= BASE_URL.DS.'webroot'.DS.'css'.DS.'css'.DS.'icomoon.css';?>" />
      <link rel="stylesheet" type="text/css" href="<?= BASE_URL.DS.'webroot'.DS.'css'.DS.'css'.DS.'animate-custom.css';?>" />
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
 


    </head> 
    <body>      
      
          
    <div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home">
          <span class="icon glyphicon glyphicon-heart-empty" style="font-size:18px; color:#3498db;">
          <!-- ICI LE LOGO -->
          </span>
          </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
            <li> <a href="#about" class="smoothScroll">About us</a></li>
            <li> <a href="#What we do" class="smoothScroll">What we do</a></li>
            <li> <a href="#Get Involved" class="smoothScroll">Get Involved </a></li>
            <li> <a href="#Events" class="smoothScroll">Events</a></li>
            <li> <a href="#Our Services" class="smoothScroll"> Our Services</a></li>
            <!--ICI ON A ENLEVE BLOG -->
            <li> <a href="#contact" class="smoothScroll"> Contact us</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
   
        <div class="container" style="padding-top:60px;">
            <?php echo $content_for_layout; ?>
        </div>
         
    </body> 
   <script src="<?= BASE_URL.DS.'webroot'.DS.'js'.DS.'js'.DS.'jquery.min.js';?>"></script>
  <script type="text/javascript" src="src="<?= BASE_URL.DS.'webroot'.DS.'js'.DS.'js'.DS.'modernizr.custom.js';?>""></script>
</html>