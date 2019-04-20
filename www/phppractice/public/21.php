<?php

// 継承
// overrideさせたくないよってときはfinalをprefixでつけてあげる
// Fatal error: Cannot override final method User::sayHi() in 
// アクセス権について
//  - private: そのクラス内からのみアクセス可能
//  - protected: そのクラス内＋親子クラス内のみアクセス可能
//  − public: どこからでもOK
// privateにするとクラス内からは呼び出せるがインスタンスからは呼び出せなくなる
// Fatal error: Uncaught Error: Cannot access private property User::$name
// $tom->name;
// Uncaught Error: Cannot access protected property User::$name 
// class名は頭文字が大文字

class User {
  // property
  // private $name;
  protected $name;
  // constructor
  public function __construct($name) {
    $this->name = $name;
  }
  // method
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
}

class AdminUser extends User {
  public function sayHello() {
    echo "hello from　$this->name";
  }
  // overraide
  public function sayHi() {
    echo "  [admin] hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");
// echo $steve->name;
// echo $tom->name;
$tom->sayHi();
$steve->sayHi();
$steve->sayHello();
// $steve->sayHello();