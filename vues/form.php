<!-- THIS IS COMPTE (ADMIN) CENTER -->

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
                <?php if ($action != 'ajout') { ?> 
                <img src="assets\img\profile.png" class="responsive rounded float-right" alt="profile">
                <?php } ?>
                <div class="mt-5 mb-5">

                    <!-- RECHCERCHE FORM -->
                    <?php
                        if ($action == 'recherche') {
                            
                            echo "<p>";
                            echo $info;
                            echo "</p>";
                            echo "<br />";

                            echo '  <form action="index.php?action=search_result" method="POST">
                                        <p><input type="text" name="needle"></p>
                                        <input type="submit" value="Rechercher un user ...">
                                    </form>';

                        // ADD A NEW USER
                        } elseif ($action == 'ajout') {

                            echo "<p>";
                            echo $info;
                            echo "</p>";
                            echo "<br />";

                            echo '  <section>
                                        <div style="text-align:left" class="scroll_window_1 overflow-auto">
                                            <form action="index.php?action=confirmAjout" method="POST">
                                                <p><label>ID : &nbsp</label><input type="text" name="id"></p>
                                                <p><label>Mot de passe : &nbsp</label><input type="text" name="mdp"></p>
                                                <p><label>Login : &nbsp</label><input type="text" name="login"></p>
                                                <p><label>Mail : &nbsp</label><input type="text" name="mail"></p>
                                                <p><label>Nom : &nbsp</label><input type="text" name="nom"></p>
                                                <p><label>Prenom : &nbsp</label><input type="text" name="prenom"></p>
                                                <p><label>Adresse : &nbsp</label><input type="text" name="adr"></p>
                                                <p><label>Code Postal : &nbsp</label><input type="text" name="cp"></p>
                                                <p><label>Tel : &nbsp</label><input type="text" name="tel"></p>
                                                <p><label>Ville Id : &nbsp</label><input type="text" name="ville"></p>
                                                <p><label>Role Id : &nbsp</label><input type="text" name="role"></p>
                                                <input type="submit" value="Ajouter">
                                            </form>
                                        </div>
                                    </section>
                                ';
                        }

                    ?>

                </div>  
            </div>

        </div>

        <!-- FOOTER .................................................................................................................... -->
        <footer class="footer">
                <!-- BACK BUTTON -->
                
        </footer>

        <div id="qunit" hidden></div>
        <div id="qunit-fixture" hidden></div>

    <!-- ========================================================= JS ================================================================== -->

            <!-- JAVA SCRIPT -->

            <script src="assets/js/metro.js"></script>
            <script src="assets/js/all.js"></script>
</body>

<!-- THIS IS COMPTE (ADMIN) CENTER -->
