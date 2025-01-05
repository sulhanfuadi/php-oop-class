<?php

// merujuk parent class
// hanya bekerja di dalam class, bukan instance
// self:: dan parent:: digunakan untuk menggantikan ClassName
// tidak dibutuhkan dalam static properties
// berguna pada saat memanggil static method yang telah di-override

class Programmer
{
  public static function makeSystem()
  {
    echo "System is being made";
  }
}

class BackendProgrammer extends Programmer
{
  public static function makeSystem()
  {
    echo "System is being made by Backend Programmer";
  }

  public static function doBackend()
  {
    self::makeSystem(); // memanggil method makeSystem() di class BackendProgrammer
    echo "<br>";
    parent::makeSystem(); // memanggil method makeSystem() di class Programmer
  }
}

echo Programmer::makeSystem(); // System is being made
echo "<br>";
echo BackendProgrammer::makeSystem(); // System is being made by Backend Programmer
echo "<br>";
echo BackendProgrammer::doBackend(); // System is being made by Backend Programmer \n System is being made