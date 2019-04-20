<?php

// User

// class名は頭文字が大文字

class User {
  // property
  public $name;
  // constructor
  public function __construct($name) {
    $this->name = $name;
  }
  // method
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name;
$bob->sayHi();