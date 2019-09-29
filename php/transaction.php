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

	$general = $conn->query(
	"select * from film, film_schedule, transaction, schedule_time where 
	film.id_film = film_schedule.id_film AND film_schedule.id_schedule = transaction.id_schedule AND film_schedule.id_schedule = schedule_time.id_schedule");

	if ($general->num_rows > 0) {
	    while ($row = $general->fetch_assoc()) {
	        echo "<div class='film-box'><img src='".$row['film_photo']."'>".$row['title']."<span><p class='schedule_text'>Schedule: </a><a>".$row['date']." ".$row['time']."</a></span></div>";
	    }
	} else {
    	echo "0 results";
	}

	/*$tanggal = $_POST['tanggal'];
	$waktu = $_POST['waktu'];
	$url_foto = $_POST['url_foto'];*/

	//$data = mysqli_query($conn, "select email, password from user where email='$email' and password='$password'");

	//$cek = mysqli_num_rows($data);

	/*if($cek > 0){
		header("location:home.php");
	}else{
		header("location:login.php");
	}*/
		echo "<p>Hello world!<p>";
?>