<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Signalement</title>

	<style type="text/css">
	
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	.container {
		max-width: 500px;
	}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">
	<header>
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="#">signalement.beta.gouv.fr
			</a>
		</nav>
	</header>
	<div class="container">
			<div class="row">
			<div class="col-md-12">
				<h2>Signaler un truc</h2>
		<form>
			<div class="form-group">
				<label for="place">Lieu du signalement : </label>
				<input class="form-control" id="place" placeholder="Supermarché Toto à Paris">
			</div>
			<div class="form-group">
				<label for="place-type">Quel est la catégorie du lieu ?  </label>
				<select class="form-control form-control-lg" id="place-type">
					<option>Café / Restaurant</option>
					<option>Grand surface / Supérette</option>
					<option>Boulanger / Boucher</option>
					<option>Magasin non alimentaire</option>
				</select>
			</div>
			<div class="form-group">
				<label for="type">Quel est la catégorie du problème avez-vous ?  </label>
				<select class="form-control form-control-lg" id="type">
					<option>Accueil</option>
					<option>Paiement</option>
					<option>Prix</option>
					<option>Produit</option>
					<option>Autre</option>
				</select>
			</div>
			<div class="form-group">
				<label for="type">Quel type de problème avez-vous ?  </label>
				<select class="form-control form-control-lg" id="type">
					<option>Personnel sans coiffe ou gants</option>
					<option>Restaurant sale</option>
					<option>Présence de rat ou d'insecte</option>
					<option>Problème de température (ex: vitrine réfrigérée)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="picture">Ajouter une photo</label>
				<input type="file" class="form-control-file" id="picture">
			</div>
			<div class="form-group">
				<label for="description">Description rapide de votre signalement</label>
				<textarea class="form-control" id="description" rows="3" maxlength="200"></textarea>
			</div>
			<div class="form-group">
				<label for="name">Votre nom et prénom : </label>
				<input class="form-control" id="name" placeholder="Jean Dupont">
			</div>
			<div class="form-group">
				<label for="email">Votre email : </label>
				<input type="email" class="form-control" id="email" placeholder="john@gmail.com">
			</div>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer le signalement</button>
		</form>
</div>
</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>