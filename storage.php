<?php
 session_start(); 
?>
<html>
<head><title>
FEEDBACK</title>
</head>
<body>
<?php
$fields = array('r1', 'r2', 'r3', 'r4', 'passwordconf', 'email', 'securityq', 'qanswer');

$error = false; //No errors yet
foreach($fields AS $fieldname) { //Loop trough each field
  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
    echo 'Field '.$fieldname.' misses!<br />'; //Display error with field
    $error = true; //Yup there are errors
  }
}

if(!$error) { //Only create queries when no error occurs
  //Create queries....

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
if($_SESSION['type']==2)
{
print 'grafgfd';
}}?></body>
</html>

