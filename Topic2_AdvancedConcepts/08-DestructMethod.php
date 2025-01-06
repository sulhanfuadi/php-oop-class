<?php

// destruct method
// salah satu magic method
// method yang akan dijalankan ketika sebuah object dihapus
// menggunakan method unset()
// script berakhir, object akan dihapus, dan destruct method akan dijalankan

class Product
{
  public static $instanceCount = 0; // static property

  // construct method, akan dijalankan ketika object dibuat
  public function __construct()
  {
    self::$instanceCount++; // menambahkan jumlah instance
  }

  // destruct method, akan dijalankan ketika object dihapus
  public function __destruct()
  {
    self::$instanceCount--; // mengurangi jumlah instance
  }
}

$shirt = new Product(); // mmebuat object shirt, construct method akan dijalankan
echo Product::$instanceCount; // 1

echo "<br/>";

unset($shirt); // menghapus object shirt, destruct method akan dijalankan
echo Product::$instanceCount; // 0