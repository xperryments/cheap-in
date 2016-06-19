<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="docs/css/highlight.css" rel="stylesheet">
		<link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
		<link href="http://getbootstrap.com/assets/css/docs.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
			#btn_signup {
				width: 50%;
				float: right;
				margin-top: -6px;
			}
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
		<div class="container">
		  <div class="row">
			  <div id="logo-container"></div>
			  <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
				<form action="includes/process_login.php" method="post" name="login_form">                      
				  <div class="form-group">
					<div class="well">Sign In Page<button type="button" id="btn_signup" class="btn btn-success">Sign up</button></div>
				  </div>
				  <div class="form-group input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input class="form-control" type="text" name='email' placeholder="email"/>          
				  </div>
				  <div class="form-group input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input class="form-control" type="password" name='password' placeholder="password"/>     
				  </div>
				  <div class="checkbox">
					<label>
					  <input type="checkbox" data-switch-no-init> I agree to the <a href="#">Terms and Conditions</a>
					</label>
				  </div>
				  <div class="form-group">
					<button type="button" class="btn btn-primary btn-block" onclick="formhash(this.form, this.form.password);">Sign In</button>
				  </div>
				  <div class="form-group text-center">
					<a href="#">Forgot Password</a>&nbsp;|&nbsp;<a href="#">Support</a>
				  </div>
				</form>        
			  </div>  
		  </div>
		</div>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<script src="docs/js/jquery.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="docs/js/highlight.js"></script>
		<script src="dist/js/bootstrap-switch.js"></script>
		<script src="docs/js/main.js"></script>
	</body>
</html>