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

            <div class="user-card">
                <h3>John Doe</h3>
                <p>Age: 30</p>
                <p>Email: john.doe@example.com</p>
                <p>Job Role: Software Engineer</p>
                <p>Gender: Male</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
            <div class="user-card">
                <h3>Jane Smith</h3>
                <p>Age: 27</p>
                <p>Email: jane.smith@example.com</p>
                <p>Job Role: Designer</p>
                <p>Gender: Female</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
            <div class="user-card">
                <h3>Chris Lee</h3>
                <p>Age: 35</p>
                <p>Email: chris.lee@example.com</p>
                <p>Job Role: Product Manager</p>
                <p>Gender: Male</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
            <div class="user-card">
                <h3>John Doe</h3>
                <p>Age: 30</p>
                <p>Email: john.doe@example.com</p>
                <p>Job Role: Software Engineer</p>
                <p>Gender: Male</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
            <div class="user-card">
                <h3>Jane Smith</h3>
                <p>Age: 27</p>
                <p>Email: jane.smith@example.com</p>
                <p>Job Role: Designer</p>
                <p>Gender: Female</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>
            <div class="user-card">
                <h3>Chris Lee</h3>
                <p>Age: 35</p>
                <p>Email: chris.lee@example.com</p>
                <p>Job Role: Product Manager</p>
                <p>Gender: Male</p>
                <div class="user-buttons">
                    <button class="user-edit">Edit</button>
                    <button class="user-delete">Delete</button>
                </div>
            </div>


        </div>
        
        <div class="pagination" id="pagination">
            <button id="prevPage" disabled>Previous</button>
            <button id="nextPage">Next</button>
        </div>
    </div>

    
</body>
</html>
