<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formulaire</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="img/logo/manganomori/2.png">
    </head>
    <body>
        
        <?php require_once ('composants/header.php') ?>

        <main>
            <section id="section_I-C">
                <!--action = page ou les donnee inscrite et envoyer depuis le formulaire vont etre traiter-->
                <form action="Result.php" method="post">
                    <ul class="formulaire_I-C">
                        <h3>Inscription</h3>
                        <li>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email">
                        </li>
                        <li>
                            <label for="mot_de_passe">Mot de passe :</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
                        </li>
                        <li>
                            <label for="confirmation_mot_de_passe">Confirmation du mot de passe :</label>
                            <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe">
                        </li>
                        <li>
                            <input class="bouton_2" type="submit" value="Valider">
                        </li>
                    </ul>
                </form>
            </section>
        </main>

        <?php require_once ('composants/footer.php')?>

    </body>
</html>