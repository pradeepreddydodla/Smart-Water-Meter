<!DOCTYPE html>
<html lang="en">
<head>
  <title>WCB-HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1700px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
	<br>
      <h4>Water Control Board - SADA</h4><br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
     <li><a href="#section2">Add Customer Info</a></li>
     
		   <li><a href="#section3">Know Customer Details</a></li>
           <li><a href="#section1a">Detect Leakage</a></li>
      <li><a href="#section4">Change Password</a></li>
	  <li><a href="logout.php">Logout</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
	<br>
	
      <h4 align="center">GENERATE BILLS</h4>
      <hr>
	  <br>
      <p>&nbsp;&nbsp;&nbsp;<span class="badge">G</span><b> Generate Bill:</b></p><br><br>
       <center>
      <form role="form" name="f2" method="post" action="bill.php" >
	  
        <div class="form-group">
		
          &nbsp;<label><b>Customer ID:</b></label>&nbsp;<input type="text" name="cid"  required /><br><br>
		  <label><b>From Date:</b></label>&nbsp;<input type="date" name="from" required /><br><br>
		  &nbsp;&nbsp;&nbsp;&nbsp;<label><b>To Date:</b></label>&nbsp;&nbsp;<input type="date" name="to"  required /><br><br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="generate" value="Generate Bill" class="btn btn-success">
      </div>
	  </form>
	  </center>


      <br><br>
      <br>
	  
	  
	  
	  
	  
	  <hr>
      
      <div class="row" id="section2">
   
        <div class="col-sm-10"><br>
		<p>&nbsp;&nbsp;<span class="badge">A</span>&nbsp;<b>Add Customer Info:</b></p><br><br>
         <p align="justify">New Customers are given with a unique customer id. Customer personal and 
		 contact details can be synced with the given customer id from here.These details are used to know more about customers
		 and also these details help admin to send messages or mails to customers directly for the monthly bills. 
		 
		 
		 </p><br><br>
		 <div align="right">
		
		 <a href="add.php"><input type="submit" name="submit" value="Add Details" class="btn btn-success"></a><br><br><br><br><br><br>
            </div>
			<hr>
            <br>
			</div>
			
	  
	  
	  
	  
	
	  
	  
	  
	  
      <hr>
      
      <div class="row" id="section3">
	 
   
        <div class="col-sm-10"><br>
		 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">K</span><b>Know Customer Details:</b></p><br><br>
         &nbsp;
		 <form method="post" action="details.php" name="form" enctype="multipart/form-data">
		 <center>
		 <label><b>Customer ID:</b></label>
		
		 <input type="text" name="cid"  required /><br><br>
		 &nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="submit" name="submit" value="Get Details" class="btn btn-success"><br><br><br><br><br><br>
            <hr>
            <br>
			</div>
			</center>
			</form>
			
            <hr>
              
              
               <div class="col-xs-9" id="section1a">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">D</span><b> Detect Leakage:</b></p><br><br>
			  <center>
         	  
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;
		  <a href="detect.php"><input type="submit" name="Detect Leakage" value="Detect Leakage" class="btn btn-success"></a>
              </center>
              </div>
              
              <br>
             
			
			
			
			
			
			
			
            <div class="col-xs-10" id="section4">
            <br><br>
            <hr>
            <br>
			
               <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge">C</span><b> Change Password:</b></p><br><br>
			  <center>
         <form method="post" action="password.php" name="form" enctype="multipart/form-data">
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Username:</b></label>
		 
		  <input type="text" name="username" required /><br><br>
       
		  <label><b>Old Password:</b></label>
		  
		  <input type="text" name="oldpass" required /><br><br>
          
		  <label><b>New Password:</b></label>
		 <input type="text" name="newpass" required /><br><br>   	  
          &nbsp;&nbsp;	
		  <input type="submit" name="update" value="Update" class="btn btn-success">
              </center>
              
              
        
			
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
   <div align="center"><p align="center">All rights reserved by &copy; Spatialytics</p>
  Designed by <a href="http://www.izero.ml" target="_new">iZero</a></div>
</footer>

</body>
</html>




