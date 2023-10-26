<form name="contact_form" action="" method="post" enctype="multipart/form-data">
    <div class="container-fluid formulaire">
        <div class="row pos-formulaire">
            <div class="col-lg-5">
                <div class="mb-3 row">
                    <label for="societe" class="col-sm-4 col-form-label">Votre Societe :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="societe" name="societe" maxlength="50" >
                        
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nom" class="col-sm-4 col-form-label">Votre Nom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nom" name="nom" required pattern="[A-Za-z '- ç é è à]+$" maxlength="20">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="prenom" class="col-sm-4 col-form-label">Votre Prenom :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="prenom" name="prenom" required pattern="[A-Za-z '- ç é è à]+$" maxlength="20">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-4 col-form-label">Votre E-mail :</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" maxlength="80" required pattern="^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="telephone" class="col-sm-4 col-form-label">Votre telephone :</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="telephone" name="telephone" minlength="10" maxlength="20" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <div class="mb-5 row">
                    <div class="col-sm-8">
                        <label for="choix" class="form-label">Votre demande concerne :</label>
                        <select class="form-select" aria-label="Default select example" name="choix">
                            <option selected value="vitrine">Création d'un site vitrine</option>
                            <option value="e-commerce">Création d'un site e-commerce</option>
                            <option value="autres">Autres</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-sm-8">
                        <label for="fichier" class="form-label">Ajoutez une pièce jointe(jpeg,png ou pdf, max 2Mo) :<p>(non obligatoire)</p></label>
                        <input class="form-control" type="file" name="fichier" id="fichier"/>
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
                    <label for="message" class="form-label">Décrivez votre demande :</label>
                    <textarea class="form-control message" id="message" name="message" rows="8" required></textarea>
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
        </div>
    </div>
</form>



<?php

if (isset($_POST['email'])) {

    session_start();

    //RECUPERATION DES DONNEES

    error_reporting(E_ALL);
    ini_set("display_errors", 1); //Affichage des erreurs

    //Eviter les insertions de scripts dans le cas d'un e-mail HTML
    //$nom = htmlentities($_POST['nom']);
    //$prenom = htmlentities($_POST['prenom']);
    //$societe = htmlentities($_POST['societe']);
    //$email_from = htmlentities($_POST['email']);
    //$tel = htmlentities($_POST['telephone']);
    //$message = htmlentities($_POST['message']);


    $nom =  htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $societe =  htmlspecialchars($_POST['societe']);
    $email_from =  htmlspecialchars($_POST['email']);
    $tel =  htmlspecialchars($_POST['telephone']);
    $message =  htmlspecialchars($_POST['message']);

    $choix = htmlspecialchars($_POST['choix']);




    //Verifie si le fournisseur prend en charge les r
    if (preg_match("#@(hotmail|live|msn).[a-z]{2,4}$#", $email_from)) {
        $passage_ligne = "\n";
    } else {
        $passage_ligne = "\r\n";
    }


    $email_to = "contact@latelierduspitzberg.fr, digiusto.alex@tutanota.com"; //Destinataires
    //$email_subject = "Test contact"; //Sujet du mail
    $email_subject = $choix; //Sujet du mail
    $boundary = md5(rand()); // clé aléatoire de limite


    //ON NETTOIE LE MESSAGE

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }



    //CREATION DU MAIL - EN TETE

    $headers = "From: " . $nom . " <" . $email_from . ">" . $passage_ligne; //Emetteur
    $headers .= "Reply-to: " . $nom . " <" . $email_from . ">" . $passage_ligne; //Emetteur
    $headers .= "MIME-Version: 1.0" . $passage_ligne; //Version de MIME
    //$headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= 'Content-Type: multipart/form-data; boundary=' . $boundary . ' ' . $passage_ligne;
    //Contenu du message (alternative pour deux versions ex:text/plain et text/html

    

    //CREATION DU MAIL - CORPS

    //Content-Type: text/plain; charset=ISO-8859-1 
    //Content-transfer-encoding: base64

    $email_message = '--' . $boundary . $passage_ligne; //Séparateur d'ouverture
    $email_message .= "Content-Type: text/plain; charset=utf-8" . $passage_ligne; //Type du contenu
    //$email_message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne; //Encodage
    //$email_message .= "Content-Type: text/plain; charset=ISO-8859-15" . $passage_ligne;
    $email_message .= "Content-transfer-encoding: 8bit" . $passage_ligne;
    $email_message .= $passage_ligne . 'Hey Alex, tu as un nouveau client. Que les anciens dieux soit avec toi !' . $passage_ligne;
    $email_message .= $passage_ligne . 'Societe :' .clean_string($societe) . $passage_ligne;
    $email_message .= $passage_ligne . 'Nom :'  .clean_string($nom) . $passage_ligne;
    $email_message .= $passage_ligne . 'Prenom :'  .clean_string($prenom) . $passage_ligne;
    $email_message .= $passage_ligne . 'E-mail :'  .clean_string($email_from) . $passage_ligne;
    $email_message .= $passage_ligne . 'Telephone :'  .clean_string($tel) . $passage_ligne;
    $email_message .= $passage_ligne . 'Message :' . $passage_ligne;
    $email_message .= $passage_ligne .clean_string($message). $passage_ligne; //Contenu du message
    


    //AJOUT DE LA PIECE JOINTE

    //Pièce jointe
    if (isset($_FILES["fichier"]) &&  $_FILES['fichier']['name'] != "") { //Vérifie sur formulaire envoyé et que le fichier existe
        $nom_fichier = $_FILES['fichier']['name'];
        $source = $_FILES['fichier']['tmp_name'];
        $type_fichier = $_FILES['fichier']['type'];
        $taille_fichier = $_FILES['fichier']['size'];

        if ($nom_fichier != ".htaccess") { //Vérifie que ce n'est pas un .htaccess
            if (
                $type_fichier == "image/jpeg"
                || $type_fichier == "image/pjpeg"
                || $type_fichier == "image/png"
                || $type_fichier == "application/pdf"
            ) { //Soit un jpeg soit un pdf

                if ($taille_fichier <= 2097152) { //Taille supérieure à Mo (en octets)
                    $tabRemplacement = array("é" => "e", "è" => "e", "à" => "a"); //Remplacement des caractères spéciaux

                    $handle = fopen($source, 'r'); //Ouverture du fichier
                    $content = fread($handle, $taille_fichier); //Lecture du fichier
                    $encoded_content = chunk_split(base64_encode($content)); //Encodage
                    $f = fclose($handle); //Fermeture du fichier


                    $email_message .= $passage_ligne . "--" . $boundary . $passage_ligne; //Deuxième séparateur d'ouverture
                    $email_message .= 'Content-type:'.$type_fichier.';name="'.$nom_fichier.'"'. $passage_ligne; //Type de contenu (application/pdf ou image/jpeg)
                    $email_message .='Content-Disposition: attachment; filename="'.$nom_fichier.'"'. $passage_ligne; //Précision de pièce jointe
                    $email_message .= 'Content-transfer-encoding:base64'. $passage_ligne; //Encodage
                    $email_message .= $passage_ligne; //Ligne blanche. IMPORTANT !
                    $email_message .= $encoded_content. $passage_ligne; //Pièce jointe
                    //$email_message .= "X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";


                } else {
                    //Message d'erreur
                    $email_message .= $passage_ligne . "L'utilisateur a tenté de vous envoyer une pièce jointe mais celle ci était superieure à 2Mo." . $passage_ligne;
                }
            } else {
                //Message d'erreur
                $email_message .= $passage_ligne . "L'utilisateur a tenté de vous envoyer une pièce jointe mais elle n'était pas au bon format." . $passage_ligne;
            }
        } else {
            //Message d'erreur
            $email_message .= $passage_ligne . "L'utilisateur a tenté de vous envoyer une pièce jointe .htaccess." . $passage_ligne;
        }
    }
    $email_message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne; //Séparateur de fermeture


    //ON ENVOI LE MESSAGE


    //if (mail($email_to, $email_subject, $email_message, $headers) == true) {  //Envoi du mail
    //    header('Location: success.php'); //Redirection
    //}


    mail($email_to, $email_subject, $email_message, $headers); //Envoi du mail
    session_destroy();

?>


    <!----renvoi en cas de succès--->
    <script>
        window.location.replace("https://latelierduspitzberg.fr/success.php");
    </script>
    


<?php

}

?>