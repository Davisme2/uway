<?php

// connexion au server

$connexion = new PDO('mysql:host=localhost;dbname=uway', 'root', 'LJSF§£%%/§/.°980732mlsdjfsf');
$requete = $bdd->prepare('INSERT INTO personnes (nom, prenom, ville, age, email, tel) VALUES (?, ?, ?, ?, ?, ?, ?)');

$requete->execute(array( htmlspecialchars($_POST['nom']) , htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['']), htmlspecialchars($_POST['ville']), htmlspecialchars($_POST['age']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['tel'])));


?>