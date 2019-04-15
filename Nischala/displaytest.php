<!DOCTYPE HTML>


<html>


<head>
<link rel="stylesheet" href="css1/style.css">
</head>
<body style="background-image: url(images.jpg); background-repeat: no-repeat;">

<center><h2> <font color="white">TEST</font></h2></center>

<br>


<?php

if(isset($_GET['id'])){
  $testname= $_GET['id'];
  echo $testname;
} 
else {
  echo "failed";
}
//session_start();
include("connection.php");
$query = "select Q_no,Q_txt,Opt1,Opt2,Opt3,Opt4,ans,Level from mcq where name='". $testname."'"; 
$result = mysqli_query($db,$query);
 

?>


<?php 
while($row = mysqli_fetch_assoc($result))

{

?>


<div class="colour">
<p><b>Question No. : </b></p><?php echo $row["Q_no"];?>

<p><b>Question Name : </b></p><?php echo $row["Q_txt"];?> 
<p><b>Options : </b></p>

<ol type="A">
  <li><?php echo $row["Opt1"];?></li>
  <li><?php echo $row["Opt2"];?></li>
  <li><?php echo $row["Opt3"];?></li>
  <li><?php echo $row["Opt1"];?></li>
</ol>
<p><b>Answer : </b></p><?php echo $row["ans"];?>
<p><b>Level : </b></p><?php echo $row["Level"];?> 


<?php



}
?>




<h3><a href="http://localhost/entertest.php?id=<?php echo $testname; ?>" target = "_self"> Send invite to candidates </a></h3>
<h3><a href="http://localhost/anspaper.php?id=<?php echo $testname; ?>" target = "_self"> Take test </a></h3>

<h3><a href="http://localhost/homepage.php" target = "_self"> Back to homepage </a></h3>

</div>
</body>

</html>

<br>

