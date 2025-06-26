<?php
// This is a basic PHP landing page (index.php)
// It can be used to verify that PHP is working and serve as a starter page.

// Define site name
$siteName = "Welcome to My Website";

// Get the current server time
$currentTime = date("Y-m-d H:i:s");

// Server information (for testing purposes)
$phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($siteName) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            color: #333;
            padding: 40px;
            text-align: center;
        }
        .container {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            display: inline-block;
        }
        h1 {
            color: #007BFF;
        }
        .info {
            margin-top: 20px;
            font-size: 0.95em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($siteName) ?></h1>
        <p>The current server time is: <strong><?= $currentTime ?></strong></p>

        <div class="info">
            <p>PHP Version: <?= $phpVersion ?></p>
            <p>Server Software: <?= $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown' ?></p>
        </div>
    </div>
</body>
</html>
