<?php
session_start();

$_SESSION["Login"]="Mauro.Fadika2@afpa.fr";
$_SESSION["Motdepasse"]="afpa";

?>

<!DOCTYPE html>
<html lang="fr"> <!--indique la langue dans laquelle la page web est rédigéé aux robots de référencement ou aux logiciels de synthése vocale-->
<!--les balises de la partie head ne sont pas affichées à l'exeption de title-->
<head>
    <!--meta permet de fourni des indications différentes du contenu de la page web -->
    <meta charset="UTF-8"><!--permet de spécifier aux navigateurs l'encodage de la page web, il s'agit là de la valeur standard qui évite les pbs d'affichages des caractères spéciaux-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
    <title>Document Contact</title>
    <!--on importe Bootstrap via une URL pointant sur un CDN (un serveur externe hébergeant des fichiers) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <div class="container">
        <form name="formulaire" id="formulaire" method="post" action="verification.php">
            <div class="form-group">
                <label for="Login"><b>Login</b></label><input type="courriel" class="form-control" name="Login" id="Login"  placeholder="date.loper@afpa.fr">
                <label for="Motdepasse"><b>Mot de passe</b></label><input type="text" class="form-control" name="Motdepasse" id="Motdepasse">
            </div>
            <button class="btn btn-dark" type="submit" name="submit" value="1" required>Connexion</button>
        </form>
<br>
<br>
<?php
    if (isset ($_GET["erreur"])){
           echo "<h1 class='d-flex justify-content-center'>"."La connexion a échoué"."</h1>";
    }
        
?>
    </div>
</body>
</html>
