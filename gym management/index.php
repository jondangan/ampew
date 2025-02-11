<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('image/wth.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            color: white;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            background: rgba(0, 0, 0, 0.7);
            padding: 15px 30px;
            border-radius: 10px;
            display: inline-block;
            color: #fff;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            gap: 15px;
        }

        .btn {
            background:rgb(45, 9, 247);
            color: white;
            font-size: 18px;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: #feb47b;
            transform: scale(1.1);
        }

        .logout {
            margin-top: 20px;
            font-size: 16px;
            color: #ff7e5f;
            text-decoration: none;
        }

        .logout:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1> GYM MANAGEMENT SYSTEM </h1>

    <div class="buttons">
        <a href="create_member.php" class="btn">Add New Member</a>
        <a href="view_members.php" class="btn">View Members</a>
        <a href="update_member.php" class="btn">Update Member</a>
        <a href="delete_member.php" class="btn">Delete Member</a>
    </div>

    <a href="logout.php" class="logout">Logout</a>
</body>
</html>
