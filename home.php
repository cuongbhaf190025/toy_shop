<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<!-- menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown">
							Song
						</a>
						<div class="dropdown-content">
							<a class="dropdown-item" href="#">V-POP</a>
							<a class="dropdown-item" href="#">K-POP</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">US-UK</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown">
							Playlist
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown">
							Video
						</a>
				</ul>
				<form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
					<input class="form-control mr-sm-2" type="search" placeholder="Search for song" style="width: 400px" name="Search">
					<input type="submit"name="search" value="Search" />
				</form>	
			</div>
		</div>
		<div class="col-xs-6 col-md-2"> 
   <button><a href="http://localhost:8080/WebsiteLayout/login.php">Login</a>
   </button> 
		<button><a href="http://localhost:8080/WebsiteLayout/login.php">Log out</a>

	</nav>
	<!-- end menu -->
	<!-- slide -->
	<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="img/old.jpg" alt="First slide"style="height: 500px">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/lovely1.jpg" alt="Second slide"style="height: 500px">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="img/lactroi.jpg" alt="Third slide"style="height: 500px">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end slide -->
	<!-- list product -->
	<div class="container">
		<div class="row mt-5">
			<h2 class="list-product-title">List product</h2>
			<div class="list-product-subtitle">
				<p></p>
			</div>
						<?php
				$conn = mysqli_connect('localhost','root','','cuong');
				$get_them = "SELECT*FROM song ORDER BY RAND() LIMIT 0,12";
				$run_them = mysqli_query($conn,$get_them);
				while ($row=mysqli_fetch_array($run_them)) {
					$song_id = $row['song_id'];
					$song_img = $row['song_img'];
					$song_name = $row['song_name'];
					$song_mp3 = $row['song_mp3'];
					$song_price = $row['song_price'];
					?>
					<div class="product-group">
						<div class="col-md-3 col-sm-6 col-12">
							<img src="img/<?php echo $song_img?>" width="247px" height="247px"/>
							<p style="height: 80px; text-align: left;"><?php echo$song_name ?></p>

							<h3><?php echo $song_price?></h3>				
							<a href="detail.php?id=<?php echo $song_id?>"><button>View</button></a>
							</div>
							</div>
							<?php
							}?>
				</div>
			</div>
		</div>
	</div>		
</div>
</div>
</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>