<?php

// interface
// sebuah object abstrak yang tidak berisi data atau proses, tapi
// mendefinisikan kebiasaan atau fungsi sebagai method signatures
// membantu proggrammer lain membedah program kita (ini tujuannya, bukan untuk kita, tapi untuk mereka)
// hanya menggunakan visibilitas public

// merupakan kontrak yang harus diikuti oleh class yang mengimplementasikannya
interface TableInterface
{
  public function save(array $data);
}

// class yang mengimplementasikan interface, harus mengimplementasikan semua method yang ada di interface
interface LogInterface
{
  public function log(string $message);
}

// class yang mengimplementasikan lebih dari satu interface, harus mengimplementasikan semua method yang ada di interface
class Table implements TableInterface, LogInterface
{
  public function save(array $data) // method dari TableInterface
  {
    return 'Save data to database';
  }

  public function log(string $message) // method dari LogInterface
  {
    return 'Save log message to database ' . $message;
  }
}

// menampilkan output, karena sudah mengimplementasikan interface, maka method save dan log harus ada
echo (new Table())->save([]); // Save data to database
echo '<br>';
echo (new Table())->log('Hello'); // Save log message to database Hello