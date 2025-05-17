<?php
    function displayTasks(array $day, array $tasks){
       echo '<div class="cards">';
       foreach ($days as $day){
        echo '<div class"card" onclick="toggleTasks(\'' . $day . '\')">';
        echo "<h2 $day</h2>";
        echo '<ul id="' . $day . '"class="task-list hidden">';
        
        foreach ($tasks[$day] as $task){
            echo "<li>$task</li>";
        }
        echo '</ul>';
        echo '</div>';
       }
       echo '</div>';
    }
?>