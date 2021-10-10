<?php

    require_once('models/DbBDTK.class.php');
    require_once('models/User.class.php');

    class UserMgr {
        
        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * USERS LIST
         * @return array
         */
        public static function getUsersList() : array {

            $connexionPDD = DbBDTK::getConnexion();
            
            echo "CONNEXION REUSSIE" . RC;

            // Request: USERS LIST
            $sql = 'SELECT * FROM utilisateur ORDER BY utilisateur_id ASC';
            // echo $sql;
            
            // Prepare the request
            $resPDOstt = $connexionPDD->query($sql);
            // var_dump($resPDOstt); // TEST 

            // Odczytujemy wszystkie rezultaty/obiekty z tabeli 'Pilote'
            $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
            'User', array('utilisateur_id', 'utilisateur_mdp',
            'utilisateur_login', 'utilisateur_mail', 'utilisateur_nom',
            'utilisateur_prenom', 'utilisateur_adr_num_rue', 
            'utilisateur_adr_cp', 'utilisateur_tel', 'ville_id', 'role_id'));

            $records = $resPDOstt->fetchAll();

            // Displays the result
            // var_dump ($records); // TEST
            return $records;

        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * GET USER BY ID
         *
         * @param $id
         * @return void
         */
        public static function getUserById($id) {

            // CONNECTING TO THE SERVER
            $connexion = DbBDTK::getConnexion();
            echo "CONNEXION REUSSIE" . RC;

            // SEARCH BY ID where ID = ?
            $sql = 'SELECT * 
                    FROM utilisateur
                    WHERE utilisateur_id = ?
                    ORDER BY utilisateur_nom ASC';
            
            // Prepare the request
            $results = $connexion->prepare($sql);

            // Execute the request
            $results->execute(array($id));

            $results->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
            'User', array('utilisateur_id', 'utilisateur_mdp',
            'utilisateur_login', 'utilisateur_mail', 'utilisateur_nom',
            'utilisateur_prenom', 'utilisateur_adr_num_rue', 
            'utilisateur_adr_cp', 'utilisateur_tel', 'ville_id', 'role_id'));

            $datas = $results->fetchAll(); // get results
            if (empty($datas)) {
                echo "Utilisateur n'existe pas" . RC;
            } else {
                return $datas;
            }
            
        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * GET USERS BY NAME
         *
         * @param $nom
         * @return void
         */
        public static function getUsersByName($nom) {

            // CONNECTING TO THE SERVER
            $connexion = DbBDTK::getConnexion();
            echo "CONNEXION REUSSIE" . RC;

            // Search user by utilisateur_nom
            $sql = 'SELECT * 
                    FROM utilisateur
                    WHERE utilisateur_nom LIKE :userNom
                    ORDER BY utilisateur_nom ASC';
            
            // Prepare the request
            $results = $connexion->prepare($sql);

            // Execute the request
            $results->execute(array(':userNom'=>'%'.$nom.'%'));

            $results->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
            'User', array('utilisateur_id', 'utilisateur_mdp',
            'utilisateur_login', 'utilisateur_mail', 'utilisateur_nom',
            'utilisateur_prenom', 'utilisateur_adr_num_rue', 
            'utilisateur_adr_cp', 'utilisateur_tel', 'ville_id', 'role_id'));

            $datas = $results->fetchAll(); // get results

                if (empty($datas)) {
                    echo "Utilisateur n'existe pas" . RC;
                } else {
                    return $datas;
                }
        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

        /**
         * ADD NEW USER
         *
         * @param $user
         * @return void
         */
        public static function addUser($user) {
            // ŁĄCZENIE SIĘ Z SERWEREM
            $connexion = DbBDTK::getConnexion();
            echo "CONNEXION REUSSIE" . RC;

            $sql = "INSERT INTO utilisateur (utilisateur_id, utilisateur_mdp,
            utilisateur_login, utilisateur_mail, utilisateur_nom,
            utilisateur_prenom, utilisateur_adr_num_rue, 
            utilisateur_adr_cp, utilisateur_tel, ville_id, role_id) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $result = $connexion->prepare($sql);

            $result->execute(array($user->getID(), $user->getMDP(), $user->getLOGIN(),
                                   $user->getMAIL(), $user->getNOM(), $user->getPRENOM(),
                                   $user->getADR(), $user->getCP(), $user->getTEL(),
                                   $user->getVILLE(), $user->getROLE()));        

        }

        // ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// //

    }

?>