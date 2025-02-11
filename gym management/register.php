<?php
session_start();
include("config.php"); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Secure password

    // Check if username or email exists
    $check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        $error = "Username or Email already exists!";
    } else {
        // Insert new user
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            $_SESSION["user"] = $username;
            header("Location: index.php"); // Redirect after successful registration
            exit();
        } else {
            $error = "Registration failed, please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Gym Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('image/fitness-gym-logo.png') no-repeat center center;
            background-size: cover;
        }
        .register-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 10px;
            width: 200px;
            border: 2px solid #fff;
            border-radius: 5px;
        }
        input[type="submit"] {
            cursor: pointer;
            background-color: #ff7e5f;
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #feb47b;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
