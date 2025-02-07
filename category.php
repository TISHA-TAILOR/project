<?php session_start(); 

include 'config/connect.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>category</title>
</head>

<body>
<?php error_reporting(0); echo $_SESSION['category']; unset($_SESSION['category']);?>
<form id="form1" name="form1" method="post" action="category_exe.php">
  <table width="579" border="0">
    <tr>
      <td width="224">category name</td>
      <td width="339"><label for="textfield"></label>
      <input type="text" name="category_name" id="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Save" /></td>
    </tr>
  </table>
  
  <table width="50" border="0">
  <tr bgcolor="#999999">
    <td>Name</td>
      </tr>
  <?php
  $sql="select * from `category` ";
  $result=mysqli_query($link,$sql);
  while($row=mysqli_fetch_array($result)) {
  ?>
  <tr bgcolor="#CCCCCC">
    <td><?php echo $row['cat_id']; ?></td>
    <td><?php echo $row['category_name']; ?></td>
   
    <td><a href="company.php?cat_id=<?php echo $row['cat_id']; ?>"><img src="category.jpg" width="24" height="24" /></a></td>
   
  </tr>
  <?php } ?>
  
  
</form>
</body>
</html>