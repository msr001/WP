<?php
// Sample user data
$users = [
  ['id'=>1, 'name'=>'Anjali', 'age'=>20, 'email'=>'anjali@example.com'],
  ['id'=>2, 'name'=>'Neha',   'age'=>19, 'email'=>'neha@example.com'],
  ['id'=>3, 'name'=>'Madhu',  'age'=>22, 'email'=>'madhu@example.com'],
  ['id'=>4, 'name'=>'Vinay',  'age'=>21, 'email'=>'vinay@example.com']
];

// Function to search data
function searchData($data, $criteria, $value) {
  $results = [];
  foreach ($data as $user) {
    if ($user[$criteria] == $value) {
      $results[] = $user;
    }
  }
  return $results;
}

// Search by chosen field and value
$criteria = 'age';
$value = 20;
$found = searchData($users, $criteria, $value);

// Display results
echo "<h3>Search Results for $criteria = $value</h3>";
if ($found) {
  foreach ($found as $u) {
    echo "ID: {$u['id']}, Name: {$u['name']}, Age: {$u['age']}, Email: {$u['email']}<br>";
  }
} else {
  echo "No results found.";
}
?>
