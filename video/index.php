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

  <header>
    <div class="container">
      <a href='/'>
        <h2>Video Streaming App</h2>
      </a>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="video-player-parent-container">
        <div class="video-player-container">
          <video width="720" height="480" autoplay controls>
            <source src="<?php echo '../videos/' . $videoName ?>">
          </video>
          <p><?php echo $videoName ?></p>
        </div>
        <div class="video-player-actions">
          <a href="/video/delete?name=<?php echo $videoName ?>">
            <button>Delete Video</button>
          </a>
        </div>
      </div>
    </div>
  </main>
</body>
</html>