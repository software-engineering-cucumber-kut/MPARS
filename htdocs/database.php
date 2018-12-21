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

    echo $mysqli->host_info . "\n";
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL";
    }

    $sql = $inst_type . " " . $target;
    $result = $mysqli->query($inst_type . " " . $target);

    $returnvalue = null;
    while ($row = $result->fetch_assoc()) {
        $returnvalue[] = $row;
    }
    /*
    switch ($inst_type) {
    case "INSERT":
    case "insert":
    case "UPDATE":
    case "update":
    case "DELETE":
    case "delete":
        break;
    default:
    }
     */

    $mysqli->close();
    return $returnvalue;
}
?>
