<?php
$message_array = array();

//DB接続
$mysqli = new mysqli('localhost','root','','chatdb');
//接続エラーのとき、エラー文
if ( $mysqli->connect_errno ){
  $error_message[]='データの読み込みに失敗 　エラーNo.'.$mysqli->connect_errno.' : '.$mysqli->connect_error;
} else{

  $sql = "SELECT user, text FROM chatlog2 ORDER BY date";
  $res = $mysqli->query($sql);

  if( $res ){
    $message_array = $res->fetch_all(MYSQLI_ASSOC);
  }

  $mysqli->close();
}

 ?>
