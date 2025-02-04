<?php
require_once './connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['did'])) {
    $did = (int) htmlspecialchars($_GET['did']);
    if (!is_int($did)) {
        header("location: wrong.html");
        exit();
    }

    $delSql = "DELETE FROM employee WHERE `id` = '$did'";
    $res = mysqli_query($conn, $delSql);
    
    if ($res) {
        $msg = "Employee Deleted Sucessfully";
        header("location: index.php?message=$msg");
        exit();
    }
}
else{
    header("location: wrong.html");
}


?>