<!DOCTYPE html>
<html>
    <head>
        <title>Physics Easily</title>
        <meta charset="utf-8"> 
        <link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
        <script type="text/javascript">
                   function showSubtopics(divIdName) {
                       var divElement = document.getElementById(divIdName);
                       var anchorElement = document.getElementById("a" + divIdName);

                       if(anchorElement.innerHTML == "Show Subtopics") {
                           divElement.style.display = 'block';
                           anchorElement.innerHTML = "Hide Subtopics";

                       }

                       else {
                           divElement.style.display = 'none';
                           anchorElement.innerHTML = "Show Subtopics";
                       }
                   }
        </script>

       
</head>
  <body>
        <script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
        <script src = "js/bootstrap.js"> </script>
        

        <div class="”container”" style = "font-family: 'Museo Slab'">
            <!--- Nav bar -->
            <div class="navbar navbar-default">
                <?php include 'navbar.php' ?>
            </div>
            <div class="intro-header-intermediate">        
            </div>
        <div class = "row">
            <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
              <?php include 'panel.php' ?>
            </div>
            
            <div class="col-md-7 col-sm-9">
              <div class="row"  style = "margin-left: 6px">
                <div class="col-lg-8 col-sm-9" style = "font-family: 'Museo Slab';">
                  <h3 class = "font-green"><u>Lesson 1:</u> 1-D Kinematics</h3>
                  <p> Kinematics is the study of classical mechanics which describes the motion of points, bodies, objects and systems of bodies 
                  (groups of objects) without consideration of the causes of motion. The study of kinematics is often referred to as the geometry 
                  of motion. To describe motion, kinematics studies the trajectories of points, lines and other geometric objects and their 
                  differential properties such as speed,  velocity and acceleration.
                  <br>In this lesson, we will study about the motion of object in one dimension. The study of motion along a straight line is also 
                  known as rectilinear motion. We introduce definitions for scalars, vectors, displacement, velocity and acceleration and derive 
                  equations of motion for bodies moving in one dimension with constant acceleration and also look at some examples of motion of an 
                  objects in 1-dimension.

                  </p>
                </div>
                  <div class="col-lg-3 col-sm-6" style = "display: block;">
                    <img class="img-responsive" src="img/1-d kinematics.jpg" alt="">
                  </div>
              </div>
              <div class="row"  style = "margin-left: 6px">
                <div class= "col-lg-8 col-sm-9">
                  <div class="panel-group">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapseGroup1" style = "text-decoration : none" is-open = "isopen">
                            Show Subtopics 
                          </a>
                        </h4>
                      </div>
                      <div id="collapseGroup1" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="panel-group">
                            
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" href="#collapseTwo1">
                                  1.1 Scalars and Vectors
                                </a></h4>
                              </div>
                              <div id="collapseTwo1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Learn about the difference between Scalars and Vectors. This chapter will also teach you about the 
                                    basics of vectors.
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Scalars-and-Vectors.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapseThree1">
                                    1.2 Distance and Displacement
                                  </a></h4>
                              </div>
                              <div id="collapseThree1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  This chapter teaches you about Distance and Displacement.   
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Distance-and-Displacement.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" href="#collapseFour1">
                                    1.3 Speed and Velocity
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseFour1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Having learnt about distance and displacement, now learn about average and instantaneous speed and velocity.  
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Speed-and-Velocity.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseFive1">
                                  1.4 Acceleration
                                </a></h4>
                              </div>
                              <div id="collapseFive1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  This chapter teaches you about average and instantaneous acceleration.  
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Acceleration.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseSix1">
                                  1.5 Free Fall
                                </a></h4>
                              </div>
                              <div id="collapseSix1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  This chapter teaches you about free fall with cool images and examples.  
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Free-fall.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseSeven1">
                                  1.6 Relative Velocity
                                </a></h4>
                              </div>
                              <div id="collapseSeven1" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Learn about Frame of Reference and Relative Velocity wih examples.  
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Relative-velocity.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="row"  style = "margin-left: 6px">
                <div class="col-lg-8 col-sm-9" style = "font-family: 'Museo Slab';">
                  <h3 class = "font-green"><u>Lesson 2:</u> Newton's Laws of Motion</h3>
                  <p> Newton’s three laws of motions are very basic laws of physics which together describes the relationship between a body and 
                  a forces acting upon it, and its motion in response to that forces. In this chapter, learn about these laws and their applications 
                  along with nice diagrams.
                  </p>
                </div>
                <div class="col-lg-3 col-sm-6" style = "display: block; width: 200px; height: 200px">
                  <img class="img-responsive" src="img/newtonslawsofmotion.jpg" alt="" >
                </div>
              </div>
              <div class="row"  style = "margin-left: 6px">
                <div class= "col-lg-8 col-sm-9">
                  <div class="panel-group">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseGroup2" style = "text-decoration : none" is-open = "isopen">
                        Show Subtopics <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                        </a>
                        </h4>
                      </div>
                      <div id="collapseGroup2" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseOne2">
                                  2.1 First Law of Motion
                                </a></h4>
                              </div>
                              <div id="collapseOne2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Newton's first law of motion governs the change in state of motion of objects. Learn about this amazing physics in
                                  this chapter along with the concept of Inertia and the various examples.
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='First-Law-of-Motion.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseTwo2">
                                  2.2 Second Law of Motion
                                </a></h4>
                              </div>
                              <div id="collapseTwo2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Newton's second law of motion says about the Force and the famous formula F = ma. Learn about it's applications 
                                  and the examples.
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Second-Law-of-Motion.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseThree2">
                                 2.3  Third Law of Motion
                                </a></h4>
                              </div>
                              <div id="collapseThree2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Learn about Action and Reaction through various examples and the diagrams.  
                                </div>
                                <div align = "right">
                                  <button type="button" class="btn btn-success btn-xs" onclick="window.location='Third-Law-of-Motion.php';">Learn it!</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <div class="row"  style = "margin-left: 6px">
                <div class="col-lg-8 col-sm-9" style = "font-family: 'Museo Slab';">
                  <h3 class = "font-green"><u>Lesson 3:</u> Vectors in 2-D</h3>
                  <p>As we have learnt about 1-Dimensional kinematics in chapter 1, but in real life you rarely encounter absolute 
                  linear motion.most of the times you find motion in 2-Dimensions or in 3-Dimensions. In this chapter we will learn 
                  about the motion of an object in 2-Dimension its representation, properties and path it follows.
                  </p> 
                </div>
                <div class="col-lg-3 col-sm-6" style = "display: block; width: 200px; height: 200px">
                  <img class="img-responsive" src="img/motionin2D.png" alt="" >
                </div>
              </div>
              <div class="row"  style = "margin-left: 6px">
                <div class= "col-lg-8 col-sm-9">
                  <div class="panel-group">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapseGroup3" style = "text-decoration : none" is-open = "isopen">
                          Show Subtopics <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': isopen, 'glyphicon-chevron-right': !isopen}"></i>
                        </a></h4>
                      </div>
                      <div id="collapseGroup3" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapseOne3">
                                  3.1 Vectors in 2D and its operations
                                </a></h4>
                              </div>
                            <div id="collapseOne3" class="panel-collapse collapse">
                              <div class="panel-body">
                                This chapter gives an introduction of what are vectors. It also teaches about vector
                                addition and subtraction.   
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='Vectors-intro.php';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseTwo3">
                                  3.2 Projectile Motion
                              </a></h4>
                            </div>
                            <div id="collapseTwo3" class="panel-collapse collapse">
                              <div class="panel-body">
                                  This chapter teaches you about projectile motion with nice images and examples.
                                </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='Projectile-Motion.php';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <div class="row"  style = "margin-left: 6px; margin-bottom: 40px">
                <div class="col-lg-8 col-sm-9" style = "font-family: 'Museo Slab'; margin-top: 30px">
                  <h3 class = "font-green">References</h3>
                  NCERT Textbooks
                  <br>wikipedia website
                  <br>http://physics.info/  
                  <br>
                </div>
                  <div class="col-lg-3 col-sm-6" style = "display: block;">
                    <img class="img-responsive" src="img/books1.jpg" alt="">
                  </div>
              </div>
            </div>
          </div>


          <!-- Made from header-->
          <div class = "row">
            <div class="navbar navbar-inverse">
              <?php include 'footer.php' ?>
            </div>
          </div>
        </div>
    </body>
</html>