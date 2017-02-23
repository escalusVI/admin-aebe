<?php

	$jour=$_POST['jour'];
	$entree=$_POST['entrée'];
	$legumes=$_POST['legumes'];
	$viande=$_POST['viande'];
	$dessert=$_POST['dessert'];

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=cantine;charset=utf8', 'root', '');//appelde la base deonnées
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO repas( jour, entree, legumes, viande, dessert) VALUES (:jour, :entree, :legumes, :viande, :dessert)');

	$req->execute(array(
		'jour'=> $jour,
		'entree'=> $entree,
		'legumes'=> $legumes,
		'viande'=> $viande,
		'dessert'=> $dessert
		));
?>

<a href="admin.php">retour sur admin</a>

