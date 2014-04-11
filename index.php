<!DOCTYPE html>
<html>
	<head>
		<title>Physics Easily</title>
		<meta charset="utf-8"> 
		<link rel = "stylesheet" type = "text/css" href = "css/flatly.css">

        
	</head>
	<body>

		<script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
		<script src = "js/bootstrap.js"> </script>

		<div class="”container”" style = "font-family: 'Museo Slab'">
			<!--- Nav bar div-->
                <div class="navbar navbar-default">
                    <?php include 'navbar.php' ?>
                </div>
            <!-- Nav bar div ends -->

			<!--- Intro header -->
			<div class="intro-header">
                    <div class="intro-message">
                        <h1>Physics-Easily</h1>
                        <h3>A place to see what you learn</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><button type="button" class="btn btn-success" style = "font-size: 25px; padding: 8px 20px;" onclick="window.location='course outline.php';">Learn</button>
                            </li>
                            <li><button type="button" class="btn btn-info" style = "font-size: 25px; padding: 8px 25px; ">Play</button>
                            </li>
                            <li><button type="button" class="btn btn-warning" style = "font-size: 25px; padding: 8px 25px;" onClick = "window.location = 'test.php'">Test</button>
                            </li>
                        </ul>
                    </div>
    		</div>
            <!-- Intro header ends -->
            <div class = "row" style = "height: 100%">
            <!-- Panel div -->
    	    <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
                <?php include 'panel.php' ?>
            </div>
            <!-- Panel div ends -->

            <!-- Home page div -->
    		<div class="col-md-7" style = "margin-left: 10px; ">
              <h1 class = "font-green" style = "color: #18bc9c;"> Course Outline </h1>
                <blockquote class = "pull-right"  style = "border-right: 5px solid #5DD0BA; text-align: left;">
                  A set of instructional pages written in an easy-to-understand language and complemented by graphics. An ideal starting location for those grasping for understanding or searching for answers.
                </blockquote>
              
              <h1 class = "font-green" style = "color: #3498db;"> Play Center </h1>
                <blockquote class = "pull-right"  style = "border-right: 5px solid #71B7E6; text-align: left;">
                  A set of tools equipped with drag-and-drop mechanism to play around with. An ideal platform to visualise the concepts of physics.
                </blockquote>

                <h1 class = "font-green" style = "color: #f39c12;"> Physics Tutorials </h1>
                <blockquote class = "pull-right"  style = "border-right: 5px solid #F7BA59; text-align: left;">
                  Learn to solve the challenging questions of physics. This section will show a sep-by-step method of solving the challenging physics numericals.
                </blockquote>

                <h1 class = "font-green" style = "color: #f39c12;"> Test Yourself </h1>
                <blockquote class = "pull-right"  style = "border-right: 5px solid #F7BA59; text-align: left;">
                  A set of challenging physics numericals. Test your understanding ad practice using our physics questions. You can also use the Play tool to visualise the physics numericals.
                </blockquote>
    		  </div>
    		</div>
            <div class = "row">
                <!-- Made from header-->
                 <div class="navbar navbar-inverse">
                    <?php include 'footer.php' ?>
                </div>
            </div>
        </div>            
	</body>
</html>
