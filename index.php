<!DOCTYPE html>
<html>
<head>
	<title>SADA-WCB</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]?>">
						<input type="text" name="username" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<div class="submit">
							<input type="submit" name="submit" value="LOGIN" >
					</div>	
					<p><a href="#">Forgot Password ?</a></p>
				</form>
			</div><br><br><br><br>
			<!--//End-login-form-->
			
			 <!-----start-copyright---->
   					<!--<div class="copy-right">
						<p>Made with by <a href="http://I0softsol.com">I0 Software Solutions</a></p> 
					</div>
				<!-----//end-copyright---->
				
		</div>
			 <!-----//end-main---->
		 		
</body>
</html>





<!-- ==================================================USER AUTHENTICATION ============================================================== -->


<?php

// establishing the MySQLi connection
$servername = "localhost";
$username = "someuser";
$password = "somepassword";
$dbname = "id4646439_wcb";


$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['submit'])){
 
 session_start();
$username = mysqli_real_escape_string($con,$_POST['username']);

$password = mysqli_real_escape_string($con,$_POST['password']);
 
 $_SESSION['login_user']=$username; 

$sel_user = "select * from admin where  username='$username' AND password='$password'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['username']=$username;

echo "<script>window.open('home.php','_self')</script>";

}

else {

echo "<script>alert('Invalid Credentials, try again!')</script>";

}

}

?>
