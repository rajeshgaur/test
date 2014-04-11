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
$token = uniqid();
$sql = mysql_query("INSERT INTO quiz (name,token) VALUES ('$quizname','$token')")or die(mysql_error());
$lastId = mysql_insert_id();
header('location: token.php?msg='.$lastId.'?&startID=1'.'?&token='.$token);
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
			<p style="color:#06F;"><?php echo $msg ?></p>
			<h2> QUIZ </h2>
			<form action="addQuiz.php" name="addQuiz" method="post">
			<h4>Please type your quiz name here</h4>
    	<br />
    		<textarea id="tfDesc" name="desc" style="width:400px;height:95px; resize:none"></textarea>
    	  <br />
		  <input class = "btn btn-warning" type="submit" value="Start making quiz">
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

			
				