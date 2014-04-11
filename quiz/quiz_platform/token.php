<?php
	if(isset($_GET['token'])) {
		$token = $_GET['token'];

	}
	if(isset($_GET['msg'])) {
		$lastID = $_GET['msg'];

	}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Create A Quiz</title>
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
			<h2> QUIZ </h2>
			
			<h4>Your token number is: <?php echo $token ?></h4>
			<button class = "btn btn-warning" onclick = "window.location = 'addQuestions.php?msg=<?php echo $lastID ?>?&startID=1'">Add questions</button>
    		<br />
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

			
				