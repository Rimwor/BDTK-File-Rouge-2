<!-- THIS IS CONNECTION CLASS -->

<?php

    class Connect_bdtk { // Beata
        
        // PROPRIETES //////////////////////////////////////////////////////// //
        private static $connexion;

        // NO REQUIRED explicit constructor

        // FONCTIONS ///////////////////////////////////////////////////////// //
        /** .................................................................. //
         *  CONNECTION TO THE BDD
         *
         * @return void
         */
        private static function connect() {
            $params = 'params/params.ini';
            if (file_exists($params)) {
            $tParam = parse_ini_file($params,true);
            extract($tParam["connexion"]); // Extract génère automatiquement les variables

            $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
            
                $mysqlPDO = new PDO($dsn, $user, $password,
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            Connect_bdtk::$connexion = $mysqlPDO;
// echo "Connecté !";
            return Connect_bdtk::$connexion;
            }
            else echo "Fichier Params Introuvable";
        }

        /** .................................................................. //
         *  DISCONNECTING FROM THE BDD 
         *
         * @return void
         */
        public static function disconnect(){
            Connect_bdtk::$connexion = null;
        }

        /** .................................................................. //
         *  PATTERN SINGLETON 
         * 
         * @return void
         */
        public static function getConnexion() {
            if (Connect_bdtk::$connexion != null) {
                return Connect_bdtk::$connexion;
            } else {
                return Connect_bdtk::connect();
            }
        }
    }

?>

<!-- THIS IS CONNECTION CLASS -->