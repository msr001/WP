<?php
// Function to validate an email address
function validateEmail($email) {
  // Regular expression for valid email format
  $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';
  return preg_match($pattern, $email);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  
  if (validateEmail($email)) {
    echo "<p style='color:green;'>✅ Email is valid!</p>";
  } else {
    echo "<p style='color:red;'>❌ Invalid email address!</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Validation</title>
</head>
<body>
  <h2>Email Validation Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="email">Enter Email:</label>
    <input type="text" id="email" name="email" required>
    <br><br>
    <input type="submit" value="Validate">
  </form>
</body>
</html>
