<?php

if(session_status() === PHP_SESSION_NONE) session_start();
$_SESSION['mystere'] = [
    'Yavuz' => ['nom'=> 'Yavuz KUTUK',
                'image' => 'http://www.alsaseo.fr/wp-content/uploads/2012/06/yavuz.jpg',
                'description' => "Formateur à la Wild code school, il code, décode et recode. 
                Son alimentation est composée de 2 ingrédients et combinable à l’infini: thon, pesto et pesto-thon. 
                Attention il faut se méfier de son rire démoniaque.
                Avec ce personage tes chances de trouver un oeuf tombent à néant et sont remplacées par une forte 
                probabilité de trouver de la saucisse turque"],
    'Gilles' => ['nom'=> 'Gilles Samuel DOUBTFIRE',
                'image' => 'https://images.wizbii.com/profile/gilles-samuel/avatar/large@2x',
                'description' => "Grand mestre du chateau de la Wild il chapote ses brebis codeuses.
                Il est également surnommé le grand patron du saint nettoyage ! Tes chances de trouver 
                un oeuf sont corrélées au nombres d’affaires que tu as laissé trainer"],
    'Luc' => ['nom'=> 'Luc SKYHUETWALKER',
                'image' => 'https://s3.eu-central-1.amazonaws.com//laprimaire/photos_citoyens/luc-huet.jpg',
                'description' => "Maitre Jedi du code aujourd’hui retraité, il a rendu son siege de l’académie 
                des Jedi. Expert en armement il était longtemps master de la balistique git atomique."]
];
?>