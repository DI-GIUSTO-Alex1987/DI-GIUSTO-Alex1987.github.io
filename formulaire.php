<?php

?>

<form name="contact_form" method="post" action="">
    <div class="container-fluid formulaire">
        <div class="row pos-formulaire">
            <div class="col-lg-5">
                <div class="mb-3 row">
                    <label for="societe" class="col-sm-4 col-form-label">Votre Societe :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="societe" name="societe" maxlength="50" value="<?php if (isset($_POST['societe'])) echo htmlspecialchars($_POST['societe']); ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nom" class="col-sm-4 col-form-label">Votre Nom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" name="nom" maxlength="50" value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="prenom" class="col-sm-4 col-form-label">Votre Prenom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" name="prenom" maxlength="50" value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']); ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-4 col-form-label">Votre E-mail :</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" maxlength="80" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telephone" class="col-sm-4 col-form-label">Votre telephone :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="telephone" name="telephone" maxlength="30" value="<?php if (isset($_POST['telephone'])) echo htmlspecialchars($_POST['telephone']); ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <div class="mb-5 row">
                    <div class="col-sm-8">
                        <label for="choice" class="form-label">Votre demande concerne :</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="1" id="crea_site_vitrine">Création d'un site vitrine</option>
                            <option value="2">Création d'un site e-commerce</option>
                            <option value="3">Autres</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-sm-8">
                        <label for="join" class="form-label">Ajoutez une pièce jointe :<p>(non obligatoire)</p></label>
                        <input class="form-control" type="file" id="join">
                    </div>
                </div>
            </div>
            <?php
            /*Trouver comment envoyer les données de la liste */
            ?>
        </div>
        <div class="row pos-formulaire-pbas2">
            <div class="col-lg-4 pos-ad-mail">
                <p>Ou contactez moi à l'adresse suivante :</p>
                <p>contact@latelierduspitzberg.com</p>
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <label for="commentaire" class="form-label">Décrivez votre demande :</label>
                    <textarea class="form-control commentaire" id="commentaire" name="commentaire" rows="3"><?php if (isset($_POST['commentaire'])) echo htmlspecialchars($_POST['commentaire']); ?></textarea>
                </div>
            </div>
            <div class="col-lg-4 pos-btn-submit">
                <button type="submit" class="btn-sendmail">Envoyer</button>
            </div>

            <div class="row">
                <div class="col-lg-12 pos-ad-mail-mobile">
                <p>Ou contactez moi à l'adresse suivante :</p>
                <p>contact@latelierduspitzberg.com</p>
            
                </div>
            </div>

            <?php
            /*Travailler sur l'envoi de pièce jointe*/
            ?>
        </div>
    </div>
</form>








<?php
if (isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@latelierduspitzberg.fr";
    $email_subject = "l'atelier du Spitzberg *Nouvelle demande*";

    function died($error)
    {
        // your error code can go here
        echo
        "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
            " formulaire que vous avez envoyé. ";
        echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
        echo $error . "<br /><br />";
        echo "Merci de corriger ces erreurs.<br /><br />";
        die();
    }


    // si la validation des données attendues existe
    if (
        !isset($_POST['societe']) ||
        !isset($_POST['nom']) ||
        !isset($_POST['prenom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        /*!isset($_POST['choix']) ||*/
        !isset($_POST['commentaire'])
    ) {
        died(
            'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
                ' problème.'
        );
    }


    $societe = $_POST['societe']; // required
    $nom = $_POST['nom']; // required
    $prenom = $_POST['prenom']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // required
    $commentaire = $_POST['commentaire']; // required
    /*$choix = $_POST['choix']; // required*/

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .=
            'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
    }

    if (!strlen($string_exp, $telephone) < 10) {
        $error_message .=
            'Le numéro de telephone que vous avez entrée ne semble pas être valide.<br />';
    }

    // Prend les caractères alphanumériques + le point et le tiret 6
    $string_exp = "/^[A-Za-z0-9 .'-]+$/";

    if (!preg_match($string_exp, $nom)) {
        $error_message .=
            'Le nom que vous avez entré ne semble pas être valide.<br />';
    }

    if (!preg_match($string_exp, $prenom)) {
        $error_message .=
            'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }

    if (strlen($commentaire) < 2) {
        $error_message .=
            'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }




    $email_message = "Hey Alex, Un nouveau mail vient d'arriver!.\n\n";
    $email_message .= "Societe: " . $societe . "\n";
    $email_message .= "Nom: " . $nom . "\n";
    $email_message .= "Prenom: " . $prenom . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Telephone: " . $telephone . "\n";
    $email_message .= "Commentaire: " . $commentaire . "\n";
    /*$email_message .= "Choix: " . $choix . "\n";*/

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
?>

    <!-- mettez ici votre propre message de succès en html -->


<?php

}
