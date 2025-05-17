<?php
    function displayTasks(array $days, array $tasks) {
    echo '<div class="cards">';
    foreach ($days as $day) {
        $safeDay = $day;
        echo '<div class="card">';
        echo '<h2>'.$safeDay.'</h2>';
        echo '<ul style="display:none">';
        foreach ($tasks[$day] as $task) {
            echo '<li>'.$task.'</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
    echo '</div>';
}
?>