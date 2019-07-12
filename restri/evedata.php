<?php
include("connect.php");

$data=mysql_query("SELECT * FROM registration WHERE branch='CE'");
$cou=mysql_num_rows($data);
$male=mysql_num_rows(mysql_query("SELECT * FROM registration WHERE branch='CE' && gender='M'"));
$female=mysql_num_rows(mysql_query("SELECT * FROM registration WHERE branch='CE' && gender='F'"));
echo "<center><h2>DEPARTMENT OF CIVIL ENGINEERING</h2><h4>TECKZITE2K15 REGISTRATION</h4>";
echo "Total Registrations : <b>".$cou."</b> &nbsp; &nbsp; &nbsp; Male : <b>".$male."</b> &nbsp; &nbsp; &nbsp; Female : <b>".$female."</b>";
echo "<table border='1'><th>sno</th><th>Stu ID</th><th>TZ ID</th><th>Name</th><th>Gender</th><th>Class</th><th>Phone</th><th>Paid</th>";
while($dat=mysql_fetch_array($data))
{
echo "<tr><td>".$dat['sno']."</th><td>".$dat['stuid']."</td><td>".$dat['tzid']."</td><td>".$dat['firstname']." ".$dat['lastname']."</td><td>".$dat['gender']."</td><td>".$dat['class']."</td><td>".$dat['phno']."</td><td>".$dat['fees']."</td></tr>";

}
echo "</table></center>";
?>