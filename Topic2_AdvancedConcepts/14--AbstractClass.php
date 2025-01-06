<?php

// abstract class
// mirp interface, tetapi dikhususkan untuk you and your team
// kenapa harus menggunakan?
// contoh kasus, kita membuat class yang memiliki method yang sama, tetapi berbeda implementasi
// seperti class fruit sebagai abstract class, dan class apple dan class banana sebagai child class dari class fruit


abstract class Database // class abstract, tidak bisa diinstansiasi
{
  abstract public function connection(); // method abstract, harus diimplementasikan di child class
  public function disconnect() // method biasa, tidak harus diimplementasikan di child class
  {
    return 'Disconnect from database';
  }
}

class Model extends Database
{
  public function connection() // harus ada, karena abstract class Database memiliki method connection
  {
    return 'Connection to database';
  }
}

$model = new Model();
$database = new Database(); // error, karena abstract class tidak bisa diinstansiasi