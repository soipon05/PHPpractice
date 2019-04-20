<?php

// 配列
// key value

// $sales = array(
//   "jun" => 200,
//   "fkoji" => 800,
//   "dotinstall" => 600,
// );

// PHP 5.4

$sales = [
  "jun" => 200,
  "fkoji" => 800,
  "dotinstall" => 600,
];

var_dump($sales["fkoji"]); //800
$sales["fkoji"] = 900;
var_dump($sales["fkojia"]); //900