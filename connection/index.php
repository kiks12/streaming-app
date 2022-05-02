<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "video_streaming";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error($conn)) {
  die ("Error: " . mysqli_connect_error($conn));
} else {
  echo "Database Connection established successfully";
}

$sql = "SELECT * FROM videos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
  }
}

?>

