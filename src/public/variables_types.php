<!DOCTYPE html>
<html>

<head>
    <title>Variable Types</title>
</head>

<body>
    <?php
    $firstName = "Adeline";
    echo "<p>Hi! My name is " . $firstName . ".</p>";

    $age = 37;
    echo "<p>I am " . $age . " years old.</p>";

    $eyeColor = "blue";
    echo "<p>My eyes are " . $eyeColor . ".</p>";

    $familyMembers = array("Renaud", "Lucas", "Cookie", "Chacha", "Aroune");

    echo "<p>The first person in my family is " . $familyMembers[0] . ".</p>";

    $isHungry = true;
    if ($isHungry) {
        echo "<p>I am hungry.</p>";
    } else {
        echo "<p>I am not hungry.</p>";
    }
    ?>
    <a href="index.php">Back to menu</a>
</body>

</html>