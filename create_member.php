<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $membership_type = $_POST['membership_type'];

    $sql = "INSERT INTO members (name, email, phone, membership_type)
            VALUES ('$name', '$email', '$phone', '$membership_type')";

    if ($conn->query($sql) === TRUE) {
        echo "New member created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Member</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient background */
            color: #333;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        h1 {
            text-align: center;
            color: white;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        form {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="number"], input[type="submit"] {
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
        a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Add New Member</h1>

    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Phone: <input type="text" name="phone" required><br>
        Membership Type: <input type="text" name="membership_type" required><br>
        <input type="submit" value="Add Member">
    </form>

    <br>
    <a href="index.php">Back to Home</a>

</body>
</html>
