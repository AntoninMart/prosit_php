<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
      <!--https://openclassrooms.com/forum/sujet/fonction-php-pour-generer-un-tableau-html-->  
    <?php
        $input = array("😊", "🌚", "🚚", "🏴‍☠️", "🌞"); //création d'un tableau
        $rand_keys = array_rand($input, 2);
        
        
        echo '<table>';
        for($i = 1; $i < 17; $i++) {
            echo '<tr>';
            for($j = 1; $j < 17; $j++) {
                shuffle($input);
                echo '<td>';
                echo $input[$rand_keys[0]] . "\n";
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';

    ?>

</body>
</html>