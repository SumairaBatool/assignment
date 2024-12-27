<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment seven</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(246, 16, 16);
            padding: 30px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h3>Registration Form</h3>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Gender</label><br>
                    <input type="checkbox" id="gender_male" name="gender[]" value="Male"> Male
                    <input type="checkbox" id="gender_female" name="gender[]" value="Female"> Female
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <div class="table-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first_name = sanitize_input($_POST['first_name']);
                $last_name = sanitize_input($_POST['last_name']);
                $email = sanitize_input($_POST['email']);
                $gender = isset($_POST['gender']) ? implode(", ", $_POST['gender']) : '';
                $role = sanitize_input($_POST['role']);
                $username = sanitize_input($_POST['username']);
                $password = sanitize_input($_POST['password']);
                echo "<h3>Submitted Information:</h3>";
                echo "<table class='table table-bordered'>
                        <tr><th>First Name</th><td>$first_name</td></tr>
                        <tr><th>Last Name</th><td>$last_name</td></tr>
                        <tr><th>Email</th><td>$email</td></tr>
                        <tr><th>Gender</th><td>$gender</td></tr>
                        <tr><th>Role</th><td>$role</td></tr>
                        <tr><th>Username</th><td>$username</td></tr>
                        <tr><th>Password</th><td>$password</td></tr>
                      </table>";
            }

            // Function to sanitize input
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
        </div>
    </div>
</body>
</html>
