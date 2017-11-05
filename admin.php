<?php
session_destroy();
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
?>
<html>
<head>
<title>
ADMIN</title></head>
<body style="background-image:url(images/admin.png);background-repeat:no-repeat;">
<?php 
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$var1=$_POST["ln"];
$var2=$_POST["li"];
if ($db_found) {
if($_POST["operation"]=="ADMIN")
{

$result1 = mysql_query ("SELECT * FROM admin where login_id='$var1' and login_password='$var2'");
if(mysql_fetch_row($result1) )
{

?>


<form action="selection1.php" method="post">
 <select name="subj" style="color:lightcyan;position:absolute; left:30%;top:45%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;"><?php
$result1 = mysql_query ("SELECT course_id FROM course_contain  ");
?>

 <?php
while ($field = mysql_fetch_row($result1)){
//echo $field[0];
?>

  <option value="<?php echo $field[0]; ?>"><?php echo $field[0]; ?></option>
  
  <?php } ?>
</select> 
<input type="submit" value="submit" style="color:lightcyan;position:absolute; left:40%;top:45%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;">
</form>
<a href='login.php' ><button style='color:lightcyan;position:absolute; right:2%;top:4%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;'><font size=3 style='color:white; '>Logout</button></a>
<?php }}}?>
</body>
</html>
