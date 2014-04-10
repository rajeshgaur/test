<?php 
/*
PHP, MySQL, Javascript Timed Quiz
    Copyright (C) 2012  Isaac Price

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	PHP, MySQL, Javascript Timed Quiz  Copyright (C) 2012  Isaac Price
    This program comes with ABSOLUTELY NO WARRANTY.
    This is free software, and you are welcome to redistribute it
    under certain conditions found in the GNU GPL license
*/
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz Tut</title>
<script>
function startQuiz(url){
	window.location = url;
}
</script>
</head>
<body>
<?php echo $msg; ?>
<h3>Click below when you are ready to start the quiz</h3>
<button onClick="startQuiz('quiz.php?question=1')">Click Here To Begin</button>
</body>
</html>