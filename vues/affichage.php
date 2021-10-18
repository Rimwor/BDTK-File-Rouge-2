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
