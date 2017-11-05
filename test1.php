<!DOCTYPE html>
<?php
 session_start(); 
?>
<html>
<head><title> Courses Enrolled</title>
<style>
#header {
   
    color:blue;
    width:100%;
   height:20%;
    padding:8px;
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
			        
                     	    			    
</div>

<div style="float:left;background: width:45%;hieght:10%;margin-left:30px" id ="t">
<?php

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

$var=array("Name:", "Sem:", "Department:");
/*$_SESSION["lname"]=$_POST["ln"];
$_SESSION["l_id"]=$_POST["li"];*/
$var1=$_SESSION["lname"];
$var2=$_SESSION["l_id"];
//$_SESSION['type']=$_POST["value"];
$var4=$_SESSION['type'];
if ($db_found) {
if($var4=="STUDENT")
{
$result1 = mysql_query ("SELECT login_name,login_id FROM login_credential where login_name='$var1' and login_id='$var2' ");
if(mysql_fetch_row($result1) )
{$result = mysql_query ("select name,sem,dept from student where id = '$var2' ");
while ($row = mysql_fetch_row($result)){
    
    $_SESSION["sem"]=$row[1];
    $i=0;
    foreach ($row as $field) {
      print "<h3 >$var[$i]  $field</h3>";
      $i++;}}
     ?></div> <div style="float:right ;background: hieght:10%;width:45%;padding:20px;margin-right:50px" id="t1">
  <img align="right" src="student/<?php print $var2;?>.png" style="height:90px; width:110px;margin-right:10px "></div>

<div id= "container"style=" background: float:center;
        width:100%;
       float:center;
        height:50%;padding:10px;margin-top:5px;"><br#6><br><br><br><br><br><br><h3 align="center" fontsize="6">
&nbsp;&nbsp;&nbsp;COURSES ENROLLED</h3><?php
$result = mysql_query ("SELECT enroll FROM login_credential where login_name='$var1' and login_id='$var2' ");
while ($row = mysql_fetch_row($result)){

    foreach ($row as $field) {
       $pieces = explode(",", $field);
for($i=0;$i<count($pieces);$i++)
{?><center>
<form  action="course_contain.php" method="post" ><br>
  <input type="radio" name="subject" value="<?php  print $pieces[$i] ; ?>"> <font size="4"> <?php  print $pieces[$i]; ?></font> <br>

<?php
}?>
    <br> &nbsp;&nbsp;<input type="submit" value="Feedback"><br>
     </form><br>
  <?php  }
  
    print "";
 }
 }
 else {
 echo '<script language="javascript>';
echo 'alery("message successfully sent")';
echo '</script>';?>
<a href="login.php">CLICK HERE TO LOGIN AGAIN</a>
  
 <?php
 }}
 else if($_POST["value"]=="ADMIN")
 {
 
// print "<h1>$var1</h1>";
 }}
 
 else {

print "Database NOT Found ";

}
$_SESSION['subj']=$_POST["subject"];
$var3=$_SESSION['subj'];
if ($db_found) {
$result2 = mysql_query ("SELECT login_name,login_id FROM login_credential where login_name='{$_SESSION['lname']}' and login_id='{$_SESSION['l_id']}' ");
if(mysql_fetch_row($result2) ){
$result = mysql_query ("SELECT * FROM course_contain where course_id = '$var3' ");
while ($row = mysql_fetch_row($result)){
   $_SESSION["course_id"]=$row[0];
    $_SESSION["course_title"]=$row[1];
     
     //$_SESSION["credit"]=$row[7];
 if($row[2]==1)
  {
  $_SESSION["i_name"]=$row[6];
  $pieces = explode(" ", $row[7]);
     $_SESSION["c_credit"]=$pieces[0]; 
      $_SESSION["l_credit"]=$pieces[1]; ?>
  
<iframe  src="course.php" style=" width: 100%; height:100%; border:0px" ></iframe>

 <?php }
 else if($row[3]==1)
  {
  $result1 = mysql_query ("SELECT * FROM course_lab where course_id = '$var3' ");
  while ($row1 = mysql_fetch_row($result1)){
    $_SESSION["course_lab_id"]=$row1[1];
    } $pieces = explode("  ", $row[6]);
     $_SESSION["i_name"]=$pieces[0]; 
      $_SESSION["l_name"]=$pieces[1]; 
      $pieces = explode(" ", $row[7]);
     $_SESSION["c_credit"]=$pieces[0]; 
      $_SESSION["l_credit"]=$pieces[1]; ?>
<iframe  src="course-lab.php" style=" width: 100%; height:100%; border:0px" ></iframe>
 <?php }
 
else if($row[4]==1)
  {?>
<div><form  action="course.php"  ></div> 
<div><form  action="tutorial.php" ></div>
 <?php }
else if($row[5]==1)
  { ?>
<div><form  action="course.php"  ></div> 
<div><form  action="lab.php" ></div>
<div><form  action="tutorial.php" ></div>
 <?php }
   }}else { print "SESSION FINISHED";}}
   else 
   {
   print "not fpound";}
   

mysql_close($db_handle);session_destroy();
?><center>
</div>
<!--<div id="section2">hjkkjkj</div>-->
<div style="background:#820000; width:98%; height:15%;position:absolute;padding:10px;" id="foot">
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
</div></body></html>
