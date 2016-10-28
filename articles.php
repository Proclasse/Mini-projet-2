<?php
mb_internal_encoding('UTF-8'); // traitement pour indiquer à php l'utilisation de l'encodage en UTF-8

   include 'head.inc.php'; // bloc head + header du doc html
	echo '<div id="container">';

	include 'new_menu.inc.php';

	// récupération du nom de la catégorie en s'assurant qu'il ne contient pas de caractères html
	$nom = htmlspecialchars($_GET['nom']);
	
	$nom = strtolower($nom);
	if (isset($nom)) {
	echo "<section>
					<h1>Les ".$nom."</h1>";
	}
	else {
		$nom = NULL;
	}
		
	// récupération de l'id de la page
	if (isset($_GET['id'])) {
		$_GET['id'] = (int) $_GET['id'];
		$id = $_GET['id'];
		
			// Connexion à la bdd
			try {
			include 'var_co_bdd.inc.php';
			$bdd = new PDO(serveur, user, mdp);
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = 'SELECT categories.liens, produits.chemin, produits.nom, produits.lien_alm
						FROM produits
						INNER JOIN categories ON categorie_id = categories.id
						WHERE categories.id = '.$id;
			$req = $bdd -> query($sql);

			$req -> setFetchMode(PDO::FETCH_ASSOC);

				//	affichage des photos
				foreach ($req as $u) {
					echo "
					<div id='cadre_photos'>
					<img src=".$u['liens'].$u['chemin']." />
					<hr />
					<p><a href=".$u['lien_alm'].">".$u['nom']."</a></p>
					<hr />
					</div>
					";
				}
			} // fin du try
			catch(PDOException $e) {
				echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
			}
		}
	else {
		$id = NULL;
		}

	echo "	</section>
			</div>";

   include 'footer.inc.php';
 ?>