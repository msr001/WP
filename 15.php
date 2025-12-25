<!DOCTYPE html>
<html>
<head>
  <title>Read & Write File</title>
</head>
<body>
  <h2>Write to File</h2>
  <form method="post">
    <textarea name="content" rows="5" cols="40" placeholder="Enter text here"></textarea><br><br>
    <input type="submit" name="write" value="Write to File">
  </form>

  <hr>
  <h2>Read from File</h2>

  <?php
  $file = "data.txt";

  // Write to file
  if (isset($_POST['write'])) {
    $text = $_POST['content'];
    file_put_contents($file, $text . PHP_EOL, FILE_APPEND);
    echo "<p><b>Text written to file successfully!</b></p>";
  }

  // Read from file
  if (file_exists($file)) {
    echo "<pre>" . htmlspecialchars(file_get_contents($file)) . "</pre>";
  } else {
    echo "File not found!";
  }
  ?>
</body>
</html>
