<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>TWIS</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
  
   
    <nav style="margin-bottom:100px"class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
		<img style="width:170px" class="img-fluid" src="images/l.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active btn-new from-middle animated" href="index.html">Ahabanza</a>
            </li>
            

          </ul>
        </div>
      </div>
    </nav>
	
	<div  id="home" class="ct-header ct-header--slider ct-slick-custom-dots">
		<div class="ct-slick-homepage" data-arrows="true" data-autoplay="false">

			<div class="ct-header tablex item" data-background="images/2.jpg">
				<div class="ct-u-display-tablex">
					<div class="inner">
						<div class="container">

                       
							
                       

							<div style="margin-top:100px," class="row">
								<div class="col-md-8 col-lg-8 slider-inner">
                                
                                    <div class="login-form">
                                    
                            <form style="margin-top:100px, background:black; opacity:0.8"class="form-control" action="#/" onsubmit="new_school();return false;" method="post">
                          
                            <div class="alert alert-success"> Kwiyandikisha (Umubyeyi)</div>
                           
                       
                                <form action="#/" onsubmit="new_parent();return false;" method="post">
                                
        
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Your UserName" required autofocus >
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Your Email" required autofocus >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Password" required autofocus  >
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password" id="confirm_password" name="password" placeholder="Password" required autofocus onkeyup='check();'>
                                    <span id='message'></span>



                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>

                                <button id='reg_button' class="btn-new from-middle animated" >Iyandikishe</button>
                               
                              <div style="margin-top:15px">
                                    Do you have account?<a href="login.php">Sign In</a> | Go Back  <a href="index.php">Home</a>
                                    
                                    
                                   </div>
                            
                                   
                                
                            </form>
                           
                        

                        </div>


									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div><!-- .ct-slick-homepage -->
	</div><!-- .ct-header --> 

    


    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Twisomere</a>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/animated-slider.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <script>
        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password Match';
            document.getElementById('reg_button').innerHTML = '<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>';

          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password is Not Matching';
          }
        }
    </script>

</body>
</html>