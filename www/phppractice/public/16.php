<?php

// 関数
// ローカル変数のスコープを理解
$lang = "ruby";

function sayHi($name) {
  $lang = "php";
  echo "hi! . $name from $lang";
}

sayHi("Tom");
var_dump($lang); //rubyが表示される