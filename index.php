<?php

// include('./connection/index.php');
if (isset($_GET['search'])) {
  $search = $_GET['search'];
} else {
  $search = '';
}

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
        <a href="/video-streaming">
          <h2>Video Streaming App</h2>
        </a>

        <div>
          <form class="search-container">
            <input class="form-control" type="text" name="search" placeholder="Search..."/>
            <button type='submit'>Search</button>
          </form>
        </div>

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
          if ($search) {
            $files = array_filter($files, function($file) use ($search) {
              return strpos(strtolower($file), strtolower($search)) !== false;
            });
          }
          foreach ($files as $file) {
        ?>
          <a href="video?name=<?php echo $file ?>">
            <div class="video-container">
              <div class="thumbnail">
                <video>
                  <source src="<?php echo 'videos/' . $file ?>" type="video/mp4">
                </video>
              </div>
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