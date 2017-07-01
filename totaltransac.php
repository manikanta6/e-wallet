
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

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
            <a class="navbar-brand" href="display2.php" >go back</a>

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
	<div class="col-md-4">
        		
      <?php
        		//tr_ =transaction follwed the name
					$tr_sql = "select * from  `transac` where `regno`='" . $_SESSION['username'] . "'";
					$tr_result=$db->query($tr_sql);
			?>
					<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
				<th>Amount</th>
				<th>Type</th>
				<th>Date_Time</th>
				<th>Store</th>
				</tr>
			</thead>
	<tbody>	
			<?php

					while($tr_row=$tr_result->fetch_object())
					{
						
					    $tr_money=htmlentities($tr_row->charge,ENT_QUOTES,"UTF-8");
              $tr_type=htmlentities($tr_row->type,ENT_QUOTES,"UTF-8");
              $tr_time=htmlentities($tr_row->date_time,ENT_QUOTES,"UTF-8");
              $tr_store=htmlentities($tr_row->store,ENT_QUOTES,"UTF-8");

		  ?>

					<tr>
						<td><?php echo $tr_money;?></td>
            <td><?php echo $tr_type;?></td>
            <td><?php echo $tr_time;?></td>
            <td><?php echo $tr_store;?></td>
					</tr>
					
			<?php
					}
			?>
			
	</tbody>
					</table>


        	</div>
</div>
        	<div class="col-md-4" style="padding-left: 80px" >
      <?php


    			$sql = "select * from  `logininfo` where `regno`='" . $_SESSION['username'] . "'";
    			$result = mysqli_query($db,$sql);

         if (mysqli_num_rows($result) == 1) 
         {

    			$sql = "select * from  `stored` where `regno`='" . $_SESSION['username'] . "'";
    			$results = mysqli_query($db,$sql);
    			$row=$results->fetch_object();
			?>
             <h3>balance:</h3>
			<?php

			    $money=htmlentities($row->amount,ENT_QUOTES,"UTF-8");
			?>
		     	<h1><?php  echo $money; ?></h1>

          <button class="btn btn-primary btn-lg" type="submit"><a href="addmoney.php" ><h6 style="color:white;text-decoration:none;"> <i class="fa fa-bolt" ></i> Add Money</h6></button> /
     <?php
              
         }else
         {

    
    	header("location:error1.html");

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

<script type="text/javascript">
    $().ready(function() {
    if(document.referrer != 'http://localhost:8181/'){ 
        history.pushState(null, null, 'totaltransac.php');
        window.addEventListener('popstate', function () {
            history.pushState(null, null, 'totaltransac.php');
        });
    }
});
</script>

</div>
<!--

  <canvas id="canvas"></canvas>
    <script src="js/stars.js"></script>
-->
</body>

</html>