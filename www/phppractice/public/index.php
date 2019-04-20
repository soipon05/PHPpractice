<?php

// ループ処理
// while
// do ... while

// do ... while は後処理なので条件に当てはまらなくても一回は中の式を実行する
// $i = 1000;
// このとき
// whileは何も表示されない
// do...while は1000を表示する
$i = 0;

// while ($i < 10) {
//   echo $i;
//   $ii++;
// }

do {
  echo $i;
  $i++;
} while ($i < 11);