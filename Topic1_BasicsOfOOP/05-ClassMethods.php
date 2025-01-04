<?php

// class methods
// methods adalah fungsi yang dideklarasikan dalam class 
// fungsi yang bekerja dalam object
// non-oop (prosedural) -> "function"
// oop -> "method"

class Student
{
  var $name; // property name
  var $country = 'None'; // property country dengan nilai default None

  // method sayHello
  function sayHello()
  {
    return 'Hello, my name is ' . $this->name . ' from ' . $this->country . '.';
  }
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

// call method
echo $student1->sayHello(); // output: Hello, my name is John Doe from USA.
echo "<br>";
echo $student2->sayHello(); // output: Hello, my name is Jane Smith from None.
echo "<br>";

echo "<br>";

// get_class_methods function digunakan untuk mendapatkan semua Methods dari class
$class_methods = get_class_methods("Student"); // mendapatkan semua Methods dari class Student
echo "Method milik class Student:<br>";
echo "<pre>";
print_r($class_methods); // menampilkan semua Methods dari class Student
echo "</pre>";

echo "<br>";

// Methods_exists function digunakan untuk mengecek apakah suatu Methods ada di instance
if (method_exists($student1, 'sayHello')) { // mengecek apakah Methods name ada di instance $student1
  echo "Methods name is in student1.<br>";
} else { // jika Methods name tidak ada di instance $student1
  echo "Methods name is not in student1.<br>";
}
