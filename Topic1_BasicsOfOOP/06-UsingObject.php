<?php

// cara menggunakan instance
// di luar class: $variablej->property
// di dalam class: $this->property

class Person // membuat class Person
{
  var $firstName; // property firstName
  var $lastName; // property lastName
  var $country = 'None'; // property country dengan nilai default None

  // method fullName
  function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
    # $this digunakan untuk mengakses property firstName dan lastName dari instance dalam class Person
  }
}

$person = new Person();
$person->firstName = 'John'; // mengisi property firstName dari instance $person dengan nilai 'John'
$person->lastName = 'Doe'; // mengisi property lastName dari instance $person dengan nilai 'Doe'

// call method
echo $person->fullName(); // output: John Doe