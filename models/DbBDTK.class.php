<?php

class DbBDTK { // Beata
	
    // PROPRIETES //////////////////////////////////////////////////////// //
	private static $connexion;

	// PAS BESOIN de constructeur explicite .............................. //

    // FONCTIONS ///////////////////////////////////////////////////////// //
    /** .................................................................. //
     * CONNEXION A LA BDD 
     *
     * @return void
     */
    private static function connect() {
        $file = 'param/parametres.ini';
        if (file_exists($file)) {
            $tParam = parse_ini_file($file,true);
            //var_dump($tParam);            

            extract($tParam['connection bdd']); // génère les variables dynamiquement

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
     * DECONNEXION DE LA BDD 
     *
     * @return void
     */
    public static function disconnect(){
        DbBDTK::$connexion = null;
    }

    /** .................................................................. //
     * PATTERN SINGLETON 
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