<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
        }
        .navbar {
            background-color: #222;
            padding: 10px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 14px 20px;
            transition: 0.3s;
        }
        .navbar a:hover {
            background-color: #575757;
            border-radius: 5px;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 4px solid #007bff;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
        }
        .edit-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .edit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="member.php">Member</a>
        <a href="login.php">Login</a>
        <a href="profile.php">Profile</a>
    </div>
    
    <div class="container">
        <img src="img/480040024_1683764245886693_7827910820059445077_n.jpg" alt="Profile Picture" class="profile-img">
        <h2>John Doe</h2>
        <p><strong>Email:</strong> johndoe@example.com</p>
        <p><strong>Phone:</strong> +123 456 7890</p>
        <p><strong>Address:</strong> 123 Main Street, City, Country</p>
        <a href="login.php" class="edit-btn">Edit Profile</a>
    </div>
</body>
</html>
