<?php
	session_start();
	
	$db=mysqli_connect("localhost:3306", "root", "", "authentication");
	
	if(isset($_POST['registerbtn']))
	{
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$email= mysqli_real_escape_string($db,$_POST['email']);
		$password= mysqli_real_escape_string($db,$_POST['password']);
		$password2= mysqli_real_escape_string($db,$_POST['password2']);
		
		if($password == $password2)
		{
			$password = md5($password);
			$sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message']="You are now logged in";
			$_SESSION['username']=$username;
			header("location: welcome.php");
		}
		else
		{
			$_SESSION['message']="Two passwords do not match";
		}
	}
	mysqli_close($db);
?>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styleregister.css">
</head>
<body class="bg">
	<div>
		<a href="index.php" class="indexbutton">BACK</a>
	</div>
	<?php
		if(isset($_SESSION['message']))
		{
			echo "<div style='color:red; background-color:rgba(255,255,255,0.75); font-weight:bold; border: 1px solid red; margin-left:400px; margin-right:400px; text-align:center;'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}
	?>
	<form action="register.php" method="post">
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">REGISTER</h2></th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" required="required" name="username"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" required="required" name="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" required="required" name="password"></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" required="required" name="password2"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><br><input class="decorbtn" type="submit" name="registerbtn" value="REGISTER"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><br>Have an account?&nbsp;<a class="decorbtn" href="login.php">Login</a></td>
		</tr>
	</table>
	</form>
</body>
</html>