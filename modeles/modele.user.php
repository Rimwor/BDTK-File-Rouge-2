<!-- THIS IS MODELE with FUNCTIONS -->

<?php
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * NEW USER
         * Beata
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
         * @return void
         */
        function ajoutUser($utilisateur_mdp, $utilisateur_login,
                           $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
                           $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
                           $ville_id,$role_id) {
// var_dump($_REQUEST);
                try {
                        
                $sql = "INSERT INTO utilisateur (utilisateur_id, utilisateur_mdp, utilisateur_login, utilisateur_mail,
                                                 utilisateur_nom, utilisateur_prenom, utilisateur_adr_num_rue,
                                                 utilisateur_adr_cp, utilisateur_tel, ville_id, role_id) 
                        VALUES (fn_ajout_user(), :mdp, :login, :mail, :nom, :prenom, :adr, :cp, :tel, :ville, :role)";
                $connexion = Connect_bdtk::getConnexion();
                $ajout = $connexion->prepare($sql);

                        $ajout->execute(array(
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
                                      return true;
                } catch (PDOException $e) {
                        $e->getMessage();
                        return false;
                } 
                                
            }
            
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
                    
                    if(count($tCibles) === 0) {
                            echo "";
                    }
                    return $tCibles;
        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * MODIFY A USER
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
         * @return void
         */
        function modifyUser($utilisateur_id, $utilisateur_mdp, $utilisateur_login,
                            $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
                            $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
                            $ville_id,$role_id) {
        try {
                $sql = "UPDATE utilisateur SET `utilisateur_mdp` = :mdp,
                                        `utilisateur_login` = :login, `utilisateur_mail` = :mail,
                                        `utilisateur_nom` = :nom, `utilisateur_prenom` = :prenom,
                                        `utilisateur_adr_num_rue` = :adr, `utilisateur_adr_cp` = :cp,
                                        `utilisateur_tel` = :tel, `ville_id` = :ville, `role_id` = :role 
                                        WHERE `utilisateur_id` = :id";
                $connexion = Connect_bdtk::getConnexion();
                $maj = $connexion->prepare($sql);
                $maj->execute(array(':id'=>$utilisateur_id, 
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

                                return true;
        } catch (PDOException $e) {
                $e->getMessage();
                return false;
        }
                
        
                            
        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //
        
        /**
         * DELETE USER
         * Beata
         * @param string $utilisateur_id
         * @return void
         */
        function delUser($utilisateur_id) {
                try {
                        $sql = "DELETE FROM utilisateur WHERE utilisateur_id = :id";
                        $connexion = Connect_bdtk::getConnexion();
                        $delUser = $connexion->prepare($sql);
                        $delUser->execute(array(':id'=>$utilisateur_id));
                        return true;        
                } catch (PDOException $e) {
                        $e->getMessage();
                        return false;
                }
        
        }

?>

<!-- THIS IS MODELE with FUNCTIONS -->
