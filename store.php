<?PHP
	$name = $_GET['rname'];
	$email = $_GET['remail'];
	$gender = $_GET['rgender'];
	$pass1 = $_GET['renterPass'];
	$pass2 = $_GET['rconfirmPass'];
	// Database Connection code
	$servername = "localhost";
	$username = "id12222734_dbadmin";
	$password = "lawnbowl";
	$dbname = "id12222734_lawnbowl";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	if($pass1 == $pass2)
	{
		$sql = "INSERT INTO `registration`(`name`, `email`, `gender`, `password`) VALUES('$name','$email','$gender','$pass1');";
		if(mysqli_query($con,$sql))
		{
			//echo "Registration Done Successfully...";
			header("location:dashboard.html");
		}
		else
		{
			echo "Something went Wrong...";
		}
	}else
	{
		echo "Password Not matched....";
	}
	
	mysqli_close($con);
?>