<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" href="assets/css/landingPage.css">
</head>
    <body>
        <div class="container">
            <?php
            REQUIRE_ONCE __DIR__ . '/handlers/data.handler.php';
            REQUIRE_ONCE __DIR__ . '/utils/displayTasks.utils.php';

            displayTasks($days, $tasks);
            ?>
            
            <div id="task-display" class="task-display">
                <h2 id="selected-day">Select a day</h2>
                <ul id="selected-tasks"></ul>
            </div>
        </div>
        <script src="assets/js/script.js"></script>
    </body>
</html>
