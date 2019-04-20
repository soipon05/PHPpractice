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

// static
// インスタンス化しなくても使えるプロパティやメソッドである。
// なのでインスタンス化しないと使えないプロパティなどを組み込んだりすることはできない
// 自身のクラスのことを指定するのにselfを使用する

class User {
  // property
  // private $name;
  public $name;
  public static $count = 0;
  // constructor
  public function __construct($name) {
    $this->name = $name;
    self::$count++;
  }
  // method
  public function sayHi() {
    echo "hi, i am $this->name!";
  }
  public static function getMessage() {
    echo "hello from User class!";
  }
}

// User::getMessage();

$tom = new User("Tom");
$bob = new User("Bob");

// インスタンス作成するたびにコンストラクターの処理が実行されるので
// 2回＋＋が実行されて2が出力される
echo User::$count; //2
