<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>UwU php</title>
</head>
<body>
      <!--https://openclassrooms.com/forum/sujet/fonction-php-pour-generer-un-tableau-html-->  
    <header>
        <h1>(*/ω＼*) Base PHP ╰(*°▽°*)╯</h1>
    </header>

<!--https://graphiste.com/blog/animations-css-bordures-->    
    <section>
  <div class="container">
    
      <div class="box">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="content">
           <?php
        $input = array('&#128512', "&#128507", "&#128588", "&#128509", "&#128510", "&#128511", "🖤"); //création d'un tableau
        $rand_keys = array_rand($input, 6); //8 représente le nb d'entré choisis en loccurence on prends un élément random sur tout notre tableau
        
        //var_dump($rand_keys);
        
        echo '<table>';
        for($i = 1; $i < 10; $i++) {//pour i égale à 1 et jusqua i inférieur à 7 on a joute une ligne
            echo '<tr>'; //retour à la ligne
            for($j = 1; $j < 10; $j++) { //pareil mais on ajoute un élement et non pas une ligne
                shuffle($input);//mélange les élément de mon tableau
                echo '<td>';//définit une cellule de mon tableau
                echo $input[$rand_keys[0]] . "\n";//affiche un élement random du tableau
                echo '</td>';//ferme la cellule de mon tableau
            }
            echo '</tr>';//retour à la ligne 
        }
        echo '</table>';

    ?>
        
      </div>
    
  </div>
</section>
   

    <footer>
        <a href="http://localhost:3000/mention-legale.html">🌸 mention légale 🌸</a>
    </footer>
    

</body>
</html>