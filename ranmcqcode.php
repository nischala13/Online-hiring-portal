	<?php
	session_start();
	?>
	<!DOCTYPE html>
<html>
<head>
<title>Create Test</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="font-size:30px">
<?php
	include("DBConnection.php");
	$lvl=$_SESSION["lvl"];
	$code=$_SESSION["code"];
	$mcq=$_SESSION["mcq"];
	$query="select Q_txt,Opt1,Opt2,Opt3,Opt4,ans from mcq where Level='$lvl' order by rand() limit $mcq";
	$result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)>0)
	{
		//output data of each row
		$num=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$num++;
			echo "<b>Question</b>"." ".$num."<br><br>".$row["Q_txt"]."<br>"."<b>A.</b>"." ".$row["Opt1"]."<br>"."<b>B.</b>"." ".$row["Opt2"]."<br>"."<b>C.</b>"." ".$row["Opt3"]."<br>"."<b>D.</b>"." ".$row["Opt4"]."<br>"."<b>Correct answer.</b>"." ".$row["ans"]."<br>"."<hr>";
			$test_name=$_SESSION["testname"];
			$ques_no=$num;
			$ques_txt=$row["Q_txt"];
			$opt1=$row["Opt1"];
			$opt2=$row["Opt2"];
			$opt3=$row["Opt3"];
			$opt4=$row["Opt4"];
			$cor_ans=$row["ans"];
			$lvl=$_SESSION["lvl"];
			$query = "insert into mcq(Test_nm,Q_no,Q_txt,Opt1,Opt2,Opt3,Opt4,ans,Level) values('$test_name','$ques_no','$ques_txt','$opt1','$opt2','$opt3','$opt4','$cor_ans','$lvl')"; 
		//Insert query to add book details into the book_info table
		$result1 = mysqli_query($db,$query);
		}
		
	}
	else
	{
		echo "No input for mcqs";
	}
	$query="select Q_txt,inTest1,outTest1,inTest2,outTest2 from code where Level='$lvl' order by rand() limit $code";
	$result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)>0)
	{
		//output data of each row
		$num=0;
		while($row=mysqli_fetch_assoc($result))
		{
			$num++;
			echo "<b>Question</b>"." ".$num."<br><br>".$row["Q_txt"]."<br>"."<b>Sample Input 1.</b>"." ".$row["inTest1"]."<br>"."<b>Sample Output 1.</b>"." ".$row["outTest1"]."<br>"."<b>Sample Input 2.</b>"." ".$row["inTest2"]."<br>"."<b>Sample Output 2.</b>"." ".$row["outTest2"]."<br>"."<hr>";
		}
	}
	else
	{
		echo "No input for coding questions";
	}
	/*if (isset($_POST["submit"])) 
	{
		$query = "insert into mcq(Test_nm,Q_no,Q_txt,Opt1,Opt2,Opt3,Opt4,ans,Level) values('$test_name','$ques_no','$ques_txt','$opt1','$opt2','$opt3','$opt4','$cor_ans','$lvl')"; 
		//Insert query to add book details into the book_info table
		$result = mysqli_query($db,$query);
	}*/
	?>  
	</body>
	</html>