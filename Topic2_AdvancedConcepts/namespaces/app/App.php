<?php

namespace App;

include '../models/Model.php';

use Model\Table as ModelTable;

class Tabel
{
  public static function get()
  {
    return 'App Table';
  }
}

Tabel::get();
ModelTable::get();
