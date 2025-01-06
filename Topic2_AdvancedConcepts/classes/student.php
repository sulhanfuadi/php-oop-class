<?php

class Student
{
  public $name = "Student";
  public $age;
  public $grade;

  public function sayHello()
  {
    return "Halo, nama saya $this->name";
  }
}
