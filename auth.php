<?php

include"master_inc.php";
include"settings.php";

$username_from_cookie = $_COOKIE[$cookiename]; //retrieve contents of cookie 

if($permission_level==''){

$sql="SELECT * FROM users WHERE username='$username_from_cookie'";

}else{

$threshold = $permission_level-1;

$sql="SELECT * FROM users WHERE username='$username_from_cookie' AND permissions>'$threshold'";

}

$result=mysql_query($sql);

// Mysql_num_row is counting table rows

$count=mysql_num_rows($result);

// If result matches $myusername and $mypassword, table row must be 1 row




$username_from_cookie = $_COOKIE[$cookiename]; //retrieve contents of cookie 

$con = mysql_connect("$host","$user","$pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$daba2", $con);

$result = mysql_query("SELECT * FROM users WHERE username='$username_from_cookie'");

while($row = mysql_fetch_array($result))
  {
  $pre = $row['permissions'];
  }




if($pre !='5')

{

header("location:../user.php");

}

if($count==0){

{

header("location:../login.php");

}

}

$query = "SELECT * FROM users WHERE `username`='$username_from_cookie'"; 

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults); 

// get results
$result = mysql_query($query) or die("Couldn't execute query");

// now you can display the results returned
while ($row= mysql_fetch_array($result)) {

$permissions= $row["permissions"];

}

//end Chris Carr Auth Check Header

$username = $username_from_cookie;
mysql_close($con);
?>