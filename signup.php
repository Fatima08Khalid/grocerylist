<?php
session_start();
include('dbconnect.php');

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($password !== $confirmpassword){
        header('location:signup.php?error=Passwords do not match');
        exit();
    } else if(strlen($password) < 6){
        header('location:signup.php?error=Password must be at least 6 characters');
        exit();
    } else {
        // Check if email already exists
        $stmt1 = $conn->prepare('SELECT count(*) FROM users WHERE email = ?');
        if(!$stmt1){
            die('Prepare failed: ' . $conn->error);
        }
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $stmt1->bind_result($num_rows);
        $stmt1->store_result();
        $stmt1->fetch();
        $stmt1->close();

        if($num_rows != 0) {
            header('location:signup.php?error=User with this email already exists');
            exit();
        } else {
            // Create user
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            if(!$stmt){
                die('Prepare failed: ' . $conn->error);
            }

            $hashed_password = md5($password);
            $stmt->bind_param("sss", $name, $email, $hashed_password);


            if($stmt->execute()) {
              
               
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['logged-in'] = true;
                header('location:index.php?register=You registered successfully');
                exit();
            } else {
                header('location:signup.php?error=Could not create the account');
                exit();
            }
        }
    }
}

else if(isset($_SESSION['logged-in'])){
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-row {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
        }
        .form-row input{
            padding: 8px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            display: none;
        }

        .button {
            width: 100%;
            padding: 10px;
            background-color : #6a0dad;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #6a0dad;
        }

        .switch-form {
            text-align: center;
            margin-top: 20px;
        }

        .switch-form a {
            color: #6a0dad;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="form-title">Sign Up</h2>
        <form id="signup-form" action="signup.php" method="POST">
           <p style="color:red"> <?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
            <div class="form-row">
                <input type="text" name="name" id="signup-name" placeholder="Full Name">
                <span class="error-message" id="signup-name-error">Name is required</span>

                <input type="email" name="email" id="signup-email" placeholder="Email">
                <span class="error-message" id="signup-email-error">Enter a valid email</span>

                <input type="password" name="password" id="signup-password" placeholder="Password">
                <span class="error-message" id="signup-password-error">Password must be at least 6 characters</span>

                <input type="password" name="confirmpassword" id="signup-confirm-password" placeholder="Confirm Password">
                <span class="error-message" id="signup-confirm-password-error">Passwords do not match</span>
            </div>
            <button type="submit" name="signup" class="button">Sign Up</button>
        </form>

        <div class="switch-form">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>

    <script>
        document.getElementById('signup-form').addEventListener('submit', function (e) {
            let isValid = true;

            let name = document.getElementById('signup-name').value.trim();
            let email = document.getElementById('signup-email').value.trim();
            let password = document.getElementById('signup-password').value;
            let confirmPassword = document.getElementById('signup-confirm-password').value;

            // Reset error messages
            document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');

            if (name === "") {
                document.getElementById('signup-name-error').style.display = 'block';
                isValid = false;
            }

            if (!/\S+@\S+\.\S+/.test(email)) {
                document.getElementById('signup-email-error').style.display = 'block';
                isValid = false;
            }

            if (password.length < 6) {
                document.getElementById('signup-password-error').style.display = 'block';
                isValid = false;
            }

            if (password !== confirmPassword) {
                document.getElementById('signup-confirm-password-error').style.display = 'block';
                isValid = false;
            }

            if (!isValid) e.preventDefault();
        });
    </script>

</body>

</html>
