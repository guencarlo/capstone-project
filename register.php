<?php
session_start();
require("Database.php"); // Ensure this file is included

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $contact_num = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Encrypt password

    if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($email) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $connection->prepare("INSERT INTO users (first_name, last_name, gender, contact_num, address, email, password) 
                                       VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $first_name, $last_name, $gender, $contact_num, $address, $email, $password);

        if ($stmt->execute()) {
            header("Location: login.php");
            die;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=places" async defer></script>
    <style>
        body {
            background: linear-gradient(to right,rgba(192, 125, 8, 0.67),rgb(164, 99, 2));
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            color: #343a40;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .btn-primary {
            background-color:rgb(23, 95, 172);
            border-color:rgb(193, 130, 14);
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color:rgb(218, 148, 8);
            border-color:rgb(149, 98, 11);
        }
        #map {
            height: 400px;
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
        .btn-google {
            background-color: #ffffff;
            color: #757575;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-google img {
            width: 20px;
            margin-right: 10px;
        }
        .btn-google:hover {
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">One Santa Rita Registration Form</h2>
        <form action="register.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="name">First Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" required>
                <small class="form-text text-muted">Only Gmail addresses are allowed.</small>
            </div>

            <div class="form-group">
                <label for="phone">Contact Number:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>

        <div class="text-center mt-3">
            <button class="btn btn-google btn-block" onclick="window.location.href='google_oauth_url_here'">
                <img src="picture/google-logo.png" alt="Google Logo">
                Sign Up with Google
            </button>
        </div>
    </div>
</body>
</html>
