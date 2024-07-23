<?php
function check_login($conn)
{
	if(isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//redirect to login
	header("Location: Login.php");
	die;

}
function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function check_login2($conn)
{
	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$query = "select * from admin where id = '$id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

		   $admin_data = mysqli_fetch_assoc($result);
			return $admin_data;
		}
	}
}
?>