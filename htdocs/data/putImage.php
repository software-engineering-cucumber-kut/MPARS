{
	"success":<?php
//var_dump($_FILES);
$tmp_name = $_FILES['image']['tmp_name'];
//print_r($tmp_name);
$file_name = $_FILES['image']['name'];
//print_r($file_name);
if (is_uploaded_file($tmp_name)) {
    $file = '../img/' . basename($file_name);
    //print_r($file);
    if (move_uploaded_file($tmp_name, $file)) {
        echo"1,\n\t\"name\":\"" . $file . "\"\n";
    }
} else {
    echo"0,\n\t" . '"name":';
}
?>

}
