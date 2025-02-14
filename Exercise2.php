<!DOCTYPE html> 
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="array">
        <p class="statement">
            <?php
                // Initial array of cities
                $cities = [
                    "Tokyo", 
                    "Mexico City", 
                    "New York City", 
                    "Mumbai",
                    "Seoul", 
                    "Shanghai", 
                    "Lagos", 
                    "Buenos Aires",
                    "Cairo", 
                    "London"
                ];

                // Function to print large cities separated with comma 
                function printCities($array) {
                    $last = end($array); 
                    foreach ($array as $city) {
                        echo ($city === $last) ? $city : "$city, ";
                    }
                }

                // Function to sort large cities
                function sortCities(&$array) { 
                    sort($array);
                }

                // Function to print large cities as an unordered list
                function printUnorderedList($array) {
                    echo "<ul>";
                    foreach ($array as $city) {
                        echo "<li>$city</li>";
                    }
                    echo "</ul>";
                }

                // Print original large cities
                printCities($cities);
            ?>
        </p>

        <h3 class="title">Sorted Large Cities</h3>
        <div class="statement">
            <?php
                sortCities($cities);
                //print large cities as an unordered list
                printUnorderedList($cities);
            ?>
        </div>

        <h3 class="title">Sorted With New Added Large Cities</h3>
        <div class="statement">
            <?php
                // Add more large cities
                array_push($cities, 
                            "Los Angeles", 
                            "Calcutta", 
                            "Osaka", 
                            "Beijing"
                );

                // Sort again and print updated list of large cities
                sortCities($cities);
                printUnorderedList($cities);
            ?>
        </div>
    </div>
</body>

</html>
