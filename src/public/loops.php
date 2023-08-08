<!DOCTYPE html>
<html lang="en">

<head>
    <title>Loops</title>
</head>

<body>
    <h1>Pronouns</h1>
    <p>
        <?php
        $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

        foreach ($pronouns as $pronoun) {
            if ($pronoun == 'He/She') {
                $verb = 'codes';
            } else {
                $verb = 'code';
            }
            echo "$pronoun $verb <br>";
        }
        ?>
    </p>
    <h1>While loop</h1>
    <p>
        <?php
        $numbers = 1;

        while ($numbers <= 120) {
            echo $numbers . " ";
            $numbers++;
        }
        ?>
    </p>
    <p>
    <h1>For Loop</h1>
    <?php
    $numbers = 1;
    for ($numbers = 1; $numbers <= 100; $numbers++) {
        echo $numbers . " ";
    }
    ?>
    </p>
    <h1>Promo names</h1>
    <?php
    $names = array(
        "Jérôme",
        "Adeline",
        "Camille",
        "Cedric",
        "Ilias",
        "Jason",
        "Manon",
        "Nathan",
        "Marius",
        "Pauline",
        "Rui",
        "Sam",
        "Steeve",
        "Tim",
        "Youssef",
        "Corentin",
        "Sarah",
        "Clara",
        "Lucie",
        "Abdoulaye",
        "Nicolas",
        "Pietro",
        "Robin",
        "Ozlem"
    );
    foreach ($names as $name) {
        echo $name . "<br>";
    }
    ?>
    </p>
    <h1>Countries Loop</h1>
    <p>
        <?php

        $countries = array(
            "none" => "Select a Country",
            "AL" => "Albania",
            "AD" => "Andorra",
            "AM" => "Armenia",
            "AT" => "Austria",
            "AZ" => "Azerbaijan",
            "BY" => "Belarus",
            "BE" => "Belgium",
            "BA" => "Bosnia and Herzegovina",
            "BG" => "Bulgaria",
            "HR" => "Croatia",
            "CY" => "Cyprus",
            "CZ" => "Czechia",
            "DK" => "Denmark",
            "EE" => "Estonia",
            "FI" => "Finland",
            "FR" => "France",
            "GE" => "Geoorgia",
            "DE" => "Germany",
            "GR" => "Greece",
            "HU" => "Hungary",
            "IS" => "Iceland",
            "IE" => "Ireland",
            "IT" => "Italy",
            "KZ" => "Kazakhstan",
            "LV" => "Latvia",
            "LI" => "Liechtenstein",
            "LT" => "Lithuania",
            "LU" => "Luxembourg",
            "MT" => "Malta",
            "MD" => "Moldova",
            "MC" => "Monaco",
            "ME" => "Montenegro",
            "NL" => "Netherlands",
            "MK" => "North Macedonia",
            "NO" => "Norway",
            "PL" => "Poland",
            "PT" => "Portugal",
            "RO" => "Romania",
            "RU" => "Russia",
            "SM" => "San Marino",
            "RS" => "Serbia",
            "SK" => "Slovakia",
            "SI" => "Slovenia",
            "ES" => "Spain",
            "SE" => "Sweden",
            "CH" => "Switzerland",
            "TR" => "Turkey",
            "UA" => "Ukraine",
            "UK" => "United Kingdom",
            "VA" => "Vatican City"
        );
        ?>
    <form>
        <label for="country">Select Country:</label>
        <select name="country" id="country">
            <?php foreach ($countries as $country) { ?>
                <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
            <?php } ?>
        </select>
    </form>
    </p>
    <a href="/index.php">Back to menu</a>
</body>

</html>