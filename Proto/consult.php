<?php
//start of php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');
define('MYSQL_DB', 'tic');
//定数を定義する
$con=mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);//MYSQLと接続
mysql_select_db(MYSQL_DB, $con);//データベースの選択

$sql=mysql_query('SELECT `name` FROM `usuarios`', $con)//SQLを実行する
//レコードを一件ずつ連想配列の形式で取得
$output[]=array('<p>Nombers</p>');
//取得したレコードをすべて順に表示する
while ($row=mysql_fetch_assoc($sql)){
  $output[]='<p>'.$row['nombers']. ' - ' . $row['departamento'] . ' - ' . $row['sueldo'] . '</p><p>' . $row['name'] . '</p>';
}
echo implode('', $output);
 ?>
