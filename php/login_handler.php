<html>
<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname ='engima';

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['psw'];

$data = mysqli_query($conn,"select email, password from user where email='$email' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	header("location:home.php");
}else{
	header("location:login.php");
}

?>
</body>
</html>