<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>BetaGouv - Signalement</title>


    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/bootstrap-chosen.css" ?>"/>
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css" ?>"/>

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
            <p class="mb-4"><span class="font-weight-bold">Consommateurs, vous avez constaté une anomalie ? Vous pouvez déposer ici un signalement  afin d’informer simultanément le professionnel concerné et la DGCCRF </span><span class="font-italic">(Direction Général de la Concurrence, Consommation et Répression des Fraudes).</span><br/><span class="font-weight-bold">Vous ne serez pas contacté à la suite de votre signalement, qui a vocation d'information.</span></p>
            <form>

                <div class="form-group">
                    <label for="place-category">Quel type d'établissement souhaitez vous signaler ? </label>
                    <select class="form-control form-control-lg chosen-single-select" id="place-category" name="place-category" data-placeholder="Choisissez ...">
                        <option selected></option>
                        <option value="Café / Restaurant">Café / Restaurant</option>
                        <option value="Grande surface / Supérette">Grande surface / Supérette</option>
                        <option value="Boulanger / Boucher">Commerçant de proximité</option>
                        <option value="Magasin non alimentaire">Magasin non alimentaire</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Quel type d'anomalie avez vous constaté ? </label>
                    <select class="form-control form-control-lg chosen-single-select" id="type" name="type" data-placeholder="Choisissez ...">
                        <option selected></option>
                        <option>Accueil</option>
                        <option>Paiement</option>
                        <option>Prix</option>
                        <option>Produit</option>
                        <option>Autre</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="anomalies">Précisez</label>
                    <select class= "form-control form-control-lg chosen-single-select" id="anomalies" name="anomalies"
                            data-placeholder="Choisissez une anomalie ...">
                        <option selected></option>
                        <option>Personnel sans coiffe ou gants</option>
                        <option>Restaurant sale</option>
                        <option>Présence de rat ou d'insecte</option>
                        <option>Problème de température (ex: vitrine réfrigérée)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="place">Etablissement</label>
                    <input class="form-control" id="place" placeholder="Nom du commerçant ...">
                </div>
                <div class="form-group mb-4">
                    <label for="place-address">Adresse</label>
                    <input class="form-control" id="place-address" placeholder="numéro, rue et ville ...">
                </div>

                <div class="form-group mb-4">
                    <label for="picture">Ajouter une photo</label>
                    <input type="file" class="form-control-file" id="picture">
                </div>
                <div class="form-grou mb-4">
                    <label for="description">Description de votre signalement</label>
                    <textarea class="form-control" id="description" rows="3" maxlength="200" placeholder="200 caractères maximum"></textarea>
                </div>
                <p class="font-weight-bold">Votre identité ne sera pas indiqué au professionnel.</p>
                <div class="form-group">
                    <label for="name">Vos nom et prénom</label>
                    <input class="form-control" id="name" placeholder="Prénom Nom ...">
                </div>
                <div class="form-group mb-5">
                    <label for="email">Votre email </label>
                    <input type="email" class="form-control" id="email" placeholder="votreadresse@mail.fr">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Signaler</button>
            </form>
        </div>
    </div>
</div><script src="<?php echo base_url() . "assets/js/jquery-3.3.1.min.js" ?>"></script>

<script src="<?php echo base_url() . "assets/js/bootstrap.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/chosen.jquery.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/main.js" ?>"></script>
</body>
</html>