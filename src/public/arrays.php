<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arrays</title>
</head>

<body>
    <p>
        <?php
        $family = ["Renaud", "Lucas", "Cookie", "Aroune", "Chacha"];
        print_r($family);
        ?>
    </p>
    <p>
        <?php
        $recipes = ["Fondants au chocolat", "Crêpes", "Choux à la crème"];
        // var_dump($recipes);
        print_r($recipes);
        ?>
    <p>
        <?php
        $films = ["La Cité de la Peur", "Seven", "Grease"];
        echo $films[1];
        ?>
    </p>
    <!-- // Associative Array -->
    <p>
        <?php
        $me = array(
            'age' => 37,
            'season' => 'winter',
            'like soccer' => true,
        );
        print_r($me);
        //Ajout d'un élément dans une associative array
        $me['hobby'] = "fitness"; // Ajoute le nouvel élément avec la clé 'hobby' et la valeur "fitness"
        print_r($me);
        ?>
    </p>
    <a href="index.php">Back to menu</a>
</body>

</html>