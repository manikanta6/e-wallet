<?php
include 'connect.php';

$pass1=$_POST['password1'];
$pass2=$_POST['password2'];

$enpass=md5($pass1);

if($_POST['password1']==$_POST['password2'] )
{

$zero=0;
$num;
$stmt= $db->prepare("insert into `stored` values(?,?,?)");
$stmt-> bind_param('iss',$num,$_POST['regno'],$zero);
$stmt-> execute();
$stmt-> close();	



$sql = "select * from  `logininfo` where `regno`='" . $_POST['username'] . "' and  `password`='" . $enpass . "'";


$result = mysqli_query($db,$sql);


		
     if (mysqli_num_rows($result) == 1) 
     {

     ?> <h1><?php echo "already registered";?></h1>
                      
     <?php
     header("location:error.html");

     }else
     {
  $stmt= $db->prepare("insert into `logininfo` values(?,?,?,?,?)");
  $stmt-> bind_param('sssss',$_POST['name'],$_POST['regno'],$enpass,$_POST['phone'],$zero);
  $stmt-> execute();
  $stmt-> close();
      }



header("location:success.html");
}else
{
header("location:error.html");

}




?>