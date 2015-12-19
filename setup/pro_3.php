<?php session_start();
$_SESSION['pro_3_url'] = $_GET;
include '../settings.php';
include '../auth.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Process..</title>
</head>
<body>
<?php 
$pro_1_ur = $_SESSION['pro_1_url'];
$pro_2_ur = $_SESSION['pro_2_url'];
$pro_3_ur = $_SESSION['pro_3_url'];
?>


<?php
$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$daba", $con);

$result = mysql_query("SELECT * FROM teachers WHERE id = '1'");

while($row = mysql_fetch_array($result))
  {
  $not = $row['not'];
  }

mysql_close($con);
$i = "1";
while($i <= $not):

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$daba", $con);

$superkjljj = $_GET['t_s_'.$i];
$releiweklj = $_GET['t_r_'.$i];

mysql_query("UPDATE teachers SET sup = '$superkjljj' WHERE id = '$i'");
mysql_query("UPDATE teachers SET rel = '$releiweklj' WHERE id = '$i'");

mysql_close($con);
$superkjljj = "";
$releiweklj = "";
$i++;
endwhile;
?>
<form action="pro_4.php" method="get">
Name of Examination:<input name="nam" type="text" /><br /> 
Name of Blocks:<input name="blo" type="text" /><br /> 
<input type="submit" value="continue" />
</form>
</body>
</html>