<?php
session_start();
include("config.php"); // Connect to database

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fetch user from database
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["user"] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gym Management</title>
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
        .login-container {
            background: rgba(204, 10, 10, 0.7);
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            margin-bottom: 10px;
            padding: 10px;
            width: 200px;
            border: 2px solid #fff;
            border-radius: 5px;
        }
        input[type="submit"] {
            cursor: pointer;
            background-color:rgb(14, 225, 240);
            color: white;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #feb47b;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>

    </div>
</body>
</html>
