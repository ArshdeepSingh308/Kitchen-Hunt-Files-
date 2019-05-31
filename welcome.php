<?php
	SESSION_START();
	if(isset($_SESSION['username']))
	{
		$uname=$_SESSION['username'];
	}
	else
	{
		header("location:login.php");
	}
?>
<html>
<head>
	<title>BookingForm</title>
</head>
<body style="background-image: url('welcomeimg.jpg');
			height: 100%; 
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;">
			
<div style="height: 50px; 
	border: 1px solid black; 
	border-width: 2px; 
	text-align: right;
	line-height: 50px;
	font-family: Georgia;
	font-size: 20px;
	border-color: white;
	border-radius: 5px;
	border-width: 2px;
	margin-top:10px;
	margin-left:5px;
	margin-right:5px;">
		<div style="float: left;
		height: 50px;">
			<img style="height:50px; width:60px;" src="kh.jpg"></img>
		</div>
		<div style="float:left;
		height:50px;
		line-height:50px;
		font-family:Courier New;
		font-size:30px;
		color:white;
		font-style:normal;
		font-weight:bold;">
			&nbsp;Kitchen Hunt
		</div>
		<?php echo "Welcome ".$_SESSION['username']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
		<a style="text-decoration:none; color:white;" href="logout.php"> LogOut &nbsp;&nbsp;</a>
	</div>
	<div>
		<form action="createpdf.php" method="post">
		<table align="center" style="background-color: rgba(255,255,255,0.75);
			border-color: solid white;
			margin-top:5%;
			border-top: 1px solid;
			padding-bottom: 30px;
			border-bottom: 1px solid;
			font-size:25px;">
			<tr>
				<th colspan="2"><h2 align="center">Booking Details:</h2></th>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" required="required" name="name"></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" required="required" name="phonenumber"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" required="required" name="email"></td>
			</tr>
			<tr>
				<td>Number of Seats:</td>
				<td><input type="text" required="required" name="seats"></td>
			</tr>
			<tr>
				<td>Booking Date:</td>
				<td><input type="date" required="required" name="date"></td>
			</tr>
			<tr>
				<td>Choose Place:</td>
				<td>
					<?php
						{
							$arr= array ('--Select--','Karma Kismet','Indian Accent','Local','Big Chill','BlackJack',
							'The Hook','Imperfecto','Pirates of Grill','Hauz Khaz Social',
							'Glenz Cafe','Cafe Lota','Kitchen Cafe','Starbucks','Delhi Baking Compnay',
							'Perch cafe','Cafe Pluck','Cafe Delhi','Costa Cafe',
							'Kitty Su','Privee the Ecstasy','Lithiyum','The Blue Bar','Tamasha','Tourist',
							'Bombay Bal','Junkyard Cafe','Summer House Cafe');
							echo "<select name='arr'>";
							for($i=0;$i<count($arr);$i++)
							{
								echo "<option value='".$arr[$i]."'>".$arr[$i]."</option>";
							}
							echo "</select>";
						}
					?>
				</td>
			</tr>
			<tr>
				<td align="right" colspan="2"><br><input style="background-color: white; border-radius: 4px; color: green;" 
				type="submit" name="bookbtn" value="Book"></td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>
