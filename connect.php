<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "tts_1030";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    echo "Error";
}


?>