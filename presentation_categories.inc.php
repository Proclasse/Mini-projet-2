<?php

		// Connexion à la bdd
		try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
		$sql = 'SELECT * FROM categories';
		$req = $bdd -> query($sql);

		$req -> setFetchMode(PDO::FETCH_OBJ);

			foreach ($req as $u) {
				echo "<div>";
				echo '<div class="pres_categories">'.$u->id.'</div>';
				echo '<div class="pres_categories">'.$u->noms.'</div>';
				echo '<div class="pres_categories">'.$u->liens.'</div>';
				echo "</div>";
			}
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
		die();
		}

?>