<?php
mb_internal_encoding('UTF-8'); // traitement pour indiquer à php l'utilisation de l'encodage en UTF-8 (màj : ne fonctionne toujours pas...)

// ce fichier reprend dynamiquement le menu en fonction des ajouts de l'admin
echo '
<nav id="menu">
	<ul>
		<li>
			<a href="accueil.php">Présentation</a>
		</li>
		<hr />
	';

		// Connexion à la bdd
		try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','My.1.SQL.');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
		$sql = 'SELECT noms, id FROM categories';
		$req = $bdd -> query($sql);

		$req -> setFetchMode(PDO::FETCH_ASSOC);

			foreach ($req as $u) {
				echo "
				<li>
					<a href='articles.php?id= ".$u['id']."&amp;nom=".$u['noms']."'>".$u['noms']."</a>
				</li>";
			}	
		}
		catch(PDOException $e) {
			echo "Problème de connexion à la base de données :".$e->getMessage();
		die();
		}

echo '
		<hr />
		<li>
			<a href="https://www.alittlemarket.com/boutique/laplokpik-2771637.html">Ma boutique</a>
		</li>
	</ul>
</nav>
';

 ?>

