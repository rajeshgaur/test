<?php 

$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Yourself</title>
    <script>
      function startQuiz(url){
	       window.location = url;  
      }
    </script>
    <link rel = "stylesheet" type = "text/css" href = "../css/flatly.css">
</head>
<body>
<script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
		<script src = "../js/bootstrap.js"> </script>

		<div class="”container”" style = "font-family: 'Museo Slab'">
			<!---<h1><a href="”#”">Physics-Easily</a></h1>-->
			<!--- Nav bar -->
			<div class="navbar navbar-default" style = "margin-bottom: 0px;">
  			<?php include 'navbar.php' ?>
			</div>
			<!--- Navbar ends-->
			<!--- Intro header -->
      <div class="intro-header-intermediate">        
      </div>
      <div class = "row"  style = "min-height: 400px">
            <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
              <?php include 'panel.php' ?>
            </div>
      <div class="col-md-7 col-sm-9">
        <div class="row"  style = "margin-left: 6px; margin-top: 120px">
          <center><?php echo $msg; ?></center>
          <center>
            <h3 class = "text-primary">Click below when you are ready to start the quiz</h3>
            <button class = "btn btn-primary" onClick="startQuiz('quiz.php?question=1')">Click Here To Begin</button>
          </center>
        </div>
      </div>
    </div>
    <div class = "row">
            <div class="navbar navbar-inverse">
              <?php include 'footer.php' ?>
            </div>
          </div>
    </div>
  </body>
</html>