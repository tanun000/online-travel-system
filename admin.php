<?php
include("setting.php");
session_start();
if(isset($_SESSION['aid']))
{
	header("location:ahome.php");
}
$e=mysqli_real_escape_string($al, $_POST['aid']);
$p=mysqli_real_escape_string($al, $_POST['pass']);
if($_POST['aid']!=NULL && $_POST['pass']!=NULL)
{
	$pp=sha1($p);
	$sql=mysqli_query($al, "SELECT * FROM admin WHERE aid='$e' AND password='$pp'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['aid']=$e;
		header("location:ahome.php");
	}
	else
	{
		$info="Incorrect Admin ID or Password";
	}
}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Travel System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
<div align="center">
<span class="headingMain">Online Travel System</span>
</div>
<br />
</div>
<br />
<div align="center">
<br />
<br />
<span class="subHead">Admin Login</span><br />
<br />

<form method="post" action="">
<table border="0" align="center" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
<tr><td class="labels">Admin ID : </td><td><input type="text" size="25" name="aid" class="fields" placeholder="Enter Admin ID" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" size="25" name="pass" class="fields" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Login" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="index.php" class="link">BACK</a>
</div>
</body>

<br />
<br />

</html>