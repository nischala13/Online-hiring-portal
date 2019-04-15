<?php
	session_start();
	
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css1/style.css">
</head>
<body style="background-image: url(images.jpg); background-repeat: no-repeat;">

	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['email']; ?></h3></center>
		
		
		<form action="index1.php" method="post">
			<div class="imgcontainer">
				<img src="user.png" alt="Avatar" class="avatar">
			</div>
			
		
	</div>
<?php


$query = "select test_id,name from input_create_test";
$result = mysqli_query($con,$query);
 

?>


<div class="1">

<table border="2" align="center" cellpadding="5" cellspacing="5" style="background-color: white;"  >


<tr>

    <th> Test ID </th>

    <th> Test Name </th>
   </tr>

<?php 
while($row = mysqli_fetch_assoc($result))

		{
			
?>
<tr>
				
<td><?php echo $row["test_id"];?> </td>
				<?php $tname=$row["name"]; ?>
				
<td><a href="http://localhost/displaytest.php?id=<?php echo $tname; ?>" target="_self"> <?php echo $row["name"];?></a> </td>
      			  
</tr>
			

<?php
		

}

?>

</table>

</div>
<div class="inner_container">
			<button class="logout_button" type="submit">Log Out</button>	
			</div>
<a href="score.php"><button type="button" class="score_btn">view score </button>
</form>	
</body>
</html>
