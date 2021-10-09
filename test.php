<?php

    spl_autoload_register(function($classe){
        include "models/" . $classe . ".class.php";
    });

    const RC = "<br />\n";
    //const RC = "\n";

    try {
        // Etape 1 - Récupère une connexion PDO
        $file = 'param/parametres.ini';
        $tParam = parse_ini_file($file,true);
        extract($tParam['connection bdd']); // génère les variables dynamiquement

        $dsn = "mysql:host=".$host."; port=".$port."; dbname=".$bdd."; charset=utf8";
            
        $connexionPDO = new PDO($dsn,$user,$password);
//var_dump($connexionPDO);
//echo "CONNEXION REUSSIE" . RC;

        // Etape 2 - Lance et récupère le résultat d'une requête
        
        // Prépare la requête : la liste des Pilotes
        $sql = 'SELECT * FROM utilisateur ORDER BY $utilisateur_nom ASC';
        
        // Lance la requête
        $resPDOstt = $connexionPDO->query($sql);
//var_dump($resPDOstt);

        // Lit un résultat
        // $record = $resPDOstt->fetch();
        // echo $record['pilNom'];
        // echo $record[1];

        // Lit tout le curseur PDOStatement et retourne des tableaux associatifs
        // $records = $resPDOstt->fetchAll(PDO::FETCH_ASSOC);

        // Lit tout le curseur et retourne des objets simples
        // $records = $resPDOstt->fetchAll(PDO::FETCH_OBJ);

        // Lit tout le curseur et retourne des objets 'Pilote'
        $resPDOstt->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,
        'User', array (
        'utilisateur_id', 'utilisateur_mdp', 'utilisateur_login',
        'utilisateur_mail', 'utilisateur_nom', 'utilisateur_prenom',
        'utilisateur_adr_num_rue', 'utilisateur_adr_cp',
        'utilisateur_tel', 'ville_id', 'role_id'));
        $records = $resPDOstt->fetchAll();

        // Etape 3 - Affiche le résultat
        echo '1er Utilisateur : ' . $records[0] . RC . RC;
        echo 'Liste des utilisateurs :';
        var_dump($records);
        
        

/**/
    } catch (PDOException $e) {
        echo $e->getMessage() . RC;
        echo "ECHEC de CONNEXION à la BDD" . RC;
    } catch (Exception $e) {
        echo $e->getMessage() . RC;
    }

    //echo RC . "LE PROGRAMME CONTINUE ..." . RC;
    
?>