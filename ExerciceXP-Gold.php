<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ExerciceXP-Gold</title>
</head>
<body>   
          <!-- ExerciceXP Gold 1 -->
         

        <?php 
           $taille = 'Exercice XP Gold';
           echo "La chaine de caractere à pour taille :" .strlen($taille). '<br>';
         ?>
        
         <!-- ExerciceXP Gold 2 -->
         
         <?php 
             $compter = 'Exercice XP Gold';
             echo "La variable compte comporte :"  .str_word_count($compter). ' mots <br>';
          ?>

           <!-- ExerciceXP Gold 3 -->
           <?php 
              $majuscul = 'cette phrase j\'affichera en majuscule .';
              echo strtoupper($majuscul);
            ?>
</body>
</html>