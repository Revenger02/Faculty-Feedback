<?php
session_start();
?>
 <html>
<head><title> Courses_contain </title>
</head>
<body>
<?php 
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$var1=$_POST["subject"];
$var2=$_SESSION["lname"];
$var3=$_SESSION["l_id"];
if ($db_found) {
$result2 = mysql_query ("SELECT login_name,login_id FROM login_credential where login_name='$var2' and login_id='$var3' ");
if(mysql_fetch_row($result2) ){
$result = mysql_query ("SELECT * FROM course_contain where course_id = '$var1' ");
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
  
<form method='post' action='selection.php'>

 <?php }
 else if($row[3]==1)
  {
  $result1 = mysql_query ("SELECT * FROM course_lab where course_id = '$var1' ");
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
   ?>
   </body>
   </html>

