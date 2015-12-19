<?php session_start();
include '../settings.php';
include '../auth.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Teacher Data</title>
</head>

<body>
<form method="get" action="pro_3.php">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="4"><h1><center>EDIT TEACHER</center></h1></td>
  </tr>
  <tr>
  <td><h3><center>Sl.No.</center></h3></td>
    <td><h3><center>NAME</center></h3></td>
    <td><h3><center>Supervision Duties</center></h3></td>
    <td><h3><center>Reliver Duties</center></h3></td>
  </tr>
<?php
$_SESSION['pro_2_url'] = $_GET;

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
$_SESSION['not'] = $not;
mysql_close($con);
$i = "1";
while($i <= $not):

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$daba", $con);

$result = mysql_query("SELECT * FROM teachers WHERE id = '$i'");

while($row = mysql_fetch_array($result))
  {
  $name = $row['name'];
  $rel = $row['rel'];
  $sup = $row['sup'];
  }

mysql_close($con);
?>  
  <tr>
  <td><center><?php echo($i); ?></center></td>
    <td><center><?php echo($name); ?></center></td>
    <td><center><input name="t_s_<?php echo($i); ?>" type="text" value="<?php echo($sup); ?>" /></center></td>
    <td><center><input name="t_r_<?php echo($i); ?>" type="text" value="<?php echo($rel); ?>" /></center></td>
  </tr>
<?php
$i++;
endwhile;
?>
<tr>
    <td colspan="4"><center><input type="submit" value="Continue..." /></center></td>
  </tr>
</table>
<?php echo $_GET['1']; 
$dbkaskdladajsdl = "1";
while($dbkaskdladajsdl <= count($_GET)):



$dbkaskdladajsdl++;
endwhile;
?>
</form>
</body>
</html>