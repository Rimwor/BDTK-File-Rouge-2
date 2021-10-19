<!-- THIS IS MODELE with FUNCTIONS -->

<?php
        
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //
        
        /**
         * GET USERS LIST
         * Beata
         * @return array
         */
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
         * RECHERCHE
         * Beata
         * @param string $needle
         * @return void
         */
        function recherche($needle) {
                $listUsers = getListUsers();
        
                // var_dump($listeBDs);
                $tCibles = array();
                        foreach ($listUsers as $user) {
                        if (stristr($user, $needle) ) {
                            $tCibles[] = $user;
                        }
                    }
                    
                    return $tCibles;
        }
                
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        function ajoutUser($utilisateur_id, $utilisateur_mdp, $utilisateur_login,
                           $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
                           $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
                           $ville_id,$role_id) {
                $sql = "INSERT INTO utilisateur (utilisateur_id, utilisateur_mdp, utilisateur_login, utilisateur_mail,
                                                 utilisateur_nom, utilisateur_prenom, utilisateur_adr_num_rue,
                                                 utilisateur_adr_cp, utilisateur_tel, ville_id, role_id) 
                        VALUES (:id, :mdp, :login, :mail, :nom, :prenom, :adr, :cp, :tel, :ville, :role)";
                $connexion = Connect_bdtk::getConnexion();
                $ajout = $connexion->prepare($sql);
                $ajout->execute(array(':id'=>$utilisateur_id, 
                                      ':mdp'=>$utilisateur_mdp, 
                                      ':login'=>$utilisateur_login,
                                      ':mail'=>$utilisateur_mail,
                                      ':nom'=>$utilisateur_nom,
                                      ':prenom'=>$utilisateur_prenom,
                                      ':adr'=>$utilisateur_adr_num_rue,
                                      ':cp'=>$utilisateur_adr_cp,
                                      ':tel'=>$utilisateur_tel,
                                      ':ville'=>$ville_id,
                                      ':role'=>$role_id));
            }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

            function delUser($utilisateur_id) {
                $sql = "DELETE FROM utilisateur WHERE utilisateur_id = :id";
                $connexion = Connect_bdtk::getConnexion();
                $delUser = $connexion->prepare($sql);
                $delUser->execute(array(':id'=>$utilisateur_id));
            }
?>

<!-- THIS IS MODELE with FUNCTIONS -->
