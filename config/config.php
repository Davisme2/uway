<?php

// connexion au server

$host = 'localhost';
$user = "root";
$pass = "LJSF§£%%/§/.°980732mlsdjfsf";
$dbname = 'uway';

try 
{
    $dsn = "mysql:host=localhost".$host . ";dbname=" . $dbname;
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    //echo "La connexion a ete etablie avec success";
}
catch(PDOException $e)
{
    echo "Pas de connexion a la base de donnees" . $e->getMessage();
}

if (isset($_POST['btn_Ajout'])) {
    $cours = $_POST[''];



    $sql = "INSERT INTO personnes (nom, prenom, ville, date_user, age, email, tel) VALUES (:nom, :prenom, :date_user, :ville, :age, :email, :tel, ?)";
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':date_user', $date_user);
    $stmt->bindParam(':age', $age);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tel', $tel);


    $stmt->execute();
    header('Location:index.php');
}


?>