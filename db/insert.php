<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "Dbsai");


		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}


		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];


		$sql = "INSERT INTO data VALUES ('$first_name',
			'$last_name','$email')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully</h3>";

			echo nl2br("\n$first_name\n $last_name\n  $email");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}


		mysqli_close($conn);
		?>
	</center>
</body>

</html>
