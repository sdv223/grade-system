<!-- 
02/23/2016
AUTHOR: SEBASTIAN VELASQUEZ
FILE TYPE: LabAssignment1.php 
ADDED CONSTANTS TO BACK TRACE FOLDER
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> - Sebastian Velasquez - Lab Assignment 1</title>
<link rel= "stylesheet" href= "../style.css" type="text/css"/>
<link rel= "stylesheet" href= "la1-style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="LabAssignment1; charset=utf-8"/>
</head>
<body>
<!-- START of CONTAINER -->	
<div id="container">
<?php 
define('BACK',"../"); 
?>

<!-- START of LEFT PANEL LAYOUT-->		
<?php require 'left_panel.inc'; ?>
<!-- END LEFT PANEL LAYOUT-->		


<!-- START of HEADER LAYOUT-->
<?php include (BACK .'header.php'); ?> <!-- ADDED LASTMOD Function TO DISPLAY UPDATE TIME ON MAIN PAGE-->
<!-- END of HEADER LAYOUT -->



<!-- START of CONTENT/MAIN  -->
<div id="content">


<form action="finalgrade.php" method="post">
			<h1>Participation</h1>
				<p>Earned: <input class="textbox" type="text" name="earnedParticipation" />
					Max: <input class="textbox" type="text" name="maxParticipation" />
					Weight (percentage): <input class="textbox" type="text" name="weightParticipation" />
				</p>
			<h1>Quizzes</h1>
				<p>Earned: <input class="textbox" type="text" name="earnedQuiz" />
					Max: <input class="textbox" type="text" name="maxQuiz" />
					Weight (percentage): <input class="textbox" type="text" name="weightQuiz" />
				</p>
			<h1>Lab Assignments</h1>
				<p>Earned: <input class="textbox" type="text" name="earnedLab" />
					Max: <input class="textbox" type="text" name="maxLab" />
					Weight (percentage): <input class="textbox" type="text" name="weightLab" />
				</p>
			<h1>Practica</h1>
				<p>Earned: <input class="textbox" type="text" name="earnedPracticum" />
					Max: <input class="textbox" type="text" name="maxPracticum" />
					Weight (percentage): <input class="textbox" type="text" name="weightPracticum" />
				</p>
			<br /><br />
			<input type="submit" name="submit" id="submit"/>
</form>





</div>
<!--  END of CONTENT LAYOUT-->

<!-- START of FOOTER LAYOUT-->
<?php  readfile("../footer.inc"); ?>
<!-- END of FOOTER LAYOUT-->

	
	
</div>
<!--  END of CONTAINER-->
</body>
</html>