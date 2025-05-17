<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" href="assets/css/landingPage.css">
</head>
    <body>
        <?php
        $username = "LeSunshine Gems";
        $password = "*********";
        ?>
        <div class="login-box">
            <div class="credential">
                <b>Username:</b> <?php echo $username; ?>
                <b>Password:</b> <?php echo $password; ?>
            </div>
            <div class="btn-container">
                <a href="/page/index.php" class="login-btn">Login</a>
            </div>
        </div>
    </body>
</html>
