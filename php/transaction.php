<?php
	function stringMonth($number_month) {
		switch ($number_month) {
			case 1: return "January"; break;
			case 2: return "February"; break;
			case 3: return "March"; break;
			case 4: return "April"; break;
			case 5: return "May"; break;
			case 6: return "June"; break;
			case 7: return "July"; break;
			case 8: return "August"; break;
			case 9: return "September"; break;
			case 10: return "October"; break;
			case 11: return "November"; break;
			case 12: return "December"; break;
			default: return "Error"; break;
		}
	}

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

	$local_time = getdate();
	$menit_local = $local_time['minutes'];
	$jam_local = $local_time['hours'];
	$hari_local = $local_time['mday'];
	$bulan_local = $local_time['mon'];
	$tahun_local = $local_time['year'];

	if ($general->num_rows > 0) {
	    while ($row = $general->fetch_assoc()) {

	    	$tanggal = $row['date'];
	    	$waktu = $row['time'];
	    	$date_result = explode("-",$tanggal);
	    	$time_result = explode(".",$waktu);
	    	$tahun = $date_result[0];
	    	$bulan = $date_result[1];
	    	$hari = $date_result[2];
	    	$jam =  (int) $time_result[0];
	    	$menit = (int) $time_result[1];
	    	$bulan_huruf = stringMonth($bulan);
	    	$selisih = ($menit + 60*$jam + 60*24*$hari + 60*24*30*$bulan + 60*24*30*($tahun - 1900) - $menit_local - 60*$jam_local - 60*24*$hari_local - 60*24*30*$bulan_local - 60*24*30*($tahun_local - 1900));
	        echo "<div class='film-box'><img src='".$row['film_photo']."'><h3>".$row['title']."</h3><span><a class='schedule_text'>Schedule: </a><a>".$bulan_huruf." "."$hari".", ".$tahun." - ".$row['time']."</a></span></div>"; 
	        if ($selisih <= 0) {
	        	$review = $conn->query('select * from review, film where film.id_film = review.id_film');
	        	if ($review->num_rows == 0) {
	        		echo '<button class="add_review" id="add_review">Add review</button>';
	        	}
	        	else {
	        		echo '<button class="edit_review" id="edit_review">Edit review</button>
	        		<button class="edit_review" id="delete_review">Delete review</button>';
	        	}
	        }
	    }
	} else {
    	echo "0 results";
	}
?>