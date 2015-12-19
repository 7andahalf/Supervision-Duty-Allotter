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
<form action="view_saved_time_table_2.php" method="get">
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
<h1><center><h3>LIST OF SUPERVISORS IN MORNING ON <?php echo $_GET['date']; ?></h3></center></h1>
</td>
</tr>
<tr>
<td><b><center>Names</center></b></td><td width="10%"><b><center>Block No.</center></b></td><td width='400'><b><center>Signature</center></b></td></tr>

<?php
$kjkjhj = array();
$j = '1';
while($j <= $data[0][2]):
$j_one = $j - 1;
	$m = '1';
	while($m <= $data[0][0]):
	$m_one = $m - 1;
	$ttoghsdgshdfsghdfsgh = $data[1][$m_one][0]+$data[1][$m_one][1]+$data[1][$m_one][2]+$data[1][$m_one][3];
	if($ttoghsdgshdfsghdfsgh != '0' && $_GET['date'] == $data[3][$m_one] && $allo[$m_one]['m'][$j_one] == 'S'){
	$br_of_jasj = count($kjkjhj);
	$br_of_jasj_o = $br_of_jasj + 1;
	$kjkjhj[$br_of_jasj_o] = $j_one;
	$no_of_su = $no_of_su + 1;
}

	$m++;
	endwhile;
$j++;
endwhile;

$gawhgah = array();

	$m = '1';
	while($m <= $no_of_su):
	$m_one = $m - 1;
	$rand_da = rand(1, $no_of_su);
	if($gawhgah[$rand_da] != 'set'){
	$id_jsdkjh = $kjkjhj[$m];
	echo '<tr><td>   '.$data[2][$id_jsdkjh][0].'</td><td><center>'.$rand_da.'</center></td><td></td></tr>';
	$gawhgah[$rand_da] = 'set';
	$m++;
	}
	endwhile;
?>

<tr>
<td colspan="100%">
<h1><center><h3>LIST OF RELEAVERS IN MORNING</h3></center></h1>
</td>
</tr>


<?php
$j = '1';
while($j <= $data[0][2]):
$j_one = $j - 1;
	$m = '1';
	while($m <= $data[0][0]):
	$m_one = $m - 1;
	$ttoghsdgshdfsghdfsgh = $data[1][$m_one][0]+$data[1][$m_one][1]+$data[1][$m_one][2]+$data[1][$m_one][3];
	if($ttoghsdgshdfsghdfsgh != '0' && $_GET['date'] == $data[3][$m_one] && $allo[$m_one]['m'][$j_one] == 'R'){

	echo '<tr><td colspan="2">'.$data[2][$j_one][0].'</td><td width="100"></td></tr>';}

	$m++;
	endwhile;
$j++;
endwhile;
?>

<a href="../index.php">Home</a>
</body>
</html>
<?php } ?>