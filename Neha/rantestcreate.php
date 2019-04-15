<?php
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

.header {
  background-color: maroon;
  padding: 1px;
  text-align: center;
  font-style: italic;
  text-decoration: underline;
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
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=reset]:hover {
  background-color: #45a049;
}

.container {
	margin-top:50px;
	margin-left:25%;
	width: 50%;
  border-radius: 12px;
    opacity: 0.9;
  filter: alpha(opacity=90); /* For IE8 and earlier */
  border-style:ridge;
  text-align:center;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>

<body>
<div class="header">
  <h1>Question Paper</h1>
</div>
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Previous</a>
  <a href="#">Help</a>
</div>
<div class="container">
  <form action="ran_gen_ques_pap.php" method="post" style="text-align:center;font-size:150%">
  <div class="row">
    <div class="col-25">
      <label for="tname">Test Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="tname" name="name" placeholder="Enter the test name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="dur">Duration</label>
    </div>
    <div class="col-75">
      <input type="time" id="dur" name="duration" placeholder="Enter test duration..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mcq">No. of MCQs</label>
    </div>
    <div class="col-75">
      <input type="number" id="mcq" name="tot_mcq" min="0" placeholder="Enter required number of mcqs..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="coding">No. of Coding Questions</label>
    </div>
    <div class="col-75">
      <input type="number" id="coding" name="tot_code" min="0" placeholder="Enter required number of coding questions..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lvl">Please choose the test level</label>
    </div>
    <div class="col-75">
			<select id="lvl" name="Level" required>
			<option value="easy">Easy</option>
			<option value="medium">Medium</option>
			<option value="hard">Hard</option>
			</select>
    </div>
  </div>
   <div class="row">
    <input type="submit" value="Generate Paper" name="submit">
	<input type="reset" name="reset" value="Reset Values">
  </div>
  </form>
</div>

<!--
<p>
<form action="gen_ques_pap.php" method="post" style="text-align:center;font-size:150%">
<table align="center" style="background-color:lightgray;">
<tr>
<td>Test Name:</td><td><input type="text" name="name"></td></tr>
<tr>
<td>Total MCQs:</td><td><input type="number" name="tot_mcq" min="1"></td></tr>
<tr>
<td>Total Coding Questions:</td><td><input type="number" name="tot_code" min="1"></td></tr>
<td>Duration:</td><td><input type="time" name="duration"></td></tr>
<br>
</table><br>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset">
</form>
</p>-->
</body>
</html>
