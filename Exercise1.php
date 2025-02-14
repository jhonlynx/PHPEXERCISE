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
        $weather_conditions = [
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
            At the beginning of the month, we had {$weather_conditions[5]} and {$weather_conditions[6]}. <br> 
            Then came {$weather_conditions[1]} with a few {$weather_conditions[2]} and some {$weather_conditions[0]}. <br> 
            At least we didn't get any {$weather_conditions[3]} or {$weather_conditions[4]}.\"</p>";
        ?>
    </div>
</body>
</html>
