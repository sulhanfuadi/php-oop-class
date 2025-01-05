<?php

// static property and method

// Static property merupakan properti yang bisa dipanggil tanpa membuat object baru.

// perilaku yang dimiliki pada class pada umumnya
// tidak terikat dengan instance tertentu bisa dipanggil secara langsung tanpa instance
// menggunakan keyword static

// sintaks berbeda untuk mengakses property dan method static
// Student::$angka, Student::halo(), bukan $this->angka atau $this->halo()
// static tidak bisa menggunakan $this
// instead, menggunakan self; self::$angka, self::halo()
// bisa digabungkan dengan enskapsulasi, public static, private static, protected static

class Student
{
  public static $angka = 1; // static property, bisa diakses tanpa instance

  public static function halo() // static method, bisa diakses tanpa instance
  {
    return "Halo " . self::$angka++ . " kali.";
  }
}

// cara mengakses static property dan method
// menggunakan class name, bukan object
echo Student::$angka; // 1
echo '<br>';
echo Student::halo(); // Halo 1 kali.
echo '<br>';
echo Student::$angka; // 2
echo '<br>';
echo Student::halo(); // Halo 2 kali.
echo '<br>';
echo Student::$angka; // 3