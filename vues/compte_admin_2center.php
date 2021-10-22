<body>
<!-- Beata -->
    <body background="assets/img/bdthequebackground1.jpg" alt="background">


        <!-- MAIN CONTAINER ............................................................................................................ -->
        <div class="container-fluid">

            <!-- CONNECTION FORM ....................................................................................................... --> 
            <div class="container-md align-self-auto bg-secondary p-5-md mt-10-md mt-15-sm mt-15-fs bg-opacity-75 border">

                <img src="assets\img\profile.png" class="responsive rounded float-right" alt="profile">
                <div class="mt-5 mb-5">
                
                    <?php echo $info ?>
                    <div class="mt-5">
                    <p>
                        <li><a href="index.php?action=affichageUsers"><button class="mb-2">Liste d'Utilisateurs</button></a></li>
                        <li><a href="index.php?action=recherche"><button class="mb-2">Rechercher un utilisateur</button></a></li>
                        <li><a href="index.php?action=ajout"><button class="mb-2">Créer un utilisateur</button></a></li>
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