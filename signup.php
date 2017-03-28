<?php
include "connection.php";

if(isset($_POST['signup']))
{
 $usr = $_POST['uname'];
 $email = $_POST['mail'];
 $pwd = $_POST['pass'];

 $ag = $_POST['aage'];
 $gen = $_POST['gendr'];

 $query = "INSERT INTO logindata(username,email,password,age,gender)VALUES(' ".$usr." ',' ".$email." ','".$pwd." ',' ".$ag." ',' ".$gen." ')";
 $result = mysql_query($query) or die (" query failed..".mysql_error());

if($result)
 {
  echo "records inserted";
} else
{
 echo "please try again..";
}
mysql_close();
}
?>

