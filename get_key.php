<?php
include 'settings.php';
include 'auth1.php';
?>
<html>
<head>
<title>SUPERVISION DUTY ALLOTTER</title>
</head>
<body>
<h1><u>KEY for current TimeTable</u></h1>
KEY:<input type="text" size="30" value="<?php echo $_COOKIE["PHPSESSID"]; ?>"><br />
<br />
Copy this key and keep it for retriving the current time table.
<a href="index.php">Home</a>
</body>
</html>