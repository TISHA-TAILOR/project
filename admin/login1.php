<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login </title>
<link href="admin.css" rel="stylesheet" />
</head>
    
<body>
<div><?php error_reporting(0); echo $_SESSION['login']; unset($_SESSION['login']);?></div>
<form id="form1" name="form1" method="post" action="login_check.php">

  <table width="1138" border="0">
    <tr>
      <td width="266" id="textfield">username </td>
      <td width="12">&nbsp;</td>
      <td width="846"><label for="textfield"></label>
      <input type="text" name="username" id="textfield"  /></td>
      
    </tr>
    <tr>
      <td>password</td>
      <td>&nbsp;</td>
      <td><label for="textfield2"></label>
      <input type="text" name="password" id="textfield2"  /></td>
      <span class="red"></span>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>


