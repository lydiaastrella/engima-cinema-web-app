<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel = "stylesheet" href="style1.css">
	<script type="text/javascript" src="../js/cookie.js"></script>
</head>

<body>
<form id = 'emailid' action = "login_handler.php" method = "post">
  <div class= "head1">
    <p>Welcome to <strong>Engi</strong>ma!</p>
  </div>
  <div class="container">
    <label for="email">Email</label>
    <input type="text" placeholder="john@doe.com" name="email" required>

    <label for="psw">Password</label>
    <input type="password" placeholder="place here" name="psw" required>
        
	<input onClick = "setCookie('email)" type="submit" name = "create" value = "Login">
    <div>
	  <p style="text-align:center;"><b>Don't have an account? <a href="../register/register.php">Register here</a></b></p>
	</div>
  </div>
</form>

</body>
</html>