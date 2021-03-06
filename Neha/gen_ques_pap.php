﻿<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Create Test</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  background-image: url("back1.jpg");
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: 100vw;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: white;
  color: black;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
  background-color: white;
  opacity: 0.8;
  filter: alpha(opacity=80); /* For IE8 and earlier */
  border-style:ridge;
  margin-top:50px;
  font-size:30px;
}
.column.side{
	width:25%;
}
.column.middle{
	width:75%;
}

.column1:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column.side,.column.middle {
    width: 100%;
  }
}

.button {
  background-color: green;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
}
.button1 {
  background-color: green; 
  color: white; 
  border: 2px solid green;
}

.button1:hover {
  background-color: white;
  color: green;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

/*form*/
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

</style>
</head>
<body>
<?php
include("DBConnection.php");
if (isset($_POST["submit"])) 
{
$test_name=$_POST["name"];
$dur=$_POST["duration"];
$query = "insert into new_input_create_test(name,duration) values('$test_name','$dur')"; 
//Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
}

//storing session data
$_SESSION["testname"]=$test_name;
$count=1;
$_SESSION["count"]=$count;
?>

<div style="background-color: maroon;font-style:italic;text-decoration:underline;text-align:center;padding:1px;">
  <h1>Generating Question Paper</h1>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Previous</a>
  <a href="#">Help</a>
  <a href="#">Import Questions</a>
</div>

<div style="font-size:250%;text-align:center;padding:5px;text-decoration:underline;">
	<?php echo $_SESSION["testname"].' '.'Questions';?>
</div>
	
<div class="row">
  <div class="column side column1" style="text-align:center;">
		<h4 style="text-decoration:underline;"> Select your Question Type</h4>
				<a href="mcqform.php" class="button button1" target="iframe_a">MCQ</a>
				<a href="codeform.php" class="button button1" target="iframe_a">Coding Question</a>
		<!--<button onclick="mymcq()" class="button button1">MCQ</button>
		<button onclick="mycode()" class="button button1">Coding Question</button>-->
  </div>
  
  <div class="column middle column1" style="border-radius: 5px;padding: 20px;">
	<iframe name="iframe_a" height="400px" width="100%" src="demo_iframe.php"></iframe>
	<!--<div id="formatmcq">
		<iframe src="mcqform.php"></iframe>
	</div>
	<div id="formatcode">
		<iframe src="codeform.php"></iframe>
	</div>
	</div>-->
	</div>
	<div style="text-align:center">
		<a href="final.php" class="button button1">Finish Adding</a>
		</div>
  </div>

<!--<script>
function mymcq() {
  var x = document.getElementById("formatmcq");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function mycode() {
  var x = document.getElementById("formatcode");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>-->

</body>
</html>


























