<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/book_ticket.css">
</head>
<body>
	<div class="navbar"> 
		<div class="navbar-box">
			<a id="logo"><strong>Engi</strong>ma</a>
			<input id="search-bar" type="text" placeholder="Search Movie">
			<a class="menu" href="transaction.php">Logout</a>
			<a class="menu" href="transaction.php">Transaction</a>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="grid-container">
				<div class="header">
					<div id="back"><a href="home.php">&lsaquo;</a></div>
					<h2>P</h2>
					<h3>P</h3>
				</div>
				<div class="left">
					<?php include('../php/book_ticket.php') ?>
					<button class="screen" disabled>Screen</button>
				</div>
				<div class="right">
					<h2>Booking Summary</h2>
					<p id="seat-not-clicked">You haven't selected any seat yet</p>
					<h3 id="judul">P</h3>
					<p id="jadwal">P</p>
					<h3 id="no-seat">P</h3>
					<br>
					<button id="buy-ticket-button">Buy Ticket</button>
				</div>
			</div>
		</div>
	</div>
	<script src="../js/book_ticket.js"></script>
</body>
</html>