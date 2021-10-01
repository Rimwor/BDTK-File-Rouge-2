<?php

    require_once('models/modele.inc.php');

    // PARAMETERS ================================================================================== //
    $tParam = parse_ini_file("param/parameters.ini");
    $file_name = $tParam['CHEMIN'] . '/' . $tParam['FILEcontacts'];
    
    $action = 'welcome';
   
    $utilisateur_id = $utilisateur_mdpb = $utilisateur_login 
    = $utilisateur_mail = $utilisateur_nom = $utilisateur_prenom
    = $utilisateur_adr_num_rue = $utilisateur_adr_cp
    = $utilisateur_tel = $ville_id = $role_id = '';

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    if(isset($_GET['name'], $_GET['lastname'], $_GET['phone'])) {
        $name = $_GET['name'];
        $lastname = $_GET['lastname'];
        $phone = $_GET['phone'];
    }

    // ECHOs ....................................................................................... //
    echo 'ACTION :'. $action . "<br />\n";
    echo 'GET :' ; print_r($_GET) ; echo "<br />";
    echo 'POST :' ; print_r($_POST) ; echo "<br />";

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'welcome':
            $title = 'WELCOME in Your Contact Book';
            $info = '';
                require('view/view_header.php'); 
                require('view/view_welcome.php'); 
                require('view/view_footer.php');
            break;
        
        // CONTACT LIST ---------------------------------------------------------------------------- //
        case 'listeUtilisateurs':
            $title = 'Liste de Utilisateurs :';
            $info = '';
                $tLignes = getAllUsers($file_name);
                require('view/view_header.php'); 
                require('view/view_usersList.php'); 
                require('view/view_footer.php');
            break;

    }

 ?>