<?php session_start();
$_SESSION['pro_4_url'] = $_GET;
include '../settings.php';
include '../auth.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Processing...</title>
</head>
<body>
<?php 
//set all variables
$pro_2 = $_SESSION['pro_2_url'];

$data_a = array($_SESSION['nod'],$_GET['blo'],$_SESSION['not'],$_GET['nam']);
$data_b = array();
$data_c = array();
$data_d = $_SESSION['daylist'];



$i = '1';
while($i <= $data_a[0]):
$idoubled = $i - 1;
$data_b[$idoubled][0] = $pro_2['m_d_'.$i];
$data_b[$idoubled][1] = $pro_2['m_r_'.$i];
$data_b[$idoubled][2] = $pro_2['e_d_'.$i];
$data_b[$idoubled][3] = $pro_2['e_r_'.$i];
$i++;
endwhile;
$i = "1";
while($i <= $data_a[2]):
$idoubled = $i - 1;
$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("$daba", $con);
$result = mysql_query("SELECT * FROM teachers WHERE id = '$i'");
while($row = mysql_fetch_array($result))
  {
$data_c[$idoubled][0] = $row['name'];
$data_c[$idoubled][1] = $row['rel'];
$data_c[$idoubled][2] = $row['sup'];
  }
mysql_close($con);
$i++;
endwhile;
$data = array($data_a,$data_b,$data_c,$data_d);
$_SESSION['data'] = $data;
echo '<meta http-equiv="refresh"' . 'content="0;URL=pro_5.php">';
debug

?>
</body>
</html>