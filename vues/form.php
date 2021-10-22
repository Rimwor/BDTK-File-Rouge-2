<body>
<!-- Beata -->
    <body background="assets/img/bdthequebackground1.jpg" alt="background">

        <!-- MAIN CONTAINER ............................................................................................................ -->
        <div class="container-fluid">

            <!-- CONNECTION FORM ....................................................................................................... --> 
            <div class="container-md align-self-auto bg-secondary p-5-md mt-10-md mt-15-sm mt-15-fs bg-opacity-75 border">
                <?php if ($action != 'ajout') { ?> 
                <img src="assets\img\profile.png" class="responsive rounded float-right" alt="profile">
                <?php } ?>
                <div class="mt-5 mb-5">

                    <!-- RECHCERCHE FORM ............................................................................................... -->
                    <?php
                        if ($action == 'recherche') {
                            
                            echo "<p>";
                            echo $info;
                            echo "</p>";
                            echo "<br />";

                            echo '  <form action="index.php?action=search_result" method="POST">
                                        <p><input type="text" name="needle" required></p>
                                        <input type="submit" value="Rechercher un user ...">
                                    </form>';

                    // MODIFY A USER ................................................................................................... --> 
                        } elseif ($action == 'modifUser') {

                            echo "<p>";
                            echo $info;
                            echo "</p>";
                            echo "<br />";

                            echo "  <section>
                                        <div style='text-align:left' class='scroll_window_1 overflow-auto'>

                                            <form action='index.php?action=confirmmodifUser' method='POST'>

                                                <p><label>ID : &nbsp</label><input type='text' readonly name='id' value='" .$_POST['id']. "'></p>
                                                <p><label>Mot de passe : &nbsp</label><input type='text' name='mdp' value='".$_POST['mdpOld']."'></p>
                                                <p><label>Login : &nbsp</label><input type='text' name='login' value='".$_POST['loginOld']."'></p>
                                                <p><label>Mail : &nbsp</label><input type='text' name='mail' value='".$_POST['mailOld']."'></p>
                                                <p><label>Nom : &nbsp</label><input type='text' name='nom' value='".$_POST['nomOld']."'></p>
                                                <p><label>Prenom : &nbsp</label><input type='text' name='prenom' value='".$_POST['prenomOld']."'></p>
                                                <p><label>Adresse : &nbsp</label><input type='text' name='adr' value='".$_POST['adrOld']."'></p>
                                                <p><label>Code Postal : &nbsp</label><input type='text' name='cp' value='".$_POST['cpOld']."'></p>
                                                <p><label>Tel : &nbsp</label><input type='text' name='tel' value='".$_POST['telOld']."'></p>
                                                <p><label>Ville Id : &nbsp</label><input type='text' name='ville' value='".$_POST['villeOld']."'></p>
                                                <p><label>Role Id : &nbsp</label><input type='text' readonly name='role' value='".$_POST['roleOld']."'></p>

                                                <input type='hidden' name='id' value='" .$_POST['id']. "'>
                                                <input type='hidden' name='mdpOld' value='".$_POST['mdpOld']."' />
                                                <input type='hidden' name='loginOld' value='".$_POST['loginOld']."' />
                                                <input type='hidden' name='mailOld' value='".$_POST['mailOld']."' />
                                                <input type='hidden' name='nomOld' value='".$_POST['nomOld']."' />
                                                <input type='hidden' name='prenomOld' value='".$_POST['prenomOld']."' />
                                                <input type='hidden' name='adrOld' value='".$_POST['adrOld']."' />
                                                <input type='hidden' name='cpOld' value='".$_POST['cpOld']."' />
                                                <input type='hidden' name='telOld' value='".$_POST['telOld']."' />
                                                <input type='hidden' name='villeOld' value='".$_POST['villeOld']."' />
                                                <input type='hidden' name='roleOld' value='".$_POST['roleOld']."' />
                                                
                                                <input type='submit' value='Modifier'>

                                            </form>

                                        </div>
                                    </section>";

                    // ADD A NEW USER .................................................................................................. -->
                        } elseif ($action == 'ajout') {

                            echo "<p>";
                            echo $info;
                            echo "</p>";
                            echo "<br />";

                            echo '  <section>
                                        <div style="text-align:left" class="scroll_window_1 overflow-auto">

                                            <form action="index.php?action=confirmAjout" method="POST">
                                                
                                                <p><label>Mot de passe : &nbsp</label><input type="text" name="mdp" required></p>
                                                <p><label>Login : &nbsp</label><input type="text" name="login" required></p>
                                                <p><label>Mail : &nbsp</label><input type="text" name="mail" required></p>
                                                <p><label>Nom : &nbsp</label><input type="text" name="nom" required></p>
                                                <p><label>Prenom : &nbsp</label><input type="text" name="prenom" required></p>
                                                <p><label>Adresse : &nbsp</label><input type="text" name="adr" required></p>
                                                <p><label>Code Postal : &nbsp</label><input type="text" name="cp" required></p>
                                                <p><label>Tel : &nbsp</label><input type="text" name="tel" required></p>
                                                <p><label>Ville Id : &nbsp</label><input type="text" name="ville" required></p>
                                                 
                                                <p><div class="input-group mb-2"><label>Role Id : &nbsp
                                                                                 </label><div class="col-3">
                                                                                 <select name="role" class="form-control" required>
                                                                                <option>Sélectionner...</option>
                                                                                <option value="adher">adher</option>
                                                                                <option value="admin">admin</option>
                                                                                <option value="bibli">bibli</option>
                                                                                <option value="gesti">gesti</option>
                                                                                <option value="respo">respo"</option>
                                                                                </select></div></div></p>
                                                                                             
                                                <input type="submit" name="save_select" value="Ajouter">
                                                
                                            </form>

                                    </div>
                                    </section>';
                                           
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