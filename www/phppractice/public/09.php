<?php

// 真偽値
// falseになる場合
// 文字列=>空、0
// 数値：　0,
// 配列：要素の数が0
// null

$x = 5;
if($x) {
  echo "greate";
}

// 三項演算子
$a   = 5;
$b   = 2;

$max = ($a > $b) ? $a : $b;

echo $max;