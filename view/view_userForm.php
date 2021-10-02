<!-- THIS IS : USER FORM -->

<form class="formulaire" method="GET" action="controler_users.php">
    <div class="container">

    <fieldset class="fieldset">
    <legend for="msg">Veuillez remplir le formulaire : </legend>
        
            <p>
            <label for="idUtilisateur">Utilisateur ID : </label>
            <input type="text" name="id" id="idUtilisateur"
                    value="<?php echo $utilisateur_id ?>"/>
                    <br />
            </p>

            <label for="idMotPasse">Mot de passe : </label>
            <input type="text" name="motpasse" id="idMotPasse"
                    value="<?php echo $utilisateur_mdp ?>"/>
                    <br />
            </p>

            <label for="idLogin">Login : </label>
            <input type="text" name="login" id="idLogin"
                    value="<?php echo $utilisateur_login ?>"/>
                    <br />
            </p>

            <label for="idMail">Adresse Mail : </label>
            <input type="text" name="mail" id="idMail"
                    value="<?php echo $utilisateur_mail ?>"/>
                    <br />
            </p>

            <p>
            <label for="idNom">Nom : </label>
            <input type="text" name="nom" id="idNom"
                    value="<?php echo $utilisateur_nom ?>"/>
                    <br />
            </p>

            <p>      
            <label for="idPrenom">Prénom : </label>
            <input type="text" name="prenom" id="idPrenom"
                    value="<?php echo $utilisateur_prenom ?>"/>
                    <br />
            </p>


            <label for="idAdresse">Adresse : </label>
            <input type="text" name="adresse" id="idAdresse"
                    value="<?php echo $utilisateur_adr_num_rue ?> "/>
                    <br />
            </p>

            <label for="idCP">Code postale : </label>
            <input type="text" name="codepostale" id="idCP"
                    value="<?php echo $utilisateur_adr_cp ?>"/>
                    <br />
            </p>

            <label for="idTel">Téléphone : </label>
            <input type="text" name="tel" id="idTel"
                    value="<?php echo $utilisateur_tel ?>"/>
                    <br />
            </p>  

            <label for="idVille">Ville ID : </label>
            <input type="text" name="idVille" id="idVille"
                    value="<?php echo $ville_id ?>"/>
                    <br />
            </p>

            <label for="idRole">Rôle Utilisateur: </label>
            <input type="text" name="role" id="idRole"
                    value="<?php echo $role_id ?>"/>
                    <br />
            </p>   

        <input type="hidden" name="action" value="<?php echo $action . "OK" ?>" />
        <input type="submit" value="Submit" />

    </fieldset>

    <?php if ($action == 'édition') { ?>

        <input type="hidden" name="idOLD" value="<?php echo $utilisateur_id ?>">
        <input type="hidden" name="motpasseOLD" value="<?php echo $utilisateur_mdp ?>">
        <input type="hidden" name="loginOLD" value="<?php echo $utilisateur_login ?>">
        <input type="hidden" name="mailOLD" value="<?php echo $utilisateur_mail ?>">
        <input type="hidden" name="nomOLD" value="<?php echo $utilisateur_nom ?>">
        <input type="hidden" name="prenomOLD" value="<?php echo $utilisateur_prenom ?>">
        <input type="hidden" name="adresseOLD" value="<?php echo $utilisateur_adr_num_rue ?>">
        <input type="hidden" name="codepostaleOLD" value="<?php echo $utilisateur_adr_cp ?>">
        <input type="hidden" name="telOLD" value="<?php echo $utilisateur_tel ?>">
        <input type="hidden" name="idVilleOLD" value="<?php echo $ville_id ?>">
        <input type="hidden" name="roleOLD" value="<?php echo $role_id ?>">

    <?php } ?>

    </div>
    </form>