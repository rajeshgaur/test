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

      
    <div class = "row">
            <!-- Panel div -->
      <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
                <?php include 'panel.php' ?>
            </div>
            <!-- Panel div ends -->

            <!-- Home page div -->
        <div class="col-md-7" style = "margin-left: 10px; ">
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 1: 1-D Kinematics >> 1.3 - Speed and Velocity</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <h3 class = "text-success" style = "font-family: 'Museo Slab'">1.3 Speed and Velocity</h3>
          <h5 style = "font-size: 17px; line-height: 23px;">
            <p> 
            <b>Speed</b> is a scalar quantity and it is defined as the rate at which an object is moving. Its SI unit is meter per second(m/s). A fast-moving object has a high speed and covers a relatively large distance in a short amount of time. Contrast to this a slow-moving object that has a low speed; it covers a relatively small amount of distance in the same amount of time. An object with no movement at all has a zero speed.
            <br>The average speed of an object over a particular time period can be defined as a ratio of the 
            total distance covered to the corresponding time taken.
            </p>
            <img src = "">
            <p>
            <b>Velocity</b> is a vector quantity and it is defined as the rate at which an object is changing its position. 
            s SI unit is meter per second(m/s). Average velocity of a moving object is defined as the ratio of 
            Displacement to the time taken.
            </p>
            <img src = "">
            <p>
            NOTE: The direction of velocity at any point of the path of an object is tangential to the path at that 
            point and is in the direction of motion.
            </p>
            <img src = "">
            <p>
            <b>Remember:</b> Velocity is a vector quantity and so it can be completely defined using both magnitude 
            and direction. While evaluating velocity one must keep track of direction of the moving object. 
            For e.g. velocity of a car must be described as 45 km/hr, east where as its speed is described as 45 km/hr.
            </p>
            <br>
            <h3>Comparision Chart</h3>
            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>Properties</th>
                  <th>Speed</th>
                  <th>Velocity</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Nature</td>
                  <td>Scalar</td>
                  <td>Vector</td>
                </tr>
                <tr>
                  <td>Calculated with</td>
                  <td>Distance</td>
                  <td>Displacement</td>
                </tr>
                <tr>
                  <td>Components/td>
                  <td>Distance, Time</td>
                  <td>Distance, Time and Direction of Motion</td>
                </tr>
                <tr>
                  <td>Average</td>
                  <td>Distance/Time</td>
                  <td>Displacement/Time</td>
                </tr>
              </tbody>
            </table> 
          </h5>
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'">Instantaneous Velocity</h3>
          <h5 style = "font-size: 17px; line-height: 23px;">
          <p>Instantaneous velocity is the change in position over the change in a very small time interval 
          (Δt≈0).
          </p>
          </h5>
          
         
          
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
