<title> Report</title> 
<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}
.home {
    text-align: center;
}

.content-dashboard {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

.flex-row {
    flex: 1;
    margin: 20px;
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.flex-row a {
    text-decoration: none;
    color: inherit;
}

.report-heading {
    width: 100%; /* Ensures full width of the container */
    text-align: center; /* Centers the text horizontally */
    font-size: 35px;
}

h1 {
    margin-bottom: 10px;
    font-size: 24px;
}

span {
    font-size: 20px;
}

/* Menu Button */
#menu-btn {
    margin-top: 10px;
    cursor: pointer;
}

/* Message */
.message {
    background-color: #ffc107;
    color: #333;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 5px;
    position: relative;
}

.message span {
    margin-right: 10px;
}

.message i {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
}
.button-container {
    position: absolute;
    top: 20px; /* Adjust this value to set the distance from the top */
    left: 20px; /* Adjust this value to set the distance from the left */
}
    </style>



<?php
session_start();
if (!isset($_SESSION["username"])) {
    ?>
        <script type="text/javascript">
            window.location="../../login.php";
        </script>
    <?php
}
    include '../../inc/header.php';
    include '../../inc/connect.php';
?>
<div class="home">
    <div class="container">
        <div class="content-dashboard">
        <h1 class="report-heading">REPORT</h1>
            <div class="flex-container1">

            <div class="button-container">
    <a href="dashboard.php" class="button">Back to Dashboard</a>
</div>


                <div class="flex-row">
                    <a href="user-report.php">
                    <h1>USER</h1>
                    <?php
      
                            $select_rows = mysqli_query($conn, "SELECT * FROM `user`") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows);

                            ?>

                            <span style="font-size:20px;"><?php echo $row_count; ?></span>

                            <div id="menu-btn" class="fas fa-bars"></div><br>
                        <?php

                        if(isset($message)){
                        foreach($message as $message){
                            echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
                        };
                        };

                    ?>
                    </a>
                </div>
                <div class="flex-row">
                <a href="book-report.php">
                    <h1>BOOKS</h1>
                    <?php
      
                            $select_rows = mysqli_query($conn, "SELECT * FROM `add-books`") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows);

                            ?>

                            <span style="font-size:20px;"><?php echo $row_count; ?></span>

                            <div id="menu-btn" class="fas fa-bars"></div><br>
                        <?php

                        if(isset($message)){
                        foreach($message as $message){
                            echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
                        };
                        };

                    ?>
                    </a>
                </div>
                <div class="flex-row">
                <?php
                    $select_rows = mysqli_query($conn, "SELECT * FROM `user-order`") or die('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                ?>

                 
                <a href="sales-report.php">
                    <h1>SALES</h1>
                    <span style="font-size:20px;"><?php echo $row_count; ?></span>
                    </a>
                </div>
        </div>
    </div>
</div>