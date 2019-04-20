<?php

// 名前空間を使用
require "User.class.php";

// use Dotinstall\Lib as Lib;
use Dotinstall\Lib;
// これだけでも最下層の名前を使えってことになる


$bob = new Lib\User("Bob");
$bob->sayHi();