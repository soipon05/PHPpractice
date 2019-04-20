<?php

// 継承
// overrideさせたくないよってときはfinalをprefixでつけてあげる
// Fatal error: Cannot override final method User::sayHi() in 
// 

// class名は頭文字が大文字

class User {
  // property
  public $name;
  // constructor
  public function __construct($name) {
    $this->name = $name;
  }
  // method
  final public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

class AdminUser extends User {
  public function sayHello() {
    echo "hello from Admin!";
  }
  // overraide
  public function sayHi() {
    echo "  [admin] hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name;
$tom->sayHi();
$steve->sayHi();
// $steve->sayHello();
// $steve->sayHello();