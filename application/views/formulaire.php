<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>BetaGouv - Signalement</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css" ?>"/>
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/bootstrap-chosen.css" ?>"/>
</head>
<body>
<header class="mb-4">
    <div class="container">
        <div class="row">
            <div id="logo-me-title-wrapper">
                <img src="<?php echo base_url() . 'assets/images/ministere-economie.png'; ?>"
                     alt="logo Ministère de l'Économie" class="m-3 mr-5" id="logo-DGCCRF"/>

                <h1 class="align-middle text-center">Signalement</h1>
            </div>
            <!-- <img src="<?php echo base_url() . 'assets/images/DGCCRF2011_184x76.jpg'; ?>" alt="logo DGCCRF" class="m-3" id="logo-me" />-->
        </div>
    </div>
</header>
<div class="container mb-5">
    <div class="row">
        <div class="offset-lg-2 col-lg-8 col-sm-12 pb-3">
            <p class="font-weight-bold mb-3">Consommateurs, vous pouvez déposer un signalement afin de faire réagir les
                professionnels et informer la DGCCRF
            </p>
            <form>
                <div class="form-group">
                    <label for="place">Etablissement</label>
                    <input class="form-control" id="place" placeholder="Nom du commerçant ...">
                </div>
                <div class="form-group mb-4">
                    <label for="place">Adresse</label>
                    <input class="form-control" id="place" placeholder="numéro, rue et ville ...">
                </div>
                <div class="form-group">
                    <label for="place-categorie">Quelle est la catégorie de cet établissement ? </label>
                    <select class="form-control form-control-lg chosen-select" id="place-categorie" name="place-categorie" data-placeholder="Choisissez ...">

                        <option value="Café / Restaurant">Café / Restaurant</option>
                        <option value="Grande surface / Supérette">Grande surface / Supérette</option>
                        <option value="Boulanger / Boucher">Boulanger / Boucher</option>
                        <option value="Magasin non alimentaire">Magasin non alimentaire</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Quel type d'anomalie avez vous constaté ? </label>
                    <select class="form-control form-control-lg chosen-select" id="type" name="type" data-placeholder="Choisissez ...">
                        <option>Accueil</option>
                        <option>Paiement</option>
                        <option>Prix</option>
                        <option>Produit</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="anomalies">Précisez</label>
                    <select class= "form-control form-control-lg chosen-select" id="anomalies" name="anomalies[]" multiple
                            data-placeholder="Choisissez une ou plusieurs anomalies ...">
                        <option>Personnel sans coiffe ou gants</option>
                        <option>Restaurant sale</option>
                        <option>Présence de rat ou d'insecte</option>
                        <option>Problème de température (ex: vitrine réfrigérée)</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="picture">Ajouter une photo</label>
                    <input type="file" class="form-control-file" id="picture">
                </div>
                <div class="form-grou mb-4">
                    <label for="description">Description de votre signalement</label>
                    <textarea class="form-control" id="description" rows="3" maxlength="200" placeholder="200 caractères maximum"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Vos nom et prénom</label>
                    <input class="form-control" id="name" placeholder="Jean Dupont">
                </div>
                <div class="form-group mb-5">
                    <label for="email">Votre email </label>
                    <input type="email" class="form-control" id="email" placeholder="john@gmail.com">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Signaler</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="<?php echo base_url() . "assets/js/bootstrap.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/bootstrap.bundle.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/bootstrap.min.js.map" ?>"></script>
<script src="<?php echo base_url() . "assets/js/chosen.jquery.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/main.js" ?>"></script>
</body>
</html>