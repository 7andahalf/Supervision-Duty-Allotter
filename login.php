<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<title>Login</title>
</head>

<body topmargin="0">
<center><h1><u>Login SDAOnline<u></h1></center>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="center">
      <p></p>
      <form action="checklogin.php" method="post" name="form" id="form">
      
        <div align="center"><strong><font size="3">
          <font face="Verdana, Arial, Helvetica, sans-serif">
          <legend><font size="4"><br>
          <br />
          </font></legend>
          </font></font></strong>
            <div style="text-align:left; width:300px; height:20px; margin-top:10px;">
              <div style=" float:left; text-align:right; width:100px; border:1px; padding-right:10px;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Username</strong></font></div>
              <div style="float:left; text-align:left; border: 1px; width:140px; ">
                <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                <input type="text" name="username" value = '<?php //echo $username; ?>' />
              </font></div>
            </div>
          <div style="text-align:left; width:300px; height:20px; margin-top:10px;">
              <div style=" float:left; text-align:right; width:100px; border:1px; padding-right:10px;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Password</strong></font></div>
            <div style="float:left; text-align:left; border: 1px; width:140px; ">
                <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                <input type="password" name="password" value = '<?php //echo $password; ?>' />
              </font></div>
            <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><br />
            </strong></font></div>
          
            <p class="submit"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>
              <input name="submit" type="submit" value="Submit" />
            </strong></font></p>
            <p class="submit"></p>
            <p class="submit"></p>
            <p class="submit">&nbsp;</p>
            <p class="submit">&nbsp;</p>
            <p class="submit"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="agent_add_form.php"></a></font></p>
          <strong><font size="3">
            <legend><br />
            </legend>
          </font></strong></div>
         
      </form>
      <p align="left"><br>
      </p>
    </div></td>
  </tr>
</table>
<br>
<br>
<br>
</body>
</html>
