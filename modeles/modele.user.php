<!-- THIS IS MODELE with FUNCTIONS -->

<?php
        
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //
        
        function getListUsers(): array {
                $connexion = Connect_bdtk::getConnexion();
                $results = $connexion->query("SELECT * FROM utilisateur");
                $results->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                "User", array('utilisateur_id', 'utilisateur_mdp',
                'utilisateur_login', 'utilisateur_mail', 'utilisateur_nom',
                'utilisateur_prenom', 'utilisateur_adr_num_rue', 
                'utilisateur_adr_cp', 'utilisateur_tel', 'ville_id', 'role_id'));
                $resultats = $results->fetchAll();
        // var_dump($resultats);
                $results->closeCursor();
                Connect_bdtk::disconnect();
        // var_dump($resultats);
                return $resultats;
                }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * GET USER BY ID
         */

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * GET USERS BY NAME
         */

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * ADD NEW USER
         */

?>

<!-- THIS IS MODELE with FUNCTIONS -->
