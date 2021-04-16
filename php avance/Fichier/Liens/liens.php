<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Liens</title>
</head>
<body>

<div class="row d-flex justify-content-center">
    <h1>LISTES DE LIENS</h1>
</div>

<br>
<br>

    

<?php


$fp = fopen("ListeLiens.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); ?>
    <a class ="d-flex justify-content-center" href = "<?= $ligne;?>"><h3><b><?= $ligne;?></b></h3></a>
    <br>
    <br>

    
<?php
} 

?>

</body>
</html>