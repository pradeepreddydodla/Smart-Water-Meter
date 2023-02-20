<?php 

$username=$_POST['username'];
$oldpass=$_POST['oldpass']; 
$newpass=$_POST['newpass'];


$dbhost =  "localhost";
$dbuser = "someuser";
$dbpass = "somepassword";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"someDB");
if(!$conn) { 
die('Could not connect: ' . mysqli_error()); 
}

$sql = "update admin set password='$newpass' where username='$username' and password='$oldpass'"; 

$rs = mysqli_query($conn,$sql); 
if(!$rs) 
{ 
die('Could not update data: '.mysqli_error($conn)); 
} 
 echo '<script type="text/javascript">'; 
      echo 'alert("Hurray ! Password Updated Successfully.");'; 
      echo 'window.location.href = "home.php";';
      echo '</script>';

?>

