<html>
	<head>
		<title>prgm</title>
	</head>
	<body>
		<form method="post" action="">
			name <input type="text" name="name"><br />
			address line1 <input type="text" name="add1"><br />
			address line2 <input type="text" name="add2"><br />
			email <input type="text" name="e"><br />
			<input type="submit" name="sub" value="insert data"><br />
			enter name to search
			<input type="text" name="s"><br />
			<input type="submit" name="sear" value="search"><br />
		</form>
	</body>
</html>
<?php
	$conn=new mysqli('localhost','root','','webprogramming1');
	if(!$conn)
		echo "db connection error";
	 if(isset($_POST['sub']))
	{
		$n=$_POST['name'];
		$a=$_POST['add1'];
		$d=$_POST['add2'];
		$e=$_POST['e'];
		echo "name=$n <br />";
		echo "addressline1=$a <br />";
		echo "addressline2=$d <br />";
		echo "email=$e <br />";
		
		$q1="insert into field values('$n','$a','$d','$e')";
		if($conn->query($q1))
			echo "row inserted <br />";
		else
			echo "error";
	}
	if(isset($_POST['sear']))
	{
		$s=$_POST['s'];
		$q2="select * from field where Name='$s'";
		$result=$conn->query($q2);
		if($result->num_rows>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				echo "name=".$row['name']."<br />";
				echo "address line 1=".$row['addressline1']."<br />";
				echo "address line 2=".$row['addressline2']."<br />";
				echo "email=".$row['email']."<br />";
			}
		}
		else
			echo "no records";
	}
?>