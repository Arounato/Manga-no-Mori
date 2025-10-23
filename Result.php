<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Result</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo/manganomori/2.png">
</head>

<body>

    <?php require_once('composants/header.php') ?>

    <main>
        <?php

        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];
        $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

        if(empty($email) || empty($mot_de_passe) || empty($confirmation_mot_de_passe)){
            header('Location: Formulaire.php');
        }

        echo "<p> Email : $email; Mot de passe : $mot_de_passe; Confirmation_mot_de_passe : $confirmation_mot_de_passe</p>"

        ?>
    </main>

    <?php require_once('composants/footer.php') ?>

</body>

</html>