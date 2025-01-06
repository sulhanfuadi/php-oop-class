<?php

// autoload method
// method yang akan dijalankan ketika class belum dideklarasikan
// method ini akan mencari class yang belum dideklarasikan di dalam file yang sudah di-include
// method ini akan dijalankan ketika object dibuat dari class yang belum dideklarasikan

// autoload undefined method
// __autoload()
// dipanggil di luar class (non-class method)
// digunakan untuk mencari kelas yang tidak ditemukan 
// memberi kesempatan membuat class pada suatu direktori


// merupakan method yang akan dijalankan ketika class belum dideklarasikan
function myAutoload($class)
{
  if (preg_match("/A\w+\Z/", $class)) {
    include '/classes' . $class . '.php'; // include file, classes/A.php, classes/B.php, classes/C.php
  }
}

// register autoload method
spl_autoload_register('myAutoload');

// class Cat yang belum dideklarasikan, akan di-autoload, dan mencari file Cat.php, di dalam folder classes
$cat = new Cat();
echo $cat->name;

echo '<br>';

$student = new Student();
echo $student->name;
