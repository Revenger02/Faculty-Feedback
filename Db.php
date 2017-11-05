<html>
<body>
jkwdfioq
 <?php

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

//$var=array("Name:", "Sem:", "Department:");
$var1=$_POST["ln"];
$var2=$_POST["li"];
//$psss_h=md5($pass);
//$type='E';
//echo $servername;
//=$_GET['type'];
// Create connection
if($_POST["value"]=="STUDENT")
{
$result1 = mysql_query ("SELECT * FROM login_credential where login_name='$var1' and login_id='$var2' ");
//$conn->query($sql);

while ($row = mysql_fetch_row($result1)){

    foreach ($row as $field) {
      print "<h3 >  $field</h3>";
    
}}} 

// Check connection
/*
echo "Connected successfully";*/
//$conn->close();
mysql_close($db_handle);
?>
</body>
</html>

