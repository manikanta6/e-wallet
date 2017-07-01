
<?php
include 'connect.php';
session_start();


	$_SESSION["charge"] = $_POST['charge'];
	$charge=$_POST['charge'];
	$password=$_POST['sppass'];
	$checkpass=md5($password);
	$name=$_POST['regno'];
	$date = date('Y-m-d h:i:s');
	//$formatted_date = dateformat($my_date, 'Y-m-d h:i:s');

	$debit="debited";




$sql = "select * from  `logininfo` where `regno`='" . $name . "'";


$result = mysqli_query($db,$sql);
   
if (mysqli_num_rows($result) == 1) 
  {
	$row=$result->fetch_object();
    $passp=$row->profile_password;
	     if($checkpass == $passp)
			  {
			     
			$sql2 = "select * from  `stored` where `regno`='" . $name . "'";
			$result2 = mysqli_query($db,$sql2);
			$row2=$result2->fetch_object();

			
			 

    $money=$row2->amount - $charge;
          if($money>=0)
             {

            $num;
			$stmt= $db->prepare("insert into `transac` values(?,?,?,?,?,?)");
			$stmt-> bind_param('isisss',$num,$_POST['regno'],$_POST['charge'],$debit,$date,$_SESSION["storename"]);
			$stmt-> execute();
			$stmt-> close();

			$sql = "UPDATE stored SET amount= $money WHERE regno= $name ";

			$db->query($sql);

			header("location:success4.html");

		     }
		     else
		     {
		     	header("location:balance.html");
			  
		     }

			  }else
	{
		header("location:error4.html");
			  
			  }
}else
 {
	
   header("location:error8.html");
 }
?>
