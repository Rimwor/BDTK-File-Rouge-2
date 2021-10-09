<!-- THIS IS INDEX CENTER -->

<body>

    <body background="assets/img/bdthequebackground.jpg" alt="background">

        <!-- HEADER .................................................................................................................... -->
        <header>
            <a href="help.html" target="_blank">
                <img src="assets\img\help.png" class="img_help ml-1 mt-1" alt="help" />
            </a>
        </header>

        <!-- MAIN CONTAINER ............................................................................................................ -->
        <div class="container-fluid">

            <!-- CONNECTION FORM ....................................................................................................... --> 
            <div class="container-md align-self-auto bg-secondary p-5-md mt-10-md mt-15-sm mt-15-fs bg-opacity-75 border">
                
                <div class="mb-8 mt-3 fs-4 text-center">
                    <h1 class="bienvenue">Bienvenue</h1>
                    <img src="assets\img\line.png" class="line" alt="line" />
                </div>

                <form id="connexion" class="form_connection" action="" method="POST">

                    <!-- USER ID ........................................................................................................-->
                    <div class="mb-3 mt-3 fs-4">
                        <label for="username">Entrez votre identifiant personnel&nbsp:</label>
                        </br>
                        <input id="username" class="metro-input" placeholder="  Votre identifiant personnel" type="text" name="username" maxlength="10" style="-webkit-text-security: disc;" required/>
                    </div>

                    <!-- PIN -->
                    <div class="mb-3 fs-4">
                        <label for="password" class="form-label">Saisie votre code PIN&nbsp:</label>
                        <!-- KEY PAD ....................................................................................................-->
                        <div class="row">
                            <div class="cell-md-6 fs-4">
                                <input id="password" name="password" class="metro-input" placeholder="Votre code pin" type="text" data-role="keypad" data-shuffle="true" data-dynamic-position="false" data-on-change="$('#change_target').val(arguments[0])" data-key-length="6" required="required"/>
                            </div>
                        </div>
                        </br>
                    </div>
                </form>

                <!-- SUBMIT ............................................................................................................ --> 
                <div class="text-right">
                    <button id="btn_confirm" type="submit" class="btn btn-light mb-2">Confirmer</button>
                <br />
                    <a href="index.php?action=admin">
                        <button>ADMIN</button>
                    </a>
                </div>
            </div>

        </div>

        <!-- FOOTER .................................................................................................................... -->
        <footer class="footer">
            <a href="mot_de_passe_oublie.html" target="_blank">
                <!-- PASSWORD FORGOT BUTTON -->
                <button class="button"><i class="fas fa-unlock-alt"></i>&nbspMot de passe oublié</button>
            </a>
        </footer>

        <div id="qunit" hidden></div>
        <div id="qunit-fixture" hidden></div>

    <!-- ========================================================= JS ================================================================== -->

            <!-- JAVA SCRIPT -->
            <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>
            <script src="assets/js/jquery.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

            <script src="assets/js/comptes_utilisateurs.js"></script>
            <script src="assets/js/controles_profils.js"></script>
            <script src="assets/js/connexion.js"></script>

            <script src="assets/js/metro.js"></script>
            <script src="assets/js/all.js"></script>
</body>

<!-- THIS IS INDEX CENTER -->
