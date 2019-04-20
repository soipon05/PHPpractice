<?php

// 関数

function sayHi($name = "taguchi") {
  // echo "hi!". $name;
  return "hi!" . $name;
}

// sayHi("Tom");
// sayHi("Bob");
// // 初期値を設定することもできる
// sayHi();

$s = sayHi();
var_dump($s);