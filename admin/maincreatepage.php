
<?php
    error_reporting(E_ALL);
    $filename = '../tutorials/createdpage.php';
    $file = fopen($filename , 'w');
    $lesson_name = $_POST['lesson_name'];
    $num_of_content = count($_POST);
    echo $num_of_content;
    $Document = '<!DOCTYPE html>
<html>
  <head>
    <title>Physics Easily</title>
    <meta charset="utf-8"> 
    <link rel = "stylesheet" type = "text/css" href = "../css/flatly.css">

        
  </head>
  <body>
    <script src = "http://code.jquery.com/jquery-1.10.1.min.js"> </script>
    <script src = "js/bootstrap.js"> </script>

    <div class="”container”" style = "font-family: \'Museo Slab\'">
      <!--- Nav bar div-->
                <div class="navbar navbar-default">
                    <?php include \'../navbar.php\' ?>
                </div>
            <!-- Nav bar div ends -->

      
    <div class = "row">
            <!-- Panel div -->
      <div class="col-md-3 col-sm-2" style = "background-color: #f0f0f0" align = "center">
                <?php include \'../panel.php\' ?>
            </div>
            <!-- Panel div ends -->

            <!-- Home page div -->
            <div class="col-md-7" style = "margin-left: 10px; ">
          <h4 class = "text-muted" style = "font-family: \'Museo Slab\'">Lesson : Kinematics >> 1.2 - '.$lesson_name.'</h4>
          <hr style = "width: auto; border-bottom: 1px solid rgba(0, 0, 0, 1);">';
        
        foreach ( $_POST as $key => $value )
        {
            if ( preg_match('/topic/', $key) && !preg_match('/content/',$key ))
            {
                $Document .= '  <h3 class = "text-success" style = "font-family: \'Museo Slab\'">1.2 '.$value.'</h3>
                                <h5 style = "font-size: 17px; line-height: 23px;">';
            }
            if (preg_match('/topic/', $key) && preg_match('/content/',$key ) ){
                $Document .= '<p> '
                                .$value.
                            '</p>
                        </h5>';
            }
        }
          
        $Document .=  '</div></div>
            <div class = "row">
                <!-- Made from header-->
                 <div class="navbar navbar-inverse">
                    <?php include \'../footer.php\' ?>
                </div>
            </div>
        </div>            
  </body>
</html>';
       

fwrite($file, $Document);
echo $Document;
header("$filename");
die();




?>

