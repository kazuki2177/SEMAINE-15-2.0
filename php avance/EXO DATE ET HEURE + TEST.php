<?php

$date = date("d/m/Y");
echo"Nous sommes le ".$date;

echo "<br>";


echo"Nous sommes le ".date("d/m/Y");

echo "<br>";

echo date("H:i:s");

echo "<br>";

$oDate = new DateTime();
var_dump($oDate);

echo "<br>";

$oDate = new DateTime("01-01-2021");
var_dump($oDate);

echo "<br>";

$macolonne_sql = "2021-11-16 11:26:51";
$oDate = new DateTime($macolonne_sql);
echo $oDate->format("d/m/Y H:\hi");

echo "<br>";

$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";

$date = "2021-13-32";
if (preg_match($datePattern, $date)) 
{
    echo "Date ".$date." valide"."<br>";
}
else 
{
    echo "Date ".$date." erronée"."<br>";
}

echo "<br>";
/*-----------------------------------------------------------------*/
$date = "04/14/2021";
var_dump(explode('/', $date));


list($dd, $mm, $yyyy) = explode('/', $date);

echo gettype($dd); // indique que $dd est une chaîne

*/ 
echo "<br>";
$dd = (int) $dd;
echo gettype($dd);

$mm = (int) $mm;
$yyyy = (int) $yyyy;

if (!checkdate($mm, $dd, $yyyy))
{         
    echo"Date ".$date." INCCORECT.";
}

/*---------------------------------------------------------------------*/

echo "<br>";

$dateTime = DateTime::createFromFormat('m/d/Y', $date);
var_dump($dateTime);

echo "<br>";

$errors = DateTime::getLastErrors();
var_dump($errors);

if (!empty($errors['warning_count'])) 
{
   echo "TOTO";
   return FALSE;
   
}

echo "<br>";

date_default_timezone_set("Europe/Paris");

$date = date("d/m/Y");
list($dd, $mm, $yyyy) = explode('/', $date);
$dd = (int) $dd;
$mm = (int) $mm;
$yyyy = (int) $yyyy;
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
//mktime($dd, $mm, $yyyy) =  en seconde écoulé
echo " date du jour : ".strftime('%A %d %B %Y',gmmktime($dd, $mm, $yyyy)). '<br>';



//Exercice 2 Trouvez le numéro de semaine de la date suivante

$oDate = new DateTime("14-07-2019");
echo "Le numéro de la semaine suivante de la date 14/07/2019 est : ".$oDate->format("W");

echo "<br>";

//Exercice 3 Combien reste-t-il de jours avant la fin de votre formation.

$today=new DateTime();
$fin = new DateTime("13-04-2021");
$interval =$fin->diff($today);
echo $interval->format('Il reste %a jours avant la fin de ma formation');

echo "<br>";
//Exercice 4 Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime().

$today=time();

$fin =date("M-d-Y", gmmktime(0, 0, 0, 5, 8, 2021));
//echo $fin;
//echo "<br>";
$fin=strtotime($fin);
//echo $fin;
echo "Il reste ".round((($fin-$today)/60/60/24),0)." jours avant la fin de ma formation";

echo "<br>";

//Exercice 5 Quelle sera la prochaine année bissextile ?


$annee = 2021;
while (!(date("m-d", strtotime("$annee-02-29")) == "02-29" )){
    $annee = $annee + 1;
}
echo "La prochaine année bissextile sera : ".$annee;

echo "<br>";

function est_bissextile($annee)
    {
        if  (date("m-d", strtotime("$annee-02-29")) == "02-29"){
            echo "L'année ".$annee." est bissextile";
            }
        else echo "L'année ".$annee." n'est pas bissextile";
    }
    
est_bissextile('2021'); 
echo "<br>";
est_bissextile('2022'); 
echo "<br>";
est_bissextile('2023'); 
echo "<br>";
est_bissextile('2024'); 
echo "<br>";

//Exercice 6 Montrez que la date du 17/17/2019 est erronée.


function date_correct($date){
    list($dd, $mm, $yyyy) = explode('/', $date);
    $dd = (int) $dd;
    $mm = (int) $mm;
    $yyyy = (int) $yyyy;

    if (checkdate($mm, $dd, $yyyy)){         
        echo "La date ".$date." est correct";
    }
    else {         
        echo "La date ".$date." est incorrect";
    }
}

date_correct("17/17/2019");

echo "<br>";

//Exercice 7 Affichez l'heure courante sous cette forme : 11h25

//Méthode 1
$date= new DateTime('',new DateTimeZone('Europe/Paris'));
echo "Il est : ".$date->format("H") ."h". $date->format("i");

echo "<br>";

//Méthode 2

echo "Il est : ".date("H:i");

//Exercice 8 Ajoutez 1 mois à la date courante
echo "<br>";
//1ere méthode
$date = new DateTime();
$diff1Month = new DateInterval('P31D');
$date->add($diff1Month);
echo "La date d'aujour'hui plus 1 mois est : ".$date->format('d-m-Y') . "\n";

echo "<br>";
//2éme méthode
echo "La date d'aujour'hui plus 1 mois est : ".date("d-m-Y", strtotime("+1 month"));

echo "<br>";

//3éme métode
$date = new DateTime();
$date->add(new DateInterval('P1M'));
echo "La date d'aujour'hui plus 1 mois est : ".$date->format('d-m-Y') . "\n";




?>


