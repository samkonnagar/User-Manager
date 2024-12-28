<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_name = htmlspecialchars(trim( $_POST['name'] ));
    $age = (int) htmlspecialchars(trim( $_POST['age'] ));
    $email = htmlspecialchars(trim( $_POST['email'] ));
    $job_role = htmlspecialchars(trim( $_POST['job_role'] ));
    $gender = htmlspecialchars(trim( $_POST['gender'] ));
    
    require_once './connect.php';

    // checking the empty fields
    if (empty($user_name) || empty($email) || empty($job_role) || empty($gender)) {
        $msg = "User Name or Email or Job Role or Gender Can Not Be Empty";
        header("location: index.php?message=$msg");
        exit();
    }

    // check min age requirment
    if ($age < 18) {
        $msg = "You Are Under Agged To Register";
        header("location: index.php?message=$msg");
        exit();
    }

    // email exists or not
    $sql = "SELECT id FROM `employee` WHERE email = '$email'";
    $getRes = mysqli_query($conn, $sql);
    if ($getRes) {
        if (mysqli_num_rows($getRes)) {
            $msg = "Email Already Exists";
            header("location: index.php?message=$msg");
            exit();
        }
    }

    
    $inertEmployee = "INSERT INTO `employee`(`name`, `age`, `email`, `job_role`, `gender`) VALUES ('$user_name','$age','$email','$job_role','$gender')";
    
    $res = mysqli_query($conn, $inertEmployee);
    
    if ($res) {
        $msg = "Employee Added Sucessfully";
        header("location: index.php?message=$msg");
        exit();
    }
}
else{
    header("location: index.php");
}



?>