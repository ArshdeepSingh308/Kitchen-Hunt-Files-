<?php
	session_start();
	
	$db=mysqli_connect("localhost:3306", "root", "", "authentication");
	
	if(isset($_POST['loginbtn']))
	{
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$password= mysqli_real_escape_string($db,$_POST['password']);
		
		$password= md5($password);
		$sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result= mysqli_query($db, $sql);
		
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['message']="You are logged in";
			$_SESSION['username']=$username;
			header("location: welcome.php");
		}
		else
		{
			$_SESSION['message']="Username/Password incorrect";
		}
	}
	mysqli_close($db);
?>
<html>
<head>
	<title>LoginPage</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>

<body class="bg">
	<div id="indexpage">
		<a href="index.php" class="indexbutton">BACK</a>
	</div>
	<?php
		if(isset($_SESSION['message']))
		{
			echo "<div style='color:red; background-color:rgba(255,255,255,0.75); font-weight:bold; border: 1px solid red; margin-left:400px; margin-right:400px; text-align:center;'>".$_SESSION['message']."</div>";
			unset($_SESSION['message']);
		}
	?>
	<form action="login.php" method="post">
	<table align="center">
		<tr>
			<th colspan="2"><h2 align="center">LOGIN</h2></th>
		</tr>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><br><input class="decorbtn" type="submit" name="loginbtn" value="LOGIN"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><br>Don't have an account?&nbsp;<a class="decorbtn" href="register.php">SignUP</a></td>
		</tr>
	</table>
	</form>
</body>
</html>