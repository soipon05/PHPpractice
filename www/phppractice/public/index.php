<?php

// 真偽値
// falseになる場合
// 文字列=>空、0
// 数値：　0,
// 配列：要素の数が0
// null

// $x = 0;にすると偽となり出力されない
$x = 5;
if($x) {
  echo "greate";
}

// 三項演算子
$a   = 5;
$b   = 2;

// 条件分を判断して、真であれば先の値を返す、偽であれば後を返す
$max = ($a > $b) ? $a : $b;
// 今回の条件では$max = 5となる。

echo $max;