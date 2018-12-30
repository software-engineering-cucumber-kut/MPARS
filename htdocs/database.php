<?php
function database($inst_type, $target)
{
    $user = 'sfen';
    $password = 'sfen';
    $db = 'MparsDB';
    $host = '127.0.0.1';
    $port = 8889;

    $mysqli = new mysqli(
        $host,
        $user,
        $password,
        $db,
        $port
    );

    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL");
    }

    $sql = $inst_type . " " . $target;
    $result = $mysqli->query($sql);

    $returnvalue = null;
    switch ($inst_type) {
    case "INSERT":
    case "insert":
    case "UPDATE":
    case "update":
    case "DELETE":
    case "delete":
        if (!$result) {
            $returnvalue = false;
        } else {
            $returnvalue = true;
        }
        break;
    default:
        while ($row = $result->fetch_assoc()) {
            $returnvalue[] = $row;
        }
    }
    $mysqli->close();
    return $returnvalue;
}
?>
