<?php
// Function to check if a number is prime
function isPrime($n) {
  if ($n < 2) return false;
  for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) return false;
  }
  return true;
}

// Generate first N prime numbers
function primeNumbers($limit) {
  $primes = [];
  $num = 2;
  while (count($primes) < $limit) {
    if (isPrime($num)) $primes[] = $num;
    $num++;
  }
  return $primes;
}

// Generate first N Fibonacci numbers
function fibonacciSeries($n) {
  $fib = [0, 1];
  for ($i = 2; $i < $n; $i++)
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
  return $fib;
}

// Number of terms
$limit = 10;

echo "<h3>First $limit Prime Numbers:</h3>";
print_r(primeNumbers($limit));

echo "<h3>First $limit Fibonacci Numbers:</h3>";
print_r(fibonacciSeries($limit));
?>
