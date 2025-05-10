<!DOCTYPE html>
<html>
<head>
    <title>Activity</title>
    <link rel="stylesheet" href="assets/css/landingPage.css">
</head>
    <body>
        <?php
        #Declarations
        $name = "Kirk";
        $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

        echo "<h1>Welcome, $name!</h1>";
        echo "<p>Here is your weekly routine: </p>";

        //loops
        for($i=0; $i<count($days); $i++){
            $day = $days[$i];
            echo "<div class = day-box>";
            echo "<b>$day: </b>";

            //conditions
            if($day == "Saturday" || $day == "Sunday"){
                echo "Rest day!";
            }
            else{
                echo "Attend your class!";
            }

            echo "</div>";
        }
        ?>
        <a href="page/index.php" class="button">View Tasks for Today</a>
    </body>
</html>
