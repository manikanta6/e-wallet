<?php
include 'connect.php';

$pass1=$_POST['password1'];

$enpass=md5($pass1);

if($_POST['password1']==$_POST['password2'] )
{

$stmt= $db->prepare("insert into `sellerlogin` values(?,?,?,?)");
$stmt-> bind_param('ssss',$_POST['name'],$enpass,$_POST['phone'],$_POST['store']);
$stmt-> execute();
$stmt-> close();




header("location:success5.html");
}else
{
	header("location:error.html");

}




?>