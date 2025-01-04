<?php

// inheritance -> pewarisan kelas
// class baru yang memanfaatkan property atau method dari class yang sudah ada
// manfaat: menghindari duplikasi kode, mempermudah pemeliharaan kode, dan mempercepat pengembangan aplikasi

// kemampuan suatu class akan dibagikan ke sub class nya
// memberikan kemampuan baru di parent class, maka kemampuan tersebut akan dimiliki oleh sub class nya
// sub class dapat mengubah ulang (override) kemampuan yang dimiliki oleh parent class
// sub class dapat menambahkan kemampuan baru yang tidak dimiliki oleh parent class

// parent class
class Person
{
  var $firstName;
  var $lastName;
  var $country = 'None';

  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }
}

// child class
class Author extends Person // Author adalah sub class dari Person
{
  var $penName = 'None'; // property penName dengan nilai default None

  function getPenName() // method getPenName tambahan, hanya dimiliki oleh Author
  {
    return $this->penName;
  }

  function getCompleteName() // method getCompleteName tambahan, hanya dimiliki oleh Author
  {
    return $this->firstName . ' ' . $this->lastName . ' a.k.a ' . $this->penName;
  }
}

// instance dari Author
$author = new Author();
$author->firstName = 'John';
$author->lastName = 'Doe';
$author->penName = 'J.D';

echo $author->fullName(); // output: John Doe
echo '<br>';
echo $author->getPenName(); // output: J.D
echo '<br>';
echo $author->getCompleteName(); // output: John Doe a.k.a J.D
echo '<br>';

echo '<br>';

// cek apakah Author adalah subclass dari Person
if (is_subclass_of($author, 'Person')) {
  echo 'Author is a subclass of Person';
} else {
  echo 'Author is not a subclass of Person';
}

echo '<br>';
echo '<br>';

// menampilkan parent class dari Author
$parents = class_parents('Author');
echo implode(', ', $parents); # implode digunakan untuk menggabungkan array menjadi string
// output: Person