<?php

class Cat
{
  public $name = "Kucing";
  public $color;
  public $age;
  public $weight;

  public function sayHello()
  {
    return "Halo, nama saya $this->name";
  }
}
