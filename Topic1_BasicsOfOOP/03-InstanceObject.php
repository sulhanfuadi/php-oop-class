<?php

// instance dalam oop
// instance adalah objek yang dibuat dari class -> suatu perumpamaan/kejadian dari class

class Student {} // mendeklarasikan class Student

// instances
$student1 = new Student(); // membuat instance objek dari class Student yang disimpan dalam variabel $student1
$student2 = new Student(); // membuat instance objek dari class Student yang disimpan dalam variabel $student2

$classes = get_declared_classes(); // mendapatkan semua class yang sudah dideklarasikan di PHP

echo "Classes: " . implode(', ', $classes) . "<br>";
# implode adalah fungsi untuk menggabungkan array menjadi string, dengan separator yang ditentukan, dalam hal ini adalah ', '
# kode di atas akan menampilkan semua class yang sudah dideklarasikan di PHP


$classNames = ['Product', 'Student', 'student']; // array yang berisi nama class yang akan dicek

foreach ($classNames as $className) {
  if (class_exists($className)) { // mengecek apakah class yang diinputkan sudah dideklarasikan atau belum
    echo "{$className} class has been defined.<br>";
  } else { // jika class belum dideklarasikan
    echo "{$className} class has not been defined.<br>";
  }
}
// output: Product class has not been defined. Student class has been defined. student class has not been defined.