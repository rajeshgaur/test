<?php 
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>
<?php
if(isset($_POST['desc']))
{

require_once("scripts/connect_db.php");
$quizname=$_POST['desc']; //Name of the new quiz
$quizname = strip_tags($quizname);
$quizname = mysql_real_escape_string($quizname);
$sql = mysql_query("INSERT INTO quiz (name) VALUES ('$quizname')")or die(mysql_error());
$lastId = mysql_insert_id();
header('location: addQuestions.php?msg='.$lastId.'?&startID=1');
exit();
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Create A Quiz</title>
<script>
function showDiv(el1,el2,el3){
	document.getElementById(el1).style.display = 'block';
	document.getElementById(el2).style.display = 'none';
	document.getElementById(el3).style.display = 'none';
}
</script>
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
<link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
</head>
<body>
<script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
		<script src = "js/bootstrap.js"> </script>

		<div class="”container”" style = "font-family: 'Museo Slab'">
			<!---<h1><a href="”#”">Physics-Easily</a></h1>-->
			<!--- Nav bar -->
			<div class="navbar navbar-default" style="margin-bottom: 0px;">
  			<div class="navbar-header">
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
                    <input type="text" class="form-control col-lg-2" placeholder="Search">
                </form>-->
      				<li><a href="login.html">LOGIN</a></li>
      				<li><a href="signup.html">Sign Up</a></li>
    			</ul>
  			</div>
			</div>
			<!--- Navbar ends-->
			<!--- Intro header -->
			<div id="quiz" style="width:700px;margin-left:auto;margin-right:auto;text-align:center;">
			<p style="color:#06F;"><?php echo $msg; ?></p>
			<h2> QUIZ </h2>
			<form action="addQuiz.php" name="addQuiz" method="post">
			<strong>Please type your quiz name here</strong>
    	<br />
    		<textarea id="tfDesc" name="desc" style="width:400px;height:95px;"></textarea>
    	  <br />
		  <input type="submit" value="Add To Quiz">
			</form>
			</div>
</body>			