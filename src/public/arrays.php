<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arrays</title>
</head>

<body>
    <p>
    <h1>My Family</h1>
    <?php
    $family = ["Renaud", "Lucas", "Cookie", "Aroune", "Chacha"];
    print_r($family);
    ?>
    </p>
    <h1>My Recipes</h1>
    <p>
        <?php
        $recipes = ["Fondants au chocolat", "Crêpes", "Choux à la crème"];
        // var_dump($recipes);
        print_r($recipes);
        ?>
    </p>
    <h1>My Films</h1>
    <p>
        <?php
        $films = ["La Cité de la Peur", "Seven", "Grease"];
        echo $films[1];
        ?>
    </p>
    <!-- // Associative Array -->
    <h1> My Infos </h1>
    <p>
        <?php
        $me = array(
            'age' => 37,
            'favourite_season' => 'Winter',
            'like soccer' => true,
            // Multidimentionnal Array
            'favourite_movies' => array("La Cité de la Peur", "Seven", "Grease"),
            'hobbies' => array("Fitness", "Reading", "Spend Time With Family")
        );
        echo '<pre>';
        print_r($me);
        echo '</pre>';
        ?>
    </p>
    <h1> My Husband</h1>
    <p>
        <?php
        $myhusband = array(
            'age' => 31,
            'favourite_season' => 'Winter',
            'like soccer' => false,
            'favourite_movies' => array("OSS 117", "C'est arrivé près de chez vous", "Scary Movie"),
            'hobbies' => array("Play Videogames", "Spend Time With Family", "Golfing")
        );
        echo '<pre>';
        print_r($myhusband);
        echo '</pre>';
        ?>
    </p>
    <h1>Multidimensional Array</h1>
    <p>
        <?php
        // Assigning the mother array to a new key in $me array
        $me['myhusband'] = $myhusband;

        echo '<pre>';
        print_r($me);
        echo '</pre>';
        ?>
    </p>
    <h1>Manipulating arrays exercises</h1>
    <h2>Count the number of elements</h2>
    <p>
        <?php
        //Count 
        $count = count($myhusband);
        echo "Nombre d'éléments : " . $count;
        ?>
    </p>
    <h2>Count my hobbies</h2>
    <p>
        <?php
        // Calculate hobbies number of an array
        $numberOfHobbies = count($me['hobbies']);
        echo "Nombre de hobbies : " . $numberOfHobbies;
        ?>
    </p>
    <h2> Total Number of Hobbies</h1>
        <p>
            <?php
            // Calculate the total number of hobbies
            $totalHobbies = $count + $numberOfHobbies;
            echo "Total number of hobbies: " . $totalHobbies;
            ?>
        </p>
        <h2>Add an element in a multi-dimensional array</h2>
        <p>
            <?php
            $me['hobbies'][] = "Taxidermy";

            // Displaying the updated array
            echo '<pre>';
            print_r($me);
            echo '</pre>';
            ?>
        </p>
        <h2>Updating Data</h2>
        <p>
            <?php

            $me['favourite_season'] = 'Summer';

            // Displaying the updated array
            echo '<pre>';
            print_r($me);
            echo '</pre>';
            ?>
        </p>

        <h2>Create a new array from 2 others (or more)</h2>
        <p>
            <?php
            $mysoulmate = array(
                'age' => 31,
                'favourite_season' => 'Winter',
                'like soccer' => false,
                // Multidimentionnal Array
                'favourite_movies' => array("OSS 117", "C'est arrivé près de chez vous", "Scary Movie"),
                'hobbies' => array("Play Videogames", "Spend Time With Family", "Golfing")
            );
            echo '<pre>';
            print_r($mysoulmate);
            echo '</pre>';
            ?>
        </p>
        <h3>Intersection</h3>
        <p>
            <?php
            $result = array_intersect($me['hobbies'], $mysoulmate['hobbies']);

            print_r($result)
            ?>
        </p>
        <h3>Fusion</h3>
        <p>
            <?php
            $result = array_merge($me['hobbies'], $mysoulmate['hobbies']);
            print_r($result);
            ?>
        </p>
        <h2>More array exercises</h2>
        <p> TBC...</p>


        <a href="index.php">Back to menu</a>
</body>

</html>