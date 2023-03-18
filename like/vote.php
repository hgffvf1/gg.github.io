<?php
// 獲取用戶選擇的顏色
$color = $_POST['color'];

// 將投票結果寫入文件
$filename = 'vote.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $color . "\n");
fclose($fp);

// 跳轉回投票頁面
header('Location: index.php');
?>
<?php
// 獲取客戶端 IP 地址
$ip = $_SERVER['REMOTE_ADDR'];

// 獲取投票選項
$color = $_POST['color'];

// 寫入投票結果和 IP 地址
$filename = 'vote.txt';
$fp = fopen($filename, 'a');
fwrite($fp, $color . "\t" . $ip . "\n");
fclose($fp);

// 顯示投票成功信息
echo '<h2>投票成功</h2>';
echo '<p>您的選擇是：' . $color . '</p>';
echo '<p>感謝您的投票！</p>';
?>
