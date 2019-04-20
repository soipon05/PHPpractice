<?php

// interface
// 必ず実装してもらうことを保証する
// 性質上必ずpublicでなければいけない

interface sayHi {
  public function sayHi();
}

interface sayHello {
  public function sayHello();
}

class User implementss sayHi, sayHello {
  public function sayHi() {
    echo "Hi";
  }

  public function sayHello() {
    echo "Hello";
  }
}