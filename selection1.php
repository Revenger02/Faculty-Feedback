<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();?>
<html><head>
<title>selection</title></head>
<body style="background-image:url('images/selection1.png'); background-repeat:no-repeat;">
<?php
//$_SESSION['subject']=$_POST["subject"];
$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";
if(isset($_POST["subj"]))
{
$_SESSION['subject']=$_POST["subj"];
$_SESSION['count']=0;
}
$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
if ($db_found) {

$result = mysql_query ("SELECT * FROM course_contain where course_id = '$_SESSION[subject]' ");
while ($row = mysql_fetch_row($result)){

$field= explode("-",$row[2]);
if($field[0]=='1' && $field[1]=='0' && $field[2]=='1'){
$_SESSION['course_id']=$row[0];
$_SESSION["course_title"]=$row[1];
$_SESSION["c_credit"]=$row[4];
$result1 = mysql_query ("SELECT * FROM Instructor where f_id = '$row[3]' ");
$row1 = mysql_fetch_row($result1);
//print $row1[0];
$_SESSION["i_name"]=$row1[1];
$result2 = mysql_query ("SELECT * FROM course_lab where course_id = '$row[0]' ");
$row2 = mysql_fetch_row($result2);
$_SESSION["l_name"]=$row2[2];
$_SESSION["l_id"]=$row2[1];
$_SESSION["l_credit"]=$row2[3];

echo "<a href='course_admin.php'><button style='color:lightcyan;position:absolute; left:4%;bottom:2%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 10%; height:10%;'>Link to course</button></a>";
echo "<a href='course_admin_lab.php'><button style='color:lightcyan;position:absolute; right:4%;bottom:2%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 10%; height:10%;'>Link to lab</button></a>";
}
if($field[0]=='0' && $field[1]=='0' && $field[2]=='1'){
$_SESSION['course_id']=$row[0];
$_SESSION["course_title"]=$row[1];
$_SESSION["c_credit"]=$row[4];
$result1 = mysql_query ("SELECT * FROM Instructor where f_id = '$row[3]' ");
$row1 = mysql_fetch_row($result1);
//print $row1[0];
$_SESSION["i_name"]=$row1[1];

echo "<a href='course_admin.php'><button style='color:lightcyan;position:absolute; right:40%;bottom:30%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 15%; height:15%;'>Link to Course</button></a>";
$_SESSION['type']=2;


}
if($field[0]=='1' && $field[1]=='1' && $field[2]=='1'){
echo "<a href='course_admin_tutorial.php'><button style='color:lightcyan;position:absolute; right:2%;top:4%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;'>Link Text</button></a>";
$_SESSION['type']=3;
}
if($field[0]=='0' && $field[1]=='1' && $field[2]=='1'){
echo "<a href='course-tutorial.php'><button>Link Text</button></a>";
$_SESSION['type']=4;
}
}
}

?>
<a href='login.php' ><button style="color:lightcyan;position:absolute; right:4%;top:4%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;"><font size=3 style='color:white; '>Logout</button></a>
</body>
</html>
