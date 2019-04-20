<?php

// 関数


$x = 5.6;
// // 小数点以下を切り上げる関数
// echo ceil($x);
// // 切り捨て
// echo floor($x);
// // 四捨五入
// echo round($x);
// ランダムに数字を返す関数rand
// 1,10なら1以上10以下の数字が表示される
// echo rand(1,10);

$s1 = "hello";
$s2 = "ねこ";
// 文字数を返してくれる関数
// // 日本語はmb?strlenを使って調べる
// echo strlen($s1); // 5
// echo mb_strlen($s2); // 2
// // 書式を指定して表示できる組み込み関数
// // %.3fとすると小数点3位まで表示される
// printf("%s - %s - %.3f", $s1, $s2, $x);

$colors = ["red", "blue", "pink"];
// 要素の数を数える関数
echo count($colors);
// 与えられた配列を指定した引数で連結していく
// red@blue@pink となる
echo implode("@", $colors);