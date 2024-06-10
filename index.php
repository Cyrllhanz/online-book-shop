<title> INDEX </title>
<?php  
include "inc/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-login.css">
    <title>Online Helmet Shop Login</title>
</head>

<style>

body {
    --background-color: #f0f0f0;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--background-color);
    font-family: var(--font-family);
    position: relative;
}

.container {
    --padding: 20px;
    padding: var(--padding);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    --max-width: 400px;
    --blur: 10px;
    max-width: var(--max-width);
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    backdrop-filter: blur(var(--blur));
    padding: 30px;
}

.border {
    --border-color: #dddddd;
    border: 1px solid var(--border-color);
    border-radius: 5px;
}

.shadow-lg {
    --shadow-color: rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 20px 0px var(--shadow-color);
}

.bg-white {
    --bg-color: #ffffff;
    background-color: var(--bg-color);
    padding: 20px;
    border-radius: 5px;
}

.form-label {
    font-weight: bold;
    color: #555555;
}

.form-control {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #dddddd;
    outline: none;
    background-color: transparent;
    transition: border-bottom-color 0.3s ease;
}

.form-control:focus {
    border-bottom-color: #007bff;
}

.btn-primary {
    --primary-color: #007bff;
    background-color: var(--primary-color);
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    border-radius: 23px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.text-white {
    --white-color: #ffffff;
    color: var(--white-color);
}

.text-center {
    text-align: center;
}

.container,
.form-container,
.bg-white,
.form-label,
.form-control,
.btn-primary,
.text-white {
    line-height: 1.6;
}

h1 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 30px;
    color: #007bff;
}




</style>

<body >
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border shadow-lg p-3 rounded bg-white" action="login-user.php" method="post" style="width: 400px;">
            <h1 >LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
            <?php } ?>
            <div class="mb-1">
                <label class="form-label">Select User Type:</label>
            </div>
            <select name="role" aria-label="Default select example" >
                <option selected value="admin">Admin</option>
                <option value="user">User</option>
                <br>
            </select>
            <div class="mb-3">
                <label for="username" class="form-label">User name</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>


            <button type="submit" class="btn btn-primary" >LOGIN</button>
        </form>
    </div>
</body>
</html>
