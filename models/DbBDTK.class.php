<?php

class DbBDTK { // Beata
	
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
        $file = 'param/parametres.ini';
        if (file_exists($file)) {
            $tParam = parse_ini_file($file,true);
            //var_dump($tParam);            
            extract($tParam['connection bdd']); // generate variables dynamically

            $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
            
            $mysqlPDO = new PDO($dsn, $user, $password,
                            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            DbBDTK::$connexion = $mysqlPDO;
            
            return DbBDTK::$connexion;
        } else {
            throw new Exception("ERR:Fichier de paramètre inconnu");
        }
	}

    /** .................................................................. //
     *  DISCONNECTING FROM THE BDD 
     *
     * @return void
     */
    public static function disconnect(){
        DbBDTK::$connexion = null;
    }

    /** .................................................................. //
     *  PATTERN SINGLETON 
     * 
     * @return void
     */
    public static function getConnexion() {
        if (DbBDTK::$connexion != null) {
            return DbBDTK::$connexion;
        } else {
            return DbBDTK::connect();
        }
    }
}

?>