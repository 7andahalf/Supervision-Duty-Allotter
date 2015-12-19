<?php session_start();
$data = $_SESSION['data'];
include '../settings.php';
include '../auth.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Supervision Allotter For examination <?php echo $data[0][3] ?></title>
</head>
<body>
<?php
$error = '0';
$inf = '0';
$all_ok_1 = "0"; 
//total duties per day
$to_d = ($data[0][1]*2)+2;
//see if it is possible to make it
if($data[0][2] < $to_d){
		if($data[0][2] >= $to_d-2){
			$error = '0';
			$inf = '1';
			}else if($data[0][2] >= $data[0][1]){
				$error = '0';
				$inf = '2';
				}else{$error = '1';}
}
//find total duties
$td = $to_d*$data[0][0];
//get all teachers by theier priority
$id = array();
$allo = array();
$allp = array();
$i = "1";
while($i <= $data[0][2]):

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$daba", $con);

$result = mysql_query("SELECT * FROM teachers WHERE id = '$i'");
$ididididi = $i - 1;
while($row = mysql_fetch_array($result))
  {
	  $hjsghgsd = $row['pri'];
  $id[$hjsghgsd][$ididididi] = $row['id'];
  }
mysql_close($con);
$hjsghgsd = '';
$i++;
endwhile;
//last verifications
$i = '1';
while($i <= $data[0][0]):
$idjskj = $i - 1;
$total_day_d = $total_day_d + $data[1][$idjskj][0]+$data[1][$idjskj][1]+$data[1][$idjskj][2]+$data[1][$idjskj][3];
$i++;
endwhile;

$i = '1';
while($i <= $data[0][2]):
$idjskj = $i - 1;
$total_t_d = $total_t_d + $data[2][$idjskj][1] + $data[2][$idjskj][2];
$i++;
endwhile;

if($total_day_d <= $total_t_d){
$all_ok_1 = "1"; 
	}else{
		$error = '2';
		}
if($all_ok_1 == '1'){
	
$i = '1';
while($i <= $data[0][0]):
$m = 'm';
$e = 'e';
$idjskj = $i - 1;
$m_s = $data[1][$idjskj][0];
$m_r = $data[1][$idjskj][1];
$e_s = $data[1][$idjskj][2];
$e_r = $data[1][$idjskj][3];

	$ia = '1';
	while ($ia <= $m_s):	
	$ia_ra = rand(1, $data[0][2]);
	$ia_ra_ar = $ia_ra - 1;
	if($data[2][$ia_ra_ar][2] >= 1){	
		if($allp[$idjskj][$ia_ra_ar] != 'set'){
		$allo[$idjskj][$m][$ia_ra_ar] = "S";
		$data[2][$ia_ra_ar][2] = $data[2][$ia_ra_ar][2] - 1;
		$allp[$idjskj][$ia_ra_ar] = 'set';
		$ia++;
		}
	}
	endwhile;
	$ib = '1';
	while ($ib <= $m_r):	
	$ib_ra = rand(1, $data[0][2]);
	$ib_ra_ar = $ib_ra - 1;
	if($data[2][$ib_ra_ar][1] >= 1){	
		if($allp[$idjskj][$ib_ra_ar] != 'set'){
		$allo[$idjskj][$m][$ib_ra_ar] = "R";
		$data[2][$ib_ra_ar][1] = $data[2][$ib_ra_ar][1] - 1;
		$allp[$idjskj][$ib_ra_ar] = 'set';
		$ib++;
		}
	}
	endwhile;
	$ic = '1';
	while ($ic <= $e_s):	
	$ic_ra = rand(1, $data[0][2]);
	$ic_ra_ar = $ic_ra - 1;
	if($data[2][$ic_ra_ar][2] >= 1){	
		if($allp[$idjskj][$ic_ra_ar] != 'set'){
		$allo[$idjskj][$e][$ic_ra_ar] = "S";
		$data[2][$ic_ra_ar][2] = $data[2][$ic_ra_ar][2] - 1;
		$allp[$idjskj][$ic_ra_ar] = 'set';
		$ic++;
		}
	}
	endwhile;
	$ih = '1';
	while ($ih <= $e_r):	
	$ih_ra = rand(1, $data[0][2]);
	$ih_ra_ar = $ih_ra - 1;
	if($data[2][$ih_ra_ar][1] >= 1){	
		if($allp[$idjskj][$ih_ra_ar] != 'set'){
		$allo[$idjskj][$e][$ih_ra_ar] = "R";
		$data[2][$ih_ra_ar][1] = $data[2][$ih_ra_ar][1] - 1;
		$allp[$idjskj][$ih_ra_ar] = 'set';
		$ih++;
		}
	}
	endwhile;

$m_s = '';
$m_r = '';
$e_s = '';
$e_r = '';
$i++;
endwhile;

} ?>


<table border="1" cellpadding="5" cellspacing="0" >
<tr>
<td colspan="100%">
<h1><center>SUPERVISION DUTIES FOR <?php echo $data[0][3]; ?></center></h1>
</td>
</tr>
<tr>
<td rowspan='2' ><b><center>Date<br />&<br />Name</center></b></td>
<?php 
$n = '1';
while($n <= $data[0][0]):
$n_one = $n - 1;
$toghsdgshdfsghdfsgh = $data[1][$n_one][0]+$data[1][$n_one][1]+$data[1][$n_one][2]+$data[1][$n_one][3];
if($toghsdgshdfsghdfsgh != '0'){echo '<td colspan="2" ><b><center>'.$data[3][$n_one].'</center></b></td>';}
$n++;
endwhile;
?>
</tr>
<?php 
$hj = '1';
while($hj <= $data[0][0]):
$o_one = $hj - 1;
$otoghsdgshdfsghdfsgh = $data[1][$o_one][0]+$data[1][$o_one][1]+$data[1][$o_one][2]+$data[1][$o_one][3];
if($otoghsdgshdfsghdfsgh != '0'){
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
if($ttoghsdgshdfsghdfsgh != '0'){
	echo '<td><center>'.$allo[$m_one]['m'][$j_one].'</center></td><td><center>'.$allo[$m_one]['e'][$j_one].'</center></td>';}
	$m++;
	endwhile;

echo '</tr>';
$j++;
endwhile;
$_SESSION['allo'] = $allo;
?>
</table>
Time Table automatically saved.... <a href="../view/view_saved_time_table.php">Continue...</a>
</body>
</html>