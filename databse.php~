
<?PHP

$user_name = "root";
$password = "rosha";
$database = "miniproject";
$server = "127.0.0.1";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

print "Database Found ";


}
else {

print "Database NOT Found ";

}

$result = mysql_query ("SELECT enroll FROM login_credential where login_name='rosha' and login_id='rosha'");
while ($row = mysql_fetch_row($result)){
    foreach ($row as $field) {
       print "$field . ";
    }
    print "";
 }

mysql_close($db_handle);
?>

