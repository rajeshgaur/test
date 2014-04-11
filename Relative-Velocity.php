
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
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 1: 1-D Kinematics >> 1.6: Relative Velocity</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <div class = "row" style = "margin-left: 10px; ">
            <h3 class = "text-success" style = "font-family: 'Museo Slab'">1.6 Relative Velocity</h3>
          </div>
          <h5 style = "font-size: 17px; line-height: 23px;font-family: 'Museo Sans'">
          <div class = "row" style = "margin-left: 10px; ">
            <p> The concept of relative motion or relative velocity is all about understanding frame of reference. 
            A frame of reference can be thought of as the state of motion of the observer of some event. For example, 
            you must be familiar with the experience of travelling in a train and being overtaken by another train moving 
            in the same direction as you are. While that train must be travelling faster than you to be able to pass you, it 
            does seem slower to you than it would be to someone standing on the ground and watching both the trains. In case 
            both the trains have the same velocity with respect to the ground, then to you the other train would seem to be 
            not moving at all. To understand such observations, we now introduce the concept of frame of reference and 
            relative velocity.
			     </p>
            <center>
            <img src = "img/img24.png">
            </center>
          </div>

          <div class = "row" style = "margin-left: 10px; ">  
            <p>
            Example:
            <br>Consider two objects <b>A</b> and <b>B</b> moving uniformly with average velocities <b>v<sub>A</sub></b> and <b><sub>vB</sub></b> in one dimension, 
            say along x-axis. If <b>x<sub>A</sub> (0)</b> and <b>x<sub>B</sub> (0)</b> are positions of objects <b>A</b> and <b>B</b>, 
            respectively at time t = 0, their positions <b>x<sub>A</sub>(t)</b> and <b>x<sub>B</sub>(t)</b> at time t 
            are given by:
            <br><center><b>x<sub>A</sub>(t) = x<sub>A</sub>(0) + v<sub>A</sub>(t) 
            <br>x<sub>B</sub>(t) = x<sub>B</sub>(0)  + v<sub>B</sub>(t)</b></center> 
            <br>Then, the displacement from object <b>A</b> to object <b>B</b> is given by 
            <br><center><b>x<sub>BA</sub>(t) = x<sub>B</sub>(t) – x<sub>A</sub>(t) = [ x<sub>B</sub>(0) – x<sub>A</sub>(0) ] + (v<sub>B</sub> – v<sub>A</sub>)t.</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1)</center>
            <br>Above equation tells us that as seen from object <b>A</b>, object <b>B</b> has a velocity <b>v<sub>B</sub>–v<sub>A</sub></b> because the 
            displacement from <b>A</b> to <b>B</b> changes steadily by the amount <b>v<sub>B</sub>–v<sub>A</sub></b> in each unit of time. We say that the velocity of 
            object <b>B</b> relative to object <b>A</b> is 
            <b><center>v<sub>BA</sub> = v<sub>B</sub> – v<sub>A</sub></center></b>
            <br>Similarly, velocity of object <b>A</b> relative to object <b>B</b> is: 
            <br><center><b>v<sub>AB</sub> = v<sub>B</sub> – v<sub>B</sub></b></center> 
            <br>This shows: <b>v<sub>BA</sub> = – v<sub>AB</sub></b>. Now we consider some special cases : 
            <ol type = "a">
            <li>If <b>v<sub>B</sub> = v<sub>A</sub>, v<sub>B</sub> –  v<sub>A</sub> = 0</b>. Then, from Eq. (1), <b>x<sub>B</sub> (t)–x<sub>A</sub>(t) = x<sub>B</sub>(0) – x<sub>A</sub>(0)</b>. Therefore, 
            the two objects stay at a constant distance (<b>x<sub>B</sub>(0) – x<sub>A</sub>(0)</b>) apart, and 
            their position–time graphs are straight lines parallel to each other as shown in the following figure. 
            The relative velocity <b>v<sub>AB</sub></b> or <b>v<sub>BA</sub></b> is zero in this case.

            <br><center>					<b>g = 9.8 m/s2</b></center>

            <br>Weight of an object is the force of gravity acting on an object of mass <b>m</b>. It is measures in 
            Newton(N=kg.m/s2). 
            <br><center><b>				          w = mg</b></center>
            </p>  
          </div>
          </h5>

        
        <div class = "row" style = "margin-left: 10px; ">
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
