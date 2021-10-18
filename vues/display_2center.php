<?php
    echo $h1;
    echo "<br />";
    
    if ($action === 'affichageUsers') {
        foreach ($listeUsers as $tUsers) {
            echo $tUsers;
        }
    }
   
?>
