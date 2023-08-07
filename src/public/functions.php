<!DOCTYPE html>
<html lang="en">

<head>
    <title>Functions</title>
</head>

<body>
    <h1>Transform a String</h1>
    <p>
        <?php
        $string = "This is going to be shuffled";
        $string = explode(' ', $string);

        foreach ($string as $word) {

            echo str_shuffle($word) . ' ';
        }
        ?>
    </p>
    <h1>Capitalize First Letter</h1>
    <p>
        <?php
        function capitalizeFirstLetter($str)
        {
            return ucfirst($str);
        }

        // Exemple d'utilisation de la fonction :
        $text = "let's capitalize first letter !";
        $capitalizedText = capitalizeFirstLetter($text);
        echo $capitalizedText; // Output: "Hello world"
        ?>
    </p>

    <h1>Display the Current Year</h1>
    <p>
        <?php
        $currentYear = date('Y');
        echo $currentYear;
        ?>
    </p>
    <h1>Display Date, Time, Minutes and Seconds</h1>
    <p>
        <?php
        $currentDateTime = date('Y-m-d H:i:s');
        echo $currentDateTime;
        ?>
    </p>
    <h1>SUM Function + Improve</h1>
    <p>
        <?php
        function sumWithNumericCheck($numbers)
        {
            $result = 0;
            foreach ($numbers as $number) {
                if (is_numeric($number)) {
                    $result += $number;
                } else {
                    return "Error: argument is not a number.";
                }
            }
            return $result;
        }
        // Using the sum function:
        $numbers = [1, 2, 't', 4, 5];
        $total = sumWithNumericCheck($numbers);
        echo $total;
        ?>
    <h1>String of character -> Acronym</h1>
    <p>
        <?php
        function createAcronym($str)
        {
            // Split the string into words
            $words = explode(' ', $str);

            // Initialize an empty string for the acronym
            $acronym = '';

            // Loop through the words and get the first character of each word
            foreach ($words as $word) {
                // Check if the word is not empty to avoid issues with extra spaces
                if (!empty(trim($word))) {
                    $acronym .= strtoupper(substr($word, 0, 1));
                }
            }

            return $acronym;
        }

        // Using the createAcronym function:
        $inputString = "In code we trust!";
        $result = createAcronym($inputString);
        echo $result;
        ?>
    </p>
    <h1>"a" & "e" -> "æ"</h1>
    <p>
        <?php
        function replaceAEWithAE($str)
        {
            $str = str_replace(['a', 'e'], 'æ', $str);
            return $str;
        }

        // Using the replaceAEWithAE function:
        $inputString = "microsphaera";
        $result = replaceAEWithAE($inputString);
        echo $result;
        ?>
    </p>
    <h1>"æ" -> "a" & "e"</h1>
    <p>
        <?php
        function replaceAEWithAEInverse($str)
        {
            $str = str_replace('æ', 'ae', $str);
            return $str;
        }

        // Using the replaceAEWithAEInverse function:
        $inputString = "microsphæra";
        $result = replaceAEWithAEInverse($inputString);
        echo $result;
        ?>
    </p>
    <a href="/index.php">Back to menu</a>
</body>

</html>