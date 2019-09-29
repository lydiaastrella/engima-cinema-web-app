<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "engima";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = 'ekong';
$id_film = 1001;
$rating = 9;
$rev = $_POST['review'];
// update register
$sql = "
INSERT INTO review (username, id_film, rating, descripion) 
VALUES ('$username', '$id_film', '$rating', '$rev')
";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
echo '<script language="javascript">';
echo 'alert("New review registered successfully!")';
echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//header("location:register.php");

$conn->close();
?>
</body>
</html>