<?php

$videoName = $_GET['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $videoName?></title>
  <link rel="stylesheet" href="../index.css">
</head>
<body>
  <main>
    <div class="container">
      <video width="720" height="480" autoplay controls>
        <source src="<?php echo '../videos/' . $videoName ?>">
      </video>
    </div>
  </main>
</body>
</html>