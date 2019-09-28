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
/*$unameErr = $emailErr = $phoneErr = "";
$uname = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $unameErr = "Name is required";
  } else {
    $uname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z_]*$/",$uname)) {
      $unameErr = "Only accept alphabet and underscore";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "Invalid phone numbber";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]{9-12}$/",$phone)) {
      $phoneErr = "Only letters and white space allowed";
    }
  }
} */

/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} */

$username = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['psw'];
$photos = $_POST['pp'];
// update register
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
header("location:register.php");

$conn->close();
?>

</body>
</html>