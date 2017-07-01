 <?php
	include 'connect.php';
	session_start();
 ?>


  <?php
		$sql = "select * from  `transac` where `regno`='" . $_SESSION["username"] . "'";
		$result=$db->query($sql);
  ?>
    <table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align:left" >
		<th style="width:150px">amount</th>
		
	</tr>
 <?php

	while($row=$result->fetch_object())
	{
	
    $money=htmlentities($row->charge,ENT_QUOTES,"UTF-8");

  ?>

	<tr>
		<td><?php echo $money;?></td>
		
	</tr>
	</table>
  <?php
  }
  ?>

