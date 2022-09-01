
<?php
include("setting.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$a=mysqli_query($al, "SELECT * FROM customers WHERE email='$email'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Travel System</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header">
  <div align="center"> <span class="headingMain">Online Travel System</span> </div>
</div>
<br />
<br />
<div align="center"> <span class="subHead">Welcome <?php echo $name;?></span> <br />
  <br />
  <table border="0">
<tr><td><a href="book.php" class="cmd">♦ Book Package</a></td><td><a href="changePassword.php" class="cmd">♦ Change Password</a></td></tr>
<tr><td colspan="2" align="center"><a href="logout.php" class="cmd">♦ Logout</a>
</table>
</div>
</body>

</html>