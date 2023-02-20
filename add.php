<html>
  <head>     
      
	   <meta charset="UTF-8">
  <title>Add Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="shortcut icon" href="favicon.png" />
      <link rel="stylesheet" href="css/registerstyle.css">

	

  </head>
  
  
 
  
  
   <body bgcolor="#337ab7">
<br><br>
     <form name="form1" method="post" action="<?php $_SERVER["PHP_SELF"]?>" >
      <br>
        <h1>Add Details Here</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your Basic Info</legend><br>
          <label for="password">Customer ID:</label>
          <input type="text"  name="cid" required>
		  
		  
		  <label for="name">Name:</label>
          <input type="text"  name="uname"  required>
		 
		 
  
          
		   <label for="name">Mobile:</label>
          <input type="text"  name="phone"  required>
          
		  
		  <label for="mail">Email:</label>
          <input type="email"  name="email"  required>
		
        	  
		  
        </fieldset>
        <div align="center" >
		<input type="submit" name="submit" value="Submit" >
		</div>
       <br><br>
      </form>
      
    </body>
  
  

</html>










 
  
<?php
if(isset($_POST['submit']))
{

//database connection
$servername = "localhost";
$username = "id4646439_wcbuser";
$password = "pradeepreddy@100";
$dbname = "id4646439_wcb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$var1 = mysqli_real_escape_string($conn, $_POST['cid']);
$var2 = mysqli_real_escape_string($conn, $_POST['uname']);
$var3 = mysqli_real_escape_string($conn, $_POST['phone']);
$var4 = mysqli_real_escape_string($conn, $_POST['email']);


$sql = "INSERT INTO details (cid,name,mobile,email)
VALUES ('$var1','$var2','$var3','$var4')";

if (mysqli_query($conn, $sql)) 
{
        
      echo '<script type="text/javascript">'; 
      echo 'alert("Hurray ! Successfully Added.");'; 
	  echo 'window.location.href = "home.php";';
      echo '</script>';


} 
else 
{
   echo "<script>alert('Invalid Details!')</script>";
}
mysqli_close($conn);
}
?>    
  