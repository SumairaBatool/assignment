<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
        table {
            width: 100%;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Student Form</h1>
    <form action="" method="POST">
        <div>
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" id="first_name" required>
        </div>
        <div>
            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" id="last_name" required>
        </div>
        <div>
            <label for="dob">Date of Birth:</label><br>
            <input type="date" name="dob" id="dob" required>
        </div>
        <div>
            <label for="address">Address:</label><br>
            <textarea name="address" id="address" required></textarea>
        </div>
        <div>
            <label for="mobile">Mobile Number:</label><br>
            <input type="text" name="mobile" id="mobile" required>
        </div>
        <div>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required>
        </div>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize inputs
        $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
        $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
        $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        // Validate inputs
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color: red;'>Invalid email format!</p>";
            exit;
        }

        if (!preg_match('/^\d{11}$/', $mobile)) {
            echo "<p style='color: red;'>Invalid mobile number! Must be 11 digits.</p>";
            exit;
        }

        // Display data in table
        echo "<h2>Submitted Data:</h2>";
        echo "<table>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>First Name</td><td>$first_name</td></tr>";
        echo "<tr><td>Last Name</td><td>$last_name</td></tr>";
        echo "<tr><td>Date of Birth</td><td>$dob</td></tr>";
        echo "<tr><td>Address</td><td>$address</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Email</td><td>$email</td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
