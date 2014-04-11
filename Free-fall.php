
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
            <div class="intro-header-intermediate">        
            </div>
      
    <div class = "row">
            <!-- Panel div -->
      <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
                <?php include 'panel.php' ?>
            </div>
            <!-- Panel div ends -->

            <!-- Home page div -->
        <div class="col-md-7 col-sm-9" style = "margin-left: 10px; ">
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 1: 1-D Kinematics >> 1.5: Free Fall</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <div class = "row" style = "margin-left: 10px; ">
            <h3 class = "text-success" style = "font-family: 'Museo Slab'">1.5 Free Fall</h3>
          </div>
          <h5 style = "font-size: 17px; line-height: 23px;font-family: 'Museo Sans'">
          <div class = "row" style = "margin-left: 10px; ">
            <p> After learning about acceleration you may have thought that how do these objects accelerate in real 
            life and also have tried to thought of some examples about acceleration of an object in real life. 
			<br>Let’s look at some examples of accelerating bodies:
			<br>Pick something up with your hand and drop it. When you release it from your hand, its speed is zero. 
			On the way down its speed increases. The longer it falls the faster it travels. Its acceleration increases.
			<br>But acceleration is not just increasing speed. Pick up this same object and toss it vertically into the 
			air. On the way up its speed will decrease until it stops and reverses direction. Decreasing speed is also 
			considered acceleration.
			<br>But acceleration is not just changing speed. Pick up the same object and throw it horizontally and 
			notice how its horizontal velocity gradually becomes more and more vertical. Since acceleration is the 
			rate of change of velocity with time and velocity is a vector quantity, this change in direction is also 
			considered acceleration.
			</p>
            <center>
            <img src = "img/img24.png">
            </center>
          </div>

          <div class = "row" style = "margin-left: 10px; ">  
            <p>
            Your object was accelerating because gravity was pulling it down. Even the object tossed straight up is 
            falling. If it wasn't, it would have continued moving away from you in a straight line. This is the 
            acceleration due to gravity. In each of these examples the acceleration was the result of gravity and 
            any object moving under the sole influence of gravity is known as free fall. Measured value of acceleration 
            due to gravity through experiments is: 
            <br><center>					g = 9.8 m/s2</center>

            <br>Weight of an object is the force of gravity acting on an object of mass m. It is measures in 
            Newton(N=kg.m/s2). 
            <br><center>				          w = mg</center>

            </p>
            
            
          </div>
          </h5>

        
        <div class = "row" style = "margin-left: 10px; ">
          Next Section: <a href = "Relative-velocity.php"> Relative Velocity </a>
          Next Lesson: <a href = "First-Law-of-Motion.php"> Newton's Laws of Motion </a>
        </div>
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
