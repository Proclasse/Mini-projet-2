<?php
mb_internal_encoding('UTF-8'); // traitement pour indiquer à php l'utilisation de l'encodage en UTF-8

		// Connexion à la bdd
		try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','My.1.SQL.');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
		$sql = 'SELECT * FROM categories';
		$req = $bdd -> query($sql);

		$req -> setFetchMode(PDO::FETCH_OBJ);

			foreach ($req as $u) {
				echo "<div>";
				echo '<div class="pres_cat_prod_id">'.$u->id.'</div>';
				echo '<div class="pres_cat_prod">'.$u->noms.'</div>';
				echo '<div class="pres_cat_prod">'.$u->liens.'</div>';
				echo "</div>";
			}
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
		die();
		}

?>