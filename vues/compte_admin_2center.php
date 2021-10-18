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

                <img src="assets\img\profile.png" class="responsive rounded float-right" alt="profile">
                <div class="mt-5 mb-5">
                
                    <?php echo $info ?>
                    <div class="mt-5">
                    <p>
                        <li><a href="index.php?action=affichageUsers"><button>Liste d'Utilisateurs</button></a></li>
                        <li><a href="index.php?action=recherche"><button>Utilisateurs : Recherche</button></a></li>
                        <li><a href="test_add.php"><button>Utilisateur : Creation</button></a></li>
                        <li><a href="test_delete.php"><button>Utilisateur : Suppression</button></a></li>
                        <li><a href="test_modif.php"><button>Utilisateur : Modification</button></a></li>
                    </p>
                    </div>
                    
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