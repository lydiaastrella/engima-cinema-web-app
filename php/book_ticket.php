<?php

	//$login_username = $_COOKIE[$username];
	$login_username = 'ekasunandika@gmail.com';
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

	$seat = 1; 
	for ($i = 1; $i <= 3; $i++) {
		echo '<div class="flex-container">';
		for ($j = 1; $j <= 10; $j++) {
			$check_seat = $conn->query('select * from film, schedule_seat, film_schedule where film.id_film = film_schedule.id_film AND film_schedule.id_schedule = schedule_seat.id_schedule AND no_seat = '.$seat);
			if ($check_seat->num_rows > 0) {
				while ($row = $check_seat->fetch_assoc()) {
					if ($row['status'] == 'empty') {
						echo '<div class="empty-seat" id="seat-'.$seat.'" onclick="seatClick('.$seat.')">'.$seat.'</div>';
					} else {
						echo '<div class="full-seat" id="seat-'.$seat.'"">'.$seat.'</div>';
					}
				}
			} else {
				echo '<div class="empty-seat" id="seat-'.$seat.'" onclick="seatClick('.$seat.')">'.$seat.'</div>';
			}
			$seat++;
		}
		echo '</div>';
	}
?>