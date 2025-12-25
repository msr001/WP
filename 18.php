<?php
// Set a cookie
$cookieName = "UserID";
$cookieValue = "A1B234C";
$expiry = time() + (24 * 60 * 60); // 1 day

setcookie($cookieName, $cookieValue, $expiry, "/"); // must be called before HTML

echo "<h3>Cookie Example</h3>";

// Check if cookie is set
if (isset($_COOKIE[$cookieName])) {
  echo "✅ Cookie '$cookieName' is set!<br>";
  echo "Value: " . $_COOKIE[$cookieName];
} else {
  echo "❌ Cookie '$cookieName' is not set yet. Please refresh the page.";
}
?>
