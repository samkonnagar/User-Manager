<?php
require_once 'connect.php';

$sql = "SELECT * FROM `employee` LIMIT 0, 6";
$res = mysqli_query($conn, $sql);
if (!$res) {
    header("location: wrong.html");
}
$noOfEmployeesWeGet = mysqli_num_rows($res);

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
    <div class="container">
        <h1>User Manager</h1>

        <form id="userForm" action="back.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="job_role">Job Role</label>
                <input type="text" id="job_role" name="job_role" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="Add User">
            </div>
        </form>

        <h2 class="user-heading">Users</h2>
        <div class="user-list" id="userList">

        <?php
        if ($noOfEmployeesWeGet) {
            while ($data = mysqli_fetch_assoc($res)) { 
            $short_gender = $data['gender'];
            $gender;
            switch ($short_gender) {
                case 'M':
                    $gender = "Male";
                    break;
                case 'F':
                    $gender = "Female";
                    break;
                case 'O':
                    $gender = "Other";
                    break;
                default:
                    $gender = "Unknown";
                    break;
            }
        ?>
            <div class="user-card">
                <h3><?php echo $data['name'] ?></h3>
                <p>Age: <?php echo $data['age'] ?></p>
                <p>Email: <?php echo $data['email'] ?></p>
                <p>Job Role: <?php echo $data['job_role'] ?></p>
                <p>Gender: <?php echo $gender ?></p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
        <?php
        }
    }
    else {
        echo "<div class='user-card'>Employee Not Found</div>";
    }
        ?>

        </div>
        
        <div class="pagination" id="pagination">
            <button id="prevPage" disabled>Previous</button>
            <button id="nextPage">Next</button>
        </div>
    </div>

    
</body>
</html>
