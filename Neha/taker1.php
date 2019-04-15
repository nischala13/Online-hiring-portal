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
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
  background-color: white;
  opacity: 0.8;
  filter: alpha(opacity=80); /* For IE8 and earlier */
  border-style:ridge;
  margin-top:100px;
  text-align:center;
  font-size:30px;
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
  .column {
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

.footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
  margin-top:150px;
}
</style>
</head>
<body>

<div class="header">
  <h1>Hiring Made Easy</h1>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">Previous</a>
  <a href="#">Help</a>
</div>

<div class="row">
  <div class="column column1">
		<a href="#" class="button button1">Select from existing</a>
		<p>Allows you to select questions from the question bank available.</p>
  </div>
  
  <div class="column column1">
   <a href="#" class="button button1">Create a random test</a>
    <p>Helps to create a test by automatically picking questions from the question bank available based on the level selected.</p>
  </div>
  
  <div class="column column1">
    <a href="testcreate.php" class="button button1">Create new test</a>
    <p>Create a new test with your own set of questions.</p>
  </div>
</div>

<div class="footer">
  <p>*We provide only MCQs and Coding questions.</p>
</div>


</body>
</html>
