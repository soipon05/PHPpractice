<?php

// ループ処理
// for

for ($i = 0; $i < 10; $i++) {
  if ($i === 5) {
    continue;
    // break;
  }
  echo $i;
}