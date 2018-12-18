<?php
function database($inst_type, $target)
{
    // 言語指定
	mb_language("ja");
	mb_internal_encoding('UTF-8');

	try {
        // mysqlに接続. 最後の二つはユーザー名，パスワード
	    $pdo = new PDO('mysql:host=127.0.0.1;port=8889;dbname=MparsDB;charset=utf8mb4', 'sfen', 'sfen');
	} catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);
	    exit($e->getMessage());
	}
    // sql文実行のための準備．パラメータを埋め込むことができる．特にその予定がないのでqueryでもいい
	$stmt = $pdo->prepare($inst_type . $target);

	$stmt->execute();

    // sql実行結果の各行を配列化．fetchAllでいいかも
	while ($row = $stmt->fetch()) {
		$array[] = $row;
	}
    return $array;
}
?>
