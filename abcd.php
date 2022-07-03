<?php
	session_start();

	if(isset($_SESSION['Email']))
	{
			$Email=$_SESSION['Email']; 
	}
	else{
		$link='login.html';
		echo "you are accessing user page without logging in Please <a href='".$link."'>login here </a>";
		exit();
	}
?>
<html>
<head>
	<title>ABC</title>
	<head>
 <title>ABC</title>
 <style type="text/css"> body{
 font-family: 'Poppins', serif;
 background:linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(p.jpg) center/cover no-repeat fixed;
}
h1{
	color:cyan;
}
</style>
</head>
</head>
<body>
	<h1>Welcome <?php echo $Email; ?></h1>
	<a href="logout.php"><button>Log_out</button></a>
</body>
</html>