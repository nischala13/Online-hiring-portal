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

//if(isset($_GET['id'])){
  //$testname= $_GET['id'];
  //$tname = $_POST['testname'];
  //echo $tname;
//} 

//if (isset($_POST["submit1"])) 
//{

if($_POST['submit1'] && $_POST['testname']){
  if($_POST['submit1']=='Submit') {
  	echo $_POST['testname'];
  	$tname=$_POST['testname'];
$name=$_POST["Name"];

$email=$_POST["emailid"];


$query = "insert into email(test_id,name,emailid) values('0','$name','$email')";

//echo "$query";
$result = mysqli_query($db,$query);
//ob_start();
//include "htmlemail.php";
//$message = ob_get_flush();
$message=file_get_contents('htmlemail.php');
$message="<p>Please click the following link to proceed to the Test  <a href=\"http://localhost/anspaper.php?id=".$tname."\">Click here</a></p>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
mail($email,"Shortlisted",$message,$headers);
}


}
else {
  echo "failed";
}
?>

<h3> Invite sent successfully </h3>

<h4> <a href="http://localhost/entertest.php?id=<?php echo $_POST['testname']; ?>">Add candidate</button>
<h3><a href="http://localhost/homepage.php" target = "_self">Back to homepage</a></h3>
</html>