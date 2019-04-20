<?php

// 抽象クラス
// 継承されることを前提としているクラス

abstract class BaseUser {
  public $name;
  // 継承先で必ず実装してほしいことを明記するときは
  // abstractをprefixにつける。
  // 実装することを書くので実装内容はここでは書かない。
  abstract public function sayHi();
}

class User extends BaseUser {
  public function sayHi() {
    echo "hello from User";
  }
}