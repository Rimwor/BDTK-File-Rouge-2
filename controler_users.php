<!-- THIS IS : CONTROLER FOR USER CRUD -->
<?php

    require_once('models/modele.inc.php');

    // PARAMETERS ================================================================================== //
    $tParam = parse_ini_file("param/parameters.ini");
    $file_name = $tParam['CHEMIN'] . '/' . $tParam['FILEcontacts'];
    
    $action = 'welcome';
   
    $utilisateur_id = $utilisateur_mdp = $utilisateur_login 
    = $utilisateur_mail = $utilisateur_nom = $utilisateur_prenom
    = $utilisateur_adr_num_rue = $utilisateur_adr_cp
    = $utilisateur_tel = $ville_id = $role_id = '';

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if(isset($_GET['id'], $_GET['role'], $_GET['nom'],
             $_GET['prenom'], $_GET['login'], 
             $_GET['motpasse'], $_GET['adresse'],
             $_GET['codepostale'], $_GET['idVille'],
             $_GET['mail'], $_GET['tel'])) {
        $utilisateur_id = $_GET['id'];
        $utilisateur_mdp = $_GET['motpasse'];
        $utilisateur_login = $_GET['login'];
        $utilisateur_mail =  $_GET['mail'];
        $utilisateur_nom = $_GET['nom'];
        $utilisateur_prenom = $_GET['prenom'];
        $utilisateur_adr_num_rue = $_GET['adresse'];
        $utilisateur_adr_cp = $_GET['codepostale'];
        $utilisateur_tel = $_GET['tel'];
        $ville_id = $_GET['idVille'];
        $role_id = $_GET['role'];       
    }

    if($action == 'éditionOK') {
        $utilisateur_idOLD = $_GET['idOLD'];
        $role_idOLD = $_GET['roleOLD'];
        $utilisateur_nomOLD = $_GET['nomOLD'];
        $utilisateur_prenomOLD = $_GET['prenomOLD'];
        $utilisateur_loginOLD = $_GET['loginOLD'];
        $utilisateur_mdpOLD = $_GET['motpasseOLD'];
        $utilisateur_adr_num_rueOLD = $_GET['adresseOLD'];
        $utilisateur_adr_cpOLD = $_GET['codepostaleOLD'];
        $ville_idOLD = $_GET['idVilleOLD'];
        $utilisateur_mailOLD =  $_GET['mailOLD'];
        $utilisateur_telOLD = $_GET['telOLD'];
    }

    // ECHOs ....................................................................................... //
    echo 'ACTION : '. $action . "<br />\n";
    echo 'GET : ' ; print_r($_GET) ; echo "<br />";
    echo 'POST : ' ; print_r($_POST) ; echo "<br />";

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'welcome':
            $title = 'Gestion Utilisateurs';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_welcome.php'); 
                require('view/view_footer.php');
            break;
        
        // USERS LIST ---------------------------------------------------------------------------- //
        case 'listeUtilisateurs':
            $title = 'Liste Utilisateurs :';
            $info = '';
                $tLignes = getAllUsers($file_name);
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;

        // ADD NEW USER ------------------------------------------------------------------------- //
        case 'createUser':
            $title = 'AJOUT UN NOUVEL UTILISATEUR';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_userForm.php'); 
                require('view/view_footer.php');
            break;
        case 'createUserOK' :
            $title = 'CRÉATION UTILISATEUR RÉUSSIE';
            $info = 'Utilisateur a été créé avec succès';
                createUser($utilisateur_id, $utilisateur_mdp,
                $utilisateur_login, $utilisateur_mail, 
                $utilisateur_nom, $utilisateur_prenom, 
                $utilisateur_adr_num_rue, $utilisateur_adr_cp, 
                $utilisateur_tel, $ville_id, $role_id, $file_name);
                $tLignes[] = "\n" . $utilisateur_id . ","
                . $utilisateur_mdp . ",". $utilisateur_login . ","
                . $utilisateur_mail . "," . $utilisateur_nom . ","
                . $utilisateur_prenom . "," . $utilisateur_adr_num_rue . ","
                . $utilisateur_adr_cp . "," . $utilisateur_tel . ","
                . $ville_id . "," . $role_id;  
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;

        // USER SEARCH  ------------------------------------------------------------------------- //
        case 'readUser' :
            $title = 'RECHERCHE UTILISATEUR';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_userForm.php'); 
                require('view/view_footer.php');
            break;
        case 'readUserOK' :
            $title = 'RECHERCHE UTILISATEURS RÉUSSIE';
                $tLignes = readUsers($utilisateur_id, $utilisateur_mdp, 
                                     $utilisateur_login, $utilisateur_mail, 
                                     $utilisateur_nom, $utilisateur_prenom,
                                     $utilisateur_adr_num_rue, 
                                     $utilisateur_adr_cp, $utilisateur_tel, 
                                     $ville_id, $role_id, $file_name);
                if (count($tLignes) == 0)
                    $info = "Il n'y a aucun utilisateur sur la liste qui correspond aux exigences ... ";
                elseif (count($tLignes) > 1)
                    $info = "Il y a plus d'un utilisateur sur la liste qui correspond aux exigences : ";
                else
                    $info = "Il n'y a qu'un seul utilisateur sur la liste qui correspond aux exigences :";
                
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;
        
        // USER DELETE  ------------------------------------------------------------------------- //
        case 'effacer' :
            $title = 'SUPPRIMER UTILISATEUR';
            $info = 'Utilisateur a été supprimé avec succès';
                deleteUser($utilisateur_id, $utilisateur_mdp,
                $utilisateur_login, $utilisateur_mail, 
                $utilisateur_nom, $utilisateur_prenom, 
                $utilisateur_adr_num_rue, $utilisateur_adr_cp, 
                $utilisateur_tel, $ville_id, $role_id, $file_name);
                $tLignes[] = "\n" . $utilisateur_id . ","
                . $utilisateur_mdp . ",". $utilisateur_login . ","
                . $utilisateur_mail . "," . $utilisateur_nom . ","
                . $utilisateur_prenom . "," . $utilisateur_adr_num_rue . ","
                . $utilisateur_adr_cp . "," . $utilisateur_tel . ","
                . $ville_id . "," . $role_id;
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;

        // USER MODIFICATION -------------------------------------------------------------------- //
        case 'édition' :
            $title = 'MODIFICATION UTILISATEUR';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_userForm.php'); 
                require('view/view_footer.php');
            break;
        
        case 'éditionOK' :
            $title = 'MODIFICATION DE CONTRAT RÉUSSIE';
            $info = 'Le contact a été mis à jour avec succès';
            if (!empty($utilisateur_idOLD)) {
                updateUser ($utilisateur_idOLD, $utilisateur_mdpOLD,
                $utilisateur_loginOLD, $utilisateur_mailOLD, 
                $utilisateur_nomOLD, $utilisateur_prenomOLD, 
                $utilisateur_adr_num_rueOLD, $utilisateur_adr_cpOLD, 
                $utilisateur_telOLD, $ville_idOLD, $role_idOLD,
                $utilisateur_id, $utilisateur_mdp,
                $utilisateur_login, $utilisateur_mail, 
                $utilisateur_nom, $utilisateur_prenom, 
                $utilisateur_adr_num_rue, $utilisateur_adr_cp, 
                $utilisateur_tel, $ville_id, $role_id, $file_name);
                $tLignes[] = "\n" . $utilisateur_id . ","
                . $utilisateur_mdp . ",". $utilisateur_login . ","
                . $utilisateur_mail . "," . $utilisateur_nom . ","
                . $utilisateur_prenom . "," . $utilisateur_adr_num_rue . ","
                . $utilisateur_adr_cp . "," . $utilisateur_tel . ","
                . $ville_id . "," . $role_id;
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            } else {
                die ('ACCÈS REFUSÉ');
            }                     
            break;

    }

 ?>