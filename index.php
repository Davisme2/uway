<?php 
require_once 'config/config.php';
require 'traitement/function.php';

$jour = 10;
$annee = 2080;
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
                <h3 class="text-center">FORMULAIRE DES PERSONNES </h3>
                <hr>
                <br>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-center">Affichage des donnée enregistrées</h3>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                        <tr>
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
                <h3 class="text-center">INCRIPTION</h3>
                <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label>Nom: </label>
                        <input type="text" name="nom" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Prenom: </label>
                        <input type="text" name="prenom" class="form-control" placeholder="" required>
                    </div>

                    <!--Date-->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Jour</label>
                            <select name="textjour" id="" class="form-control">
                                <?php if (isset($_POST['textannee'])) { echo repetitionJ($jour);} ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Mois</label>
                            <select name='textmois'class='form-control'>
                            <?php if (isset($_POST[''])) { echo repetitionM(); } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Année</label>
                            <select name="textannee" id="" class="form-control">
                                <?php if (isset($_POST['textannee'])) { echo repetitionA($annee);} ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Ville: </label>
                        <input type="text" name="ville" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Age: </label>
                        <input type="number" name="age" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Email: </label>
                        <input type="email" name="email" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Tel: </label>
                        <input type="numero" name="numero" class="form-control" placeholder="" required>
                        <br>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btn_Ajout" class="btn btn-primary btn-block" value="Envoyer" >
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <footer class="container">
        <div class="row">
            <hr>
            <p class="text-center">Made by Helios 64</p>
        </div>
    </footer>
</body>
</html>