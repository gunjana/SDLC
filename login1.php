<html>
<body bgcolor="pink">
<?php
include "connection.php";

if(isset($_POST['login']))
 {
  $usr = $_POST['mail'];
  $pass = $_POST['pass'];
 
$sql ="SELECT * FROM logindata WHERE username=' ".$usr." ' AND password=' ".$pass." ' ";;
$res = mysql_query($sql) or die ("Query failed..".mysql_error());
$count = mysql_num_rows($res);
if($count==1)
{
  echo "you have been logged in..";
}else
{
 echo "invalid credentials, try again..";
}
mysql_close($con);
}
?><br><br>

</body>
</html>