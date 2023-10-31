<html>
	<head>
		<title>prgm</title>
	</head>
	<body>
		<form method="post" action="">
			name <input type="text" name="name"><br />
			mobile no <input type="text" name="mnum"><br />
			gender <input type="radio" name="gen" value="m">male<br /> 
			 <input type="radio" name="gen" value="f">female<br />
			 <input type="radio" name="gen" value="o">other<br />
			address <textarea rows="5" cols="10" name="addr"></textarea><br />
			state <select name="state">
				<option> karnataka</option><br />
				<option> tn</option><br />
				<option> ap</option><br />
			</select><br />
			dob <input type="date" name="dob"><br />
			<input type="submit" name="sub">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["sub"]))
	{
		$n=$_POST['name'];
		$m=$_POST['mnum'];
		$g=$_POST['gen'];
		$a=$_POST['addr'];
		$s=$_POST['state'];
		$d=$_POST['dob'];
		echo "name=$n<br />";
		echo "mobile=$m<br />";
		echo "gender=$g<br />";
		echo "address=$a<br /> $s<br />";
		echo "dob=$d<br />";
		$conn=new mysqli('localhost','root','','sample');
		if($conn)
			echo "success";
		else
			echo "connection failed";
		$q="insert into info values('$n','$m','$g','$a','$s','$d')";
		if($conn->query($q))
			echo "<br /> row inserted";
		else
			echo "error";
	}
?>
	
		