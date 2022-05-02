<?php

// include('./connection/index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Streaming</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <header>
    <div class="container">
      <div class="header-actions">
        <h2>Video Streaming App</h2>
        <a href="/video-streaming/upload/">
          <button>Upload Video</button>
        </a>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="videos-grid">

        <?php
          $files = array_diff(scandir('videos'), array('.', '..'));
          foreach ($files as $file) {
        ?>
          <a href="video?name=<?php echo $file ?>">
            <div class="video-container">
              <video>
                <source src="<?php echo 'videos/' . $file ?>" type="video/mp4">
              </video>
              <p><?php echo str_replace(".mp4", "", $file) ?></p>
            </div>
          </a>
        <?php
          }
        ?>

      </div>
    </div>
  </main>
</body>
</html>