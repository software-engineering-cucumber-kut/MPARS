{
    "success": <?php
require('database.php');
$json_string = file_get_contents('php://input');
$json_obj = json_decode($json_string);

$account_type = $json_obj->accountType;
$id = $json_obj->id;
$name = $json_obj->name;
$password = $json_obj->password;

// スコープ制限のため
$table = '';
// ユーザ種により使うテーブルが異なる
switch ($account_type) {
case 'student':
    $table = 'studentuser';
    break;
case 'general':
    $table = 'generaluser';
    break;
case 'manager':
    $table = 'owner';
    break;
}

if ($table == 'generaluser') {
    // ユーザの存在を確認するためのSQLの一部
    $target = ' id FROM ' . $table . " WHERE name = '" . $name . "' AND password = " . "'" . $password . "'";
} else {
    // ユーザの存在を確認するためのSQLの一部
    $target = ' id FROM ' . $table . ' WHERE id = ' . $id . ' AND password = ' . "'" . $password . "'";
}

$result = database('SELECT', $target);
if ($result != NULL) {
    echo 1;
    session_start();
    $_SESSION['id'] = $result[0]['id'];
} else {
    echo 0;
}
?>

}
