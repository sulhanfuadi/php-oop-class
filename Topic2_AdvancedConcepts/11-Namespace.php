<?php

// php namespaces
// namespaces are used to avoid name collisions between classes, functions, and constants.
// namespaces are declared at the beginning of the file.
// lebih mudah mengatur package, menyederhanakan penamaan method dan class
// class aliases
// composer, merupakan package manager untuk php

// namespace
namespace App\Library;

// class Library, berada di namespace App\Library
use Illuminate\Support\Facades\Facade; // alias

class LibraryFacade extends Facade // mengambil class Facade dari namespace Illuminate\Support\Facades
{
  protected static function getFacadeAccessor()
  {
    return 'library';
  }
}
