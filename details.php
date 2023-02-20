<?php
session_start();
//extract($_POST);
if(isset($_POST['submit'])){
$servername = "localhost";
$username = "someuser";
$password = "somepassword";
$dbname = "someDB";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}
$a=$_POST["cid"];
echo "<body background='images/bg.jpg'>";
    echo "<br>";
	echo "<br>";
	echo "<h1 align='center'><font color='black'><span style='background-color: #fff; border: 1px solid'> &nbsp; Customer Details &nbsp;  </span></font></h1>";
	echo "<br>";
	
	echo "<br>";
	echo "<br>";
//$uname = $_POST['field1'];
//if($_SESSION["login_user"]{
$sql= "select * from details where cid='$a'";
}
$res = mysqli_query($conn,$sql);
while($num = mysqli_fetch_assoc($res)){
echo "<br>";
echo "<br>";
echo "<table border=1 align=center cellspacing=10 cellpadding=5 bgcolor=white >";
echo "<form>";
echo "<tr>";
echo "<td>";
echo "<b>Customer ID:</b>";
echo "</td>";
echo "<td>";
echo $num['cid'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Name:</b>";
echo "</td>";
echo "<td>";
echo $num['name'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Mobile:</b>";
echo "</td>";
echo "<td>";
echo $num['mobile'];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Email:</b>";
echo "</td>";
echo "<td>";
echo $num['email'];
echo "</td>";
echo "</tr>";

echo "</form>";

echo "</table>";

echo "<br>";
echo "<br>";
echo "<br>";
		echo "<br>";
		echo "<p align='center'>";
		echo "<a href='home.php'><input type='submit' value='Go Back'></a>";
		echo "</p>";
}
?>