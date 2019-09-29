P<!DOCTYPE html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar"> 
		<div class="navbar-box">
			<p id="Engi">Engi</p>
			<p id="ma">ma</p>
			<input type="text" placeholder="Search movie">
			<button type="searchbutton"><i class="fa fa-search"></i></button>
			<a class="menu">Logout</a>
			<a class="menu">Transactions</a>
		</div>
	</div>
	<aside class="asideleft">
	</aside>

	<aside class="asideright">
	</aside>

	<section class="maincontainer">
		<article class="hellotitle">
			<!-- Title (Hello, ....) -->
			<p class="texthello">Hello, </p>
			<p class="textusername">gery.wahyu</p>
			<p class="texthello">!</p>
		</article>

		<article class="nowplaying">
			<p class="textnowplaying">Now Playing</p>
		</article>
		
		<article class="mainlistmoviecontainer">
			<?php include('../php/home.php') ?>
		</article>
	</section>
</body>
</html>
