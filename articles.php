<?php
   include 'head.inc.php'; // bloc head + header du doc html

	echo '<div id="container">';

	include 'menu.inc.php';

	// récupération du nom de la catégorie en s'assurant qu'il ne contient pas de caractères html
	$nom = htmlspecialchars($_GET['nom']);
	
	if (isset($nom)) {
	echo "<section>
					<h1>Les ".$nom."</h1>";
	}
	else {
		$nom = NULL;
	}
		
	// récupération de l'id de la page, on s'assure au passage qu'on a à faire à un entier compris entre 1 et 10
	if (isset($_GET['id'])) {
		if ( $_GET['id'] >= 1 AND $_GET['id'] <= 10 ) {
		$_GET['id'] = (int) $_GET['id'];
		$id = $_GET['id'];
		
			// Connexion à la bdd
			try {
			$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
			// gestion du niveau d'erreur
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
			$sql = 'SELECT categories.liens, produits.nom
						FROM produits
						INNER JOIN categories ON categorie_id = categories.id
						WHERE categories.id = '.$id;
			$req = $bdd -> query($sql);

			$req -> setFetchMode(PDO::FETCH_ASSOC);

				//	affichage des photos
				foreach ($req as $u) {
					echo "
					<img src=".$u['liens'].$u['nom']." />
					";
				}
			}

			catch(PDOException $e) {
				echo "Problème de connexion à la base de données :".$e->getMessage();
			die();
			}
		}
	
	else {
		die();
		echo "404 page not found";
		}
	}
	else {
		$id = NULL;
		}

	echo "	</section>
			</div>";

   include 'footer.inc.php';
 ?>