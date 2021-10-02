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
        $role_id = $_GET['role'];
        $utilisateur_nom = $_GET['nom'];
        $utilisateur_prenom = $_GET['prenom'];
        $utilisateur_login = $_GET['login'];
        $utilisateur_mdp = $_GET['motpasse'];
        $utilisateur_adr_num_rue = $_GET['adresse'];
        $utilisateur_adr_cp = $_GET['codepostale'];
        $ville_id = $_GET['idVille'];
        $utilisateur_mail =  $_GET['mail'];
        $utilisateur_tel = $_GET['tel'];
    }

    // ECHOs ....................................................................................... //
    echo 'ACTION :'. $action . "<br />\n";
    echo 'GET :' ; print_r($_GET) ; echo "<br />";
    echo 'POST :' ; print_r($_POST) ; echo "<br />";

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'welcome':
            $title = "Gestion d'Utilisateurs";
            $info = "";
                require('view/view_header.php'); 
                require('view/view_welcome.php'); 
                require('view/view_footer.php');
            break;
        
        // USERS LIST ---------------------------------------------------------------------------- //
        case 'listeUtilisateurs':
            $title = "Liste d'Utilisateurs :";
            $info = "";
                $tLignes = getAllUsers($file_name);
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;

        // ADD NEW USER ------------------------------------------------------------------------- //
        case 'createUser':
            $title = "AJOUT D'UN NOUVEL UTILISATEUR";
            $info = "";
                require('view/view_header.php'); 
                require('view/view_userForm.php'); 
                require('view/view_footer.php');
            break;
        case 'createUserOK' :
            $title = "CRÉATION D'UTILISATEURS RÉUSSIE";
            $info = "L'utilisateur a été créé avec succès";
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
            $title = 'USER SEARCH';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_userForm.php'); 
                require('view/view_footer.php');
            break;
        case 'readUserOK' :
            $title = 'SUCCESFUL USER SEARCH';
                $tLignes = readUsers($utilisateur_id, $file_name);
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

    }

 ?>