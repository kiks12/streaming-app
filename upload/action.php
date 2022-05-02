<?php

$directory = '../videos/';
$file = $directory . basename($_FILES['video']['name']);
$uploadOk = 1;
$fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));


if (file_exists($file)) {
  echo "File Exists";
  $uploadOk = 0;
} else {
  echo "Good";
}

echo '<br>';

if ($uploadOk == 0) {
  echo "Cannot upload";
} else {
  if (move_uploaded_file($_FILES['video']['tmp_name'], $file)) {
    echo "The file " . htmlspecialchars(basename($_FILES['video']['name'])) . " has been uploaded.";
  } else {
    echo "Sorry, there was an error";
  }
}

?>