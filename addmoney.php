<!DOCTYPE html>
<html>
<head><link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<title>Amrita e-Wallet</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <META Http-Equiv="Cache-Control" Content="no-cache">
  <META Http-Equiv="Pragma" Content="no-cache">
  <META Http-Equiv="Expires" Content="0">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
      <link rel="stylesheet" href="css/stars.css">
	  <style>
	  
	#wrapper {
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		-moz-justify-content: space-between;
		-webkit-justify-content: space-between;
		-ms-justify-content: space-between;
		justify-content: space-between;
		position: absolute;
		min-height: 100vh;
		width: 100%;
		z-index: 10;
		height:180%
		overflow:hidden;
		color:white;
	}
	
	
@media all and (max-width: 600px) {
#example {
display:none;
}
	  </style>
 
  </head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html" >Amrita e-Wallet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="display2.php"><span> Go Back</span></a></li>
		<li><a href="home.html"><span class="glyphicon glyphicon-log-out"> logout</span></a></li>

		</ul>
    </div>
  </div>
</nav>

<?php
include 'connect.php';
session_start();
?>

 <div id="wrapper">     
<div class="container-fluid">
<div class="row">

    		<div class="col-md-4" style="padding-left:50px;">
    			<img src="amma.jpg" class="img-circle" width="100" height="110">
				<br/>
    		
<div id="example">
				<h4>We also accept at:</h4>
				<br/>
				<img src="1.png" width="100" height="90">
				<img src="2.png" width="100" height="90">
                <br>
				<img src="3.png" width="90" height="90">
				<img src="4.png" width="200" height="90">
                <br>
				<br>
        <br>
        <br></div>
			</div>
 			
<div class="col-md-5">

<?php


       $sql = "select * from  `logininfo` where `regno`='" . $_SESSION["username"] . "'";


       $result = mysqli_query($db,$sql);
       $row=$result->fetch_object();
       $check=md5('0');
   if($row->profile_password == '0')
    {
  ?>
<h1>Its a first time to add money please </h1><h1>create profile password of four digit</h1>
      <div class="col-md-8">
      	<form method="post" action="updatep.php">

		<div class="form-group">
    
		<label for="usr">Security Password:</label>
		<input type="text" name="ppass" class="form-control" id="usr" width="25px">
		
		</div>
<button class="btn btn-primary btn-lg" type="submit">Create</button>
      	</form>
		</div>

  <?php
  
     }elseif (mysqli_num_rows($result) == 1 && $row->profile_password!= $check)
            {//profile password

   ?>

   

      	<form method="post" action="updatem.php">
		<div class="form-group">
		<label for="usr">Enter Amount:</label>
		<input type="text" name="amount" class="form-control" id="usr">
		</div>
		
		<div class="form-group">
		<label for="usr">Enter Security Password:</label>
		<input type="password" name="ppass" class="form-control" id="usr">
		</div>
		
<button type="submit" class="btn btn-primary btn-lg">Submit</button>
      	</form>


    <?php

             }else
     
      {
      echo "error in logining";
      }
    ?>
		</div>
</div>
</div>

<footer class="foot" style="margin-top: 25px">
      <div class="container" >
        <p>this is the footer</p>
         
            
              <div class="col-md-6">
                <ul class="color">

       <li ><a href="#">About</a></li>
        <li ><a href="order.html">Order us</a></li>
        </ul>
         </div>

        <div class="col-md-6">
          <address>
  <strong>Twitter, Inc.</strong><br>
  1355 Market Street, Suite 900<br>
  San Francisco, CA 94103<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

         <address>
  <strong>Full Name</strong><br>
  <a href="mailto:#">first.last@example.com</a>
         </address>
        </div>
             


      </div>


  </footer>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>

</div>



<script type="text/javascript">
    $().ready(function() {
    if(document.referrer != 'http://localhost:8181/'){ 
        history.pushState(null, null, 'addmoney.php');
        window.addEventListener('popstate', function () {
            history.pushState(null, null, 'addmoney.php');
        });
    }
});
</script>
 <!--

  <canvas id="canvas"></canvas>
    <script src="js/stars.js"></script>
-->
</body>

</html>