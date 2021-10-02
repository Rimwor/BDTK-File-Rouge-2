<!-- THIS IS MODELE.INC.PHP with FUNCTIONS for USER CRUD -->
<?php 

    // function getDataBaseConnetion() {
    //     ...
    // }

    
    /**
     * 
     * USER LIST : getting a full list of users
     * Beata
     * 
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

    /**
     * 
     * USER CREATION
     * Beata
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
     * @param string $ville_id
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

    /**
     * USER SEARCH (User Read)
     * Beata
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
     * @param string $ville_id
     * @param string $role_id
     * @param string $file_name
     * @return void
     */
    function readUsers($utilisateur_id, $utilisateur_mdp, 
                       $utilisateur_login, $utilisateur_mail, 
                       $utilisateur_nom, $utilisateur_prenom,
                       $utilisateur_adr_num_rue, 
                       $utilisateur_adr_cp, $utilisateur_tel, 
                       $ville_id, $role_id, $file_name) {
        if (file_exists($file_name)) {
            $tSearch = array();
            $tab = getAllUsers($file_name);
            foreach ($tab as $user) {
                $tUser = explode(",", $user);
                if (   (empty($utilisateur_id) || stristr($tUser[0], $utilisateur_id))
                    && (empty($utilisateur_mdp) || stristr($tUser[1],  $utilisateur_mdp))
                    && (empty($utilisateur_login) || stristr($tUser[2], $utilisateur_login))
                    && (empty($utilisateur_mail) || stristr($tUser[3], $utilisateur_mail))
                    && (empty($utilisateur_nom) || stristr($tUser[4], $utilisateur_nom))
                    && (empty($utilisateur_prenom) || stristr($tUser[5], $utilisateur_prenom))
                    && (empty($utilisateur_adr_num_rue) || stristr($tUser[6], $utilisateur_adr_num_rue))
                    && (empty($utilisateur_adr_cp) || stristr($tUser[7], $utilisateur_adr_cp))
                    && (empty($utilisateur_tel) || stristr($tUser[8], $utilisateur_tel))
                    && (empty($ville_id) || stristr($tUser[9], $ville_id))
                    && (empty($role_id) || stristr($tUser[10], $role_id))
                )
                    $tSearch[] = $user;
            }
            return $tSearch;
        } else {
            die ("Le fichier " . $file_name . " n'existe pas !!");
        }
    }

    /**
     * USER DELETE
     * Beata
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
     * @param string $ville_id
     * @param string $role_id
     * @param string $file_name
     * @return void
     */
    function deleteUser(string $utilisateur_id, string $utilisateur_mdp, 
                        string $utilisateur_login, string $utilisateur_mail, 
                        string $utilisateur_nom, string $utilisateur_prenom,
                        string $utilisateur_adr_num_rue, 
                        string $utilisateur_adr_cp, string $utilisateur_tel, 
                        string $ville_id, string $role_id, string $file_name) : void {
        if (file_exists($file_name)) {
            $user = "\n" . $utilisateur_id . ","
            . $utilisateur_mdp . ",". $utilisateur_login . ","
            . $utilisateur_mail . "," . $utilisateur_nom . ","
            . $utilisateur_prenom . "," . $utilisateur_adr_num_rue . ","
            . $utilisateur_adr_cp . "," . $utilisateur_tel . ","
            . $ville_id . "," . $role_id;
            $tab = getAllUsers($file_name);
            $key = array_search($user, $tab);
            unset ($tab[$key]);

            file_put_contents($file_name, implode("\n", $tab));
        } else {
            die ("Le fichier " . $file_name . " n'existe pas !!");
        }
    }

    /**
     * USER EDIT (UPDATE)
     * Beata
     *
     * @param string $utilisateur_idOLD
     * @param string $utilisateur_mdpOLD
     * @param string $utilisateur_loginOLD
     * @param string $utilisateur_mailOLD
     * @param string $utilisateur_nomOLD
     * @param string $utilisateur_prenomOLD
     * @param string $utilisateur_adr_num_rueOLD
     * @param string $utilisateur_adr_cpOLD
     * @param string $utilisateur_telOLD
     * @param string $ville_idOLD
     * @param string $role_idOLD
     * @param string $utilisateur_idNEW
     * @param string $utilisateur_mdpNEW
     * @param string $utilisateur_loginNEW
     * @param string $utilisateur_mailNEW
     * @param string $utilisateur_nomNEW
     * @param string $utilisateur_prenomNEW
     * @param string $utilisateur_adr_num_rueNEW
     * @param string $utilisateur_adr_cpNEW
     * @param string $utilisateur_telNEW
     * @param string $ville_idNEW
     * @param string $role_idNEW
     * @param string $file_name
     * @return void
     */
    function updateUser($utilisateur_idOLD, $utilisateur_mdpOLD, 
                        $utilisateur_loginOLD, $utilisateur_mailOLD, 
                        $utilisateur_nomOLD, $utilisateur_prenomOLD,
                        $utilisateur_adr_num_rueOLD, 
                        $utilisateur_adr_cpOLD, $utilisateur_telOLD, 
                        $ville_idOLD, $role_idOLD, 
                        $utilisateur_idNEW, $utilisateur_mdpNEW, 
                        $utilisateur_loginNEW, $utilisateur_mailNEW, 
                        $utilisateur_nomNEW, $utilisateur_prenomNEW,
                        $utilisateur_adr_num_rueNEW, 
                        $utilisateur_adr_cpNEW, $utilisateur_telNEW, 
                        $ville_idNEW, $role_idNEW,
                        $file_name) {
        if (file_exists($file_name)) {
            $contenu = file_get_contents($file_name);
            $contactNEW = $utilisateur_idNEW . ","
                        . $utilisateur_mdpNEW . ",". $utilisateur_loginNEW . ","
                        . $utilisateur_mailNEW . "," . $utilisateur_nomNEW . ","
                        . $utilisateur_prenomNEW . "," . $utilisateur_adr_num_rueNEW . ","
                        . $utilisateur_adr_cpNEW . "," . $utilisateur_telNEW . ","
                        . $ville_idNEW . "," . $role_idNEW;
            $contactOLD = $utilisateur_idOLD . ","
                        . $utilisateur_mdpOLD . ",". $utilisateur_loginOLD . ","
                        . $utilisateur_mailOLD . "," . $utilisateur_nomOLD . ","
                        . $utilisateur_prenomOLD . "," . $utilisateur_adr_num_rueOLD . ","
                        . $utilisateur_adr_cpOLD . "," . $utilisateur_telOLD . ","
                        . $ville_idOLD . "," . $role_idOLD;
            $contenu = str_replace($contactOLD, $contactNEW, $contenu);
            file_put_contents($file_name, $contenu);
            } else {
                echo "ERREUR : src invalide ou n'existe pas.";
        }
    }

?>