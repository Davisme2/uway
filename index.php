<?php 
require 'traitement/function.php';
require_once 'config/config.php';

$jour = 10;
$annee = 2080;
$age = 90;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>BIENVENUE</title>
</head>
<body>
    <div class="container-fluid col-md-12">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br> 
                <h3 class="text-center"> <span class="badge bg-success"> TEST FORMULAIRE AVEC BASE DE DONNEE </span></h3>
                <hr>
                <br>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center alert alert-primary"> <span class="badge bg-primary"> Données enregistrées dans le serveur</span></h3>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-success">
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Ville</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <td colspan="2" class="text-center">Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="table-light">
                            <td>1</td>
                            <td>Manglé</td>
                            <td>David</td>
                            <td>Abidjan</td>
                            <td>28</td>
                            <td>davis93m@gmail.com</td>
                            <td>0777902340</td>
                            <td><a href="#" class="btn btn-danger">Suprimer</a></td>
                            <td><a href="#" class="btn btn-info">Modifier</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <h3 class="text-center alert alert-primary"> <span class="badge bg-primary"> INSCRIVEZ VOUS </span></h3>
                <hr>
                <form action="config/config.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" class="form-control" placeholder="" class="form-control is-valid" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom: </label>
                        <input type="text" name="prenom" class="form-control" placeholder="" class="form-control is-valid" required>
                    </div>

                    <!--Date-->
                    <div class="row">
                        <div class="form-group col-md-4">

                            <select name="textjour" id="" class="form-control">
                                <?= repetitionJ($jour) ?>
                                <label for="jour">Jour</label>
                                <div class="feed-back">
                                    good!
                                </div>
                            </select>
                        </div>
                        <div class="form-group col-md-4">

                            <select name='textmois'class='form-control'>
                                <?= repetitionM() ?>
                                <label for="mois">Mois</label>
                                <div class="feed-back">
                                    good!
                                </div>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            
                            <select name="textannee" id="" class="form-control">
                                <?= repetitionA($annee) ?>
                                <label for="annee">Année</label>
                                <div class="feed-back">
                                    good!
                                </div>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ville">Ville: </label>
                        <input type="text" name="ville" class="form-control" placeholder="" class="form-control is-valid" required>
                        <?php if (isset($_POST['ville'])): ?>
                        <div class="feed-back">
                            good!
                        </div>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="age">Age: </label>
                        <input type="number" name="age" class="form-control" placeholder="" class="form-control is-valid" required>
                        <?php if (isset($_POST['age'])): ?>
                        <div class="feed-back">
                            good!
                        </div>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="" class="form-control is-valid" required>
                        <?php if (isset($_POST['email'])): ?>
                        <div class="feed-back">
                            good!
                        </div>
                        <?php endif ?>
                    </div>
                    <div class="form-group">
                        <label for="tel">Tel: </label>
                        <input type="numero" name="numero" class="form-control" placeholder="" class="form-control is-valid" required>
                        <?php if (isset($_POST['numero'])): ?>
                        <div class="feed-back">
                            good!
                        </div>
                        <?php endif ?>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn_Ajout" class="btn btn-primary btn-lg" value="Envoyer" >
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <footer class="container">
        <div class="row">
            <hr>
            <p class="text-center">Made by Helios64 | Tout droit reservé 2021</p>
        </div>
    </footer>
</body>
</html>