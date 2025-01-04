<?php

// extend and override
// extend: inherit from a parent class
// override: replace a method in a parent class

// extend and override are two of the most powerful features of OOP
class User
{
  var $firstName;
  var $lastName;
  var $username;

  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }
}

$user = new User();
$user->firstName = 'John';
$user->lastName = 'Doe';
echo $user->fullName(); // John Doe

echo '<br>';

class Customer extends User
{
  // add new properties, extend the class with new properties
  var $city;
  var $state;
  var $country;

  // add new methods, extend the class with new methods
  function location()
  {
    return $this->city . ', ' . $this->state . ', ' . $this->country;
  }

  // override the fullName method
  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName . ' (Customer)';
  }
}

$customer = new Customer();
$customer->firstName = 'Jane';
$customer->lastName = 'Doe';
echo $customer->fullName(); // Jane Doe (Customer)