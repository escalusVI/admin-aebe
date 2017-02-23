<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<title>admin</title>
</head>
<body>
	
	

	<?php
		if (!isset($_POST['password']))
		{ ?>
			<p>
				Cet espace est résérvé à l'ADMIN</p><br/>Veuillez saisir votre mot de passe
				<form method="POST" action="admin.php">
					<p>
						<input type="password" name="password">
						<input type="submit" value="valider">
					</p>
				</form>
				

			</p>
			
	<?php }
		elseif ($_POST['password'] != "kangourou") {
			?>
			<p>Si vous ne faite pas partie de l'adminisatrtion il est inutile d'essayer de vous connecter</p>
			<a href="admin.php">essayer de nouveau</a><br/>
			<a href="cantine.php">Quitter la page admin</a>
			<?php }

			else{
//base de données
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
							<article class="col-md-7 col--md-offset-1">
				
						<h2 class="col-lg-offset-4">Menu cantine</h2>
						<div class="col-lg-6 col-xs-6 cantine">
							<form method='post'>	
									<h3>Lundi </h3>
									<input type="date" name="jour">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrée" placeholder="entrée"><br>
										
										<h4>plat de resistance</h4>
											<input type="text" name="legumes" placeholder="legumes"><br>
											<input type="text" name="viande" placeholder="viande"><br>
											
										<h4>dessert</h4>
											<input type="text" name="dessert" placeholder="dessert">
											
									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Mardi</h3>
									<input type="date" name="jour">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrée" placeholder="entrée"><br>
										
										<h4>plat de resistance</h4>
											<input type="text" name="legumes" placeholder="legumes"><br>
											<input type="text" name="viande" placeholder="viande"><br>
											
										<h4>dessert</h4>
											<input type="text" name="dessert" placeholder="dessert">
											
									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Jeudi</h3>
									<input type="date" name="jour">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrée" placeholder="entrée"><br>
										
										<h4>plat de resistance</h4>
											<input type="text" name="legumes" placeholder="legumes"><br>
											<input type="text" name="viande" placeholder="viande"><br>
											
										<h4>dessert</h4>
											<input type="text" name="dessert" placeholder="dessert">
											
									</p>
								</div>

								<div class="col-lg-6 col-xs-6 cantine">
									<h3>Vendredi</h3>
									<input type="date" name="jour">
									<p>
										<h4>entrée</h4>
											<input type="text" name="entrée" placeholder="entrée"><br>
										
										<h4>plat de resistance</h4>
											<input type="text" name="legumes" placeholder="legumes"><br>
											<input type="text" name="viande" placeholder="viande"><br>
											
										<h4>dessert</h4>
											<input type="text" name="dessert" placeholder="dessert"><br/>


									</p>
								</div>
								<a href="admin.php"></a><input type="submit" value="valider">
								</p>
							</form>
			</article>
			<?php }
	  
	?>
</body>
</html>