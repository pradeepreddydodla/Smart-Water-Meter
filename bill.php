<?php
session_start();
$servername = "localhost";
$username = "someuser";
$password = "somepassword";
$dbname = "id4646439_wcb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    echo "<br>";
	echo "<br>";
	echo "<h1 align='center'><font color='black'><span style='background-color: #fff; border: 1px solid'> &nbsp; Bill Details &nbsp;  </span></font></h1>";
	echo "<br>";
	
	
	echo "<br>";
	echo "<br>";
	
$cid=$_POST['cid'];
$from=$_POST['from'];
$to=$_POST['to'];
$sql = "SELECT cid,sum(data) FROM customer where cid='$cid' AND DATE(time) BETWEEN '$from' AND '$to'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<body background=images/bg.jpg>";
  
    while($row = $result->fetch_assoc()) {
    
    
echo "<table border=1 align=center cellspacing=10 cellpadding=5 bgcolor=white >";
echo "<form>";


echo "<tr>";
echo "<td>";
echo "<b>Customer ID:</b>";
echo "</td>";
echo "<td>";
echo $row['cid'];
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>";
echo "<b>From:</b>";
echo "</td>";
echo "<td>";
echo $from;
echo "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>";
echo "<b>To:</b>";
echo "</td>";
echo "<td>";
echo $to;
echo "</td>";
echo "</tr>";











echo "<tr>";
echo "<td>";
echo "<b>Consumption:</b>";
echo "</td>";
echo "<td>";
echo $row['sum(data)'];
echo " Litres";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<b>Amount:</b>";
echo "</td>";
echo "<td>";
echo 3*$row['sum(data)'];
echo " (1 Litre = 3 Rupees)";
echo "</td>";
echo "</tr>";

echo "</form>";

echo "</table>";
		
		echo "<br>";
		echo "<br>";
		$cid=$row['cid'];
		$data=$row['sum(data)'];
		$_SESSION['cid'] = $cid; 
		$_SESSION['data'] = $data; 
        echo "<br>";
        echo "<p align='center'>";
        echo "<a href='message.php'><input type='submit' value='Send Message'></a>";
		
		echo "<br>";
		echo "<br>";
        echo "<a href='mail.php'><input type='submit' value='Send Mail'></a>";
		echo "<br>";
		echo "<br>";
		echo "<a href='home.php'><input type='submit' value='Go Back'></a>";
		echo "</p>";
		
		
	}   
    
} else {
    echo "0 results";
}
$conn->close();
?>
