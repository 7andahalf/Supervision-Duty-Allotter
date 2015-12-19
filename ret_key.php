<?php
if($_GET['step'] == '2'){
$step = '2';
}else{
$step = "1";
}
include 'settings.php';
include 'auth_check_header.php';
?>
<html>
<head>
<title>SUPERVISION DUTY ALLOTTER</title>
</head>
<body>
<?php if($step == '1'){ ?>
<h1><u>Retrive A timetable by a KEY</u></h1>
<form action="ret_key.php" method="get">
KEY:<input type="text" name="key" size="30"><br />
<input type="hidden" name="step" value="2">
<input type="submit" value="retrive....">
<br />
</form>
If you retrive a timetable the current time table will be distroyed you better copy the key to get the currnt timetable in the future.
<?php } ?>

<?php if($step == '2'){ ?>
<?php
$expire=time()+60*60*24*30*24;
setcookie("PHPSESSID", $_GET['key'], $expire);
?>
<h1>Time Table successfully retrived</h1>
<?php } ?>
<a href="index.php">Home</a>
</body>
</html>