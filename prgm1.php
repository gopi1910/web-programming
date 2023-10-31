develop a web application for registration form with the fields name pwd email and country

<html>
	<head>
		<title>prgm</title>
	</head>
	<body>
		<form method="post" action="">
			name <input type="text" name="name"><br />
			password<input type="password" name="pwd"><br />
			email<input type="text" name="mail"><br />
			country<select name="country">
				<option> India</option><br />
				<option> US</option><br />
				<option> UK</option><br />
			</select><br />
			<input type="submit" name="sub">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["sub"]))
	{
		$n=$_POST['name'];
		$p=$_POST['pwd'];
		$e=$_POST['mail'];
		$c=$_POST['country'];
		echo "name=$n<br />";
		echo "email=$e<br />";
		echo "country=$c<br />";
		$conn=new mysqli('localhost','root','','sample1');
		if($conn)
			echo "success";
		else
			echo "connection failed";
		$q="insert into info1 values('$n','$p','$e','$c')";
		if($conn->query($q))
			echo "<br /> row inserted";
		else
			echo "error";
		$q2="select * from info1";
		$result=$conn->query($q2);
		while($row=mysqli_fetch_assoc($result))
		{
			echo "name=".$row['name']." <br />";
				echo "email=".$row['email']." <br />";
				echo "country=".$row['country'];
		}


	}
?>
		