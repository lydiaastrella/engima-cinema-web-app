<?php
	$seat = 1;
	for ($i = 1; $i <= 3; $i++) {
		echo '<div class="flex-container">';
		for ($j = 1; $j <= 10; $j++) {
			echo '<div class="empty-seat" id="seat-'.$seat.'" onclick="seatClick('.$seat.')">'.$seat.'</div>';
			$seat++;
		}
		echo '</div>';
	}
?>