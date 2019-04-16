<?php
include('connnew.php');
$query="select Q_no,Q_txt,Opt1,Opt2,Opt3,Opt4,ans from questiom";
$result=mysqli_query($db,$query);
?>
<!DOCTYPE html>
<html>
<title>
<head>question</head>
</title>
<body>

	<tr>
	<th><h2>question</h2></th>
	</tr>

<?php
	while($rows=mysqli_fetch_assoc($result))
	{
?>	
	
	<?php echo $rows['Q_no'],'.  ',$rows['Q_txt'];?><br></br>
<table>
	<input type="radio" name="<?php echo $rows['Q_no']?>" value="1"><td><tr><?php echo 'A.  ';?></tr><?php echo $rows['Opt1'];?></td><br></br>
	<input type="radio" name="<?php echo $rows['Q_no']?>" value="2"><td><tr><?php echo 'B.  ';?></tr><?php echo $rows['Opt2'];?></td><br></br>
	<input type="radio" name="<?php echo $rows['Q_no']?>" value="3"><td><tr><?php echo 'C.  ';?></tr><?php echo $rows['Opt3'];?></td><br></br>
	<input type="radio" name="<?php echo $rows['Q_no']?>" value="4"><td><tr><?php echo 'D.  ';?></tr><?php echo $rows['Opt4'];?></td><br></br>


</table>
<?php
	}
?>
</body>
</html>
	