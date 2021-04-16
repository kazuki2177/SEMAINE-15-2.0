
<?php 

session_start();
$log=$_POST['Login'];
$password =$_POST['Motdepasse'];
echo $log;
echo $password;


if( $log == $_SESSION['Login'] && $password == $_SESSION['Motdepasse']){
    header('Location:secret.php');
    exit;
    }
else{header('Location:formulaire.php?erreur=1');
    exit;
}


?>

