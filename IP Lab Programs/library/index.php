<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f5f5f5; }
        h1 { color: #333; }
        .buttons { margin-top: 20px; }
        button { padding: 10px 20px; margin: 5px; border: none; background-color: #007bff; color: white; font-size: 16px; cursor: pointer; border-radius: 5px; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <h1>Welcome to the Library Management System</h1>
    <div class="buttons">
        <button onclick="window.location.href='login.php'">Login</button>
        <button onclick="window.location.href='register.php'">Register</button>
    </div>
</body>
</html>
