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

<h2>Coding Question</h2>

<div>
		<form action="" method="post">
			<label for="quesno">Question Number</label><?php echo ' '.$_SESSION["count"];?>
			<!--<label for="quesno">Question Number</label>
			<input type="number" name="Q_no" id="quesno" placeholder="Question number..">-->
			<br><br>
			<label for="questxt">Question</label>
			<textarea id="questxt" name="Q_txt" placeholder="Question.." required></textarea>
			<br><br>
			<label for="case1">Test Case 1</label><br><br>
			<label for="sam_in1">Sample Input</label><input type="text" id="sam_in1" name="inTest1" placeholder="Sample input1.." required>
			<label for="sam_out1">Sample Output</label><input type="text" id="sam_out1" name="outTest1" placeholder="Sample output1.." required><br><br>
			<label for="case2">Test Case 2</label><br><br>
			<label for="sam_in2">Sample Input</label><input type="text" id="sam_in2" name="inTest2" placeholder="Sample input2.." required>
			<label for="sam_out2">Sample Output</label><input type="text" id="sam_out2" name="outTest2" placeholder="Sample output2.." required>
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
$intest1=$_POST["inTest1"];
$outtest1=$_POST["outTest1"];
$intest2=$_POST["inTest2"];
$outtest2=$_POST["outTest2"];
$lvl=$_POST["Level"];
$query = "insert into code(Test_nm,Q_no,Q_txt,inTest1,outTest1,inTest2,outTest2,Level) values('$test_name','$ques_no','$ques_txt','$intest1','$outtest1','$intest2','$outtest2','$lvl')"; 
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
<b>Test Cases</b><br><br>
Test Case1<br>Sample Input<br><input type="text" name="inTest1"><br>Sample Output<br><input type="text" name="outTest1"><br>
Test Case2<br>Sample Input<br><input type="text" name="inTest2"><br>Sample Output<br><input type="text" name="outTest2"><br>
<br><br>
<b>Level:</b><br><input type="text" name="Level" required><br><br>
<input type="submit" name="submit1" value="Submit">
</form>
</body>
</html>-->