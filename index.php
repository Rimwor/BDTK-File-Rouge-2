<!-- THIS IS INDEX CONTROLER -->

<?php

    // PARAMETERS ================================================================================== //
    
    $action = 'welcome';

    // ISSETS ...................................................................................... //
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }

    // ECHOs ....................................................................................... //
    // echo 'ACTION : '. $action . "<br />\n";
    // echo 'GET : ' ; print_r($_GET) ; echo "<br />";
    // echo 'POST : ' ; print_r($_POST) ; echo "<br />";

    // SWITCH ====================================================================================== //
    switch ($action) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'welcome': // PAGE DE CONNEXION
            $title = 'Bienvenue à la bédéthèque de Stockholm';
            $info = '';
                require('view/index_1header.php'); 
                require('view/index_2center.php'); 
                require('view/index_3footer.php');
            break;
            
        case 'admin': // PAGE ADMINISTRATEUR
            $title = 'Compte Administrateur | Bienvenue à la bédéthèque de Stockholm';
            $info = '<h3>' . 'ADMIN | Gestion Utilisateurs' . '</h3>';
                require('view/index_1header.php'); 
                require('view/compte_admin_2center.php'); 
                require('view/index_3footer.php');
            break;
    
    }

 ?>

<!-- THIS IS INDEX CONTROLER -->