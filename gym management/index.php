<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
    background: url('ampew/fitness_logo.png') no-repeat center center;
    background-size: cover; 
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
        }
        .nav a:hover {
            background-color: rgba(0, 0, 0, 0.7);
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
<img src="image/fitness-gym-logo.png" alt="Gym Image" class="gym-image">


    <h1>Welcome to the Gym Management System</h1>

    <div class="nav">
        <a href="create_member.php">Add New Member</a>
        <a href="view_members.php">View Members</a>
        <a href="update_member.php">Update Member</a>
        <a href="delete_member.php">Delete Member</a>
    </div>

</body>
</html>
