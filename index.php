<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APP</title>
<meta name="description" content="">
<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css"  href="reset.css" />
    <link rel="stylesheet" type="text/css"  href="style.css" />
   <script type="text/javascript" src="jsjquery-1.2.6.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
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

						 <span class="sr-only">APP</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" target="_blank" title="Tp enregistrement">APP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
           
		<li><a href="prise1.php" target="_blank">About</a></li> 
				<li><a href="prise2.php" target="_blank"> Create an account</a></li> 

 <li> <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            My Account<span class="caret"></span></a>
              <ul class="dropdown-menu">
	<li>	<a href="om/index.php"><span class="glyphicon glyphicon-log-in"></span>  Sign In </a></li>
           
		  </li>
          </ul>
             <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Useful Information
 <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li><a href="equipe.php" target="_blank">Feedback</a></li>
               </ul>
		    </li>
			   
                <li><a href="contact.php" target="_blank">Contact</a></li>
          </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
  </div>
	  <ul class="nav navbar-nav navbar-right">

</ul>
</nav>


  
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide" class="item">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                        </ol>
						
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
						
                            <div class="item active">
                               <center> <img class="img-responsive img-full"   src="assets/img/1.jpg" width="900" alt=""> </center>
                            </div>
                            <div class="item">
                               <center> <img class="img-responsive img-full"   src="assets/img/3.jpg" width="900" alt=""> </center>
                            </div>
                            <div class="item">
                               <center> <img class="img-responsive img-full"   src="assets/img/4.jpg" width="700" alt=""></center>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
						
                    </div>
					 
					
			
      </ul>
	</p>	
	</ul>
	</div></div>
		  <br><br><br>
	
	</div>
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p align="center">Copyright &copy; 2020. |</p>
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