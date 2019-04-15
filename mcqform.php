<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>

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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
<body>
<h2>Multiple Choice Question</h2>
<div>
		<form action="" method="post">
			<label for="quesno">Question Number</label><?php echo ' '.$_SESSION["count"];?>
			<!--<label for="quesno">Question Number</label>
			<input type="number" name="Q_no" id="quesno" placeholder="Question number..">-->
			<br><br>
			<label for="questxt">Question</label>
			<textarea id="questxt" name="Q_txt" placeholder="Question.." required></textarea>
			<br><br>
			<label for="opt">Options</label><br>
			<label for="opt1">A.</label><input type="text" id="opt1" name="Opt1" placeholder="First option.." required>
			<label for="opt2">B.</label><input type="text" id="opt2" name="Opt2" placeholder="Second option.." required>
			<label for="opt3">C.</label><input type="text" id="opt3" name="Opt3" placeholder="Third option.." required>
			<label for="opt4">D.</label><input type="text" id="opt4" name="Opt4" placeholder="Fourth option.." required><br><br>
			<label for="correct">Correct Option</label>
			<select id="correct" name="ans" required>
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
			<option value="d">D</option>
			</select>
			<br><br>
			<label for="lvl">Level</label>
			<select id="lvl" name="Level" required>
			<option value="easy">Easy</option>
			<option value="medium">Medium</option>
			<option value="hard">Hard</option>
			</select>

			    <input type="submit" value="Submit" name="submit">
		</form>
</div>
<?php
include("DBConnection.php");
if (isset($_POST["submit"])) 
{
$test_name=$_SESSION["testname"];
$ques_no=$_SESSION["count"]-1;
//$ques_no=$_POST["Q_no"];
$ques_txt=$_POST["Q_txt"];
$opt1=$_POST["Opt1"];
$opt2=$_POST["Opt2"];
$opt3=$_POST["Opt3"];
$opt4=$_POST["Opt4"];
$cor_ans=$_POST["ans"];
$lvl=$_POST["Level"];
$query = "insert into mcq(Test_nm,Q_no,Q_txt,Opt1,Opt2,Opt3,Opt4,ans,Level) values('$test_name','$ques_no','$ques_txt','$opt1','$opt2','$opt3','$opt4','$cor_ans','$lvl')"; 
//Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
}?>
<?php
$_SESSION["count"]++;
?>

</body>
</html>







<!--
<!DOCTYPE html>
<html>
<head>
<title>Create Question paper</title>
</head>
<body style="background-color:powderblue;">
<h1 style="text-align:center;"><b>Question Editor</b></h1>
<hr>


<form action="load_ques.php" method="post">
<b>Question Number</b><input type="number" name="Q_no" required><br><br>
<b>Question</b><br><textarea name="Q_txt" rows="5" cols="175%"required></textarea><br><br>
<b>Options</b><br>A. <input type="text" name="Opt1"><br>
B. <input type="text" name="Opt2"><br>
C. <input type="text" name="Opt3"><br>
D. <input type="text" name="Opt4"><br><br>
<b>Correct option:</b><br><input type="text" name="ans" required><br><br>
<b>Level:</b><br><input type="text" name="Level" required><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>-->




