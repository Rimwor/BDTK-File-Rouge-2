<?php 
            $tListe = "";
            foreach ($tLignes as  $ligne_num => $ligne) {
                $tab = explode(",",$ligne);
                $tListe .= "<li>" . "ID : " . $tab[0] . "</li>"
                         . "<li>" . " Mot de passe : " . $tab[1] . "</li>" 
                         . "<li>" . " Login : " . $tab[2] . "</li>" 
                         . "<li>" . " Mail : " . $tab[3] . "</li>"
                         . "<li>" . " Prenom : " . $tab[4] . "</li>" 
                         . "<li>" . " Nom : " . $tab[5] . "</li>" 
                         . "<li>" . " Adresse : " . $tab[6] . "</li>" 
                         . "<li>" . " Code Postal : " . $tab[7] . "</li>"
                         . "<li>" . " Tel : " . $tab[8] . "</li>"  
                         . "<li>" . " Ville ID : " . $tab[9] . "</li>" 
                         . "<li>" . " Role ID : " . $tab[10] . "</li>" . "<br />" ;
            } 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
            <?php echo $tListe; ?>
        </p>
    </body>
</html>