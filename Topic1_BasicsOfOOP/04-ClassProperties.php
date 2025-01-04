<?php

// class properties
// properties adalah variabel yang dideklarasikan dalam class
// bisa diisi nilai secara langsung
// didefinisikan dengan kata kunci var, dan dilanjutkan dengan nama variabelnya

class Student
{
  var $name; // property name
  var $country = 'None'; // property country dengan nilai default None
}

// instances
$student1 = new Student(); // membuat instance objek dari class Student yang disimpan dalam variabel $student1
$student2 = new Student(); // membuat instance objek dari class Student yang disimpan dalam variabel $student

// Modifikasi property
$student1->name = 'John Doe'; // mengisi property name dari instance $student1 dengan nilai 'John Doe'
$student2->name = 'Jane Smith'; // mengisi property name dari instance $student2 dengan nilai 'Jane Smith'

echo $student1->name; // output: John Doe
echo "<br>";
echo $student2->name; // output: Jane Smith
echo "<br>";

echo "<br>";

echo $student1->country; // output: None
echo "<br>";
$student1->country = 'USA'; // mengisi property country dari instance $student1 dengan nilai 'USA'
echo $student1->country; // output: USA
echo "<br>";

echo "<br>";

// get_class_vars function digunakan untuk mendapatkan semua property dari class
$class_vars = get_class_vars("Student"); // mendapatkan semua property dari class Student
echo "Properti milik class Student:<br>";
echo "<pre>";
print_r($class_vars); // menampilkan semua property dari class Student
echo "</pre>";

echo "<br>";

// property_exists function digunakan untuk mengecek apakah suatu property ada di instance
if (property_exists($student1, "name")) { // mengecek apakah property name ada di instance $student1
  echo "Property name is in student1.<br>";
} else { // jika property name tidak ada di instance $student1
  echo "Property name is not in student1.<br>";
}
