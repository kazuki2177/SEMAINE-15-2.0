<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->
<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucle</title> <!-- apparaît dans l'onglet du navigateur et dans moteur de recherche-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<html>
<body>
    <?php
function calculator($nb1,$nb2,$op){
    if (($op != "/") and ($op != "*") and ($op != "-") and ($op != "+")){
        echo "Opérateur incorrect";
    }
    else if($op == "/"){
        $resultat = $nb1 / $nb2;
        echo "Le résultat de ".$nb1." / ".$nb2." est : ".$resultat;
    }
    else if($op == "+"){
        $resultat = $nb1 + $nb2;
        echo "Le résultat de ".$nb1." + ".$nb2."  est : ".$resultat;
    }
    else if($op == "-"){
        $resultat = $nb1 - $nb2;
        echo "Le résultat de ".$nb1." - ".$nb2." est : ".$resultat;
    }
    else if($op == "*"){
        $resultat = $nb1 * $nb2;
        echo "Le résultat de ".$nb1." * ".$nb2." est : ".$resultat;
    }
}
calculator(8,2,"/");
echo "<br>";
calculator(8,2,"+");
echo "<br>";
calculator(8,2,"-");
echo "<br>";
calculator(8,2,"*");
echo "<br>";
calculator(8,2,";");

    ?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>