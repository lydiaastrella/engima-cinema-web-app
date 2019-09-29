<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel = "stylesheet" href="../css/style1.css">
</head>

<body>
<form action = "../php/register_handler.php" method = "post">
  <div class= "head2">
    <p>Welcome to <strong>Engi</strong>ma!</p>
  </div>
  <div class="container">
    <label for="uname">Username</label>
    <input type="text" placeholder="joe.johndoe" name="uname" required>

    <label for="email">Email Address</label>
    <input type="text" placeholder="joe@email.com" name="email" required>

    <label for="phone">Phone Number</label>
    <input type="text" placeholder="+62813XXXXXXXX" name="phone" required>

    <label for="psw">Password</label>
    <input type="password" placeholder="make as strong as possible" name="psw" required>

    <label for="psw">Password</label>
    <input type="password" placeholder="same as above" name="psw" required>

    <label for="pp">Profile Picture</label>

	<div class="flex-container">
      <div><input type="text" placeholder="place here" name="pp" required></div>
      <div><button style="background-color:darkgray" type="submit">Browse</button></div>
    </div>
	<input type="submit" name = "create" value = "Submit">
    <div>
	  <p style="text-align:center;"><b>Already have account? <a href="../login/login.php">Login here</a></b></p>
	</div>
  </div>
</form>

</body>
</html>