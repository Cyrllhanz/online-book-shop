<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">
            window.location="../user-login.php";
        </script>
        <?php
    }
    include '../../inc/user-header.php';
    include '../../inc/connect.php';
    ?>
    <div class="container">
        <div class="header">
            <h1 class="title">WELCOME TO ONLINE BOOK SHOP</h1>
        </div>
        <div class="dashboard-buttons">
            <button class="dashboard-button profile" onclick="window.location='student-profile.php'">Profile</button>
            <button class="dashboard-button helmets" onclick="window.location='student-books.php'">View Books</button>
            
            <button class="dashboard-button reserve" onclick="window.location='student-request.php'">Reserve Book</button>
            
            <button class="dashboard-button buy" onclick="window.location='student-buy-books.php'">Buy Books</button>
            
            <button class="dashboard-button activity-log" onclick="window.location='activity-log.php'">Activity Log</button>
        </div>


        <div>
            
        </div>
    </div>
</body>
</html>




<style>
/* General styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header styles */
.header {
    background-color: #007bff;
    color: white;
    padding: 20px;
    text-align: center;
}

.title {
    margin: 0;
    font-size: 2em;
}

/* Button styles */
.dashboard-buttons {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    flex-wrap: wrap;
}

.dashboard-button {
    border: none;
    border-radius: 5px;
    padding: 15px 30px;
    margin: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 1.2em;
}

.profile {
    background-color: #007bff; /* blue */
    color: white;
}

.helmets {
    background-color: #28a745; /* green */
    color: white;
}

.reserve {
    background-color: #ffc107; /* yellow */
    color: white;
}

.buy {
    background-color: #dc3545; /* red */
    color: white;
}

.activity-log {
    background-color: purple;
    color: white;
}

.dashboard-button:hover {
    opacity: 0.8;
}



    </style>
