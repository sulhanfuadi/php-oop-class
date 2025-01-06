<?php

// type hint
// biasanya dimasukkan pada argumen fungsi
// untuk memastikan tipe data yang diinputkan

// php is dynamic, bebas menulis tipe data apa saja
// mengatasi bugs yang disebabkan oleh tipe data yang salah

// contoh 
function sum(int $a, int $b) // type hint pada kasus ini adalah int
{
  return $a + $b;
}

function hello(string $a, string $b) // type hint pada kasus ini adalah string
{
  return $a . $b;
}


// strict declaration
// untuk memaksa tipe data yang diinputkan sesuai dengan type hint
// perlu declare strict_types pada file php
// hanya aktif pada file yang dideklarasikan saja

// contoh
declare(strict_types=1);
function mul(int $a, int $b)
{
  return $a * $b;
}
//test
// echo mul(2.4, 3); // error, karena tipe data yang diinputkan tidak sesuai dengan type hint
echo mul(2, 3); // 6


// return types
// type hint pada return value
// untuk memastikan tipe data yang dihasilkan oleh fungsi

// apabila pada child akan di override, maka harus sama dengan parent

// saran: gunakan type declaration pada return value, pada child class

//contoh
class Table
{
  public function get() // tidak perlu menggunakan type hint pada return value parent class
  {
    return 'Table';
  }
}

class MyTable extends Table
{
  public function get(): string // gunakan type hint pada return value child class
  {
    return 'MyTable';
  }
}

echo (new MyTable())->get(); // MyTable , bisa didapatkan karena type hint pada return value tidak bertabrakan dengan parent