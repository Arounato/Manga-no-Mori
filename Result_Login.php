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
        
            require_once('Database.php');

            $email = $_POST['email'];
            $mot_de_passe = $_POST['mot_de_passe'];

            $request = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
            $request->bindParam(':email', $email);
            $request->execute();
            
            $result = $request->fetchAll();

            if(count($result) > 0 && password_verify($mot_de_passe, $result[0]["mot_de_passe"])){
                $_SESSION["email"] = $email;
                header('Location: Accueil.php');
                exit;
            }else{
                echo "Email ou mot de passe incorrect.";
            }

        ?>
    </main>

    <section>

    </section>

    <?php require_once('composants/footer.php') ?>

</body>

</html>