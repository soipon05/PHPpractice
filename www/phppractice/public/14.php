<?php

// 配列
// foreach

$sales = [
  "taguchi" => 200,
  "fkoji" => 800,
  "dotinstall" => 600,
];

foreach ($sales as $key => $value) {
  echo "($key) $value";
}

$colors = ["red", "blue", "pink"];

// foreach ($colors as $$value) {
//   echo "$value";
// }

// foreach if while for コロン構文
// HTMLに埋め込むときにスッキリして見やすいとのこと
foreach ($colors as $value) :
  echo "$value";
endforeach;

?>
<ul>
  <?php foreach ($colors as $value) : ?>
  <li><?php echo "$value"; ?></li>
  <?php endforeach; ?>
</ul>