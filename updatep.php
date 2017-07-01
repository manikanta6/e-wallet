<?php
include 'connect.php';
session_start();

$name=$_SESSION["username"];
$mon=$_POST['ppass'];
//$enpassword=md5($mon);

$len=strlen($mon);

if($len=='4')
{

$sql = "UPDATE logininfo SET profile_password= md5($mon) WHERE regno= $name ";


$db->query($sql);
    	header("location:success1.html");

}else
{
	    header("location:cppass.html");//go to profile password update

}
?>