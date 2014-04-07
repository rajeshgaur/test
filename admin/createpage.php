<!DOCTYPE html>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors'.'1');
?>
<html>
<head>
    <title>Create Page</title>
    <script type="application/x-javascript" src = "createpage.js"><![CDATA[
    
    //]]>
    </script>
</head>
    <form action = "maincreatepage.php" id = "main_form" method = "post">
        Lesson Name <input type = "text" name = "lesson_name">
        <button type= "button" onclick = "create_topic()">Add Topic</button>
        <button type = "submit" name = "main_from_submit" value = "main_form_submit">Creates</button>
    </form> 
<body>



</body>
</html>
