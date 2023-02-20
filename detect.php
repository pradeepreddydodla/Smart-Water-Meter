<?php


echo "<body bgcolor= pink>";

    echo "<br>";
	
	
    echo "<h3 align=center >WATER LEAKAGE DETECTION SYSTEM</h3>";
    echo "<p align='center'>For a smart city</p>";
	echo "<br><br>";
	

          echo '<p  STYLE="position:absolute; TOP:250px; LEFT:250px;border:2px solid #87ceeb;border-width:2px;padding:5px 35px;">
          Tank (111)</p>';
          echo "<br>";
          echo "<br>";
          
          echo '<p id ="slot1"   STYLE="position:absolute; TOP:280px; LEFT:250px; padding:30px 123px 90px 20px;background-color:#87ceeb;">
          </p>';
          
          
          
          //Sensor -1
          
          echo '<p  STYLE="position:absolute; TOP:140px; LEFT:600px;border:2px solid #87ceeb;border-width:2px;padding:5px 25px;">
          Sensor (222)</p>';
           echo '<p id ="slot1"   STYLE="position:absolute; TOP:153px; LEFT:735px; padding:3px 95px 4px 250px;background-color:#87ceeb;"></p>';
          echo "<br>";
          echo "<br>";
          
        
       
       
       
       
          //Sensor -2
          
          echo '<p  STYLE="position:absolute; TOP:480px; LEFT:600px;border:2px solid #87ceeb;border-width:2px;padding:5px 25px;">
          Sensor (333)</p>';
           echo '<p STYLE="position:absolute; TOP:493px; LEFT:735px; padding:3px 95px 4px 250px;background-color:#87ceeb;"></p>';
          echo "<br>";
          echo "<br>";
    








$servername = "localhost";
$username = "someuser";
$password = "somepassword";
$dbname = "someDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT sum(data) FROM customer where cid='111'";

$sql2 = "SELECT sum(data) FROM customer where cid='222'";

$sql3 = "SELECT sum(data) FROM customer where cid='333'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

  
    while($row1 = $result1->fetch_assoc()) {
    
    while($row2 = $result2->fetch_assoc()) {
    
    while($row3 = $result3->fetch_assoc()) {
    

            $t1=$row1['sum(data)'];
            $s1=$row2['sum(data)'];
            $s2=$row3['sum(data)'];
            $StreetTotal=$s1+$s2;



    
           if($t1<=$StreetTotal)
           {
           //Vertical Line
           echo '<p STYLE="position:absolute; TOP:153px; LEFT:530px; padding:200px 4px 147px 4px;background-color:#87ceeb;"></p>';
           
           //111 Horizontal
           echo '<p STYLE="position:absolute; TOP:340px; LEFT:390px; padding:3px 120px 4px 25px;background-color:#87ceeb;"></p>';
           
           //222 Horizontal
           echo '<p STYLE="position:absolute; TOP:153px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#87ceeb;"></p>';  
           
           //333 Horizontal
           echo '<p STYLE="position:absolute; TOP:493px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#87ceeb;"></p>';
           
           //Warning Label
           echo '<p STYLE="position:absolute; TOP:580px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#87ceeb;">NO LEAKAGE FOUND</p>';
           }
           
           else
           {
           //Vertical Line
           echo '<p STYLE="position:absolute; TOP:153px; LEFT:530px; padding:200px 4px 147px 4px;background-color:#FF0000;"></p>';
           
           //111 Horizontal
           echo '<p STYLE="position:absolute; TOP:340px; LEFT:392px; padding:3px 120px 4px 20px;background-color:#FF0000;"></p>';
           
           //222 Horizontal
           echo '<p STYLE="position:absolute; TOP:153px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#FF0000;"></p>';  
           
           //333 Horizontal
           echo '<p STYLE="position:absolute; TOP:493px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#FF0000;"></p>';
           
           //Warning Label
            echo '<p STYLE="position:absolute; TOP:580px; LEFT:535px; padding:3px 40px 4px 25px;background-color:#FF0000;">LEAKAGE DETECTED B/W TANK AND STREETS</p>';
           }
           
}}}
?>