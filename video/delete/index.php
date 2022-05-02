<?php

$name = $_GET['name'];
$directory = '../../videos/';
$file = $directory . $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="../../index.css">
</head>
<body>

    <?php

    if (file_exists($file)) {
        if(unlink($file)) {
    ?>
        <div class="container">
            <div class="card">
                <h1>Message</h1>
                <p><?php echo $name ?> deleted successfully!</p>
                <a href='/video-streaming'>
                    <button>Okay</button>
                </a>
            </div>
        </div>
    <?php
        } else {
            echo "Cannot delete file";
        };
    } else {
        echo "File does not exist";
    }


?>

</body>
</html>