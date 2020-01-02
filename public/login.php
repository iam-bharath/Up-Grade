<?php 

include('layouts/header1.php');
require_once("../includes/initialize.php");
require_once("../includes/db.php");

if($session->is_logged_in()) {
  	redirect_to("home.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { 

  	$email = htmlentities(trim($_POST['email']));
  	$password = $_POST['password'];

	// Check database to see if email/password exist.
	  
  	$user = new User();
	$found_user = $user->authenticate($email, $password);

	if ($found_user) {
	    $session->login($found_user);
	    redirect_to("home.php");
	} else {
	    // username/password combo was not found in the database
	    $message = "Username/password combination incorrect.";
	}
  
} else { // Form has not been submitted.
	$username = "";
	$password = "";
}
?>
<style>
    body{
   
  padding: 15px 80px;
  font-family: Montserrat,sans-serif;
   background: url("./pictures/upsc.jpg") ; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
    c{
        font-size: 13px;
    }
</style>
<body background="./pictures/upsc.jpg">
<div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">

		<div class="well well-lg col-sm-offset-2 col-sm-8">
			<?php echo output_message($message); ?>
		    <form class="form-horizontal" action="login.php" method="post">
			    <div class="form-group">
			        <label for="email" class="col-sm-3 control-label"><c>Email address</c></label>
			        <div class="col-sm-5">
			        	<input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
		        	</div>	
			    </div>
			    <div class="form-group">
			        <label for="password" class="col-sm-3 control-label"><c>Password</c></label>
			        <div class="col-sm-5">
			        	<input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
		        	</div>
			    </div>
			    <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      	<div class="checkbox">
				        	<label>
				          	<input type="checkbox"> Remember me
				        	</label>
				      	</div>
				    </div>
			  	</div>
			    <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      	<button type="submit" name="submit" class="btn btn-primary"><b>Sign in</b></button>
				    </div>
			  	</div>
			</form>
			<div class="row">
				<div class="col-xs-12 col-md-9 col-md-offset-3">
					<p>Or sign up if you don't have an account yet</p>
					<a href="sign_up.php"><button class="btn btn-primary"><b>Sign up</b></button></a>
				</div>
			</div>
		</div>
       
	</div>
</div><!-- /.row -->   
</body>   

<!-- <?php include('layouts/footer.php'); ?> -->