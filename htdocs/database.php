<?php
function database($inst_type, $target)
{
	mb_language("ja");
	mb_internal_encoding('UTF-8');

	try {
	    $pdo = new PDO('mysql:host=127.0.0.1;port=8889;dbname=MparsDB;charset=utf8mb4', 'sfen', 'sfen');
	} catch (PDOException $e) {
	    header('Content-Type: text/plain; charset=UTF-8', true, 500);
	    exit($e->getMessage());
	}
	$stmt = $pdo->prepare($inst_type . $target);
	$stmt->execute();
	while ($row = $stmt->fetch()) {
		$array[] = $row;
	}
    return $array;
}
?>
