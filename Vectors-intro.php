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
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 3: Vectors in 2D >> 3.1 - Vectors in 2D and its operations</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <div class = "row" style = "margin-left: 10px; "><h3 class = "text-success" style = "font-family: 'Museo Slab'">3.1: Vectors in 2D and its operations</h3>
          </div>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
          <div class = "row" style = "margin-left: 10px; ">
          
            <p> <b>Vectors</b> are physical quantities which requires both magnitude and direction to completely describe 
            them.</p>
            <p>Any vector directed in two dimensions can be thought of as having an influence in two different 
            directions. That is, it can be thought of as having two parts. Each part of a two-dimensional vector 
            is known as a component. The components of a vector depict the influence of that vector in a given 
            direction. The combined influence of the two components is equivalent to the influence of the single 
            two-dimensional vector.
            </p>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            <center><img src = "img/img25.png"></center>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            <p>
            <h3>Parallelogram law of vector addition:</h3> 
            According to the parallelogram law of vector addition:
            <br>“If two vector quantities are represented by two adjacent sides or a parallelogram then the diagonal 
            of parallelogram will be equal to the resultant of these two vectors.”
            </p>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            <p>Explanation:
              <ol type = "i">
                <li>Consider two vectors p and q with the orientation as shown in the figure.</li>
                <li>Draw the vectors so that their tails are at the same point.</li>
                <li>Draw a line parallel to both vectors from the head of the other vector as shown in figure.</li>
                <li>Resultant vector is the vector from the tail of both vectors to the point where both lines intersects.</li>
              </ol>
            </p>
          </div>
           <div class = "row" style = "margin-left: 10px;">
            <center><img src = "img/img26.png"></center>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            <p>When you want to add more than two vectors just add components of all the vectors.
            </p>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            Next Section: <a href = "Speed-and-Velocity.php"> Projectile Motion </a>
          </div>
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
