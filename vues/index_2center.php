<!-- THIS IS INDEX CENTER -->

<body>

    <body background="assets/img/bdthequebackground.jpg" alt="background">

        <!-- HEADER .................................................................................................................... -->
        <header>
            <a href="index.php" target="_blank">
                <img src="assets\img\help.png" class="img_help ml-1 mt-1" alt="help" />
            </a>
        </header>

        <!-- MAIN CONTAINER ............................................................................................................ -->
        <div class="container-fluid">

            <!-- CONNECTION FORM ....................................................................................................... --> 
            <div class="container-md align-self-auto bg-secondary mb-5 mb-10-sm p-5-md mt-15-md mt-15-sm mt-15-fs bg-opacity-75 border">
                
                <div class="mb-8 mt-3 fs-4 text-center">
                    <h1 class="bienvenue">Bienvenue</h1>
                    <img src="assets\img\line.png" class="line" alt="line" />
                </div>

                <form id="connexion" class="form_connection" action="" method="POST">

                    <!-- USER ID ....................................................................................................... -->
                    <div class="mb-3 mt-3 fs-4">
                        <input id="username" name="username" class="form-control" type="text" placeholder="Votre identifiant personnel" aria-describedby="Doit comporter au maximum 20 caractères" aria-label="USER+NUMERO" maxlength="20">
                    </div>
                    <div class="mb-3 fs-4">

                    </div>
                    <!-- PASSWORD -->
                    <div class="mb-3 fs-4">
                        <div class="row-auto align-items-center">
                            <div class="col-auto">
                                <input type="password" id="inputPassword6" class="form-control" placeholder="Votre mot de passe " aria-describedby="Doit comporter au maximum 15 caractères" aria-label="afpa" maxlength="15">
                            </div>
                        </div>

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
            <a href="index.php" target="_blank">
                <!-- PASSWORD FORGOT BUTTON -->
                <button class="button"><i class="fas fa-unlock-alt"></i>&nbspMot de passe oublié</button>
            </a>
        </footer>

        <div id="qunit" hidden></div>
        <div id="qunit-fixture" hidden></div>

    <!-- ========================================================= JS ================================================================== -->

            <!-- JAVA SCRIPT -->

            <script src="assets/js/metro.js"></script>
            <script src="assets/js/all.js"></script>
</body>

<!-- THIS IS INDEX CENTER -->
