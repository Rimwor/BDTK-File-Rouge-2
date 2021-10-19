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


                    if ($action === 'search_result') {
                        if (count($liste) === 1) {
                            foreach($liste as $tResults) {
                            // var_dump($tResults);

                                        echo $tResults;
                                        
                                        echo "<form method='POST' action='index.php?action=modifUser'>

                                        <input type='submit' value='Modifier'>

                                            <input type='hidden' name='id' value='" .$tResults->getID(). "'>
                                            <input type='hidden' name='mdpOld' value='" .$tResults->getMDP(). "'>
                                            <input type='hidden' name='loginOld' value='" .$tResults->getLOGIN(). "'>
                                            <input type='hidden' name='mailOld' value='" .$tResults->getMAIL(). "'>
                                            <input type='hidden' name='nomOld' value='" .$tResults->getNOM(). "'>
                                            <input type='hidden' name='prenomOld' value='" .$tResults->getPRENOM(). "'>
                                            <input type='hidden' name='adrOld' value='" .$tResults->getADR(). "'>
                                            <input type='hidden' name='cpOld' value='" .$tResults->getCP(). "'>
                                            <input type='hidden' name='telOld' value='" .$tResults->getTEL(). "'>
                                            <input type='hidden' name='villeOld' value='" .$tResults->getVILLE(). "'>
                                            <input type='hidden' name='roleOld' value='" .$tResults->getROLE(). "'>

                                        </form>";
                                        
                                        echo "<br />";

                                        echo "<form method='POST' action='index.php?action=supprimer'>

                                            <input type='submit' value='Supprimer'>

                                            <input type='hidden' name='id' value='" .$tResults->getID(). "'>
                                            <input type='hidden' name='mdp' value='" .$tResults->getMDP(). "'>
                                            <input type='hidden' name='login' value='" .$tResults->getLOGIN(). "'>
                                            <input type='hidden' name='mail' value='" .$tResults->getMAIL(). "'>
                                            <input type='hidden' name='nom' value='" .$tResults->getNOM(). "'>
                                            <input type='hidden' name='prenom' value='" .$tResults->getPRENOM(). "'>
                                            <input type='hidden' name='adr' value='" .$tResults->getADR(). "'>
                                            <input type='hidden' name='cp' value='" .$tResults->getCP(). "'>
                                            <input type='hidden' name='tel' value='" .$tResults->getTEL(). "'>
                                            <input type='hidden' name='ville' value='" .$tResults->getVILLE(). "'>
                                            <input type='hidden' name='role' value='" .$tResults->getROLE(). "'>
                                            
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
