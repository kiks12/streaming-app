<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
  <link rel="stylesheet" href="../index.css">
</head>
<body>

  <main>
  <?php

  $directory = '../videos/';
  $file = $directory . basename($_FILES['video']['name']);
  $uploadOk = 1;
  $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));

  if (!file_exists($directory)) {
    mkdir($directory, 777);
  }

  if (file_exists($file)) {
    $uploadOk = 0;
  ?>
    <div class="container">
      <div class="card">
        <h1>Message</h1>
        <p><?php echo 'File already exists<br>' ?></p>
        <a href="/">
          <button>Okay</button>
        </a>
      </div>
    </div>
  <?php
  }

  if ($uploadOk == 0) {
  ?>
  <?php
  } else {
  ?>
    <div class="container">
      <div class="card">
        <h1>Message</h1>
        <p>
        <?php
          if (move_uploaded_file($_FILES['video']['tmp_name'], $file)) {
            echo "The file " . htmlspecialchars(basename($_FILES['video']['name'])) . " has been uploaded.";
          } else {
            echo "Sorry, there was an error";
          }
        ?>
        </p>
        <a href="/">
          <button>Okay</button>
        </a>
      </div>
    </div>
    <?php
  }
  ?>

  </main>
</body>
</html>