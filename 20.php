<?php
try {
  // i) Divide by zero check
  $numerator = 10;
  $denominator = 0; // Change this to 0 to trigger exception

  if ($denominator === 0) {
    throw new Exception("Division by zero error!");
  }

  $result = $numerator / $denominator;
  echo "Result of division: $result<br>";

  // ii) Date format validation
  $dateString = "2023-12-25";
  $expectedFormat = "Y-m-d";
  $date = DateTime::createFromFormat($expectedFormat, $dateString);

  if (!$date || $date->format($expectedFormat) !== $dateString) {
    throw new Exception("Invalid date format!");
  }

  echo "Date is valid: $dateString";
}
catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
?>
