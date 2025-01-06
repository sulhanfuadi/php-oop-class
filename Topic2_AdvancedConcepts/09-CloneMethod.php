<?php

// clone method
// salah satu magic method
// method yang akan dijalankan ketika object di-clone
// object yang di-clone akan memiliki properti dan method yang sama dengan object yang di-clone
// namun, object yang di-clone akan memiliki alamat memori yang berbeda

class Product
{
  public $color;

  public function __construct() // construct method
  {
    echo "Construct method dijalankan <br/>";
  }

  public function __clone() // clone method, akan dijalankan ketika object di-clone
  {
    echo "Clone method dijalankan <br/>";
  }
}

// membuat object shirt1
$shirt1 = new Product();
$shirt1->color = "Red"; // mengisi properti color object shirt1

$shirt2 = clone $shirt1; // clone object shirt1 ke shirt2, clone method akan dijalankan

echo "Shirt 1 color: " . $shirt1->color . "<br/>"; // Red
echo "Shirt 2 color: " . $shirt2->color . "<br/>"; // Red

$shirt2->color = "Green"; // mengubah warna shirt2

echo "Shirt 1 color: " . $shirt1->color . "<br/>"; // Red
echo "Shirt 2 color: " . $shirt2->color . "<br/>"; // Green