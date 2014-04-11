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
<link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
</head>
<div class="”container”" style = "font-family: 'Museo Slab'">
			<!---<h1><a href="”#”">Physics-Easily</a></h1>-->
			<!--- Nav bar -->
			<div class="navbar navbar-default" style = "margin-bottom: 0px;">
  			<div class="navbar-header" style = "margin-bottom: 0px;">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
              <span class="icon-bar"></span>  				
    			</button>
  			</div>
  			<div class="navbar-collapse collapse navbar-responsive-collapse" >
        <a class="navbar-brand" href="#">Physics-Easily</a>
    			<ul class="nav navbar-nav" style = "font-size: 15px">
      				<li class="active"><a href="#">Home</a></li>
              <li><a href = "#">About</a></li>
              <li><a href = "#"></a></li>
      				  </ul>
      				</li>
    			</ul>
          
    			
    			<ul class="nav navbar-nav navbar-right">
                <!--<form class="navbar-form navbar-left">
                    <input type="text" class="form-control col-lg-4" placeholder="Search">
                </form>-->
      				<li><a href="login.html">LOGIN</a></li>
      				<li><a href="signup.html">Sign Up</a></li>
    			</ul>
  			</div>
			</div>
			<!--- Navbar ends-->
			<!--- Intro header -->
			<div class="intro-header" style = "background:url('../img/pencil.jpg');background-size: 1350px 200px; height :200px;">
                    <div class="intro-message">
                        
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            
                        </ul>
                    </div>
    		</div>
<?php
require_once("scripts/connect_db.php");
$response = ""; 
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$response = "You have not answered any questions yet";
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
		echo "Did you even read the questions? You scored $percent%, You must be retarded.";
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
	$sql = mysql_query("INSERT INTO quiz_takers (user_name, percentage, date_time) 
	VALUES ('$username', '$percent', now())")or die(mysql_error());
		echo "Thanks for taking the quiz! You scored $percent%";
		$ques = mysql_query("SELECT * FROM questions_v")or die(mysql_error());
		echo '<h1>SOLUTIONS FOR THE QUIZ </h1>';
		while($row = mysql_fetch_array($ques))
		{
		$temp = $row['question'];
		$id = $row['question_id'];
		echo '<h4>Q.'.$temp.'</h4>';
		$ans = mysql_query("SELECT * FROM answers_v WHERE question_id=$id AND correct = '1'")or die(mysql_error());
		$answr = mysql_fetch_array($ans);
		$temp = $answr['answer'];
		echo '<h5>A.'.$temp.'</h5>';
		}
		echo '<h3><a href="index.php">Click here to go to home page</a></h3>';
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
}
?>
</div>
</html>