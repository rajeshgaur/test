<!DOCTYPE html>
<html>
<head>
   <link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
    <style>
      body {
        margin: 0px;
        padding: 0px;
      }
    
    </style>
 </head>
 <body>
  <script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
    <script src = "js/bootstrap.js"> </script>

    <div class="”container”" style = "font-family: 'Museo Slab'">
      <!--- Nav bar -->
      <div class="navbar navbar-default">
          <?php include 'navbar.php' ?>
      </div>
<div class = "row">
      <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
        <?php include 'panel.php' ?>
      </div>
    
  
  <body>
    <div class="col-md-5" style="margin-left:20px">
      <div class="row">
    <h4>Current Velocity v/s Time Graph</h4>
    <canvas id="myCanvas" width="550" height="550" style="border:5px solid #000000"></canvas>
    <script src="js/graphPlot1.js"></script>
  </div>
 </div>
 <div class="col-md-1" style="margin-top:40px; text-align: right">
    Velocity:
  </div>
  <div class="col-md-2" style = "margin-top: 30px">
  <!--	<h5><span class="label label-info">Initial Velocity</span></h5> <input id = "initialvelocity" name = "velocity1" value = "velocity">
  </div>-->
      <input type="text" class="form-control" id="initialvelocity" placeholder="Initial Velocity">
   </div>
   <div class="col-md-1" style="margin-top:40px; text-align: right">
    Acceleration:
  </div>
  <div class="col-md-2" style = "margin-top: 30px">
  <!--  <h5><span class="label label-info">Initial Velocity</span></h5> <input id = "initialvelocity" name = "velocity1" value = "velocity">
  </div>-->
      <input type="text" class="form-control" id="acceleration" placeholder="Acclerat">
  
  <!--<div class="row">
	<span class="label label-info">Acceleration</span><input id = "acceleration" name = "velocity2" ><br>
  </div>--><br>
	<input type= "button"  value="Go" onclick="start()" style ="margin-bottom:10px;">
 </div>
</div>
  </body>
</html>
