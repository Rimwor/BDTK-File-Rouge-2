<!-- TEST CONNEXION : OK //////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
    $host = 'localhost';
    $port = 3306;
    $bdd = 'bdtk';
    $user = 'root';
    $password = '';

    $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
    try {
        $mysqlPDO = new PDO($dsn, $user, $password,
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // echo "CONNEXION réussie"; 
        // var_dump($mysqlPDO);                       
    } catch(PDOException $e) { 
        // en cas erreur on affiche un message et on arrete tout
        die('<h1>Erreur de connexion : </h1>' . $e->getMessage());
    }
?>

<!-- TEST CONNEXION : OK //////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- PROGRAMME WORKING EVEN WHEN THERE'S AN ERROR ....................................................................... --> 

<?php
    require_once('models/DbBDTK.class.php');

    const RC = "<br />\n";
    //const RC = "\n";

    try {
        $connexion = DbBDTK::getConnexion();
            //var_dump($connexion);
        // echo "CONNEXION REUSSIE" . RC;
    } catch (PDOException $e) {
    // echo $e->getMessage() . RC;
    // echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
    // echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>

<!-- TEST - USERS LIST : OK ///////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

    spl_autoload_register(function($classe){
        include "models/" . $classe . ".class.php";
    });

    // const RC = "<br />\n";
    //     //const RC = "\n";

    try {
            // Step 1 - Retrieves a PDO connection
            $file = 'param/parametres.ini';
            $tParam = parse_ini_file($file,true);
            extract($tParam['connection bdd']); // generate variables dynamically
            $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
                
            $connexionPDO = new PDO($dsn,$user,$password);
            // var_dump($connexion);
            // echo "CONNEXION REUSSIE" . RC;

            // Step 2 - Launches and retrieves the result of a query
            
            // Prepare the request: the list of Users
            $sql = 'SELECT * FROM utilisateur ORDER BY utilisateur_nom ASC';
            
            // Start the query
            $resPDOstt = $connexionPDO->query($sql);
                //var_dump($resPDOstt);

            // Read a result
                // $record = $resPDOstt->fetch();
                // echo $record['utilisateur_nom'];
                // echo $record[1];

            // Read all the PDOStatement cursor and return associative arrays
                // $records = $resPDOstt->fetchAll(PDO::FETCH_ASSOC);

            // Read all the cursor and return simple objects
                // $records = $resPDOstt->fetchAll(PDO::FETCH_OBJ);

            // Read all the cursor and return 'User' objects
            $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
                                    'User', array('utilisateur_id', 'utilisateur_mdp',
                                    'utilisateur_login', 'utilisateur_mail', 'utilisateur_nom',
                                    'utilisateur_prenom', 'utilisateur_adr_num_rue', 
                                    'utilisateur_adr_cp', 'utilisateur_tel', 'ville_id', 'role_id'));
            $records = $resPDOstt->fetchAll();

            // Etape 3 - Affiche le résultat
            // echo '1st User : ' . $records[0] . RC . RC;
            // echo 'List of users :';
            // var_dump($records);
        
        } catch (PDOException $e) {
        // echo $e->getMessage() . RC;
        // echo "ECHEC de CONNEXION à la BDD" . RC;
        } catch (Exception $e) {
        // echo $e->getMessage() . RC;
        }

    //echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>

<!-- TEST - USERS LIST : OK ///////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- FROM THE UserMgr CLASS ............................................................................................. -->
<?php

    spl_autoload_register(function($classe){
        include "models/" . $classe . ".class.php";
    });

    // const RC = "<br />\n";
    // //const RC = "\n";

    try {
        $tUsers = UserMgr::getUsersList(PDO::FETCH_CLASS);
        echo RC ."FROM THE UserMgr CLASS : " . RC;
        var_dump($tUsers);

/**/
    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>