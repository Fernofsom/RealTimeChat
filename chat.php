<?php
	//index.phpで入力されたメッセージをDBに登録する

	//index.phpから必要な情報を取得
	$msg = $_POST['msg'];
	$user = $_POST['user'];

	// データベースに接続
	$mysqli = new mysqli( 'localhost', 'root', '', 'chatdb');
	// 接続エラーの確認
	if( $mysqli->connect_errno ) {
		echo $mysqli->connect_errno . ' : ' . $mysqli->connect_error;
	}

	//DB接続, SQL文実行
	try {
		$sql = "INSERT INTO chatlog2 ( user, text, date) VALUES ('$user', '$msg', NOW())";
		$result = mysqli_query($db, $sql);
	} catch (Exception $e) {
		echo $e->getMessage() . PHP_EOL;
	}

	//index.htmlに戻る
	header('Location: home.html');
	exit;
?>
