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
		height:100%
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
		<li><a href="seller2.php"><span> MerchantPage</span></a></li>
		<li><a href="merchantamount.php"><span> MerhcantTransaction</span></a></li>
		<li><a href="datetodate.html"><span> TotalTransaction</span></a></li>
<li><a href="home.html"><span class="glyphicon glyphicon-log-out"> logout</span></a></li>

		</ul>
    </div>
  </div>
</nav>
<?php
   include 'connect.php';
   session_start();
   $Date2=$_POST['date1'];
   $Date3=$_POST['date2'];
  

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
				<img src="1.png" width="100" height="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="2.png" width="100" height="90">
                <br>
				<img src="3.png" width="90" height="90">
				<img src="4.png" width="200" height="90">
                <br>
				<br>
        <br>
        <br></div>
			</div>
			
			
	<div class="col-md-6">
	<h3>These are the transactions from <?php echo "$Date2"; ?> to <?php echo "$Date3"; ?></h3>
<?php

    $total=0;

    $sql = "select * from  `transac` where `store`='" . $_SESSION["storename"] . "' AND date_time >= '".$Date2."' AND date_time <= '".$Date3."'";
  
     

    $result = mysqli_query($db,$sql);
  ?>
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
				<th>RegNo</th>
				<th>Amount</th>
				<th>Date_Time</th>
				<th>Store</th>
				</tr>
			</thead>
	<tbody>								
      <?php
    while($row=$result->fetch_object())
     {
     $reg=htmlentities($row->regno,ENT_QUOTES,"UTF-8");
     $money=htmlentities($row->charge,ENT_QUOTES,"UTF-8");
     $total=$money + $total;
     $time=htmlentities($row->date_time,ENT_QUOTES,"UTF-8");
     $store=htmlentities($row->store,ENT_QUOTES,"UTF-8");
    ?>


		<tr>
            <td><?php echo $reg;?></td>
		    <td><?php echo $money;?></td>
			<td><?php echo $time;?></td>
			<td><?php echo $store;?></td>
		</tr>								
    <?php
      }
     ?>
	</tbody>	 
	</table>
	</div>
     <h1>
     	The total amount to be given is <?php echo "$total";?>
     </h1>
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
 <!--

  <canvas id="canvas"></canvas>
    <script src="js/stars.js"></script>
-->
</body>

</html>
 			