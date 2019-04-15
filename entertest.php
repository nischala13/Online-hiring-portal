<!DOCTYPE HTML>
<html>

<head>

<title>COORDINATOR PAGE</title>

</head>


<body style="background-image: url(images.jpg); background-repeat: no-repeat;">

<?php

if(isset($_GET['id'])){
  $testname= $_GET['id'];
  echo $testname;
} 
else {
  echo "failed";
}
?>
<center><h2>Enter candidate details</h2></center>
<form action="inserttest.php" 
method="post">
 

<table border="2" align="center" cellpadding="5" cellspacing="5" style="background-color:white;">
<tr>
<td> Enter Canditate Name :</td>
<td> 
<input type="text" name="Name" size="48" required> </td>
</tr>

<tr>
<td> Enter email id :</td> 
<td> <input type="text" name="emailid" size="48" required> </td>
</tr>


<tr>
<td><input type="submit" name="submit1" value="Submit"></a></td>
    <input type="hidden" name="testname" value="<?php echo $testname; ?>">
    
    
</form>

<td><input type="reset" name="reset1" value="Reset" ></td>
</tr>




</table>

</form>

</body>

</html>
