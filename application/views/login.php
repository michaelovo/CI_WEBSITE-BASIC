<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Christopher Wayo Ayabam Foundation</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url("resources/assets/bootstrap/css/bootstrap.min.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("resources/assets/font-awesome/css/font-awesome.min.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("resources/assets/css/form-elements.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("resources/assets/css/style.css");?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js");?>"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js");?>"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url("resources/assets/ico/favicon.png");?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("resources/assets/ico/apple-touch-icon-144-precomposed.png");?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("resources/assets/ico/apple-touch-icon-114-precomposed.png");?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("resources/assets/ico/apple-touch-icon-72-precomposed.png");?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("resources/assets/ico/apple-touch-icon-57-precomposed.png");?>">




        <link rel="icon" href="images/favicon.ico">
        <link rel="shortcut icon" href="<?php echo base_url("resources/images/favicon.ico");?>" />
        <link rel="stylesheet" href="<?php echo base_url("resources/css/form.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("resources/css/thumbs.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("resources/css/slider.css");?>">
        <link rel="stylesheet" href="<?php echo base_url("resources/css/style.css");?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        				<!-- Optional theme -->
        				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- toastr-->
        				<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

        				<!-- header toastr link(444) and sweetalert link(445)-->
        						<script src ="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>




        				<!--toastr end -->
        <link rel="stylesheet" href="<?php echo base_url("resources/css/form.css");?>" >
        <script src="<?php echo base_url("resources/js/jquery.js");?>"></script>
        <script src="<?php echo base_url("resources/js/jquery-migrate-1.2.1.js");?>"></script>
        <script src="<?php echo base_url("resources/js/script.js");?>"></script>
        <script src="<?php echo base_url("resources/js/superfish.js");?>"></script>
        <script src="<?php echo base_url("resources/js/sForm.js");?>"></script>
        <script src="<?php echo base_url("resources/js/jquery.ui.totop.js");?>"></script>
        <script src="<?php echo base_url("resources/js/jquery.equalheights.js");?>"></script>
        <script src="<?php echo base_url("resources/js/jquery.easing.1.3.js");?>"></script>
        <script src="<?php echo base_url("resources/js/jquery.iosslider.min.js");?>"></script>
    </head>

    <body  style="background-color:#D7AD73">
      <div style="background-color:#FFFFFF; ">
      <header>
        <!-- navbar-->
          <?php include('navbar.php');?>
        <!--end navbar --->

      		</header>
        </div>

        <!-- Top content -->
                    <div class="inner-bg">
                <div class="container"  style="background-color:#ffffff">

                                       <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>
				                    </form>
			                    </div>
		                    </div>

		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus		                        	</a>	                        	</div>
	                        </div>
                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..."
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>
                        </div>
                    </div>

                </div>
            </div>

        <?php include 'footer.php';?>
        <!-- Javascript -->
        <script src="<?php echo base_url("resources/assets/js/jquery-1.11.1.min.js");?>"></script>
        <script src="<?php echo base_url("resources/assets/bootstrap/js/bootstrap.min.js");?>"></script>
        <script src="<?php echo base_url("resources/assets/js/scripts.js");?>"></script>



    </body>

</html>
