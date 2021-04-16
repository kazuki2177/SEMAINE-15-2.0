<?php 

function parcourir($nomdossier){
if($dossier = opendir($nomdossier)){
    
    
        while(($fichier = readdir($dossier))){
            if ((is_dir ("$nomdossier"."/"."$fichier")) and ($fichier != ".") and  ($fichier != "..")){
               parcourir("$nomdossier"."/"."$fichier"); 
            }
            else {if (($fichier != ".") and  ($fichier != ".."))
                  echo "$nomdossier"."/"."$fichier"."</br>";}
        }
    
    }
    
else{
    echo "Dossier à parcourir inconnu";
    }
}
parcourir("../../jarditou");


?>