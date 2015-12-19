<?PHP
error_reporting(0);

$sitename = "";
$email_domain = "";
$domain = "";


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db = "sup";

$successful_login_url = "router.php";

$level_5_url = "index.php";
$level_4_url = "index.php";
$level_3_url = "index.php";
$level_2_url = "index.php";
$level_1_url = "user.php";

$failed_login = "login_failed.php";


$cookiename = "BasicLogin";

$from_email = "admin@$email_domain";
$reply_to_email = "admin@$email_domain";
$return_path_email = "bounce@$email_domain";

$forgot_password_email_subject = "Your $sitename password";



$email_4_pw_email = "";


if($email_4_pw_email !==''){

   // connect to the server
   mysql_connect( $db_host, $db_username, $db_password )
      or die( "Error! Could not connect to database: " . mysql_error() );
   
   // select the database
   mysql_select_db( $db )
      or die( "Error! Could not select the database: " . mysql_error() );

//The following Query Gets password from database for email if called for 

$query = "SELECT * FROM users WHERE `email` LIKE '$email_4_pw_email'"; 

$numresults=mysql_query($query);
$numrows=mysql_num_rows($numresults); 

// get results
$result = mysql_query($query) or die("Couldn't execute query");

// now you can display the results returned
while ($row= mysql_fetch_array($result)) {

$email= $row["email"];
$password = $row["password"];
$password_hint = $row["password_hint"];

//Debug: echo "<br><br>Password:$password<br><br>";

if($password_hint!==''){


$forgot_password_email = "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>This is the password manager at <b>$sitename</b>. We do not store passwords...only encrypted data. <br><br>Here is a password hint that you provided when you set up your account: $password_hint<br><br>If that helps, then you can <a href='$domain/login_app.php'>try again</a> without resetting your password<br><br>

<br>If you still can't remember then please <a href='$domain//reset_password.php?email=$email&password=$password'>Click Here</a> to reset your password.  Clicking this link will assign an encrypted, temporary password for added security.  The process can easily be repeated if you experience difficutlties.<br><br> Best Regards - The Database</font>";
}
else
{

$forgot_password_email = "<font size='2' face='Verdana, Arial, Helvetica, sans-serif'>This is the password manager at <b>$sitename</b>. We do not store passwords...only encrypted data.<br>
<br>Please <a href='$domain/reset_password.php?email=$email&password=$password'>Click Here</a> to reset your password.  Clicking this link will assign an encrypted, temporary password for added security.  The process can easily be repeated if you experience difficutlties.<br><br> Best Regards - The Database</font>";
}

}}

?>