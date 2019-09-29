<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/transaction.css">
</head>
<body>
	<div class="navbar"> 
		<div class="navbar-box">
			<a id="logo"><strong>Engi</strong>ma</a>
			<input id="search-bar" type="text" placeholder="Search Movie">
			<a class="menu" href="login.php">Logout</a>
			<a class="menu" href="transaction.php">Transaction</a>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<h2>Transaction History</h2>
			<?php include('../php/transaction.php') ?>
		</div>
	</div>
</body>
</html>