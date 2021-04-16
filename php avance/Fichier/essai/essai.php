<?php
 

// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour l'AFPA\n";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "w"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp); 


// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour le monde\n";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 
fputs($fp, $myVar); 

// Fermeture du fichier  
fclose($fp);


// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 

echo basename("essai",".txt")."<br>";

echo dirname("Fichier/essai.txt", 1) ."<br>";


echo file_exists("essai.txt")."<br>";
echo file_exists("contact.txt")."<br>";

$file = "images";
if (is_dir ($file))
  {
  echo ("$file est un répertoire");
  }
else {
  echo ("$file n'est pas un répertoire");
  }

echo "<br>";

//Vérifiez si le nom de fichier spécifié est un fichier normal

$file = "essai.txt";
if(is_file($file)) {
  echo ("$file is a regular file");
} else {
  echo ("$file is not a regular file");
}

?>