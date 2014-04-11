<?php 

session_start();
if(isset($_POST['radio']) && $_POST['radio'] != ""){
	$answer = preg_replace('/[^0-9]/', "", $_POST['radio']);
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$_SESSION['answer_array'] = array($answer);
	}else{
		array_push($_SESSION['answer_array'], $answer);
	}
	
}
if(isset($_POST['qid']) && $_POST['qid'] != ""){
	$qid = preg_replace('/[^0-9]/', "", $_POST['qid']);
	if(!isset($_SESSION['qid_array']) || count($_SESSION['qid_array']) < 1){
		$_SESSION['qid_array'] = array($qid);
	}else{
		array_push($_SESSION['qid_array'], $qid);
	}
	$_SESSION['lastQuestion'] = $qid;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz Tut</title>
<link rel = "stylesheet" type = "text/css" href = "../css/flatly.css">
</head>
<body>
	<script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
	<script src = "../js/bootstrap.js"> </script>
		<div class="”container”" style = "font-family: 'Museo Slab'; height: 710px; background: url(../img/pen-paper.jpg);">
		
		<div class = "col-md-offset-2 col-md-8">	
			<div class = "jumbotron" id="status" style = "min-height: 400px; margin-top: 100px; border: 1px solid #000000;">
				<center><h3>
<?php
require_once("scripts/connect_db.php");
$response = ""; 
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$response = "You have not answered any questions yet! Sorry! Wrong place!
		<br><div align = 'center' style = 'margin-top: 80px'><button type = 'button' class = 'btn btn-primary' onclick = \"window.location = '../test.php';\">Go back!</button></div>";
		echo $response;
	exit();
}else{
		$countCheck = mysql_query("SELECT id FROM questions_v")or die(mysql_error());
		$count = mysql_num_rows($countCheck);
		$numCorrect = 0;
		foreach($_SESSION['answer_array'] as $current){
			if($current == 1){
				$numCorrect++;
			}
		}
		$percent = $numCorrect / $count * 100;
		$percent = intval($percent);
	if(isset($_POST['complete']) && $_POST['complete'] == "true"){
		if(!isset($_POST['username']) || $_POST['username'] == ""){
			echo "Sorry, We had an error";
			exit();
		}
		$username = $_POST['username'];
		$username = mysql_real_escape_string($username);
		$username = strip_tags($username);
	if(!in_array("1", $_SESSION['answer_array'])){
		$sql = mysql_query("INSERT INTO quiz_takers (user_name, percentage, date_time) 
		VALUES ('$username', '0', now())")or die(mysql_error());
		echo "Did you even read the questions? You scored $percent%, You must be retarded.
		<br><div align = 'center' style = 'margin-top: 80px'><button type = 'button' class = 'btn btn-primary' onclick = \"window.location = '../test.php';\">Go back!</button></div>";
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
	$sql = mysql_query("INSERT INTO quiz_takers (user_name, percentage, date_time) 
	VALUES ('$username', '$percent', now())")or die(mysql_error());
		echo "Thanks for taking the quiz! You scored $percent%
		<br><div align = 'center' style = 'margin-top: 80px'><button type = 'button' class = 'btn btn-primary' onclick = \"window.location = '../test.php';\">Take some other Test</button></div>";
		$ques = mysql_query("SELECT * FROM questions_v")or die(mysql_error());
		echo '<h1>SOLUTIONS FOR THE QUIZ </h1>';
		while($row = mysql_fetch_array($ques))
		{
		$temp = $row['question'];
		$id = $row['question_id'];
		echo '<h4>Q.'.$id.'. '.$temp.'</h4>';
		$ans = mysql_query("SELECT * FROM answers_v WHERE question_id=$id AND correct = '1'")or die(mysql_error());
		$answr = mysql_fetch_array($ans);
		$temp = $answr['answer'];
		echo '<h5>A.'.$temp.'</h5>';
		}
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
}
?>
	</h3>

</div>				
</div>
</body>
</html>