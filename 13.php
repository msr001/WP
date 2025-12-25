<?php
session_start();

function generateCaptcha() {
  $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  $captcha = '';
  for ($i = 0; $i < 6; $i++) {
    $captcha .= $chars[rand(0, strlen($chars) - 1)];
  }
  $_SESSION['captcha'] = $captcha; // store in session
  return $captcha;
}

$captchaCode = generateCaptcha();
echo "<h3>Your CAPTCHA Code:</h3>";
echo "<p style='font-size:24px; font-weight:bold; letter-spacing:3px;'>$captchaCode</p>";
?>
