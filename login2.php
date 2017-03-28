<?php
include("connection.php");
if(isset($_POST['login']))
{
	$id=$_POST["mail"];
	$pass=$_POST["pass"];
	$des=$_POST["uname"];

if($des=="ADMIN")
	{
	
		$query="SELECT * FROM logindata where email='".$id."'AND password='".$pass."'";
		$res=mysql_query($query) or die("Query failed...".mysql_error());
		if(mysql_num_rows($res)==1)
		{while($row=mysql_fetch_array($res))
		
			{echo "Welcome ".$row['username'];
			header('location:admin.php');
			session_start();
			$_SESSION['logged_in']=$id;
			}
		}
		
		
	}
	
	else if($des=="MEMBER")
	{
	
		$query="SELECT * FROM logindata where email='".$id."'AND password='".$pass."'";
		$res=mysql_query($query) or die("Query failed...".mysql_error());
		if(mysql_num_rows($res)==1)
		{while($row=mysql_fetch_array($res))
		
			{echo "Welcome ".$row['username'];
			header('location:member.php');
			session_start();
			$_SESSION['logged_in']=$id;
			}
		}
		
		
	}
	
	else if($des=="LEADER")
	{
	
		$query="SELECT * FROM logindata where email='".$id."'AND password='".$pass."'";
		$res=mysql_query($query) or die("Query failed...".mysql_error());
		if(mysql_num_rows($res)==1)
		{while($row=mysql_fetch_array($res))
		
			{echo "Welcome ".$row['username'];
			header('location:leader.php');
			session_start();
			$_SESSION['logged_in']=$id;
			}
		}
		
		
	}
	else
		echo "Invalid username or password input.Please try again...";
}
?>