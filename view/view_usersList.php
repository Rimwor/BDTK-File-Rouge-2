<!-- THIS IS : USERS LIST - display of the users list -->
<?php 
            $tListe = "";
            foreach ($tLignes as  $ligne_num => $ligne) {
                $tab = explode(",",$ligne);
                $tListe .= "<li>" . " ID : " . $tab[0] . "</li>"
                         . "<li>" . " Mot de passe : " . $tab[1] . "</li>" 
                         . "<li>" . " Login : " . $tab[2] . "</li>" 
                         . "<li>" . " Mail : " . $tab[3] . "</li>"
                         . "<li>" . " Nom : " . $tab[4] . "</li>" 
                         . "<li>" . " Prenom : " . $tab[5] . "</li>" 
                         . "<li>" . " Adresse : " . $tab[6] . "</li>" 
                         . "<li>" . " Code Postal : " . $tab[7] . "</li>"
                         . "<li>" . " Tel : " . $tab[8] . "</li>"  
                         . "<li>" . " Ville ID : " . $tab[9] . "</li>" 
                         . "<li>" . " Role ID : " . $tab[10] . "</li>" . "<br />" ;
            } 
            if ($action == 'readUserOK' and count($tLignes) == 1) { 
                
                ?>
                    
                    <form action="controler_users.php" method="get">
                        <!-- CONTACT INFO -->
                    <input type="hidden" name="id" value="<?php echo $tab[0] ?>">
                    <input type="hidden" name="motpasse" value="<?php echo $tab[1] ?>">
                    <input type="hidden" name="login" value="<?php echo $tab[2] ?>">
                    <input type="hidden" name="mail" value="<?php echo $tab[3] ?>">
                    <input type="hidden" name="nom" value="<?php echo $tab[4] ?>">
                    <input type="hidden" name="prenom" value="<?php echo $tab[5] ?>">
                    <input type="hidden" name="adresse" value="<?php echo $tab[6] ?>">
                    <input type="hidden" name="codepostale" value="<?php echo $tab[7] ?>">
                    <input type="hidden" name="tel" value="<?php echo $tab[8] ?>">
                    <input type="hidden" name="idVille" value="<?php echo $tab[9] ?>">
                    <input type="hidden" name="role" value="<?php echo $tab[10] ?>">
                        
                        <br />
                        <?php echo $tListe; ?>
                        <!-- EDIT or DELETE contact -->
                        <input type="submit" name="action" value="édition">
                        <input type="submit" name="action" value="effacer">
                    </form>
    
                <?php } ?>
    
    <!-- CONTACT LIST PAGE -->
    <?php if ($action == 'listeUtilisateurs') { echo $tListe; } ?>