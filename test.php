<?php 

$msg = "";
if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
  $msg = strip_tags($msg);
  $msg = addslashes($msg);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Physics Easily</title>
        <meta charset="utf-8"> 
        <link rel = "stylesheet" type = "text/css" href = "css/flatly.css">
        <script>
        function startQuiz(url){
          window.location = url;
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
                  <h3 class = "font-yellow">Test Yourself!</h3>
                  <p> Students, test yourself with a vast pool of physics MCQs and challenging numericals. You can also create your own test 
                  and make your friends test themselves on it. 
                  <br>Teachers, make your own tests and make your students test on it! You can visulaise the
                  numericals you create using our <a href = "" style = "color: #3498db"><b>Play tool!</b></a>
                  </p>
                </div>
                  <div class="col-lg-3 col-sm-6" style = "display: block;">
                    <img class="img-responsive" src="img/test-pencil.jpg" alt="">
                  </div>
              </div>
              <div class="row"  style = "margin-left: 6px">
                <div class= "col-lg-8 col-sm-9">
                  <div class="panel-group">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" href="#collapseGroup1" style = "text-decoration : none" is-open = "isopen">
                            Take a test! 
                          </a>
                        </h4>
                      </div>
                      <div id="collapseGroup1" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="panel-group" style = "margin-left: 15px; color: #13987e; font-size: 14px">
                            <div class = "row">
                            <div class = "col-md-8">Lesson 1: 1-D Kinematics</div>
                             <div class = "col-md-4" align = "right"><button type="button" class="btn btn-success btn-xs" onClick="startQuiz('quiz/quiz_kin.php?question=1')">Go for MCQs!</button>
                                  </div>
                            </div>        
                            <br>     
                            <div class = "row">
                            <div class = "col-md-8">Lesson 2: Newton's Laws of Motion</div>
                             <div class = "col-md-4" align = "right"><button type="button" class="btn btn-success btn-xs" onClick="startQuiz('quiz/quiz_newt.php?question=1')">Go for MCQs!</button>
                                  </div>
                            </div> 
                            <br>
                            <div class = "row">
                            <div class = "col-md-8">Lesson 3: Vectors</div>
                             <div class = "col-md-4" align = "right"><button type="button" class="btn btn-success btn-xs" onClick="startQuiz('quiz/quiz_v.php?question=1')">Go for MCQs!</button>
                                  </div>
                            </div>
                            <br>
                            <div class = "row">
                            <div class = "col-md-8">Complete quiz</div>
                             <div class = "col-md-4" align = "right"><button type="button" class="btn btn-success btn-xs" onClick="startQuiz('quiz/quiz.php?question=1')">Go for MCQs!</button>
                                  </div>
                            </div>
                            <br>
                            <div class = "row">
                            <div class = "col-md-8">Custom Test</div>
                             <div class = "col-md-4" align = "right"><button type="button" class="btn btn-success btn-xs" onClick="startQuiz('quiz/enter_test.php')">Enter test</button>
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
                  <h3 class = "font-yellow">Make Your Own Test!</h3>
                  <p>ATTENTION! 
                  <br>Students, make your own Tests and test your friends!
                  <br>Teachers, make your students experts in physics by making your own test!
                  <br>What's more? You can visulaise the
                  numericals you create using our <a href = "" style = "color: #3498db"><b>Play tool!</b></a>
                  
                  <div align = "right"> <button type="button" class="btn btn-warning" onclick = "window.location = 'quiz/quiz_platform/addQuiz.php'">Make your own Test!</button></div>
                </p>
                </div>
                  <div class="col-lg-3 col-sm-6" style = "display: block;">
                    <img class="img-responsive" src="img/test-pencil.jpg" alt="">
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