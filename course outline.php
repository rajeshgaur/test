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
                          <div class="panel-group" id="accordion">
                            
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
                  <h3 class = "font-green"><u>Lesson 3:</u>Vectors - Motion and Forces in Two Dimensions</h3>
                  <p> Vector principles and operations are introduced and combined with kinematic principles and Newton's laws to describe, explain and analyze the motion of objects in two dimensions. Applications include riverboat problems, projectiles, inclined planes, and static equilibrium. Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
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
                                  Vectors and Direction
                                </a></h4>
                              </div>
                            <div id="collapseOne3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-1.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseTwo3">
                                  Vector Addition
                              </a></h4>
                            </div>
                            <div id="collapseTwo3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-2.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree3">
                                Resultants
                              </a></h4>
                            </div>
                            <div id="collapseThree3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-3.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseFour3">
                                Vector Components
                              </a></h4>
                            </div>
                            <div id="collapseFour3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-4.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseFive3">
                                Vector Resolution
                              </a></h4>
                            </div>
                            <div id="collapseFive3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-5.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseSix3">
                                Component Addition
                              </a></h4>
                            </div>
                            <div id="collapseSix3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-6.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseSeven3">
                                Relative Velocity
                              </a></h4>
                            </div>
                            <div id="collapseSeven3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-7.html';">Learn it!</button>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title"><a data-toggle="collapse" href="#collapseEight3">
                                Independence of Perpendicular Components of Motion
                              </a></h4>
                            </div>
                            <div id="collapseEight3" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                              <div align = "right">
                                <button type="button" class="btn btn-success btn-xs" onclick="window.location='tutorials/vectors/1-8.html';">Learn it!</button>
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
          </div>

          <!-- Made from header-->
          <!--<div class = "row">
            <div class="navbar navbar-inverse">
              
            </div>
          </div>-->
        </div>
    </body>
</html>