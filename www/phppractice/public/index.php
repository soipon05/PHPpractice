<?php

// require: fatal errorを発生させて処理を中断させる
// require_once

// require "User.class.php";

// include: warningを発生させて処理を続行
// include_once

// autoload

spl_autoload_register(function($class){
  require $class . ".class.php";
});

$bob = new User("Bob");
$bob->sayHi();