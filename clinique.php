<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clinique médicale</title>
<meta name="description" content="">
<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css"  href="reset.css" />
    <link rel="stylesheet" type="text/css"  href="style.css" />
   <script type="text/javascript" src="jsjquery-1.2.6.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
body {padding-top:70px; background:#0066FF; width:1000;}
</style>
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="script.js"></script>
   
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	
	
	
}

</script>
    <!---fin slide-->
    
 <script type="text/javascript" src="js/scripts.js"></script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Clinique médicale</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" target="_blank" title="Tp enregistrement">Clinique médicale</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Acceuil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="prise.php" target="_blank">Prise en charge</a></li>
                <li><a href="clinique.php" target="_blank">Clinique d'urgence</a></li>                
              </ul>
            </li>
            <li><a href="prise2.php" target="_blank">Prise de rendez-vous</a></li>
			
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Informations utiles <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="equipe.php" target="_blank">Equipe médical</a></li>
                <li><a href="S.mp4" target="_blank">Message de la Clinique</a></li>
               </ul>
			   </li>
                <li><a href="contact.php" target="_blank">Contact</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	  <ul class="nav navbar-nav navbar-right">
<ul class="nav navbar-nav navbar-left">
<li><a href="om/index.php"><span class="glyphicon glyphicon-log-in"></span>  Connexion </a></li>
</ul>
</ul>
</nav>
<br><br>
<div class="container">
<div class="row">
<div  class="col-lg-4 col-lg-offset-4">
<div class="nav navbar-nav navbar-center">
<div class="well"  style=" height:610px; width:680px; color:#666666">
<ul class="nav navbar-nav navbar-left">
				<br> <p><img   src="assets/img/adr.png"  class="center-block" width="300"/></p>	
			  </ul>
			   
			<ul class="nav navbar-nav navbar-right">  
			  <h4><i>Urgences Mineures</i></h4>
		Les médecins de la Clinique,<br>
         participent à la Clinique d'urgences mineures.<br>        
		  Ce sont des services offerts par<br>
		 l'ensemble des médecins,<br>
		 sur rendez-vous accordés <br>
		 dans les heures précédentes,<br>
		  Priorité est accordée selon <br>
		  la prise de rendez-vous.<br>	
      </ul>
	  
</div></div></div></div></div>

<div class="container">
<div class="row">
<div  class="col-lg-4 col-lg-offset-4">
<div class="nav navbar-nav navbar-center">
<div class="well"  style=" height:320px; width:600px;color:#666666">
<ul class="nav navbar-nav navbar-left">
				<br> <p><img    src="assets/img/give.png"  class="center-block" width="270"/></p>	
			  </ul>
			   
			<ul class="nav navbar-nav navbar-right">  
			  <h2><i>Samedi et Dimanche</i></h2>
		<li>Si vous avez une urgence grave<br>
		veuillez composer le 911.<br></li> 
		
        
    
		
      </ul>
	  
</div></div></div></div></div>

	
	<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p align="center">Copyright &copy; 2017. |</p>
                </div>
            </div>
        </div>
    </footer>		

	
  

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

     
    
</body>
</html>