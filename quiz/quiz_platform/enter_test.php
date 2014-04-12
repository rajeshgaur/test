<?php

$token = "";
	if(isset($_POST['desc'])) {
		$token = $_POST['desc'];
	}
	
	require_once("scripts/connect_db.php");
	$token = strip_tags($token);
	$token = mysql_real_escape_string($token);
	$result = mysql_query("SELECT quiz_id FROM quiz WHERE token = '$token'");
	while($row = mysql_fetch_array($result)) {
		$qid = $row['quiz_id'];

		$que = mysql_query("SELECT question_id FROM questions WHERE quiz_id = $qid LIMIT 1");
		while($row = mysql_fetch_array($que)) {
			$question_id = $row['question_id'];
			//echo "ssadasd".$question_id;
			header('location: quiz.php?question='.$question_id.'&quiz_id='.$qid);

		}
	}
	
?>

<?php
	$msg = "";
	if(isset($_GET['msg'])) {
		$msg = $_GET['msg'];
	}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Create A Quiz</title>

<style type="text/css">
.content{
	margin-top:48px;
	margin-left:auto;
	margin-right:auto;
	width:780px;
	border:#333 1px solid;
	border-radius:12px;
	-moz-border-radius:12px;
	padding:12px;
	display:none;
}
</style>
<link rel = "stylesheet" type = "text/css" href = "../../css/flatly.css">
</head>

<body>
	<script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
		<script src = "../../js/bootstrap.js"> </script>

		<div class="”container”" style = "font-family: 'Museo Slab'">
			<!---<h1><a href="”#”">Physics-Easily</a></h1>-->
			<!--- Nav bar -->
			<div class="navbar navbar-default">
    			<?php include 'navbar.php' ?>
			</div>
			<!--- Navbar ends-->
			<!--- Intro header -->
	<div class = "row">	
	<div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
                <?php include 'panel.php' ?>
            </div>
    <div class="col-md-7" style = "margin-left: 10px; margin-bottom: 20px">
   		<div id="quiz" style="width:700px;margin-left:auto;margin-right:auto;text-align:center;">
			<h2> CUSTOM QUIZ </h2>
			<form action="enter_test.php" name="addQuiz" method="post">
			<h4>Please enter the token for the quiz you want to take:</h4>
    	<br />

    		<input type="text" class="form-control" id="tfDesc" name = "desc" placeholder="Token">
    		<br />
		  <input class = "btn btn-warning" type="submit" value="Take the quiz">
			</form>
			</div>
 </div>
 </div>
    <div class = "navbar navbar-inverse">
    <?php include 'footer.php' ?>
    </div>
 </div>
</body>
</html>

			
				