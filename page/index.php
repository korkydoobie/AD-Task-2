<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        <?php
        //declarations
        $tasks = ["Wake up", "Eat breakfast", "Study", "Eat lunch", "Play games", "Sleep"];

        echo "<h1>Today's Tasks: </h1>";
        echo "<ul>";

        //loop
        for($i=0; $i<count($tasks); $i++){
            echo "<li>".$tasks[$i]."</li>";
        }
        echo "</ul>";