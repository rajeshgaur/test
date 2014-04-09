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
          <h4 class = "text-muted" style = "font-family: 'Museo Slab'">Lesson 1: 1-D Kinematics >> 1.1 - Scalars and Vectors</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-success" style = "font-family: 'Museo Slab'">1.1 Scalars and Vectors</h3>
          </div>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
            <div class = "row" style = "margin-left: 10px;">
            <p> In physics, we can classify quantities as scalars or vectors. Basically, the difference is that a direction is associated with a vector but not with a scalar. 
            </p>
            <p> A <b>scalar</b> quantity is a quantity with magnitude only. It is specified completely by a single number, along with the proper unit. Examples of the scalars are: mass of an object, temperature of an object, distance between two points, time etc…
            </p>
            <p>The addition, subtraction, multiplication and division of scalars follows the rules of ordinary algebra.
            </p>
            <p>On the other hand <b>Vectors</b> are physical quantities which requires both magnitude and direction to completely describe them. Examples of the vectors are: force applied on an object, velocity, acceleration, momentum etc…
            </p>
            </div>
          </h5>
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'">Geometric representation of vectors:</h3>
          </div>
          <div class = "row" style = "margin-left: 10px;">
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
            <p>Since vectors are determined by both magnitude and direction, they are geometrically represented by a directed line segment or an arrow. The length of an arrow corresponds to the magnitude of the vector and the direction of the arrow corresponds to the direction of the vector.
            </p>
            <center><img src = "img/img5.png"></center>
          </h5>
          </div>
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'"> Equal Vectors </h3>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
          <p>Vectors which have same length  and same direction, are said to be equal vectors.
          </p>
          <center><img src = "img/img6.png"></center>
          </h5>
          </div>
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'"> Sum of two Vectors </h3>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
          <p>The sum of two vectors u and v, written u + v is the vector determined as follows. Place the vector v 
          so that its initial point coincides with the terminal point of the vector u. The vector u + v is the 
          vector whose initial point is the initial point of u and whose terminal point is the terminal point of v.
          </p>
          <center><img src = "img/img7.png"></center>
          </h5>
          </div>
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'"> Negative of a Vector </h3>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
          <p>If u is a nonzero vector, we define the negative of a, denoted –a, to be the vector whose magnitude 
          (or length) is the same as the magnitude (or length) of the vector a, but whose direction is opposite to 
          that of a.
          </p>
          <center><img src = "img/img8.png"></center>
          </h5>
          </div>
          <div class = "row" style = "margin-left: 10px;">
          <h3 class = "text-primary" style = "font-family: 'Museo Slab'"> Difference of two Vectors </h3>
          <h5 style = "font-size: 17px; line-height: 23px; font-family: 'Museo Sans'">
          <p>If u and v are any two vectors, we define the difference of u and v, denoted w = u – v, to be the 
          vector u + (–v).  To construct the vector u – v we can either
          <ol>
          <li>position u and v so that their initial points coincide;  then the vector from the terminal 
          point of v to the terminal point of u is the vector w = u – v;</li>     
          or<br> 
          <li>construct the sum of the vector u and the vector –v to get w = u-v.</li>
          <center><img src = "img/img9.png"></center>
          </ol>
          </p>
          </h5>
          </div>
          <div class = "row" style = "margin-left: 10px;">
            Next Section: <a href = "Distance-and-Displacement.php"> Distance and Displacement</a>
            <br>Next Lesson: <a href = "First-Law-of-Motion.php"> Newton's Laws of Motion</a>
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
