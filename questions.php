<!DOCTYPE HTML>

<html>

<head>

<title></title>

</head>

<body bgcolor="87ceeb">

<center><h2></h2></center>

<br>

<?php

include("connection.php");

if (isset($_POST["submit"])) 
{

$query = "select * from email(test_id,name,emailid)";

echo $query;
$result = mysqli_query($db,$query);
<?php 
while($row = mysqli_fetch_assoc($result))

		{
			
?>
<tr>
				
<td><?php echo $row["test_id"]?>; </td>
				
<td><?php echo $row["Name"];?> </td>
            
			<td> <input type="submit" name="read" formaction="questions.php"> </td>
				
<td> <button type="submit">Select</button> </td>

			  
</tr>
			

<?php
		

}

?>


}
?>
</html>