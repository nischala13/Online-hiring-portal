<!DOCTYPE html>
<html>
<title>
<head>Answer</head>
</title>
<body>

<?php
include("connection.php");
if(isset($_POST['submit']) && $_POST['testname']) {
	$selected=$_POST['check'];
  	$tname=$_POST['testname'];
	if(!empty($_POST['check'])) {
		$ctr=count($_POST['check']);
?>
<td>
 <?php
 $score=0;
 echo "You have attempted ".$ctr." questions."; ?>
 </td>	
 <?php
 $user="shweta";
 $i=1;
 foreach ($selected as $value) {
 echo $value; 
 if($value == 1) {
 $query="insert into useranswer(user,name,Q_no,yourans) values('$user','$tname','$i','A')";
 $result=mysqli_query($db,$query);
 $q="select ans from mcq where name='". $tname."' and Q_no='".$i."'";
 $r=mysqli_query($db,$q);
 $row=mysqli_fetch_assoc($r);
 if($row['ans']=='A')
 	{$score++;}
 } 	
 else if($value == 2) {
 $query="insert into useranswer(user,name,Q_no,yourans) values('$user','$tname','$i','B')";
 $result=mysqli_query($db,$query);
$q="select ans from mcq where name='". $tname."' and Q_no='".$i."'";
 $r=mysqli_query($db,$q);
 $row=mysqli_fetch_assoc($r);
 if($row['ans']=='B')
 	{$score++;}
 } 	
 else if($value == 3) {
 $query="insert into useranswer(user,name,Q_no,yourans) values('$user','$tname','$i','C')";
 $result=mysqli_query($db,$query);
 $q="select ans from mcq where name='". $tname."' and Q_no='".$i."'";
 $r=mysqli_query($db,$q);
 $row=mysqli_fetch_assoc($r);
 if($row['ans']=='C')
 	{$score++;}
 } 	
 else if($value == 4) {
 $q1="select * from mcq where name ='". $tname."' and Q_no=$value";
 $query="insert into useranswer(user,name,Q_no,yourans) values('$user','$tname','$i','D')";
 $result=mysqli_query($db,$query);
 $q="select ans from mcq where name='". $tname."' and Q_no='".$i."'";
 $r=mysqli_query($db,$q);
 $row=mysqli_fetch_assoc($r);
 if($row['ans']=='D')
 	{$score++;}
 }
 $i++;
 } 	
	
}
}
echo $score;
?>
</body>
</html>