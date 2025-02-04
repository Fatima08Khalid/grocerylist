<?php
include('dbconnect.php'); // Ensure this file is included

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($name) && !empty($email) && !empty($password)) {
        // Use prepared statement to prevent SQL injection
        if ($conn) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE name=? AND email=? AND password=?");
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Login successful!";
                header('location:index.php');
                exit();
            } else {
                echo "Invalid credentials!";
                header('location:login1.php');
                exit();
            }

            $stmt->close();
        } else {
            echo "Database connection failed!";
        }
    } else {
        echo "All fields are required!";
    }
}

if (isset($conn)) {
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="login1.php" method="POST">
            <h2>Login</h2>

            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <button type="submit">Log In</button>

            <p>Don't have an account? <a href="signup.php">Create One</a></p>
            <p id="message"></p> <!-- Login message will be shown here -->
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>