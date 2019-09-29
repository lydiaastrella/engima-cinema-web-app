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

// validation
// define variables and set to empty values
$username = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['psw'];
$photos = $_POST['pp'];
$bool = 0;


$username = test_input($username);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z_]*$/",$username)) {
  echo "Only accept alphabet and underscore" . "<br>";
} else {
    $bool++;
}
  

$email = test_input($email);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format" . "<br>";
} else {
	$bool++;
}

$phone = test_input($phone);
// check if phone number is well-formed
if (!preg_match("/^[0-9]{9,12}$/",$phone)) {
  echo "invalid number format" . "<br>";
} else {
	$bool++;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// update register

if($bool == 3) {
	$sql = "
	INSERT INTO user (username, email, phone, password, photo) 
	VALUES ('$username', '$email', '$phone', '$password', '$photos')
	";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		echo '<script language="javascript">';
		echo 'alert("New account registered successfully!")';
		echo '</script>';
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("location:login.php");
} else {
	echo 'Error';
	header("location:register.php");
}
$conn->close();
?>

</body>
</html>