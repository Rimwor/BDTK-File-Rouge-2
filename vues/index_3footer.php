<!-- THIS IS FOOTER -->
<?php if ($action != 'accueil') { ?> 
<footer>
    <div class="fixed-bottom">
    <div class="row ml-15 mr-15 align-self-auto bg-secondary bg-opacity-75">
        <div class="col">
            <!-- empty -->
        </div>
        <div class="col">
            <!-- empty -->
        </div>
        <?php if ($action != 'admin') { ?> 
        <div class="col mr-1 d-flex align-items-end flex-column">
            <a href="index.php?action=admin"><button id="btnback" name="back" class="btn btn-light btn-sm mb-1 mt-1">Retour</button></a>
        </div>
        <?php } ?>

        <?php if ($action == 'admin') { ?>
        <div class="col mr-1 d-flex align-items-end flex-column">
            <br/>
        </div>
        <?php } ?>
        
    </div>
    </div>
</footer>
<?php } ?>
<!-- ======================================================== END ================================================================== -->

</html>

<!-- THIS IS FOOTER -->
