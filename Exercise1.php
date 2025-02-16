<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="array">
        <?php
        // array of weather conditions 
        $weatherConditions = [
            "rain",
            "sunshine",
            "clouds",
            "hail",
            "sleet",
            "snow",
            "wind"
        ];
        
        // print the title
        echo "<h2 class='title'>A Glimpse of Every Season</h2>";

        // print the statement
        echo "<p class='statement'>
            \"We've seen all kinds of weather this month. <br> 
            At the beginning of the month, we had {$weatherConditions[5]} and {$weatherConditions[6]}. <br> 
            Then came {$weatherConditions[1]} with a few {$weatherConditions[2]} and some {$weatherConditions[0]}. <br> 
            At least we didn't get any {$weatherConditions[3]} or {$weatherConditions[4]}.\"</p>";
        ?>
    </div>
</body>
</html>
