<?php 
 session_start();
//header('Location: action_page.php'); 
 ?>
<html>
<head>
<style>
#header1 {
    
    color:blue;
    width:100%;
   height:15%;
    padding:5px;
}

</style>
</head>
<body style="background:radial-gradient(#bfbfbf,#404040,#333333)"><div id="header1">

  <img src="logo.png" style="float:left;  height:90px;width:110px; margin-left:300px;margin-top:5px;" >
        		<!-- bhaaratiiya suchanaa praudyogikii san:sthaan guwaahaat:ii -->
                
        		<span style="font-family:hindi, &#39;Lohit Devanagari&#39;;">
                    <h2>
                       <p style="color:white; font-weight:bold; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</p>
                    </h2>
        		</span>
			        <p style="color:white; font-weight:bold; margin-left:100px;font-size:20px;margin-top:-0.85em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</p><right>
</div>			        
<?php
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$var2=$_SESSION["lname"];
$var3=$_SESSION["l_id"];
$result2 = mysql_query ("SELECT * FROM where course_id ='$var1'  ");
while($row=mysql_fetch_row($result2) ){?>                       	    			    
<div>
<div style="float:right">
<h4 style="margin-top: 10px;margin-right: 10px; color:white;"> COURSE_ID && COURSE_TITLE :: 
<?php echo $_SESSION["course_id"]   ; print "   ";echo $_SESSION["course_title"];?><br>
<h4 style="margin-top: 10px; margin-right: 10px;color:white; text-align:right;">L-T-P-C :: 
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

<form  method="post"   action="next.php">


<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 100px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>C:</th><th>ABOUT THE TUTORIALS</TH><TH>selected</TH>
<tr><td>C1</td><td>Tutorials were held regularly and followed the lectures.</td><td>$row[1]</td></tr>
<tr><td>C2</td><td>Tutorials clarified basic concepts taught in the lectures.</td><td>$row[2]</td></tr>
<tr><td>C3</td><td>Tutorials helped in learning problem-solving in a methodical way.</td><td>$row[3]</td></tr>
<tr><td>C4</td><td>Questions and discussion were encouraged.</td><td>$row[4]</td></tr>
<tr><td>C5</td><td>Overall, tutorials were useful.</td><td>$row[5]</td></tr>
</tr>
</table>


</tr>
</table>
<h4 style="margin-top: 10px; color:white;"> NAME OF THE TUTOR :: 
 <?php echo $_SESSION["i_name"];?></h4>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 10px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>D:</th><th>ABOUT THE TUTORING</TH><TH>selected</TH>
</tr>
</tr><tr><td>D.1</td><td>Overall, the tutor was excellent.</td><td>$row[6]</td></tr>
<tr><td>D.2</td><td>The Tutor was well prepared for the class.</td><td>$row[7]</td></tr>
<tr><td>D.3</td><td>The Tutor’s voice was clear and understandable.</td><td>$row[8]</td></tr>
<tr><td>D.4</td><td>Black-board work/visual presentations were of good quality.</td><td>$row[9]</td></tr>
<tr><td>D.5</td><td>The basic steps and concepts around the problems were explained clearly.</td><td>$row[10]</td></tr>

</table>



<br><h4 style="margin-top: 10px; color:white;">
COMMENT HERE ::<br>
<textarea rows="4" cols="80" name="r" style="color:black; background-color:#E6E6FA" >
</textarea></h4>
<br><br>

<center>

<input type="submit"value="submit" style="background-color:grey;color:white; border-style:outset; border-width:5px">
<input type="reset"value="reset" style="background-color:grey;color:white; border-style:outset; border-width:5px">
</center></form><?php }else{ print "SESSION EXPIRED";}?>

<h4 style="margin-top: 10px; color:white;">
INSTRUCTION ::<br>
Please respond to each statement carefully. Your independent and well-considered responses will contribute to the Institute's ongoing
effort to improve the teaching-learning environment.<b style="color:black;"> DO NOT WRITE YOUR NAME/ROLL NUMBER ANYWHERE.</b> Detailed comments are
welcome.<b style="color:black;"> PUT A TICK MARK IN THE APPROPRIATE BOX/CELL.</b>
<div style="background:#820000; width:98%; height:15%;position:absolute;padding:10px;margin-top:10px;" id="foot">
<div style="float:left;padding-left:80px;">
<p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#FFF; text-align:left">
Copyright © 2014<br>
IIIT Guwahati<br>
All rights reserved.</p></div>
<div style="float:right;padding-right:80px;">
<p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#FFF; text-align:right">
Ambari<br>
G.N.Bordoloi Road<br>
Guwahati 781001
</p>
</div>
</div>

</body>
</html>
