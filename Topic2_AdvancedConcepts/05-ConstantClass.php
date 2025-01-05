<?php

// class constant
// digunakan untuk nilai class yang tidak bisa diubah
// dapat menyimpan nilai expression
// pertunjukkan dengan ClassName:: atau self::

class Time
{
  // membuat constant, tidak bisa diubah, hanya bisa diakses
  public const DAY_IN_SECONDS = 60 * 60 * 24; // 86400

  public function tomorrow()
  {
    return time() + self::DAY_IN_SECONDS; // self:: , digunakan untuk mengakses constant di dalam class
  }
}

// cara mengakses constant
echo Time::DAY_IN_SECONDS . "<br>"; // 86400

$clock = new Time(); // membuat object
echo $clock->tomorrow(); // 86400 + waktu sekarang