<?php
// Array storing colors for each day
$colors = [
  'Sunday' => '#ffcccb',
  'Monday' => '#ffebcd',
  'Tuesday' => '#add8e6',
  'Wednesday' => '#98fb98',
  'Thursday' => '#f0e68c',
  'Friday' => '#dda0dd',
  'Saturday' => '#c0c0c0'
];

// Get current day name (e.g., Monday)
$day = date('l');

// Pick color for the current day
$bgColor = $colors[$day];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Day-based Background</title>
  <style>
    body { background-color: <?= $bgColor ?>; text-align: center; font-family: Arial; }
  </style>
</head>
<body>
  <h1>Welcome! Today is <?= $day ?> 😊</h1>
</body>
</html>
