<html>
<head>
	<title>Hunt Begins!</title>
	<link rel="stylesheet" type="text/css" href="stylebook.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="bg">
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
			<a href="index.php"><img style="height:48px; width:60px;" src="kh.jpg"></img></a>
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
		<a style="text-decoration:none; color:white;" href="index.php"> HomePage &nbsp;&nbsp;</a>
	</div>
	<div class="container">
		<h2 class="heading">Food Across the City!</h2>  
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<center><img src="food1.jpg" alt="Salad" style="width:50%; height:auto"></center>
				</div>

				<div class="item">
					<center><img src="food2.jpg" alt="MainCourse" style="width:50%; height:auto"></center>
				</div>
		
				 <div class="item">
					<center><img src="food3.jpg" alt="Dessert" style="width:50%; height:auto"></center>
				 </div>
				 
				 <div class="item">
					<center><img src="food4.jpg" alt="Cookies" style="width:50%; height:auto"></center>
				 </div>
				 
				 <div class="item">
					<center><img src="food5.jpg" alt="Chinese" style="width:50%; height:auto"></center>
				 </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<div class="container">
		<br><h2 class="heading">Look for your desired place: </h2>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Restaurants</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">Meals are generally served and eaten on the premises, but many 
					restaurants also offer take-out and food delivery services, and some offer only take-out and delivery. 
					Restaurants vary greatly in appearance and offerings, including a wide variety of cuisines
					</div>
					<div>
						<a href="book.php?id=1"><center>Click Here</center></a>
						<p style="font-size:10px;">*The options will be visible at the end of page, (after clicking the link)</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Cafes</a>
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">A coffeehouse, coffee shop or café (sometimes spelt cafe) 
					is an establishment which primarily serves hot coffee, related coffee beverages 
					(café latte, cappuccino, espresso), tea, and other hot beverages. Some coffeehouses 
					also serve cold beverages such as iced coffee and iced tea. 
					Many cafés also serve some type of food.
					</div>
					<div>
						<a href="book.php?id=2"><center>Click Here</center></a>
						<p style="font-size:10px;">*The options will be visible at the end of page, (after clicking the link)</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Clubs</a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">A nightclub (or club) is an entertainment venue and bar 
					that usually operates late into the night. A nightclub is generally distinguished from 
					regular bars, pubs or taverns by the inclusion of a stage for live music, one or more 
					dance floor areas and a DJ booth, where a DJ plays recorded music. 
					</div>
					<div>
						<a href="book.php?id=3"><center>Click Here</center></a>
						<p style="font-size:10px;">*The options will be visible at the end of page, (after clicking the link)</p>
					</div>
				</div>
			</div>
		</div> 
	</div>

	<div id="options" style="border: 3px solid white; 
	font-weight:bold; 
	margin-left:100px; 
	margin-right:100px; 
	border-radius:5px;
	background-color: rgba(255,255,255,0.25);
	margin-bottom:10px;">
		<?php
			if(isset($_GET['id']))
            {
                $ch= $_GET['id'];
                switch($ch)
                {
                    case 1: include('restaurants.php');
                            break;
                    case 2: include('cafe.php');
                            break;
                    case 3: include('club.php');
                            break;
                }
            }
		?>
	</div>
</body>
</html>