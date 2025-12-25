<?php
// Function to remove duplicates from a sorted list
function removeDuplicates($list) {
  return array_values(array_unique($list));
}

// Sample sorted list
$numbers = [1, 1, 2, 2, 3, 4, 5, 5];

echo "<h3>Original List:</h3>";
print_r($numbers);

echo "<h3>After Removing Duplicates:</h3>";
print_r(removeDuplicates($numbers));
?>
