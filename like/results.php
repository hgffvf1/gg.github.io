<?php
// 讀取投票結果
$filename = 'vote.txt';
$fp = fopen($filename, 'r');
$votes = array();
while ($line = fgets($fp)) {
  $color = trim($line);
  if (isset($votes[$color])) {
    $votes[$color]++;
  } else {
    $votes[$color] = 1;
  }
}
fclose($fp);

// 顯示投票結果
echo '<h2>投票結果</h2>';
echo '<p>紅色：' . $votes['red'] . ' 票</p>';
echo '<p>藍色：' . $votes['blue'] . ' 票</p>';
?>
