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

    

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if (isset($_POST['needle'])) { $needle = $_POST['needle']; }

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
            $info = '<h3 class=" text-nowrap">' . 'Gestion Utilisateurs' . '</h3>';
            $header_info = '<h2>' . 'Nom d\'Utilisateur' . '</h2>';

                require('vues/index_1header.php'); 
                require('vues/compte_admin_2center.php'); 
                require('vues/index_3footer.php');
            break;

        case 'affichageUsers' :
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'List d\'utilisateurs' . '</h3>';
            $header_info = '<h2>' . 'Nom d\'Utilisateur' . '</h2>';
            $listUsers = getListUsers();
                require('vues/index_1header.php'); 
                require('vues/affichage.php'); 
                require('vues/index_3footer.php');
            break;

        case 'recherche':
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Recherche un utilisateur' . '</h3>';
            $header_info = '<h2>' . 'Nom d\'Utilisateur' . '</h2>';
                require('vues/index_1header.php');
                require('vues/form.php');
                require('vues/index_3footer.php');
            break;

    }

 ?>

<!-- THIS IS INDEX CONTROLER -->