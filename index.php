<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" href="assets/css/landingPage.css">
</head>
    <body>
        <?php
        $username = "LeSunshine";
        $password = "*********";
        ?>
        <div class="login-box">
            <div class="credential">
                <b>Username:</b> <?php echo $username; ?>
                <b>Password:</b> <?php echo $password; ?>
            </div>
        </div>

        <a href="/page/index.php" class="login-btn">Login</a>
    </body>
</html>
