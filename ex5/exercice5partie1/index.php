<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice5</title>
    </head>
    <body>
        <?php
// on crée des variables et on les initialises a rien
        settype($test, 'int');
        $test = NULL;
        ?>
        <!-- on affiche le resultat-->
        <p>voici ma variable  <?= $test; ?></p>
        <?php
// on crée des variables et on les initialises a rien
        $test = 5;
        ?>
        <!-- on affiche le resultat-->
        <p>voici de nouveau ma variable  <?= $test; ?></p>  
    </body>
</html>



