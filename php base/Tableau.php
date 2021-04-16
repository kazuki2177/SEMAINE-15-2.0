/*<?php
$tab = array("a" => "Lundi",
             "b" => "Mardi",
             "c" => "Mercredi",
             "d" => "Jeudi",
             "e" => "Vendredi"
        ); 

asort($tab);  

foreach ($tab as $cle => $valeur) 
{ 
   echo $cle ." : ".$valeur."<br>"; 
}
echo "<br>";

arsort($tab);  

foreach ($tab as $key => $item) 
{ 
    echo $key ." : ".$item."<br>"; 
} 

?>
*/

<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->
<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title> <!-- apparaît dans l'onglet du navigateur et dans moteur de recherche-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
    <?php

    // EXERCICE 0
/*
    $tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
    array_push($tableau, "Vendredi"); //ajout en fin de tableau 
    var_dump($tableau);
    $jour = array_pop($tableau); //enlevé le dernier élement
    var_dump($tableau);
    array_unshift($tableau, "Lundi", "Mardi", "Mercredi"); //ajout en début de tableau
    var_dump($tableau);
    $jour = array_shift($tableau); //tableau devient tableau moins son premier element
    var_dump($tableau);
    var_dump(array_reverse($tableau)); //retourne mais ne modifie pas
    $bool = array_key_exists(1,$tableau); //verification de clé dans tableau, attention echo n'ecrit pas le bool si faux
    var_dump($bool);
*/
/*
    //fusion de deux tabeau
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
    $result = array_merge($array1, $array2);
    print_r($result);
      
    echo "<br>";
        //difference avec array_diff qui retourne tableau1 moins les valeurs présente dans les autres tableaux
    $array1 = array("a" => "green", "red", "blue", "red");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_diff($array1, $array2);
    print_r($result);

    echo "<br>";
       //intersection
    $array1 = array("a" => "green", "red", "blue");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_intersect($array1, $array2);
    print_r($result);

    echo "<br>";

     //Pour tableaux multidimentionnel, affichage d'une colonne spécifique avec array_column
    $records = array(
        array(
            'id' => 2135,
            'first_name' => 'John',
            'last_name' => 'Doe',
        ),
        array(
            'id' => 3245,
            'first_name' => 'Sally',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 5342,
            'first_name' => 'Jane',
            'last_name' => 'Jones',
        ),
        array(
            'id' => 5623,
            'first_name' => 'Peter',
            'last_name' => 'Doe',
        )
    );
     
    $first_names = array_column($records, 'first_name');
    print_r($first_names);

    echo "<br>";

    //extraction
    $input = array(1 => "a", "b", "c", "d", "e");
    print_r(array_slice($input, 1, 2));
    
    echo "<br>";
    
    //somme des élement
    $a = array(2, 4, 6, 8);
    echo "sum(a) = " . array_sum($a);

    echo "<br>";

    //dedoublage
    $input = array("a" => "green", "red", "b" => "green", "blue", "red");
    $result = array_unique($input);
    print_r($result);

    echo "<br>";

    //appartenance d'une valeur
    $os = array("Mac", "NT", "Irix", "Linux");
    if (in_array("Irix", $os)) {
        echo "Got Irix";
    }
    if (in_array("mac", $os)) {
    echo "Got mac";
    }

    echo "<br>";

    //array_values() retourne les valeurs du tableau array et l'indexe de façon numérique.
    $array = array("size" => "XL", "color" => "gold");
    print_r(array_values($array));

    echo "<br>";

    //mélange aléatoirement les élements d'un tableau

    $array1 = array("a" => "green", "red", "blue", "red");
    shuffle($array1);
    print_r($array1);
*/

$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
"19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
"19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
); 

    //EXERCICE 1  semaine a lieu la validation du groupe 19002
    $i = 0;
    while ($a["19002"][$i] != "Validation"){
        $i = $i + 1;
    }
    echo "La validation du groupe 19002 a eu lieu à la semaine : ",$i+1;

    echo "<br>";

    //EXERCICE 2
    for($i=0; $i < count($a["19001"]) - 1; $i=$i+1){
        if ($a["19001"][$i] == "Stage"){
            $position = $i + 1;
        }
    }
    echo "La position de la dernière occurence de Stage dans le groupe 19001 est : ".$position;
    
    echo "<br>";
    
    //EXERCICE 3 dans un nouveau tableau, les codes des groupes.
    foreach ($a as $cle => $value) {
            $groupe[] = $cle;       
        }
    print_r($groupe);

    echo "<br>";

    //Exercice 4
    $nbStage = 0;
    for($i=0; $i < count($a["19003"]) - 1; $i=$i+1){
        if ($a["19003"][$i] == "Stage"){
            $nbStage = $nbStage + 1;
        }
    }
    echo "Le nombre de semaine de stage du groupe 19003 est : ".$nbStage;


?>