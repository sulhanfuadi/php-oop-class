<?php

// closure
// A closure is an anonymous function that can have access to variables from the parent scope.
// Closures are useful when you want to pass a function as an argument to another function.
// Closures are also useful when you want to create a function that can be used as a callback.

// biasa digunakan pada pemograman di mana menjalankan fungsi berorientasi matematis, tanpa mengubah status atau data

//contoh
$greet = function ($name) { // anonymous function, variabel $greet berisi function yang tidak memiliki nama
  echo "Hello $name";
};
echo $greet("John"); // Output: Hello John
echo "<br>";

// closure parameters
$var = "closure";
// anonymous function, variabel $func berisi function yang tidak memiliki nama
$func = function () use ($var) { // use keyword digunakan untuk mengakses variabel dari parent scope
  echo "{$var} defined";
  $var = "function"; // tidak bisa direassign
};
echo $func(); // Output: closure defined
echo "<br>";
echo $var; // Output: closure
echo "<br>";

// another example
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// filter even number, anonymous function, variabel $even berisi function yang tidak memiliki nama
$even = array_filter($array, function ($v) { // implementasi di dalam argument function array_filter
  return $v % 2 == 0;
});

print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
echo "<br>";
print_r($even); // Output: Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 )
echo "<br>";

$filterOdd = function ($v) { // anonymous function, variabel $filterOdd berisi function yang tidak memiliki nama
  return $v % 2 != 0;
};
$odd = array_filter($array, $filterOdd); // implementasi di luar argument function array_filter
print_r($odd); // Output: Array ( [0] => 1 [2] => 3 [4] => 5 [6] => 7 [8] => 9 )