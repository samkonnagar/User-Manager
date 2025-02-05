<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = htmlspecialchars(trim( $_POST['name'] ));
    $age = (int) htmlspecialchars(trim( $_POST['age'] ));
    $email = htmlspecialchars(trim( $_POST['email'] ));
    $job_role = htmlspecialchars(trim( $_POST['job_role'] ));
    $gender = htmlspecialchars(trim( $_POST['gender'] ));
    $eid = htmlspecialchars( $_POST['eid']);
    
    require_once './connect.php';

    // checking the empty fields
    if (empty($user_name) || empty($email) || empty($job_role) || empty($gender)) {
        $msg = "User Name or Email or Job Role or Gender Can Not Be Empty";
        header("location: edit.php?eid=$eid&message=$msg");
        exit();
    }

    // check min age requirment
    if ($age < 18) {
        $msg = "You Are Under Agged To Register";
        header("location: edit.php?eid=$eid&message=$msg");
        exit();
    }
    
    $inertEmployee = "UPDATE `employee` SET `name`='$user_name',`age`='$age',`email`='$email',`job_role`='$job_role',`gender`='$gender' WHERE id = '$eid'";
    
    $res = mysqli_query($conn, $inertEmployee);
    
    if ($res) {
        $msg = "Employee Updated Sucessfully";
        header("location: index.php?message=$msg");
        exit();
    }
}
else{
    header("location: index.php");
}



?>