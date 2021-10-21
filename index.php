<!-- THIS IS INDEX CONTROLER -->

<?php

spl_autoload_register(function($classe){
    include "Classes/".$classe.".class.php";
});

require('modeles/modele.user.php');
require('modeles/Connect.class.php');

// var_dump($_REQUEST);

    // PARAMETERS ================================================================================== //
    
    $action = 'accueil';
    $needle = '';

    $utilisateur_mdp = $utilisateur_login = $utilisateur_mail = $utilisateur_nom 
    = $utilisateur_prenom = $utilisateur_adr_num_rue = $utilisateur_adr_cp = $utilisateur_tel 
    = $ville_id = $role_id = '';

    $utilisateur_mdpOld = $utilisateur_loginOld = $utilisateur_mailOld = $utilisateur_nomOld 
    = $utilisateur_prenomOld = $utilisateur_adr_num_rueOld = $utilisateur_adr_cpOld = $utilisateur_telOld 
    = $ville_idOld = $role_idOld = '';

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if (isset($_POST['needle'])) { $needle = $_POST['needle']; }

    if (isset($_POST['mdpOld'])) { $utilisateur_mdpOld = $_POST['mdpOld']; }
    if (isset($_POST['loginOld'])) { $utilisateur_loginOld = $_POST['loginOld']; }
    if (isset($_POST['mailOld'])) { $utilisateur_mailOld = $_POST['mailOld']; }
    if (isset($_POST['nomOld'])) { $utilisateur_nomOld = $_POST['nomOld']; }
    if (isset($_POST['prenomOld'])) { $utilisateur_prenomOld = $_POST['prenomOld']; }
    if (isset($_POST['adrOld'])) { $utilisateur_adr_num_rueOld = $_POST['adrOld']; }
    if (isset($_POST['cpOld'])) { $utilisateur_adr_cpOld = $_POST['cpOld']; }
    if (isset($_POST['telOld'])) { $utilisateur_telOld = $_POST['telOld']; }
    if (isset($_POST['villeOld'])) { $ville_idOld = $_POST['villeOld']; }
    if (isset($_POST['roleOld'])) { $role_idOld = $_POST['roleOld']; }

    if (isset($_POST['id'])) { $utilisateur_id = $_POST['id']; }
    
    if (isset($_POST['mdp'])) { $utilisateur_mdp = $_POST['mdp']; }
    if (isset($_POST['login'])) { $utilisateur_login = $_POST['login']; }
    if (isset($_POST['mail'])) { $utilisateur_mail = $_POST['mail']; }
    if (isset($_POST['nom'])) { $utilisateur_nom = $_POST['nom']; }
    if (isset($_POST['prenom'])) { $utilisateur_prenom = $_POST['prenom']; }
    if (isset($_POST['adr'])) { $utilisateur_adr_num_rue = $_POST['adr']; }
    if (isset($_POST['cp'])) { $utilisateur_adr_cp = $_POST['cp']; }
    if (isset($_POST['tel'])) { $utilisateur_tel = $_POST['tel']; }
    if (isset($_POST['ville'])) { $ville_id = $_POST['ville']; }
    if (isset($_POST['role'])) { $role_id = $_POST['role']; }

    // ECHOs ....................................................................................... //
    // echo 'ACTION : '. $action . "<br />\n";
    // echo 'GET : ' ; print_r($_GET) ; echo "<br />";
    // echo 'POST : ' ; print_r($_POST) ; echo "<br />";
    Connect_bdtk::getConnexion();
    getListUsers();

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'accueil': // PAGE DE CONNEXION
            $title = 'Bienvenue à la bédéthèque de Stockholm';
            $info = '';
            $header_info = '';

                require('vues/index_1header.php'); 
                require('vues/index_2center.php'); 
                require('vues/index_3footer.php');
            break;

        case 'admin': // PAGE ADMINISTRATEUR
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Gestion Utilisateurs' . '</h3>' . '<br/>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';

                require('vues/index_1header.php'); 
                require('vues/compte_admin_2center.php'); 
                require('vues/index_3footer.php');
            break;
        
        // C - CREATE ------------------------------------------------------------------------------ //

        case 'ajout':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Creation utilisateur' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            // print_r($_REQUEST);
                require('vues/index_1header.php');
                require('vues/form.php');
                require('vues/index_3footer.php');
            break;    
        
        case 'confirmAjout':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';

            if (ajoutUser($utilisateur_mdp, $utilisateur_login,
            $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
            $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
            $ville_id,$role_id) == true) {
                $info = '<h3 class=" text-nowrap">' . 'Création réussie' . '</h3>';
            } else {
                $info = '<h3 class=" text-nowrap">' . 'L\'utilisateur existe déjà' . '</h3>';
            }
            
            $header_info = '<h2>' . '&nbsp Administrateur : Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            ajoutUser ($utilisateur_mdp, $utilisateur_login,
            $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
            $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
            $ville_id,$role_id);
                require('vues/index_1header.php');
                require('vues/affichage.php');
                require('vues/index_3footer.php');
        break;

        // R - READ -------------------------------------------------------------------------------- //

        case 'affichageUsers' :
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Liste d\'utilisateurs' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            $listUsers = getListUsers();
                require('vues/index_1header.php'); 
                require('vues/affichage.php'); 
                require('vues/index_3footer.php');
            break;

        case 'affichageDetails' :
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Détails d\'un utilisateur' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
                require('vues/index_1header.php'); 
                require('vues/affichage.php');
                require('vues/index_3footer.php');
            break;

        case 'recherche':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Recherche un utilisateur' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
                require('vues/index_1header.php');
                require('vues/form.php');
                require('vues/index_3footer.php');
            break;

        case 'search_result':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            if (recherche($needle) == true) {
              $info = '<h3 class=" text-nowrap">' . 'Resultat du recherche' . '</h3>';  
            } else {
                $info = '<h3 class=" text-nowrap">' . 'Aucun resultat' . '</h3>';
            }
            
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            $liste = recherche($needle);
                require('vues/index_1header.php');
                require('vues/affichage.php');
                require('vues/index_3footer.php');
            break;

        // U - UPDATE ------------------------------------------------------------------------------ //

        case 'modifUser':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Modification d\'utilisateur' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
                require('vues/index_1header.php');
                require('vues/form.php');
                require('vues/index_3footer.php');
        break;    

        case 'confirmmodifUser':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Modification d\'utilisateur réussi' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            modifyUser($utilisateur_id, $utilisateur_mdp, $utilisateur_login,
            $utilisateur_mail, $utilisateur_nom, $utilisateur_prenom,
            $utilisateur_adr_num_rue,$utilisateur_adr_cp,$utilisateur_tel,
            $ville_id,$role_id);
                require('vues/index_1header.php');
                require('vues/affichage.php');
                require('vues/index_3footer.php');
        break;

        // D - DELETE ------------------------------------------------------------------------------ //

        case 'supprimer':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Suppression d\'utilisateur réussi' . '</h3>';
            $header_info = '<h2>' . '&nbsp Administrateur' . '</h2>';
            $user_info = '<h2>' . '&nbsp Alexandre Chevalier' . '</h2>';
            delUser($utilisateur_id);
                require('vues/index_1header.php');
                require('vues/affichage.php');
                require('vues/index_3footer.php');
            break;

    }

?>

<!-- THIS IS INDEX CONTROLER -->