<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        ?>
        <script type="text/javascript">
            window.location="../../index.php";
        </script>
        <?php
    }
    include '../../inc/header.php';
    include '../../inc/connect.php';
    ?>
    <div class="home">
        <h1 id="adm"> ADMIN DASHBOARD </h1>
        <div class="container">
            <div class="content-dashboard">
                <div class="flex-container1">
                    <div class="user-box">
                        <a href="users-info.php">
                            <h1 id="user">USER</h1>
                            <?php
                            $select_rows = mysqli_query($conn, "SELECT * FROM `user`") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows);
                            ?>
                            <span style="font-size:20px;"><?php echo $row_count; ?></span>
                        </a>
                    </div>
                    <div class="books-box">
                        <a href="books.php">
                            <h1 id="books">LIST OF BOOKS</h1>
                            <?php
                            $select_rows = mysqli_query($conn, "SELECT * FROM `add-books`") or die('query failed');
                            $row_count = mysqli_num_rows($select_rows);
                            ?>
                            <span style="font-size:20px;"><?php echo $row_count; ?></span>
                        </a>
                    </div>
                    <div class="checkout-box">
                        <?php
                        $select_rows = mysqli_query($conn, "SELECT * FROM `user-order`") or die('query failed');
                        $row_count = mysqli_num_rows($select_rows);
                        ?>
                        <a href="checkout.php">
                            <h1 id="checkout">CHECKOUT</h1>
                            <span style="font-size:20px;"><?php echo $row_count; ?></span>
                        </a>
                    </div>
                    <div class="report-box">
                        <a href="reports.php">
                            <h1 id="report">REPORT</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>

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
#adm {
    padding: 20px;
    text-align: center;
    font-size: 2em;
}

/* Dashboard content styles */
.content-dashboard {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 20px;
}

.flex-container1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

/* Box styles */
.user-box,
.books-box,
.checkout-box,
.report-box {
    color: white;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    width: 200px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s;
}

.user-box {
    background-color: #007bff; /* Blue */
}

.books-box {
    background-color: #28a745; /* Green */
}

.checkout-box {
    background-color: #ffc107; /* Yellow */
}

.report-box {
    background-color: #dc3545; /* Red */
}

/* Box title styles */
#user,
#books,
#checkout,
#report {
    margin-top: 0;
    font-size: 1.5em;
}

/* Box count styles */
.user-box span,
.books-box span,
.checkout-box span {
    font-size: 1.2em;
}

    </style>
