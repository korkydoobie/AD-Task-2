<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" href="assets/css/tasksPage.css">
</head>
    <body>
        <div class="container">
            <?php
            REQUIRE_ONCE BASE_PATH . '/handlers/data.handler.php';
            REQUIRE_ONCE BASE_PATH . '/utils/displayTasks.utils.php';

            displayTasks($days, $tasks);
            ?>
            
            <div id="task-display" class="task-display">
                <h2 id="selected-day">Select a day</h2>
                <ul id="selected-tasks"></ul>
            </div>
        </div>
        <a href="../index.php" class="logout-btn">Logout</a>
        <script src="/page/assets/js/script.js"></script>
    </body>
</html>
