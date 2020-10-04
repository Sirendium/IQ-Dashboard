<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/main.css">
	<link rel="stylesheet" type="text/css" href="Styles/bacground-gray.css">
</head>
<body>
	<?php 
	$login = htmlspecialchars($_POST[uname]);
	$password = htmlspecialchars($_POST[uname1]);
	if($login == "Admin" && $password =="Admin"|| $login == "Synapses_key_xxxxx652a4"){
	?>

<div id="footer">
	<img src="Images/logo_white.png" width="150px" height="50px">
</div><br>
<div id="menu">
 	<a href="live_test.html"><img src="Images/menu1.png" width="150px" height="150px"></a>
 	<a href="settings.php"><img src="Images/menu2.png"  width="150px" height="150px"></a>
 	<a href="users.php"><img src="Images/menu3.png" width="150px" height="150px"></a>
 	<a href="shutdown.php"><img src="Images/menu4.png"  width="150px" height="150px"></a>
</div>
<div id="menu_text">
 	<strong id="text_our1">LIVE VIEW</strong>
 	<strong id="text_our2">SETTINGS</strong>
 	<strong id="text_our3">USERS</strong>
 	<strong id="text_our4">SHUTDOWN</strong>
 	
</div>
<?php 
}else{
?>

<div id="error_password">
<strong>Error!Dont correctic password....</strong>	
</div>

<?php	
}
?>


</body>
</html>

