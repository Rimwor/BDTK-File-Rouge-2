<!-- THIS IS COMPTE CONTROLER -->

<?php

    // PARAMETERS ================================================================================== //
    
    $compte = 'admin';

    // ISSETS ...................................................................................... //
    if(isset($_GET['compte'])) {
        $compte = $_GET['compte'];
    }

    // ECHOs ....................................................................................... //
    // echo 'ACTION : '. $action . "<br />\n";
    // echo 'GET : ' ; print_r($_GET) ; echo "<br />";
    // echo 'POST : ' ; print_r($_POST) ; echo "<br />";

    // SWITCH ====================================================================================== //
    switch ($compte) {

        // WELCOME : ------------------------------------------------------------------------------- //
        case 'admin':
            $title = 'Gestion Utilisateurs | Bienvenue à la bédéthèque de Stockholm';
            $info = '';
                require('view/index_1header.php'); 
                require('view/compte_admin_2center.php'); 
                require('view/index_3footer.php');
            break;

    }

 ?>

<!-- THIS IS COMPTE CONTROLER -->