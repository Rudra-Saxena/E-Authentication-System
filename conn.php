<?php
    include('conndb.php');
	$Username =($_POST['Username']);
	$Email =($_POST['Email']);
	$Password =($_POST['Password']);

	$query1="SELECT * FROM registration WHERE Email='$Email'";
	$result=mysqli_query($conn,$query1);
	if(mysqli_num_rows($result)>0)
		{
			echo "Email-ID already in use";
		}

	$query="insert into registration (Username,Email,Password) values('$Username', '$Email', '$Password')";
	$res=mysqli_query($conn,$query);
	if($res)
	{
		header('location:login.html');
	}
	else{
		echo "not inserted";
	}

?>