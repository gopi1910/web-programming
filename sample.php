<html>
	<head>
		<title>prgm</title>
	</head>
	<body>
		<form method="post" action="">
			name <input type="text" name="n"><br />
			age <input type="text" name="a"><br />
			<input type="submit" name="sub"><br />
		</form>
	</body>
</html>
<?php
	 if(isset($_POST['sub']))
	{
		$n=$_POST['n'];
		$a=$_POST['a'];
		echo "name=$n <br />";
		echo "age=$a <br />";
		$conn=new mysqli('localhost','root','','db1');
		if(!$conn)
			echo "db connection error";
		$q1="insert into info values('$n','$a')";
		if($conn->query($q1))
			echo "row inserted <br />";
		else
			echo "error";
		$q2="select * from info";
		$result=$conn->query($q2);
		if($result->num_rows>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo "name=".$row['name'];
				echo "age=".$row['age'];
			}
		}
		else
			echo "no records";
	}
?>