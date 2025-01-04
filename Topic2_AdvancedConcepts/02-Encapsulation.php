<?php

// encapsulation (visibility modifiers)
// encapsulation is the practice of keeping properties private and providing access to them through public methods
// encapsulation is a way to protect the data in an object
// encapsulation is a way to hide the implementation details of an object
// encapsulation is a way to prevent the data in an object from being modified in an unexpected way

// best practice:
// selalu gunakan encapsulation
// pertimbangkan untuk menggunakan visibility modifiers private, protected, dan public
// gunakan enkapsulasi public hanya jika Anda benar-benar membutuhkannya
// kelompokkan properti dan metode yang berhubungan bersama-sama

// visibility public ketika kita ingin suatu method atau property dapat diakses dari luar class itu sendiri, baik itu dari class turunannya atau dari objek yang menggunakan class tersebut
// visibility private ketika kita ingin suatu method atau property hanya dapat diakses pada class itu sendiri
// visibility protected ketika kita ingin suatu method atau property hanya dapat diakses pada class itu sendiri dan class turunannya

class User
{
  public $firstName; // public properties can be accessed from outside the class
  public $lastName;
  public $username;

  protected $email = 'abcd'; // protected properties can be accessed from the class itself and from the class's children
  private $password = '123456'; // private properties cannot be accessed from outside the class

  public function fullName() // public methods can be accessed from outside the class
  {
    return $this->firstName . ' ' . $this->lastName;
  }

  protected function getEmail() // protected methods can be accessed from the class itself and from the class's children
  {
    return $this->email;
  }

  private function getPassword()
  { // private methods cannot be accessed from outside the class
    return $this->password;
  }

  // public method to access the private password property
  public function showPassword()
  {
    return $this->getPassword();
  }
}

class Customer extends User
{
  public $city;
  public $state;
  public $country;

  public function location()
  {
    return $this->city . ', ' . $this->state . ', ' . $this->country;
  }

  public function fullName()
  {
    return $this->firstName . ' ' . $this->lastName . ' (Customer)';
  }

  public function email()
  {
    return $this->getEmail(); // accessing a protected method from the parent class
  }
}


// create an object of the User class
$user = new User();
$user->firstName = 'John';
$user->lastName = 'Doe';

// $user->email = 'johndoe@gmai.com'; // Fatal error: Uncaught Error: Cannot access protected property User::$email, because it is protected
// $user->password = '123456'; // Fatal error: Uncaught Error: Cannot access private property User::$password, because it is private

// echo $user->getPassword(); // Fatal error: Uncaught Error: Call to protected method User::getPassword() from context, because it is protected
// echo '<br>';

// accessing a private property from the parent class
echo $user->showPassword(); // 123456
echo '<br>';

$customer = new Customer();
$customer->firstName = 'Jane';
$customer->lastName = 'Doe';

// accessing a protected property from the parent class
echo $customer->email(); // abcd
echo '<br>';
