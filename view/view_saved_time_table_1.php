<?php session_start();
$data = $_SESSION['data'];
$allo = $_SESSION['allo'];
if(isset($_GET['step'] )){
$step = $_GET['step'];
}else{
$step = '1';
}
include '../settings.php';
include '../auth.php';
 ?>
<?php if($step == '1'){ ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supervision Allotter For examination <?php echo $data[0][3] ?></title>
</head>
<body>
<h1>SHOW DUTIES ON SPECIFIED DATE</h1>
<form action="view_saved_time_table_1.php" method="get">
<input type="text" name="date">YYYY-MM-DD
<input type="hidden" name="step" value="2">
<input type="submit" value="Continue...">
</body>
</html>
<?php }  ?>
<?php if($step == '2'){ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supervision Allotter For examination <?php echo $data[0][3] ?></title>
</head>
<body>
<table border="1" cellpadding="5" cellspacing="0" >
<tr>
<td colspan="100%">
<h1><center>SUPERVISION DUTIES FOR <?php echo $data[0][3]; ?> ON <?php echo $_GET['date']; ?></center></h1>
</td>
</tr>
<tr>
<td rowspan='2' width="200" ><b><center>Date<br />&<br />Name</center></b></td>
<?php 
$n = '1';
while($n <= $data[0][0]):
$n_one = $n - 1;
$toghsdgshdfsghdfsgh = $data[1][$n_one][0]+$data[1][$n_one][1]+$data[1][$n_one][2]+$data[1][$n_one][3];
if($toghsdgshdfsghdfsgh != '0' && $_GET['date'] == $data[3][$n_one]){echo '<td colspan="2" ><b><center>'.$data[3][$n_one].'</center></b></td>';}
$n++;
endwhile;
?>
</tr>
<?php 
$hj = '1';
while($hj <= $data[0][0]):
$o_one = $hj - 1;
$otoghsdgshdfsghdfsgh = $data[1][$o_one][0]+$data[1][$o_one][1]+$data[1][$o_one][2]+$data[1][$o_one][3];
if($otoghsdgshdfsghdfsgh != '0' && $_GET['date'] == $data[3][$o_one]){
echo ("<td><b><center>M</center></b></td><td><b><center>E</center></b></td>");}
$hj++;
endwhile;
?>
<tr>
</tr>
<?php
$j = '1';
while($j <= $data[0][2]):
$j_one = $j - 1;
echo '<tr><td><b><center>'.$data[2][$j_one][0].'</center></b></td>';
 
	$m = '1';
	while($m <= $data[0][0]):
	$m_one = $m - 1;
	$ttoghsdgshdfsghdfsgh = $data[1][$m_one][0]+$data[1][$m_one][1]+$data[1][$m_one][2]+$data[1][$m_one][3];
	if($ttoghsdgshdfsghdfsgh != '0' && $_GET['date'] == $data[3][$m_one]){
	echo '<td><center>'.$allo[$m_one]['m'][$j_one].'</center></td><td><center>'.$allo[$m_one]['e'][$j_one].'</center></td>';}
	$m++;
	endwhile;

echo '</tr>';
$j++;
endwhile;
?>
</table>
<a href="../index.php">Home</a>
</body>
</html>
<?php } ?>