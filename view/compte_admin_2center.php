<!-- THIS IS COMPTE (ADMIN) CENTER -->

<body>

    <body background="assets/img/bdthequebackground1.jpg" alt="background">

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
                
            <?php echo $info ?>
                <p>
                    <li><a href="test.php"><button>Liste d'Utilisateurs</button></a></li>
                    <li><a href="test_search.php"><button>Utilisateurs Recherche</button></a></li>
                    <li><a href="test_add.php"><button>Utilisateur Creation</button></a></li>
                    <li><a href="test_delete.php"><button>Utilisateur Suppression</button></a></li>
                    <li><a href="test_modif.php"><button>Utilisateur Modification</button></a></li>
                </p>
               
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
            <script src="https://code.jquery.com/qunit/qunit-2.16.0.js"></script>
            <script src="assets/js/jquery.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

            <script src="assets/js/comptes_utilisateurs.js"></script>
            <script src="assets/js/controles_profils.js"></script>
            <script src="assets/js/connexion.js"></script>

            <script src="assets/js/metro.js"></script>
            <script src="assets/js/all.js"></script>
</body>

<!-- THIS IS COMPTE (ADMIN) CENTER -->
