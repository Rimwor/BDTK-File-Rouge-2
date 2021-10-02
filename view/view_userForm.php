<!-- THIS IS : USER FORM -->

<form class="formulaire" method="GET" action="controler_users.php">
    <div class="container">

    <fieldset class="fieldset">
    <legend for="msg">Veuillez remplir le formulaire : </legend>
        
        <p>
        <label for="idUtilisateur">Utilisateur ID : </label>
        <input type="text" name="id" id="idUtilisateur"
                value=""/>
                <br />
        </p>

        <label for="idRole">Rôle d'Utilisateur: </label>
        <input type="text" name="role" id="idRole"
                value=""/>
                <br />
        </p>

        <p>
        <label for="idNom">Nom : </label>
        <input type="text" name="nom" id="idNom"
                value=""/>
                <br />
        </p>

        <p>      
        <label for="idPrenom">Prénom : </label>
        <input type="text" name="prenom" id="idPrenom"
                value=""/>
                <br />
        </p>

        <label for="idLogin">Login : </label>
        <input type="text" name="login" id="idLogin"
                value=""/>
                <br />
        </p>
        
        <label for="idMotPasse">Mot de passe : </label>
        <input type="text" name="motpasse" id="idMotPasse"
                value=""/>
                <br />
        </p>

        <label for="idAdresse">Adresse : </label>
        <input type="text" name="adresse" id="idAdresse"
                value=""/>
                <br />
        </p>

        <label for="idCP">Code postale : </label>
        <input type="text" name="codepostale" id="idCP"
                value=""/>
                <br />
        </p>

        <label for="idVille">Ville ID : </label>
        <input type="text" name="idVille" id="idVille"
                value=""/>
                <br />
        </p>

        <label for="idMail">Adresse Mail : </label>
        <input type="text" name="mail" id="idMail"
                value=""/>
                <br />
        </p>

        <label for="idTel">Téléphone : </label>
        <input type="text" name="tel" id="idTel"
                value=""/>
                <br />
        </p>

        <input type="hidden" name="action" value="<?php echo $action . "OK" ?>" />
        <input type="submit" value="Submit" />

    </fieldset>

    </div>
    </form>