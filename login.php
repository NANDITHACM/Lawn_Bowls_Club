<?PHP
	$name = $_POST['rname'];
	$pass1 = $_POST['renterPass'];

	// Database Connection code
	$servername = "localhost";
	$username = "id8302626_tarique";
	$password = "tarique123";
	$dbname = "id8302626_reg";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}

$sql = "SELECT * FROM registration WHERE name = '$name' and password = '$pass1'";
		if(mysqli_query($con,$sql))
		{
			header("location:dashboard.html");
		}
		else
		{
			echo "Something went Wrong...";
		}

		echo "Password Not matched....";

	
	mysqli_close($con);
?>