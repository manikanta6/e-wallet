<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
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
<link rel="stylesheet" type="text/css" href="mystyle.css">
		<link rel="stylesheet"  href="css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
		<li><a href="addmoney.php"><span></span> GoBack</a></li>
		<li><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	  </ul>
    </div>
  </div>
</nav>
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
<div class="col-md-8">


<?php
include 'connect.php';
session_start();


$name=$_SESSION["username"];
$_SESSION['amount']=$_POST['amount'];
$amount2=$_POST['amount'];
$date = date('Y-m-d h:i:s');

$credit="credited";
$store="addedmoney";

$inc;
$stmt= $db->prepare("insert into `transac` values(?,?,?,?,?,?)");
$stmt-> bind_param('isisss',$inc,$_SESSION['username'],$_POST['amount'],$credit,$date,$store);
$stmt-> execute();
$stmt-> close();




$sql = "select * from  `logininfo` where `regno`='" . $_SESSION["username"] . "'";


$result = mysqli_query($db,$sql);
$row=$result->fetch_object();
$passp=$row->profile_password;

$sql2 = "select * from  `stored` where `regno`='" . $_SESSION["username"] . "'";
$result2 = mysqli_query($db,$sql2);
$row2=$result2->fetch_object();

$mon=$row2->amount+$amount2;


$ppass=$_POST['ppass'];
$eppass=md5($ppass);
if($passp == $eppass )
{


$sql = "UPDATE stored SET amount= $mon WHERE regno= $name ";

$db->query($sql);



header("location:display2.php");
}else
{
	echo "incorrect profile password";
	?>
	<h1>click to go back</h1>
  <p><a class="btn btn-primary btn-lg" href="addmoney.php" role="button">GoBack</a></p>
	<?php
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

</body>

</html>
