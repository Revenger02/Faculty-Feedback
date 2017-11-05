<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
 session_start(); 
?>
<html>
<head><title>
FEEDBACK</title>
</head>
<body>
<?php
$var=$_SESSION['subject'] ;
if($_SESSION['type']==1)
$fields = array('r1', 'r2', 'r3', 'r4', 'r5', 'b1', 'b2', 'b3','b4','b5','b6','b7','b8','b9','b10','c1','c2','c3','c4','c5','d1','d2','d3','d4','d5','f1','f2','f3','f4','f5');
if($_SESSION['type']==2)
$fields = array('r1', 'r2', 'r3', 'r4', 'r5', 'b1', 'b2', 'b3','b4','b5','b6','b7','b8','b9','b10');
/*if($_SESSION['type']==3)
$fields = array('r1', 'r2', 'r3', 'r4', 'r5', 'b1', 'b2', 'b3','b4','b5','b6','b7','b8','b9','b10','c1','c2','c3','c4','c5','d1','d2','d3','d4','d5','f1','f2','f3','f4','f5');
if($_SESSION['type']==4)
$fields = array('r1', 'r2', 'r3', 'r4', 'r5', 'b1', 'b2', 'b3','b4','b5','b6','b7','b8','b9','b10','c1','c2','c3','c4','c5','d1','d2','d3','d4','d5','f1','f2','f3','f4','f5');
*/


if(!$error) { //Only create queries when no error occurs
  //Create queries....var=$_SESSION['subject'];

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$conn = new mysqli($server, $user_name, $password, $database);

if($_SESSION['type']==1)
{

$sql="insert into course_feedback values('$var', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[b9]', '$_POST[b10]','$_POST[r]')";
$ret="select * from course_lab where course_id ='$var'";
$res=$conn->query($ret);
$row=$res->fetch_assoc();


$lab_id=$row["course_lab_id"];
$sql2="insert into lab_feedback values('$lab_id','$_POST[c1]','$_POST[c2]','$_POST[c3]','$_POST[c4]','$_POST[c5]','$_POST[d1]','$_POST[d2]','$_POST[d3]','$_POST[d4]','$_POST[d5]','$_POST[f1]','$_POST[f2]','$_POST[f3]','$_POST[f4]','$_POST[f5]')";
if(($conn->query($sql)===TRUE)&&($conn->query($sql2)===TRUE))
{//print $_SESSION[lname];
echo "<img src='images/mimions.png'>";

echo "<a href='login.php'><button style='color:lightcyan; background-color:lightslategray; position:absolute; right:2%;top:2%;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;'><font size=3 style='color:white; '>Logout</button></a>";
echo "<a href='action_page.php' ><button style='color:lightcyan;position:absolute; left:4%;bottom:6%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;'><font size=4 style='color:white; '>BACK</button></a>";

$att="select * from login_credential where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]'";
$result=$conn->query($att);
$row=$result->fetch_assoc();
$count=$row["counter"];
$id=$row["enroll"];
$pieces=explode(",",$id);
$cpieces=explode(",",$count);
$i=0;
foreach($pieces as $take){
if($take==$var)
{
$cpieces[$i]='1';

}

$i++;
}
$str=implode(",",$cpieces);

$qr="update login_credential set counter='$str' where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]'";
$conn->query($qr);
}
else
{
echo "Some error in inserting so please <a href='course.php'>Go Back</a>";
}
}

if($_SESSION['type']==2)
{
$sql="insert into course_feedback values('$var', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[b9]', '$_POST[b10]','$_POST[r]')";
//$sql1="insert into lab_feedback values('$var')";
if($conn->query($sql)===TRUE)
{
echo "<img src='images/mimions.png'>";
?>
<a href='login.php'><button style="color:lightcyan; background-color:lightslategray; position:absolute; right:2%;top:2%;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;"><font size=3 style="color:white; ">Logout</button></a>
<a href='action_page.php' ><button style="color:lightcyan;position:absolute; left:4%;bottom:6%;  background-color:lightslategray;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;"><font size=4 style="color:white; ">BACK</button></a>";

<?php
$att="select * from login_credential where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]'";
$result=$conn->query($att);
$row=$result->fetch_assoc();

$count=$row["counter"];
$id=$row["enroll"];
$pieces=explode(",",$id);
$cpieces=explode(",",$count);
$i=0;
foreach($pieces as $take){
if($take==$var)
{
$cpieces[$i]='1';

}

$i++;
}
$str=implode(",",$cpieces);

$qr="update login_credential set counter='$str' where login_name='$_SESSION[lname]' and login_id='$_SESSION[l_id]'";
$conn->query($qr);
}
else
{
echo "Some error in inserting so please <a href='course.php'>Go Back</a>";
}
}

if($_SESSION['type']==3)
{
$sql="insert into course_feedback values('$var', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[b9]', '$_POST[b10]')";

if($conn->query($sql)===TRUE)
echo "<a href='login.php'><button style='color:lightcyan; background-color:lightslategray; position:absolute; right:2%;top:2%;border:0px; border-radius:50px ; box-shadow: 0 10px #27496d;width: 5%; height:5%;'><font size=3 style='color:white; '>Logout</button></a>";
else
{
echo "Some error in inserting so please <a href='course.php'>Go Back</a>";
}

}
if($_SESSION['type']==4)
{
$sql="insert into course_feedback values('$var', '$_POST[r1]', '$_POST[r2]', '$_POST[r3]', '$_POST[r4]', '$_POST[r5]', '$_POST[b1]', '$_POST[b2]', '$_POST[b3]', '$_POST[b4]', '$_POST[b5]', '$_POST[b6]', '$_POST[b7]', '$_POST[b8]', '$_POST[b9]', '$_POST[b10]')";
if($conn->query($sql)===TRUE)
echo "Your feedback inserted successfully";
else
{
echo "Some error in inserting so please <a href='course.php'>Go Back</a>";
}

}
}
?></body>
</html>

