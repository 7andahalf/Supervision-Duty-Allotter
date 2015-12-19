<?php 
include 'settings.php';
include 'auth1.php';
if($_GET['name'] != "" && $_GET['sup'] != "" && $_GET['rel'] != ""){
$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$nam = $_GET['name'];
$sup = $_GET['sup'];
$rel = $_GET['rel'];

mysql_select_db("$daba", $con);

mysql_query("INSERT INTO `$daba`.`teachers` (`id`, `name`, `rel`, `sup`, `pri`, `not`) VALUES (NULL, '$nam', '$rel', '$sup', '1', '');");


$result = mysql_query("SELECT * FROM teachers WHERE id = '1'");

while($row = mysql_fetch_array($result))
  {
  $not = $row['not'];
  }
  
$not++;

mysql_query("UPDATE  `$daba`.`teachers` SET  `not` =  '$not' WHERE  `teachers`.`id` =1");

mysql_close($con);
	$error="3";
	}else{
	$error="2";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Teacher</title>
</head>
<body>
<?php if($error == "2"){ ?>
<form action="create.php" method="get">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><h1>CREATE A TEACHER</h1></td>
    </tr>
    <tr>
      <td>Name:
      <input type="text" name="name"/></td>
    </tr>
    <tr>
      <td>Reliever duties:
      <input type="text" name="rel"/></td>
    </tr>
    <tr>
      <td>Superviser duties:
      <input type="text" name="sup"/></td>
    </tr>
     <tr>
      <td><input type="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<a href="index.php">Home</a>
<?php } ?>
<?php if($error == "3"){ ?>
<h2>USER SUCCESSFULLY CREATED</h2>
<form action="create.php" method="get">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><h1>CREATE A TEACHER</h1></td>
    </tr>
    <tr>
      <td>Name:
      <input type="text" name="name"/></td>
    </tr>
    <tr>
      <td>Reliever duties:
      <input type="text" name="rel"/></td>
    </tr>
    <tr>
      <td>Superviser duties:
      <input type="text" name="sup"/></td>
    </tr>
     <tr>
      <td><input type="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<a href="index.php">Home</a>
<?php } ?>
</body>
</html>