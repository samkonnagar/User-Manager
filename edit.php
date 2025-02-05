<?php
require_once 'connect.php';

if (!isset($_GET['eid'])) {
    header('location: wrong.html');
    exit();
}
$eid = htmlspecialchars($_GET['eid']);
$sql = "SELECT * FROM `employee` WHERE id = '$eid'";
$res = mysqli_query($conn, $sql);
$noOfUser = mysqli_num_rows($res);
if ($noOfUser !== 1) {
    header('location: wrong.html');
    exit();
}
$user = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manager</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    if (isset($_GET['message'])) {

    ?>
    <div id="message">
        <span><?php echo $_GET['message'] ?></span><span onclick="location.replace('edit.php?eid=<?php echo $eid ?>')">X</span>
    </div>
    <?php
    }
    ?>
    <div class="container">
        <h1>Edit User</h1>

        <form id="userForm" action="editBack.php" method="post">
            <input type="hidden" name="eid" value="<?php echo $eid ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required value="<?php echo $user['name'] ?>">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required value="<?php echo $user['age'] ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required value="<?php echo $user['email'] ?>">
            </div>

            <div class="form-group">
                <label for="job_role">Job Role</label>
                <input type="text" id="job_role" name="job_role" required value="<?php echo $user['job_role'] ?>">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="M" <?php echo ($user['gender'] === 'M')? 'selected' : null ?>>Male</option>
                    <option value="F" <?php echo ($user['gender'] === 'F')? 'selected' : null ?>>Female</option>
                    <option value="O" <?php echo ($user['gender'] === 'O')? 'selected' : null ?>>Other</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Edit User">
            </div>
        </form>

</body>
</html>
