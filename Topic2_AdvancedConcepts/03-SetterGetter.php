<?php

// setter and getter methods
// langkah: 
// 1. buat property dengan visibility private
// 2. buat method untuk mengisi nilai private property
// 3. buat method untuk memanggil nilai private property

// fungsi inti: memungkinkan mengakses property private
// berguna untuk membuat niai pada pre-processing
// catatan tambahan: hindari membuat method "naive getter" dan "naive setter"

class Product
{
  public $name;
  private $price; // private property

  public function setPrice($value) // setter method, untuk mengisi nilai private property
  {
    // pre-processing
    $noFormat = preg_replace('/[^0-9]/', '', $value);
    $float = floatval($noFormat);
    if ($float < 0) {
      throw new Exception('Invalid price');
    }
    $this->price = $float; // set nilai private property
  }

  public function getPrice() // getter method, untuk memanggil nilai private property
  {
    return 'Rp ' . number_format($this->price, 0, ',', '.');
  }
}
