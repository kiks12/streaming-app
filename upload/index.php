<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Video</title>
  <link rel="stylesheet" href="../index.css">
</head>
<body>
  
  <header>
    <div class="container">
      <div class="header-actions">
        <h2>Video Streaming App</h2>
        <div>
          <a href="/video-streaming">
            <button>Home</button>
          </a>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="container">
      <form method="POST" action="action.php" enctype="multipart/form-data">
        <input type="file" name="video" id="file" accept="video/mp4,video/x-m4v,video/" required/>
        <button type="submit">Upload</button>
      </form>
      <div>
        <video id="video" width="720" height="480" controls>
          <source id="videoSource" type="video/mp4">
        </video>
      </div>
    </div>
  </main>

  <script type="text/javascript" src="index.js"></script>
</body>
</html>