<?php
include('db.php');

$sql = "SELECT * FROM members";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Members</title>
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
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 8px;
        }
        table, th, td {
            border: 2px solid #fff;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ff7e5f;
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

    <h1>Members List</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Membership Type</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["membership_type"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No members found!";
    }
    ?>

    <br>
    <a href="index.php">Back to Home</a>

</body>
</html>
