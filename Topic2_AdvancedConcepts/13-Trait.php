<?php

// trait
// mirip interface, but menyediakan proses atau detail implementasi
// horizontal code sharing

// solusi dari masalah loggging di interface, yaitu dengan menggunakan trait
// trait ini bisa digunakan di banyak class, tanpa harus mengimplementasikan method log

trait Log // membusat trait log
{
  protected function log(string $message) // berbeda dengan interface, trait bisa menggunakan visibilitas protected
  {
    return '$message' . '<br>';
  }
}

class Table
{
  use Log; // menggunakan trait Log, sehingga method log bisa digunakan di class Table

  public function save()
  {
    $this->log('Hello'); // menggunakan method log dari trait Log
  }
}

// menampilkan output, karena sudah menggunakan trait Log, maka method log harus ada
echo (new Table())->save(); // Hello