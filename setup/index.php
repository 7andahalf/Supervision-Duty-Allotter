<?php session_start(); 
include '../settings.php';
include '../auth.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Supervision Allotter::</title>
<style type="text/css">
#datea{	width:20px;	}
#dateb{	width:40px;	}
</style>
</head>
<body>
<form action="pro_1.php" method="get">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><h1><center>Supervision Duty Allotter</center></h1></td>
  </tr>
  <tr>
    <td><center>From Date
      <input maxlength="2" type="text" name="da" id="datea" />
      <input maxlength="2" type="text" name="ma" id="datea" />
      <input maxlength="4" type="text" name="ya" id="dateb" /> 
      To Date 
      <input maxlength="2" type="text" name="db" id="datea" />
      <input maxlength="2" type="text" name="mb" id="datea" />
      <input maxlength="4" type="text" name="yb" id="dateb" /> 
      DD MM YYYY</center></td>
  </tr>
 
  <tr>
    <td><center><br /><input type="submit" value="Submit" /></center></td>
    </tr>
</table>
</form></body>
</html>