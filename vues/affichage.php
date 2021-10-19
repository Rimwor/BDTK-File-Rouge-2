<!-- THIS IS DISPLAY -->

<body>

    <body background="assets/img/bdthequebackground1.jpg" alt="background">

        <!-- HEADER .................................................................................................................... -->
        <!-- <header>
            <a href="help.html" target="_blank">
                <img src="assets\img\help.png" class="img_help ml-1 mt-1" alt="help" />
            </a>
        </header> -->

        <!-- MAIN CONTAINER ............................................................................................................ -->
        <div class="container-fluid">

            <!-- CONNECTION FORM ....................................................................................................... --> 
            <div class="container-md align-self-auto bg-secondary p-5-md mt-10-md mt-15-sm mt-15-fs bg-opacity-75 border">

                <!-- GET USERS LIST -->
                <div class="scroll_window overflow-auto">

                <?php
                    echo "<p>";
                    echo $info;
                    echo "</p>";
                    echo "<br />";
                    
                    if ($action === 'affichageUsers') {
                        foreach ($listUsers as $tUsers) {
                            echo $tUsers;
                        }
                    }

                    if ($action === 'affichageDetails') {
                        
                        echo "<form class='formulaire' method='POST' action=''>
                                <label for='id'>ID : </label>
                                <input readonly type='text' name='id' value='$utilisateur_id'/><br />
                                <label for='mdp'>Mot de passe : </label>
                                <input readonly type='text' name='mdp' value='$utilisateur_mdp'/><br />
                                <label for='login'>Login : </label>
                                <input readonly type='text' name='login' value='$utilisateur_login'/><br />
                                <label for='mail'>Mail : </label>
                                <input readonly type='text' name='mail' value='$utilisateur_mail'/><br />
                                <label for='nom'>Nom : </label>
                                <input readonly type='text' name='nom' value='$utilisateur_nom'/><br />
                                <label for='prenom'>Prénom : </label>
                                <input readonly type='text' name='prenom' value='$utilisateur_prenom'/><br />
                                <label for='adr'>Adresse : </label>
                                <input readonly type='text' name='adr' value='$utilisateur_adr_num_rue'/><br />
                                <label for='cp'>Code Postale : </label>
                                <input readonly type='text' name='cp' value='$utilisateur_adr_cp'/><br />
                                <label for='tel'>Tel : </label>
                                <input readonly type='text' name='tel' value='$utilisateur_tel'/><br />
                                <label for='ville'>Ville : </label>
                                <input readonly type='text' name='ville' value='$ville_id'/><br />
                                <label for='role'>Role : </label>
                                <input readonly type='text' name='role' value='$role_id'/><br /><br />
                            </form>";

                            echo "<form method='POST' action='index.php?action=modifUser'>
                                            <input type='hidden' name='id' value='" . $utilisateur_id . "'>
                                            <input type='hidden' name='mdpOld' value='" . $utilisateur_mdp . "'>
                                            <input type='hidden' name='loginOld' value='" . $utilisateur_login . "'>
                                            <input type='hidden' name='mailOld' value='" . $utilisateur_mail . "'>
                                            <input type='hidden' name='nomOld' value='" . $utilisateur_nom . "'>
                                            <input type='hidden' name='prenomOld' value='" . $utilisateur_prenom . "'>
                                            <input type='hidden' name='adrOld' value='" . $utilisateur_adr_num_rue . "'>
                                            <input type='hidden' name='cpOld' value='" . $utilisateur_adr_cp . "'>
                                            <input type='hidden' name='telOld' value='" . $utilisateur_tel . "'>
                                            <input type='hidden' name='villeOld' value='" . $ville_id . "'>
                                            <input type='hidden' name='roleOld' value='" . $role_id . "'>
                            <input type='submit' value='Modifier'>
                            </form>";

                            echo "<br />";

                            echo "<form method='POST' action='index.php?action=supprimer'>
                                <input type='hidden' name='id' value='" . $utilisateur_id . "'>
                                <input type='hidden' name='mdp' value='" . $utilisateur_mdp . "'>
                                <input type='hidden' name='login' value='" . $utilisateur_login . "'>
                                <input type='hidden' name='mail' value='" . $utilisateur_mail . "'>
                                <input type='hidden' name='nom' value='" . $utilisateur_nom . "'>
                                <input type='hidden' name='prenom' value='" . $utilisateur_prenom . "'>
                                <input type='hidden' name='adr' value='" . $utilisateur_adr_num_rue . "'>
                                <input type='hidden' name='cp' value='" . $utilisateur_adr_cp . "'>
                                <input type='hidden' name='tel' value='" . $utilisateur_tel . "'>
                                <input type='hidden' name='ville' value='" . $ville_id . "'>
                                <input type='hidden' name='role' value='" . $role_id . "'>
                            <input type='submit' value='Supprimer'>
                            </form>";

                    }

                    if ($action === 'search_result') {
                        if (count($liste) === 1) {
                            foreach($liste as $tResults) {
                            // var_dump($tResults);

                                        echo $tResults;
                                        
                                        echo "<form method='POST' action='index.php?action=modifUser'>

                                        <input type='submit' value='Modifier'>

                                            <input type='hidden' name='id' value='" . $tResults->getID() . "'>
                                            <input type='hidden' name='mdpOld' value='" . $tResults->getMDP() . "'>
                                            <input type='hidden' name='loginOld' value='" . $tResults->getLOGIN() . "'>
                                            <input type='hidden' name='mailOld' value='" . $tResults->getMAIL() . "'>
                                            <input type='hidden' name='nomOld' value='" . $tResults->getNOM() . "'>
                                            <input type='hidden' name='prenomOld' value='" . $tResults->getPRENOM() . "'>
                                            <input type='hidden' name='adrOld' value='" . $tResults->getADR() . "'>
                                            <input type='hidden' name='cpOld' value='" . $tResults->getCP() . "'>
                                            <input type='hidden' name='telOld' value='" . $tResults->getTEL() . "'>
                                            <input type='hidden' name='villeOld' value='" . $tResults->getVILLE() . "'>
                                            <input type='hidden' name='roleOld' value='" . $tResults->getROLE() . "'>

                                        </form>";
                                        
                                        echo "<br />";

                                        echo "<form method='POST' action='index.php?action=supprimer'>

                                            <input type='submit' value='Supprimer'>

                                            <input type='hidden' name='id' value='" . $tResults->getID() . "'>
                                            <input type='hidden' name='mdp' value='" . $tResults->getMDP() . "'>
                                            <input type='hidden' name='login' value='" . $tResults->getLOGIN() . "'>
                                            <input type='hidden' name='mail' value='" . $tResults->getMAIL() . "'>
                                            <input type='hidden' name='nom' value='" . $tResults->getNOM() . "'>
                                            <input type='hidden' name='prenom' value='" . $tResults->getPRENOM() . "'>
                                            <input type='hidden' name='adr' value='" . $tResults->getADR() . "'>
                                            <input type='hidden' name='cp' value='" . $tResults->getCP() . "'>
                                            <input type='hidden' name='tel' value='" . $tResults->getTEL() . "'>
                                            <input type='hidden' name='ville' value='" . $tResults->getVILLE() . "'>
                                            <input type='hidden' name='role' value='" . $tResults->getROLE() . "'>
                                            
                                        </form>";

                            }
                        } else {
                            foreach($liste as $tResults) {
                            //var_dump($tResults);
                                echo $tResults;
                            }
                        }
                    }
                ?>

                </div>


</div>

</div>

<!-- THIS IS DISPLAY -->
