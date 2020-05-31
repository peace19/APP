<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">

$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 60000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

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
                <li><a href="S.mp4"target="_blank">Message de la Clinique</a></li>
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

  
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Bravo!</strong>  votre demande est enregistré.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; vers la page d'acceuil
    </button>
    
</div>

</div>

</body>
</html>