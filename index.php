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
        $rand_keys = array_rand($input, 2); //prends un élément du tableau au hasard
        
        
        echo '<table>';
        for($i = 1; $i < 17; $i++) {//pour i égale à 1 et jusqua i inférieur à 7 on a joute une ligne
            echo '<tr>'; //retour à la ligne
            for($j = 1; $j < 17; $j++) { //pareil mais on ajoute un élement et non pas une ligne
                shuffle($input);//mélange les élément de mon tableau
                echo '<td>';//définit une cellule de mon tableau
                echo $input[$rand_keys[0]] . "\n";//affiche un élement random du tableau
                echo '</td>';//ferme la cellule de mon tableau
            }
            echo '</tr>';//retour à la ligne 
        }
        echo '</table>';

    ?>

</body>
</html>