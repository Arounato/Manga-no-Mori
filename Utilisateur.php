<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Utilisateur</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('composants/header.php') ?>

        <main>
            <section id="section_I-C">
                <form action="/ma-page-de-traitement" method="post">
                    <ul class="formulaire_I-C">
                        <p><strong>Inscription</strong></p>
                        <li>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="utilisateur_email"><br>
                        </li>
                        <li>
                            <label for="mot_de_passe">Mot de passe :</label>
                            <input type="password" id="mot_de_passe" name="utilisateur_mot_de_passe"><br>
                        </li>
                        <li>
                            <label for="confirmation_mot_de_passe">Confirmation du mot de passe :</label>
                            <input type="password" id="confirmation_mot_de_passe" name="utilisateur_confirmation_mot_de_passe"><br>
                        </li>
                            <input class="bouton_2" type="submit" value="Valider">
                    </ul>
                </form>
            </section>
        </main>

        <?php require_once ('composants/footer.php')?>

    </body>
</html>