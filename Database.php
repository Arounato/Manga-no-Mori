<?php 

$host = "localhost";
$dbname = "cours_php";
$username = "root";
$password = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connexion à la base de données réussie !";
}catch(PDOException $e){
    echo "Echec de la connexion :" . $e->getMessage();
}

    /* Installation de phpmyadmin */

?>