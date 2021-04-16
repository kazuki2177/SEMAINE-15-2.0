<?php

//Question 1

/*$my-var = "Hello World";
echo $my-var;*/
// réponse b. Un message d'erreur
//( ! ) Parse error: syntax error, unexpected 'var' (T_VAR) in C:\wamp\www\PHP bases\Exercice 2.php on line 3

//Question 2

$i = 10;
echo --$i; 
// réponse a. 9

echo"<br>";

//Question 3

// $_GET permet d'extraire des informations de l'url affichée

//Question 4

/*
$tab = {"Lapin", "Chat", "Chien", "Hamster", "Canari"}; 
var_dump($tab);*/
//Réponse d. Un message d'erreur dés la déclaration

//syntaxe correct
$tab  = array ("Lapin", "Chat", "Chien", "Hamster", "Canari"); 
var_dump($tab);
/*C:\wamp\www\PHP bases\Exercice 2.php:21:
array (size=5)
  0 => string 'Lapin' (length=5)
  1 => string 'Chat' (length=4)
  2 => string 'Chien' (length=5)
  3 => string 'Hamster' (length=7)
  4 => string 'Canari' (length=6)*/


echo"<br>";

//Question 5

$a = "1"; 
$b = "2hello world !";
echo $a+$b;  

//Réponse d. 3 et un message de type avertissement

echo"<br>";

//Question 6

$a = 'Dave Loper';
$b = 'Bonjour $a';
echo $b;

//Reponse b. Bonjour $a

echo"<br>";

//Question 7

$a = 2;
$a *= 2;
echo $a;

//Réponse b. 4

?>