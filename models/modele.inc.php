<?php 

    // function getDataBaseConnetion() {
        
    // }
    /**
     * 
     * USER LIST : getting a full list of users
     * 
     * Beata
     * @param string $file_name : users list
     * @return void
     */
    function getAllUsers($file_name) : array {
        $tLignes = [];
        // IF EXISTS TEST : EXISTS
        if (file_exists($file_name)) {
            $tLignes = file($file_name, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            return $tLignes;
        
        // IF EXISTS TEST : DOES NOT EXISTS
        } else {
            die ("Le fichier " . $file_name . " n'existe pas !!");
        }
    }

    function readUser($utilisateur_id) {
        
    }

    /**
     * 
     * USER CREATION
     *
     * @param string $utilisateur_id
     * @param string $utilisateur_mdp
     * @param string $utilisateur_login
     * @param string $utilisateur_mail
     * @param string $utilisateur_nom
     * @param string $utilisateur_prenom
     * @param string $utilisateur_adr_num_rue
     * @param string $utilisateur_adr_cp
     * @param string $utilisateur_tel
     * @param integer $ville_id
     * @param string $role_id
     * @param string $file_name
     * @return void
     */
    function createUser( $utilisateur_id, $utilisateur_mdp, 
                         $utilisateur_login, $utilisateur_mail, 
                         $utilisateur_nom, $utilisateur_prenom,
                         $utilisateur_adr_num_rue, 
                         $utilisateur_adr_cp, $utilisateur_tel, 
                         $ville_id,  $role_id, $file_name) : void {
        if (file_exists($file_name)) {
            $user = "\n" . $utilisateur_id . ","
            . $utilisateur_mdp . ",". $utilisateur_login . ","
            . $utilisateur_mail . "," . $utilisateur_nom . ","
            . $utilisateur_prenom . "," . $utilisateur_adr_num_rue . ","
            . $utilisateur_adr_cp . "," . $utilisateur_tel . ","
            . $ville_id . "," . $role_id;
            file_put_contents($file_name, $user, FILE_APPEND);
        } else {
            die ("Le fichier " . $file_name . " n'existe pas !!");
        }
    }

    function updateUser($utilisateur_id, $utilisateur_mdp, 
                        $utilisateur_login,$utilisateur_mail, 
                        $utilisateur_nom, $utilisateur_prenom,
                        $utilisateur_adr_num_rue, 
                        $utilisateur_adr_cp, $utilisateur_tel, 
                        $ville_id, $role_id, $file_name) {
        
    }

    function deleteUser($utilisateur_id) {
        
    }

?>