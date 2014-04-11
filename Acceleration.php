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
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 1: 1-D Kinematics >> 1.4 Acceleration</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <div class = "row" style = "margin-left: 10px; ">
            <h3 class = "text-success" style = "font-family: 'Museo Slab'">1.4 Acceleration</h3>
          </div>
          <h5 style = "font-size: 17px; line-height: 23px;font-family: 'Museo Sans'">
          <div class = "row" style = "margin-left: 10px; ">
            <p> Acceleration is the <i>rate at which the velocity of an object changes over time</i>. It is a <b>vector quantity</b> i.e. both magnitude and direction are required to fully specify it and its SI unit is m/s2.  
            </p>
            <p>Any change in the velocity of an object results in an acceleration: increasing speed, decreasing speed (also called deceleration or retardation), or changing direction. A change in the direction of motion results in an acceleration even if the moving object neither speeds up nor slowed down. That's because acceleration depends on the change in velocity and velocity is a vector quantity - one with both magnitude and direction. Thus, acceleration occurs anytime an object's speed increases, decreases, or changes direction. 
            </p>
            <center>
            <img src = "img/img16.png">
            </center>
          </div>

          <div class = "row" style = "margin-left: 10px; ">  
            <p>
            <b>Instantaneous acceleration</b> is the small change in velocity <i><b>dv</b></i> divided by the duration of the interval <i><b>dt</b></i>: <img src = "img/img22.png">  i.e. the derivative of the velocity vector as a function of time.
            </p>
            
            <center><img src = "img/img18.png"></center>
          </div>
          <div class = "row" style = "margin-left: 10px; ">
            <p>
            <b>Average acceleration</b> over a period of time is the total change in velocity () divided by the total time taken(Δt).
            </p>
           
            <center><img src = "img/img19.png"></center>
          </div>
          <div class = "row" style = "margin-left: 10px; ">
            <h3 class = "text-success" style = "margin-top: 40px"><center>Comparision Chart between <i>Velocity</i> and <i>Acceleration</i></center></h3>
            <table class="table table-striped table-hover " style = " font-size: 15px" >
              <thead style = "font-size:18px">
                <tr>
                <th>#</th>
                  <th>Properties</th>
                  <th>Velocity</th>
                  <th>Acceleration</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>1</td>
                  <td>Nature</td>
                  <td>Vector</td>
                  <td>Vector</td>
                </tr>
                <tr>
                <td>2</td>
                  <td>Calculated with</td>
                  <td>Displacement</td>
                  <td>Velocity</td>
                </tr>
                <tr>
                <td>3</td>
                  <td>Components</td>
                  <td>Distance, Time and Direction of Motion</td>
                  <td>Velocity, Time </td>
                </tr>
                <tr>
                <td>4</td>
                  <td>Average</td>
                  <td>Displacement/Time</td>
                  <td>Velocity/Time</td>
                </tr>
                <tr>
                <td>5</td>
                  <td>Units</td>
                  <td>m/s</td>
                  <td>m/s<sup>2</sup></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Equation</td>
                  <td>v = d/t</td>
                  <td>a = v/t</td>
                </tr>
              </tbody>
            </table> 
          </div>
          </h5>

        
        <div class = "row" style = "margin-left: 10px; ">
          Next Section: <a href = "Free-fall.php"> Free Fall </a>
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
