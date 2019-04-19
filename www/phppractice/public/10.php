<?php

// switch 条件分岐

$signal = "red";

switch ($signal) {
  case "red":
    echo "stop";
    break;
    // 複数条件も並べて書くことができる
  case "blue":
  case "green":
    echo "go";
    break;
  case "yellow":
    echo "caution!";
    break;
  default:
    echo "wrong signal";
    break;
}