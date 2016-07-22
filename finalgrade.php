<!-- 
02/27/2016
AUTHOR: SEBASTIAN VELASQUEZ
2nd SUBMISSION 
FILE TYPE: LabAssignment1
NOTE: created constant grading scale; A+ == AP; A == A; A- == AM and so on...
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> - Sebastian Velasquez - IT 207 Grade Determiner </title>
<link rel= "stylesheet" href= "../style.css" type="text/css"/>
<link rel= "stylesheet" href= "la1-style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="LabAssignment1; charset=utf-8"/>
</head>
<body>
<!-- START of CONTAINER -->	
<div id="container">


<!-- START of LEFT PANEL LAYOUT-->		
<?php require '../left_panel.inc'; ?>
<!-- END LEFT PANEL LAYOUT-->		


<!-- START of HEADER LAYOUT-->
<?php include '../header.php'; ?> <!-- ADDED LASTMOD Function TO DISPLAY UPDATE TIME ON MAIN PAGE-->
<!-- END of HEADER LAYOUT -->



<!-- START of CONTENT/MAIN  -->
<div id="content">

<?php
 $earnedParticipation = $maxParticipation = $weightParticipation =" ";
 $earnedQuiz = $maxQuiz = $weightQuiz = " ";
 $earnedLab = $maxLab = $weightLab =" ";
 $earnedPracticum = $maxPracticum = $weightPracticum = " ";
 
 
 //CREATED CONSTANT LETTER GRADE ACCORDING TO GRADING SCALE
 define ("AP",97);
 define ("A",93);
 define ("AM",90);
 
 define ("BP",87);
 define ("B",83);
 define ("BM",80);
 
 define ("CP",77);
 define ("C",73);
 define ("CM",70);
 
 define ("D",60);
//END OF CONSTANT GRADING SCALE


 
 //returns calculated percentage of each component ex:60% not .6
 function perccomp($earn,$static)
 {
 	return (($earn/$static)*100);
 }
 //returns acual percentage of each component ex: 3% out of whatever category percentage
 function perccompweighted($return,$originalweight)
 {
 	 $res = (($return/100)*$originalweight);
 	 return $res;
 }
 
 
 
 
 
 //returns the overall accumalted score by percentage to output in LAST OUTPUT W/Letter grade
 function weightedtotal($static1,$static2,$static3,$static4,$val1,$val2,$val3,$val4)
 {
 		//MULT EACH PERCENTAGE COMPONENT BY WEIGHTED CATEGORY
 	  $part = $static1 * $val1;
 	  $quiz = $static2 * $val2;
 	  $lab = $static3 * $val3;
 	  $pract = $static4 * $val4;
 	  
 	  //ADD THEM 
 	  return $part + $quiz + $lab + $pract;
 }

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//PARTICIPATION ENTRY
	
	if (empty($_POST["earnedParticipation"])) {
     $earnedParticipation = "earnedParticipation is required";
     echo $earnedParticipation;
     echo "<br />"; 
   } else {
     $earnedParticipation = $_POST["earnedParticipation"];
     
   }
   if (empty($_POST["maxParticipation"])){
     $maxParticipation = "maxParticipation is required";
     echo $maxParticipation;
     echo "<br />";
   } else {
     $maxParticipation = $_POST["maxParticipation"];
   }
	if (empty($_POST["weightParticipation"])){
     $weightParticipation = "weightParticipation is required";
     echo $weightParticipation;
     echo "<br />";
   } else {
     $weightParticipation = $_POST["weightParticipation"];
     $res = perccomp($earnedParticipation,$maxParticipation);
     $result = perccompweighted($res,$weightParticipation);
     
     echo "<p>You earned a " . $res . "% for Participation, with a weighted value of ". $result ."%";
     echo "<br />";
   }

	
	//QUIZ ENRTY
	if (empty($_POST["earnedQuiz"])) {
     $earnedQuiz = "earnedQuiz is required";
     echo $earnedQuiz;
     echo "<br />";
   } else {
     $earnedQuiz = $_POST["earnedQuiz"];
   }
	if (empty($_POST["maxQuiz"])) {
     $maxQuiz = "maxQuiz is required";
     echo $maxQuiz;
     echo "<br />";
   } else {
     $maxQuiz = $_POST["maxQuiz"];
   }
	if (empty($_POST["weightQuiz"])) {
     $weightQuiz = "weightQuiz is required";
     echo $weightQuiz;
     echo "<br />";
   } else {
     $weightQuiz = $_POST["weightQuiz"];
     $res = perccomp($earnedQuiz,$maxQuiz);
     $result = perccompweighted($res,$weightQuiz);
     
     echo "You earned a " . $res . "% for Quizes, with a weighted value of ". $result ."%";
     echo "<br />";
   }


//LAB ASSINGNMENT ENTRY

	if (empty($_POST["earnedLab"])) {
     $earnedLab = "earnedLab is required";
     echo $earnedLab;
     echo "<br />";
   } else {
     $earnedLab = $_POST["earnedLab"];
   }
	if (empty($_POST["maxLab"])) {
     $maxLab = "maxLab is required";
     echo $maxLab;
     echo "<br />";
   } else {
     $maxLab = $_POST["maxLab"];
   }
	if (empty($_POST["weightLab"])) {
     $weightLab = "weightLab is required";
     echo $weightLab;
     echo "<br />";
   } else {
     $weightLab = $_POST["weightLab"];
     $res = perccomp($earnedLab,$maxLab);
     $result = perccompweighted($res,$weightLab);
     
     echo "You earned a " . $res . "% for Lab Assignments, with a weighted value of ". $result ."%";
     echo "<br />";
   }

	//PRACTICUM ENTRY
	
	if (empty($_POST["earnedPracticum"])) {
     $earnedPracticum = "earnedPracticum is required";
     echo $earnedPracticum;
     echo "<br />";
   } else {
     $earnedPracticum = $_POST["earnedPracticum"];
   }
   if (empty($_POST["maxPracticum"])){
     $maxPracticum = "maxPracticum is required";
     echo $maxPracticum;
     echo "<br />";
   } else {
     $maxPracticum = $_POST["maxPracticum"];
   }
	if (empty($_POST["weightPracticum"])){
     $weightPracticum = "weightPracticum is required";
     echo $weightPracticum;
     echo "<br />";
   } else {
     $weightPracticum = $_POST["weightPracticum"];
     $res = perccomp($earnedPracticum,$maxPracticum);
     $result = perccompweighted($res,$weightPracticum);
     
     echo "You earned a " . $res . "% for Practica, with a weighted value of ". $result ."%</p>";
     echo "<br />";
   }
}





//determine Letter grade overall WITH CONSTANT GRADING SCALE FROM ABOVE...
function grade($grade)
{
		  
          $res = $grade >=AP  ? "<span class='blue'>+A</span>":
          $res = $grade>=A ? 'A':
          $res = $grade>=AM ? 'A-':
          $res = $grade>=BP ? 'B+':
          $res = $grade>=B ? 'B':
          $res = $grade>=BM ? 'B-':
          $res = $grade>=CP ? 'C+':
          $res = $grade>=C ? 'C':
          $res = $grade>=CM ? 'C-':
          $res = $grade>=D ? 'D':"<span class='red'>F</span>";
		  
		  
		  return $res;
}

?>

<h2>
	Your Final Grade is a <?php echo weightedtotal(perccomp($earnedParticipation,$maxParticipation)/100,perccomp($earnedQuiz,$maxQuiz)/100,perccomp($earnedLab,$maxLab)/100,perccomp($earnedPracticum,$maxPracticum)/100,$weightParticipation,$weightQuiz,$weightLab,$weightPracticum);?>%, 
	which is a <?php echo grade(weightedtotal(perccomp($earnedParticipation,$maxParticipation)/100,perccomp($earnedQuiz,$maxQuiz)/100,perccomp($earnedLab,$maxLab)/100,perccomp($earnedPracticum,$maxPracticum)/100,$weightParticipation,$weightQuiz,$weightLab,$weightPracticum));?>.
</h2>

</div>
<!--  END of CONTENT LAYOUT-->

<!-- START of FOOTER LAYOUT-->
<?php  readfile("../footer.inc"); ?>
<!-- END of FOOTER LAYOUT-->

	
</div>
<!--  END of CONTAINER-->
</body>
</html>