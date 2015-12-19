<?php session_start();
include '../settings.php';
include '../auth.php';
 ?>
<?php

$_SESSION['pro_1_url'] = $_GET;

$da = $_GET['da'];
$ma = $_GET['ma'];
$ya = $_GET['ya'];

$db = $_GET['db'];
$mb = $_GET['mb'];
$yb = $_GET['yb'];

$sd = $ya ."-". $ma ."-". $da . " UTC";
$ed = $yb ."-". $mb ."-". $db . " UTC";

function dateDiff($start, $end) {
  $start_ts = strtotime($start);
  $end_ts = strtotime($end);
  $diff = $end_ts - $start_ts;
  return round($diff / 86400 + 1);
}
function GetDays($sStartDate, $sEndDate){
  // Firstly, format the provided dates.
  // This function works best with YYYY-MM-DD
  // but other date formats will work thanks
  // to strtotime().
  date_default_timezone_set('America/Los_Angeles');
  $sStartDate = gmdate("Y-m-d", strtotime($sStartDate));
  $sEndDate = gmdate("Y-m-d", strtotime($sEndDate));
  // Start the variable off with the start date
  $aDays[] = $sStartDate;

  // Set a 'temp' variable, sCurrentDate, with
  // the start date - before beginning the loop
  $sCurrentDate = $sStartDate;
  // While the current date is less than the end date
  while($sCurrentDate < $sEndDate){
    // Add a day to the current date
    $sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));

    // Add this new day to the aDays array
    $aDays[] = $sCurrentDate;
  }

  // Once the loop has finished, return the
  // array of days.
  return $aDays;
}
$daylist = GetDays($sd, $ed);
$_SESSION['daylist'] = $daylist;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter Data</title>
</head>
<body>
<form action="pro_2.php" method="get">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td height="37" colspan="5"><h1><center>Enter Data for days</center></h1>
<center>Total No. Of Days <?php echo(dateDiff($sd, $ed)); $_SESSION['nod']=dateDiff($sd, $ed); ?></center><br /></td>
  </tr>
  <tr>
    <td width="30%" rowspan="2"><h3><center>Date</center></h3></td>
    <td width="35%" colspan="2"><h3><center>Morning</center></h3></td>
    <td width="35%" colspan="2"><h3><center>Evening</center></h3></td>
  </tr>
  <tr>
    <td width="17%"><h3><center>Supervision</center></h3></td>
    <td width="18%"><h3><center>Releave</center></h3></td>
    <td width="17%"><h3><center>Supervision</center></h3></td>
    <td width="18%"><h3><center>Releave</center></h3></td>
  </tr>
<?php
$i = '0';
while($i <= dateDiff($sd, $ed) - 1):
?>
  <tr>
    <td><center><?php echo($daylist[$i]); ?> <?php echo date('l', strtotime($daylist[$i])); ?> <input type="checkbox" checked="checked" onclick="document.getElementById ('m_d_<?php echo($i+1) ?>').value='0';document.getElementById ('m_r_<?php echo($i+1) ?>').value='0';document.getElementById ('e_d_<?php echo($i+1) ?>').value='0';document.getElementById ('e_r_<?php echo($i+1) ?>').value='0';document.getElementById ('e_d_<?php echo($i+1) ?>').value='0';document.getElementById ('m_d_<?php echo($i+1) ?>').disabled='disabled';document.getElementById ('m_r_<?php echo($i+1) ?>').disabled='disabled';document.getElementById ('e_d_<?php echo($i+1) ?>').disabled='disabled';document.getElementById ('e_r_<?php echo($i+1) ?>').disabled='disabled'"></center></td>
    <td><center><input type="text" id="m_d_<?php echo($i+1) ?>" name="m_d_<?php echo($i+1) ?>"></center></td>
    <td><center><input type="text" id="m_r_<?php echo($i+1) ?>" name="m_r_<?php echo($i+1) ?>"></center></td>
    <td><center><input type="text" id="e_d_<?php echo($i+1) ?>" name="e_d_<?php echo($i+1) ?>"></center></td>
    <td><center><input type="text" id="e_r_<?php echo($i+1) ?>" name="e_r_<?php echo($i+1) ?>"></center></td>
  </tr>
<?php  
$i++;
endwhile;
?>
  <tr>
    <td colspan="5"><center><input type="submit" value="submit.." /><input name="nod" type="hidden" value="<?php echo(dateDiff($sd, $ed)); ?>" /></center></td>
  </tr>
</table>
<form>
</body>
</html>