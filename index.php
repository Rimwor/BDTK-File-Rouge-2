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

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    // ECHOs ....................................................................................... //
    // echo 'ACTION : '. $action . "<br />\n";
    // echo 'GET : ' ; print_r($_GET) ; echo "<br />";
    // echo 'POST : ' ; print_r($_POST) ; echo "<br />";
    Connect_bdtk::getConnexion();

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'accueil': // PAGE DE CONNEXION
            $title = 'Bienvenue à la bédéthèque de Stockholm';
            $info = '';
            $header_info = '';
            $h1 = $action;
                require('vues/index_1header.php'); 
                require('vues/index_2center.php'); 
                require('vues/index_3footer.php');
            break;
            
        case 'admin': // PAGE ADMINISTRATEUR
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3 class=" text-nowrap">' . 'Gestion Utilisateurs' . '</h3>';
            $header_info = '<h2>' . 'Nom d\'Utilisateur' . '</h2>';
            $h1 = $action;
                require('vues/index_1header.php'); 
                require('vues/compte_admin_2center.php'); 
                require('vues/index_3footer.php');
            break;  
    
    }

 ?>

<!-- THIS IS INDEX CONTROLER -->