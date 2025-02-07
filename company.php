<?php session_start(); 
include "config/connect.php";
error_reporting(0);

$id=$_GET['cat_id'];

$sql="select * from category where cat_id='$id'";
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>company</title>
</head>

<body>
<div><?php  echo $_SESSION['company']; unset($_SESSION['company']);?></div>
<form id="form1" name="form1" method="post" action="company _exe.php">
  <table width="662" border="1">
    <tr>
      <td width="187">Name</td>
      <td width="328"><label for="textfield2"></label>
      <input type="text" name="name" id="textfield2" /></td>
    </tr>
    <tr>
      <td>cat_id</td>
      <td><label for="textfield3"></label>
      <input type="text" name="cat_id" id="textfield3"  value="<?php echo  $row['cat_id']; ?>"/></td>
    </tr>
    <tr>
      <td>owner_name</td>
      <td><label for="textfield4"></label>
      <input type="text" name="owner_name" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="textfield5"></label>
      <input type="text" name="address" id="textfield5" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="textfield6"></label>
      <input type="text" name="email" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><label for="textfield7"></label>
      <input type="text" name="phone" id="textfield7" /></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label for="textfield8"></label>
      <input type="text" name="mobile" id="textfield8" /></td>
    </tr>
    <tr>
      <td>Product</td>
      <td><label for="textfield9"></label>
      <input type="text" name="product" id="textfield9" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="textfield10"></label>
      <input type="text" name="description" id="textfield10" /></td>
    </tr>
    <tr>
      <td>B_image</td>
      <td><label for="textfield11"></label>
      <input type="file" name="b_image" id="textfield11" /></td>
    </tr>
    <tr>
      <td>Membership_sdate</td>
      <td><label for="textfield12"></label>
      <input type="date" name="membership_sdate" id="textfield12" /></td>
    </tr>
    <tr>
      <td>Membership_edate</td>
      <td><label for="textfield13"></label>
      <input type="date" name="membership_edate" id="textfield13" /></td>
    </tr>
    <tr>
      <td>Approval </td>
      <td><label for="textfield14">
        <input type="radio" name="approval" id="radio" value="Y" />
      </label>
        yes 
        <label for="textfield19">
          <input type="radio" name="approval" id="radio2" value="N" />
        </label>
        no</td>
    </tr>
    <tr>
      <td>Status</td>
      <td><label for="textfield20">
        <input type="radio" name="status" id="radio3" value="Y" />
      </label>
yes
<label for="textfield21">
  <input type="radio" name="status" id="radio4" value="N" />
</label>
no<label for="textfield15"></label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="textfield16"></label>
      <input type="text" name="password" id="textfield16" /></td>
    </tr>
    <tr>
      <td></td>
      <td><label for="textfield17"></label>
      <input type="submit" name="button" id="button" value="Save" /></td>
    </tr>
  </table>
</form>
</body>
</html>