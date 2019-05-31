<!DOCTYPE html>
<html>
<head>
	<title> My Page </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<?php
			echo "WELCOME";
		?>
		<div id="logo">
			<img id="logo1" src="logo.jpg">
			</img>
		</div>
	</header>
	
	
	<div id="div1">

		<div id="div2">
			<ul id="Qnumbers">
				<li>SELECT</li>
				<li><a href='page.php?id=1'>Que 1</a></li>
				<li><a href='page.php?id=2'>Que 2</a></li>
				<li><a href='page.php?id=3'>Que 3</a></li>
				<li><a href='page.php?id=4'>Que 4</a></li>
				<li><a href='page.php?id=5'>Que 5</a></li>
			</ul>
		</div >
		<div id="div3">
			
			<?php
				echo $_GET['id'];
			?>
		
		</div>
		
	</div>
	<footer>
		<?php
			echo "END OF PAGE, Copyright@Arshdeep";
		?>
	</footer>

</body>
</html>