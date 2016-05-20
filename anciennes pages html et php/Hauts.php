<?php
   include 'head.inc.php'; // bloc head + header du doc html
?>

<div id="container">
	<?php
	include 'menu.inc.php';
	?>
	<section>
		<h1>Les hauts</h1>
	<!-- Connexion à la bdd -->
	<?php 
	
		try {
		$bdd = new PDO('mysql:host=localhost;dbname=mini-projet','root','');
		// gestion du niveau d'erreur
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// requête dans la variable $sql puis injection de la requête dans la base, le tout dans la variable $req
		$sql = 'SELECT categories.liens, produits.nom
					FROM produits
					INNER JOIN categories ON categorie_id = categories.id
					WHERE categories.id = 5';
		$req = $bdd -> query($sql);
		
		
		$req -> setFetchMode(PDO::FETCH_ASSOC);
		
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

	?>
	</section>
</div>
<?php
   include 'footer.inc.php';
?>