<?php
    // TEST : 
    
    // AUTOLOAD REGISTER ========================================================================================= //
        spl_autoload_register(function($classe) {
            include "models/" . $classe . ".class.php";
        });

        const RC = "<br />\n";
        //const RC = "\n";

        try {

            $tUsers = UserMgr::getUsersList();
            // var_dump($tUsers);

            $newUser = new User('USER12','afpa','ah_08',
            'new@gmail.com','Dorota','Wroblewska',
            'Ul Topolowa 6','56120','0649473829',
            'VIL06','adher');

            echo RC . "'INSERT' NEW USER" . RC;
            $user = UserMgr::addUser($newUser);
            var_dump($user);
            var_dump($tUsers);
            
        } catch (PDOException $e) {
            echo $e->getMessage() . RC;
            echo "ECHEC de CONNEXION à la BDD" . RC; 

        } catch (Exception $e) {
            echo $e->getMessage() . RC; // 
        }

        echo "LE PROGRAMME CONTINUE ..." . RC; 

?>