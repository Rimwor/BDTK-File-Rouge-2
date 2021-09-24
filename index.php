<html lang="fr">
<!-- ======================================================== START ================================================================ -->
<!-- MAIN CONTAINER -->
<!-- MAIN CONTAINER : class="container-fluid" -->
<!-- HEADER : class="header" -->
<!-- IMG HELP : class="img_help" -->

<!-- CONNECTION FORM -->
<!-- FORM : class="form_connection" -->
<!-- USER ID -->
<!-- INPUT ID : class="metro-input" id="username" -->
<!-- PIN -->
<!-- INPUT PIN : class="metro-input" : id="password" -->
<!-- SUBMIT button -->
<!-- BUTTON : id="btn_confirm" -->

<!-- FOOTER -->
<!-- FOOTER : class="footer" -->
<!-- MOT DE PASSE OUBLIE button : class="button" -->

<!-- ======================================================== HEAD ================================================================= -->

<head>

    <!-- META -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>Bienvenue à la bédéthèque de Stockholm</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="ASSETS/CSS/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="ASSETS/CSS/bootstrap/_bootswatch.scss">
    <link rel="stylesheet" href="ASSETS/CSS/bootstrap/_variables.scss">
    <link rel="stylesheet" href="ASSETS/CSS/metro/metro-all.css">
    <link rel="stylesheet" href="ASSETS/CSS/fontawasome/fontawesome.css">

    <link rel="stylesheet" href="ASSETS/CSS/index.css">

    <link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.16.0.css">

</head>
<!-- ======================================================== BODY ================================================================= -->

<body>

    <body background="ASSETS\MEDIA\bdthequebackground.jpg" alt="background">

        <!-- HEADER -->
        <header>
            <a href="HTML\help.html" target="_blank">
                <img src="ASSETS\MEDIA\help.png" class="img_help ml-1 mt-1" alt="help" />
            </a>
        </header>

        <!-- MAIN CONTAINER -->
        <div class="container-fluid">

            <!-- CONNECTION FORM -->
            <div class="container-md align-self-auto bg-secondary p-5-md mt-10-md mt-15-sm mt-15-fs text-light bg-opacity-75 border">
                
                <div class="mb-3 mt-3 fs-4 text-center">
                    <h1 class="bienvenue">Bienvenue</h1>
                </div>

                <form id="connexion" class="form_connection" action="compte_bibliothecaire.html" method="POST">

                    <!-- USER ID -->
                    <div class="mb-3 mt-3 fs-4">
                        <label for="username">Entrez votre identifiant personnel :</label>
                        </br>
                        <input id="username" class="metro-input" placeholder="  Votre identifiant personnel" type="text" name="username" maxlength="10" style="-webkit-text-security: disc;" required/>
                    </div>

                    <!-- PIN -->
                    <div class="mb-3 fs-4">
                        <label for="password" class="form-label">Saisie votre code PIN :</label>
                        <!-- KEY PAD -->
                        <div class="row">
                            <div class="cell-md-6 fs-4">
                                <input id="password" name="password" class="metro-input" placeholder="Votre code pin" type="text" data-role="keypad" data-shuffle="true" data-dynamic-position="false" data-on-change="$('#change_target').val(arguments[0])" data-key-length="6" required="required"/>
                            </div>
                        </div>
                        </br>
                    </div>
                </form>

                <!-- SUBMIT -->
                <div class="text-right">
                    <button id="btn_confirm" type="submit" class="btn btn-secondary">Confirmer</button>
                </div>
            </div>

        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <a href="HTML\mot_de_passe_oublie.html" target="_blank">
                <!-- PASSWORD FORGOT BUTTON -->
                <button class="button"><i class="fas fa-unlock-alt"></i>&nbspMot de passe oublié</button>
            </a>
        </footer>

        <div id="qunit" hidden></div>
        <div id="qunit-fixture" hidden></div>

    </body>
    <!-- ========================================================= JS ================================================================== -->

        <!-- JAVA SCRIPT -->
        <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>
        <script src="ASSETS/JS/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <script src="ASSETS/JS/comptes_utilisateurs.js"></script>
        <script src="ASSETS/JS/controles_profils.js"></script>
        <script src="ASSETS/JS/connexion.js"></script>

        <script src="ASSETS/JS/metro.js"></script>
        <script src="ASSETS/JS/all.js"></script>


    <!-- ======================================================== END ================================================================== -->

</html>