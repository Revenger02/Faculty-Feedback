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
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);

$db_found = mysql_select_db($database, $db_handle);
$var2=$_SESSION["lname"];
$var3=$_SESSION["l_id"];
$i=0;
if($db_found){
$result2 = mysql_query ("SELECT * FROM course_feedback where course_id='$_SESSION[subject]' ");
$counter = $_SESSION['count'];
while($row=mysql_fetch_row($result2))
{
if(is_null($row)){
echo "NO FEEDBACK EXIST";}
else {
if($i==$counter){ 
?>  
<center><h4>
FORM <?php echo $counter; ?> </h4></center>                  	    			    
<div>
<div style="float:right">
<h4 style="margin-top: 10px;margin-right: 10px; color:white;">  COURSE_TITLE :: 
<?php  print "   ";echo $_SESSION["course_title"];?><br>
<h4 style="margin-top: 10px; margin-right: 10px;color:white; text-align:right;">L-T-P-C :: 
<?php echo $_SESSION["c_credit"];?>
</h4></div>
<div style="float:left">
<h4 style="margin-top: 10px; color:white;"> COURSE ID:: 
<?php echo $_SESSION["course_id"]   ; ?><br>
<h4 style="margin-top: 10px; color:white;">ACADEMIC SESSION ::
<?php 
$var2=date(" Y", time());
echo $var2-1 ."-".$var2 ;    ?>
</h4></div></div>


<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 100px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>A:</th><th>ABOUT THE COURSE</TH><TH>selected</TH>
<tr><td>A1</td><td>A detailed course syllabus was provided at the beginning of the course.</td><td><?php print $row[1]; ?></td></tr>
<tr><td>A2</td><td>Text books were appropriate for the course.</td><td><?php print $row[2]; ?></td></tr>
<tr><td>A3</td><td>Reference books provided good support for the course.</td><td><?php print $row[3]; ?></td></tr>
<tr><td>A4</td><td>The course load was very heavy.</td><td><?php print $row[4]; ?></td></tr>
<tr><td>A5</td><td>The course was highly enjoyable.</td><td><?php print $row[5]; ?></td></tr>
</tr>
</table>
<h4 style="margin-top: 10px; color:white;"> NAME OF INSTRUCTOR :: 
 <?php echo $_SESSION["i_name"];?></h4>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 100%;margin-left: auto; margin-right: auto;margin-top: 10px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white;">
<th>B:</th><th>ABOUT THE INSTRUCTOR</TH><TH>selected</TH>
</tr>
</tr><tr><td>B.1</td><td>Overall, the instructor was excellent.</td><td><?php print $row[6]; ?></td></tr>
<tr><td>B.2</td><td>The instructor was well prepared for the class.</td><td><?php print $row[7]; ?></td></tr>
<tr><td>B.3</td><td>The concepts were explained properly.</td><td><?php print $row[8]; ?></td></tr>
<tr><td>B.4</td><td>Classes were held regularly as per time-table.</td><td><?php print $row[9]; ?></td></tr>
<tr><td>B.5</td><td>The instructor’s voice was audible and understandable.</td><td><?php print $row[10]; ?></td></tr>
</tr><tr><td>B.6</td><td>Black-board work/visual presentations were of good quality.</td><td><?php print $row[11]; ?></td></tr>
<tr><td>B.7</td><td>Topics were covered in a logical sequence.</td><td><?php print $row[12]; ?></td></tr>
<tr><td>B.8</td><td>The coverage of the course was complete.</td><td><?php print $row[13]; ?></td></tr>
<tr><td>B.9</td><td>Questions and discussions were encouraged.</td><td><?php print $row[14]; ?></td></tr>
<tr><td>B.10</td><td>Evaluation was done regularly & academic advices were given.</td><td><?php print $row[15]; ?></td></tr>
</table>
<table border="1" cellpadding="2" cellspacing="2"style="text-align: left; width: 30%;margin-left: 0px; margin-right: auto;margin-top: 20px; color:black; background-color:#E6E6FA">
<tr style="background-color:black; color:white ">
<th>COMMENT :: </th>
<tr style="height: 50px"><td><?php print $row[16]; ?></td></tr></tr></table>
<br><br>
<?php 
break;
}
else 
$i++;
}}}else{ print "SESSION EXPIRED";}
$_SESSION['count']++;
?>
<a href="selection1.php"><button>GO BACK</button></a>
<a href="course_admin.php"><button>NEXT</button></a>

</body>
</html>

