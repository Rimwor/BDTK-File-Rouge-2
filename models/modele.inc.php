<?php 

    // function getDataBaseConnetion() {
        
    // }
    /**
     * USER LIST : getting a full list of users
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

    function createUser($utilisateur_id, $utilisateur_mdp, $utilisateur_login, $utilisateur_mail, $utilisateur_nom,
                        $utilisateur_prenom, $utilisateur_adr_num_rue, $utilisateur_adr_cp, $utilisateur_tel, 
                        $ville_id, $role_id) {
        
    }

    function updateUser($utilisateur_id, $utilisateur_mdp, $utilisateur_login, $utilisateur_mail, $utilisateur_nom,
                        $utilisateur_prenom, $utilisateur_adr_num_rue, $utilisateur_adr_cp, $utilisateur_tel, 
                        $ville_id, $role_id) {
        
    }

    function deleteUser($utilisateur_id) {
        
    }

?>