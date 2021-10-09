<!-- TEST SEARCH by ID ///////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

    spl_autoload_register(function($classe){
        include "models/" . $classe . ".class.php";
    });

    const RC = "<br />\n";
    //const RC = "\n";

    try {
        // Test if user EXIST
        $oUser = UserMgr::getUserById('USER01',PDO::FETCH_CLASS);
        var_dump($oUser);

        // Test user DOES NOT EXIST
        $oUser = UserMgr::getUserById('USER12',PDO::FETCH_CLASS);
        if ($oUser) {
            var_dump($oUser);
        } else {
            echo "Aucun utilisateur avec ce id" . RC;
        }

/**/
    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>

<!-- TEST SEARCH by NOM //////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

    spl_autoload_register(function($classe){
        include "models/" . $classe . ".class.php";
    });

    // const RC = "<br />\n";
    // //const RC = "\n";

    try {
        // Recherche avec des pilotes correspondant à 'l'
        $tUsers = UserMgr::getUsersByName('l',PDO::FETCH_CLASS);
        var_dump($tUsers);

        // Recherche avec aucun pilote correspondant à 'llll'
        $tUsers = UserMgr::getUsersByName('llll',PDO::FETCH_CLASS);
        if (!empty($tUsers)) {
            var_dump($tUsers);
        } else {
            echo "Aucun utilisateur avec pour nom 'llll'" . RC;
        }

/**/
    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>