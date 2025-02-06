<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b); 
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
        .nav {
            text-align: center;
            margin-top: 20px;
        }
        .nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-size: 18px;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
        }
        .nav a:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .nav a i {
            margin-right: 8px; /* Space between icon and text */
        }
        form {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
            color: white;
            margin-top: 20px;
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

    <h1>Welcome to the Gym Management System</h1>

    <div class="nav">
        <!-- Add Font Awesome icon before the text -->
        <a href="create_member.php"><i class="fas fa-user-plus"></i>Add New Member</a>
        <a href="view_members.php">View Members</a>
        <a href="update_member.php">Update Member</a>
        <a href="delete_member.php">Delete Member</a>
    </div>

</body>
</html>
