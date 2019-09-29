<?php

$conn = mysqli_connect("localhost", "root", "", "engima");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title FROM film";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<table class=\"mainmoviecontainer\">
        <tr>
            <td><img class=\"mainmovieposter\" src=\"not-found.jpg\"></td>
        </tr>
        <tr>
            <td><p class=\"mainmovietitle\">".$row['title']."</p></td>
        </tr>
        <tr>
            <td><div class=\"mainratingcontainer\">
                <p class=\"ratingstar\"><i class=\"fa fa-star\"></i><p>
                <p class=\"textrating\">8.75</p>
            </div></td>
        </tr>
    </table>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>