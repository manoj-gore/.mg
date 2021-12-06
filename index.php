<?php session_start();
error_reporting(1);
 ?>
<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My mail server</title>
<script language="JavaScript1.1">
	
		</script>
		<style>
			a{font-size:16px;margin-left:3%;}
			table,td{padding:5px;broder-radius:5px}
		</style>
</head>

<body>
<table width="975" border="1" align="center">
  <tr>
    <td height="135" colspan="2">
	<img src="food1.jpg" name="slide" border="0" width="100%" height="200">
	<script>
</script>	</td>
  </tr>
  <tr>
    <td height="38" colspan="2">
		<a href="index.php">HOME</a>
		<a href="index.php?chk=about">ABOUT US</a>
		<a href="index.php?chk=login">LOGIN</a>
		<a href="index.php?chk=registraion">NEW USER?</a>
		<a href="index.php?chk=5"></a>
		<a href="index.php?chk=contact">CONTACTCT US</a>	</td>
  </tr>
  <tr>
    <td height="613" valign="top" style="padding:10px">
	
	<?php
	@$chk=$_REQUEST['chk'];
	if($chk=="")
	{
	?>
	<h3 align="center">Welcome to Our mail server</h3>
	<pre>
	
About our mail server - email from Google

Video chat with a friend, or give someone a ring all from your inbox. 
See more reasons to switch or check out our newest features. 
	
	
	
	</pre>
	<?php
	}
	if($chk=="registraion")
	{
	include_once('regis.php');
	}
	if($chk=="login")
	{
	include_once('login.php');
	}
	if($chk==5)
	{
	include_once('welcome.php');
	}
	if($chk=="about")
	{
	include_once('aboutus.php');
	}
	if($chk=="contact")
	{
	include_once('contactus.php');
	}
	if($chk=="7")
	{
	include_once('latestupdDisp.php');
	}
	if($chk=="about")
	{
	include_once('about.php');
	}
	
	
	?>	</td>
  </tr>
  <tr>
    <td height="47" colspan="2">
	<h5 align="right">Developed by Manoj Gore & Subhash Sangle</h5>	</td>
  </tr>
</table>
</body>
</html>
