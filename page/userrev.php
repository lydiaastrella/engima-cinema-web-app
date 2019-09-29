<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <title></title>
  <link rel = "stylesheet" href="../css/style2.css">
</head>

<body>
<div class="navbar flex-container" >
  <div><button><span id="engi">Eng</span>ima</button></div>
  <div><input type ="text" placeholder= "Search movie" name="movie" required></div>
  <div><button id="tsc">Transactions</button></div>
  <div><button id="lo">Logout</button></div>
</div>
<br>
<div class="page">
  <div id="flex">
    <div><a href='../php/transaction.php'><img src="vectorpaint.svg" alt="back" style="width:30px;height:30px;margin:80px 0 0 80px;"></a></div>
	<div><h2 id="ttl"><b><?php include "userrev_handler.php";?></h2></div>
  </div>
  <form action = "userrev_review.php" method = "post">
	<div class="add">
	  <div><h3 id="rtg">Add Rating</h3></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
   	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	  <div><input type = 'image' src="ddd.png" alt="rating" id="star"></div>
	</div>
	<br>
    <div class="add">
      <div><h3 id="addr">Add Review</h3></div>
	  <div><input class="review" type="text" placeholder="Write a review" name="review" required></div>
    </div>
    <br>
    <div class="flex-container">
      <div><button class="cancel">Cancel</div>
	  <div><input type = "submit" name ="addreview" value = "Submit"></div>
    </div>
  </form>
</div>
</body>
</html>