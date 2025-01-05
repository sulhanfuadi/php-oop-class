<?php

// construct method
// salah satu magic method
// method yang akan dijalankan ketika sebuah object dibuat

class Student
{
  public $name;
  public $age;
  public static $instanceCount = 0; // static property

  // construct method, akan dijalankan ketika object dibuat
  public function __construct()
  {
    self::$instanceCount++; // menambahkan jumlah instance
  }
}

// dibuat object dari class Student, construct method akan dijalankan, sehingga property $instanceCount akan bertambah
// object pertama, $instanceCount = 1
class ElementaryStudent extends Student
{
  public $totalScore = 100;
}

// object kedua, $instanceCount = 2
class JuniorHighStudent extends Student
{
  public $totalScore = 200;
}

// object ketiga, $instanceCount = 3
class JuniorLowStudent extends Student
{
  public $totalScore = 300;
}


$elementaryStudent = new ElementaryStudent;
echo "Elementary Student: $elementaryStudent->totalScore <br/>";
// Elementary Student: 100

$JuniorHighStudent = new JuniorHighStudent;
echo "Junior High Student: $JuniorHighStudent->totalScore <br/>";
// Junior High Student: 200

$JuniorLowStudent = new JuniorLowStudent;
echo "Junior Low Student: $JuniorLowStudent->totalScore <br/>";
// Junior Low Student: 300

echo "Total instance: " . Student::$instanceCount;
echo "<br/>";
// Total instance: 3
// construct method akan dijalankan ketika object dibuat,
// sehingga property $instanceCount akan bertambah setiap kali object dibuat


// construct argument
// construct method bisa menerima argument
// argument yang diterima construct method akan digunakan untuk mengisi property object
class Student2
{
  public static $name;
  public static $age;

  // construct method dengan argument, akan dijalankan ketika object dibuat, dan menerima argument
  public function __construct($name, $age)
  {
    self::$name = $name;
    self::$age = $age;
  }
}

// object pertama, $name = "John", $age = 10
$student2 = new Student2("John", 20); // menerima argument, "John" dan 20, untuk mengisi property $name dan $age
echo student2::$name; // John
echo "<br/>";
echo student2::$age; // 20
echo "<br/>";


// menggunakan argument array pada construct method
class Student3
{
  public static $name;
  public static $age;

  // construct method dengan argument array, akan dijalankan ketika object dibuat, dan menerima argument array
  public function __construct($data = []) // argument array, $data, dengan nilai default array kosong
  {
    self::$name = $data['name'] ?? 'Anonymous'; // menggunakan argument array untuk mengisi property $name
    // 'Anonymous' adalah nilai default jika key 'name' tidak ada pada array $data
    self::$age = $data['age'] ?? 0;
  }
}

// object pertama, $name = "Jane", $age = 25
$student3 = new Student3(['name' => 'Jane', 'age' => 25]); // menerima argument array, ['name' => 'Jane', 'age' => 25], untuk mengisi property $name dan $age
echo student3::$name; // Jane
echo "<br/>";
echo student3::$age; // 25
echo "<br/>";
