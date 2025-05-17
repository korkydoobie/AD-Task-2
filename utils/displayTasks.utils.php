<?php
    function displayTasks($day, $taskPerDay){
        echo "<h2>$day's Tasks: </h2>";
        echo "<ul>";

        foreach($taskPerDay[$day] as [$task]){
            echo "<li> $task</li>";
        }
        echo "</ul>";
    }
?>