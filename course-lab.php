<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

?>
<html>
<head><title>FEEDBACK FORM</title>
<style>
#header {
    
    color:blue;
    width:100%;
   height:15%;
    padding:5px;
}

</style>
</head>
<body style="background:radial-gradient(#bfbfbf,#404040,#333333)">
<div id="header">

  <img src="logo.png" style="float:left;  height:90px;width:110px; margin-left:300px;margin-top:5px;" >
        		<!-- bhaaratiiya suchanaa praudyogikii san:sthaan guwaahaat:ii -->
                
        		<span style="font-family:hindi, &#39;Lohit Devanagari&#39;;">
                    <h2>
                       <p style="color:white; font-weight:bold; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</p>
                    </h2>
        		</span>
			        <p style="color:white; font-weight:bold; margin-left:100px;font-size:20px;margin-top:-0.85em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</p><right>
			        
                     	    			    
</div><?php
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$result2 = mysql_query ("SELECT login_name,login_id FROM login_credential where login_name='$_SESSION[lname]' and login_id='$_SESSION[lname]' ");
if(mysql_fetch_row($result2) ){?> <div>
<div style="float:right">
<h4 style="margin-top: 10px;margin-right: 10px; color:white;"> COURSE_ID && COURSE_TITLE :: 
<?php echo $_SESSION["subject"]   ; print "   ";echo $_SESSION["course_title"];?><br>
<h4 style="margin-top: 10px; color:white;margin-right: 10px; text-align:right;">L-T-P-C :: 
<?php echo $_SESSION["c_credit"];?>
</h4></div>
<div style="float:left">
<h4 style="margin-top: 10px; color:white;"> SEM :: 
<?php echo $_SESSION["sem"]   ; ?><br>
<h4 style="margin-top: 10px; color:white;">ACADEMIC SESSION ::
<?php 
$var2=date(" Y", time());
echo $var2-1 ."-".$var2 ;    ?>
</h4></div></div>

<form  method="post"  action="course-storage.php" >
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 80px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>A:</th><th>ABOUT THE COURSE</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
<tr><td>A1</td><td>A detailed course syllabus was provided at the beginning of the course.</td><td><input type="radio" name="r1" value="strongly_disagree" required></td><td ><input type="radio" name="r1" value="disagree" required></td><td  "><input type="radio" name="r1" value="neutral" required></td><td  "><input type="radio" name="r1" value="agree" required></td><td  "><input type="radio" name="r1" value="strongly_agree" required></td></tr>
<tr><td>A2</td><td>Text books were appropriate for the course.</td><td  "><input type="radio" name="r2" value="strongly_disagree" required></td><td  "><input type="radio" name="r2" value="disagree" required></td><td  "><input type="radio" name="r2" value="neutral"required></td><td  "><input type="radio" name="r2" value="agree" required></td><td  "><input type="radio" name="r2" value="strongly_agree" required></td></tr>
<tr><td>A3</td><td>Reference books provided good support for the course.</td><td><input type="radio" name="r3" value="strongly_disagree" required></td><td><input type="radio" name="r3" value="disagree" required></td><td><input type="radio" name="r3" value="neutral" required></td><td><input type="radio" name="r3" value="agree" required></td><td><input type="radio" name="r3" value="strongly_agree" required></td></tr>
<tr><td>A4</td><td>The course load was very heavy.</td><td><input type="radio" name="r4" value="strongly_disagree" required></td><td><input type="radio" name="r4" value="disagree" required></td><td><input type="radio" name="r4" value="neutral" required></td><td><input type="radio" name="r4" value="agree" required></td><td><input type="radio" name="r4" value="strongly_agree" required></td></tr>
<tr><td>A5</td><td>The course was highly enjoyable.</td><td><input type="radio" name="r5" value="strongly_disagree "required></td><td><input type="radio" name="r5" value="disagree"required></td><td><input type="radio" name="r5" value="neutral"required></td><td><input type="radio" name="r5" value="agree"required></td><td><input type="radio" name="r5" value="strongly_agree"required></td></tr>
</tr>
</table>

<h4 style="margin-top: 20px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo $_SESSION["i_name"];?></h4>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 20px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE INSTRUCTOR</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
</tr>
</tr><tr><td>B.1</td><td>Overall, the instructor was excellent.</td><td><input type="radio" name="b1" value="strongly_disagree"required></td><td><input type="radio" name="b1" value="disagree"required></td><td><input type="radio" name="b1" value="neutral"required></td><td><input type="radio" name="b1" value="agree"required></td><td><input type="radio" name="b1" value="strongly_agree"required></td></tr>
<tr><td>B.2</td><td>The instructor was well prepared for the class.</td><td><input type="radio" name="b2" value="strongly_disagree"required></td><td><input type="radio" name="b2" value="disagree"required></td><td><input type="radio" name="b2" value="neutral"required></td><td><input type="radio" name="b2" value="agree"required></td><td><input type="radio" name="b2" value="strongly_agree"required></td></tr>
<tr><td>B.3</td><td>The concepts were explained properly.</td><td><input type="radio" name="b3" value="strongly_disagree"required></td><td><input type="radio" name="b3" value="disagree"required></td><td><input type="radio" name="b3" value="neutral"required></td><td><input type="radio" name="b3" value="agree"required></td><td><input type="radio" name="b3" value="strongly_agree"required></td></tr>
<tr><td>B.4</td><td>Classes were held regularly as per time-table.</td><td><input type="radio" name="b4" value="strongly_disagree" required></td><td><input type="radio" name="b4" value="disagree"required></td><td><input type="radio" name="b4" value="neutral"required></td><td><input type="radio" name="b4" value="agree"required></td><td><input type="radio" name="b4" value="strongly_agree"required></td></tr>
<tr><td>B.5</td><td>The instructor’s voice was audible and understandable.</td><td><input type="radio" name="b5" value="strongly_disagree"required></td><td><input type="radio" name="b5" value="disagree"required></td><td><input type="radio" name="b5" value="neutral"required></td><td><input type="radio" name="b5" value="agree"required></td><td><input type="radio" name="b5" value="strongly_agree"required></td></tr>
</tr><tr><td>B.6</td><td>Black-board work/visual presentations were of good quality.</td><td ><input type="radio" name="b6" value="strongly_disagree"required></td><td><input type="radio" name="b6" value="disagree"required></td><td><input type="radio" name="b6" value="neutral"required></td><td><input type="radio" name="b6" value="agree"required></td><td><input type="radio" name="b6" value="strongly_agree"required></td></tr>
<tr><td>B.7</td><td>Topics were covered in a logical sequence.</td><td><input type="radio" name="b7" value="strongly_disagree"required></td><td><input type="radio" name="b7" value="disagree"required></td><td><input type="radio" name="b7" value="neutral"required></td><td><input type="radio" name="b7" value="agree"required></td><td><input type="radio" name="b7" value="strongly_agree"required></td></tr>
<tr><td>B.8</td><td>The coverage of the course was complete.</td><td><input type="radio" name="b8" value="strongly_disagree"required></td><td><input type="radio" name="b8" value="disagree"required></td><td><input type="radio" name="b8" value="neutral"required></td><td><input type="radio" name="b8" value="agree"required></td><td><input type="radio" name="b8" value="strongly_agree"required></td></tr>
<tr><td>B.9</td><td>Questions and discussions were encouraged.</td><td><input type="radio" name="b9" value="strongly_disagree"required></td><td><input type="radio" name="b9" value="disagree"required></td><td><input type="radio" name="b9" value="neutral"required></td><td><input type="radio" name="b9" value="agree"required></td><td><input type="radio" name="b9" value="strongly_agree"required></td></tr>
<tr><td>B.10</td><td>Evaluation was done regularly & academic advices were given.</td><td><input type="radio" name="b10" value="strongly_disagree"required></td><td><input type="radio" name="b10" value="disagree"required></td><td><input type="radio" name="b10" value="neutral"required></td><td><input type="radio" name="b10" value="agree"required></td><td><input type="radio" name="b10" value="strongly_agree"required></td></tr>
</table>


<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 50px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>C:</th><th>ABOUT THE LAB COMPONENT</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
</tr>
</tr><tr><td>C.1</td><td>A detailed write-up on the lab component was provided.</td><td><input type="radio" name="c1" value="strongly_disagree"required></td><td><input type="radio" name="c1" value="disagree"required></td><td><input type="radio" name="c1" value="neutral"required></td><td><input type="radio" name="c1" value="agree"required></td><td><input type="radio" name="c1" value="strongly_agree"required></td></tr>
<tr><td>C.2</td><td>The lab assignments were useful and followed the lectures.</td><td><input type="radio" name="c2" value="strongly_disagree"required></td><td><input type="radio" name="c2" value="disagree"required></td><td><input type="radio" name="c2" value="neutral"required></td><td><input type="radio" name="c2" value="agree"required></td><td><input type="radio" name="c2" value="strongly_agree"required></td></tr>
<tr><td>C.3</td><td>The equipments were user friendly.</td><td><input type="radio" name="c3" value="strongly_disagree"required></td><td><input type="radio" name="c3" value="disagree"required></td><td><input type="radio" name="c3" value="neutral"required></td><td><input type="radio" name="c3" value="agree"required></td><td><input type="radio" name="c3" value="strongly_agree"required></td></tr>
<tr><td>C.4</td><td>The equipments were functioning properly.</td><td><input type="radio" name="c4" value="strongly_disagree"required></td><td><input type="radio" name="c4" value="disagree"required></td><td><input type="radio" name="c4" value="neutral"required></td><td><input type="radio" name="c4" value="agree"required></td><td><input type="radio" name="c4" value="strongly_agree"required></td></tr>
<tr><td>C.5</td><td>The lab session helped in clarified basic concepts taught in the lectures.</td><td><input type="radio" name="c5" value="strongly_disagree"required></td><td><input type="radio" name="c5" value="disagree"required></td><td><input type="radio" name="c5" value="neutral"required></td><td><input type="radio" name="c5" value="agree"required></td><td><input type="radio" name="c5" value="strongly_agree"required></td></tr>
</tr>
</table><h4 style="margin-top: 20px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo $_SESSION["i_name"];?></h4>
<table
border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 20px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>D:</th><th>ABOUT THE LAB SESSION TUTORING</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
</tr>
</tr><tr><td>D.1</td><td>Overall, the Lab Tutor was excellent.</td><td><input type="radio" name="d1" value="strongly_disagree"required></td><td><input type="radio" name="d1" value="disagree"required></td><td><input type="radio" name="d1" value="neutral"required></td><td><input type="radio" name="d1" value="agree"required></td><td><input type="radio" name="d1" value="strongly_agree"required></td></tr>
<tr><td>D.2</td><td>The Lab Tutor was well prepared for the class.</td><td><input type="radio" name="d2" value="strongly_disagree"required></td><td><input type="radio" name="d2" value="disagree"required></td><td><input type="radio" name="d2" value="neutral"required></td><td><input type="radio" name="d2" value="agree"required></td><td><input type="radio" name="d2" value="strongly_agree"required></td></tr>
<tr><td>D.3</td><td>The Lab Tutor’s instructions were clear and understandable.</td><td><input type="radio" name="d3" value="strongly_disagree"required></td><td><input type="radio" name="d3" value="disagree"required></td><td><input type="radio" name="d3" value="neutral"required></td><td><input type="radio" name="d3" value="agree"required></td><td><input type="radio" name="d3" value="strongly_agree"required></td></tr>
<tr><td>D.4</td><td>Evaluation of lab sessions were done regularly & academic advices were given.</td><td><input type="radio" name="d4" value="strongly_disagree"required></td><td><input type="radio" name="d4" value="disagree"required></td><td><input type="radio" name="d4" value="neutral"required></td><td><input type="radio" name="d4" value="agree"required></td><td><input type="radio" name="d4" value="strongly_agree"required></td></tr>
<tr><td>D.5</td><td>The Lab Tutor helped in clarifiying technical concepts involved in the practical work.</td><td><input type="radio" name="d5" value="strongly_disagree"required></td><td><input type="radio" name="d5" value="disagree"required></td><td><input type="radio" name="d5" value="neutral"required></td><td><input type="radio" name="d5" value="agree"required></td><td><input type="radio" name="d5" value="strongly_agree"required></td></tr>
</tr>
</table>

</table>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 50px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>E:</th><th>ABOUT THE LAB COMPONENT</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
</tr>
</tr><tr><td>E.1</td><td>A detailed write-up on the lab component was provided.</td><td><input type="radio" name="e1" value="strongly_disagree"required></td><td><input type="radio" name="e1" value="disagree"required></td><td><input type="radio" name="e1" value="neutral"required></td><td><input type="radio" name="e1" value="agree"required></td><td><input type="radio" name="e1" value="strongly_agree"required></td></tr>
<tr><td>E.2</td><td>The lab assignments were useful and followed the lectures.</td><td><input type="radio" name="e2" value="strongly_disagree"required></td><td><input type="radio" name="e2" value="disagree"required></td><td><input type="radio" name="e2" value="neutral"required></td><td><input type="radio" name="e2" value="agree"required></td><td><input type="radio" name="e2" value="strongly_agree"required></td></tr>
<tr><td>E.3</td><td>The equipments were user friendly.</td><td><input type="radio" name="e3" value="strongly_disagree"required></td><td><input type="radio" name="e3" value="disagree"required></td><td><input type="radio" name="e3" value="neutral"required></td><td><input type="radio" name="e3" value="agree"required></td><td><input type="radio" name="e3" value="strongly_agree"required></td></tr>
<tr><td>E.4</td><td>The equipments were functioning properly.</td><td><input type="radio" name="e4" value="strongly_disagree"required></td><td><input type="radio" name="e4" value="disagree"required></td><td><input type="radio" name="e4" value="neutral"required></td><td><input type="radio" name="e4" value="agree"required></td><td><input type="radio" name="e4" value="strongly_agree"required></td></tr>
<tr><td>E.5</td><td>The lab session helped in clarified basic concepts taught in the lectures.</td><td><input type="radio" name="e5" value="strongly_disagree"required></td><td><input type="radio" name="e5" value="disagree"required></td><td><input type="radio" name="e5" value="neutral"required></td><td><input type="radio" name="e5" value="agree"required></td><td><input type="radio" name="e5" value="strongly_agree"required></td></tr>
</tr>
</table>
<div style="float:left">
<h4 style="margin-top: 20px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo$_SESSION["l_name"]; ?></h4>
 <h4 style="margin-top: 0px; color:white;"> LAB-ID ::
 <?php echo$_SESSION["lab_id"]; ?></h4></div>
 <div style="float:right"><h4 style="margin-top: 10px; color:white;margin-right: 10px; text-align:right;">LAB-CREDIT ::
<?php echo  $_SESSION["l_credit"]; ?>
</h4></div>
<table

 border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 20px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>F:</th><th>ABOUT THE LAB SESSION TUTORING</TH><TH>STRONGLY DISAGREE</TH>
<th> DISAGREE </th>
<th> NEUTRAL </th>
<th> AGREE </th>
<th> STRONGLY AGREE </th>
</tr>
</tr><tr><td>F.1</td><td>Overall, the Lab Tutor was excellent.</td><td><input type="radio" name="f1" value="strongly_disagree"required></td><td><input type="radio" name="f1" value="disagree"required></td><td><input type="radio" name="f1" value="neutral"required></td><td><input type="radio" name="f1" value="agree"required></td><td><input type="radio" name="f1" value="strongly_agree"required></td></tr>
<tr><td>F.2</td><td>The Lab Tutor was well prepared for the class.</td><td><input type="radio" name="f2" value="strongly_disagree"required></td><td><input type="radio" name="f2" value="disagree"required></td><td><input type="radio" name="f2" value="neutral"required></td><td><input type="radio" name="f2" value="agree"required></td><td><input type="radio" name="f2" value="strongly_agree"required></td></tr>
<tr><td>F.3</td><td>The Lab Tutor’s instructions were clear and understandable.</td><td><input type="radio" name="f3" value="strongly_disagree"required></td><td><input type="radio" name="f3" value="disagree"required></td><td><input type="radio" name="f3" value="neutral"required></td><td><input type="radio" name="f3" value="agree"required></td><td><input type="radio" name="f3" value="strongly_agree"required></td></tr>
<tr><td>F.4</td><td>Evaluation of lab sessions were done regularly & academic advices were given.</td><td><input type="radio" name="f4" value="strongly_disagree"required></td><td><input type="radio" name="f4" value="disagree"required></td><td><input type="radio" name="f4" value="neutral"required></td><td><input type="radio" name="f4" value="agree"required></td><td><input type="radio" name="f4" value="strongly_agree"required></td></tr>
<tr><td>F.5</td><td>The Lab Tutor helped in clarifiying technical concepts involved in the practical work.</td><td><input type="radio" name="f5" value="strongly_disagree"required></td><td><input type="radio" name="f5" value="disagree"required></td><td><input type="radio" name="f5" value="neutral"required></td><td><input type="radio" name="f5" value="agree"required></td><td><input type="radio" name="f5" value="strongly_agree"required></td></tr>
</tr>
</table>
<br><h4 style="margin-top: 10px; color:white;">
COMMENT HERE ::<br>
<textarea rows="4" cols="80" name="r" style="color:black; background-color:#E6E6FA" >
</textarea></h4>
<br><br>

<center>

<input type="submit"value="submit" style="background-color:grey;color:white; border-style:outset; border-width:5px">
<input type="reset"value="reset" style="background-color:grey;color:white; border-style:outset; border-width:5px">
 </form>


</center><center>
<a href="action_page.php" ><button  style="background-color:grey;color:white; border-style:outset; border-width:5px">BACK</button></a></center>
<?php }?>
<h4 style="margin-top: 10px; color:white;">
INSTRUCTION ::<br>
Please respond to each statement carefully. Your independent and well-considered responses will contribute to the Institute's ongoing
effort to improve the teaching-learning environment.<b style="color:black;"> DO NOT WRITE YOUR NAME/ROLL NUMBER ANYWHERE.</b> Detailed comments are
welcome.<b style="color:black;"> PUT A TICK MARK IN THE APPROPRIATE BOX/CELL.</b>
<body></html>
