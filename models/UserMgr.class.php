<?php
    require_once('models/DbBDTK.class.php');
    require_once('models/User.class.php');

    class UserMgr { // Beata
        
        // PROPRIETES //////////////////////////////////////////////////////// //
	    private $connexionPDO;

	    // PAS BESOIN de constructeur explicite .............................. //

        // FONCTIONS ///////////////////////////////////////////////////////// //

        /** ....................................................................................................................... //
         * GET USERS LIST
         *
         * @param array $choix
         * @return array
         */
        public static function getListUsers($choix = PDO::FETCH_ASSOC) : array {

            $connexionPDO = DbBDTK::getConnexion();
            var_dump($connexionPDO);
            // echo "CONNEXION REUSSIE" . RC;
            
            // Request: USERS LIST
            $sql = 'SELECT * FROM utilisateur ORDER BY utilisateur_id ASC';
            // echo $sql; 

            // Start the request
            $resPDOstt = $connexionPDO->query($sql);
            //var_dump($resPDOstt);

            // Define FETCH MODE
            switch($choix) {
                case PDO::FETCH_ASSOC:
                    $resPDOstt->setFetchMode(PDO::FETCH_ASSOC);
                    break;
                case PDO::FETCH_NUM:
                    $resPDOstt->setFetchMode(PDO::FETCH_NUM);
                    break;
                case PDO::FETCH_CLASS:
                    $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    'User', array (
                    'utilisateur_id', 'utilisateur_mdp', 'utilisateur_login',
                    'utilisateur_mail', 'utilisateur_nom', 'utilisateur_prenom',
                    'utilisateur_adr_num_rue', 'utilisateur_adr_cp',
                    'utilisateur_tel', 'ville_id', 'role_id'));
                    break;
            }

            // Read a result 
            // $record = $resPDOstt->fetch();

            // echo $record['utilisateur_nom'];
            // echo $record[1];

            // Read all the cursor's PDOStatements
            $records = $resPDOstt->fetchAll();

            // Displays the result
            //var_dump($records);

            $resPDOstt->closeCursor();      // close the cursor 
            DbBDTK::disconnect();           // close the connection

            return $records;
        }
        
        /** ....................................................................................................................... //
         * GET USER BY ID
         *
         * @param $utilisateur_id
         * @param $choix
         * @return void
         */
        public static function getUserById($utilisateur_id, $choix = PDO::FETCH_ASSOC) {

            $sql = "SELECT * FROM utilisateur WHERE utilisateur_id = ?";

            $connexionPDO = DbBDTK::getConnexion();

            // Start the request
            $resPDOstt = $connexionPDO->prepare($sql);
            //var_dump($resPDOstt);

            $resPDOstt->execute(array($utilisateur_id));

            // Define FETCH MODE
            switch($choix) {
                case PDO::FETCH_ASSOC:
                    $resPDOstt->setFetchMode(PDO::FETCH_ASSOC);
                    break;
                case PDO::FETCH_NUM:
                    $resPDOstt->setFetchMode(PDO::FETCH_NUM);
                    break;
                case PDO::FETCH_CLASS:
                    $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    'User', array (
                    'utilisateur_id', 'utilisateur_mdp', 'utilisateur_login',
                    'utilisateur_mail', 'utilisateur_nom', 'utilisateur_prenom',
                    'utilisateur_adr_num_rue', 'utilisateur_adr_cp',
                    'utilisateur_tel', 'ville_id', 'role_id'));
                    break;
            }

            // Read the result
            $record = $resPDOstt->fetch();

            $resPDOstt->closeCursor();      // close the cursor 
            DbBDTK::disconnect();           // close the connection

            return $record;
        }

        /** ....................................................................................................................... //
         * GET USERS BY NAME
         *
         * @param $utilisateur_nom
         * @param $choix
         * @return void
         */
        public static function getUsersByName($utilisateur_nom, $choix = PDO::FETCH_ASSOC) {

            $sql = "SELECT * FROM utilisateur WHERE utilisateur_nom LIKE :nom";

            $connexionPDO = DbBDTK::getConnexion();
            
            // Start the request
            $resPDOstt = $connexionPDO->prepare($sql);
            //var_dump($resPDOstt);

            $resPDOstt->execute(array(':nom'=>'%'.$utilisateur_nom.'%'));

            // Define FETCH MODE
            switch($choix) {
                case PDO::FETCH_ASSOC:
                    $resPDOstt->setFetchMode(PDO::FETCH_ASSOC);
                    break;
                case PDO::FETCH_NUM:
                    $resPDOstt->setFetchMode(PDO::FETCH_NUM);
                    break;
                case PDO::FETCH_CLASS:
                    $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                    'User', array (
                    'utilisateur_id', 'utilisateur_mdp', 'utilisateur_login',
                    'utilisateur_mail', 'utilisateur_nom', 'utilisateur_prenom',
                    'utilisateur_adr_num_rue', 'utilisateur_adr_cp',
                    'utilisateur_tel', 'ville_id', 'role_id'));
                    break;
            }

            // Read the result
            $records = $resPDOstt->fetchAll();

            $resPDOstt->closeCursor();      // close the cursor 
            DbBDTK::disconnect();           // close the connection

            return $records;
        }
    }
?>